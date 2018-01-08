
// $(function(){
// $("#droppable").droppable({
//     drop: function( event, ui ) {
//         $("h1").html("<a href=\"#\">You are In</a>");
//     }
// });

// project navigation
$(".proj-nav li a").click(function() {
    // $(this).parent().find('a').removeClass('active');
    $(".proj-nav li a").removeClass('active');
    $(this).addClass('active');
});

 $(window).scroll(function(){
    $(".proj-target").each(function() {
        if(($(window).scrollTop()+25) >= $(this).offset().top) {
            // console.log("$(window).scrollTop(): " + $(window).scrollTop());
            // console.log("$(this).offset().top: " + $(this).offset().top);
            var id = $(this).attr('id');
            $('.proj-nav li a').removeClass('active');
            $('.proj-nav li a[href="#'+ id +'"]').addClass('active');
        }
    });

});

// end project navigation

$(function($){
    var addToAll = false;
    var gallery = true;
    var titlePosition = 'inside';
    $(addToAll ? 'img' : 'img.fancybox').each(function(){
        var $this = $(this);
        var title = $this.attr('title');
        var src = $this.attr('data-big') || $this.attr('src');
        var a = $('<a href="#" class="fancybox"></a>').attr('href', src).attr('title', title);
        $this.wrap(a);
    });
    if (gallery)
        $('a.fancybox').attr('rel', 'fancyboxgallery');
    $('a.fancybox').fancybox({
        titlePosition: titlePosition
    });

    $(".mag-img-container a").fancybox({ 
        // animationEffect : 'fade'
        }).attr('data-fancybox', 'image');

    $(".draggable").draggable();
});


// $.noConflict();
