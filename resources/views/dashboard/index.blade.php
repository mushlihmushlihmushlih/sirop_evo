@extends('layouts.dashboard')


@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Informasi Keluarga</h6>
                    </div>
                    <div class="card-body pt-2">
                        <ul class="list-group">
                            <li class="list-group-item border-0 d-flex justify-content-left ps-0 mb-2 border-radius-lg">
                                <div class="d-flex flex-column">
                                    <span class="mb-2 text-xl">Nomor KK: <span
                                            class="text-dark font-weight-bold ms-sm-2">{{ $keluarga->nomor_kk }}</span></span>
                                </div>
                            </li>
                            <li class="list-group-item border-0 d-flex justify-content-left ps-0 mb-2 border-radius-lg">
                                <div class="d-flex flex-column">
                                    <span class="mb-2 text-xl">Nama Kepala KK: <span
                                            class="text-dark font-weight-bold ms-sm-2">{{ $keluarga->nama_kepala_kk }}</span></span>
                                </div>
                            </li>
                            <li class="list-group-item border-0 d-flex justify-content-left ps-0 mb-2 border-radius-lg">
                                <div class="d-flex flex-column">
                                    <span class="mb-2 text-xl">Alamat: <span
                                            class="text-dark font-weight-bold ms-sm-2">{{ $keluarga->alamat }}</span></span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6>Anggota Keluarga</h6>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <th class="text-center  text-xxs font-weight-bolder opacity-7">
                                            Nama
                                        </th>
                                        <th class="text-center  text-xxs font-weight-bolder opacity-7">
                                            NIK
                                        </th>
                                        <th class="text-center  text-xxs font-weight-bolder opacity-7">
                                            Tanggal Lahir
                                        </th>
                                        <th class="text-center  text-xxs font-weight-bolder opacity-7">
                                            Status Keanggotaan
                                        </th>
                                        <th class="text-center  text-xxs font-weight-bolder opacity-7">
                                            Nomor HP
                                        </th>
                                        <th class="text-center  text-xxs font-weight-bolder opacity-7">
                                            Kartu Berobat
                                        </th>
                                        <th class="text-center  text-xxs font-weight-bolder opacity-7">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($anggota as $a)
                                            <tr class="align-middle">
                                                <td class="align-middle text-center text-sm">{{ $a->nama }}</td>
                                                <td class="align-middle text-center text-sm">{{ $a->NIK }}</td>
                                                <td class="align-middle text-center text-sm">{{ $a->tanggal_lahir }}</td>
                                                <td class="align-middle text-center text-sm">{{ $a->status_keanggotaan }}
                                                </td>
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
                        <div class="card-body d-flex flex-column">
                            <button class="btn btn-block btn-icon btn-3 btn-success align-self-end" data-bs-toggle="modal"
                                data-bs-target="#modal-form" type="button">
                                <span class="btn-inner--icon"><i class="bi bi-person-plus-fill"></i></span>
                                <span class="btn-inner--text ms-2">Tambah</span>
                            </button>

                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-backdrop="static" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Launch demo modal
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            ...
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
                            Launch static backdrop modal
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog"
                            aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        ...
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Understood</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">{{ $title }}</h1>  
  </div> --}}
@endsection
