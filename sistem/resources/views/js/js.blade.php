{{-- anak start --}}
<script>
    $(document).ready(function() {
        $('#tabelPasienPoliAnak').DataTable({
            scrollY: "685px",
            scrollX: true,
            pageLength: 20,
            fixedColumns: {
                heightMatch: 'none'
            },
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url": "{{ route('dataAntrianAnak') }}",
                "dataType": "json",
                "type": "GET"
            },
            "columns": [{
                    "data": 'no_reg'
                },
                {
                    "data": 'nm_poli'
                },
                {
                    "data": 'nama'
                },
                {
                    "data": 'nm_pasien'
                },
                {
                    "data": null,
                    "render": function(data, type, row) {
                        return '<button class="btn btn-primary btn-sm panggil-btn" data-no-reg="' +
                            row.no_reg +
                            '" data-kd-poli="' + row.kd_poli + '" data-nama="' + row.nama +
                            '"  data-nm-pasien="' + row.nm_pasien + '">' +
                            'Panggil</button>' +
                            '<button class="btn btn-success btn-sm selesai-btn" data-no-reg="' +
                            row.no_reg +
                            '" data-kd-poli="' + row.kd_poli + '" data-nama="' + row.nama +
                            '">' +
                            'Selesai</button>';
                    }
                },

            ]
        });

        $('#tabelPasienPoliAnak').on('click', '.panggil-btn', function() {
            var noReg = $(this).data('no-reg');
            var kdPoli = $(this).data('kd-poli');
            var namaDokter = $(this).data('nama');
            var nmPasien = $(this).data('nm-pasien');


            var message = "Nomor Antrian." + noReg + "Menuju kepoli Anak";


            $.ajax({
                url: "{{ route('panggilAntrianAnak') }}",
                type: 'POST',
                data: {
                    _token: "{{ csrf_token() }}",
                    no_reg: noReg,
                    kd_poli: kdPoli,
                    nama: namaDokter,
                    nm_pasien: nmPasien
                },
                success: function(response) {

                alert('Antrian berhasil dipanggil.')

                },
                error: function(error) {

                alert('Antrian gagal dipanggil!');

                }
            });
        });

        $('#tabelPasienPoliAnak').on('click', '.selesai-btn', function() {
            var clickedButton = $(this);
            var noReg = $(this).data('no-reg');
            var kdPoli = $(this).data('kd-poli');
            var namaDokter = $(this).data('nama');

            var konfir = confirm('Apakah antrian ini sudah selesai?');

            if (konfir) {
                $.ajax({
                    url: "{{ route('selesaiAntrianAnak') }}",
                    type: 'POST',
                    data: {
                        _token: "{{ csrf_token() }}",
                        no_reg: noReg,
                        kd_poli: kdPoli,
                        nama: namaDokter
                    },
                    success: function(response) {

                        clickedButton.closest('tr').remove();
                    },
                    error: function(error) {
                        alert('Data gagal dikirim.');
                    }
                });
            }

        });
    });

    function speak(text) {
        responsiveVoice.speak(text, "Indonesian Male", {
            rate: 0.9,
            pitch: 0.8
        }); // Atur suara yang diinginkan
    }
</script>
{{-- anak end --}}

{{-- obgin start --}}
<script>
    $(document).ready(function() {
        $('#tabelPasienPoliObgin').DataTable({
            scrollY: "685px",
            scrollX: true,
            pageLength: 20,
            fixedColumns: {
                heightMatch: 'none'
            },
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url": "{{ route('dataAntrianObgin') }}",
                "dataType": "json",
                "type": "GET"
            },
            "columns": [{
                    "data": 'no_reg'
                },
                {
                    "data": 'nm_poli'
                },
                {
                    "data": 'nama'
                },
                {
                    "data": 'nm_pasien'
                },
                {
                    "data": null,
                    "render": function(data, type, row) {
                        return '<button class="btn btn-primary btn-sm panggil-btn" data-no-reg="' +
                            row.no_reg +
                            '" data-kd-poli="' + row.kd_poli + '" data-nama="' + row.nama +
                            '"  data-nm-pasien="' + row.nm_pasien + '">' +
                            'Panggil</button>' +
                            '<button class="btn btn-success btn-sm selesai-btn" data-no-reg="' +
                            row.no_reg +
                            '" data-kd-poli="' + row.kd_poli + '" data-nama="' + row.nama +
                            '">' +
                            'Selesai</button>';
                    }
                },

            ]
        });

        $('#tabelPasienPoliObgin').on('click', '.panggil-btn', function() {
            var noReg = $(this).data('no-reg');
            var kdPoli = $(this).data('kd-poli');
            var namaDokter = $(this).data('nama');
            var noRawat = $(this).data('nm-pasien');


            var message = "Nomor Antrian." + noReg + "Menuju kepoli Kandungan";


            $.ajax({
                url: "{{ route('panggilAntrianObgin') }}",
                type: 'POST',
                data: {
                    _token: "{{ csrf_token() }}",
                    no_reg: noReg,
                    kd_poli: kdPoli,
                    nama: namaDokter,
                    nm_pasien: noRawat
                },
                success: function(response) {

                alert('Antrian berhasil dipanggil.')

                },
                error: function(error) {

                alert('Antrian gagal dipanggil!');

                }
            });
        });

        $('#tabelPasienPoliObgin').on('click', '.selesai-btn', function() {
            var clickedButton = $(this);
            var noReg = $(this).data('no-reg');
            var kdPoli = $(this).data('kd-poli');
            var namaDokter = $(this).data('nama');

            var konfir = confirm('Apakah antrian ini sudah selesai?');

            if (konfir) {

                $.ajax({
                    url: "{{ route('selesaiAntrianObgin') }}",
                    type: 'POST',
                    data: {
                        _token: "{{ csrf_token() }}",
                        no_reg: noReg,
                        kd_poli: kdPoli,
                        nama: namaDokter
                    },
                    success: function(response) {

                        clickedButton.closest('tr').remove();
                    },
                    error: function(error) {
                        alert('Data gagal dikirim.');
                    }
                });

            }
        });
    });

    function speak(text) {
        responsiveVoice.speak(text, "Indonesian Male", {
            rate: 0.9,
            pitch: 0.8
        }); // Atur suara yang diinginkan
    }
