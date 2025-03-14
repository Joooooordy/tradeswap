$(document).ready(function () {
    // ***************************//
    // TOGGLE ACTIVE STATE ON <A/>//
    //***************************//

    // Get the current path from the browser's location
    const currentPath = window.location.pathname;

    // Find all links in the menu
    $('.menu a, .login-page a, .logout-menu').each(function () {
        if (currentPath.startsWith('/users/')) {
            $('.logout-menu #account').addClass('active');
        }
        if ($(this).attr('href') === currentPath) {
            $(this).addClass('active');
        } else {
            $(this).removeClass('active');
        }
    });

    // ***************************//
    // DROPDOWN MENU ACCOUNT//
    //***************************//
    $(".material-symbols-outlined").on("click", function () {
        $(this).siblings(".dropdown-content").toggle();
    });

    // Close dropdown if clicking outside of it
    $(document).on("click", function (event) {
        if (!$(event.target).closest('.logout-menu').length) {
            $(".dropdown-content").hide();
        }
    });

    // ***************************//
    // CHECK IF CURRENT URL IS /LOGIN OR /REGISTER//
    //***************************//
    if (window.location.pathname.endsWith('/login') || window.location.pathname.endsWith('/register')) {
        // Hide the navbar
        $('.navbar').hide();
    }

    // ***************************//
    // PASSWORD VALIDATION
    //***************************//
    const $passwordInput = $('#password');
    const $contentPass = $('.content-pass');
    const $registerBox = $('.register');
    const $button = $('.register-submit'); // Replace '#yourButton' with the actual ID or class of your button
    const $form = $('#register-form'); // Assuming the form has an ID of 'register-form'

    let isContentVisible = false;

// Password input event to show/hide content-pass and expand/shrink register box
    $passwordInput.on('input', function () {
        const inputVal = $(this).val();

        if (inputVal.length > 0 && !isContentVisible) {
            $registerBox.addClass('expanded');

            // Fade in content-pass after a short delay
            setTimeout(() => {
                $contentPass.fadeIn(300);
            }, 100); // Adjust delay (ms) to match the transition speed if necessary

            isContentVisible = true;
        } else if (inputVal.length === 0 && isContentVisible) {
            // Fade out content-pass first
            $contentPass.fadeOut(300, () => {
                // Then shrink the box
                $registerBox.removeClass('expanded');
            });

            isContentVisible = false;
        }
    });

// Button click event to hide content-pass and shrink register box, then submit the form
    $button.on('click', function (event) {
        event.preventDefault(); // Prevent form submission for now

        // Fade out the content-pass first
        $contentPass.fadeOut(300, function () {
            // Then shrink the register box
            $registerBox.removeClass('expanded');
        });

        isContentVisible = false; // Update visibility state

        // Delay form submission until the animations are done
        setTimeout(function() {
            // Submit the form after animations complete
            $form.submit(); // Submit the form (regular submission or AJAX)
        }, 100); // Match this time with the duration of your fade-out animation (300ms)
    });


    // Select elements
    const passwordInput = document.querySelector("#password");
    const confirmPasswordInput = document.querySelector("[name='password_confirmation']");
    const eyeIcon = document.querySelector("#password-i");
    const eyeIcon2 = document.querySelector("#passwordconf-i");
    const requirementList = document.querySelectorAll(".requirement-list li");

// Password requirements
    const requirements = [
        {regex: /.{8,}/, index: 0},         // Minimum of 8 characters
        {regex: /[0-9]/, index: 1},         // At least one number
        {regex: /[a-z]/, index: 2},         // At least one lowercase letter
        {regex: /[^A-Za-z0-9]/, index: 3},  // At least one special character
        {regex: /[A-Z]/, index: 4},         // At least one uppercase letter
    ];

// Live password validation
    passwordInput.addEventListener("keyup", (e) => {
        requirements.forEach(item => {
            const isValid = item.regex.test(e.target.value);
            const requirementItem = requirementList[item.index];

            if (isValid) {
                requirementItem.classList.add("valid");
                requirementItem.firstElementChild.className = "fa-solid fa-check";
            } else {
                requirementItem.classList.remove("valid");
                requirementItem.firstElementChild.className = "fa-solid fa-circle";
            }
        });
    });

// Toggle function for both fields and icons
    const togglePasswordVisibility = () => {
        // Check the current state of the first password field
        const isPasswordHidden = passwordInput.type === "password";

        // Toggle both input types
        passwordInput.type = isPasswordHidden ? "text" : "password";
        confirmPasswordInput.type = isPasswordHidden ? "text" : "password";

        // Toggle both icons
        const iconClass = `fa-solid fa-eye${isPasswordHidden ? "-slash" : ""}`;
        eyeIcon.className = iconClass;
        eyeIcon2.className = iconClass;
    };

// Add event listeners to both icons
    eyeIcon.addEventListener("click", togglePasswordVisibility);
    eyeIcon2.addEventListener("click", togglePasswordVisibility);

});

