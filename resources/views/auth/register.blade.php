<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sosio Link - Register</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <style>
            .logo-container {
                background-image: url('images/login.png');
                background-size: cover;
                height: 100vh;
            }
            .register {
                display: flex;
                justify-content: space-around;
            }
            .button{
                display: inline-block;
                width: 100%;
                font-weight: 400;
                color: #ffffff;
                text-align: center;
                vertical-align: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
                background-color: #000000;
                border: 1px solid transparent;
                padding: .575rem 18.75rem;
                font-size: 1rem;
                line-height: 1.5;
                border-radius: .55rem;
                margin-top: 0.3rem;
                transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
            }

            .form{
                display: block;
                width: 100%;
                height: calc(1.5em + .75rem + 2px);
                padding: 1.5rem 1rem;
                font-size: 1rem;
                font-weight: 400;
                line-height: 1.5;
                color: #000000;
                background-color: #ffffff;
                background-clip: padding-box;
                border: 1px solid #101C2C;
                border-radius: .75rem;
                transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
            }
            .form-select {
                display: block;
                width: 100%;
                padding: 1.5rem 1rem;
                font-size: 1rem;
                font-weight: 400;
                line-height: 1.5;
                color: #000000;
                background-color: #ffffff;
                background-clip: padding-box;
                border: 1px solid #101C2C;
                border-radius: .75rem;
                transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
            }
        </style>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 logo-container">
                </div>
                <div class="col-md-6 d-flex align-items-center">
                    <div class="mx-auto">
                        <h2 class="register">Register</h2>
                        <form>
                            <div class="mb-3">
                                <input type="text" class="form" id="exampleName" placeholder="Name">
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form" id="exampleInputEmail1" placeholder="Email">
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form" id="exampleUsername" placeholder="Username">
                            </div>
                            <div class="mb-3">
                                <select class="form-select" name="role" required>
                                    <option value="">Select Role</option>
                                    <option value="1">Admin</option>
                                    <option value="2">Masyarakat</option>
                                    <option value="3">RT</option>
                                    <option value="4">RW</option>
                                    <option value="5">Kelurahan</option>
                                </select>
                                @error('role')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>                            
                            <div class="mb-3">
                                <input type="password" class="form" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form" id="exampleConfirmPassword" placeholder="Confirm Password">
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Remember me</label>
                            </div>
                            <button type="submit" class="button">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
