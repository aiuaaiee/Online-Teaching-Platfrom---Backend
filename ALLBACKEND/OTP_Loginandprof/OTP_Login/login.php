<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="login.css">
    
</head>
<body>
    <!-- header section starts  -->

    <header class="header">
        <a href="../Homepage/homepage.html" class="logo">
            <img src="./images/logo v5.png" width="40%" height="40%">
        </a>
        <nav class="navbar">
            <a href="../Homepage/homepage.html">Home</a>
            <a href="login.html">Sign in</a>
            <a href="../Signup/Reg.html">Sign up</a>
            <a href="../FAQs pages/FQAsPage/index.html">FAQs</a>
        </nav>
    </header>
<!-- login section starts  -->
    <div class="login-form">
        <h1>Sign In <span></span> </h1><br><br>
        <form method="post" action="../Profile/mylogin.php">
            <span class="user-login">
                <label>Email Address</label><br>
                <input type="email" name="email" id="email" placeholder="Email Address" required></input><br><br>
                <label>Password </label><br>
                <input type="password" name="password" placeholder= "Password" id="myInput" required> </input><br>

            <span class="eye" onclick="myFunction()">
                <i id="hide1" class="fas fa-eye-slash"></i>
                <i id="hide2" class="fas fa-eye"></i>
            </span>

                <input type="checkbox" name="remember" id="check"></input>
                <label for="check"  id="remember">Remember me</label>
                <a href="">Forgot Password?</a><br><br>
    
                <input type="submit" value="Login" > </input>
            </span>
            
             
            </div>
        </form>
    </div>
    <!-- JS  -->
    <script>
        function myFunction(){
            var x = document.getElementById("myInput");
            var y = document.getElementById("hide1");
            var z = document.getElementById("hide2");
            if(x.type === 'password'){
                x.type = "text";
                y.style.display ="block";
                z.style.display ="none";
            }
            else{
                x.type = "password";
                y.style.display ="none";
                z.style.display ="block";
            }
        }

    </script>


</body>

</html>