</script>
{{-- obgin end --}}


{{-- bedah start --}}
<script>
    $(document).ready(function() {
        $('#tabelPasienPoliBedah').DataTable({
            scrollY: "685px",
            scrollX: true,
            pageLength: 20,
            fixedColumns: {
                heightMatch: 'none'
            },
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url": "{{ route('dataAntrianBedah') }}",
                "dataType": "json",
                "type": "GET"
            },
            "columns": [{
                    "data": 'no_reg'
                },
                {
                    "data": 'nm_poli'
                },
                {
                    "data": 'nama'
                },
                {
                    "data": 'nm_pasien'
                },
                {
                    "data": null,
                    "render": function(data, type, row) {
                        return '<button class="btn btn-primary btn-sm panggil-btn" data-no-reg="' +
                            row.no_reg +
                            '" data-kd-poli="' + row.kd_poli + '" data-nama="' + row.nama +
                            '"  data-nm-pasien="' + row.nm_pasien + '">' +
                            'Panggil</button>' +
                            '<button class="btn btn-success btn-sm selesai-btn" data-no-reg="' +
                            row.no_reg +
                            '" data-kd-poli="' + row.kd_poli + '" data-nama="' + row.nama +
                            '">' +
                            'Selesai</button>';
                    }
                },

            ]
        });

        $('#tabelPasienPoliBedah').on('click', '.panggil-btn', function() {
            var noReg = $(this).data('no-reg');
            var kdPoli = $(this).data('kd-poli');
            var namaDokter = $(this).data('nama');
            var noRawat = $(this).data('nm-pasien');


            var message = "Nomor Antrian." + noReg + "Menuju kepoli Bedah";


            $.ajax({
                url: "{{ route('panggilAntrianBedah') }}",
                type: 'POST',
                data: {
                    _token: "{{ csrf_token() }}",
                    no_reg: noReg,
                    kd_poli: kdPoli,
                    nama: namaDokter,
                    nm_pasien: noRawat
                },
                success: function(response) {


                    // speak(message);
                    alert('Data berhasil dipanggil.');
                },
                error: function(error) {
                    alert('Data gagal dipanggil!.');
                }
            });
        });

        $('#tabelPasienPoliBedah').on('click', '.selesai-btn', function() {
            var clickedButton = $(this);
            var noReg = $(this).data('no-reg');
            var kdPoli = $(this).data('kd-poli');
            var namaDokter = $(this).data('nama');

            var konfir = confirm('Apakah antrian ini sudah selesai?');

            if (konfir) {

                $.ajax({
                    url: "{{ route('selesaiAntrianBedah') }}",
                    type: 'POST',
                    data: {
                        _token: "{{ csrf_token() }}",
                        no_reg: noReg,
                        kd_poli: kdPoli,
                        nama: namaDokter
                    },
                    success: function(response) {

                        clickedButton.closest('tr').remove();
                    },
                    error: function(error) {
                        alert('Data gagal dikirim.');
                    }
                });
            }
        });
    });

    function speak(text) {
        responsiveVoice.speak(text, "Indonesian Male", {
            rate: 0.9,
            pitch: 0.8
        }); // Atur suara yang diinginkan
    }
</script>
{{-- bedah end --}}

