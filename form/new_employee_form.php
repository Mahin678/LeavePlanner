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
    <input type="submit" class="btn btn-primary" value="Submit"/>
</form>
<?php 
    if(($_SERVER["REQUEST_METHOD"] == "POST")) {
        $emp_data = array();
        if(isset($_POST["name"]) && !empty($_POST["name"])) {
            $emp_data["name"] = $_POST["name"];
            $emp_data["username"] = $_POST["name"];
        }
        if(isset($_POST["position"]) && !empty($_POST["position"])) {
            $emp_data["position"] = $_POST["position"];
        }
        if(isset($_POST["password"]) && !empty($_POST["password"])) {
            $emp_data["password"] = $_POST["password"];
        }
        if(isset($_POST["email"]) && !empty($_POST["email"])) {
            $emp_data["email"] = $_POST["email"];
        }
        
        // if(isset($_POST["confirm_pass"]) && !empty($_POST["confirm_pass"])) {
        //     $emp_data["confirm_pass"] = $_POST["confirm_pass"];
        // }
        
        if(count($emp_data) > 0) {
            
            $columns = implode(", ", array_keys($emp_data)); // Get column names
            $values = "'" . implode("', '", $emp_data) . "'"; // Get values

            $query = "INSERT INTO employee ($columns) VALUES ($values)";

            $db = new DatabaseTest();
            $read = $db->inNewEmployee($query); 
            print_r($read);
            // echo $read->fetch_assoc();
        } else {
            echo "<h1>No data found</h1>";
        }
    }
?>