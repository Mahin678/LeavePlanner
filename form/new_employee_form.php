<form class="form-container" method="POST">
    <div class="form-group">
        <label class="text-light" for="name">Employee Name</label>
        <input type="text" name="name"  class="form-control" placeholder="Write Your Name...">
    </div>
    <div class="form-group">
        <label class="text-light" for="position">Employee Position</label>
        <select class="form-control" name="position">
            <option>Software Developer</option>
            <option>Software Engineer</option>
            <option>Designer</option>
            <option>Support</option>
            <option>Content Writer</option>
        </select>
    </div>
    <div class="form-group">
        <label class="text-light" for="email">Email address</label>
        <input type="email" name="email"  class="form-control">
    </div>
    <div class="form-group">
        <label class="text-light" for="password" >Password</label>
        <input type="password"  name="password" class="form-control">
    </div>
    <div class="form-group">
        <label class="text-light" for="em_confirm_pass" >Retype Password</label>
        <input type="password" name="em_confirm_pass" class="form-control">
    </div>
    <input name="type" value="new" type="submit" class="btn btn-primary"/>
</form>
