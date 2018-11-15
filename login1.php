

<?php
    include('header.php');
  ?>









 

   <!-- Contact Section
   ================================================== -->
   <section id="contact">

    <div class="row section-head">

      <div class="twelve columns">
        <h3><strong>

        <?php
            $name=$_POST['name'];
            $username=$_POST['username'];
            $password=$_POST['password'];
            $mobile=$_POST['mobile'];
            $address=$_POST['address'];
            mysql_connect('localhost','root','');

            mysql_select_db("art");


            $order= "INSERT INTO users(name,username,password,mobile,address) VALUES ('$name','$username','$password','$mobile','$address')";

            mysql_query($order);


            if($order)
            {
            echo "<script>alert('signup Successful please login');</script>";
            }
            else
            {
            echo "<script>alert('Signup Failed');</script>";
            }
          ?>
        </strong></h3>


           <h1>Login Please<span>.</span></h1>

           <hr />

     </div>

      </div>

      <div class="row form-section">
        
        <div id="contact-form" class="twelve columns">

            <form method="post" action="usercheck.php">

            <fieldset>

                  
                   <div > 
                      <label for="">Email <span class="required">*</span></label>                    
                  <input name="username" type="email" id="username" maxlength=30 placeholder="Email" required />                  
                    </div>

                    <div >  
                      <label for="password">Password</label>                    
                  <input name="password" type="password" id="password" maxlength=20 placeholder="Password"  required />                 
                    </div>

                  
                  <div>
                     <button class="submit full-width">Login</button>
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