{{-- fisio start --}}
<script>
    $(document).ready(function() {
        $('#tabelPasienPoliFisio').DataTable({
            scrollY: "685px",
            scrollX: true,
            pageLength: 20,
            fixedColumns: {
                heightMatch: 'none'
            },
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url": "{{ route('dataAntrianFisio') }}",
                "dataType": "json",
                "type": "GET"
            },
            "columns": [{
                    "data": 'no_reg'
                },
                {
                    "data": 'nm_poli'
                },
                {
                    "data": 'nama'
                },
                {
                    "data": 'nm_pasien'
                },
                {
                    "data": null,
                    "render": function(data, type, row) {
                        return '<button class="btn btn-primary btn-sm panggil-btn" data-no-reg="' +
                            row.no_reg +
                            '" data-kd-poli="' + row.kd_poli + '" data-nama="' + row.nama +
                            '"  data-nm-pasien="' + row.nm_pasien + '">' +
                            'Panggil</button>' +
                            '<button class="btn btn-success btn-sm selesai-btn" data-no-reg="' +
                            row.no_reg +
                            '" data-kd-poli="' + row.kd_poli + '" data-nama="' + row.nama +
                            '">' +
                            'Selesai</button>';
                    }
                },

            ]
        });

        $('#tabelPasienPoliFisio').on('click', '.panggil-btn', function() {
            var noReg = $(this).data('no-reg');
            var kdPoli = $(this).data('kd-poli');
            var namaDokter = $(this).data('nama');
            var noRawat = $(this).data('nm-pasien');


            var message = "Nomor Antrian." + noReg + "Menuju kepoli Fisioterapi";


            $.ajax({
                url: "{{ route('panggilAntrianFisio') }}",
                type: 'POST',
                data: {
                    _token: "{{ csrf_token() }}",
                    no_reg: noReg,
                    kd_poli: kdPoli,
                    nama: namaDokter,
                    nm_pasien: noRawat
                },
                success: function(response) {


                    alert('Data berhasil dipanggil.')
                },
                error: function(error) {
                    alert('Data gagal ddipanggil!');
                }
            });
        });

        $('#tabelPasienPoliFisio').on('click', '.selesai-btn', function() {
            var clickedButton = $(this);
            var noReg = $(this).data('no-reg');
            var kdPoli = $(this).data('kd-poli');
            var namaDokter = $(this).data('nama');

            var konfir = confirm('Apakah antrian ini sudah selesai?');

            if (konfir) {

                $.ajax({
                    url: "{{ route('selesaiAntrianFisio') }}",
                    type: 'POST',
                    data: {
                        _token: "{{ csrf_token() }}",
                        no_reg: noReg,
                        kd_poli: kdPoli,
                        nama: namaDokter
                    },
                    success: function(response) {

                        clickedButton.closest('tr').remove();
                    },
                    error: function(error) {
                        alert('Data gagal dikirim.');
                    }
                });
            }
        });
    });

    function speak(text) {
        responsiveVoice.speak(text, "Indonesian Male", {
            rate: 0.9,
            pitch: 0.8
        }); // Atur suara yang diinginkan
    }
</script>
{{-- fisio end --}}

{{-- gigi start --}}
<script>
    $(document).ready(function() {
        $('#tabelPasienPoliGigi').DataTable({
            scrollY: "685px",
            scrollX: true,
            pageLength: 20,
            fixedColumns: {
                heightMatch: 'none'
            },
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url": "{{ route('dataAntrianGigi') }}",
                "dataType": "json",
                "type": "GET"
            },
            "columns": [{
                    "data": 'no_reg'
                },
                {
                    "data": 'nm_poli'
                },
                {
                    "data": 'nama'
                },
                {
                    "data": 'nm_pasien'
                },
                {
                    "data": null,
                    "render": function(data, type, row) {
                        return '<button class="btn btn-primary btn-sm panggil-btn" data-no-reg="' +
                            row.no_reg +
                            '" data-kd-poli="' + row.kd_poli + '" data-nama="' + row.nama +
                            '"  data-nm-pasien="' + row.nm_pasien + '">' +
                            'Panggil</button>' +
                            '<button class="btn btn-success btn-sm selesai-btn" data-no-reg="' +
                            row.no_reg +
                            '" data-kd-poli="' + row.kd_poli + '" data-nama="' + row.nama +
                            '">' +
                            'Selesai</button>';
                    }
                },

            ]
        });

        $('#tabelPasienPoliGigi').on('click', '.panggil-btn', function() {
            var noReg = $(this).data('no-reg');
            var kdPoli = $(this).data('kd-poli');
            var namaDokter = $(this).data('nama');
            var noRawat = $(this).data('nm-pasien');


            var message = "Nomor Antrian." + noReg + "Menuju kepoli Gigi";


            $.ajax({
                url: "{{ route('panggilAntrianGigi') }}",
                type: 'POST',
                data: {
                    _token: "{{ csrf_token() }}",
                    no_reg: noReg,
                    kd_poli: kdPoli,
                    nama: namaDokter,
                    nm_pasien: noRawat
                },
                success: function(response) {


                    alert('Data berhasil dipanggil.')
                },
                error: function(error) {
                    alert('Data gagal dipanggil!');
                }
            });
        });

        $('#tabelPasienPoliGigi').on('click', '.selesai-btn', function() {
            var clickedButton = $(this);
            var noReg = $(this).data('no-reg');
            var kdPoli = $(this).data('kd-poli');
            var namaDokter = $(this).data('nama');

            var konfir = confirm('Apakah antrian ini sudah selesai?');

            if (konfir) {

                $.ajax({
                    url: "{{ route('selesaiAntrianGigi') }}",
                    type: 'POST',
                    data: {
                        _token: "{{ csrf_token() }}",
                        no_reg: noReg,
                        kd_poli: kdPoli,
                        nama: namaDokter
                    },
                    success: function(response) {

                        clickedButton.closest('tr').remove();
                    },
                    error: function(error) {
                        alert('Data gagal dikirim.');
                    }
                });
            }
        });
    });

    function speak(text) {
        responsiveVoice.speak(text, "Indonesian Male", {
            rate: 0.9,
            pitch: 0.8
        }); // Atur suara yang diinginkan
    }
