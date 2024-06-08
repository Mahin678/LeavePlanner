<form class="form-container" method="POST">
    <div class="form-group">
        <label class="text-light" for="email">Email address</label>
        <input type="email" name="email"  class="form-control">
    </div>
    <div class="form-group">
        <label class="text-light" for="password" >Password</label>
        <input type="password" name="password" class="form-control">
    </div>
    <input type="submit" class="btn btn-primary" value="Submit"/>
    <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
</form>
<div class="mt-lg-3">
    Or <a href="#">Forget Password</a>
</div>


<?php 
    if(isset($_POST['email']) && isset($_POST['password'])) {
        if($_POST['email'] == 'mahin@gmail.com') {
            $_SESSION['is_admin'] = true;
            $_SESSION['name'] = "text size";
            // header('Location: dashboard.php');
        } else {
            // designation
            $_SESSION['is_admin'] = false;
            $_SESSION['email']   =  'mahin@gmail.com';
            $_SESSION['name']    =  'Shakib Al Hasan';
            $_SESSION['emp_id']  =  '123';
            $_SESSION['designation']  =  'Software Developer';
            $_SESSION['sick_leave']  =  'Software Developer';
            $_SESSION['pending_leave']  =  'Software Developer';
            $_SESSION['casual_leave']  =  'Software Developer';


            // header('Location: dashboard.php');
        }
    } 
?>