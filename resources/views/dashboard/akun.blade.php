@extends('layouts.dashboard')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>{{ $title }}</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="col-10 justify-content-center align-items-center container">
                            <form action="">
                                <div class="row mb-3 mt-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Username</label>
                                    <div class="col-sm-8">
                                        <input type="email" class="form-control" id="inputEmail3" disabled
                                            value="{{ $user->username }}">
                                    </div>
                                </div>
                                <div class="row mb-3 mt-3">
                                    <button
                                        class="mt-3 btn btn-block btn-icon btn-3 btn-warning justify-content-center align-items-center"
                                        data-bs-toggle="modal" data-bs-target="#modal-form" type="button">
                                        <span class="btn-inner--icon"><i class="bi bi-person-plus-fill"></i></span>
                                        <span class="btn-inner--text ms-2">Ganti Password</span>
                                    </button>
                                    <div class="modal fade" id="modal-form" tabindex="-1" role="dialog"
                                        aria-labelledby="modal-form" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                                            <div class="modal-content">
                                                <div class="modal-body p-0">
                                                    <div class="card card-plain">
                                                        <div class="card-header pb-0 text-left">
                                                            <h3 class="font-weight-bolder text-info text-gradient">Ganti
                                                                Password</h3>
                                                        </div>
                                                        <form role="form text-left" method="POST"
                                                            action="/dashboard/akun/ganti">
                                                            @csrf

                                                            @foreach ($errors->all() as $error)
                                                                <p class="text-danger">{{ $error }}</p>
                                                            @endforeach

                                                            <div class="form-group row">
                                                                <label for="password"
                                                                    class="col-md-4 col-form-label text-md-right">Current
                                                                    Password</label>

                                                                <div class="col-md-6">
                                                                    <input id="password" type="password"
                                                                        class="form-control" name="current_password"
                                                                        autocomplete="current-password">
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label for="password"
                                                                    class="col-md-4 col-form-label text-md-right">New
                                                                    Password</label>

                                                                <div class="col-md-6">
                                                                    <input id="new_password" type="password"
                                                                        class="form-control" name="new_password"
                                                                        autocomplete="current-password">
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label for="password"
                                                                    class="col-md-4 col-form-label text-md-right">New
                                                                    Confirm Password</label>

                                                                <div class="col-md-6">
                                                                    <input id="new_confirm_password" type="password"
                                                                        class="form-control" name="new_confirm_password"
                                                                        autocomplete="current-password">
                                                                </div>
                                                            </div>

                                                            <div class="form-group row mb-0">
                                                                <div class="col-md-8 offset-md-4">
                                                                    <button type="submit" class="btn btn-primary">
                                                                        Update Password
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
