
<?php
    include('header.php');
  ?>




  <div align="center">
<section id="content">

<!-- FACULTY SECTION END-->
      <div id="course-sec" class="container set-pad">
             <div class="row text-center">
                 <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                     <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line"> Artists </h1>
                     <p data-scroll-reveal="enter from the bottom after 0.3s">
                         </p>
                 </div>

             </div>
             <!--/.HEADER LINE END-->


           <div class="row set-row-pad" >
           <div class="col-lg-6 col-md-6 col-sm-6 " data-scroll-reveal="enter from the bottom after 0.4s" >
                 <?php
                  include('config.php');
                  $result = mysql_query("SELECT * FROM artist where id=11");
                  while($row = mysql_fetch_array($result))
                  {
                  
                  echo '<p><img src="'.$row['artistphoto'].'"></p>';
                    
                  }
                  ?>
        </div>
               <div class="col-lg-4 col-md-4 col-sm-4 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
                   <div class="panel-group" id="accordion">
                        <div class="panel panel-default" data-scroll-reveal="enter from the bottom after 0.5s">
                            <div class="panel-heading" >
                                <h4 class="panel-title">
                                     <strong> <?php
                                                  include('config.php');
                                                  $result = mysql_query("SELECT * FROM artist where id=11");
                                                  while($row = mysql_fetch_array($result))
                                                  {
                                                  
                                                  echo $row['name'];
                                                    
                                                  }
                                                  ?> 
                                        </strong>  
                                   </h4>
                            </div>
                            <div id="collapse1" class="panel-collapse collapse" style="height: 0px;">
                                <div class="panel-body">
                                    <p></p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default" data-scroll-reveal="enter from the bottom after 0.7s">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                     <strong><?php
                                                  include('config.php');
                                                  $result = mysql_query("SELECT * FROM artist where id=11");
                                                  while($row = mysql_fetch_array($result))
                                                  {
                                                  
                                                  echo $row['dob'];
                                                    
                                                  }
                                                  ?>    </strong>  
                                    </h4>
                            </div>
                        </div>
                        <div class="panel panel-default" data-scroll-reveal="enter from the bottom after 0.9s">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                          <strong>   <?php
                                                  include('config.php');
                                                  $result = mysql_query("SELECT * FROM artist where id=11");
                                                  while($row = mysql_fetch_array($result))
                                                  {
                                                  
                                                  echo $row['address'];
                                                    
                                                  }
                                                  ?> </strong> 
                                </h4>
                            </div>
                           
                        </div>
                    </div>
                   
           </div>
             
                 
                 
               </div>
             </div>
      <!-- COURSES SECTION END-->

</section>
<section id="content">

<!-- FACULTY SECTION END-->
      <div id="course-sec" class="container set-pad">
             <div class="row text-center">
                 <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                     <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line"> Artists </h1>
                     <p data-scroll-reveal="enter from the bottom after 0.3s">
                         </p>
                 </div>

             </div>
             <!--/.HEADER LINE END-->


           <div class="row set-row-pad" >
           <div class="col-lg-6 col-md-6 col-sm-6 " data-scroll-reveal="enter from the bottom after 0.4s" >
                 <?php
                  include('config.php');
                  $result = mysql_query("SELECT * FROM artist where id=12");
                  while($row = mysql_fetch_array($result))
                  {
                  
                  echo '<p><img src="'.$row['artistphoto'].'"></p>';
                    
                  }
                  ?>
        </div>
               <div class="col-lg-4 col-md-4 col-sm-4 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
                   <div class="panel-group" id="accordion">
                        <div class="panel panel-default" data-scroll-reveal="enter from the bottom after 0.5s">
                            <div class="panel-heading" >
                                <h4 class="panel-title">
                                     <strong> <?php
                                                  include('config.php');
                                                  $result = mysql_query("SELECT * FROM artist where id=12");
                                                  while($row = mysql_fetch_array($result))
                                                  {
                                                  
                                                  echo $row['name'];
                                                    
                                                  }
                                                  ?> 
                                        </strong>  
                                   </h4>
                            </div>
                            <div id="collapse1" class="panel-collapse collapse" style="height: 0px;">
                                <div class="panel-body">
                                    <p></p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default" data-scroll-reveal="enter from the bottom after 0.7s">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                     <strong><?php
                                                  include('config.php');
                                                  $result = mysql_query("SELECT * FROM artist where id=12");
                                                  while($row = mysql_fetch_array($result))
                                                  {
                                                  
                                                  echo $row['dob'];
                                                    
                                                  }
                                                  ?>    </strong>  
                                    </h4>
                            </div>
                        </div>
                        <div class="panel panel-default" data-scroll-reveal="enter from the bottom after 0.9s">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                          <strong>   <?php
                                                  include('config.php');
                                                  $result = mysql_query("SELECT * FROM artist where id=12");
                                                  while($row = mysql_fetch_array($result))
                                                  {
                                                  
                                                  echo $row['address'];
                                                    
                                                  }
                                                  ?> </strong> 
                                </h4>
                            </div>
                           
                        </div>
                    </div>
                   
           </div>
             
                 
                 
               </div>
             </div>
      <!-- COURSES SECTION END-->

