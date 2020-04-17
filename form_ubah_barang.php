<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Form Ubah Lelang</title>
        <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.css">
    </head> 
    <body>
            <?php
            include 'db.php';
            $id= $_GET['id'];
            $db = new Database();
            $barang= $db->getById('barang', ['id_barang'=>$id]);
            foreach($barang as $b):
            ?>

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
                        <a class="nav-link" href="about.php">About</a>
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
            <h3>Form Ubah Barang</h3>
            </div>

            <div class="card-body">
                <form action="proses_ubah_barang.php" method="POST">
                <div class="form-group">
                            <label class="label-control">ID barang</label>
                            <input class="form-control" type="text" name="id_barang" placeholder="Masukan ID" value="<?php echo $b['id_barang'];?>" readonly>
                        </div>

                <div class="form-group">
                            <label class="label-control">Nama barang</label>
                            <input class="form-control" type="text" name="nama_barang" placeholder="Masukan Nama" value="<?php echo $b['nama_barang'];?>" required>
                        </div>
                        <div class="form-group">
                            <label class="label-control">tanggal</label>
                            <input class="form-control" type="date" name="tanggal" placeholder="Masukan tanggal" value="<?php echo $b['tanggal'];?>" required >
                        </div>
                        <div class="form-group">
                            <label class="label-control">harga awal</label>
                            <input class="form-control" type="number" name="harga_awal" placeholder="Masukan harga" value="<?php echo $b['harga_awal'];?>" required>
                        </div>
                        <div class="form-group">
                            <label class="label-control">deskripsi barang</label>
                            <textarea class= "form-control" type="text" name ="deskripsi_barang" placeholder="Masukan deskripsi" value="<?php echo $b['deskripsi_barang'];?>" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-danger">Ubah!</button>
                    </div>
                    </form>
                    <center><p>Jika sudah mempunyai akun silahkan Login <a href='login.php' class="btn btn-warning">disini</a></p></center>
            <?php endforeach;?>
        </div>
    </body>
</html>