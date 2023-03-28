<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <style>
        body{
            background-color: #f2f2f2;
        }
        .login{
            width:100%;
            height:100vh;
            align-items: center;
            justify-content: center;
            display: flex;
        }
    </style>

</head>
<body style="background-color: #f2f2f2">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4">
                <div class="card">
                    <div class="card-body">
                     <h3>login</h3>   
                    </div>
                    <div class="card-body">
                    <form action="login/login.php" method="POST">
                    <div>
                        <div class="mb-3"></div>
                        <label>Usuário</label>
                        <input type = "text"
                        name="usuario"
                        class="form-control"required>
                    </div>
                    <div>
                        <div class="mb-3"></div>
                        <label>Senha</label>
                        <input type = "password"
                        name="senha"
                        class="form-control"required>
                    </div>
                        <div>
                        <div class="mb-3"></div>
                        <button type = "Submit" 
                        class="btn
                        btn-primary">Login</button>
                        </div>
                    </div>
                </form>
                    </div>

                </div>
            </div>
    </div>
</body>
</html>