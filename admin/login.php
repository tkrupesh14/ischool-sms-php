<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | iSchool Admin</title>
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- custom style -->
        <link rel="stylesheet" href="./css/login.style.css">
</head>
<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="#" class="signin-form" method="POST">
                    <h2 class="title">Sign In</h2>
                    <div class="input-field">
                        <i class="fa fa-user"  style="position: relative; left: 20px; top: 15px; color: #acacac;  font-size: 1.1rem;"></i>
                        <input type="text" name="username" id="" placeholder="Username">
                    </div>
                    <div class="input-field">
                        <i class="fa fa-lock" style="position: relative; left: 20px; top: 15px; color: #acacac; font-size: 1.1rem; "></i>
                        <input type="password" name="password" id="" placeholder="Passsword">
                    </div>
                    <input type="submit" value="Login" name="loginBtn" class="btn solid">
                </form>
                <form action="#" class="signup-form" method="POST">
                    <h2 class="title">Sign Up</h2>
                    <div class="input-field">
                        <i class="fa fa-user"  style="position: relative; left: 20px; top: 15px; color: #acacac;  font-size: 1.1rem;"></i>
                        <input type="text" name="username" id="" placeholder="Username">
                    </div>
                    <div class="input-field">
                        <i class="fa fa-envelope"  style="position: relative; left: 20px; top: 15px; color: #acacac;  font-size: 1.1rem;"></i>
                        <input type="email" name="email" id="" placeholder="Email ID">
                    </div>
                    <div class="input-field">
                        <i class="fa fa-lock" style="position: relative; left: 20px; top: 15px; color: #acacac; font-size: 1.1rem; "></i>
                        <input type="password" name="password" id="" placeholder="Passsword">
                    </div>
                    <input type="submit" value="Sign Up" name="signupBtn" class="btn solid">
                </form>
            </div>
        </div>
            <div class="panels-container">
                <div class="panel left-panel">
                    <div class="content">
                        <h3>New Here?</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi, dicta! Molestias nihil dolore magni. Facere corrupti vel hic perferendis quam!</p>
                        <button class="btn transparent" id="sign-up-btn">Sign Up</button>
                    </div>
                    <img src="./assets/Images/login/login.svg" class="image" alt="Login Image">
                </div>
                <div class="panel right-panel">
                    <div class="content">
                        <h3>One of us?</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi, dicta! Molestias nihil dolore magni. Facere corrupti vel hic perferendis quam!</p>
                        <button class="btn transparent" id="sign-in-btn">Sign In</button>
                    </div>
                    <img src="./assets/Images/login/register.svg" class="image" alt="Login Image">
                </div>
            </div>
        
    </div>

    <!-- javascript -->
        <!-- font-awesome -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/js/all.min.js" integrity="sha512-cyAbuGborsD25bhT/uz++wPqrh5cqPh1ULJz4NSpN9ktWcA6Hnh9g+CWKeNx2R0fgQt+ybRXdabSBgYXkQTTmA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


        <script>
            const sign_in_btn = document.querySelector('#sign-in-btn');
            const sign_up_btn = document.querySelector('#sign-up-btn');
            const container = document.querySelector('.container');
            
            sign_up_btn.addEventListener('click', () => {
                container.classList.add("sign-up-mode");
            });
            sign_in_btn.addEventListener('click', () => {
                container.classList.remove("sign-up-mode");
            });
        </script>
</body>
</html>