</script>
{{-- gigi end --}}

{{-- jantung start --}}
<script>
    $(document).ready(function() {
        $('#tabelPasienPoliJantung').DataTable({
            scrollY: "685px",
            scrollX: true,
            pageLength: 20,
            fixedColumns: {
                heightMatch: 'none'
            },
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url": "{{ route('dataAntrianJantung') }}",
                "dataType": "json",
                "type": "GET"
            },
            "columns": [{
                    "data": 'no_reg'
                },
                {
                    "data": 'nm_poli'
                },
                {
                    "data": 'nama'
                },
                {
                    "data": 'nm_pasien'
                },
                {
                    "data": null,
                    "render": function(data, type, row) {
                        return '<button class="btn btn-primary btn-sm panggil-btn" data-no-reg="' +
                            row.no_reg +
                            '" data-kd-poli="' + row.kd_poli + '" data-nama="' + row.nama +
                            '"  data-nm-pasien="' + row.nm_pasien + '">' +
                            'Panggil</button>' +
                            '<button class="btn btn-success btn-sm selesai-btn" data-no-reg="' +
                            row.no_reg +
                            '" data-kd-poli="' + row.kd_poli + '" data-nama="' + row.nama +
                            '">' +
                            'Selesai</button>';
                    }
                },

            ]
        });

        $('#tabelPasienPoliJantung').on('click', '.panggil-btn', function() {
            var noReg = $(this).data('no-reg');
            var kdPoli = $(this).data('kd-poli');
            var namaDokter = $(this).data('nama');
            var noRawat = $(this).data('nm-pasien');


            var message = "Nomor Antrian." + noReg + "Menuju kepoli Jantung";


            $.ajax({
                url: "{{ route('panggilAntrianJantung') }}",
                type: 'POST',
                data: {
                    _token: "{{ csrf_token() }}",
                    no_reg: noReg,
                    kd_poli: kdPoli,
                    nama: namaDokter,
                    nm_pasien: noRawat
                },
                success: function(response) {


                    alert('Antrian berhasil dipanggil.')
                },
                error: function(error) {
                    alert('Antrian gagal dipanggil!');
                }
            });
        });

        $('#tabelPasienPoliJantung').on('click', '.selesai-btn', function() {
            var clickedButton = $(this);
            var noReg = $(this).data('no-reg');
            var kdPoli = $(this).data('kd-poli');
            var namaDokter = $(this).data('nama');

            var konfir = confirm('Apakah antrian ini sudah selesai?');

            if (konfir) {

                $.ajax({
                    url: "{{ route('selesaiAntrianJantung') }}",
                    type: 'POST',
                    data: {
                        _token: "{{ csrf_token() }}",
                        no_reg: noReg,
                        kd_poli: kdPoli,
                        nama: namaDokter
                    },
                    success: function(response) {

                        clickedButton.closest('tr').remove();
                    },
                    error: function(error) {
                        alert('Data gagal dikirim.');
                    }
                });
            }
        });
    });

    function speak(text) {
        responsiveVoice.speak(text, "Indonesian Male", {
            rate: 0.9,
            pitch: 0.8
        }); // Atur suara yang diinginkan
    }
</script>
{{-- jantung end --}}

{{-- jiwa start --}}
<script>
    $(document).ready(function() {
        $('#tabelPasienPoliJiwa').DataTable({
            scrollY: "685px",
            scrollX: true,
            pageLength: 20,
            fixedColumns: {
                heightMatch: 'none'
            },
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url": "{{ route('dataAntrianJiwa') }}",
                "dataType": "json",
                "type": "GET"
            },
            "columns": [{
                    "data": 'no_reg'
                },
                {
                    "data": 'nm_poli'
                },
                {
                    "data": 'nama'
                },
                {
                    "data": 'nm_pasien'
                },
                {
                    "data": null,
                    "render": function(data, type, row) {
                        return '<button class="btn btn-primary btn-sm panggil-btn" data-no-reg="' +
                            row.no_reg +
                            '" data-kd-poli="' + row.kd_poli + '" data-nama="' + row.nama +
                            '"  data-nm-pasien="' + row.nm_pasien + '">' +
                            'Panggil</button>' +
                            '<button class="btn btn-success btn-sm selesai-btn" data-no-reg="' +
                            row.no_reg +
                            '" data-kd-poli="' + row.kd_poli + '" data-nama="' + row.nama +
                            '">' +
                            'Selesai</button>';
                    }
                },

            ]
        });

        $('#tabelPasienPoliJiwa').on('click', '.panggil-btn', function() {
            var noReg = $(this).data('no-reg');
            var kdPoli = $(this).data('kd-poli');
            var namaDokter = $(this).data('nama');
            var noRawat = $(this).data('nm-pasien');


            var message = "Nomor Antrian." + noReg + "Menuju kepoli Jiwa";


            $.ajax({
                url: "{{ route('panggilAntrianJiwa') }}",
                type: 'POST',
                data: {
                    _token: "{{ csrf_token() }}",
                    no_reg: noReg,
                    kd_poli: kdPoli,
                    nama: namaDokter,
                    nm_pasien: noRawat
                },
                success: function(response) {


                    alert('Antrian berhasil dipanggil.')
                },
                error: function(error) {
                    alert('Antrian gagal dipanggil!');
                }
            });
        });

        $('#tabelPasienPoliJiwa').on('click', '.selesai-btn', function() {
            var clickedButton = $(this);
            var noReg = $(this).data('no-reg');
            var kdPoli = $(this).data('kd-poli');
            var namaDokter = $(this).data('nama');

            var konfir = confirm('Apakah antrian ini sudah selesai?');

            if (konfir) {

                $.ajax({
                    url: "{{ route('selesaiAntrianJiwa') }}",
                    type: 'POST',
                    data: {
                        _token: "{{ csrf_token() }}",
                        no_reg: noReg,
                        kd_poli: kdPoli,
                        nama: namaDokter
                    },
                    success: function(response) {

                        clickedButton.closest('tr').remove();
                    },
                    error: function(error) {
                        alert('Data gagal dikirim.');
                    }
                });
            }
        });
    });

    function speak(text) {
        responsiveVoice.speak(text, "Indonesian Male", {
            rate: 0.9,
            pitch: 0.8
        }); // Atur suara yang diinginkan
    }
