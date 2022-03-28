<?php include('connect_student.php') ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student's Registration</title>
    <link rel="stylesheet" href="css.css">
</head>

<body>

    <header class="header">
        <a href="#" class="logo">
            <img src="image/logo update 2.png" width="60%">
        </a>
        <nav class="navbar">
            <a href="../Homepage/homepage.html">Home</a>
            <a href="../OTP_Login/login.html">Sign In</a>
            <a href="../Signup/Reg.html">Sign Up</a>
            <a href="../FAQs pages/FQAsPage/index.html">FAQs</a>
        </nav>
    </header>

    <br> <br>
    <br> <br>
    <br> <br>

    <div class="registration-form">
        <h2>Learner's Registration<span></span></h2><br>
        <h3>Please fill out the Information</h3><br>
        <form action="StudentReg.php" enctype="multipart/form-data" method="POST">

            <input type="text" id="1" name="fname" placeholder="Firstname" required><br><br>
            <input type="text" id="1" name="mname" placeholder="Middlename" required><br><br>
            <input type="text" id="2" name="lname" placeholder="Lastname" required><br><br>
            <input type="text" id="3" name="email" placeholder="Email Address" required><br><br>
            <input type="text" id="4" name="cntc" placeholder="Contact Number" required><br><br>
            <input type="password" name="password_1" placeholder="Password" required><br><br>
            <input type="password" name="password_2" placeholder="Confirm Password" required><br><br>
            <?php include ('errors.php'); ?>

            <h3>Additional Information</h3><br>
            <p>Upload your 2x2 picture here:</p><br>
            <form action="/action_page.php">
                <input type="file" name="tobto"><br><br>
                <p>School ID here:</p><br>
                <form action="/action_page.php">
                    <input type="file" name="poi"><br><br>

                    <label class="container">
                        <input type="checkbox" required>
                        <p>By checking this box, you are agreeing to our terms of service </p>
                        <span class="checkmark"></span>
                    </label>

                    <button type="submit" name=reg_user>Register</button>

                </form>
    </div>

</body>

</html>