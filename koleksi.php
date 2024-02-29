<h1 class="mt-4">Koleksi Buku</h1>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <tr>
                        <th>No</th>
                        <th>User</th>
                        <th>Nama Buku</th>
                        <th>Kategori Buku</th>
                        <th>Aksi</th>
                    </tr>
                    <?php
            $i = 1;
                $query = mysqli_query($koneksi, "SELECT*FROM koleksi LEFT JOIN 
                user on user.id_user = koleksi.id_user LEFT JOIN buku on buku.id_buku = koleksi.id_buku WHERE koleksi.id_user =" . $_SESSION['user']['id_user']);
                while($data = mysqli_fetch_array($query)){
                    ?>
                    <tr>
                        <td><?php echo $i++; ?></td>
                        <td><?php echo $data['nama'];?></td>
                        <td><?php echo $data['judul'];?></td>
                        <td><?php echo $data['ulasan'];?></td>
                        <td><?php echo $data['rating'];?></td>
                        <td>
                            <a href="?page=ulasan_ubah&&id=<?php echo $data['id_ulasan']; ?>"
                                class="btn btn-primary">Ubah</a>
                            <a onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');"
                                a href="?page=ulasan_hapus&&id=<?php echo $data['id_ulasan']; ?>"
                                class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <?php

                }
            ?>
                </table>
            </div>
        </div>
    </div>
</div>