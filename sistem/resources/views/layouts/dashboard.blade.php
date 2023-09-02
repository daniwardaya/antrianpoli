<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Antrian Poli</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <link href="css/dashboardcss.css" rel="stylesheet">


</head>

<body>
    <center>
    <div class="header">
        <div class="row">
            <div class="col">
                <img src="img/Logo RSPMC - Putih.png" alt="logo" class="logo" >
            </div>
            
                <div class="col" style="">
                    <h1 style="font-size:3.5rem">{{ $nama_poli }}</h1>
                </div>
            
            <div class="col" >
                <div id="clock" >
                    <p class="date" id="tanggal"></p>
                    <p class="time" id="waktu"></p>
                </div>
            </div>
        </div>
    </div>
</center>
    
    <marquee style="color: black; width: 100%; background-color: #fff; padding:5px; font-size: 20px;">
Selamat datang di Rumah Sakit Pamanukan Medical Center
    </marquee>
    @yield('nomor_antrian')



    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fomantic-ui/2.8.8/semantic.min.js"></script>
    <script src="js/dashboardjs.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>

    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.jqueryui.min.js"></script>
    <script src=" https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/fomantic-ui/2.8.8/semantic.min.js"></script>

    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.responsivevoice.org/responsivevoice.js?key=OzkdlZYy"></script>

    
</body>



</html>
