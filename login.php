<?php


if(isset($_SESSION['login_user']))
{
header("location: index1.php");
}
?>




<?php
    include('header.php');
  ?>









 
   <!-- Contact Section
   ================================================== -->
   <section id="contact">

    <div class="row section-head">

      <div class="twelve columns">





           <h1>Login Please<span>.</span></h1>

           <hr />

     </div>

      </div>

      <div class="row form-section">
        
        <div id="contact-form" class="twelve columns">

            <form method="POST" action="usercheck.php">

            <fieldset>

                  
                    <div > 
                      <label for="">Email <span class="required">*</span></label>                    
                  <input name="username" type="email" id="username" placeholder="Email" required />                  
                    </div>

                    <div >  
                      <label for="password">Password</label>                    
                  <input name="password" type="password" id="password" placeholder="Password"  required />                 
                    </div>

                  
                  <div>
                     <button name='login' class="submit full-width">Login</button>
                     <div id="image-loader">
                        <img src="images/loader.gif" alt="" />
                     </div>
                  </div>

            </fieldset>
              
          </form> <!-- /contactForm -->
            <p><a href="signup.php">Create a new account</a></p>
            <!-- message box -->
            <div id="message-warning"></div>
            <div id="message-success">
               <i class="fa fa-check"></i>Your message was sent, thank you!<br />
          </div>

         </div> <!-- /contact-form -->        

      </div> <!-- /form-section -->     

   </section>  <!-- /contact-->













 <!-- Footer
   ================================================== -->
   
<?php
    include('footer.php');
  ?>
