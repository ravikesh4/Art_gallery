
          <?php
            $name=$_POST['name'];
            $username=$_POST['username'];
            $mobile=$_POST['mobile'];
            $address=$_POST['address'];
            mysql_connect('localhost','root','');

            mysql_select_db("art");


            $order= "INSERT INTO payment(name,username,mobile,address) VALUES ('$name','$username','$mobile','$address')";

            mysql_query($order);


            if($order)
            {
            echo "<script>alert('Payment Successful');</script>";
            include('art1.php');
            }
            else
            {
            echo "<script>alert('Payment Failed');</script>";
            include('art1.php');
            }
          ?>