</script>
{{-- jiwa end --}}

{{-- kulit start --}}
<script>
    $(document).ready(function() {
        $('#tabelPasienPoliKulit').DataTable({
            scrollY: "685px",
            scrollX: true,
            pageLength: 20,
            fixedColumns: {
                heightMatch: 'none'
            },
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url": "{{ route('dataAntrianKulit') }}",
                "dataType": "json",
                "type": "GET"
            },
            "columns": [{
                    "data": 'no_reg'
                },
                {
                    "data": 'nm_poli'
                },
                {
                    "data": 'nama'
                },
                {
                    "data": 'nm_pasien'
                },
                {
                    "data": null,
                    "render": function(data, type, row) {
                        return '<button class="btn btn-primary btn-sm panggil-btn" data-no-reg="' +
                            row.no_reg +
                            '" data-kd-poli="' + row.kd_poli + '" data-nama="' + row.nama +
                            '"  data-nm-pasien="' + row.nm_pasien + '">' +
                            'Panggil</button>' +
                            '<button class="btn btn-success btn-sm selesai-btn" data-no-reg="' +
                            row.no_reg +
                            '" data-kd-poli="' + row.kd_poli + '" data-nama="' + row.nama +
                            '">' +
                            'Selesai</button>';
                    }
                },

            ]
        });

        $('#tabelPasienPoliKulit').on('click', '.panggil-btn', function() {
            var noReg = $(this).data('no-reg');
            var kdPoli = $(this).data('kd-poli');
            var namaDokter = $(this).data('nama');
            var noRawat = $(this).data('nm-pasien');


            var message = "Nomor Antrian." + noReg + "Menuju kepoli Dermatologi dan Venereologi";


            $.ajax({
                url: "{{ route('panggilAntrianKulit') }}",
                type: 'POST',
                data: {
                    _token: "{{ csrf_token() }}",
                    no_reg: noReg,
                    kd_poli: kdPoli,
                    nama: namaDokter,
                    nm_pasien: noRawat
                },
                success: function(response) {


                    alert('Antrian berhasil dipanggil.')
                },
                error: function(error) {
                    alert('Antrian gagal dipanggil!');
                }
            });
        });

        $('#tabelPasienPoliKulit').on('click', '.selesai-btn', function() {
            var clickedButton = $(this);
            var noReg = $(this).data('no-reg');
            var kdPoli = $(this).data('kd-poli');
            var namaDokter = $(this).data('nama');

            var konfir = confirm('Apakah antrian ini sudah selesai?');

            if (konfir) {

                $.ajax({
                    url: "{{ route('selesaiAntrianKulit') }}",
                    type: 'POST',
                    data: {
                        _token: "{{ csrf_token() }}",
                        no_reg: noReg,
                        kd_poli: kdPoli,
                        nama: namaDokter
                    },
                    success: function(response) {

                        clickedButton.closest('tr').remove();
                    },
                    error: function(error) {
                        alert('Data gagal dikirim.');
                    }
                });
            }
        });
    });

    function speak(text) {
        responsiveVoice.speak(text, "Indonesian Male", {
            rate: 0.9,
            pitch: 0.8
        }); // Atur suara yang diinginkan
    }
</script>
{{-- kulit end --}}

