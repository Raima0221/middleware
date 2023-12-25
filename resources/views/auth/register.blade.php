@extends('layouts.main')

@section('content')
<div class="containermy-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-5">
                <div class="card">
                    <div class="card-body">
                        <h2 class="mb-4 text-center">Register</h2>

                        <form action=""method="POST">
                        @csrf
                            <div class="mb-3">
                                <label for="" class="form-label">Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Email</label>
                                <input type="text" name="Email" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Password</label>
                                <input type="text" name="password" class="form-control">
                            </div>
                            <button class="btn btn-primary">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
      </div>
@endsection