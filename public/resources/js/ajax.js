$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

// jQuery AJAX form submission with validation
    function handleFormSubmission(form) {

        const $form = $(form);
        const formData = $form.serialize();
        const submitButton = $form.find("button[type='submit']");
        const originalButtonText = submitButton.html();
        const $registerBox = $('.register');

        const actionText = $form.attr('id') === "login-form" ? "Logging in" : "Registering";

        // Proceed with AJAX submission
        submitButton.html(actionText + ' <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>').prop("disabled", true);

        $.ajax({
            url: $form.attr('action'),
            method: $form.attr('method'),
            data: formData,
            success: function (response) {
                Swal.fire({
                    title: 'Success!',
                    text: 'You have been registered successfully!',
                    icon: 'success',
                    showConfirmButton: false,  // Hide the OK button
                    timer: 2000               // Set the time (in milliseconds) before auto-closing the alert
                }).then(function () {
                    // Redirect after the SweetAlert2 modal closes
                    window.location.href = response.redirect;
                });
            },
            error: function (xhr) {
                if (xhr.status === 422) {
                    const errors = xhr.responseJSON.errors;

                    $.each(errors, function (field, messages) {
                        const fieldElement = $form.find(`[name="${field}"]`);
                        const textboxElement = fieldElement.closest('.textbox');

                        // Remove previous error messages for the current field
                        textboxElement.siblings(".error-message-" + field).remove();

                        // Add new error messages if any
                        messages.forEach(function (message) {
                            textboxElement.after(`<div class="error-message error-message-${field}">${message}</div>`);
                        });

                        // Add the expanded-error class to increase box height initially
                        $registerBox.addClass('expanded-error');

                        // Add an event listener to remove error messages and adjust height when typing starts
                        fieldElement.on('input', function () {
                            // Remove the error message for this field
                            $(this).closest('.textbox').siblings(".error-message-" + field).remove();

                            // After removing the error, check how many error messages remain
                            updateRegisterBoxHeight(); // Function to update box height
                        });

                        // Add a listener for when an error message is added back
                        fieldElement.on('focus', function () {
                            // When the field gets focus again, check how many error messages are present
                            updateRegisterBoxHeight(); // Function to update box height
                        });
                    });

                    // Ensure that after submitting, the box height is correctly adjusted
                    updateRegisterBoxHeight();
                } else {
                    // Handle other errors (e.g., network errors)
                    $('#errorMessages').html('<li>An unexpected error occurred.</li>');
                    $('#errorAlert').fadeIn();
                }
            },
            complete: function () {
                submitButton.html(originalButtonText).prop("disabled", false);
            }
        });
    }

