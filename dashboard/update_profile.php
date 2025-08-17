<form class="form-container" method="POST">
    <div class="form-group">
        <label class="text-light" for="name">Employee Name</label>
        <input type="text" name="name"  class="form-control" placeholder="Write Your Name..." value="<?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name']) : 'JohnDoe'; ?>">
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
        <input type="email" name="email"  class="form-control" value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : 'JohnDoe'; ?>">
    </div>
    <div class="form-group">
        <label class="text-light" for="password" >Password</label>
        <input type="password"  name="password" class="form-control" value="<?php echo isset($_POST['password']) ? htmlspecialchars($_POST['password']) : 'JohnDoe'; ?>">
    </div>
    <div class="form-group">
        <label class="text-light" for="em_confirm_pass" >Retype Password</label>
        <input type="password" name="em_confirm_pass" class="form-control">
    </div>
    <input name="type" value="update Profile" type="submit" class="btn btn-primary"/>
</form>
