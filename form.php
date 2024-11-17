<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="login-container">
        <div class="login-form">
            <h2>Login</h2>
            <form action="register.php" method="POST">
                <div class="input-group">
                    <label >Father</label>
                    <input type="text"  name="father" placeholder="Enter your father name" required>
                </div>
                <div class="input-group">
                    <label for="email">Mother</label>
                    <input type="text"  name="mother" placeholder="Enter your Mother name" required>
                </div>
                <div class="input-group">
                    <label for="email">Sister</label>
                    <input type="text"  name="sister" placeholder="Enter your Sister name" required>
                </div>

                <div class="input-group">
                    <label for="password">Sister2</label>
                    <input type="Text"  name="sister2" placeholder="Enter your Sister 2" required>
                </div>

                <div class="remember-me">
                    <label for="remember">
                        <input type="checkbox" id="remember" name="remember"> Remember me
                    </label>
                </div>

                <button type="submit" class="btn-login">Submit</button>
                <br>
                <br>
                <button type="Reset" class="btn-login">Reset data</button>

                

               
            </form>
        </div>
    </div>

</body>
</html>
