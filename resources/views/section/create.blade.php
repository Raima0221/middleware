@extends('layouts.main')

@section('content')

<div class="container">
    <div class="row">
        <div class="com-12 co-lg-8">
            <form action="" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">Nama Section</label>
                    <input type="text" name="Section_name" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Deskripsi</label>
                    <textarea type="text" name="Section_name" class="form-control">
                </div>
                <button class="btn btn-primary">
                    Simpan Section
            </form>
        </div>
    </div>
</div>

@endsection
