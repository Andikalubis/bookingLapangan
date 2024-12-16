$(() => {
    let table = $('#table_lapangan').DataTable({
        ajax: {
            url: URL.getData,
            type: "GET",
            dataSrc: function (json) {
                if (!json.data || json.data.length === 0) {
                    return [];
                }
                return json.data;
            },
        },
        columns: [
            { data: 'no' },
            { data: 'no_lapang' },
            {
                data: 'status',
                render: function (data, type, row) {
                    let statusText = '';
                    let statusClass = '';
    
                    switch (data) {
                        case "1":
                            statusText = 'Aktif';
                            statusClass = 'text-success';
                            break;
                        case "2":
                            statusText = 'Booked';
                            statusClass = 'text-primary';
                            break;
                        case "3":
                            statusText = 'Batal Booked';
                            statusClass = 'text-danger';
                            break;
                        case "4":
                            statusText = 'Pending';
                            statusClass = 'text-warning';
                            break;
                        default:
                            statusText = 'Tidak Diketahui';
                            statusClass = 'text-muted';
                            break;
                    }
    
                    return `<span class="${statusClass}">${statusText}</span>`;
                },
            },
            {
                data: 'id',
                render: function (data, type, row) {
                    return `
                        <button class="btn btn-warning btn-sm btn-edit" data-id="${data}">Edit</button>
                        <button class="btn btn-danger btn-sm btn-delete" data-id="${data}">Delete</button>
                        <button class="btn btn-success btn-sm btn-aktif" data-id="${data}">Aktif</button>
                        <button class="btn btn-secondary btn-sm btn-batal" data-id="${data}">Batal</button>
                    `;
                },
                orderable: false,
                searchable: false,
            },
        ],
        responsive: true,
        autoWidth: false,
        language: {
            search: "Cari:",
            lengthMenu: "Tampilkan _MENU_ data",
            info: "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
            infoEmpty: "Tidak ada data tersedia",
            infoFiltered: "(difilter dari total _MAX_ data)",
            zeroRecords: "Tidak ada data yang sesuai",
            paginate: {
                first: "Awal",
                last: "Akhir",
                next: "Berikutnya",
                previous: "Sebelumnya",
            },
        },
    });
    
    $(document).on('click', '.btn-aktif, .btn-batal', function() {
        let id = $(this).data('id');
        let status = $(this).hasClass('btn-aktif') ? 1 : 3;
    
        $.ajax({
            url: URL.updateStatus,
            type: 'POST',
            data: { id: id, status: status },
            success: function(response) {
                console.log(response);
                Swal.fire({
                    title: 'Sukses!',
                    text: 'Status berhasil diupdate.',
                    icon: 'success',
                    confirmButtonText: 'OK'
                }).then(() => {
                    table.ajax.reload();
                });
            },
            error: function() {
                Swal.fire({
                    title: 'Terjadi kesalahan!',
                    text: 'Ada masalah dalam permintaan.',
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
            }
        });
    });

    $('#table_lapangan').on('click', '.btn-edit', function () {
        const id = $(this).data('id');
        console.log('Edit ID:', id);
    });

    $('#table_lapangan').on('click', '.btn-delete', function () {
        const id = $(this).data('id');
        console.log('Delete ID:', id);
    
        Swal.fire({
            title: 'Apakah Anda yakin?',
            text: "Data yang dihapus tidak dapat dikembalikan!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Hapus',
            cancelButtonText: 'Batal',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: `${URL.delete}/${id}`, 
                    type: 'DELETE',
                    success: function (response) {
                        Swal.fire({
                            title: 'Sukses!',
                            text: 'Data berhasil dihapus!',
                            icon: 'success',
                            confirmButtonText: 'OK'
                        }).then(() => {
                            table.ajax.reload(); 
                        });
                    },
                    error: function () {
                        Swal.fire({
                            title: 'Gagal!',
                            text: 'Terjadi kesalahan saat menghapus data.',
                            icon: 'error',
                            confirmButtonText: 'OK'
                        });
                    }
                });
            }
        });
    });
    
});
