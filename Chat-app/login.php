<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
</head>
<body>
    <div class="wrapper">
        <section class="form signup">
            <header>Web Chat Application</header>
            <form action="#">
                <div class="error-txt">This is an error message</div>
                    <div class="field input">
                        <label>Email Address</label>
                        <input type="text" placeholder="Enter your email">
                    </div>
                    <div class="field input">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Enter your password" required>
                    <i class="fas fa-eye"></i>
                    </div>
                    <div class="field button">
                        <input type="submit" value="Continue to chat">
                    </div>
            </form> 
            <div class="link">Not yet signed up? <a href="index.php">Sign up</a></div>
        </section>
    </div>
    <script src="javascript/users.js"></script>
</body>
</html>