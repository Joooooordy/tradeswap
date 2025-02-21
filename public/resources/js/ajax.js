$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    // Function to handle form submission for login/registering
    function handleFormSubmission(form) {
        event.preventDefault(); // Prevent default form submission

        const formData = $(form).serialize(); // Serialize form data
        const submitButton = $(form).find("button[type='submit']"); // Get submit button
        const originalButtonText = submitButton.html(); // Store original button text

        // Determine button text based on form ID or action
        const actionText = $(form).attr('id') === "login-form" ? "Logging in" : "Registering";

        // Add spinner after the text and disable button
        submitButton.html(actionText + ' <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>').prop("disabled", true);

        $.ajax({
            url: $(form).attr('action'),
            method: $(form).attr('method'),
            data: formData,
            success: function (response) {
                window.location.href = response.redirect;
            },
            error: function (xhr) {
                if (xhr.responseJSON && xhr.responseJSON.errors) {
                    const errors = xhr.responseJSON.errors;
                    let errorList = '';

                    $.each(errors, function (key, value) {
                        errorList += '<li>' + value + '</li>';
                    });

                    $('#errorMessages').html(errorList);
                    $('#errorAlert').fadeIn();

                    setTimeout(function () {
                        $('#errorAlert').fadeOut();
                    }, 5000);
                } else {
                    $('#errorMessages').html('<li>An unexpected error occurred.</li>');
                    $('#errorAlert').fadeIn();
                }
            },
            complete: function () {
                // Restore original button text and enable button
                submitButton.html(originalButtonText).prop("disabled", false);
            }
        });
    }

    // Bind form submission to the handler
    $('#register-form, #login-form').on('submit', function (event) {
        handleFormSubmission(this);
    });



    // Search bar
    const predictiveSearchUrl = "/search/predictive";

    $('#search-input').on('keyup', function () {
        let query = $(this).val();
        if (query.length > 0) {
            $.ajax({
                url: predictiveSearchUrl,
                method: 'GET',
                data: {query: query},
                success: function (data) {
                    $('#suggestions').empty().show();
                    if (data.length > 0) {
                        data.forEach(item => {
                            $('#suggestions').append(`<div>${item.item_name}</div>`);
                        });
                    } else {
                        $('#suggestions').append('<div>No results</div>');
                    }
                }
            });
        } else {
            $('#suggestions').hide();
        }
    });

    // Select suggestion on click
    $(document).on('click', '.suggestions-list div', function () {
        $('#search-input').val($(this).text());
        $('#suggestions').hide();
    });

    // Hide suggestions when clicking outside
    $(document).click(function (event) {
        if (!$(event.target).closest('#search-form').length) {
            $('#suggestions').hide();
        }
    });

    // //Trade page
    // $('#receiver_id').change(function () {
    //     let userId = $(this).val(); // Get the selected user ID
    //
    //     // Make an AJAX call to get items for the selected user
    //     $.ajax({
    //         url: '/items/items/' + userId, // Ensure this URL matches your route
    //         type: 'GET',
    //         success: function (data) {
    //             let itemsSelect = $('#receiver_item_id');
    //             itemsSelect.empty(); // Clear current options
    //             itemsSelect.append('<option value="">No item</option>'); // Default option
    //
    //             // Append new options
    //             $.each(data.items, function (index, item) {
    //                 itemsSelect.append('<option value="' + item.id + '">' + item.item_name + '</option>');
    //             });
    //         },
    //         error: function (xhr) {
    //             console.error(xhr.responseText); // Handle errors if needed
    //         }
    //     });
    // });
    //
    // // success or fail submitting items request
    // $('.items-form').on('submit', function (event) {
    //     event.preventDefault(); // Prevent the default form submission
    //
    //     // Get form data
    //     let formData = $(this).serialize(); // Serialize the form data
    //
    //     // Make AJAX call to create the items
    //     $.ajax({
    //         url: $(this).attr('action'), // The form's action attribute
    //         type: 'POST',
    //         data: formData,
    //         success: function (response) {
    //             // Show success alert
    //             Swal.fire({
    //                 icon: 'success',
    //                 title: 'Success!',
    //                 text: response.message,
    //                 confirmButtonText: 'OK'
    //             }).then((result) => {
    //                 if (result.isConfirmed) {
    //                     // Redirect to profile page
    //                     window.location.href = response.redirect_url;
    //                 }
    //             });
    //         },
    //         error: function (xhr) {
    //             // Show error alert
    //             let errorMessage = xhr.responseJSON?.error || 'An error occurred.';
    //             Swal.fire({
    //                 icon: 'error',
    //                 title: 'Error!',
    //                 text: errorMessage,
    //                 confirmButtonText: 'OK'
    //             });
    //         }
    //     });
    // });
    //
    // // Actual trading here
    // $('.items-action').on('click', function (event) {
    //     event.preventDefault(); // Prevent default link behavior
    //
    //     const url = $(this).data('href');
    //
    //     $.ajax({
    //         url: url,
    //         type: 'POST',
    //         success: function (response) {
    //             Swal.fire({
    //                 title: 'Success!',
    //                 text: response.message,
    //                 icon: 'success',
    //                 confirmButtonText: 'OK'
    //             }).then(() => {
    //                 location.reload(); // Reload after user clicks 'OK'
    //             });
    //         },
    //         error: function (xhr) {
    //             console.error("Error details:", xhr.responseText);
    //             Swal.fire({
    //                 title: `Error ${xhr.status}`,
    //                 text: xhr.responseText || 'An error occurred. Please try again.',
    //                 icon: 'error',
    //                 confirmButtonText: 'OK'
    //             });
    //         }
    //     });
    // });

    //logout functionality
    $('#logout-link').on('click', function(event) {
        event.preventDefault();  // Prevent default link behavior

        // Perform AJAX POST request to logout immediately
        $.ajax({
            url: $(this).data('logout-url'),
            method: 'POST',
            success: function(response) {
                // Show success message and redirect
                Swal.fire({
                    title: 'Logged out!',
                    text: 'You have been logged out successfully.',
                    icon: 'success',
                    timer: 2000, // Auto-close after 2 seconds
                    showConfirmButton: false
                }).then(() => {
                    window.location.href = $('#logout-link').data('home-url');
                });
            },
            error: function(xhr, status, error) {
                // Show error message if logout fails
                Swal.fire(
                    'Error!',
                    'There was an issue logging you out.',
                    'error'
                );
            }
        });
    });
});
