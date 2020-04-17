<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Halaman petugas</title>
        <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.css">
    </head> 
    <body>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>   
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                        <a class="nav-link" href="index.php">Dashboard  <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="about.php">About </a>
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
            <h3>Form Tambah petugas</h3>
            </div>

            <div class="card-body">
                <form action="proses_tambah_petugas.php" method="POST">
                    <div class ="row">
                    <div class="col-md-6">
                    <div class="form-group">
                            <label class="bmd-label-floating">ID Level</label>
                            <select name="id_level" class = "form-control">

                            <?php 

                             require 'db.php';

                               $db = new Database();
                               $level = $db->getAll('level');
                               
                               foreach($level as $l):
                            ?>
                            <option value = "<?php echo $l['id_level']; ?>" class = "form-control"><?php echo $l['level']; ?></option>
                               <?php endforeach; ?>
                            </select>
                        </div>
                <div class="form-group">
                            <label class="label-control">Nama petugas</label>
                            <input class="form-control" type="text" name="nama_petugas" placeholder="Masukan Nama petugas">
                        </div>
                        <div class="form-group">
                            <label class="label-control">username</label>
                            <input class="form-control" type="text" name="username" placeholder="Masukan petugas ">
                        </div>
                        <div class="form-group">
                            <label class="label-control">password</label>
                            <input class="form-control" type="password" name="password" placeholder="Masukan password ">
                        </div>
                      
                        <button type="submit" class="btn btn-danger">Tambah!</button>
                    </div>
                    </form>
        </div>
    </body>
</html>
