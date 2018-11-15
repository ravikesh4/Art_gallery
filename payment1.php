<?php
            $name=$_POST['name'];
            $email=$_POST['email'];
            $phone=$_POST['phone'];
            $amount=$_POST['amount'];
            $address=$_POST['address'];
            mysql_connect('localhost','root','');

            mysql_select_db("art");


            $order= "INSERT INTO order(name,email,phone,amount,address) VALUES ('$name','$email','$phone','$amount','$address')";

            mysql_query($order);


            if($order)
            {
            echo "<script>alert('Payment Successful');</script>";
                  include('index1.php');}
            else
            {
            echo "<script>alert('Payment Failed');</script>";
                include('art1.php');
            }
          ?>