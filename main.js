$(document).ready(function(){
    $('.toggle-menu').click(function(){
        $(this).toggleClass('active')
        $('#mobile-nav-menu').toggleClass('active')
        $('body').toggleClass('overflow-hidden')
    })
})