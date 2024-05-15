<a href="dashboard.php" class="btn btn-info">Main Menu</a>
<div class="pending-leave-container">
    <div class="pending-leave-header row ">
        <div class="col-lg-2"> Employee Name  </div>
        <div class="col-lg-2">Leave Type</div>
        <div class="col-lg-2">Starting Date</div>
        <div class="col-lg-2">Ending Date</div>
        <div class="col-lg-2">Total Leave </div>
    </div>
    <div class="pending-leave-item row">
        <div class="col-lg-2">Mahin Tazuar</div>
        <div class="col-lg-2">Cegual</div>
        <div class="col-lg-2">11/02/2024</div>
        <div class="col-lg-2">01/03/2024</div>
        <div class="col-lg-2">3</div>
    </div>
</div>
<form class="form-container" method="POST">
        <div class="form-group">
            <label for="name">Leave</label>
            <select class="form-control">
                <option>Approve</option>
                <option>Decline</option>
                <option>Conditional</option>
            </select>
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
        <div class="form-group">
            <label for="email">Description</label>
            <textarea type="email" name="email"  class="form-control"></textarea>
        </div>
        <input type="submit" class="btn btn-primary" value="Submit"/>
    </form>