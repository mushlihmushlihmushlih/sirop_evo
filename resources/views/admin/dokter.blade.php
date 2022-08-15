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
                                        Nama
                                    </th>
                                    <th class="text-xxs font-weight-bolder opacity-7">
                                        Poli
                                    </th>
                                    <th class="text-xxs font-weight-bolder opacity-7">
                                        Alamat
                                    </th>
                                    <th class="text-xxs font-weight-bolder opacity-7">
                                        Email
                                    </th>
                                    <th class="text-xxs font-weight-bolder opacity-7">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($dokter as $d)
                                        <tr class="align-middle">
                                            <td class="align-middle text-center text-sm">{{ $d->nama_dokter }}</td>
                                            <td class="align-middle text-center text-sm">{{ $d->Poli->nama_poli }}</td>
                                            <td class="align-middle text-center text-sm">{{ $d->alamat_dokter }}</td>
                                            <td class="align-middle text-center text-sm">{{ $d->email_dokter }}</td>
                                            <td class="align-middle text-center text-sm">
                                                <a class="text-secondary font-weight-bold text-xs" data-bs-toggle="modal"
                                                    data-bs-target="#modal-default"data-toggle="tooltip"
                                                    data-original-title="Edit user" role="button">Edit</a>
                                                <div class="modal fade" id="modal-default" tabindex="-1" role="dialog"
                                                    aria-labelledby="modal-default" aria-hidden="true">
                                                    <div class="modal-dialog modal- modal-dialog-centered modal-"
                                                        role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h6 class="modal-title" id="modal-title-default">Edit data
                                                                    poli</h6>
                                                                <button type="button" class="btn-close text-dark"
                                                                    data-bs-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form role="form text-left" method="POST"
                                                                    action="/admin/dokter/update">
                                                                    @csrf
                                                                    <input type="hidden" name="id_dokter" id="id_dokter"
                                                                        value="{{ $d->id_dokter }}">
                                                                    <label class="">Nama Dokter</label>
                                                                    <div class="input-group mb-3">
                                                                        <input type="text" class="form-control"
                                                                            value="{{ $d->nama_dokter }}"
                                                                            name="nama_dokter">
                                                                    </div>
                                                                    <label class="">Poli</label>
                                                                    <div class="input-group mb-3">
                                                                        <select class="form-control form-control"
                                                                            placeholder="" name="id_poli">
                                                                            <option value="">-- pilih --</option>
                                                                            @foreach ($data as $a)
                                                                                <option value="{{ $a->id_poli }}">
                                                                                    {{ $a->nama_poli }}
                                                                                </option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                    <label>Alamat Dokter</label>
                                                                    <div class="input-group mb-3">
                                                                        <input type="text" class="form-control" placeholder="alamat_dokter" name="alamat_dokter"
                                                                            value="{{ $d->alamat_dokter }}">
                                                                        
                                                                    </div>
                                                                    <label class="">Email Dokter</label>
                                                                    <div class="input-group mb-3">
                                                                        <input type="text" class="form-control"
                                                                            value="{{ $d->email_dokter }}"
                                                                            name="email_dokter">
                                                                    </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="submit" class="btn bg-gradient-primary">Save
                                                                    changes</button>
                                                                <button type="button" class="btn btn-link  ml-auto"
                                                                    data-bs-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <a class="ms-3 text-secondary font-weight-bold text-xs"
                                                    data-toggle="tooltip" data-original-title="Edit user"
                                                    href="/admin/dokter/delete/{{ $d->id_dokter }}" role="button">Hapus</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="card-body d-flex flex-column">
                            <button class="btn btn-block btn-icon btn-3 btn-success align-self-end" data-bs-toggle="modal"
                                data-bs-target="#modal-form" type="button">
                                <span class="btn-inner--icon"><i class="bi bi-plus-lg"></i></span>
                                <span class="btn-inner--text ms-2">Tambah</span>
                            </button>
                            <div class="modal fade" id="modal-form" tabindex="-1" role="dialog"
                                aria-labelledby="modal-form" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body p-0">
                                            <div class="card card-plain">
                                                <div class="card-header pb-0 text-left">
                                                    <h3 class="font-weight-bolder text-info text-gradient">Tambah Dokter
                                                    </h3>
                                                </div>
                                                <div class="card-body">
                                                    <form role="form text-left" method="POST" action="/admin/dokter">
                                                        @csrf
                                                        <label>Nama Dokter</label>
                                                        <div class="input-group mb-3">
                                                            <input type="text" class="form-control"
                                                                placeholder="Nama Dokter" name="nama_dokter">
                                                        </div>
                                                        <label>Poli</label>
                                                        <div class="input-group mb-3">
                                                            <select class="form-control form-control" placeholder=""
                                                                name="id_poli">
                                                                <option value="">-- pilih --</option>
                                                                @foreach ($data as $d)
                                                                    <option value="{{ $d->id_poli }}">
                                                                        {{ $d->nama_poli }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <label>Alamat Dokter</label>
                                                        <div class="input-group mb-3">
                                                            <textarea type="text" class="form-control" placeholder="Alamat" name="alamat_dokter">
                                                        </textarea>
                                                        </div>
                                                        <label>Email Dokter</label>
                                                        <div class="input-group mb-3">
                                                            <input type="email" class="form-control"
                                                                placeholder="Email" name="email_dokter">
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Tambah</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
