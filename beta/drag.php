<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Draggable - Snap to element or grid</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>


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
        // $(".debugger").html(thisObj);
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
   <div class="container">
     <div class="row">
        <div class="col-3"></div>
        <div class="col-9">
            <div id="snaptarget" class="ui-widget-header"></div>
        </div>
     </div>
   
   </div>


 
<div class="debugger"></div>
<br style="clear:both">
 
<div class="allEqipments" style=" float: right" >
<div id="draggable1" class="draggable ui-widget-content" style="width: 250px;" >
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