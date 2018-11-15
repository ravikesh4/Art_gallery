
<?php
    include('header.php');
  ?>














<section role="main" class="content-body">
          <header class="page-header">
            <h2>Internal Marks</h2>
          </header>


<?php
 $db = mysql_connect("localhost", "root", "");
 mysql_select_db("art",$db);
 $result = mysql_query("SELECT * FROM exhibition where username='$user_check'",$db);
  ?>
          <h2><center><u><b>Exibition</u></h2></center> 
            <section class="panel">
              <div class="panel-body">
                <table class="table table-bordered table-striped mb-none">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Place</th>
                      <th>Year</th>
                      <th>Art sold</th>
                      <th>Organizing Name</th>
                    </tr>
                  </thead>
                  <tbody>
                <?php
                        while ($myrow = mysql_fetch_array($result)) 
                          { 
                            echo "<TR><TD>";
                             echo $myrow["Name"];
                            echo "<TD>";
                            echo $myrow["Place"];
                            echo "<TD>";
                            echo $myrow["Year"];
                            echo "<TD>";
                            echo $myrow["Art_sold"];
                            echo "<TD>";
                            echo $myrow["Organizing_name"];
                            echo "</TR>";

                          } 
                          echo "</TABLE>";
                 ?> 

</section>



















 <!-- Footer
   ================================================== -->

<?php
    include('footer.php');
  ?>
