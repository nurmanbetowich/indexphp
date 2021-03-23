<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <div class="main">
        <h2>Log In</h2>
        <form id="form" action="main.php">
            <div class="username">
                <Label>Username :</Label>
                <input type="text" name="userName" id="user-name">
                <div id="usernameError"></div>
            </div>
            <br>
            <div class="password">
                <Label>Password :</Label>
                <input type="password" name="password" id="password-user">
                <div id="passwordError"></div>
            </div>
            <br>
            <div class="submitArea">
                <button id="clearButton">Clear</button>
                <button type="submit" id="submitButton">Submit</button>
            </div>
        </form>
    </div>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        .main{
            width: 450px;
            height: 450px;
            background-color: #ebfff2;
            margin: auto;
            border:2px solid black;

        }
        h2 {
            text-align: center;
        }
        form {
            margin: 20px;
        }
        form div {
            margin: 15px;
        }
        Label {
            text-align: justify;
            float: left;
            font-size: 19px;
            margin: 5px;
        }
        input {
            padding: 5px 10px;
            outline: none;
        }   
        button {
            padding: 10px;
            background-color: black;
            color:white;
            border:1px solid  red;
        }


    </style>
    <script>
        window.onload = function() {
            let form = document.getElementById('form');
            let username = document.getElementById('user-name');
            let password = document.getElementById('password-user');
            let passwordError = document.getElementById('passwordError');
            let usernameError = document.getElementById('usernameError');
            let clear = document.getElementById('clearButton');

            clear.addEventListener('click',function(){
                username.value = null;
                password.value = null;
            })
            
            username.oninput = function(){
                usernameError.innerHTML = null;
            }
            password.oninput = function(){
                passwordError.innerHTML = null;
            }

            form.addEventListener('submit',function(e){
                if(username.value === null || username.value === ""){
                    e.preventDefault();
                    usernameError.innerHTML = `
                    <p style="color:red;">
                        Username is empty!
                    </p>`;
                }
                if(password.value == null || password.value ===""){
                    e.preventDefault();
                    passwordError.innerHTML = `
                    <p style="color:red;">
                        Password is empty!
                    </p>`;
                }
                if(username.value.length > 0 && password.value.length > 0 ){
                    if(username.value == "Nurumbek" && password.value == "1234"){
                        alert("success");
                    }
                    else{
                        e.preventDefault();
                        alert("Invalid Login")
                    }
                }
            });
        }
    </script>
</body>
</html>
