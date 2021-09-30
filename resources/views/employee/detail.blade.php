@extends('layouts.main')

@section('title','About')

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-4">
                <h1 class="my-5">Detail Karyawan</h1>
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title">{{ $employee->name }}</h5>
                      <p class="card-text">{{ $employee->email }}</p>
                      <a href="/employee/edit/{{ $employee->id }}" class="card-link">Edit</a>
                        <form action="/employee/{{ $employee->id }}" method="POST">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                      
                    </div>
                  </div>
            </div>
        </div>
    </div>
@endsection