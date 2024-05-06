
<?php include './layout/header_meta.php'; ?>
    <body>
        <div class="dashboard_wrapper">
            <div class="container">
                <?php

                    // include './dashboard/dashboard_sidebar.php';
                    // include './dashboard/dashboard_top.php';
                ?>
                <div class="">
                    <?php include './dashboard/dashboard_header.php'; ?>
                    <div class="row dashboard_main_content mt-3">
                        <div class="col-lg-4">
                            <?php include './dashboard/dashboard_sidebar.php'; ?>
                        </div>
                        <div class="col-lg-8">
                            <div class="dashboard_content">
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                        <?php include './dashboard/user/leave_application.php'; ?>
                                    </div>
                                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                        <?php include './dashboard/user/pending_leave.php'; ?>
                                    </div>
                                    <div class="tab-pane fade" id="nav-history" role="tabpanel" aria-labelledby="nav-history-tab">
                                        Leave History
                                    </div>
                                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                        Update Profile
                                    </div>
                                    <div class="tab-pane fade" id="nav-appeal" role="tabpanel" aria-labelledby="nav-appeal-tab">
                                        <form class="form-container" method="POST">
                                            <div class="form-group">
                                                <label for="name">Leave Id</label>
                                                <select class="form-control">
                                                    <option>Leave Id</option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="name">Action</label>
                                                <select class="form-control">
                                                    <option>Select</option>
                                                    <option>Appeal</option>
                                                    <option>Edit</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="name">Leave Reason</label>
                                                <select class="form-control">
                                                    <option>Sick Leave</option>
                                                    <option>Casual Leave</option>
                                                    <option>Others</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Description</label>
                                                <textarea type="email" name="email"  class="form-control"></textarea>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="email">Start Leave</label>
                                                        <input type="date" name="picker"  class="form-control"/>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="email">End Leave</label>
                                                        <input type="date" name="picker"  class="form-control"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="submit" class="btn btn-primary" value="Submit"/>
                                        </form>
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