<?php

    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $dob=$_POST['dob'];
    $item=$_POST['item'];
    $quantity=$_POST['quantity'];

    if(!empty($name) || !empty($email) || !empty($phone) || !empty($dob) ||!empty($item) ||!empty($quantity))
{

    
    $conn=mysqli_connect("localhost","root","","dataform") or die("connection failled");
    
    $sql="INSERT INTO datatable (name,email,phone,dob,item,quantity)VALUES('$name','$email','$phone','$dob','$item','$quantity')";
    $querry=mysqli_query($conn,$sql);
   
    if($querry){
        echo "<script>
        alert('successfully inserted');
        document.location='addform.html';
        </script>";
    }
    else{
        echo "<script>
        alert('not successfully ');
        document.location='addform.html';
        </script>";
        
    }
}



?>