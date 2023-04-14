@extends('app')
@section('content')
    <div class="position-absolute top-50 start-50 translate-middle border p-4 rounded">
        @if (session('success'))
            <p class="alert alert-success">{{ session('success') }}</p>
        @endif
        @if ($errors->any())
            @foreach ($errors as $err)
                <p class="alert alert-danger">{{ $err }}</p>
            @endforeach
        @endif
        <div class="text-center">
            <h4>Selamat Datang</h4>
        </div>
        <br>
        <div class="text-center">
            <img src="{{ asset('assets/image/logo.jpeg') }}" alt="logo" width="110" height="40">
        </div>
        <br>
        <form action="{{ route('login.action') }}" method="post">
            @csrf
            <div class="mb-3 text-center">
                <label>Username :</label>
                <input type="text" class="form-control" name="username" value="{{ old('username') }}">
            </div>
            <div class="mb-3 text-center">
                <label>Password :</label>
                <input type="password" class="form-control" name="password">
            </div>
            <div class="mb-3 text-center">
                <button class="btn btn-success btn-sm">Masuk</button>
            </div>
        </form>
    </div>
@endsection