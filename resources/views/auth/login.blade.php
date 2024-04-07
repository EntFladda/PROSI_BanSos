<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login Page</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <style>
            /* CSS untuk membuat logo memenuhi sisi kiri */
            .logo-container {
                background-image: url('images/login.png'); /* Ganti path/to/your/logo.jpg dengan path logo Anda */
                background-size: cover;
                height: 100vh; /* Mengatur tinggi logo agar memenuhi tinggi layar */
            }
            .login{
                display: flex;
                justify-content: space-around;
            }
            .button{
                display: inline-block;
                font-weight: 400;
                color: #ffffff;
                text-align: center;
                vertical-align: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
                background-color: #007bff;
                border: 1px solid transparent;
                padding: .575rem 18.75rem;
                font-size: 1rem;
                line-height: 1.5;
                border-radius: .55rem;
                transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
            }
            .form{
                display: block;
                width: 100%;
                height: calc(1.5em + .75rem + 2px);
                padding: 1.5rem 15rem;
                font-size: 1rem;
                font-weight: 400;
                line-height: 1.5;
                color: #495057;
                background-color: #fff;
                background-clip: padding-box;
                border: 1px solid #000000;
                border-radius: .75rem;
                transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
            }
            </style>
    </head>
    <body>
    <div class="container-fluid">
        <div class="row">
            <!-- Bagian Logo -->
            <div class="col-md-6 logo-container">
                <!-- Tidak ada konten di sini karena logo akan diatur melalui CSS -->
            </div>
            
            <!-- Bagian Form Login -->
            <div class="col-md-6 d-flex align-items-center">
                <div class="mx-auto">
                    <h2 class="login">Login</h2>
                    <form>
                        <div class="mb-3">
                          <input type="Username" class="form" id="exampleInputEmail1" placeholder="Username">
                        </div>
                        <div class="mb-3">
                          <input type="password" class="form" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="mb-3 form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                          <label class="form-check-label" for="exampleCheck1">Remember me</label>
                        </div>
                        <button type="submit" class="button">Submit</button>
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
    