<?php

$fname = $_POST['fname'];
$email = $_POST['email'];
$pwd = $_POST['pwd'];
$gender = $_POST['gender'];
$hobbies = $_POST['hobbies'];
$date = $_POST['date'];
$month = $_POST['month'];
$year = $_POST['year'];
$DOB = $date."-".$month."-".$year;
$contact = $_POST['contact'];



// echo $name .'<br>'.$email .'<br>'. $pwd .'<br>'. $gender .'<br>'. $hobbies .'<br>' .$DOB .'<br>' .$contact;

?>

<!DOCTYPE html> 
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registration</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="validreg.js"></script>
    </head>
    <body>

    <div class="container">
            <h2>Education Details:-</h2>
        <form action="registration_action.php" method="post" >


        <input type="hidden" name = "fname" value="<?php echo $fname; ?>">
        <input type="hidden" name = "email" value="<?php echo $email; ?>">
        <input type="hidden" name = "pwd" value="<?php echo $pwd; ?>">
        <input type="hidden" name = "gender" value="<?php echo $gender; ?>">
        <input type="hidden" name = "dob" value="<?php echo $DOB; ?>">
        <input type="hidden" name = "contact" value="<?php echo $contact; ?>">


<?php

foreach($hobbies as $hobby)
{

?>

        <input type="checkbox" name="hobbies[]" value="<?php echo $hobby; ?>" checked style="display:none" >
           
<?php } ?>

        <div class="form-group">
            <label for="sel1">Select Course:</label>
            <select class="form-control from-control-sm" id="sel1" name="course">
                <option value="">Select Course</option>
                <option value="BCA">BCA</option>
                <option value="BSC">BSC</option>
                <option value="MCA">MCA</option>
            </select>
        </div>

        <div class="form-group">
            <label for="sel1">Select University:</label>
            <select class="form-control" id="sel1" name="uni">
            <option value="">Select University</option>
                <option value="Chandigarh University">Chandigarh University</option>
                <option value="Punjab University">Punjab University</option>
                <option value="Teerthankar Mahaveer University">Teerthankar Mahaveer University</option>
            </select>
        </div>

        <div class="form-group">
            <label for="stu_uid">Total Marks</label>
            <input type="text" class="form-control" placeholder="Enter Total Marks" id="tm" name="tm">
        </div>

        <div class="form-group">
            <label for="stu_name">Obtained Marks</label>
            <input type="text" class="form-control" placeholder="Enter Obtained Marks" id="obm" name="obm" onblur="return PerCal();">
        </div>

        <div class="form-group">
            <label for="stu_percent">Percentage</label>
            <input type="text" class="form-control" id="per" name="per" readonly>
        </div>

        <br>
        <input type="submit" class="btn btn-danger" value="Submit">
        </form>
    </div>
</body>
</html>


