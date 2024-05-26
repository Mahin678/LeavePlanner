
<?php 
    include './layout/header_meta.php';
?>
    <body>
        <div class="dashboard_wrapper">
            <div class="container-xl">
                <?php

                    // include './dashboard/dashboard_sidebar.php';
                    // include './dashboard/dashboard_top.php';
                ?>
                <div class="">
                    <?php include './dashboard/dashboard_header.php'; ?>
                    <div class="row dashboard_main_content mt-3">
                        <div class="col-lg-3">
                            <?php include './dashboard/dashboard_sidebar.php'; ?>
                        </div>
                        <div class="col-lg-9">
                            <div class="dashboard_content">
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show " id="applied-leave" role="tabpanel" aria-labelledby="nav-applied-leave-tab">
                                        <?php  
                                            if(isset($_GET['action'])) {
                                                include './dashboard/admin/message_form.php';
                                            } else {
                                                include './dashboard/admin/applied_leave_list.php';
                                            }
                                            ?>
                                    </div>
                                    <div class="tab-pane fade show" id="employee-leave" role="tabpanel" aria-labelledby="nav-employee-leave-tab">
                                        <?php include './dashboard/admin/employee_leave_list.php'; ?>
                                    </div>


                                    <!-- <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                        <?php include './dashboard/user/leave_application.php'; ?>
                                    </div>
                                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                        Leave History
                                    </div>
                                    <div class="tab-pane fade" id="nav-history" role="tabpanel" aria-labelledby="nav-history-tab">
                                        <?php include './dashboard/user/pending_history.php'; ?>
                                    </div>
                                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                        Update Profile
                                    </div>
                                    <div class="tab-pane fade" id="nav-appeal" role="tabpanel" aria-labelledby="nav-appeal-tab">
                                        <?php include './dashboard/user/appeal.php'; ?>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>