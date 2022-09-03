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
                                        Nomor KK
                                    </th>
                                    <th
                                        class="text-xxs font-weight-bolder opacity-7">
                                        Nama Kepala KK
                                    </th>
                                    <th
                                        class="text-xxs font-weight-bolder opacity-7">
                                        Alamat
                                    </th>
                                    <th class="text-xxs font-weight-bolder opacity-7">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $a)
                                        <tr class="align-middle">
                                            <td class="align-middle text-center text-sm">{{ $a->nomor_kk }}</td>
                                            <td class="align-middle text-center text-sm">{{ $a->nama_kepala_kk }}</td>
                                            <td class="align-middle text-center text-sm">{{ $a->alamat }}</td>
                                            {{-- <td class="align-middle text-center text-sm">{{ $a->email }}</td> --}}
                                            <td class="align-middle text-center text-sm">
                                                <a class="text-secondary font-weight-bold text-xs" data-toggle="tooltip"
                                                    data-original-title="Edit user" href="/{{ Auth::user()->role }}/data/keluarga/{{ $a->id_keluarga }}"
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
