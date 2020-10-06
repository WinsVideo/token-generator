<!DOCTYPE html>
<html>
<head>
   <meta charset=utf-8 />
   <title>WinsVideo</title>
   <link href="https://unpkg.com/video.js@7.5.4/dist/video-js.css" rel="stylesheet">
   <script src="https://unpkg.com/video.js@7.5.4/dist/video.js"></script>
   <link href="https://unpkg.com/@silvermine/videojs-quality-selector/dist/css/quality-selector.css" rel="stylesheet">
   <script src="https://unpkg.com/@silvermine/videojs-quality-selector/dist/js/silvermine-videojs-quality-selector.min.js"></script>

   <link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">
</head>

<style>

   body {
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
   }

   a { color:lightblue } /* Globally */

   /* Each state */

   a:visited { text-decoration: none; color:lightblue; }
   a:hover { text-decoration: none; color:blue; }
   a:focus { text-decoration: none; color:lightblue; }
   a:hover, a:active { text-decoration: none; color:blue }

   .header {

      font-family: 'Secular One', sans-serif;

      padding-left: 10px;

      width: 100%; 

      height: 65px; 
      
   }

   .navbar {
      padding-left: 20px;

     overflow: hidden;
     
     /* IE10 Consumer Preview */ 
      background-image: -ms-linear-gradient(top, #ddd 0%, #fff 100%);

      /* Mozilla Firefox */ 
      background-image: -moz-linear-gradient(top, #ddd 0%, #fff 100%);

      /* Opera */ 
      background-image: -o-linear-gradient(top, #ddd 0%, #fff 100%);

      /* Webkit (Safari/Chrome 10) */ 
      background-image: -webkit-gradient(linear, left top, left top, color-stop(0, #fff), color-stop(1, #ddd));

      /* Webkit (Chrome 11+) */ 
      background-image: -webkit-linear-gradient(top, #ddd 0%, #fff 100%);

      /* W3C Markup, IE10 Release Preview */ 
      background-image: linear-gradient(to top, #ddd 0%, #fff 100%);

     width: 100%;

     position: -webkit-sticky;
	  position: sticky;
	  top: 0px;
	  z-index: 99999;
   }

   .logo {
     padding-top: 35px;
     padding-bottom: 35px;
     margin-left: 40px;
   }

   .items {
      float: right;
      padding-right: 20px;
   }

   .navbar a {
      margin-left: 5px; 
      text-decoration: none;
      font-size: 10px;
   }

   /*
   .navbar a {
     float: left;
     display: block;
     color: black;
     text-align: center;
     padding: 22px 16px;
     text-decoration: none;
     font-size: 17px;
   }

   */

   /*
   .navbar a:hover {

      background-image: -ms-linear-gradient(top, #ddd 0%, #fff 100%);

 
      background-image: -moz-linear-gradient(top, #ddd 0%, #fff 100%);

      background-image: -o-linear-gradient(top, #ddd 0%, #fff 100%);

  
      background-image: -webkit-gradient(linear, left top, left top, color-stop(0, #fff), color-stop(1, #ddd));


      background-image: -webkit-linear-gradient(top, #ddd 0%, #fff 100%);

    
      background-image: linear-gradient(to top, #ddd 0%, #fff 100%);
     color: black;
   }

   */

   .profile {
      margin-top: 13px;
      margin-right: 50px;
      border-radius: 2px;
      border-color: lightgray;
      border-width: 2px;
      border-style: solid;
      padding: 15px 23px 40px 23px;
      background-color: #F0F8FF;
   }

   br {
      margin: 0;
   }


    .iconDetails {
      margin-left:2%;
      float:left; 
      height:50px;
      width:50px; 
      } 

      h4 {
          margin:0px;
      }

      .content {
      	margin-top: 20px;
      	background-color: #f7f7f7;
      	margin-left: 20px;
      	margin-right: 20px;
      	padding: 20px;
      	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      }
</style>
<body>

   <div class="navbar">
      <span class="logo" style="float: left; color: black; font-family: 'Secular One', sans-serif; font-size: 30px;">WinsVideo</span>

      <div class="items">
        <div class="profile">
            
               <img src='https://cdn.vox-cdn.com/thumbor/BvF4-A17qKplYdCKdC5oXBcV5Co=/0x0:488x556/1200x800/filters:focal(205x239:283x317):no_upscale()/cdn.vox-cdn.com/uploads/chorus_image/image/57849815/jumprope.0.gif' class='iconDetails'>
            
            <div style='margin-left:60px;'>
               <h4>Win's Dominoes<a href="#account">account |</a><a href="#profile">profile |</a><a href="#help">help |</a><a href="#signout">sign out</a></h4>
                  <div style="font-size:.9em;float:left;">100,000 subscribers</div>
                  <div style="font-size:.6em">&nbsp;</div>
            </div>
      </div>

   		</div>
	</div>

	<div class="content">
		Recommended

		<br>


	</div>

	<div class="content">
		Featured

		<br>
	</div>

	<div class="content">
		<?php 

	echo "<b>sha512 generator</b> <br>"; 
	$token = hash('sha512', rand());

	echo $token;
	?>
		<br>
	<?php
		echo "<br><b>md5 generator</b> <br>"; 
		$token = hash('md5', rand());

		echo $token;
	?> 
	</div>

	

</body>
</html>

