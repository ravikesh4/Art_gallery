<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- Basic Page Needs
   ================================================== -->
   <meta charset="utf-8">
  <title>Art Gallery</title>
  <meta name="description" content="">  
  <meta name="author" content="">

   <!-- Mobile Specific Metas
   ================================================== -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- CSS
    ================================================== -->
   <link rel="stylesheet" href="css/base.css">
  <link rel="stylesheet" href="css/main.css">
   <link rel="stylesheet" href="css/media-queries.css">         

   <!-- Script
   =================================================== -->
  <script src="js/modernizr.js"></script>

   <!-- Favicons
  =================================================== -->
  <link rel="shortcut icon" href="favicon.png" >

</head>

<body class="homepage">

   <div id="preloader"> 
     <div id="status">
         <img src="images/loader.gif" height="60" width="60" alt="">
         <div class="loader">Loading...</div>
      </div>
   </div>
   

   <!-- Header
   =================================================== -->
   <header id="main-header">

    <div class="row header-inner">

        <div class="logo">
           <a class="#" href="index.php">Art Gallery</a>
        </div>

        <nav id="nav-wrap">         
           
           <a class="mobile-btn" href="#nav-wrap" title="Show navigation">
            <span class='menu-text'>Show Menu</span>
            <span class="menu-icon"></span>
           </a>
          <a class="mobile-btn" href="#" title="Hide navigation">
            <span class='menu-text'>Hide Menu</span>
            <span class="menu-icon"></span>
          </a>         

           <ul id="nav" class="nav">
              <li class="current"><a class="#" href="index.php">Home</a></li>
             <li><a class="#" href="artists.php">Artists</a></li>
              <li><a class="#" href="art_service.php">Categories</a></li>
              <li><a class="#" href="exibition.php">Exhibition</a></li>
              <li><a class="#" href="art_about.php">About</a></li>
              <li><a class="#" href="art_contact.php">Contact</a></li>
              <li><a class="#" href="login.php">Login</a></li>

           </ul> 
        </nav> <!-- /nav-wrap -->       

     </div> <!-- /header-inner -->

   </header> 



<section id="portfolio">

      <div class="row section-head">

      	<div class="twelve columns">

	         <h1>Our Latest Works<span>.</span></h1>

	         <hr />

	         <p>Art is an undescribed word which means a numerous types of designs and beauty of a particular art is described in its painting.It does'nt need to be described by any words. The painting itself describes the scenes.
	         </p>

	      </div>

      </div>

      <div class="row items">

      	<div class="twelve columns">

            <div id="portfolio-wrapper" class="bgrid-fourth s-bgrid-third mob-bgrid-half group">


              <?php
                  include('config.php');
                  $result = mysql_query("SELECT * FROM art");
                  while($row = mysql_fetch_array($result))
                  {
                  
                  echo '<p><img src="'.$row['image'].'"></p>';
                    
                  }
                  ?>


          	   
            </div> <!-- /portfolio-wrapper -->

         </div> <!-- /twelve -->

      </div>  <!-- /row -->
      
   </section> <!-- /Portfolio -->


  <!-- Footer
   ================================================== -->
   <footer>

      <div class="row">       

         <div class="six columns tab-whole footer-about">
        
        <h3>About Art Gallery</h3>
               
            <p>Meeting the world's finest arts from all round of the exhibitions and the museuems and picking the best arts. Attracting visitors and the viewers desplaying the most prestigious arts is the main motive of RS Art Gallery. 
            </p>

           
         </div> <!-- /footer-about -->

         <div class="six columns tab-whole right-cols">

            <div class="row">

               <div class="columns">
                  <h3 class="address">Contact Us</h3>
                  <p>
                  Sir MVIT<br>
                  Bangalore<br>
                 
                  </p>

                  <ul>
                    <li><a href="tel:7411966489">7411966489</a></li>
                    <li><a href="tel:7846972361">7846972361</a></li>
                    <li><a href="Ravikeshyadav4@gmail.com">Ravikeshyadav4@gmail.com</a></li>
                  </ul>                  
               </div> <!-- /columns -->             

               <div class="columns last">
                  <h3 class="contact">Follow Us</h3>

                  <ul>
                     <li><a href="#">Facebook</a></li>
                     <li><a href="#">Twitter</a></li>
                     <li><a href="#">GooglePlus</a></li>
                     <li><a href="#">Instagram</a></li>
                     <li><a href="#">Flickr</a></li>
                     <li><a href="#">Skype</a></li>
                  </ul>
                  
               </div> <!-- /columns --> 

            </div> <!-- /Row(nested) -->

         </div>

         <p class="copyright">&copy; Copyright 2017 Art Gallery Design by Ravikesh & Sachin</a></p>        

         

      </div> <!-- /row -->

   </footer> <!-- /footer -->


   <!-- Java Script
   ================================================== -->
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <script>window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')</script>
   <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>   
   <script src="js/jquery.flexslider.js"></script>
   <script src="js/jquery.fittext.js"></script>
   <script src="js/backstretch.js"></script> 
   <script src="js/waypoints.js"></script>  
   <script src="js/main.js"></script>

</body>

</html>