@extends('layout')
@section('content')
    <div class="card">
        <div class="card-header">
            Student Registration
        </div>
        <div class="card-body">
            <form action="{{url('student')}}" method="POST">
                @csrf
                <label for="Name">Name</label>
                <input type="text" name="Name" id="" class="form-control">
                <label for="Address">Address</label>
                <input type="text" name="Address" class="form-control">
                <label for="Mobile">Mobile</label>
                <input type="text" name="Mobile" class="form-control">
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
