<?php @session_start();
    if(isset($_SESSION['error_login'])){
        $error = $_SESSION['error_login'];
        echo "<script>
             alert('$error')
            </script>";
    }
?>

<body>
<div class="container">

    <div class="form login" id="form">
        <div class="content">
            <form action="" method="POST" >
                <h1>Login</h1>
                <div class="group">
                    <input type="text" id="username-login" name="your_email" class="inputText" placeholder="&nbsp;" required>
                    <label for="username-login">Username</label>
                </div>
                <div class="group">
                    <input type="password" id="pass-login"  name="your_pass" class="inputText" placeholder="&nbsp;" required>
                    <label for="pass-login">Password</label>
                </div>
                <div class="group check">
                    <input type="checkbox"> Save login
                </div>
                <div class="group">

                </div>
                <button type="submit"  name="signin">Login</button>
                <p><a href="index.php">No, back to home</a></p>
            </form>
        </div>


        <div class="content">
            <form action="" method="POST" enctype="multipart/form-data">
                <h1>Register</h1>
                <div class="group">
                    <input type="text" id="username-reg"  name="name" class="inputText" placeholder="&nbsp;" required>
                    <label for="username-reg">Username</label>
                </div>
                <div class="group">
                    <input type="email" id="email-reg" name="email" class="inputText" placeholder="&nbsp;" required>
                    <label for="email-reg">Email</label>
                </div>
                <div class="group">
                    <input type="password" id="pass-reg" name="pass" class="inputText" placeholder="&nbsp;" required>
                    <label for="pass-reg">Password</label>
                </div>
                <div class="group">
                    <input type="password" id="repass-reg" name="re_pass" class="inputText" placeholder="&nbsp;" required>
                    <label for="pass-reg">Repassword</label>
                </div>
                <div class="group">
                    <!-- <label for="">Image</label> -->
                    <input type="file" name="image" class="inputFile">
                </div>
                <button type="submit" name="register" >Login</button>
                <p><a href="sign_in.php">I already have an account </a></p>
            </form>
        </div>


        <div class="form-rotate">
            <div id="rotate"></div>
        </div>
    </div>
    <div class="option">
        <div class="bg-active" id="bg-active"></div>
        <div class="changeType active" id="login">Login</div>
        <div class="changeType" id="register">Register</div>
    </div>
</div>
