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