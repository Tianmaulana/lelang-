<!DOCTYPE html>
<html>
    <head>
            <meta charset="UTF-8">
            <title>Tambah history lelang</title>
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
                          <a class="nav-link" href="index.php"> Dashboard <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="masyarakat.php">Masyarakat</a>
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
                        <center><h1> Tambah history lelang</h1></center>
                </div> 
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit inventore sequi iusto consequuntur cumque enim aspernatur adipisci. Vitae numquam totam eaque ipsam perferendis, explicabo, magnam voluptatibus quas fuga autem unde.</p>
                  

                   <?php
                        include "db.php";
                        $db = new Database();
                        $history_lelang = $db->getAll('history_lelang');
                    ?>
                      <div class="container mt-5">
                     <table class="table">
                        <thead class="thead-dark">
                                <tr>
                                   <th scope="col">ID History Lelang</th>
                                   <th scope="col">ID User </th>
                                   <th scope="col">ID Lelang </th>
                                   <th scope="col">Penawaran Harga</th>
                                
                                   
                                   <th scope="col" style="min-width:175px;">Aksi </th>
                                </tr> 
                        </thead>
                        <tbody>
                          <?php foreach($history_lelang as $h):?>
                            <tr>
                               <th scope="row"><?php echo $h['id_history_lelang'];?></th>
                               <td><?php echo $h['id_user'];?></td> 
                               <td><?php echo $h['id_lelang'];?></td> 
                               <td><?php echo $h['penawaran_harga'];?></td> 
                              
                               <td>
                                 <a href="form_ubah_history_lelang.php?id=<?php echo $h['id_history_lelang'];?>" class="btn btn-primary">Edit</a>

                                 <a href="proses_hapus_history_lelang.php?id=<?php echo $h['id_history_lelang'];?>" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Akan Menghapus Data Ini?')">Hapus</a>
                                </td>
                          </tr>
                          <?php endforeach;?>
</tbody>
</table>
</div>
<center> <a href="form_tambah_history_lelang.php" class="btn btn-info">Tambah!</a></center>
                      
                </body>
</html>
