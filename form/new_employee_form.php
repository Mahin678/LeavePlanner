<form class="form-container" method="POST">
    <div class="form-group">
        <label for="name">Employee Name</label>
        <input type="text" name="name"  class="form-control" placeholder="Write Your Name...">
    </div>
    <div class="form-group">
        <label for="name">Employee Position</label>
        <select class="form-control">
            <option>Software Developer</option>
            <option>Software Engineer</option>
            <option>Designer</option>
            <option>Support</option>
            <option>Content Writer</option>
        </select>
    </div>
    <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" name="email"  class="form-control">
    </div>
    <div class="form-group">
        <label for="password" >Password</label>
        <input type="password" name="password" class="form-control">
    </div>
    <div class="form-group">
        <label for="password" >Retype Password</label>
        <input type="password" name="password" class="form-control">
    </div>
    <input type="submit" class="btn btn-primary" value="Submit"/>
</form>