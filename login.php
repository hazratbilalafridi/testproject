<?php
$lname = $_POST['email'];
$lpass = $_POST['Password'];

include 'config.php';
$sql = "SELECT email,password FROM regis WHERE email='$lname'AND password='$lpass'";
$querry = mysqli_query($conn, $sql);

if (mysqli_num_rows($querry) > 0) {
   
        echo"<script>
        document.location='index.html';
        </script>";
    
} else {
    echo"<script>
    alert('Please check your email and Password')
    document.location='login.html';
    </script>";
}
