<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>tiket {{ $antrian->Anggota->nama }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- {{-- <!--     Fonts and icons     --> --}}
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style>
        .ticket-box {
            max-width: 600px;
            min-height: 600px;
            border: 1px solid #333
        }
    </style>
</head>
<body>
    <div class="container ticket-box d-flex justify-content-center">
        <div class="text-center">
            <img src="{{ URL::asset('/img/puskesmas.png') }}" width="100" height="100" alt="">
            <h3>Terima Kasih</h3>
        </div>
        <div class="text-center">
            <p> Berikut Data Antrian Anda : </p>
        </div>

        <div>
            <ul class="list-group">
                <li class="list-group-item border-0 d-flex justify-content-left ps-0 mb-2 border-radius-lg">
                    <div class="d-flex flex-column">
                        <span class="mb-2 text-xl">Nama: <span
                                class="text-dark font-weight-bold ms-sm-2">{{ $antrian->Anggota->nama }}</span></span>
                    </div>
                </li>
                <li class="list-group-item border-0 d-flex justify-content-left ps-0 mb-2 border-radius-lg">
                    <div class="d-flex flex-column">
                        <span class="mb-2 text-xl">NIK: <span
                                class="text-dark font-weight-bold ms-sm-2">{{ $antrian->Anggota->NIK }}</span></span>
                    </div>
                </li>
                <li class="list-group-item border-0 d-flex justify-content-left ps-0 mb-2 border-radius-lg">
                    <div class="d-flex flex-column">
                        <span class="mb-2 text-xl">Nomor Antrian: <span
                                class="text-dark font-weight-bold ms-sm-2">{{ $antrian->nomor_antrian }}</span></span>
                    </div>
                </li>
                <li class="list-group-item border-0 d-flex justify-content-left ps-0 mb-2 border-radius-lg">
                    <div class="d-flex flex-column">
                        <span class="mb-2 text-xl">Estimasi pelayanan : <span
                                class="text-dark font-weight-bold ms-sm-2">07.00</span></span>
                    </div>
                </li>
                <li class="list-group-item border-0 d-flex justify-content-left ps-0 mb-2 border-radius-lg">
                    <div class="d-flex flex-column">
                        <span class="mb-2 text-xl">Poli: <span
                                class="text-dark font-weight-bold ms-sm-2">{{ $antrian->Poli->nama_poli }}</span></span>
                    </div>
                </li>
            </ul>
        </div>

        <div class="text-center">
            <p>Catatan : Silahkan print/screenshot halaman ini sebagai bukti pendaftaran</p>
        </div>

        <div class="text-center">
            <a href="/dashboard/home">Kembali</a>
        </div>
    </div>
</body>
</html>