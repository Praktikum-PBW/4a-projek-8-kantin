<?php include "sidebar.php";?>
<div class="row">
    <div class="col-md-12">
        <div class="d-flex justify-content-between">
            <h4>Data User</h4>
            <br>
            <a href="create.php" class="btn btn-secondary">Tambah</a>
        </div>
        <div class="table-responsive">
            <table class="table" style="text-align: center;">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Jenis Kelamin</th>
                        <th>No. Telepon</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = mysqli_query($koneksi, "SELECT * FROM pegawai");
                    $no = 1;
                    foreach ($query as $r){
                    ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $r['nama_pegawai']?></td>
                        <td><?= $r['username']?></td>
                        <td><?= $r['jk_pegawai']?></td>
                        <td><?= $r['no_telp']?></td>
                        <td><?= $r['alamat']?></td>
                        <td>
                            <div class="btn-group">
                                <a href="lihat.php?id_pegawai=<?= $r['id_pegawai']?>"
                                    class="btn btn-sm btn-warning">Lihat</a>
                                <a href="delete.php?&id_pegawai=<?= $r['id_pegawai']?>"
                                    class="btn btn-sm btn-danger"
                                    onclick="return confirm('Apakah anda yakin?')">Delete</a>
                            </div>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>