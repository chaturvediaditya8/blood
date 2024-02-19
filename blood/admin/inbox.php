<?php include("header1.php"); ?>
<style>
    .act4{
        background: linear-gradient(to right, #00C9FF 0%, #92FE9D 100%);
        /* color: red; */
        border-radius: 10px;
    }
</style>
<br><br>
 <div class="container" style="margin-top:30px;">
 <div class="row">
    <div class="col-md-2"></div>
<div class="col-md-10">
 <h1 class="text-center text-success">MESSAGES</h1>
 <hr>
<table class="table table-bordered text-center">
<thead>
<tr>
 <th>Id</th>
 <th>Name</th>
 <th>Mobile</th>
 <th>Email</th>
 <th>Blood Group</th>
 <th>Message</th>
 <th>Date/Time</th>
</tr>
</thead>
<?php
include("dbcon.php");
$i = 1;
$q = "select * from contact_detail";
$query = mysqli_query($con, $q);
while($result = mysqli_fetch_array($query)){
?>
<tr>
 <td><?php echo $i++; ?></td>
 <td><?php echo $result["contact_name"];?></td>
 <td><?php echo $result["contact_mobile"];?></td>
 <td><?php echo $result["contact_email"];?></td>
 <td><?php echo $result["contact_blood"];?></td>
 <td><?php echo $result["contact_message"];?></td>
 <td><?php echo $result["contact_date"];?></td>
</tr>
<?php
}
?>
</table>
</div>
 </div>
</div>
<center>
<a href="dashboard.php" class="btn btn-info btn-lg text-white mt-4 ">Back</a>
</center>