{{-- mata start --}}
<script>
    $(document).ready(function() {
        $('#tabelPasienPoliMata').DataTable({
            scrollY: "685px",
            scrollX: true,
            pageLength: 20,
            fixedColumns: {
                heightMatch: 'none'
            },
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url": "{{ route('dataAntrianMata') }}",
                "dataType": "json",
                "type": "GET"
            },
            "columns": [{
                    "data": 'no_reg'
                },
                {
                    "data": 'nm_poli'
                },
                {
                    "data": 'nama'
                },
                {
                    "data": 'nm_pasien'
                },
                {
                    "data": null,
                    "render": function(data, type, row) {
                        return '<button class="btn btn-primary btn-sm panggil-btn" data-no-reg="' +
                            row.no_reg +
                            '" data-kd-poli="' + row.kd_poli + '" data-nama="' + row.nama +
                            '"  data-nm-pasien="' + row.nm_pasien + '">' +
                            'Panggil</button>' +
                            '<button class="btn btn-success btn-sm selesai-btn" data-no-reg="' +
                            row.no_reg +
                            '" data-kd-poli="' + row.kd_poli + '" data-nama="' + row.nama +
                            '">' +
                            'Selesai</button>';
                    }
                },

            ]
        });

        $('#tabelPasienPoliMata').on('click', '.panggil-btn', function() {
            var noReg = $(this).data('no-reg');
            var kdPoli = $(this).data('kd-poli');
            var namaDokter = $(this).data('nama');
            var noRawat = $(this).data('nm-pasien');


            var message = "Nomor Antrian." + noReg + "Menuju kepoli Mata";


            $.ajax({
                url: "{{ route('panggilAntrianMata') }}",
                type: 'POST',
                data: {
                    _token: "{{ csrf_token() }}",
                    no_reg: noReg,
                    kd_poli: kdPoli,
                    nama: namaDokter,
                    nm_pasien: noRawat
                },
                success: function(response) {


                    alert('Antrian berhasil dipanggil.')
                },
                error: function(error) {
                    alert('Antrian gagal dipanggil!');
                }
            });
        });

        $('#tabelPasienPoliMata').on('click', '.selesai-btn', function() {
            var clickedButton = $(this);
            var noReg = $(this).data('no-reg');
            var kdPoli = $(this).data('kd-poli');
            var namaDokter = $(this).data('nama');

            var konfir = confirm('Apakah antrian ini sudah selesai?');

            if (konfir) {

                $.ajax({
                    url: "{{ route('selesaiAntrianMata') }}",
                    type: 'POST',
                    data: {
                        _token: "{{ csrf_token() }}",
                        no_reg: noReg,
                        kd_poli: kdPoli,
                        nama: namaDokter
                    },
                    success: function(response) {

                        clickedButton.closest('tr').remove();
                    },
                    error: function(error) {
                        alert('Data gagal dikirim.');
                    }
                });
            }
        });
    });

    function speak(text) {
        responsiveVoice.speak(text, "Indonesian Male", {
            rate: 0.9,
            pitch: 0.8
        }); // Atur suara yang diinginkan
    }
</script>
{{-- mata end --}}

{{-- paru start --}}
<script>
    $(document).ready(function() {
        $('#tabelPasienPoliParu').DataTable({
            scrollY: "685px",
            scrollX: true,
            pageLength: 20,
            fixedColumns: {
                heightMatch: 'none'
            },
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url": "{{ route('dataAntrianParu') }}",
                "dataType": "json",
                "type": "GET"
            },
            "columns": [{
                    "data": 'no_reg'
                },
                {
                    "data": 'nm_poli'
                },
                {
                    "data": 'nama'
                },
                {
                    "data": 'nm_pasien'
                },
                {
                    "data": null,
                    "render": function(data, type, row) {
                        return '<button class="btn btn-primary btn-sm panggil-btn" data-no-reg="' +
                            row.no_reg +
                            '" data-kd-poli="' + row.kd_poli + '" data-nama="' + row.nama +
                            '"  data-nm-pasien="' + row.nm_pasien + '">' +
                            'Panggil</button>' +
                            '<button class="btn btn-success btn-sm selesai-btn" data-no-reg="' +
                            row.no_reg +
                            '" data-kd-poli="' + row.kd_poli + '" data-nama="' + row.nama +
                            '">' +
                            'Selesai</button>';
                    }
                },

            ]
        });

        $('#tabelPasienPoliParu').on('click', '.panggil-btn', function() {
            var noReg = $(this).data('no-reg');
            var kdPoli = $(this).data('kd-poli');
            var namaDokter = $(this).data('nama');
            var noRawat = $(this).data('nm-pasien');


            var message = "Nomor Antrian." + noReg + "Menuju kepoli Paru";


            $.ajax({
                url: "{{ route('panggilAntrianParu') }}",
                type: 'POST',
                data: {
                    _token: "{{ csrf_token() }}",
                    no_reg: noReg,
                    kd_poli: kdPoli,
                    nama: namaDokter,
                    nm_pasien: noRawat
                },
                success: function(response) {

                alert('Antrian berhasil dipanggil.')

                },
                error: function(error) {

                alert('Antrian gagal dipanggil!');

                }
            });
        });

        $('#tabelPasienPoliParu').on('click', '.selesai-btn', function() {
            var clickedButton = $(this);
            var noReg = $(this).data('no-reg');
            var kdPoli = $(this).data('kd-poli');
            var namaDokter = $(this).data('nama');

            var konfir = confirm('Apakah antrian ini sudah selesai?');

            if (konfir) {

                $.ajax({
                    url: "{{ route('selesaiAntrianParu') }}",
                    type: 'POST',
                    data: {
                        _token: "{{ csrf_token() }}",
                        no_reg: noReg,
                        kd_poli: kdPoli,
                        nama: namaDokter
                    },
                    success: function(response) {

                        clickedButton.closest('tr').remove();
                    },
                    error: function(error) {
                        alert('Data gagal dikirim.');
                    }
                });
            }
        });
    });

    function speak(text) {
        responsiveVoice.speak(text, "Indonesian Male", {
            rate: 0.9,
            pitch: 0.8
        }); // Atur suara yang diinginkan
    }