</section>
<section id="content">

<!-- FACULTY SECTION END-->
      <div id="course-sec" class="container set-pad">
             <div class="row text-center">
                 <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                     <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line"> Artists </h1>
                     <p data-scroll-reveal="enter from the bottom after 0.3s">
                         </p>
                 </div>

             </div>
             <!--/.HEADER LINE END-->


           <div class="row set-row-pad" >
           <div class="col-lg-6 col-md-6 col-sm-6 " data-scroll-reveal="enter from the bottom after 0.4s" >
                 <?php
                  include('config.php');
                  $result = mysql_query("SELECT * FROM artist where id=13");
                  while($row = mysql_fetch_array($result))
                  {
                  
                  echo '<p><img src="'.$row['artistphoto'].'"></p>';
                    
                  }
                  ?>
        </div>
               <div class="col-lg-4 col-md-4 col-sm-4 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
                   <div class="panel-group" id="accordion">
                        <div class="panel panel-default" data-scroll-reveal="enter from the bottom after 0.5s">
                            <div class="panel-heading" >
                                <h4 class="panel-title">
                                     <strong> <?php
                                                  include('config.php');
                                                  $result = mysql_query("SELECT * FROM artist where id=13");
                                                  while($row = mysql_fetch_array($result))
                                                  {
                                                  
                                                  echo $row['name'];
                                                    
                                                  }
                                                  ?> 
                                        </strong>  
                                   </h4>
                            </div>
                            <div id="collapse1" class="panel-collapse collapse" style="height: 0px;">
                                <div class="panel-body">
                                    <p></p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default" data-scroll-reveal="enter from the bottom after 0.7s">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                     <strong><?php
                                                  include('config.php');
                                                  $result = mysql_query("SELECT * FROM artist where id=13");
                                                  while($row = mysql_fetch_array($result))
                                                  {
                                                  
                                                  echo $row['dob'];
                                                    
                                                  }
                                                  ?>    </strong>  
                                    </h4>
                            </div>
                        </div>
                        <div class="panel panel-default" data-scroll-reveal="enter from the bottom after 0.9s">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                          <strong>   <?php
                                                  include('config.php');
                                                  $result = mysql_query("SELECT * FROM artist where id=13");
                                                  while($row = mysql_fetch_array($result))
                                                  {
                                                  
                                                  echo $row['address'];
                                                    
                                                  }
                                                  ?> </strong> 
                                </h4>
                            </div>
                           
                        </div>
                    </div>
                   
           </div>
             
                 
                 
               </div>
             </div>
      <!-- COURSES SECTION END-->

</section>
<section id="content">

