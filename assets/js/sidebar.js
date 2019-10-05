$(document).ready(function () {

    $('#dismiss, .overlay').on('click', function () {
        // hide sidebar
        $('#sidebar').addClass('active');
    });

    $('#sidebarCollapse').on('click', function () {
        // open sidebar
        $('#sidebar').removeClass('active');
        // fade in the overlay
        $('.collapse.in').toggleClass('in');
        $('a[aria-expanded=true]').attr('aria-expanded', 'false');
    });
});