// Bind form submission to the handler
    $('#register-form, #login-form').on('submit', function (event) {
        event.preventDefault();
        handleFormSubmission(this);
    });

    function updateRegisterBoxHeight() {
        const remainingErrors = $('.error-message').length;
        const $registerBox = $('.register');
        const heightPerError = 30;
        const baseHeight = 700;

        // Update height based on remaining errors
        const newHeight = baseHeight + remainingErrors * heightPerError;
        $registerBox.css('height', newHeight + 'px');

        // If no errors are left, remove the expanded-error class
        if (remainingErrors === 0) {
            $registerBox.removeClass('expanded-error');
        } else {
            $registerBox.addClass('expanded-error');
        }
    }


    // Search bar
    const predictiveSearchUrl = "/search/predictive";
    let searchTimeout; // Debounce timeout

    $('#search-input').on('keyup', function () {
        clearTimeout(searchTimeout); // Clear previous timeout

        let query = $(this).val().trim();
        if (query.length > 0) {
            searchTimeout = setTimeout(() => {
                $.ajax({
                    url: predictiveSearchUrl,
                    method: 'GET',
                    data: {query: query},
                    success: function (data) {
                        $('#suggestions').empty().show();
                        if (data.length > 0) {
                            data.forEach(item => {
                                $('#suggestions').append(`<div class="suggestion-item">${item.item_name}</div>`);
                            });
                        } else {
                            $('#suggestions').append('<div class="no-results">No results found</div>');
                        }
                    },
                    error: function () {
                        $('#suggestions').empty().append('<div class="error">Error fetching results</div>');
                    }
                });
            }, 300); // Wait 300ms after typing stops
        } else {
            $('#suggestions').hide();
        }
    });

    // Select suggestion on click
    $(document).on('click', '.suggestion-item', function () {
        $('#search-input').val($(this).text());
        $('#suggestions').hide();
    });

    // Hide suggestions when clicking outside
    $(document).click(function (event) {
        if (!$(event.target).closest('#search-form').length) {
            $('#suggestions').hide();
        }
    });

    // Cart
    $(".add-to-cart").click(function (e) {
        e.preventDefault();

        let productId = $(this).data("id");

        // Check if we're on the cart page
        if (window.location.pathname === '/cart') {
            // If on the cart page, do the AJAX call but skip the SweetAlert
            $.ajax({
                url: "/cart/add-to-cart/" + productId,
                type: "GET",
                dataType: "json",
                success: function (response) {
                    if (response.success) {
                        $("#cart-count").text(response.cart_count);
                        window.location.reload()
                    }
                },
                error: function (xhr) {
                    console.error(xhr.responseText);
                }
            });
        } else {
            // If not on the cart page, show SweetAlert
            $.ajax({
                url: "/cart/add-to-cart/" + productId,
                type: "GET",
                dataType: "json",
                success: function (response) {
                    if (response.success) {
                        Swal.fire({
                            title: "Item added to cart",
                            html: `
                            <strong>${response.cart_item.name}</strong> <br>
                            <small>Sold by: <b>${response.cart_item.user}</b></small>
                        `,
                            imageUrl: response.cart_item.image,
                            imageWidth: 150,
                            imageHeight: 150,
                            imageAlt: "Product image",
                            icon: "success",
                            showConfirmButton: true,
                            confirmButtonText: 'Go to Cart',
                            showCancelButton: true,
                            cancelButtonText: 'Continue Shopping',
                            reverseButtons: true, // Optional to reverse the order of buttons
                        }).then((result) => {
                            if (result.isConfirmed) {
                                // Redirect to the cart page if user clicks 'Go to Cart'
                                window.location.href = "/cart";
                            }
                        });

                        $("#cart-count").text(response.cart_count);
                    }
                },
                error: function (xhr) {
                    console.error(xhr.responseText);
                }
            });
        }
    });

    $(".add-to-list").click(function (e) {
        e.preventDefault();

        let productId = $(this).data("id");

        $.ajax({
            url: "/lists/add-to-list/" + productId,
            type: "GET",
            dataType: "json",
            success: function (response) {
                console.log(response)
                if (response.success) {
                    Swal.fire({
                        title: "Item added to wishlist",
                        html: `
                        <strong>${response.list_item.name}</strong> <br>
                        <small>Sold by: <b>${response.list_item.user}</b></small>
                    `,
                        imageUrl: response.list_item.image,
                        imageWidth: 150,
                        imageHeight: 150,
                        imageAlt: "Product image",
                        icon: "success",
                        showConfirmButton: true,
                        confirmButtonText: "Go to wishlist",
                        showCancelButton: true,
                        cancelButtonText: "Continue Shopping",
                        reverseButtons: true,
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = "lists/overview-lists"; // Redirect to wishlist instead of cart
                        }
                    });

                    $("#wishlist-count").text(response.list_count); // Update wishlist count if applicable
                }
            },
            error: function (xhr) {
                if (xhr.status === 401) {
                    Swal.fire({
                        title: "Unauthorized!",
                        text: "You must be logged in to add items to your wishlist.",
                        icon: "warning",
                        showConfirmButton: true,
                        confirmButtonText: "Login",
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = "/login";
                        }
                    });
                } else {
                    console.error(xhr.responseText);
                }
            }
        });
    });

    $(".remove-from-list").click(function (e) {
        e.preventDefault(); // Corrected event.preventDefault() syntax

        const ele = $(this);

        // Get the product name (you can adjust the selector depending on your HTML structure)
        const productName = ele.parents("item").find("td[data-th='Product']").find("h4").text().trim();
        let productId = $(this).data("id");

        // Use SweetAlert instead of native confirm
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, remove it!',
            cancelButtonText: 'Cancel',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: '/lists/remove-from-list/' + productId,
                    method: "DELETE",
                    data: {
                        id: ele.parents("tr").attr("data-id")
                    },
                    success: function (response) {
                        // SweetAlert for successful removal
                        Swal.fire({
                            icon: 'success',
                            title: 'Removed!',
                            text: `${productName} has been removed from the cart.`,
                            showConfirmButton: false,
                            timer: 1500 // Auto-close after 1.5 seconds
                        }).then(() => {
                            // Reload the page or update the cart dynamically (optional)
                            window.location.reload(); // Refresh the page
                        });
                    }
                });
            }
        });
    });

    $('#save-wishlist-name').on('click', function () {
        let newName = $('#modal-wishlist-name').val().trim();
        let wishlistId = $('#edit-wishlist-name').data('id');

        if (newName === '') {
            alert('Name cannot be empty!');
            return;
        }

        $.ajax({
            url: '/lists/update-name/' + wishlistId,
            method: 'POST',
            data: {
                _token: $('meta[name="csrf-token"]').attr('content'),
                name: newName,
            },
            success: function (response) {
                $('#wishlist-name-text').text(newName);
                $('#editModal').fadeOut();

                Swal.fire({
                    icon: 'success',
                    title: 'Wishlist Updated!',
                    text: 'Your wishlist name has been updated successfully.',
                    timer: 1500,
                    showConfirmButton: false
                });
            },
            error: function () {
                Swal.fire({
                    icon: 'error',
                    title: 'Update Failed',
                    text: 'There was a problem updating your wishlist name. Please try again.',
                    confirmButtonText: 'OK'
                });
            }
        })
    });

    // Copy shareable link
    $(".btn-copy-link").click(function () {
        const wishlistId = $(this).data("id");
        const url = `${window.location.origin}/lists/wishlist/${wishlistId}?view=public`;

        navigator.clipboard.writeText(url).then(() => {
            Swal.fire("Copied!", "Wishlist link copied to clipboard.", "success");
        });
    });


    $(".update-cart").change(function (e) {
        e.preventDefault(); // Prevent default action

        const ele = $(this);
        const quantity = ele.val(); // Get the new quantity
        const productName = ele.parents("tr").find("h4.nomargin").text(); // Get product name
        const productId = ele.parents("tr").attr("data-id");

        $.ajax({
            url: '/cart/update-cart',
            method: "patch",
            data: {
                id: productId,
                quantity: quantity
            },
            success: function (response) {
                Swal.fire({
                    icon: 'success',
                    title: 'Cart updated!',
                    text: `${productName} is updated to ${quantity}.`,
                    showConfirmButton: false,
                    timer: 1500 // Auto-close after 1.5 seconds
                }).then(() => {
                    // After SweetAlert closes, update the subtotal
                    let price = parseFloat(ele.parents("tr").find("td[data-th='Price']").text().replace('€ ', ''));
                    let newSubtotal = (price * quantity).toFixed(2);
                    ele.parents("tr").find("td[data-th='Subtotal']").text(`€ ${newSubtotal}`);

                    // Update the quantity in the cart summary
                    let quantityText = ele.val();
                    ele.parents("tr").find("td[data-th='Quantity'] small").text(`(${quantityText})`);

                    // Update total dynamically after SweetAlert closes
                    updateCartTotal();
                });
            }
        });
    });

