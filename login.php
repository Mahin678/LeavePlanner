<?php 
    // include "./dashboard.php";
    include "./database.php";

    // $db = new DatabaseTest();
    // $query = "SELECT * FROM users";
    // $read = $db->getUserData($query); 
    // print_r($read->fetch_assoc());
    // echo "working";
?>
<div class="row login-container align-items-center container">
    <div class="col-lg-6">
        <h1 class="text-white">Welcome...</h1>
        <h1 class="text-white">Employees Leave Management System</h1>
    </div>
    <div class="col-lg-6">
        <div class="login-form-container">
            <nav class="d-flex align-items-center mb-lg-3">
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Employee</a>
                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Admin</a>
                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">New Employee</a>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <?php  include './form/employee_form.php' ?>
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <?php  include './form/admin_form.php' ?>
                </div>
                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                    <?php  include './form/new_employee_form.php' ?>
                </div>
            </div>
        </div>
    </div>
</div>
