<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        html,body{ 
            background-image: url('https://opticahd.com/wp-content/uploads/2021/04/portrait-young-stylish-girl-model-casual-summer-clothes-with-natural-makeup-sunglasses-isolated-1536x1148.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            height: 100%;
            font-family: 'Numans', sans-serif;
        }
        .container {
    height: 100vh; /* Utiliza toda la altura de la ventana */
    display: flex; /* Usa flexbox para centrar verticalmente */
    justify-content: flex-start; /* Alinea el contenido hacia la izquierda */
    align-items: center; /* Centra verticalmente */
    margin-left: 20%; /* Espacio en el lado izquierdo */
}

        .card{
            height: 370px;
            margin-top: auto;
            margin-bottom: auto;
            width: 400px;
            background-color: rgba(0,0,0,0.5) !important;
        }

        .social_icon span{
            font-size: 60px;
            margin-left: 10px;
            color: #FFC312;
        }

        .social_icon span:hover{
            color: white;
            cursor: pointer;
        }

        .card-header h3{
            color: white;
        }

        .social_icon{
            position: absolute;
            right: 20px;
            top: -45px;
        }

        .input-group-prepend span{
            width: 50px;
            background-color: #FFC312;
            color: black;
            border:0 !important;
        }

        input:focus{
            outline: 0 0 0 0  !important;
            box-shadow: 0 0 0 0 !important;

        }

        .remember{
            color: white;
        }

        .remember input
        {
            width: 20px;
            height: 20px;
            margin-left: 15px;
            margin-right: 5px;
        }

        .login_btn{
            color: black;
            background-color: #FFC312;
            width: 100px;
        }

        .login_btn:hover{
            color: black;
            background-color: white;
        }

        .links{
            color: white;
        }

        .links a{
            margin-left: 4px;
        }
    </style>
</head>
<body>
    <form action="login.php?action=login" method="post">
        <div class="container">
            <div class="d-flex justify-content-center h-100">
                <div class="card">
                    <div class="card-header">
                        <h3>Sign In</h3>
                        <div class="d-flex justify-content-end social_icon">
                            <span><i class="fab fa-facebook-square"></i></span>
                            <span><i class="fab fa-google-plus-square"></i></span>
                            <span><i class="fab fa-twitter-square"></i></span>
                        </div>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    <div class="form-outline mb-4">
    <input type="email" id="form2Example1" class="form-control" name="correo" />
    <label class="form-label" for="form2Example1">Email address</label>
  </div>
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                    <div class="form-outline mb-4">
    <input type="password" id="form2Example2" class="form-control"  name="contrasena"/>
    <label class="form-label" for="form2Example2">Password</label>
  </div>

                            <div class="row align-items-center remember">
                                <input type="checkbox">Remember Me
                            </div>
                            <div class="form-group">
                            <input type="submit" class="btn btn-primary btn-block mb-4">Sign in</input>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-center links">
                            Don't have an account?<a href="#">Sign Up</a>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="login.php?action=forgot">Forgot your password?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>
</html>
