<!DOCTYPE html>
<html>
    <head>
            <meta charset="UTF-8">
            <title>Tambah level</title>
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
                  <br>
                  <div class="wrap">
                        <div class="header">            
                        <center><h1> Tambah level</h1></center>
                </div> 
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit inventore sequi iusto consequuntur cumque enim aspernatur adipisci. Vitae numquam totam eaque ipsam perferendis, explicabo, magnam voluptatibus quas fuga autem unde.</p>
                  

                   <?php
                        include "db.php";
                        $db = new Database();
                        $level = $db->getAll('level');
                    ?>
                      <div class="container mt-5">
                     <table class="table">
                        <thead class="thead-dark">
                                <tr>
                                   <th scope="col">ID level</th>
                                   <th scope="col">Level </th>
                                   <th scope="col" style="min-width:175px;">Aksi </th>
                                </tr> 
                        </thead>
                        <tbody>
                          <?php foreach($level as $l):?>
                            <tr>
                               <th scope="row"><?php echo $l['id_level'];?></th>
                               <td><?php echo $l['level'];?></td> 
                               <td>
                                 <a href="form_ubah_level.php?id=<?php echo $l['id_level'];?>" class="btn btn-primary">Edit</a>

                                 <a href="proses_hapus_level.php?id=<?php echo $l['id_level'];?>" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Akan Menghapus Data Ini?')">Hapus</a>
                                </td>
                          </tr>
                          <?php endforeach;?>
</tbody>
</table>
</div>
<center> <a href="form_tambah_level.php" class="btn btn-info">Tambah!</a></center>
                      
                </body>
</html>
