<div class="modal fade" id="largemodal_detail<?= $d['id_penerima_lisdes']; ?>" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Penerima Lisdes</h5>
                <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
                <div class="modal-body">
                    <div class="row mb-4">
                        <label class="col-md-3 form-label" for="view_nama_calon_konsumen">Nama Calon Konsumen</label>
                        <div class="col-md-9">
                            <input type="text" id="view_nama_calon_konsumen" class="form-control" value="<?= $d['nama_calon_konsumen'] ?>" disabled>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-md-3 form-label" for="view_nik">NIK</label>
                        <div class="col-md-9">
                            <input type="text" id="view_nik" class="form-control" value="<?= $d['nik'] ?>" disabled>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-md-3 form-label" for="view_alamat">Alamat</label>
                        <div class="col-md-9">
                            <textarea id="view_alamat" class="form-control" disabled><?= $d['alamat'] ?></textarea>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-md-3 form-label" for="view_id_kab_kota">Kabupaten/Kota</label>
                        <div class="col-md-9">
                            <?php
                            // Menampilkan nama kabupaten/kota berdasarkan id_kab_kota
                            $query_kab = "SELECT nama_kab_kota FROM tb_kab_kota WHERE id_kab_kota = '" . $d['id_kab_kota'] . "'";
                            $result_kab = mysqli_query($koneksi, $query_kab);
                            $kab_kota = mysqli_fetch_assoc($result_kab);
                            ?>

                            <?php var_dump($d['id_kab_kota']) ?>
                            <input type="text" id="view_id_kab_kota" class="form-control" value="<?= $kab_kota['nama_kab_kota']; ?>" disabled>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-md-3 form-label" for="view_id_kecamatan">Kecamatan</label>
                        <div class="col-md-9">
                            <?php
                            // Menampilkan nama kecamatan berdasarkan id_kecamatan
                            $query_kec = "SELECT nama_kecamatan FROM tb_kecamatan WHERE id_kecamatan = '" . $d['id_kecamatan'] . "'";
                            $result_kec = mysqli_query($koneksi, $query_kec);
                            $kecamatan = mysqli_fetch_assoc($result_kec);
                            ?>
                            <input type="text" id="view_id_kecamatan" class="form-control" value="<?= $kecamatan['nama_kecamatan']; ?>" disabled>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-md-3 form-label" for="view_id_desa">Desa</label>
                        <div class="col-md-9">
                            <?php
                            // Menampilkan nama desa berdasarkan id_desa
                            $query_desa = "SELECT nama_desa FROM tb_desa WHERE id_desa = '" . $d['id_desa'] . "'";
                            $result_desa = mysqli_query($koneksi, $query_desa);
                            $desa = mysqli_fetch_assoc($result_desa);
                            ?>
                            <input type="text" id="view_id_desa" class="form-control" value="<?= $desa['nama_desa']; ?>" disabled>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-md-3 form-label" for="view_membutuhkan_bantuan">Membutuhkan Bantuan</label>
                        <div class="col-md-9">
                            <input type="text" id="view_membutuhkan_bantuan" class="form-control" value="<?= $d['membutuhkan_bantuan'] ?>" disabled>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-md-3 form-label" for="view_menunggu_bantuan">Menunggu Bantuan</label>
                        <div class="col-md-9">
                            <input type="text" id="view_menunggu_bantuan" class="form-control" value="<?= $d['menunggu_bantuan'] ?>" disabled>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-md-3 form-label" for="view_menaati_ketentuan">Menaati Ketentuan</label>
                        <div class="col-md-9">
                            <input type="text" id="view_menaati_ketentuan" class="form-control" value="<?= $d['menaati_ketentuan'] ?>" disabled>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-md-3 form-label" for="view_jarak_rumah">Jarak Rumah (km)</label>
                        <div class="col-md-9">
                            <input type="text" id="view_jarak_rumah" class="form-control" value="<?= $d['jarak_rumah'] ?>" disabled>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-md-3 form-label" for="view_petugas_survei">Petugas Survei</label>
                        <div class="col-md-9">
                            <input type="text" id="view_petugas_survei" class="form-control" value="<?= $d['petugas_survei'] ?>" disabled>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-md-3 form-label" for="view_status_pemasangan">Status Pemasangan</label>
                        <div class="col-md-9">
                            <input type="text" id="view_status_pemasangan" class="form-control" value="<?= $d['status_pemasangan'] ?>" disabled>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-md-3 form-label" for="view_catatan">Catatan</label>
                        <div class="col-md-9">
                            <textarea id="view_catatan" class="form-control" disabled><?= $d['catatan'] ?></textarea>
                        </div>
                    </div>

                <div class="modal-footer">
                    <button class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
        </div>
    </div>
</div>

