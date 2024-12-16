
<head>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
    .booking_view {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        padding: 20px;
        background-color: #f0f2f5;
    }

    .booking_view .container {
        background-color: #fff;
        border-radius: 12px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        padding: 40px;
        width: 100%;
        max-width: 900px;
        margin-top: 50px;
    }

    .section-title h2 {
        text-align: center;
        font-size: 28px;
        color: #333;
        margin-bottom: 30px;
        font-family: 'Arial', sans-serif;
    }

    table {
        width: 100%;
        margin-top: 20px;
        border-spacing: 0;
        border-collapse: collapse;
    }

    table td {
        padding: 10px 15px;
        font-size: 16px;
        color: #333;
        vertical-align: middle;
        border-bottom: 1px solid #f1f1f1;
    }

    table td:first-child {
        font-weight: 600;
        color: #495057;
    }

    .btn-success {
        padding: 12px 25px;
        font-size: 18px;
        background-color: #28a745;
        border-color: #28a745;
        border-radius: 8px;
        color: white;
        font-weight: bold;
        text-transform: uppercase;
        letter-spacing: 1px;
        transition: background-color 0.3s ease, transform 0.2s ease;
    }

    .btn-success:hover {
        background-color: #218838;
        border-color: #1e7e34;
        transform: scale(1.05);
    }

    .form-label {
        font-weight: bold;
        color: #495057;
        font-size: 16px;
    }

    @media (max-width: 767px) {
        .booking_view .container {
            padding: 20px;
        }

        .section-title h2 {
            font-size: 24px;
        }

        table td {
            padding: 8px 12px;
            font-size: 14px;
        }

        .btn-success {
            padding: 10px 20px;
            font-size: 16px;
        }
    }
</style>
</head>

<section id="booking_view" class="booking_view section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-3">
                    <h2>Booking Lapangan - Success<br></h2>
                    <table>
                        <tr>
                            <td style="width: 5%;">Nama Lengkap</td>
                            <td style="width: 1%;">:</td>
                            <td style="width: 20%;"> <?= $nama ?></td>
                        </tr>
                        <tr>
                            <td style="width: 5%;">Lapangan</td>
                            <td style="width: 1%;">:</td>
                            <td style="width: 20%;"> No, <?= $id_lapang ?></td>
                        </tr>
                        <tr>
                            <td style="width: 5%;">Nomor Tlp</td>
                            <td style="width: 1%;">:</td>
                            <td style="width: 20%;"> <?= $no_tlp ?></td>
                        </tr>
                        <tr>
                            <td style="width: 5%;">Tanggal Booking</td>
                            <td style="width: 1%;">:</td>
                            <td style="width: 20%;"> <?= $tgl_booking ?></td>
                        </tr>
                        <tr>
                            <td style="width: 5%;">Jam Booking</td>
                            <td style="width: 1%;">:</td>
                            <td style="width: 20%;"> <?= $jam_booking ?></td>
                        </tr>
                        <tr>
                            <td style="width: 5%;">Durasi Booking</td>
                            <td style="width: 1%;">:</td>
                            <td style="width: 20%;"> <?= $durasi ?> Jam</td>
                        </tr>
                    </table>
                </div>

                <div class="text-center mt-4" style="margin-top: 15px;">
                    <button type="button" class="btn btn-success" onclick="generatePDF(<?= $id_booking ?>)">Cetak Bukti Booking</button>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    function generatePDF(bookingId) {
        $.ajax({
            url: '<?= site_url("landing/booking/cetak/") ?>' + bookingId,
            type: 'GET',
            success: function(response) {
                if(response.status === 'success') {
                    window.location.href = response.file_path;
                } else {
                    alert("Error generating PDF: " + response.message);
                }
            },
            error: function() {
                alert("There was an error generating the PDF.");
            }
        });
    }
</script>
