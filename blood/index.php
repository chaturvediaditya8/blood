<?php include('header.php');     ?>
<div class="container" style="margin-top:50px;">
    <h1 class="text-center mt-4" style="color:rgb(249, 87, 28)">Welcome To Blood Donation & Management System</h1>
    <div class="row mt-4">
        <div class="col-md-4">
            <div class="card">
                <h5 class="card-header card text-center bg-danger text-white">Need for Blood</h5>
                <div class="card-body overflow-auto" style="height: 312px;">
                    There are many reasons patients need blood. A common misunderstanding about blood usage is that
                    accident victims are the patients who use the most blood. Actually, people needing the most
                    blood include those:
                    <ol>
                        <li>Being treated for cancer</li>
                        <li>Undergoing orthopedic surgeries</li>
                        <li>Undergoing cardiovascular surgeries</li>
                        <li>Being treated for inherited blood disorders</li>
                    </ol>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <h5 class="card-header card text-center bg-danger text-white">Blood Tips</h5>
                <div class="card-body overflow-auto" style="height:312px;">
                    <ol style="margin-left:-15px;">
                        <li>You must be in good health.</li>
                        <li>Hydrate and eat a healthy meal before your donation.</li>
                        <li>You’re never too old to donate blood.</li>
                        <li>Rest and relaxed.</li>
                        <li>Don’t forget your FREE post-donation snack.</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <h5 class="card-header card text-center bg-danger text-white">Why You Could Help</h5>
                <div class="card-body overflow-auto">
                    <p>Every 2 seconds, someone in the World needs blood. Donating blood can help:
                    <ol style="margin-left: -15px; margin-top:-15px">
                        <li>People who go through disasters or emergency situations.</li>
                        <li>People who lose blood during major surgeries.</li>
                        <li>People who have lost blood because of a gastrointestinal bleed.</li>
                        <li> Women who have serious complications during pregnancy or childbirth.</li>
                        <li>People with cancer or severe anemia sometimes caused by thalassemia or sickle cell
                            disease.</li>
                    </ol>
                    </p>
                </div>
            </div>
        </div>
    </div><!--row 1 end-->
</div><!--container ends-->
<div class="container mt-4">
    <div class="row">
        <div class="col-md-5">
            <h3 class="card-header text-center" style="font-size:35px; color:rgb(249, 87, 28); font-weight:700;">Blood Groups</h3>
            <p>Blood group of any human being will mainly fall in any one of the following groups
            <ul>
                <li>A positive or A negative</li>
                <li>B positive or B negative</li>
                <li>O positive or O negative</li>
                <li>AB positive or AB negative</li>
            </ul>
            Your blood group is determined by the genes you inherit from your parents.
            A healthy diet helps ensure a successful blood donation, and also makes you feel better.
            </p>
            <hr>
            <h6 style="font-size:30px; color:rgb(249, 87, 28); font-weight:700;">UNIVERSAL DONOR & RECIPIENTS</h6>
            <p>The most common blood type is O, followed by type A. Type O individuals are often called "universal
                donors" since their blood can be transfused into persons with any blood type. Those with type AB
                blood are called "universal recipients" because they can receive blood of any type.<br><br>

                For emergency transfusions, blood group type O negative blood is the variety of blood that has the
                lowest risk of causing serious reactions for most people who receive it. Because of this, it's
                sometimes called the universal blood donor type.</p>
            <!-- <button class="btn btn-info text-white mt-4 ab "><a href="donor.php">Become A Donor</a></button> -->
            <a href="donor.php" class="btn btn-info navlink btn-lg mt-4 text-white">Become A Donor</a>
        </div>
        <div class="col-md-7">
            <div class="card">
                <img src="image/blood type.jpg" alt="" class="w-100 card shadow">
            </div>
        </div>
    </div><!--row ends-->
</div><!--container ends-->
<div class="container" style="margin-top:30px;">
    <div class="row">
        <h1 class="text-center text-success" style="font-weight:700">OUR LIFE SAVERS</h1>
    <?php
           include 'dbcon.php';
            $sql= "select * from donor_details limit 4 ";
            $result=mysqli_query($con,$sql);
            if(mysqli_num_rows($result)>0)
            {
            while($row = mysqli_fetch_assoc($result)) {
           ?>
            <div class="col-md-3" ><br>
            <div class="card" style="width:300px; height:600px">
                <img class="card-img-top" src="image/live savers.jpg" alt="Card image" style="width:100%;height:300px">
                <div class="card-body">
                  <h3 class="card-title"><?php echo $row['donor_name']; ?></h3>
                  <p class="card-text">
                    <b>Blood Group : </b> <b><?php echo $row['donor_blood']; ?></b><br>
                    <b>Mobile No. : </b> <?php echo $row['donor_mobile']; ?><br>
                    <b>Gender : </b><?php echo $row['donor_gender']; ?><br>
                    <b>Age : </b> <?php echo $row['donor_age']; ?><br>
                    <b>Address : </b> <?php echo $row['donor_address']; ?><br>
                  </p>

                </div>
              </div>
        </div>
      <?php }} ?>

    </div>
    <center>
    <a href="readmore.php" class="btn btn-info btn-lg text-white mt-4 ">Read More...</a>
    </center>
</div>




<?php include('footer.php');     ?>