<?php
ob_start(); 
include('dbcon.php');

if(isset($_POST['submit'])){

 $name = $_POST['name'];
 $mob_num = $_POST['mob_num'];
 $email = $_POST['email'];
 $blood_group = $_POST['blood_group'];
 $message = $_POST['message'];
 


 $q ="INSERT INTO `contact_detail`(`contact_name`, `contact_mobile`, `contact_email`, `contact_blood`, `contact_message`) VALUES ('$name', '$mob_num', '$email', '$blood_group', '$message')";

 $query =mysqli_query($con, $q);
 if($query == true){
   header('location:index.php');
    ob_end_flush();
 }else{
    header('location:contact.php');
 }

    ?>
    <script>
        alert('Send Successfully');
    </script>

    <?php
}

?>