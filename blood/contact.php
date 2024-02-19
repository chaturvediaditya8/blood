<?php include('header.php');     ?>
<div class="container">
    <div class="row">
        <h1 class="text-center mt-4" style="padding-top:50px;">For More Details</h1>
        <div class="col-md-6">
            <h3 class="text-center">Drop a Message</h3>
            <form action="contactsave.php" method="post">
                <div class="mt-4">
                    <label for="">Name</label>
                    <input type="text" name="name" class="form-control" id="" placeholder="Name" autocomplete="off" required> 
                </div>
                <div class="mt-4">
                    <label for="">Mobile Number</label>
                    <input type="number" name="mob_num" class="form-control" id="" placeholder="Number" autocomplete="off" required>
                </div>
                <div class="mt-4">
                    <label for="">Email</label>
                    <input type="email" name="email" id="" class="form-control" placeholder="Email" autocomplete="off" required>
                </div>
                <div class="mt-4">
                    <label for="">Blood Group</label>
                    <select class="form-control" name="blood_group" autocomplete="off" required>
                    <option value="">Select</option>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="Ab+">AB+</option>
                    <option value="AB-">AB-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                    </select>
                </div>
                <div class="mt-4">
                    <label for="">Message</label>
                    <textarea class="form-control" name="message" autocomplete="off" required></textarea>
                </div>
                <button type="submit" name="submit" class="btn btn-info mt-4 form-control">Send</button>
            </form>
        </div>
        <div class="col-md-6">
            <img src="image/contact us.png" alt="" class="w-100 card shadow mt-4" style="height: 530px;">

        </div>
    </div>
</div>
<?php include('footer.php');     ?>
