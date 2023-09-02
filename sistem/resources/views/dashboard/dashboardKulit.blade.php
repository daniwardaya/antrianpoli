@extends('../layouts/dashboard')
@section('nomor_antrian')
    <div class="row" style="margin-top: 250px; color: white;">
        <div class="column">
            <img src="img/dokter/dr-irland.png" alt="logo dokter" style="width: 600px;  ">

            <h2 style="font-size: 50px;" id="nama_dokter"></h2>
        </div>
        <div class="column text-center">
            <h2 style="font-size: 250px;" id="no_antrian"></h2>
        </div>
    </div>

    <script>
        function updateAntrianInfo() {
            $.ajax({
                "url": "{{ route('getAntrianKulit') }}",
                "dataType": "json",
                "type": "GET",
                success: function(data) {

                    $('#nama_dokter').text(data.nama_dokter);
                    $('#no_antrian').text(data.no_antrian);
                    $('#nm_pasien').text(data.nm_pasien);
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        }

        // Memanggil fungsi updateAntrianInfo setiap beberapa detik (misalnya, setiap 5 detik)
        setInterval(updateAntrianInfo, 1000); // 5000 milliseconds = 5 seconds
    </script>
@endsection
