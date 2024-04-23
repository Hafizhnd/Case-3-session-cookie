<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat with Us!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="styles.css">
    <title>Login</title>

    <script>
        
    </script>
</head>
<body>

        <div class="containerX">
            <div class="Login">
                <form action="login.php" method="post" id="login" class="form"> 
                    <span id="login-lable">Login</span><br>
                    <div id="error" style="color: red;"></div>
                    <div class = "email"> 
                        <h4><label class="subtitle" for="email">Email</label> </h4>                 
                        <input placeholder="example@gmail.com" name="email" id ="email" class="input" type="text" required> <br><br><br>
                    </div> 
                    <div class = "password">
                        <h4><label class="subtitle" for="password">Password</label></h4>
                        <input placeholder="your password" name="password" id ="password" class="input" type="password"> <br><br><br>
                    </div>
                    <div>
                        <h6><input type="checkbox" id="remember" name="remember"> <label for="remember">Remember Me</label></h6>
                    </div>
                    <button type="submit" id="btn">Submit</button> 
                </form>
            </div>
        </div>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('login').addEventListener('submit', function (e) {
    e.preventDefault();
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    var remember = document.getElementById('remember').checked;

    if(!isValidEmail(email)) {
      document.getElementById('error').innerHTML = "Email tidak valid";
      return;
    }

    if(!isValidPassword(password)) {
      document.getElementById('error').innerHTML = "Password tidak valid";
      return;
    }

    var xhr = new XMLHttpRequest();
    xhr.open('POST', this.getAttribute('action'), true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function () {
      if(xhr.readyState == 4 && xhr.status == 200) {
        if (xhr.responseText === 'success') {
          window.location.replace("profile.php");
        } else {
          document.getElementById('error').innerHTML = "Email dan/atau password tidak sesuai";
        }
      }
    };
    xhr.send('email=' + email + '&password=' + password + '&remember=' + remember);
    });

    function isValidEmail(email) {
        return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
    }

    function isValidPassword(password) {
        return /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[^\da-zA-Z]).{8,}$/.test(password);
    }
    });
  </script>

</body>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>