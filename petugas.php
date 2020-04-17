<!DOCTYPE html>
 <html>   
   <head>   
          <meta charset="UTF-8">      
             <title> Petugas</title>      
                <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.css">   
                  </head>    
                   <body>  
                      <center><h1>Halaman Petugas</h1></center>        
                       <?php          
                       
                       include "db.php";        
                        $db = new Database(); 
 
        $data = $db->getAll('petugas');

        ?>               
        <div class="container mt-5">        
         <table class="table">  
         <thead class="thead-dark">         
                        
            <tr>                    
             <th scope="col">ID Petugas</th>                    
              <th scope="col">ID Level</th>                    
               <th scope="col">Nama Petugas</th>                    
                <th scope="col">Username</th>                    
                 <th scope="col">Password</th>                     
                  <th scope="col">Aksi</th>                 
                   </tr>            
                    </thead>             
                    <tbody> 
                     <?php foreach($data as $d): ?>                     <tr>                         
                     <th scope="row"><?php echo $d['id_petugas'];?></th>                         <th scope="row"><?php echo $d['id_level'];?></th>                         <td><?php echo $d['nama_petugas'];?></td>                         
                     <td><?php echo $d['username'];?></td>                         
                     <td><?php echo $d['password'];?></td>                         <td>                             
                     <a href="form_ubah_petugas.php?id=<?php echo $d['id_petugas']; ?>" class="btn btn-primary">Edit</a> 
 
          <a href="proses_hapus_petugas.php?id=<?php echo $d['id_petugas']; ?>"                             
          class="btn btn-danger" onclick="return confirm('Apakah anda yakin akan menghapus data ?ini')">Hapus</a>                         
          </td>                     
          </tr> 

<?php endforeach; ?>  
 </tbody> 
 </table>         
 </div>    
 <center><a href="form_tambah_petugas.php" class="btn btn-info">Tambah!</a></center> 

</body> 
</html> 



