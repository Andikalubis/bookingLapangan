<div class="modal fade" id="modal_lapangan" tabindex="-1" role="dialog" aria-labelledby="add_lapangan" aria-hidden="true">
    <div class="modal-dialog" role="document" style="max-width: 50%; margin-top: 20px;">
        <div class="modal-content" style="max-height: 90vh; overflow-y: auto;">
            <div class="modal-header">
                <h5 class="modal-title" id="add_lapangan">Tambah Data Lapangan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form id="add_lapangan_baru" action="<?= base_url('dashboard/lapangan/save'); ?>" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="lapangan">Kode Lapangan</label>
                            <input type="text" class="form-control" style="border: 1.5px solid #00AAC1;" name="lapangan" id="lapangan" placeholder="Masukkan Lapangan" required>
                        </div>
                    </div>
                    <div class="col-md-6 jabatanText" style="display: none;">
                        <div class="form-group">
                            <label for="lapangan_text">Kode Lapangan</label>
                            <input type="text" class="form-control" style="border: 1.5px solid #00AAC1;" name="lapangan_text" id="lapangan_text" placeholder="Masukkan Lapangan" >
                        </div>
                    </div>
                </div>
                <input type="hidden" class="id_lapang" name="id_lapang" id="id_lapang" value="">
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary tutupLapang" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan Data</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
