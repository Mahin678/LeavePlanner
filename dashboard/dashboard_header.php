<div class="py-3 px-3 text-white user_profile text-center">
    
    <h4>
        <?php  echo $_SESSION["name"]; ?>
    </h4>
    <div><?php  echo $_SESSION["designation"]; ?></div>
    <a href="/LeavePlanner/">Home </a>
</div>
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