<?php include("header.php"); ?>
 <div class="container" style="margin-top:30px;">
    <div class="row">
    <h1 class="text-center text-success">DONOR DATA</h1>
<table class="table table-bordered text-center">
<thead>
<tr>
    <th>Id</th>
    <th>Name</th>
    <th>Gender</th>
    <th>Age</th>
    <th>Blood Group</th>
    <th>Mobile</th>
    <th>E-mail</th>
</tr>
</thead>
<?php
include("dbcon.php");
$i = 1;
$q = "select * from donor_details";
$query = mysqli_query($con, $q);
while($result = mysqli_fetch_array($query)){
?>
<tr>
    <td><?php echo $i++; ?></td>
    <td><?php echo $result["donor_name"];?></td>
    <td><?php echo $result["donor_gender"];?></td>
    <td><?php echo $result["donor_age"];?></td>
    <td><?php echo $result["donor_blood"];?></td>
    <td><?php echo $result["donor_mobile"];?></td>
    <td><?php echo $result["donor_mail"];?></td>
</tr>
<?php
}
?>
</table>
    </div>
</div>
<center>
<a href="index.php" class="btn btn-info btn-lg text-white mt-4 ">Back</a>
</center>

<?php include("footer.php"); ?>