<?php

include'config.php';

    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $password= md5( $_POST['password']);
    $cpassword=md5($_POST['cpassword']);

    if(!empty($name) && !empty($email) && !empty($phone) && !empty($password) && !empty($cpassword)){
    
    $sql="SELECT name FROM regis WHERE name='$name'";
    $querry=mysqli_query($conn,$sql);
    if(mysqli_num_rows($querry)>0){
        
        echo"<script>
    alert('User name is already exist')
    document.location='regestration.html';
    </script>";

    }
    else{
        if($password===$cpassword){
    $sql1="INSERT INTO regis(name,email,phone,password)VALUES('$name','$email','$phone','$password')";

    $querry1=mysqli_query($conn,$sql1);

    if($querry1){
        echo"<script>
         document.location='login.html';
        </script>";

        //  header("location:login.html");
        
    }else{
        // echo"Not Registered inserted";
        echo"<script>
        alert('Not Regestered')
    document.location='regestration.html';
        </script>";
    }
}
else{ echo"<script>
    alert('Password Not match')
    document.location='regestration.html';
    </script>"; }
}

}


else{
    echo"<script>
        alert('All field are Required')
        document.location='regestration.html';
        </script>";
}

?>