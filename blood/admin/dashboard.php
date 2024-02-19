<!-- session_start();
 if(isset($_SESSION['uid']))
 {
  echo"";
 }
 else{
  header('location:index.php');
 } -->
<?php include('header1.php');?>
<style>
  .act {
    background: linear-gradient(to right, #00C9FF 0%, #92FE9D 100%);
    /* color: red; */
    border-radius: 10px;
  }
</style>
<br><br>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-10">
      <h1 class="mt-4" style="font-weight:300;">Dashboard</h1>
      <hr>
      
      <?php
      include 'dbcon.php';
                      $sql =" SELECT * from donor_details ";
                      $result=mysqli_query($con,$sql) or die("query failed.");
                      $row=mysqli_num_rows($result);

                    ?>
            
          <div class="row">
            <div class="col-md-3 mt-4" style="border:none; border-radius:80px;background:rgb(255 147 166); margin: 0 15px;">
              <h1 class="text-center mt-2" style="color:rgb(168 51 51);"><?php echo $row; ?></h1>
              <p class="text-center" style="font-weight:600; font-size:15px;color:rgb(237 8 59);">DONOR AVAILABLE</p>
              <center>
                <a href="donordetail.php" class="btn btn-danger text-white ">Read More...</a>
              </center>
              <br>
            </div>
            <?php
      include 'dbcon.php';
                      $sql =" SELECT * from querry_details ";
                      $result=mysqli_query($con,$sql) or die("query failed.");
                      $row=mysqli_num_rows($result);

                    ?>
            <div class="col-md-3 mt-4" style="border:none; border-radius:80px;background:rgb(209 237 243);margin:0 15px">
            <h1 class="text-center mt-2" style="color:rgb(168 51 51);"><?php echo $row; ?></h1>
              <p class="text-center" style="font-weight:600; font-size:15px;color:rgb(237 8 59);">QUERRIES</p>
              <center>
                <a href="querry.php" class="btn btn-danger text-white ">Read More...</a>
              </center>
              <br>
            </div>
            <?php
      include 'dbcon.php';
                      $sql =" SELECT * from contact_detail ";
                      $result=mysqli_query($con,$sql) or die("query failed.");
                      $row=mysqli_num_rows($result);

                    ?>
          <div class="col-md-3 mt-4" style="border:none; border-radius:80px;background:rgb(209 237 243);margin:0 15px">
          <h1 class="text-center mt-2" style="color:rgb(168 51 51);"><?php echo $row; ?></h1>
              <p class="text-center" style="font-weight:600; font-size:15px;color:rgb(237 8 59);">MESSAGES</p>
              <center>
                <a href="inbox.php" class="btn btn-danger text-white ">Read More...</a>
              </center>
              <br>
          </div>
          </div>
    </div>
  </div>
</div>

<div></div>
</div>
</div>
