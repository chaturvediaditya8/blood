<?php 
include('dbcon.php');
session_start();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/login.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="row" style="background:rgb(0 0 0/69%)"><h1 class="text-center" style="color:red; line-height:60px">BLOOD DONATION MANAGEMENT SYSTEM</h1></div>
<div class="container" style="margin-top:60px">
        <div class="card">
            <h1 class="text-center card-heading" style="background-color: rgba(217, 208, 218, 1);font-weight:800;line-height:65px;color:steelblue;">ADMIN LOGIN</h1>
            <div class="row">
                <div class="col-md-5">
                    <img src="image/adlogo.PNG" alt="" class="w-100 card shadow-lg" style="margin-top:-9px" >
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-5">
                    <form action="" method="post">
                       <div class="mt-4">
                        <label for="" class="text-info" style="font-weight:700">Username</label>
                        <input type="text" name="username" id="" class="form-control mt-4">
                       </div>
                       <div class="mt-4">
                        <label for="" class="text-info" style="font-weight:700">Password</label>
                        <input type="password" name="password" id="" class="form-control mt-4">
                       </div>
                       <div class="mt-4">
                        <button class="btn btn-info btn-lg mt-4 text-white" type="submit" value="LOGIN" name="login" style="font-weight: 600;">Login</button>
                       </div>

                    </form>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </div>
    <br><br><br>
</body>
</html>
<?php

  if(isset($_POST['login'])){

    $username= $_POST['username'];
    $password= $_POST['password'];

    $sql="SELECT * FROM admin_info WHERE admin_username='$username' && admin_password='$password'";
    $result=mysqli_query($con,$sql);
    $total = mysqli_num_rows($result);
    echo $total;

    if($total<1)
    {

        ?>
        <script>
            alert('username or password not matched !');
            window.open('index.php', '_self');
        </script>
    //   while($row=mysqli_fetch_assoc($result)){
    //     session_start();
    //      $_SESSION['loggedin'] = true;
    //     $_SESSION["username"]=$username;
    //     header("Location: dashboard.php");
    //   }
    <?php
    }
    else {
    //   echo '<div class="alert alert-danger" style="font-weight:bold"> Username and Password are not matched!</div>';
        $data = mysqli_fetch_assoc($result);
        $id = $data['id'];
        $_SESSION['uid']= $id;
        header('location:dashboard.php');
        }

  }
   ?>






