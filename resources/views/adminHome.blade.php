@extends('layouts.app')
@section('content')

<div class="container">
    
    
    <div class="row justify-content-center">
        <div class="col btn border">
            <a href="{{ route('user-management.index') }}">
                <img src="https://via.placeholder.com/150x150" class="mx-auto d-block mb-2" alt="Button 2">
                <div class="text-center">
                    <button class="btn btn-primary btn-lg">Kelola Akun</button>
                </div>
            </a>
        </div>
        <div class="col btn border">
            <a href="{{ url('stok-bar') }}">
                <img src="https://via.placeholder.com/150x150" class="mx-auto d-block mb-2" alt="Button 3">
                <div class="text-center">
                    <button class="btn btn-primary btn-lg">Kelola Item</button>
                </div>
            </a>
        </div>
        <div class="col btn border">
            <a href="{{ url('resume') }}">
                <img src="https://via.placeholder.com/150x150" class="mx-auto d-block mb-2" alt="Button 3">
                <div class="text-center">
                    <button class="btn btn-primary btn-lg">Riwayat Transaksi</button>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection