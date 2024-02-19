<?php 
include('dbcon.php');

if(isset($_POST['submit'])){

 $name = $_POST['name'];
 $age = $_POST['age'];
 $doc_name = $_POST['doc_name'];
 $bloodgroup = $_POST['blood_group'];
 $reason = $_POST['reason'];
 $mobile = $_POST['mobile'];
//  $email = $_POST['email'];
//  $address = $_POST['address'];


 $q ="INSERT INTO `querry_details`(`querry_name`, `querry_age`, `doc_name`, `querry_blood`, `querry_reason`, `querry_mobile`) VALUES ('$name', '$age', '$doc_name', '$bloodgroup', '$reason', '$mobile')";

 $query =mysqli_query($con, $q);
 if($query == true){
    header('location:index.php');
    ob_end_flush();
 }else{
        header('location:blood.php');
 }

    ?>


    <script>
        alert('Thanks for contact');
    </script>

    <?php
}
?>