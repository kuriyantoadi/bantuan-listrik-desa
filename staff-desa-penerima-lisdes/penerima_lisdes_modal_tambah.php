<div class="modal fade" id="largemodal_tambah" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Penerima Lisdes</h5>
                <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form id="form-tambah-penerima" action="../staff-desa-penerima-lisdes/penerima_lisdes_tambah.php" method="POST">
                <div class="modal-body">
                    <div class="row mb-4">
                        <label class="col-md-3 form-label" for="nama_calon_konsumen">Nama Calon Konsumen</label>
                        <div class="col-md-9">
                            <input type="text" name="nama_calon_konsumen" class="form-control" required>
                        </div>
                    </div>   
                    <div class="row mb-4">
                        <label class="col-md-3 form-label" for="nik">NIK</label>
                        <div class="col-md-9">
                            <input type="text" name="nik" class="form-control" required>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label class="col-md-3 form-label" for="kab_kota">Kabupaten/Kota</label>
                        <div class="col-md-9">
                             <?php
                                $id_kab_kota = $_SESSION['id_kab_kota'];
                                $d1 = mysqli_query($koneksi, "SELECT id_kab_kota, nama_kab_kota FROM tb_kab_kota WHERE id_kab_kota='$id_kab_kota'");
                                while ($d_kab_kota = mysqli_fetch_array($d1)) {
                            ?>                        
                            <input type="text" name="" class="form-control" value="<?= $d_kab_kota['nama_kab_kota'] ?>" disabled>
                            <?php } ?>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label class="col-md-3 form-label" for="kecamatan">Kecamatan</label>
                        <div class="col-md-9">
                            <?php
                                $id_kecamatan = $_SESSION['id_kecamatan'];
                                $d1 = mysqli_query($koneksi, "SELECT id_kecamatan, nama_kecamatan FROM tb_kecamatan WHERE id_kecamatan='$id_kecamatan'");
                                while ($d_kecamatan = mysqli_fetch_array($d1)) {
                            ?>                        
                            <input type="text" name="" class="form-control" value="<?= $d_kecamatan['nama_kecamatan'] ?>" disabled>
                            <?php } ?>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label class="col-md-3 form-label" for="desa">Desa</label>
                        <div class="col-md-9">
                            <?php
                                $id_desa = $_SESSION['id_desa'];
                                $d1 = mysqli_query($koneksi, "SELECT id_desa, nama_desa FROM tb_desa WHERE id_desa='$id_desa'");
                                while ($d_desa = mysqli_fetch_array($d1)) {
                            ?>                        
                            <input type="text" name="" class="form-control" value="<?= $d_desa['nama_desa'] ?>" disabled>
                            <?php } ?>
                        </div>
                    </div>


                    <div class="row mb-4">
                        <label class="col-md-3 form-label" for="alamat">Alamat</label>
                        <div class="col-md-9">
                            <input type="hidden" name="id_kab_kota" class="form-control" value="<?= $_SESSION['id_kab_kota'] ?>" required>
                            <input type="hidden" name="id_kecamatan" class="form-control" value="<?= $_SESSION['id_kecamatan'] ?>" required>
                            <input type="hidden" name="id_desa" class="form-control" value="<?= $_SESSION['id_desa'] ?>" required>
                            <textarea name="alamat" class="form-control" required></textarea>
                        </div>
                    </div>
                    
                    <div class="row mb-4">
                        <label class="col-md-3 form-label" for="membutuhkan_bantuan">Membutuhkan Bantuan</label>
                        <div class="col-md-9">
                            <select name="membutuhkan_bantuan" class="form-control" required>
                                <option value="">Pilihan</option>
                                <option value="Ya">Ya</option>
                                <option value="Tidak">Tidak</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-md-3 form-label" for="menunggu_bantuan">Menunggu Bantuan</label>
                        <div class="col-md-9">
                            <select name="menunggu_bantuan" class="form-control" required>
                                <option value="">Pilihan</option>
                                <option value="Ya">Ya</option>
                                <option value="Tidak">Tidak</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-md-3 form-label" for="menaati_ketentuan">Menaati Ketentuan</label>
                        <div class="col-md-9">
                            <select name="menaati_ketentuan" class="form-control" required>
                                <option value="">Pilihan</option>
                                <option value="Ya">Ya</option>
                                <option value="Tidak">Tidak</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-md-3 form-label" for="jarak_rumah">Jarak Rumah (km)</label>
                        <div class="col-md-9">
                            <input type="number" name="jarak_rumah" class="form-control" step="0.01" required>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-md-3 form-label" for="petugas_survei">Petugas Survei</label>
                        <div class="col-md-9">
                            <input type="text" name="petugas_survei" class="form-control" required>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-md-3 form-label" for="status_pemasangan">Status Pemasangan</label>
                        <div class="col-md-9">
                            <select name="status_pemasangan" class="form-control" required>
                                <option value="">Pilihan</option>
                                <option value="Belum Terpasang">Belum Terpasang</option>
                                <option value="Sudah Terpasang">Sudah Terpasang</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-md-3 form-label" for="catatan_ditolak">Catatan</label>
                        <div class="col-md-9">
                            <textarea name="catatan" class="form-control"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-sm btn-primary" value="Tambah"></input>
                    <button class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

