@extends('layouts.main')

@section('content')
<div class="containermy-5">
    @if (Auth::user())
    <h1 class="text-center">Seamat Datang, {{ Auth::user()->name}}</h1>
    @else
    <h1 class="text-center">Login Dulu</h1>
    @endif

    <div class="container my-5">
        @if (Auth::user())
        <h1 class="text-center">Selamat Datang, {{ Auth::user()->name}}</h1>
        @else
        <h1 class="text-center">Login Dulu</h1>
        @endif

        <div class="container m-5">
            <div class="row">
                <div class="col">
                    <h2>Section</h2>
                </div>
                <div class="col-auto">
                    <a href=""class="btn btn-primary">Buat Section</a>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="mb-3">Judul Section</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores rerum, nisi laborum libero quis architecto voluptate et id soluta, molestias ab sed consectetur vitae aspernatur corporis, iure repudiandae magni fuga.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection
