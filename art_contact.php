
<?php
    include('header.php');
  ?>









 
   <!-- Contact Section
   ================================================== -->
   <section id="contact" >

    <div class="row section-head">

      <div class="twelve columns">

           <h1>Get In Touch With Us<span>.</span></h1>

           <hr />

           <p>
           </p>

        </div>

      </div>

      <div class="row form-section">
        
        <div id="contact-form" class="twelve columns">

            <form  method="post" action="contact.php">

            <fieldset>

                  <div class="row">

                    <div class="six columns mob-whole">
                      <label for="Name">First Name <span class="required">*</span></label>                       
                  <input name="fname" type="text" id="name" maxlength=20 placeholder="First Name" required />                 
                    </div>

                    <div class="six columns mob-whole"> 
                      <label for="lname">Last Name <span class="required">*</span></label>                    
                  <input name="lname" type="text" id="lname" maxlength=15 placeholder="Last Name" required />                  
                    </div>                          

                  </div>

                  <div class="row">

                    <div class="six columns mob-whole"> 
                      <label for="email">Email <span class="required">*</span></label>                    
                  <input name="email" type="email" id="email" maxlength=35 placeholder="Email" required />                  
                    </div>

                    <div class="six columns mob-whole">  
                      <label for="subject">Subject</label>                    
                  <input name="subject" type="text" id="subject" maxlength=35 placeholder="Subject"  required />                 
                    </div>

                  </div>

                  <div class="row">

                    <div class="twelve columns">
                       <label  for="msg">Message </label>
                       <textarea name="msg" maxlength=100  id="msg" placeholder="Your Message" rows="10" cols="50" required ></textarea>
                    </div>

                  </div>

                  <div>
                     <button class="submit full-width">Send Message</button>
                     <div id="image-loader">
                        <img src="images/loader.gif" alt="" />
                     </div>
                  </div>

            </fieldset>
              
          </form> <!-- /contactForm -->

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
