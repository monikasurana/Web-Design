<!DOCTYPE html> 
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Details:-</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
    <body>

    <?php

$fname = $_POST['fname'];
$email = $_POST['email'];
$pwd = $_POST['pwd'];
$gender = $_POST['gender'];
$hobbies = $_POST['hobbies'];
$DOB = $_POST['dob'];
$contact = $_POST['contact'];
$course = $_POST['course'];
$uni = $_POST['uni'];
$tm = $_POST['tm'];
$obm = $_POST['obm'];
$per = $_POST['per'];



// echo $name .'<br>'.$email .'<br>'. $pwd .'<br>'. $gender .'<br>'. $hobbies .'<br>' .$DOB .'<br>' .$contact;

?>

        <div class="container">
            <h1>Details:-</h1>
            <table class="table table-dark table-striped">
                    <tr>
                        <th>Name</th>
                        <td><?php echo $fname; ?></td>
                    </tr>

                    <tr>
                        <th>Email</th>
                        <td><?php echo $email; ?></td>
                    </tr>

                    <tr>
                        <th>Password</th>
                        <td><?php echo $pwd; ?></td>
                    </tr>
                        
                    <tr>
                        <th>Gender</th>
                        <td><?php echo $gender; ?></td>
                    </tr>

                    <tr>
                        <th>Hobbies</th>
                        <td>
                        <ol>
                            <?php

                            foreach($hobbies as $hobby)
                            {
                                echo "<li>$hobby</li>";
                            }
                           
                              

                           
                            ?>
                             </ol>
                        </td>
                    </tr>

                    <tr>
                        <th>DOB</th>
                        <td><?php echo $DOB; ?></td>
                    </tr>

                    <tr>
                        <th>Contact</th>
                        <td><?php echo $contact; ?></td>
                    </tr>

                    <tr>
                        <th>University Name</th>
                        <td><?php echo $uni; ?></td>
                    </tr>

                    <tr>
                        <th>Course Name</th>
                        <td><?php echo $course; ?></td>
                    </tr>

                    <tr>
                        <th>Total Marks</th>
                        <td><?php echo $tm; ?></td>
                    </tr>

                    <tr>
                        <th>Obtained Marks</th>
                        <td><?php echo $obm; ?></td>
                    </tr>

                    <tr>
                        <th>Percentage</th>
                        <td><?php echo $per; ?></td>
                    </tr>
            </table>

        </div>
    </body>
    </html>

