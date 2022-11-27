<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstra
p.min.css" rel="stylesheet" integrity="sha384-
EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <title>Login</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            margin-top: 5%;
            min-height: 1000vh;
            background: #f6f6f6;
            display: flex;
            justify-content: top center;
            align-items: top center;
            flex-direction: column;
        }

        .container {
            background: white;
            padding: 30px;
            width: 500px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="col d-flex justify-content-center">
            <h3>Halaman Login</h3>
        </div>
        <form method="POST">
            <!-- Username input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form2Example1">Username</label>
                <input type="text" id="form2Example1" class="form-control" name="username" />
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form2Example2">Password</label>
                <input type="password" id="form2Example2" class="form-control" name="password" />
            </div>

            <div class="g-recaptcha" data-sitekey="6LeXBNUiAAAAACu99vr1oW_e17Vq4L_Wfznt5RT5"></div>
            <br />

            <div class="col d-flex justify-content-left">
                <!-- Checkbox -->
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="form2Example31" name="remember" />
                    <label class="form-check-label" for="form2Example31"> Remember me </label>
                </div>
            </div>

            <br>

            <!-- 2 column grid layout for inline styling -->
            <div class="row mb-4">

                <!-- Submit button -->
                <button type="button" class="btn btn-primary btn-block mb-4" name="submit">Login</button>

                <!-- Register buttons -->
                <div class="text-center">
                    <p>Belum punya akun? <a href="register.php">Register</a></p>
                </div>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.
bundle.min.js" integrity="sha384-
MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>