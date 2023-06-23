$(document).ready(function() {
    $('.accordion-header').click(function() {
        $(this).toggleClass('active collapsed');
        $(this).next('.accordion-content').slideToggle(200);
    });
});