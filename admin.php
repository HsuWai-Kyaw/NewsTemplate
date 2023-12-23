<?php
require_once("include/header.php");
include 'include/connection.php';

if (isset($_POST['submit'])) {
     $name = $_POST['name'];
     $email = $_POST['email'];
     $password = sha1(md5($_POST['password']));
     $gender = $_POST['gender'];
     $dp = $_POST['dp'];

     $sql = "INSERT INTO `admin`(`name`, `email`, `password`, `gender`, `dp`) VALUES ('$name','$email','$password','$gender','$dp'))";
     $result = mysqli_query($conn, $sql);
     if ($result) {
          // echo "Data inserted Successfully";
          header('location: index.php');
     } else {
          die(mysqli_error($conn));
     }
}
?>


<!doctype html>
<html lang="en">

<head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

     <title>CRUD Operation</title>
</head>

<body>
     <div class="container my-5">
          <form method="POST">
               <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter your name.."
                         autocomplete="off">
               </div>
               <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter your email.."
                         autocomplete="off">
               </div>
               <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Enter your password.."
                         autocomplete="off">
               </div>

               <div class="form-group">
                    <div class="form-check">
                         <input class="form-check-input" name="gender" type="checkbox" value="" id="flexCheckDefault">
                         <label class="form-check-label" for="flexCheckDefault">
                              Male
                         </label>
                    </div>
                    <div class="form-check">
                         <input class="form-check-input" name="gender" type="checkbox" value="" id="flexCheckChecked"
                              checked>
                         <label class="form-check-label" for="flexCheckChecked">
                              Female
                         </label>
                    </div>
                    <div class="form-check">
                         <input class="form-check-input" name="gender" type="checkbox" value="" id="flexCheckChecked"
                              checked>
                         <label class="form-check-label" for="flexCheckChecked">
                              Others
                         </label>
                    </div>
               </div>
               <div class="form-group">
                    <label>DP</label>
                    <input type="file" name="dp" class="form-control" autocomplete="off">
               </div>
               <button type="submit" class="btn btn-primary" name="submit">Submit</button>
          </form>
     </div>


</body>

</html>