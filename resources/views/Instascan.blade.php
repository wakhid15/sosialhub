<script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
<script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<video id="preview" class="w-100 border rounded" style="height:300px;"></video>

<div id="hasil-scan" class="mt-4"></div>

<script>
    let scanner = new Instascan.Scanner({ video: document.getElementById('preview') });

    scanner.addListener('scan', function(content) {
        // Kirim AJAX ke server
        $.ajax({
            url: '/get-pasien',
            type: 'GET',
            data: { barcode: content },
            success: function(response) {
                if (response.status === 'success') {
                    let data = response.data;
                    $('#hasil-scan').html(`
                        <h4>Data Pasien:</h4>
                        <table class="table table-bordered">
                            <tr><th>Kategori</th><td>${data.kategori}</td></tr>
                            <tr><th>Nama Pasien</th><td>${data.judul}</td></tr>
                            <tr><th>Barcode</th><td>${data.barcode}</td></tr>
                            <tr><th>Keluarga</th><td>${data.pengarang}</td></tr>
                            <tr><th>Alamat</th><td>${data.penerbit}</td></tr>
                            <tr><th>Telepon</th><td><a href="https://wa.me/${data.telepon}" target="_blank">${data.telepon}</a></td></tr>
                            <tr><th>Umur</th><td>${data.eksemplar}</td></tr>
                            <tr><td colspan="2">
                                <a href="/dashboard/books/${data.id}/edit" class="btn btn-warning btn-sm">Edit</a>
                                <form action="/dashboard/books/print" method="post" target="_blank" class="d-inline">
                                    @csrf
                                    <input type="hidden" name="id" value="${data.id}">
                                    <button class="btn btn-primary btn-sm">Cetak Barcode</button>
                                </form>
                            </td></tr>
                        </table>
                    `);
                } else {
                    $('#hasil-scan').html(`<div class="alert alert-danger">${response.message}</div>`);
                }
            },
            error: function() {
                $('#hasil-scan').html('<div class="alert alert-danger">Terjadi kesalahan saat memproses barcode.</div>');
            }
        });
    });

    Instascan.Camera.getCameras().then(function(cameras){
        if(cameras.length > 0){
            scanner.start(cameras[0]);
        } else {
            alert('Kamera tidak ditemukan.');
        }
    }).catch(function(e){
        console.error(e);
    });
</script>
