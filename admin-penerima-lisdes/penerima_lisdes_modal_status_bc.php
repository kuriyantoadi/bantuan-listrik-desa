<div class="modal fade" id="largemodal_status<?= $d['id_penerima_lisdes']; ?>" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Update Status Penerima Lisdes</h5>
                <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
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
                
                <!-- Bagian Menampilkan Foto -->
                <div class="row mb-4">
                    <label class="col-md-3 form-label">Foto KTP</label>
                    <div class="col-md-9">
                        <?php if (!empty($d['photo_ktp'])): ?>
                            <img src="../uploads/<?= basename($d['photo_ktp']) ?>" alt="Foto KTP" class="img-thumbnail" style="max-height: 200px;">
                        <?php else: ?>
                            <p class="text-muted">Belum ada foto KTP.</p>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="row mb-4">
                    <label class="col-md-3 form-label">Foto Rumah</label>
                    <div class="col-md-9">
                        <?php if (!empty($d['photo_rumah'])): ?>
                            <img src="../uploads/<?= basename($d['photo_rumah']) ?>" alt="Foto Rumah" class="img-thumbnail" style="max-height: 200px;">
                        <?php else: ?>
                            <p class="text-muted">Belum ada foto Rumah.</p>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="row mb-4">
                    <label class="col-md-3 form-label">Foto SKTM</label>
                    <div class="col-md-9">
                        <?php if (!empty($d['photo_sktm'])): ?>
                            <img src="../uploads/<?= basename($d['photo_sktm']) ?>" alt="Foto SKTM" class="img-thumbnail" style="max-height: 200px;">
                        <?php else: ?>
                            <p class="text-muted">Belum ada foto SKTM.</p>
                        <?php endif; ?>
                    </div>
                </div>
                <!-- Tambahan Foto -->
                <div class="row mb-4">
                    <label class="col-md-3 form-label">Foto KWH</label>
                    <div class="col-md-9">
                        <?php if (!empty($d['photo_kwh'])): ?>
                            <img src="../uploads/<?= basename($d['photo_kwh']) ?>" alt="Foto KWH" class="img-thumbnail" style="max-height: 200px;">
                        <?php else: ?>
                            <p class="text-muted">Belum ada foto KWH.</p>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="row mb-4">
                    <label class="col-md-3 form-label">Foto Saklar</label>
                    <div class="col-md-9">
                        <?php if (!empty($d['photo_saklar'])): ?>
                            <img src="../uploads/<?= basename($d['photo_saklar']) ?>" alt="Foto Saklar" class="img-thumbnail" style="max-height: 200px;">
                        <?php else: ?>
                            <p class="text-muted">Belum ada foto Saklar.</p>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="row mb-4">
                    <label class="col-md-3 form-label">Foto Lampu</label>
                    <div class="col-md-9">
                        <?php if (!empty($d['photo_lampu'])): ?>
                            <img src="../uploads/<?= basename($d['photo_lampu']) ?>" alt="Foto Lampu" class="img-thumbnail" style="max-height: 200px;">
                        <?php else: ?>
                            <p class="text-muted">Belum ada foto Lampu.</p>
                        <?php endif; ?>
                    </div>
                </div>
                <!-- Akhir Bagian Foto -->
                
                <div class="row mb-4">
                    <label class="col-md-3 form-label" for="status_pemasangan">Status Pemasangan</label>
                    <div class="col-md-9">
                        <form action="../admin-penerima-lisdes/penerima_lisdes_up_status_pemasangan.php" method="POST">
                            <input type="hidden" name="id_penerima_lisdes" value="<?= $d['id_penerima_lisdes'] ?>">
                            <select name="status_pemasangan" id="status_pemasangan" class="form-control">
                                <option value="Pendataan" <?= $d['status_pemasangan'] == 'Pendataan' ? 'selected' : '' ?>>Pendataan</option>
                                <option value="Pemasangan" <?= $d['status_pemasangan'] == 'Pemasangan' ? 'selected' : '' ?>>Pemasangan</option>
                                <option value="Monitoring" <?= $d['status_pemasangan'] == 'Monitoring' ? 'selected' : '' ?>>Monitoring</option>
                                <option value="Selesai" <?= $d['status_pemasangan'] == 'Selesai' ? 'selected' : '' ?>>Selesai</option>
                            </select>
                           
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-sm btn-primary mt-2">Update Status Penerimaan Lisdes</button>
                <button type="submit" class="btn btn-sm btn-secondary mt-2" data-bs-dismiss="modal">Close</button>            </div>
        </div>
    </div>
</div>
