<form class="form-container" method="POST">
        <div class="form-group">
            <label for="leave_type">Leave Reason</label>
            <select name="leave_type" class="form-control">
                <option value="sick">Sick Leave</option>
                <option value="casual">Casual Leave</option>
                <option value="others">Others</option>
            </select>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea type="text" name="description"  class="form-control"></textarea>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="start_date">Start Leave</label>
                    <input type="date" name="start_date"  class="form-control"/>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="end_date">End Leave</label>
                    <input type="date" name="end_date"  class="form-control"/>
                </div>
            </div>
        </div>
        <input type="submit" class="btn btn-primary" value="Submit"/>
    </form>
