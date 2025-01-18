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
    // CHECK IF CURRENT URL IS /LOGIN//
    //***************************//
    if (window.location.pathname.endsWith('/login')) {
        // Hide the navbar
        console.log(window.location.pathname)
        $('.navbar').hide();
    }
});
