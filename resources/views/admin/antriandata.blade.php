@extends('layouts.admin')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>{{ $title }}</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <th class="text-xxs font-weight-bolder opacity-7">
                                        Id
                                    </th>
                                    <th class="text-xxs font-weight-bolder opacity-7">
                                        Tanggal Berobat
                                    </th>
                                    <th class="text-xxs font-weight-bolder opacity-7">
                                        Nomor Antrian
                                    </th>
                                    <th class="text-xxs font-weight-bolder opacity-7">
                                        Nama Anggota Keluarga
                                    </th>
                                    <th class="text-xxs font-weight-bolder opacity-7">
                                        Poli
                                    </th>
                                    <th class="text-xxs font-weight-bolder opacity-7">
                                        Keluhan
                                    </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($antrian as $a)
                                        <tr class="align-middle">
                                            <td class="align-middle text-center text-sm">{{ $a->id_antrian }}</td>
                                            <td class="align-middle text-center text-sm">{{ $a->tanggal_antrian }}</td>
                                            <td class="align-middle text-center text-sm">{{ $a->nomor_antrian }}</td>
                                            <td class="align-middle text-center text-sm">{{ $a->Anggota->nama }}</td>
                                            <td class="align-middle text-center text-sm">{{ $a->Poli->nama_poli }}</td>
                                            <td class="align-middle text-center text-sm">{{ $a->keluhan }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
