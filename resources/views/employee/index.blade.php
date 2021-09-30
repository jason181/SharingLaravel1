@extends('layouts.main')

@section('title','About')

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-4">
                <h1 class="my-5">Data Karyawan</h1>
                <a href="/employee/create">
                    <button class="btn btn-success my-3">Tambah Data Karyawan</button>
                </a>
                @if(session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                
                <ol class="list-group list-group-numbered">
                    @foreach ($employees as $employee)
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">{{ $employee->name }}
                            </div>
                            <a class="badge bg-primary rounded-pill" href="/employee/{{ $employee->id }}">detail</a>
                        </li>
                    
                    @endforeach
                </ol>
            </div>
        </div>
    </div>
@endsection