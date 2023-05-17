
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NATURALS BEAUTY SALON AND SPA</title>
    <style>
        .head{
            background-color: orange;
            text-align: center;
            font-size: 30px;
        }
        .priya{
            border: 10px solid royalblue;
            width: 300px;
            height: 100px;
            text-align: center;
            padding: 50px;
           margin-left: 350px;
          margin-bottom: 400PX;
          margin-top: 100PX;
        }
        body{
            background: #007991;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #78ffd6, #007991);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #78ffd6, #007991); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        }
        
    </style>
</head>
<body>
    <div class="head"> HIWAGA BEAUTY SALON AND SPA</div>
    <div class="priya">
        <form name="form" onsubmit="return isvaild()" action="loginauth.php" autocomplete="off" method="POST">
        <label for="name">username</label>
        <input type="text" placeholder="enter username" name="username">
        <br>
        <br>
        <label for="name">password</label>
        <input type="password" placeholder="password" name="password">
        <br>
        <br>
        <button type="submit" name="submit">login</button>
        <br>
        <br>
        <a href="/">forgot password</a>
    </form>
    <a href="register.php">register</a>
    </div>
    <script>
        function isvaild(){
            var username = document.form.username.value;
            var password = document.form.password.value;
            if(username.length=="" && password.length=="")
            {
                alert("username and password field is empty!!");
                return false;
            }
            else{
            if(username.length=="")
            {
                alert("username  field is empty!!");
                return false;
            }
            if( password.length=="")
            {
                alert("password field is empty!!");
                return false;
            }
            }
        }
    </script>
</body>
</html>