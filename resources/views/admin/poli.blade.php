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
                                <th
                                    class="text-xxs font-weight-bolder opacity-7">
                                    Nama Poli
                                </th>
                                <th
                                    class="text-xxs font-weight-bolder opacity-7">
                                    Dokter yang tersedia
                                </th>
                                <th
                                    class="text-xxs font-weight-bolder opacity-7">
                                    Kuota/hari
                                </th>
                                <th class="text-xxs font-weight-bolder opacity-7">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($poli as $p)
                                    <tr class="align-middle">
                                        <td class="align-middle text-center text-sm">{{ $p->nama_poli }}</td>
                                        <td class="align-middle text-center text-sm">{{ $p->kuota }}</td>
                                        <td class="align-middle text-center text-sm">
                                            <a class="text-secondary font-weight-bold text-xs" data-toggle="tooltip"
                                                data-original-title="Edit user" href="/admin/data/keluarga"
                                                role="button">Detail</a>
                                        </td>
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