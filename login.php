<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Halaman Login</title>
        <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.css">
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="index.php">Dashboard</a>
                         <form class="form-inline my-2 my-lg-0">
                             <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                             <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                         </form>
             </nav>
    <div class="container mt-5">
            <div class="card bg-info text-light">

            <div class="card-header">
            <h3>Form Login</h3>
            </div>

            <div class="card-body">
                <form action="proses_login.php" method="POST">

                <div class="form-group">
                    <label class="label-control">Username</label>
                    <input class="form-control" type="text" name="username" placeholder="Masukan Username">
                </div>
                <div class="form-group">
                    <label class="label-control">Password</label>
                    <input class="form-control" type="password" name="password" placeholder="Masukan Password">
                </div>
                <button type="submit" class="btn btn-danger">Login!</button>
                </div>
                </form>
            <p>Jika Belum mempunyai akun Silahkan register <a href='register.php' class="btn btn-warning">disini</a></p>
        </div>
    </body>
</html>
