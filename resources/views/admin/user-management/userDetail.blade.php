@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mt-4">
            <div class="col-8">
                {{-- card user detail --}}
                <div class="card p-4">
                    <div class="row g-0">
                      <div class="col align-items-center">
                        <img src="https://via.placeholder.com/150x150" class="img-fluid" alt="...">
                      </div>
                      <div class="col-md-9">
                        <div class="card-body p-0">
                            <div class="row mb-3 ms-0">
                                <div class="col lh-1">
                                    <p>Nama:</p>
                                    <b>{{ $user -> name }}</b>
                                </div>
                                <div class="col lh-1">
                                    <p>Email:</p>
                                    <b>{{ $user -> email }}</b>
                                </div>
                                

                            </div>
                            <div class="row mb-3 ms-0">
                                <div class="col lh-1">
                                    <p>Role:</p>
                                    <b>{{ $user -> type }}</b>
                                    <div class="row mt-3 lh-1">
                                        <p>Status:</p>
                                        <b class="{{ $user -> status == "active" ? 'text-success' : 'text-danger' }}">{{ $user -> status }}</b>
                                    </div>
                                </div>
                                <div class="col lh-1">
                                    <label for="newpassword" class="form-label">Ganti Password:</label>
                                    <input type="password" id="newpassword" class="form-control mb-2" aria-labelledby="passwordHelpBlock" placeholder="Masukkan kata sandi baru">
                                    <input type="password" id="confirmnewpassword" class="form-control mb-2" aria-labelledby="passwordHelpBlock" placeholder="Konfirmasi kata sandi baru">
                                    <button class="btn btn-success">Ganti Password</button>
                                </div>
                            </div>
                        </div>
                      </div>
                    </div>
                </div>
                {{-- end card user detail --}}
            </div>
            <div class="col">
                <p class="fs-4">Menu Admin</p>
                <hr>
                <div class="row">
                    <div class="col text-center">
                        <button class="btn btn-success p-3">
                            <div class="row">
                                <i class="bi bi-key-fill" style="font-size: 2rem;"></i>
                            </div>
                            <div class="row">
                                Jadikan Admin
                            </div>
                        </button>
                    </div>
                    <div class="col text-center">
                        <button class="btn btn-danger p-3">
                            <div class="row">
                                <i class="bi bi-person-fill-slash" style="font-size: 2rem;"></i>
                            </div>
                            <div class="row">
                                Non-Aktifkan
                            </div>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection