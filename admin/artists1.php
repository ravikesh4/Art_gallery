
<?php
    include('header1.php');
  ?>
  <div align="center">
  <section id="content">

<!-- FACULTY SECTION END-->
      <div id="course-sec" class="container set-pad">
             <div class="row text-center">
                 <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                     <p data-scroll-reveal="enter from the bottom after 0.3s"></p>
                 </div>
             </div>
             <!--/.HEADER LINE END-->
           <div class="row set-row-pad" >
           <div class="col-lg-6 col-md-6 col-sm-6 " data-scroll-reveal="enter from the bottom after 0.4s" >
                 <?php
                  include('config.php');
                  $result = mysql_query("SELECT * FROM artist");
                  while($row = mysql_fetch_array($result))
                  {
                  echo '<h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line"> Artists </h1>';
                  echo '<p><img src="'.$row['artistphoto'].'" width="100" height="100"></p>';
                  echo $row['name'].'<br>';
                  echo $row['dob'].'<br>';
                  echo $row['address'].'<br>';
                  echo '<br><br>';
                    
                  }
                  ?>
            </div>                 
         </div>
    </div>
      <!-- COURSES SECTION END-->

</section>
</div>
<!-- Footer
   ================================================== -->
  
<?php
    include('footer1.php');
  ?>
