<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.4.1.min.js"></script>
</head>
<body>
    
    <div class="container col-md-10">
        <div class="card">
            <div class="card-header bg-primary text-white">
                Tabel Data Mahasiswwa
            </div>
            <div class="card-body">
                <a href="index.php" class="btn btn-primary">Tambah Data</a>
                <table class="table table-bordered">
                    <tr>
                    <th> NOMOR</th>
                    <th> NPM</th>
                    <th> NAMA</th>
                    <th> TEMPAT LAHIR</th>
                    <th> TANGGAL LAHIR</th>
                    <th> JENIS KELAMIN</th>
                    <th> ALAMATA</th>
                    <th> KODEPOS</th>
                    </tr>
                    <?php
                        include "koneksi.php";
                        $no =1;
                        $tampil =mysqli_query($koneksi, "SELECT * FROM mahasiswa");
                        while($data=mysqli_fetch_array($tampil))
                        {
                    ?>
                    <tr>
                            <td> <?php echo $no++; ?> </td>
                            <td> <?php echo $data['npm']; ?> </td>
                            <td> <?php echo $data['nama']; ?> </td>
                            <td> <?php echo $data['tempat_lahir']; ?> </td>
                            <td> <?php echo $data['tanggal_lahir']; ?> </td>
                            <td> <?php echo $data['jenis_kelamin']; ?> </td>
                            <td> <?php echo $data['alamat']; ?> </td>
                            <td> <?php echo $data['kode_pos']; ?> </td>
                            <td>
                            <a href="edit_data.php?idnomor=<?php echo $data['idnomor']; ?>" class="btn btn-sm btn-warning">Edit</a>
                            <a href="delete_data.php?idnomor=<?php echo $data['idnomor']; ?>" class="btn btn-sm btn-danger">Hapus</a>
                             </td>
                                </tr>
                                <?php } ?>
                            </table>
                            </div>
                            </div>
                     </div>
                
    
</body>
</html> 