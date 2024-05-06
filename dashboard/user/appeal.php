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