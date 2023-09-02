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
            <h1 class="mb-4" style="font-weight: 900; color:rgb(85, 164, 255)">DASHBOARD</h1>
            
                    <a href="http://172.16.23:8080/antrianpoli/dashboardAnak" class="btn" style="background-color:mediumaquamarine; font-size: 1rem; font-weight:600; box-shadow: 2px 6px 5px"> <span style="font-size:1.2rem; font-weight:400;">Poliklinik Anak</span>  <br> dr. Riri Adriana., Sp.A., M.kes. </a>
                    <a href="http://172.16.23:8080/antrianpoli/dashboardAnak2" class="btn" style="background-color:mediumaquamarine; font-size: 1rem; font-weight:600; box-shadow: 2px 6px 5px"> <span style="font-size:1.2rem; font-weight:400;">Poliklinik Anak</span>  <br> dr. Irene Aurelia Santoso., Sp.A. </a>
                    <a href="http://172.16.23:8080/antrianpoli/dashboardObgin" class="btn" style="background-color:rgb(253, 157, 157); font-size: 1rem; font-weight:600; box-shadow: 2px 6px 5px"> <span style="font-size:1.2rem; font-weight:400;">Poliklinik Kandungan</span>  <br>dr. Johan Taruna, Sp.OG</a>
                    <a href="http://172.16.23:8080/antrianpoli/dashboardObgin2" class="btn" style="background-color:rgb(253, 157, 157); font-size: 1rem; font-weight:600; box-shadow: 2px 6px 5px"> <span style="font-size:1.2rem; font-weight:400;">Poliklinik Kandungan</span>  <br>dr. Teuku Kyan Nuryasin, Sp.OG</a>
                    <a href="http://172.16.23:8080/antrianpoli/dashboardMata" class="btn" style="background-color:rgb(250, 239, 139); font-size: 1rem; font-weight:600; box-shadow: 2px 6px 5px"> <span style="font-size:1.2rem; font-weight:400;">Poliklinik Mata</span>  <br> dr. Rama Nurrahmayana, Sp.M</a>
                    <a href="http://172.16.23:8080/antrianpoli/dashboardMata2" class="btn" style="background-color:rgb(250, 239, 139); font-size: 1rem; font-weight:600; box-shadow: 2px 6px 5px"> <span style="font-size:1.2rem; font-weight:400;">Poliklinik Mata</span>  <br> dr. Bambang Rianto, Sp.M </a>
                    <a href="http://172.16.23:8080/antrianpoli/dashboardSyaraf" class="btn" style="background-color:rgb(156, 232, 255); font-size: 1rem; font-weight:600; box-shadow: 2px 6px 5px"> <span style="font-size:1.2rem; font-weight:400;">Poliklinik Neurologi</span>  <br> dr. Allan Yudhiatmoko, Sp.N </a>
                    <a href="http://172.16.23:8080/antrianpoli/dashboardSyaraf2" class="btn" style="background-color:rgb(156, 232, 255); font-size: 1rem; font-weight:600; box-shadow: 2px 6px 5px"> <span style="font-size:1.2rem; font-weight:400;">Poliklinik Neurologi</span>  <br> dr. Indah Aprillia R, Sp.N, M.Kes </a>
                    <a href="http://172.16.23:8080/antrianpoli/dashboardJiwa" class="btn" style="background-color:rgb(185, 173, 255); font-size: 1rem; font-weight:600; box-shadow: 2px 6px 5px"> <span style="font-size:1.2rem; font-weight:400;">Poliklinik Kedokteran Jiwa</span>  <br> dr. Soeponco Eddi W, Sp.KJ, MARS </a>
                    <a href="http://172.16.23:8080/antrianpoli/dashboardJiwa2" class="btn" style="background-color:rgb(185, 173, 255); font-size: 1rem; font-weight:600; box-shadow: 2px 6px 5px"> <span style="font-size:1.2rem; font-weight:400;">Poliklinik Kedokteran Jiwa</span>  <br> dr. Eka Puji Lestari, Sp.KJ </a>
                    <a href="http://172.16.23:8080/antrianpoli/dashboardGigi" class="btn" style="background-color:rgb(243, 148, 206); font-size: 1rem; font-weight:600; box-shadow: 2px 6px 5px"> <span style="font-size:1.2rem; font-weight:400;">Poliklinik Gigi</span>  <br> drg. Ezra Moriana Putri </a>
                    <a href="http://172.16.23:8080/antrianpoli/dashboardJantung" class="btn" style="background-color:rgb(207, 255, 168); font-size: 1rem; font-weight:600; box-shadow: 2px 6px 5px"> <span style="font-size:1.2rem; font-weight:400;">Poliklinik Jantung</span>  <br> dr. Irlandi M Suseno, Sp.JP, FIHA </a>
                    <a href="http://172.16.23:8080/antrianpoli/dashboardTHT" class="btn" style="background-color:rgb(1, 26, 253); font-size: 1rem; font-weight:600; color:white; box-shadow: 2px 6px 5px black"> <span style="font-size:1.2rem; font-weight:400;">Poliklinik THT</span>  <br> dr. Ichsan J Juanda, Sp.THT-KL</a>
                    <a href="http://172.16.23:8080/antrianpoli/dashboardParu" class="btn" style="background-color:rgb(167, 60, 60); font-size: 1rem; font-weight:600; color: white; box-shadow: 2px 6px 5px black"> <span style="font-size:1.2rem; font-weight:400;">Poliklinik Paru</span>  <br> dr. Gilang Muhamad S N,Sp.P </a>
                    <a href="http://172.16.23:8080/antrianpoli/dashboardRehabilitasiMedik" class="btn" style="background-color:rgb(209, 26, 255); font-size: 1rem; font-weight:600; color:white; box-shadow: 2px 6px 5px black"> <span style="font-size:1.2rem; font-weight:400;">Poliklinik Rehabilitasi Medik</span>  <br> dr. Yudit Sandya, Sp.KFR </a>
                    <a href="http://172.16.23:8080/antrianpoli/dashboardKulit" class="btn" style="background-color:rgb(255, 59, 59); font-size: 1rem; font-weight:600; color:white; box-shadow: 2px 6px 5px black"> <span style="font-size:1rem; font-weight:400;">Poliklinik Dermatologi & Venereologi</span>  <br> dr. M.Radyn Haryadi Widjaya, Sp.DV </a>
                    <a href="http://172.16.23:8080/antrianpoli/dashboardFisio" class="btn" style="background-color:rgb(212, 48, 185); font-size: 1rem; font-weight:600; color:white; box-shadow: 2px 6px 5px black"> <span style="font-size:1.2rem; font-weight:400;">Poliklinik Fisioterapi</span>  <br> Tim Fisioterapi</a>
                    <a href="http://172.16.23:8080/antrianpoli/dashboardBedah" class="btn" style="background-color:rgb(0, 124, 83); font-size: 1rem; font-weight:600; color:white; box-shadow: 2px 6px 5px black"> <span style="font-size:1.2rem; font-weight:400;">Poliklinik Bedah Umum</span>  <br> dr. Fathir Yunarfan Fatahadin, Sp.B </a>
                    <a href="http://172.16.23:8080/antrianpoli/dashboardBedah2" class="btn" style="background-color:rgb(0, 124, 83); font-size: 1rem; font-weight:600; color:white; box-shadow: 2px 6px 5px black"> <span style="font-size:1.2rem; font-weight:400;">Poliklinik Bedah Umum</span>  <br> dr. Taufik Gumilar Wahyudin, Sp.B </a>
                    <a href="http://172.16.23:8080/antrianpoli/dashboardBedah3" class="btn" style="background-color:rgb(0, 124, 83); font-size: 1rem; font-weight:600; color:white; box-shadow: 2px 6px 5px black"> <span style="font-size:1.2rem; font-weight:400;">Poliklinik Bedah Umum</span>  <br> dr. Ocin Sei, Sp.B </a>                   
                    <a href="http://172.16.23:8080/antrianpoli/dashboardAnak2" class="btn disabled" style="background-color:rgb(0, 132, 255); font-size: 1rem; font-weight:600; color:white; box-shadow: 2px 6px 5px black"> <span style="font-size:1.2rem; font-weight:400;">Poliklinik Penyakit Dalam</span>  <br> dr. Iyan Meyasdi R Tarigan, Sp.PD, M,M </a>
                    <a href="http://172.16.23:8080/antrianpoli/dashboardAnak" class="btn disabled" style="background-color:rgb(0, 132, 255); font-size: 1rem; font-weight:600; color:white; box-shadow: 2px 6px 5px black"> <span style="font-size:1.2rem; font-weight:400;">Poliklinik Penyakit Dalam</span>  <br> dr. Ratih Pratiwi, Sp.PD </a>
                    

 
        </div>  
    </div>
</center>

@endsection
