
<?php
    include('header.php');
  ?>







<section id="contact">

    <div class="row section-head">

      <div class="twelve columns">

           <h1>SignUp Form<span>.</span></h1>

           <hr />

     </div>

      </div>

      <div class="row form-section">
        
        <div class="twelve columns">

            <form  method="post" action="login1.php">

            <fieldset>

                  
                                           
                  <input name="name" type="text" id="name" Maxlength="25" placeholder="Name" required  />                  
                  <input name="username" type="email" id="username" Maxlength="30" placeholder="Email" required  />                  
                  <input name="password" type="password" id="password" Maxlength="15" placeholder="password" required/>                  
                  <input name="mobile" type="phone" minlength=10 Maxlength="10" id="mobile" placeholder="mobile" required />                  
                  <input name="address" type="text" id="address" Maxlength="100" placeholder="address" required />                 
                    
                  
                  <div>
                     <button class="submit full-width">SignUp</button>
                     <div id="image-loader">
                        <img src="images/loader.gif" alt="" />
                     </div>
                  </div>

            </fieldset>
              
          </form> <!-- /contactForm -->
            <p><a href="signup.html">Already have a account</a></p>
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
