$( function() {
  $( "#draggable" ).draggable();
  $( "#droppable" ).droppable({
        drop: function( event, ui ) {
          // $( this )
          //   .addClass( "ui-state-highlight" )
          //   .find( "p" )
          //     .html( "Dropped!" );
          $("h1").html("<a href=\"#\">You are In</a>");
        }
      });
} );