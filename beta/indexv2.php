<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Draggable - Snap to element or grid</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <style>
  .draggable { width: 90px; height: auto; padding: 5px; float: left; margin: 0 10px 10px 0; font-size: .9em;   border: 2px solid transparent; background:transparent; }
  .ui-widget-header p, .ui-widget-content p { margin: 0; }
    #snaptarget { height: 500px; background: url('resources/img/theatre.jpg') no-repeat ;
    background-position: bottom center;
    background-size: 1000px auto; 
  }

  .draggable img { width: 100%; } 

  .draggable:hover { border: 2px solid red; }
  .flip {
       -moz-transform: scaleX(-1);
        -o-transform: scaleX(-1);
        -webkit-transform: scaleX(-1);
        transform: scaleX(-1);
        filter: FlipH;
        -ms-filter: "FlipH";
      }

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


      var newDeg = 0;
      // WHEN CLICKED DRAGGABLE:ID  // Show controls
      $( ".draggable" ).click(function() {

        var thisObj = $(this).attr('id');
        $(".debugger").html(thisObj);
      //   $( "#"+thisObj+" .controls" ).toggle( "slow", function() { });

      });


// *******************************************************  

          $(".rotLeft").click(function(){ 
          //get current of selected
          var thisObj = $(this).closest('div.draggable').attr('id');

          var currentDeg = $(this).attr("value");

          newDeg =  parseInt(currentDeg)+10;
          //alert(currentDeg +"+10=" +newDeg);      
      
          $("#"+thisObj).css('transform','rotate('+newDeg+'deg)'); 
          $(".rotBtn").attr('value', newDeg); 

          

        });  
        // end of rotate left


        // ROTATE RIGHT
         $(".rotRight").click(function(){ 
          //get current of selected
          var thisObj = $(this).closest('div.draggable').attr('id');
          var currentDeg = $(this).attr("value");

          newDeg =  parseInt(currentDeg)-10;
         // alert(currentDeg +"-10=" +newDeg);          
      
          $("#"+thisObj).css('transform','rotate('+newDeg+'deg)'); 
          $(".rotBtn").attr('value', newDeg); 


        });  
        // end of rotate right


// *********************************************************
    



  // do not remove beyond this line 
   });







  </script>
</head>
<body>
 
<div id="snaptarget" class="ui-widget-header">
  <p>I'm the theatre</p>
</div>
 
 <div class="debugger"></div>
<br style="clear:both">
 
<div class="allEqipments" style=" float: right" >
<div id="draggable1" class="draggable ui-widget-content" style="width: 200px;" >
  <img src="resources/img/opTable2.png"  />
  <div class="controls"><button class='rotLeft rotBtn' value='0' ><-</button><button class='rotRight rotBtn' value='0' >-></button></div>
</div>

<div id="draggable2" class="draggable ui-widget-content" style="width: 250px" >
   <img src="resources/img/monitors.png"  />
   <div class="controls"><button class='rotLeft rotBtn' value='0' ><-</button><button class='rotRight rotBtn' value='0' >-></button></div>
</div>

<div id="draggable3" class="draggable ui-widget-content" style="width: 200px" >
  <img src="resources/img/lights.png"/>
  <div class="controls"><button class='rotLeft rotBtn' value='0' ><-</button><button class='rotRight rotBtn' value='0' >-></button></div>
</div>

<div id="draggable4" class="draggable ui-widget-content" style="width:250px">
  <img src="resources/img/anesthesia.png"  />
  <div class="controls"><button class='rotLeft rotBtn' value='0' ><-</button><button class='rotRight rotBtn' value='0' >-></button></div>
</div>

<div id="draggable5" class="draggable ui-widget-content" style="width:130px">
  <img src="resources/img/anesthesia_cart.png"  />
  <div class="controls"><button class='rotLeft rotBtn' value='0' ><-</button><button class='rotRight rotBtn' value='0' >-></button></div>
</div>


</div>

 <div id="start">Waiting for dragging the image get started...</div>
<div id="stop">Waiting image getting dropped...</div>



 
</body>
</html>