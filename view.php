<?php

$conn=mysqli_connect("localhost","root","","dataform");

$sql="SELECT * FROM datatable";
$querry=mysqli_query($conn,$sql);

if(mysqli_num_rows($querry)>0){
    $output='';
    $output.="<tbody>";
    while($row=mysqli_fetch_assoc($querry)){
        $output.="<tr>
        <td>{$row['id']}</td><td>{$row['name']}</td>
        <td>{$row['email']}</td><td>{$row['phone']}</td>
        <td>{$row['dob']}</td><td>{$row['item']}</td>
        <td>{$row['quantity']}</td>
        <td><button type='button' data-id='{$row['id']}'class='btn btn-warning'>Edit</button></td>
        <td><button type='button' data-id='{$row['id']}'class='btn btn-danger'>Delete</button></td>
        </tr>";
    }
  
    $output.="</tbody>";
    echo $output;
    echo"<script>
    $('.btn-warning').click(function(){
        var id=$(this).data('id');
        $.ajax({
        type:'post',
        url:'select.php',
        data:{key_id:id},
        success:function(){
           window.location.replace('select.php');
        }
        
        });

    });
    
    </script>";

   
}
else{
echo"not fetch";
}



?>