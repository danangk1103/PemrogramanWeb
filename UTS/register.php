<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstra
p.min.css" rel="stylesheet" integrity="sha384-
EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
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

        .navbar{
            margin-left: 10px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button type="submit" name="submit" class="btn btn-danger">Logout</button>
    </nav>
    <br>
    <div class="container">
        <div class="col d-flex justify-content-center">
            <h3>Halaman Registrasi</h3>
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
                <input type="password" id="form2Example2" class="form-control" name="pwd1" />
            </div>

            <!-- Ulangi Password input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form2Example3">Ulangi Password</label>
                <input type="password" id="form2Example3" class="form-control" name="pwd2" />
            </div>

            <!-- Nama Lengkap input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form2Example4">Nama Lengkap</label>
                <input type="text" id="form2Example4" class="form-control" name="nama_lengkap" />
            </div>

            <!-- Tempat Lahir input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form2Example5">Tempat Lahir</label>
                <input type="text" id="form2Example5" class="form-control" name="tempat_lahir" />
            </div>

            <!-- Tanggal Lahir input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form2Example6">Tanggal Lahir</label>
                <input type="date" id="form2Example6" class="form-control" name="tanggal_lahir" />
            </div>

            <!-- Jenis Kelamin input -->
            <div class="form-outline mb-4">
                <input type="" id="form2Example7" class="form-control" name="jenis_kelamin" value="option1"/>
                <label class="form-label" for="form2Example7">Jenis Kelamin</label>
                <input type="radio" id="form2Example7" class="form-control" name="jenis_kelamin" value="option2"/>
            </div>



            <!-- 2 column grid layout for inline styling -->
            <div class="row mb-4">
                <!-- Submit button -->
                <button type="button" class="btn btn-primary btn-block mb-4" name="submit">Register</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.
bundle.min.js" integrity="sha384-
MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script type="text/javascript">
    </script>
</body>

</html>