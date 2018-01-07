$( function() {
  $( "#draggable" ).draggable();
  $( "#droppable" ).droppable({
        drop: function( event, ui ) {
          $("h1").html("<a href=\"#\">You are In</a>");
        }
      });
} );

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
    });
$.noConflict();