<?php include('header.php');     ?>
<div class="container mt-4">
        <h1 class="text-center text-danger" style="font-weight: 700;margin-top: 90px;font-size: 60px;">DONATE BLOOD & SAVE LIFE</h1>
        <div class="row">
            <div class="col-md-6 mt-4">
                <form action="donorinsert.php" method="post">
                    <div class="mt-4"> 
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter your name" autocomplete="off" required>
                    </div>
                    <div class="mt-4">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Gender</label>
                                <select class="form-control" name="gender" autocomplete="off" required>
                                    <option value="">Select</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Others">Others</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="">Age</label>
                                <input type="text" name="age" id="" class="form-control" placeholder="enter your age" autocomplete="off" required>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <label for="">Blood Group</label>
                        <select class="form-control" name="bloodgroup" autocomplete="off" required>
                        <option value="">Select</option>
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
                        <label for="">Education</label>
                        <input type="text" name="edu"  class="form-control" id="" placeholder="Enter your qualification" autocomplete="off" required>
                    </div>
                    <div class="mt-4">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">Mobile Number</label>
                                <input type="number" class="form-control" name="number" id="" placeholder="mobile no." autocomplete="off" required>
                            </div>
                            <div class="col-md-6">
                                <label for="">Email</label>
                                <input type="email" class="form-control" name="email" id="" placeholder="Email" autocomplete="off" required>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <label for="">Address</label>
                        <textarea name="address" class="form-control" placeholder="current Adddress" autocomplete="off" required></textarea>
                    </div>
                    <button type="submit" name="submit" class="btn btn-info btn-lg mt-3 form-control text-white">Submit</button>
                </form>
            </div>
            <div class="col-md-6 mt-4">
                <img src="image/venue.jpg" alt="" class="w-100 card shadow-lg" style="height: 600px;">
                    
            </div>
        </div>
    </div>
<?php include('footer.php');     ?>