</script>
{{-- paru end --}}

{{-- rehabilitasiMedik start --}}
<script>
    $(document).ready(function() {
        $('#tabelPasienPoliRehabilitasiMedik').DataTable({
            scrollY: "685px",
            scrollX: true,
            pageLength: 20,
            fixedColumns: {
                heightMatch: 'none'
            },
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url": "{{ route('dataAntrianRehabilitasiMedik') }}",
                "dataType": "json",
                "type": "GET"
            },
            "columns": [{
                    "data": 'no_reg'
                },
                {
                    "data": 'nm_poli'
                },
                {
                    "data": 'nama'
                },
                {
                    "data": 'nm_pasien'
                },
                {
                    "data": null,
                    "render": function(data, type, row) {
                        return '<button class="btn btn-primary btn-sm panggil-btn" data-no-reg="' +
                            row.no_reg +
                            '" data-kd-poli="' + row.kd_poli + '" data-nama="' + row.nama +
                            '"  data-nm-pasien="' + row.nm_pasien + '">' +
                            'Panggil</button>' +
                            '<button class="btn btn-success btn-sm selesai-btn" data-no-reg="' +
                            row.no_reg +
                            '" data-kd-poli="' + row.kd_poli + '" data-nama="' + row.nama +
                            '">' +
                            'Selesai</button>';
                    }
                },

            ]
        });

        $('#tabelPasienPoliRehabilitasiMedik').on('click', '.panggil-btn', function() {
            var noReg = $(this).data('no-reg');
            var kdPoli = $(this).data('kd-poli');
            var namaDokter = $(this).data('nama');
            var noRawat = $(this).data('nm-pasien');


            var message = "Nomor Antrian." + noReg + "Menuju kepoli Rehabilitasi Medik";


            $.ajax({
                url: "{{ route('panggilAntrianRehabilitasiMedik') }}",
                type: 'POST',
                data: {
                    _token: "{{ csrf_token() }}",
                    no_reg: noReg,
                    kd_poli: kdPoli,
                    nama: namaDokter,
                    nm_pasien: noRawat
                },
                success: function(response) {

                alert('Antrian berhasil dipanggil.')

                },
                error: function(error) {

                alert('Antrian gagal dipanggil!');
                
                }
            });
        });

        $('#tabelPasienPoliRehabilitasiMedik').on('click', '.selesai-btn', function() {
            var clickedButton = $(this);
            var noReg = $(this).data('no-reg');
            var kdPoli = $(this).data('kd-poli');
            var namaDokter = $(this).data('nama');

            var konfir = confirm('Apakah antrian ini sudah selesai?');

            if (konfir) {

                $.ajax({
                    url: "{{ route('selesaiAntrianRehabilitasiMedik') }}",
                    type: 'POST',
                    data: {
                        _token: "{{ csrf_token() }}",
                        no_reg: noReg,
                        kd_poli: kdPoli,
                        nama: namaDokter
                    },
                    success: function(response) {

                        clickedButton.closest('tr').remove();
                    },
                    error: function(error) {
                        alert('Data gagal dikirim.');
                    }
                });
            }
        });
    });

    function speak(text) {
        responsiveVoice.speak(text, "Indonesian Male", {
            rate: 0.9,
            pitch: 0.8
        }); // Atur suara yang diinginkan
    }
</script>
{{-- rehabilitasiMedik end --}}

