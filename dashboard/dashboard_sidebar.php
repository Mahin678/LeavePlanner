<div class="dashboard_sidebar">
    <nav class="d-flex align-items-center mb-lg-3">
        <div class="nav flex-column nav-pills me-3 w-100" id="nav-tab" role="tablist">
            <?php
                if($admin) { ?>
                    <a class="nav-item nav-link active" id="leave-list-tab" data-toggle="tab" href="#leave-list" role="tab" aria-controls="leave-list" aria-selected="true">Leave List</a>
                    <a class="nav-item nav-link" id="appeal-list-tab" data-toggle="tab" href="#appeal-list" role="tab" aria-controls="appeal-list" aria-selected="false">Appeal List</a>
                    <a class="nav-item nav-link" id="employee-leave-tab" data-toggle="tab" href="#employee-leave" role="tab" aria-controls="employee-leave" aria-selected="false">Total Leave by employee</a>
                    <?php
                } else { ?>
                    <a class="nav-item nav-link active" id="new-application-tab" data-toggle="tab" href="#new-application" role="tab" aria-controls="new-application" aria-selected="true">New Leave Application</a>
                    <a class="nav-item nav-link" id="leave-history-tab" data-toggle="tab" href="#leave-history" role="tab" aria-controls="leave-history" aria-selected="false">Leave History</a>
                    <a class="nav-item nav-link" id="appeal-tab" data-toggle="tab" href="#appeal" role="tab" aria-controls="appeal" aria-selected="false">Appeal or Edit</a>
                <?php }
            ?>
            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Update Profile</a>
        </div>
    </nav>
</div>