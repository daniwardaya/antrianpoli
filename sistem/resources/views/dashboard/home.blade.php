@extends('../layouts/dashboard')
@section('nomor_antrian')

<center>

    <div class="card" style="width: 50rem; background-color:rgb(255, 255, 255); height:30rem; margin-top:5rem;">
        <div class="card-title" style="background-color:rgb(230, 230, 230); font-size: 2rem; font-weight:900;">MENU</div>
        <center>
            <a href="http://172.16.0.23:8080/antrianpoli/listPemanggilan" style="font-size:2rem; font-weight:400; color:black;  margin-bottom:1.2rem; background-color:rgb(142, 255, 217); width:80%; margin-top:8%; padding: 2rem; box-shadow: 2px 6px 5px; " class="btn">PEMANGGILAN ANTRIAN</a><br>
            <a href="http://172.16.0.23:8080/antrianpoli/listDashboard" style=" font-size:2rem; color:black; font-weight:400;  margin-bottom:1.2rem; background-color:rgb(255, 158, 158); width:80%; padding: 2rem; box-shadow: 2px 6px 5px;"  class="btn">DASHBOARD ANTRIAN</a>
        </center>
       
    </div>
       
</center>



@endsection