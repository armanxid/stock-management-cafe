@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Detail Akun</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-3">
                            <img src="" alt="" height="200" width="150">
                        </div>
                        <div class="col-4">
                            <p class="mb-1">Nama :</p>
                            <p class="mb-2">{{ Auth::user()->name }}</p>
                            <p class="mb-1">Role :</p>
                            <p class="mb-2">{{ Auth::user()->type }}</p>
                            <p class="mb-1">Status :</p>
                            <p class="mb-2">{{ Auth::user()->status }}</p>
                        </div>
                        <div class="col-5">
                            <p class="mb-1">Email :</p>
                            <p class="mb-2">{{ Auth::user()->email }}</p>
                            <p class="mb-1">Ganti Password :</p>
                            <form action="">
                                <input type="password" placeholder="password baru" class="form-control mb-1">
                                <input type="password" placeholder="ulangi password" class="form-control mb-1">
                                <input type="submit" value="Ganti Password" class="bg-success rounded">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
