<?php 
include('dbcon.php');

if(isset($_POST['submit'])){

 $name = $_POST['name'];
 $gender = $_POST['gender'];
 $age = $_POST['age'];
 $bloodgroup = $_POST['bloodgroup'];
 $edu = $_POST['edu'];
 $number = $_POST['number'];
 $email = $_POST['email'];
 $address = $_POST['address'];


 $q ="INSERT INTO `donor_details`(`donor_name`, `donor_gender`, `donor_age`, `donor_blood`, `donor_education`, `donor_mobile`, `donor_mail`, `donor_address`) VALUES ('$name', '$gender', '$age', '$bloodgroup', '$edu', '$number', '$email', '$address')";

 $query =mysqli_query($con, $q);
 if($query == true){
    header('location:index.php');
    ob_end_flush();
 }else{
    header('location:donor.php');
 }

    ?>
    <script>
        alert('Welcome to Family');
    </script>

    <?php
}
?>