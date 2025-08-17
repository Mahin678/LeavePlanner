<?php 
$db = new DatabaseTest();
$response = $db->get_leave_by_employee($username);

if ($response['status'] === 'success') {
    $userLeaves = $response['data'];
?>
<div class="pending-leave-container">
    <div class="pending-leave-header row">
        <div class="col-lg-1">Leave Id</div>
        <div class="col-lg-2">Type</div>
        <div class="col-lg-2">Starting Date</div>
        <div class="col-lg-2">Ending Date</div>
        <div class="col-lg-2">Status</div>
        <div class="col-lg-2">Last Attempt</div>
        <div class="col-lg-1">Appeal</div>
    </div>

    <?php foreach ($userLeaves as $leave) { ?>
    <div class="pending-leave-item row">
        <div class="col-lg-1">#23</div>
        <div class="col-lg-2"><?php echo $leave['leave_type']; ?></div>
        <div class="col-lg-2"><?php echo date('F j, Y', strtotime($leave['start_date'])); ?></div>
        <div class="col-lg-2"><?php echo date('F j, Y', strtotime($leave['end_date'])); ?></div>
        <div class="col-lg-2"><?php echo ucfirst($leave['status']); ?></div>
        <div class="col-lg-2"><?php echo !empty($leave['last_attempt']) ? date('F j, Y', strtotime($leave['last_attempt'])) : 'Unknown'; ?></div>
        <div class="col-lg-1">
            <button class="btn btn-sm btn-danger">Yes</button>
        </div>
    </div>
    <?php } ?>
</div>
<?php 
} else {
    echo "<p>No leave records found for this user.</p>";
}
?>
