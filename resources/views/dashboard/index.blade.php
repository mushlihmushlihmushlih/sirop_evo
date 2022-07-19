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
                Nomor KK :
                <br>
              </div>
              <div class="card-body pt-2">
                Nama Kepala KK :
              </div>
              <div class="card-body pt-2">
                Alamat :
              </div>
          </div>
      </div>
      <div class="col-4">
        <div class="card mb-4">
            <div class="card-header pb-0">
                <h6></h6>
            </div>
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
                            <th
                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Nama
                            </th>
                            <th
                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                NIK
                            </th>
                            <th
                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Tanggal Lahir
                            </th>
                            <th
                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Status Keanggotaan
                            </th>
                            <th
                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Nomor HP
                            </th>
                            <th
                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Kartu Berobat
                            </th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @foreach ($users as $a)
                                <tr class="align-middle">
                                    <td class="align-middle text-center text-sm">{{ $a->username }}</td>
                                    <td class="align-middle text-center text-sm">{{ $a->email }}</td>
                                    <td class="align-middle text-center text-sm">
                                        <a class="text-secondary font-weight-bold text-xs" data-toggle="tooltip"
                                            data-original-title="Edit user" href="/admin/data/keluarga"
                                            role="button">Detail</a>
                                    </td>
                                </tr>
                            @endforeach --}}
                        </tbody>
                    </table>
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