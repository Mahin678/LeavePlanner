
<?php include './layout/header_meta.php'; ?>
    <body>
        <div class="container">
            <?php

                // include './dashboard/dashboard_sidebar.php';
                // include './dashboard/dashboard_top.php';
            ?>
            <div class="">
                <div class="d-flex justify-content-between dashboard_top_content align-items-center">
                    <div class="dashboard_top_item d-flex align-items-center justify-content-center w-100">
                        <?php 
                            echo file_get_contents('./assets/casual.svg');
                        ?>
                        <div>
                            <div>12</div>
                            Total Casual Leave
                        </div>
                    </div>
                    <div class="dashboard_top_item d-flex align-items-center justify-content-center w-100">
                        <?php 
                            echo file_get_contents('./assets/sick.svg');
                        ?>
                        <div>
                            <div>12</div>
                            Total Sick Leave
                        </div>
                    </div>
                    <div class="dashboard_top_item d-flex align-items-center justify-content-center w-100">
                        <?php 
                            echo file_get_contents('./assets/pending.svg');
                        ?>
                        <div>
                            <div>12</div>
                            Total Pending Leave
                        </div>
                    </div>
                </div>
                <div class="bg-success py-3 px-3 text-white">
                    <h4>S. M. Mahin Tazuar</h4>
                    <div>Software Developer</div>
                </div>
                <div class="row dashboard_main_content">
                    <div class="col-lg-4">
                        <div class="dashboard_sidebar">
                            <nav class="d-flex align-items-center mb-lg-3">
                                <div class="nav flex-column nav-pills me-3 w-100" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Leave Application</a>
                                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Pending Leaves</a>
                                    <a class="nav-item nav-link" id="nav-history-tab" data-toggle="tab" href="#nav-history" role="tab" aria-controls="nav-history" aria-selected="false">Leave History</a>
                                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Update Profile</a>
                                    <a class="nav-item nav-link" id="nav-appeal-tab" data-toggle="tab" href="#nav-appeal" role="tab" aria-controls="nav-appeal" aria-selected="false">Appeal or Edit</a>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="dashboard_content mt-3">
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <form class="form-container" method="POST">
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
                                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                    <div class="pending-leave-container">
                                        <div class="pending-leave-header row ">
                                            <div class="col-lg-2"> Leave Id No  </div>
                                            <div class="col-lg-2"> Leave Type </div>
                                            <div class="col-lg-2">Starting Date</div>
                                            <div class="col-lg-2">Ending Date</div>
                                            <div class="col-lg-2">Status</div>
                                            <div class="col-lg-2">Attempt Date</div>
                                        </div>
                                        <div class="pending-leave-item row">
                                            <div class="col-lg-2"> #1  </div>
                                            <div class="col-lg-2"> Sick </div>
                                            <div class="col-lg-2">18/11/2000</div>
                                            <div class="col-lg-2">18/11/2000</div>
                                            <div class="col-lg-2">Approved</div>
                                            <div class="col-lg-2">1823</div>
                                        </div>
                                        <div class="pending-leave-item row">
                                            <div class="col-lg-2"> #1  </div>
                                            <div class="col-lg-2"> Sick </div>
                                            <div class="col-lg-2">18/11/2000</div>
                                            <div class="col-lg-2">18/11/2000</div>
                                            <div class="col-lg-2"> Decline </div>
                                            <div class="col-lg-2">1823</div>
                                        </div>
                                    </div>
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
    </body>
</html>