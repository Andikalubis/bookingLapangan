<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <p class="card-title"><?= $title ?></p>
                </div>
                <div class="row" style="padding-top: 2rem;">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table id="table_karyawan" class="display expandable-table" style="width:100%">
                                <thead style="text-align: center;">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>No. Tlp</th>
                                        <th>Tgl. Booking</th>
                                        <th>Jam Booking</th>
                                        <th>Durasi</th>
                                        <th style="width: 15%;">Action</th>
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
<!-- </?php $this->load->view('pages/dashboard/karyawan/modal/modal_karyawan'); ?> -->
<!-- <script>
    let browse = false;
    console.log(browse, 'browse');

    let URL = {
        jabatan: "<?= site_url('api/a_option/get_jabatan'); ?>",
        unitKerja: "<?= site_url('api/a_option/get_unit_kerja'); ?>",
        agama: "<?= site_url('api/a_option/get_agama'); ?>",
        gender: "<?= site_url('api/a_option/get_gender'); ?>",
        role: "<?= site_url('api/a_option/get_role'); ?>",
        getData: "<?= site_url('api/a_karyawan/getData'); ?>",
        get_karyawan: "<?= site_url('api/a_karyawan/get_karyawan'); ?>",
    }
</script>
<script type="text/javascript" src="<?= base_url(); ?>assets/js/karyawan.js"></script> -->