// Function to recalculate the cart total dynamically
    function updateCartTotal() {
        let total = 0;
        let totalItems = 0;

        $('#cart tbody tr').each(function () {
            // Get price from the table, removing any non-numeric characters like '€' or spaces
            const priceText = $(this).find('td[data-th="Price"]').text().replace('€', '').trim();
            const price = parseFloat(priceText);

            // Get quantity from the select dropdown
            const quantity = parseInt($(this).find('select.update-cart').val());

            // Check if price and quantity are valid numbers
            if (!isNaN(price) && !isNaN(quantity)) {
                total += price * quantity;  // Add to the total price
                totalItems += quantity;     // Add to the total number of items
            } else {
                console.error('Invalid price or quantity', price, quantity);
            }
        });

        // Update the displayed total
        $('#cart-total').text('€ ' + total.toFixed(2));           // Update the total cart price
        $('#total-items').html(`Items (<small>${totalItems}</small>)`); // Update the total item count
        $('#cart-total-items').text('€ ' + total.toFixed(2));      // Update the total in the summary
    }


    $(".remove-from-cart").click(function (e) {
        e.preventDefault(); // Corrected event.preventDefault() syntax

        const ele = $(this);

        // Get the product name (you can adjust the selector depending on your HTML structure)
        const productName = ele.parents("tr").find("td[data-th='Product']").find("h4").text().trim();

        // Use SweetAlert instead of native confirm
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, remove it!',
            cancelButtonText: 'Cancel',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: '/cart/remove-from-cart',
                    method: "DELETE",
                    data: {
                        id: ele.parents("tr").attr("data-id")
                    },
                    success: function (response) {
                        // SweetAlert for successful removal
                        Swal.fire({
                            icon: 'success',
                            title: 'Removed!',
                            text: `${productName} has been removed from the cart.`,
                            showConfirmButton: false,
                            timer: 1500 // Auto-close after 1.5 seconds
                        }).then(() => {
                            // Reload the page or update the cart dynamically (optional)
                            window.location.reload(); // Refresh the page
                        });
                    }
                });
            }
        });
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
    $('#logout-link').on('click', function (event) {
        event.preventDefault();  // Prevent default link behavior

        // Perform AJAX POST request to logout immediately
        $.ajax({
            url: $(this).data('logout-url'),
            method: 'POST',
            success: function (response) {
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
            error: function (xhr, status, error) {
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
