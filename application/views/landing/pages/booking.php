<!-- Booking Lapangan Section -->
<section id="booking" class="booking section">
    <div class="container section-title" data-aos="fade-up">
        <h2>Booking Lapangan<br></h2>
        <p>Silakan isi form di bawah untuk melakukan pemesanan lapangan.</p>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
                <form action="<?= base_url('landing/booking/submit'); ?>" method="POST" class="needs-validation" novalidate>
                    <div class="row gy-3">
                        <div class="col-md-6">
                            <label for="nama" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama Anda" required>
                            <div class="invalid-feedback">Nama wajib diisi.</div>
                        </div>
                        <div class="col-md-6">
                            <label for="nama" class="form-label">Lapangan</label>
                            <select class="form-control" name="lapang" id="lapang" required>
                                <option value=""></option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="no_tlp" class="form-label">Nomor Telepon</label>
                            <input type="tel" class="form-control" id="no_tlp" name="no_tlp" placeholder="Masukkan nomor telepon" required>
                            <div class="invalid-feedback">Nomor telepon wajib diisi.</div>
                        </div>
                        <div class="col-md-6">
                            <label for="tgl_booking" class="form-label">Tanggal Booking</label>
                            <input type="date" class="form-control" id="tgl_booking" name="tgl_booking" required>
                            <div class="invalid-feedback">Tanggal booking wajib diisi.</div>
                        </div>
                        <div class="col-md-6">
                            <label for="jam_booking" class="form-label">Jam Booking</label>
                            <input type="time" class="form-control" id="jam_booking" name="jam_booking" required>
                            <div class="invalid-feedback">Jam booking wajib diisi.</div>
                        </div>
                        <div class="col-md-6">
                            <label for="durasi" class="form-label">Durasi Booking (Jam)</label>
                            <input type="number" class="form-control" id="durasi" name="durasi" placeholder="Masukkan durasi dalam jam" min="1" required>
                            <div class="invalid-feedback">Durasi booking wajib diisi.</div>
                        </div>
                    </div>
                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-primary">Submit Booking</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<script>
    let URL = {
        getLapangan: "<?= site_url('api/a_lapangan/getLapangan'); ?>",
    }

    document.addEventListener("DOMContentLoaded", function() {
        fetch(URL.getLapangan)
            .then(response => response.json())
            .then(data => {
                let select = document.getElementById('lapang');
                
                data.forEach(function(lapangan) {
                    let option = document.createElement('option');
                    option.value = lapangan.id;
                    option.textContent = lapangan.no_lapang;
                    select.appendChild(option);
                });
            })
            .catch(error => console.error('Error fetching lapangan data:', error));
    });
</script>
