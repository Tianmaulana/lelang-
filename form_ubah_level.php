<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Halaman Ubah Register</title>
        <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.css">
    </head> 
    <body>
            <?php
            require 'db.php';
            $id= $_GET['id'];
            $db = new Database();
            $level= $db->getById('level', ['id_level'=>$id]);
            foreach($level as $l):
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
            <h3>Form Ubah Level</h3>
            </div>

            <div class="card-body">
                <form action="proses_ubah_level.php" method="POST">
                <div class="form-group">
                            <label class="label-control">ID Level</label>
                            <input class="form-control" type="text" name="id_level" placeholder="Masukan ID" value="<?php echo $l['id_level'];?>" readonly>
                        </div>

                <div class="form-group">
                            <label class="label-control">level</label>
                            <input class="form-control" type="text" name="level" placeholder="Masukan level" value="<?php echo $l['level'];?>" required>
                        </div>
                        <button type="submit" class="btn btn-danger">Ubah!</button>
                    </div>
                    </form>
            <?php endforeach;?>
        </div>
    </body>
</html>