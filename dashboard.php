
<?php 
    include './layout/header_meta.php';
    include './data.php';
    include './dashboard/dynamic_dashboard.php';
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
                                    <?php 
                                        if($admin) { 
                                            ?>
                                                <div class="tab-pane fade show <?php echo isset($_GET['action']) &&  $_GET['action'] != 0 ? '' : 'active'; ?>" id="leave-list" role="tabpanel" aria-labelledby="leave-list-tab">
                                                    <?php include './dashboard/admin/employee_leave_list.php'; ?>
                                                </div>
                                                <div class="tab-pane fade  <?php echo isset($_GET['action']) && $_GET['action'] != 0 ? 'show active' : ''; ?>" id="appeal-list" role="tabpanel" aria-labelledby="appeal-list-tab">
                                                    <?php 
                                                        if (isset($_GET['action']) && $_GET['action'] != 0) {
                                                            include './dashboard/admin/message_form.php';

                                                        } else {
                                                            include './dashboard/admin/applied_leave_list.php'; 
                                                        }
                                                    ?>
                                                </div>
                                            <?php 
                                        } else { ?>
                                                <div class="tab-pane fade show active" id="new-application" role="tabpanel" aria-labelledby="new-application-tab">
                                                    <?php include './dashboard/user/leave_application.php'; ?>
                                                </div>
                                                <div class="tab-pane fade" id="leave-history" role="tabpanel" aria-labelledby="leave-history-tab">
                                                    <?php include './dashboard/user/leave_history.php'; ?>
                                                </div>
                                                <div class="tab-pane fade" id="appeal" role="tabpanel" aria-labelledby="appeal-tab">
                                                    <?php include './dashboard/user/appeal.php'; ?>
                                                </div>
                                            <?php
                                        } ?> 
                                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                        <?php include './dashboard/update_profile.php'; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>