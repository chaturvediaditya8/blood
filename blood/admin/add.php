<?php include('header1.php'); ?>
<style>
    .act1 {
        background: linear-gradient(to right, #00C9FF 0%, #92FE9D 100%);
        /* color: red; */
        border-radius: 10px;
    }
</style>
<br><br>
<div class="row mt-4">
    

    <div class="col-md-3"></div>
    <div class="col-md-8">
    <h1 class="text-center text-success">ADD DONOR</h1>
    <hr>
    <form action="add_donor.php" method="post">
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
    <div></div>
</div>