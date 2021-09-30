@extends('layouts.main')

@section('title','About')

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-4">
                <h1 class="my-5">Ubah Data Karyawan</h1>
                <form action="/employee/{{ $employee->id }}" method="POST">
                  @method('PATCH')
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $employee->name }}">
                      </div>
                    <div class="mb-3">
                      <label for="email" class="form-label">Email address</label>
                      <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" value="{{ $employee->email }}">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div>
@endsection