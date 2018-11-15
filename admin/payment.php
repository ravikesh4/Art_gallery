
<?php
    include('header1.php');
  ?>







<section id="contact">

    <div class="row section-head">

      <div class="twelve columns">

           <h1>Payment Form<span>.</span></h1>

           <hr />

     </div>

      </div>

      <div class="row form-section">
        
        <div class="twelve columns">

            <form  method="POST" action="payment1.php">

            <fieldset>

                  
                                           
                  <input name="name" type="text" id="name" Maxlength="25" placeholder="Name" required  />                  
                  <input name="username" type="email" id="username" Maxlength="35" placeholder="Email" required  />                  
                  <input name="mobile" type="mobile" id="mobile" Maxlength="10" placeholder="Phone" required/>                  
                 <input name="address" type="text" id="address" Maxlength="100" placeholder="address" required />                 
                    
                  
                  <div>
                     <button class="submit">Pay</button>
                     <div id="image-loader">
                        <img src="images/loader.gif" alt="" />
                     </div>
                  </div>

            </fieldset>
              
          </form> <!-- /contactForm -->
            <p><a href="http://localhost/art/admin/art1.php">Want to go back</a></p>
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
    include('footer1.php');
  ?>
