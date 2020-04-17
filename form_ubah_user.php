<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Halaman Register</title>
        <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.css">
    </head> 
    <body>
            <?php
            require 'db.php';
            $id= $_GET['id'];
            $db = new Database();
            $masyarakat= $db->getById('masyarakat', ['id_user'=>$id]);
            foreach($masyarakat as $m):
            ?>

            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>   
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                        <a class="nav-link" href="index.html">Halaman Utama <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="halaman_paket.html">Halaman Paket</a>
                        </li>
                        </a>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </nav>
        <div class="container mt-5">
            <div class="card bg-info text-light">

            <div class="card-header">
            <h3>Form User</h3>
            </div>

            <div class="card-body">
                <form action="proses_ubah_user.php" method="POST">
                <div class="form-group">
                            <label class="label-control">ID User</label>
                            <input class="form-control" type="text" name="id" placeholder="Masukan ID" value="<?php echo $m['id_user'];?>" readonly>
                        </div>

                <div class="form-group">
                            <label class="label-control">Nama Lengkap</label>
                            <input class="form-control" type="text" name="nama_lengkap" placeholder="Masukan Nama" value="<?php echo $m['nama_lengkap'];?>" required>
                        </div>
                        <div class="form-group">
                            <label class="label-control">Username</label>
                            <input class="form-control" type="text" name="username" placeholder="Masukan Username" value="<?php echo $m['username'];?>" required >
                        </div>
                        <div class="form-group">
                            <label class="label-control">Password</label>
                            <input class="form-control" type="password" name="password" placeholder="Masukan Password" value="<?php echo $m['password'];?>" required>
                        </div>
                        <div class="form-group">
                            <label class="label-control">Telp</label>
                            <input class= "form-control" type="telp" name ="telp" placeholder="Masukan Telp" value="<?php echo $m['telp'];?>" required>
                        </div>
                        <button type="submit" class="btn btn-danger">Ubah!</button>
                    </div>
                    </form>
                    <center><p>Jika sudah mempunyai akun silahkan Login <a href='login.php' class="btn btn-warning">disini</a></p></center>
            <?php endforeach;?>
        </div>
    </body>
</html>