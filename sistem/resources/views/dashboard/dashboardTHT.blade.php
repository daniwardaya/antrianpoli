@extends('../layouts/dashboard')
@section('nomor_antrian')
    <div class="row" style="margin-top: 250px; color: white;">
        <div class="column">
            <img src="img/dokter/dr-ichsan.png" alt="logo dokter" style="width: 600px;  ">

            <h2 style="font-size: 50px;" id="nama_dokter"></h2>
        </div>
        <div class="column text-center">
            <h2 style="font-size: 250px;" id="no_antrian"></h2>
        </div>
    </div>

    <script>
        var lastAntrian = ""; // Variabel untuk menyimpan nomor antrian terakhir

        // Fungsi untuk menghasilkan suara berdasarkan pesan
        function speak(text) {
            responsiveVoice.speak(text, "Indonesian Male", {
                rate: 0.9,
                pitch: 0.8
            }); // Atur suara yang diinginkan
        }

        // Fungsi untuk menghasilkan suara berdasarkan nomor antrian
        function suaraAntrian(noAntrian) {
            var message = "Nomor Antrian " + noAntrian + " Menuju kepoli THT dokter Ichsan Juliansyah Juanda S P T H T K L";
            speak(message);
        }

        function updateAntrianInfo() {
            $.ajax({
                "url": "{{ route('getAntrianTHT') }}",
                "dataType": "json",
                "type": "GET",
                success: function(data) {
                    $('#nama_dokter').text(data.nama_dokter);
                    $('#no_antrian').text(data.no_antrian);
                    $('#nm_pasien').text(data.nm_pasien);

                    // Memanggil fungsi suaraAntrian() hanya jika nomor antrian berubah
                    if (data.no_antrian !== lastAntrian) {
                        suaraAntrian(data.no_antrian);
                        lastAntrian = data.no_antrian; // Update nomor antrian terakhir
                    }
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        }

        setInterval(updateAntrianInfo, 1000);
    </script>
@endsection
