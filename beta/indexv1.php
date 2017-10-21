<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Draggable - Snap to element or grid</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <style>
  .draggable { width: 90px; height: 80px; padding: 5px; float: left; margin: 0 10px 10px 0; font-size: .9em; border: none; background:transparent; }
  .ui-widget-header p, .ui-widget-content p { margin: 0; }
  #snaptarget { height: 540px; background: url('resources/img/theatre.jpg') no-repeat ; background-size: 1000px auto;  }
  </style>



  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  

  <script>

  $( function() {

    $( ".draggable" ).draggable({ snap: ".ui-widget-header", snapMode: "outer" });


      $(".draggable").draggable({

          // Find original position of dragged image.
          start: function(event, ui) {

              // Show start dragged position of image.
              var Startpos = $(this).position();
              $("div#start").text("START: \nLeft: "+ Startpos.left + "\nTop: " + Startpos.top);
          },

          // Find position where image is dropped.
          stop: function(event, ui) {
              // Show dropped position.
              var Stoppos = $(this).position();
              $("div#stop").text("STOP: \nLeft: "+ Stoppos.left + "\nTop: " + Stoppos.top);
          }
      }); // end of drag


      // when clicked

      $(".draggable").click(function(){
         $(".draggable .controls").html("<button value='10deg'>rotate left</button>");

         $(this).css('border', '2px solid red');
         
         
         $(this).css('transform','rotate(10deg)');  
      });


  } );





  </script>
</head>
<body>
 
<div id="snaptarget" class="ui-widget-header">
  <p>I'm the theatre</p>
</div>
 
<br style="clear:both">
 
 <div class="" style=" float: right" >
<div id="draggable3" class="draggable ui-widget-content" style="width: 200px; height: auto">
  <img src="resources/img/opTable2.png" width="100%" />
  <div class="controls"></div>
</div>

<div id="draggable6" class="draggable ui-widget-content" style="width: 250px" >
   <img src="resources/img/monitors.png" width="100%" />
</div>

<div id="draggable3" class="draggable ui-widget-content" style="background: black">
  <p>3</p>
</div>

<div id="draggable6" class="draggable ui-widget-content" style="background:red">
  <p>4</p>
</div>

</div>

 <div id="start">Waiting for dragging the image get started...</div>
<div id="stop">Waiting image getting dropped...</div>



 
</body>
</html>