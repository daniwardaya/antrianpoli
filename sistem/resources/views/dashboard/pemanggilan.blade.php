@extends('../layouts/dashboard')
@section('nomor_antrian')
    <style>
        #utama.card {
            width: 80%;
            margin-top: 1rem;
        }

        a {
            width: 20rem;
            max-width: 20rem;
            height: 4.5rem;
            margin: 1rem;
        }
    </style>

    <center>
        <div class="card" id="utama">
            <div class="card-body" style="background-color: rgb(255, 255, 255)">
                <h1 class="mb-4" style="font-weight: 900; color:rgb(85, 164, 255)">PEMANGGILAN ANTRIAN</h1>
                <a href="http://172.16.23:8080/antrianpoli/panggil-anak" class="btn"
                    style="background-color:mediumaquamarine; font-size: 1rem; font-weight:600; box-shadow: 2px 6px 5px">
                    <span style="font-size:1.2rem; font-weight:400;">Poliklinik Anak</span></a>
                <a href="http://172.16.23:8080/antrianpoli/panggil-obgin" class="btn"
                    style="background-color:rgb(253, 157, 157); font-size: 1rem; font-weight:600; box-shadow: 2px 6px 5px">
                    <span style="font-size:1.2rem; font-weight:400;">Poliklinik Kandungan</span></a>
                <a href="http://172.16.23:8080/antrianpoli/panggil-mata" class="btn"
                    style="background-color:rgb(250, 239, 139); font-size: 1rem; font-weight:600; box-shadow: 2px 6px 5px">
                    <span style="font-size:1.2rem; font-weight:400;">Poliklinik Mata</span></a>
                <a href="http://172.16.23:8080/antrianpoli/panggil-syaraf" class="btn"
                    style="background-color:rgb(156, 232, 255); font-size: 1rem; font-weight:600; box-shadow: 2px 6px 5px">
                    <span style="font-size:1.2rem; font-weight:400;">Poliklinik Neurologi</span></a>
                <a href="http://172.16.23:8080/antrianpoli/panggil-jiwa" class="btn"
                    style="background-color:rgb(185, 173, 255); font-size: 1rem; font-weight:600; box-shadow: 2px 6px 5px">
                    <span style="font-size:1.2rem; font-weight:400;">Poliklinik Kedokteran Jiwa</span></a>
                <a href="http://172.16.23:8080/antrianpoli/panggil-gigi" class="btn"
                    style="background-color:rgb(243, 148, 206); font-size: 1rem; font-weight:600; box-shadow: 2px 6px 5px">
                    <span style="font-size:1.2rem; font-weight:400;">Poliklinik Gigi</span>
                </a>
                <a href="http://172.16.23:8080/antrianpoli/panggil-jantung" class="btn"
                    style="background-color:rgb(207, 255, 168); font-size: 1rem; font-weight:600; box-shadow: 2px 6px 5px">
                    <span style="font-size:1.2rem; font-weight:400;">Poliklinik Jantung</span></a>
                <a href="http://172.16.23:8080/antrianpoli/panggil-tht" class="btn"
                    style="background-color:rgb(1, 26, 253); font-size: 1rem; font-weight:600; color:white; box-shadow: 2px 6px 5px black">
                    <span style="font-size:1.2rem; font-weight:400;">Poliklinik THT</span></a>
                <a href="http://172.16.23:8080/antrianpoli/panggil-paru" class="btn"
                    style="background-color:rgb(167, 60, 60); font-size: 1rem; font-weight:600; color: white; box-shadow: 2px 6px 5px black">
                    <span style="font-size:1.2rem; font-weight:400;">Poliklinik Paru</span>
                </a>
                <a href="http://172.16.23:8080/antrianpoli/panggil-rehabilitasiMedik" class="btn"
                    style="background-color:rgb(209, 26, 255); font-size: 1rem; font-weight:600; color:white; box-shadow: 2px 6px 5px black">
                    <span style="font-size:1.2rem; font-weight:400;">Poliklinik Rehabilitasi Medik</span> </a>
                <a href="http://172.16.23:8080/antrianpoli/panggil-kulit" class="btn"
                    style="background-color:rgb(255, 59, 59); font-size: 1rem; font-weight:600; color:white; box-shadow: 2px 6px 5px black">
                    <span style="font-size:1rem; font-weight:400;">Poliklinik Dermatologi & Venereologi</span> </a>
                <a href="http://172.16.23:8080/antrianpoli/panggil-fisio" class="btn"
                    style="background-color:rgb(212, 48, 185); font-size: 1rem; font-weight:600; color:white; box-shadow: 2px 6px 5px black">
                    <span style="font-size:1.2rem; font-weight:400;">Poliklinik Fisioterapi</span> </a>
                <a href="http://172.16.23:8080/antrianpoli/panggil-bedah" class="btn"
                    style="background-color:rgb(0, 124, 83); font-size: 1rem; font-weight:600; color:white; box-shadow: 2px 6px 5px black">
                    <span style="font-size:1.2rem; font-weight:400;">Poliklinik Bedah Umum</span></a>
                <a href="http://172.16.23:8080/antrianpoli/panggil-dalam" class="btn disabled"
                    style="background-color:rgb(0, 132, 255); font-size: 1rem; font-weight:600; color:white; box-shadow: 2px 6px 5px black">
                    <span style="font-size:1.2rem; font-weight:400;">Poliklinik Penyakit Dalam</span></a>

            </div>
        </div>
    </center>
@endsection