<!-- FACULTY SECTION END-->
      <div id="course-sec" class="container set-pad">
             <div class="row text-center">
                 <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                     <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line"> Artists </h1>
                     <p data-scroll-reveal="enter from the bottom after 0.3s">
                         </p>
                 </div>

             </div>
             <!--/.HEADER LINE END-->


           <div class="row set-row-pad" >
           <div class="col-lg-6 col-md-6 col-sm-6 " data-scroll-reveal="enter from the bottom after 0.4s" >
                 <?php
                  include('config.php');
                  $result = mysql_query("SELECT * FROM artist where id=14");
                  while($row = mysql_fetch_array($result))
                  {
                  
                  echo '<p><img src="'.$row['artistphoto'].'"></p>';
                    
                  }
                  ?>
        </div>
               <div class="col-lg-4 col-md-4 col-sm-4 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
                   <div class="panel-group" id="accordion">
                        <div class="panel panel-default" data-scroll-reveal="enter from the bottom after 0.5s">
                            <div class="panel-heading" >
                                <h4 class="panel-title">
                                     <strong> <?php
                                                  include('config.php');
                                                  $result = mysql_query("SELECT * FROM artist where id=14");
                                                  while($row = mysql_fetch_array($result))
                                                  {
                                                  
                                                  echo $row['name'];
                                                    
                                                  }
                                                  ?> 
                                        </strong>  
                                   </h4>
                            </div>
                            <div id="collapse1" class="panel-collapse collapse" style="height: 0px;">
                                <div class="panel-body">
                                    <p></p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default" data-scroll-reveal="enter from the bottom after 0.7s">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                     <strong><?php
                                                  include('config.php');
                                                  $result = mysql_query("SELECT * FROM artist where id=14");
                                                  while($row = mysql_fetch_array($result))
                                                  {
                                                  
                                                  echo $row['dob'];
                                                    
                                                  }
                                                  ?>    </strong>  
                                    </h4>
                            </div>
                        </div>
                        <div class="panel panel-default" data-scroll-reveal="enter from the bottom after 0.9s">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                          <strong>   <?php
                                                  include('config.php');
                                                  $result = mysql_query("SELECT * FROM artist where id=14");
                                                  while($row = mysql_fetch_array($result))
                                                  {
                                                  
                                                  echo $row['address'];
                                                    
                                                  }
                                                  ?> </strong> 
                                </h4>
                            </div>
                           
                        </div>
                    </div>
                   
           </div>
             
                 
                 
               </div>
             </div>
      <!-- COURSES SECTION END-->

</section>
<section id="content">

<!-- FACULTY SECTION END-->
      <div id="course-sec" class="container set-pad">
             <div class="row text-center">
                 <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                     <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line"> Artists </h1>
                     <p data-scroll-reveal="enter from the bottom after 0.3s">
                         </p>
                 </div>

             </div>
             <!--/.HEADER LINE END-->


           <div class="row set-row-pad" >
           <div class="col-lg-6 col-md-6 col-sm-6 " data-scroll-reveal="enter from the bottom after 0.4s" >
                 <?php
                  include('config.php');
                  $result = mysql_query("SELECT * FROM artist where id=15");
                  while($row = mysql_fetch_array($result))
                  {
                  
                  echo '<p><img src="'.$row['artistphoto'].'"></p>';
                    
                  }
                  ?>
        </div>
               <div class="col-lg-4 col-md-4 col-sm-4 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
                   <div class="panel-group" id="accordion">
                        <div class="panel panel-default" data-scroll-reveal="enter from the bottom after 0.5s">
                            <div class="panel-heading" >
                                <h4 class="panel-title">
                                     <strong> <?php
                                                  include('config.php');
                                                  $result = mysql_query("SELECT * FROM artist where id=15");
                                                  while($row = mysql_fetch_array($result))
                                                  {
                                                  
                                                  echo $row['name'];
                                                    
                                                  }
                                                  ?> 
                                        </strong>  
                                   </h4>
                            </div>
                            <div id="collapse1" class="panel-collapse collapse" style="height: 0px;">
                                <div class="panel-body">
                                    <p></p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default" data-scroll-reveal="enter from the bottom after 0.7s">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                     <strong><?php
                                                  include('config.php');
                                                  $result = mysql_query("SELECT * FROM artist where id=15");
                                                  while($row = mysql_fetch_array($result))
                                                  {
                                                  
                                                  echo $row['dob'];
                                                    
                                                  }
                                                  ?>    </strong>  
                                    </h4>
                            </div>
                        </div>
                        <div class="panel panel-default" data-scroll-reveal="enter from the bottom after 0.9s">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                          <strong>   <?php
                                                  include('config.php');
                                                  $result = mysql_query("SELECT * FROM artist where id=15");
                                                  while($row = mysql_fetch_array($result))
                                                  {
                                                  
                                                  echo $row['address'];
                                                    
                                                  }
                                                  ?> </strong> 
                                </h4>
                            </div>
                           
                        </div>
                    </div>
                   
           </div>
             
                 
                 
               </div>
             </div>
      <!-- COURSES SECTION END-->

</section>



</div>





<!-- Footer
   ================================================== -->
  
<?php
    include('footer.php');
  ?>
