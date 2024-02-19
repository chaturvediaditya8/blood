<?php include('header.php');     ?>
<div class="container">
    <div class="row" style="margin-top: 70px;">
        <h1 class="text-center" style="font-size:65px;font-weight:700; color:orangered">NEED BLOOD</h1>
        <div class="col-md-6">
            <h3 class="text-center" style="font-size: 45px;font-weight:600;color:green">Register a Querry</h3>
            <form action="bloodinsert.php" method="post">
                <div class="mt-4">
                    <label>Patient Name</label>
                    <input type="text" name="name" id="" placeholder="Name" class="form-control" autocomplete="off" required>
                </div>
                <div class="mt-4">
                    <label for="">Patient's Age</label>
                    <input type="number" name="age" class="form-control" autocomplete="off" required>
                </div>
                <div class="mt-4">
                    <label for="">Doctor Name</label>
                    <input type="text" name="doc_name" id="" class="form-control" autocomplete="off" required>
                </div>
                <div class="mt-4">
                    <label for="">Blood Group</label>
                    <select class="form-control" name="blood_group" autocomplete="off" required>
                    <option value="">select</option>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                    </select>
                </div>
                <div class="mt-4">
                    <label for="">Reason, Why you need blood</label>
                    <textarea class="form-control" name="reason" autocomplete="off" required></textarea>
                </div>
                <div class="mt-4">
                    <label for="">Mobile Number</label>
                    <input type="number" name="mobile" id="" class="form-control" autocomplete="off" required>
                </div>
                <button type="submit" name="submit" class="btn btn-info mt-4 form-control text-white">Submit</button>
            </form>
        </div>
        <div class="col-md-6 mt-4">
            <img src="image/donor.png" alt="" class="w-100" style="height: 625px;">
        </div>
    </div>
</div><!--COntainer ends-->

<?php include('footer.php');     ?>
