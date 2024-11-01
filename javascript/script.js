// SideBar
$(document).ready(function(){
    // Jquery for toggle sub menus
    $('.sub-btn').click(function(){
        $(this).next('.sub-menu').slideToggle();
        $(this).find('.dropdown').toggleClass('rotate');
    });

    // Jquery for Opening the Sidebar
    $('.open-btn').click(function(){
        $('.side-bar').addClass('active');
        $('.open-btn').css('visibility','hidden');
    });
    
    // Jquery for Closing the Sidebar
    $('.close-btn').click(function(){
        $('.side-bar').removeClass('active');
        $('.open-btn').css('visibility','visible');
    });
});
// SideBar