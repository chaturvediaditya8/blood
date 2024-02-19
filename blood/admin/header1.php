<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/login.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
             .sidebar {
            margin: 0;
            padding: 0;
            width: 210px;
            background-color: #333333;
            position: fixed;
            top:67px;
            height: 100%;
            overflow: auto;
        }
        @media(max-width:768px){
            .sidebar{
                margin: 0;
            padding: 0;
            width: 100%;
            background-color: #333333;
            /* position: fixed; */
            height: 100%;
            overflow: auto;
            }
        }

        .sidebar a {
            color: white;
            line-height: 60px;
            font-weight: 600;
            /* padding-top: 30px; */
        }

        .sidebar a:hover {
            background: linear-gradient(to right, #00C9FF 0%, #92FE9D 100%);
            color: red;
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <div class="row fixed-top" style="background:rgb(0 0 0 / 69%);">
    <div class="col-md-1" >
    <button class="navbar-toggler" data-bs-target="#ab" data-bs-toggle="collapse">
                <span class="navbar-toggler-icon" style="font-size:30px;border:1px solid white;border-radius:10px;margin-top:10px;margin-left:5px">
                <i class="fa-solid fa-bars" style="color: white;padding-top:7px"></i>
            </span>
            </button> 
    </div>
        <div class="col-md-10">
        <h1 class="text-center" style=" color:red;line-height: 60px;" >BLOOD DONATION & MANAGEMANT SYSTEM</h1>
        </div>
        <div class="col-md-1">
        <button class="btn btn-outline-warning btn-lg" style="height: 68px; padding-right:20px ;"><a href="logout.php"class="nav-link ">Logout</a></button>
        </div>
    </div>
    <div class="container-fluid h-100 navbar-collapse collapse" id="ab">
        <div class="row">
            <!-- Sidebar -->
            <nav id="sidebar" class="col-md-2 sidebar" style=" background-color: #343a40; color: #fff;">
                <div class="position-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link act" href="dashboard.php">DASHBOARD</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link act1" href="add.php">ADD DONOR</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link act2" href="donordetail.php">DONOR DETAIL</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link act3" href="querry.php">QUERRY</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link act4" href="inbox.php">MESSAGES</a>
                        </li>
                    </ul>
                </div>
                
            </nav>
        </div>
    </div>
    <!-- sidebar ends -->