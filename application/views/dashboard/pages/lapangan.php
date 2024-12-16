<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <p class="card-title"><?= $title ?></p>
                    <button type="button" class="btn btn-primary btn-modal_lapangan" data-toggle="modal" data-target="#modal_lapangan">
                        Tambah Data
                    </button>
                </div>
                <div class="row" style="padding-top: 2rem;">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table id="table_lapangan" class="display expandable-table" style="width:100%">
                                <thead style="text-align: center;">
                                    <tr>
                                        <th style="width: 10%;">No</th>
                                        <th style="width: 20%;">Lapangan</th>
                                        <th style="width: 10%;">Status</th>
                                        <th style="width: 20%;">Action</th>
                                    </tr>
                                </thead>
                                <tbody style="text-align: center;">

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('dashboard/pages/modal/lapangan_modal'); ?>
<script>
    let URL = {
        getData: "<?= site_url('api/a_lapangan/getData'); ?>",
        delete: "<?= site_url('api/a_lapangan/delete'); ?>",
        updateStatus: "<?= site_url('api/a_lapangan/updateStatus'); ?>",
    }
</script>
<script type="text/javascript" src="<?= base_url(); ?>assets/js/lapangan.js"></script>