@extends('layouts.dashboard')


@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-8">
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
                                        <th class="text-center text-xs font-weight-bolder opacity-7">
                                            Nama
                                        </th>
                                        <th class="text-center  text-xs font-weight-bolder opacity-7">
                                            NIK
                                        </th>
                                        <th class="text-center  text-xs font-weight-bolder opacity-7">
                                            Tanggal Lahir
                                        </th>
                                        <th class="text-center  text-xs font-weight-bolder opacity-7">
                                            Status Keanggotaan
                                        </th>
                                        <th class="text-center  text-xs font-weight-bolder opacity-7">
                                            Nomor HP
                                        </th>
                                        <th class="text-center  text-xs font-weight-bolder opacity-7">
                                            Kartu Berobat
                                        </th>
                                        <th class="text-center  text-xs font-weight-bolder opacity-7">Aksi</th>
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
                                                <td class="align-middle text-center text-sm">{{ $a->nomor_hp }}</td>
                                                <td class="align-middle text-center text-sm">
                                                    <a class="text-secondary font-weight-bold text-xs" data-toggle="tooltip"
                                                        data-original-title="Edit user" href="/admin/data/keluarga"
                                                        role="button">Download</a>
                                                </td>
                                                <td class="align-middle text-center text-sm">
                                                    <a class="text-secondary font-weight-bold text-xs"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#modal-default"data-toggle="tooltip"
                                                        data-original-title="Edit user" role="button">Edit</a>
                                                    <div class="modal fade" id="modal-default" tabindex="-1" role="dialog"
                                                        aria-labelledby="modal-default" aria-hidden="true">
                                                        <div class="modal-dialog modal- modal-dialog-centered modal-"
                                                            role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h6 class="modal-title" id="modal-title-default">Type
                                                                        your modal title</h6>
                                                                    <button type="button" class="btn-close text-dark"
                                                                        data-bs-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">×</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form role="form text-left" method="POST"
                                                                        action="/dashboard/home/update">
                                                                        @csrf
                                                                        <input type="hidden" name="id_anggota"
                                                                            id="id_anggota" value="{{ $a->id_anggota }}">
                                                                        <label class="">Nama</label>
                                                                        <div class="input-group mb-3">
                                                                            <input type="text" class="form-control"
                                                                                value="{{ $a->nama }}" name="nama">
                                                                        </div>
                                                                        <label>NIK</label>
                                                                        <div class="input-group mb-3">
                                                                            <input type="text" class="form-control"
                                                                                placeholder="NIK" name="NIK"
                                                                                value="{{ $a->NIK }}">
                                                                        </div>
                                                                        <label>Tanggal Lahir</label>
                                                                        <div class="input-group mb-3">
                                                                            <input type="date" class="form-control"
                                                                                placeholder="Tanggal Lahir"
                                                                                name="tanggal_lahir"
                                                                                value="{{ $a->tanggal_lahir }}">
                                                                        </div>
                                                                        <label>Status Keanggotaan</label>
                                                                        <div class="input-group mb-3">
                                                                            <select class="form-control form-control"
                                                                                placeholder="Status Keanggotaan"
                                                                                name="status_keanggotaan">
                                                                                <option value="BPJS">BPJS</option>
                                                                                <option value="umum">Umum</option>
                                                                            </select>
                                                                        </div>
                                                                        <label>Nomor Hp</label>
                                                                        <div class="input-group mb-3">
                                                                            <input type="text" class="form-control"
                                                                                placeholder="Nomor Hp" name="nomor_hp"
                                                                                value="{{ $a->nomor_hp }}">
                                                                        </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="submit"
                                                                        class="btn bg-gradient-primary">Save
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
                                                        href="/dashboard/hapus/{{ $a->id_anggota }}"
                                                        role="button">Hapus</a>
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
                            <div class="modal fade" id="modal-form" tabindex="-1" role="dialog"
                                aria-labelledby="modal-form" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body p-0">
                                            <div class="card card-plain">
                                                <div class="card-header pb-0 text-left">
                                                    <h3 class="font-weight-bolder text-info text-gradient">Tambah Anggota
                                                        Keluarga</h3>
                                                </div>
                                                <div class="card-body">
                                                    <form role="form text-left" method="POST"
                                                        action="/dashboard/home/anggota">
                                                        @csrf
                                                        <label>Nama</label>
                                                        <div class="input-group mb-3">
                                                            <input type="text" class="form-control" placeholder="Nama"
                                                                name="nama">
                                                        </div>
                                                        <label>NIK</label>
                                                        <div class="input-group mb-3">
                                                            <input type="text" class="form-control" placeholder="NIK"
                                                                name="NIK">
                                                        </div>
                                                        <label>Tanggal Lahir</label>
                                                        <div class="input-group mb-3">
                                                            <input type="date" class="form-control"
                                                                placeholder="Tanggal Lahir" name="tanggal_lahir">
                                                        </div>
                                                        <label>Status Keanggotaan</label>
                                                        <div class="input-group mb-3">
                                                            <select class="form-control form-control"
                                                                placeholder="Status Keanggotaan"
                                                                name="status_keanggotaan">
                                                                <option value="BPJS">BPJS</option>
                                                                <option value="umum">Umum</option>
                                                            </select>
                                                        </div>
                                                        <label>Nomor Hp</label>
                                                        <div class="input-group mb-3">
                                                            <input type="text" class="form-control"
                                                                placeholder="Nomor Hp" name="nomor_hp">
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

    {{-- modal form --}}
    <div class="modal fade" id="modal-berobat" tabindex="-1" role="dialog" aria-labelledby="modal-form"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="card card-plain">
                        <div class="card-header pb-0 text-left">
                            <h3 class="font-weight-bolder text-info text-gradient">Daftar Berobat</h3>
                        </div>
                        <div class="card-body">
                            <form role="form text-left" method="POST" action="/dashboard/home/daftar">
                                @csrf
                                <label>Pilih Anggota Keluarga</label>
                                <div class="input-group mb-3">
                                    <select name="id_anggota" id="id_anggota" class="form-control">
                                        <option value=""> -- Pilih Satu --</option>
                                        @foreach ($anggota as $a)
                                            <option value="{{ $a->id_anggota }}">{{ $a->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <label>Pilih Tanggal Berobat</label>
                                <div class="input-group mb-3">
                                    <input type="date" class="form-control" placeholder="Pilih Tanggal"
                                        name="tanggal_antrian" id="tanggal_antrian">
                                </div>
                                <label>Pilih Nomor Antrian</label>
                                <div class="input-group mb-3">
                                    <select class="form-control form-control" name="nomor_antrian" id="nomor_antrian">
                                        <option value="">-- Pilih Satu --</option>
                                        <?php
                                            for ($i=1; $i<=20; $i++)
                                        {
                                            ?>
                                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <label>Pilih Poli</label>
                                <div class="input-group mb-3">
                                    <select class="form-control form-control" placeholder="Status Keanggotaan"
                                        name="id_poli" id="id_poli">
                                        <option value="">-- Pilih Satu --</option>
                                        @foreach ($poli as $p)
                                            <option value="{{ $p->id_poli }}">{{ $p->nama_poli }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <label>Keluhan</label>
                                <div class="input-group mb-3">
                                    <textarea type="text" class="form-control" name="keluhan" id="keluhan">
                                    </textarea>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Tambah</button>
                                </div>
                            </form>
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
