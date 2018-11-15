
<?php
    include('header.php');
  ?>














      <div class="row items">

        <div class="twelve columns">

            <div id="portfolio-wrapper" class="bgrid-fourth s-bgrid-third mob-bgrid-half group">

<div class="row">
<div class="col-sm-6">
<div align="center" >

</script>  
              <?php
                  include('config.php');
                  $result = mysql_query("SELECT * FROM exhibition");
                  while($row = mysql_fetch_array($result))
                  {

                  echo '<z><a href="art.php"><img src="'.$row['location'].'" width=300 height=300></a></z>';
                  }
                  ?>

</div>
</div>
</div>
        









 <!-- Footer
   ================================================== -->

<?php
    include('footer.php');
  ?>
