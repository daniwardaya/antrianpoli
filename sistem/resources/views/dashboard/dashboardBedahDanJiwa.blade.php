@extends('../layouts/dashboard')
@section('nomor_antrian')


<div class="row" style="margin-top: 250px; ">
    <div class="column text-center" style="width: 50%; float: left;">
        <div class="card shadow-lg" style="min-width: 800px;">
            <h5 class="card-header" style="font-size: 45px;">POLIKLINIK KANDUNGAN</h5>
            <div class="card-body" style="background-color:rgb(203, 239, 255);">
                <img src="img/dr-johan.png" alt="logo dokter" style="width: 300px;">
                <h2 style="font-size: 40px;" id="nama_dokter_bedah"></h2>
                <h2 style="font-size: 160px;" id="no_antrian_bedah"></h2>
            </div>
          </div>
    </div>
    <div class="column text-center" style="width: 50%; float: left;">
        <div class="card shadow-lg" style="min-width: 800px;">
            <h5 class="card-header" style="font-size: 45px;">POLIKLINIK JIWA</h5>
            <div class="card-body" style="background-color:rgb(203, 239, 255);">
                <img src="img/dr-eka.png" alt="logo dokter" style="width: 300px;">
                <h2 style="font-size: 40px;" id="nama_dokter_jiwa"></h2>
                <h2 style="font-size: 160px;" id="no_antrian_jiwa"></h2>
            </div>
          </div>
    </div>
   
</div>

    <script>
var lastAntrianBedah = "";
var lastAntrianJiwa = "";

function speak(text) {
    responsiveVoice.speak(text, "Indonesian Male", {
        rate: 0.9,
        pitch: 0.8
    });
}

function suaraAntrianBedah(noAntrianBedah) {
    var message = "Nomor Antrian " + noAntrianBedah + " Menuju kepoli kandungan";
    speak(message);
}

function suaraAntrianJiwa(noAntrianJiwa) {
    var message = "Nomor Antrian " + noAntrianJiwa + " Menuju kepoli Jiwa";
    speak(message);
}

var isWaitingForBedah = false;
var isWaitingForJiwa = false;

function updateAntrianInfo() {
    $.ajax({
        "url": "{{ route('getAntrianBedahDanJiwa') }}",
        "dataType": "json",
        "type": "GET",
        success: function(data) {
            $('#nama_dokter_bedah').text(data.nama_dokter_bedah);
            $('#no_antrian_bedah').text(data.no_antrian_bedah);
            $('#nm_pasien_bedah').text(data.nm_pasien_bedah);

            $('#nama_dokter_jiwa').text(data.nama_dokter_jiwa);
            $('#no_antrian_jiwa').text(data.no_antrian_jiwa);
            $('#nm_pasien_jiwa').text(data.nm_pasien_jiwa);

            if (!isWaitingForJiwa && !isWaitingForBedah) {
                if (data.no_antrian_jiwa !== lastAntrianJiwa) {
                    suaraAntrianJiwa(data.no_antrian_jiwa);
                    lastAntrianJiwa = data.no_antrian_jiwa;
                    isWaitingForBedah = true;
                    setTimeout(function() {
                        isWaitingForBedah = false;
                    }, 6000);
                } else if (data.no_antrian_bedah !== lastAntrianBedah) {
                    suaraAntrianBedah(data.no_antrian_bedah);
                    lastAntrianBedah = data.no_antrian_bedah;
                    isWaitingForJiwa = true;
                    setTimeout(function() {
                        isWaitingForJiwa = false;
                    }, 6000);
                }
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
