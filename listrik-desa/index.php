<div class="main-content app-content mt-0">
    <div class="side-app">

        <!-- CONTAINER -->
        <div class="main-container container-fluid">

            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title">Listrik Desa</h1>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Listrik Desa</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <!-- ROW-3 -->


            <!-- awal tabel -->

            <div class="row row-sm">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Listrik Desa</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                                    <thead>
                                        <tr>
                                            <th class="wd-15p border-bottom-0">No</th>
                                            <th class="wd-15p border-bottom-0">Nama Penerima</th>
                                            <th class="wd-20p border-bottom-0">Desa</th>
                                            <th class="wd-15p border-bottom-0">Kecamatan</th>
                                            <th class="wd-10p border-bottom-0">Kab/Kota</th>
                                            <th class="wd-25p border-bottom-0">Status Pemasangan</th>
                                            <th class="wd-25p border-bottom-0">Pilihan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include '../koneksi.php';
                                        $no = 1;
                                        $data = mysqli_query($koneksi, "SELECT * from tb_listrik_desa");
                                        while ($d = mysqli_fetch_array($data)) {
                                        ?>

                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $d['nama_calon_konsumen'] ?></td>
                                            <td><?= $d['nama_desa'] ?></td>
                                            <td><?= $d['nama_kec'] ?></td>
                                            <td><?= $d['nama_kab_kota'] ?></td>
                                            <td><?= $d['status_pemasangan'] ?></td>
                                        </tr>

                                        <?php } ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Row -->            
            
        </div>
        <!-- CONTAINER END -->
    </div>
</div>
<!--app-content close-->
</div>