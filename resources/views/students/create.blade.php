@extends('layout')
@section('content')
    <div class="card">
        <div class="card-header">
            Student Registration
        </div>
        <div class="card-body">
            <form action="{{url('student')}}" method="POST">
                <label for="Name">Name</label>
                <input type="text" name="Name" id="">
                <label for="Address">Address</label>
                <input type="text" name="Address">
                <label for="Mobile">Mobile</label>
                <input type="text" name="Mobile">
            </form>
        </div>
    </div>
@endsection
