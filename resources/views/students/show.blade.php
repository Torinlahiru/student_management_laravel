@extends('layout')

@section('content')

    <div class="card">
        <div class="card-header">Student Page</div>

        <div class="card-body">
            <h2 class="card-title">Name : {{$student->name}}</h2>
            <p class="card-text">Address : {{$student->address}}</p>
            <p class="card-text">Mobile : {{$student->mobile}}</p>
        </div>
    </div>

@endsection
