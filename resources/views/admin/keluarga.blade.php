@extends('layouts.admin')

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
                              <span class="mb-2 text-xl">Nomor KK: <span
                                      class="text-dark font-weight-bold ms-sm-2">{{ $keluarga->id_user }}</span></span>
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
                                  <th class="text-center  text-xs font-weight-bolder opacity-7">
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
                                          <td>085643095834</td>
                                          <td class="align-middle text-center text-sm">
                                              <a class="text-secondary font-weight-bold text-xs" data-toggle="tooltip"
                                                  data-original-title="Edit user" href="/admin/data/keluarga"
                                                  role="button">Download</a>
                                          </td>
                                          <td class="align-middle text-center text-sm">
                                              <a class="text-secondary font-weight-bold text-xs" data-toggle="tooltip"
                                                  data-original-title="Edit user" href="/admin/data/keluarga"
                                                  role="button">Edit</a>
                                              <a class="text-secondary font-weight-bold text-xs" data-toggle="tooltip"
                                                  data-original-title="Edit user" href="/admin/data/keluarga"
                                                  role="button">Hapus</a>
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
</div>
@endsection