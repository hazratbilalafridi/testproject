<?php


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Latest compiled and minified CSS -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

     <!-- jQuery library -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 
     <!-- Latest compiled JavaScript -->
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
     <link rel="stylesheet" href="css/addform.css">
    <title>edit</title>
</head>
<body>
    
    <div class="container">
        

<form action="addForm.php" method="post">
    <div class="form-group">
      <input type="hidden" class="form-control" id="sid" name="sid" >

      <label for="name">Name</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Name" required >
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" id="email"
        name="email"  placeholder="email" required>
      </div>
      <div class="form-group">
        <label for="phone">phone</label>
        <input type="number" class="form-control" id="phone" name="phone"  placeholder="phone"required>
      </div>
      <div class="form-group">
        <label for="dob">dob</label>
        <input type="text" class="form-control" id="dob" name="dob" placeholder="date of bitrh"required>
        </div>
        <div class="form-group">
            <label for="item">item</label>
            <input type="text" class="form-control" id="item" name="item"  placeholder="item"required>
          </div>
          <div class="form-group">
            <label for="quantity">quantity</label>
            <input type="text" class="form-control" id="quantity" name="quantity" placeholder="quantity"required>
            </div>

            <button type="submit" class="btn btn-success" id="submitbtn" >Add</button>
            <button type="submit" class="btn btn-success" id="back" >back</button>
            
        </div>
    
  </form>
</div>


<script>
    $(document).ready(function () {
      $("#back").click(function(){
        window.location.replace("index.html");
      })
    });
    
</script> 




</body>
</html>