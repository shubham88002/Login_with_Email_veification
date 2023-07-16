<?php

$msg = "";

//Database Connection
include("includes/connection.php");

//Verify the Code & Update the Profile
if (isset($_GET['updatedeatils'])) {
    if (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM users WHERE update_code='{$_GET['updatedeatils']}'")) > 0) {
        if (isset($_POST['submit'])) {
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $phone = $_POST['phone'];
            $query = mysqli_query($conn, "UPDATE users SET fname='$fname',lname='$lname', phone='$phone' WHERE update_code='{$_GET['updatedeatils']}'");

            if ($query) {
                header("Location: welcome.php");
            }
        }
    }
}


?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Update Details</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="Login Form" />
    <!-- //Meta tag Keywords -->

    <link href="//fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <!--/Style-CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <!--//Style-CSS -->

    <script src="https://kit.fontawesome.com/af562a2a63.js" crossorigin="anonymous"></script>

</head>

<body>

    <!-- form section start -->
    <section class="w3l-mockup-form">
        <div class="container">
            <!-- /form -->
            <div class="workinghny-form-grid">
                <div class="main-mockup">
                    <div class="content-wthree">
                        <h2>Update Profile</h2>
                        <?php echo $msg; ?>
                        <form action="" method="post">
                            <input type="fname" class="fname" name="fname" placeholder="Enter Your First Name" required>
                            <input type="lname" class="lname" name="lname" placeholder="Enter Your Last Name" required>
                            <input type="phone" class="phone" name="phone" placeholder="Enter Your Phone no" required>
                            <button name="submit" class="btn" type="submit">Update</button>
                        </form>
                        <div class="social-icons">
                            <p>Back to! <a href="login.php">Login</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //form -->
        </div>
    </section>
</body>

</html>