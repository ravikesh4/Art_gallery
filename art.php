
<?php
    include('header.php');
  ?>



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


  
<?php
    include('footer.php');
  ?>