{{-- syaraf start --}}
<script>
    $(document).ready(function() {
        $('#tabelPasienPoliSyaraf').DataTable({
            scrollY: "685px",
            scrollX: true,
            pageLength: 20,
            fixedColumns: {
                heightMatch: 'none'
            },
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url": "{{ route('dataAntrianSyaraf') }}",
                "dataType": "json",
                "type": "GET"
            },
            "columns": [{
                    "data": 'no_reg'
                },
                {
                    "data": 'nm_poli'
                },
                {
                    "data": 'nama'
                },
                {
                    "data": 'nm_pasien'
                },
                {
                    "data": null,
                    "render": function(data, type, row) {
                        return '<button class="btn btn-primary btn-sm panggil-btn" data-no-reg="' +
                            row.no_reg +
                            '" data-kd-poli="' + row.kd_poli + '" data-nama="' + row.nama +
                            '"  data-nm-pasien="' + row.nm_pasien + '">' +
                            'Panggil</button>' +
                            '<button class="btn btn-success btn-sm selesai-btn" data-no-reg="' +
                            row.no_reg +
                            '" data-kd-poli="' + row.kd_poli + '" data-nama="' + row.nama +
                            '">' +
                            'Selesai</button>';
                    }
                },

            ]
        });

        $('#tabelPasienPoliSyaraf').on('click', '.panggil-btn', function() {
            var noReg = $(this).data('no-reg');
            var kdPoli = $(this).data('kd-poli');
            var namaDokter = $(this).data('nama');
            var noRawat = $(this).data('nm-pasien');


            var message = "Nomor Antrian." + noReg + "Menuju kepoli Syaraf";


            $.ajax({
                url: "{{ route('panggilAntrianSyaraf') }}",
                type: 'POST',
                data: {
                    _token: "{{ csrf_token() }}",
                    no_reg: noReg,
                    kd_poli: kdPoli,
                    nama: namaDokter,
                    nm_pasien: noRawat
                },
                success: function(response) {

                alert('Antrian berhasil dipanggil.')

                },
                error: function(error) {

                alert('Antrian gagal dipanggil!');
                
                }
            });
        });

        $('#tabelPasienPoliSyaraf').on('click', '.selesai-btn', function() {
            var clickedButton = $(this);
            var noReg = $(this).data('no-reg');
            var kdPoli = $(this).data('kd-poli');
            var namaDokter = $(this).data('nama');

            var konfir = confirm('Apakah antrian ini sudah selesai?');

            if (konfir) {

                $.ajax({
                    url: "{{ route('selesaiAntrianSyaraf') }}",
                    type: 'POST',
                    data: {
                        _token: "{{ csrf_token() }}",
                        no_reg: noReg,
                        kd_poli: kdPoli,
                        nama: namaDokter
                    },
                    success: function(response) {

                        clickedButton.closest('tr').remove();
                    },
                    error: function(error) {
                        alert('Data gagal dikirim.');
                    }
                });
            }
        });
    });

    function speak(text) {
        responsiveVoice.speak(text, "Indonesian Male", {
            rate: 0.9,
            pitch: 0.8
        }); // Atur suara yang diinginkan
    }
</script>
{{-- syaraf end --}}

{{-- tht start --}}
<script>
    $(document).ready(function() {
        $('#tabelPasienPoliTHT').DataTable({
            scrollY: "685px",
            scrollX: true,
            pageLength: 20,
            fixedColumns: {
                heightMatch: 'none'
            },
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url": "{{ route('dataAntrianTHT') }}",
                "dataType": "json",
                "type": "GET"
            },
            "columns": [{
                    "data": 'no_reg'
                },
                {
                    "data": 'nm_poli'
                },
                {
                    "data": 'nama'
                },
                {
                    "data": 'nm_pasien'
                },
                {
                    "data": null,
                    "render": function(data, type, row) {
                        return '<button class="btn btn-primary btn-sm panggil-btn" data-no-reg="' +
                            row.no_reg +
                            '" data-kd-poli="' + row.kd_poli + '" data-nama="' + row.nama +
                            '"  data-nm-pasien="' + row.nm_pasien + '">' +
                            'Panggil</button>' +
                            '<button class="btn btn-success btn-sm selesai-btn" data-no-reg="' +
                            row.no_reg +
                            '" data-kd-poli="' + row.kd_poli + '" data-nama="' + row.nama +
                            '">' +
                            'Selesai</button>';
                    }
                },

            ]
        });

        $('#tabelPasienPoliTHT').on('click', '.panggil-btn', function() {
            var noReg = $(this).data('no-reg');
            var kdPoli = $(this).data('kd-poli');
            var namaDokter = $(this).data('nama');
            var noRawat = $(this).data('nm-pasien');


            var message = "Nomor Antrian." + noReg + "Menuju kepoli THT";


            $.ajax({
                url: "{{ route('panggilAntrianTHT') }}",
                type: 'POST',
                data: {
                    _token: "{{ csrf_token() }}",
                    no_reg: noReg,
                    kd_poli: kdPoli,
                    nama: namaDokter,
                    nm_pasien: noRawat
                },
                success: function(response) {

                alert('Antrian berhasil dipanggil.')

                },
                error: function(error) {

                alert('Antrian gagal dipanggil!');

                }
            });
        });

        $('#tabelPasienPoliTHT').on('click', '.selesai-btn', function() {
            var clickedButton = $(this);
            var noReg = $(this).data('no-reg');
            var kdPoli = $(this).data('kd-poli');
            var namaDokter = $(this).data('nama');

            var konfir = confirm('Apakah antrian ini sudah selesai?');

            if (konfir) {

                $.ajax({
                    url: "{{ route('selesaiAntrianTHT') }}",
                    type: 'POST',
                    data: {
                        _token: "{{ csrf_token() }}",
                        no_reg: noReg,
                        kd_poli: kdPoli,
                        nama: namaDokter
                    },
                    success: function(response) {

                        clickedButton.closest('tr').remove();
                    },
                    error: function(error) {
                        alert('Data gagal dikirim.');
                    }
                });
            }
        });
    });

    function speak(text) {
        responsiveVoice.speak(text, "Indonesian Male", {
            rate: 0.9,
            pitch: 0.8
        }); // Atur suara yang diinginkan
    }
</script>
{{-- tht end --}}
