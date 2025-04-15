@extends('layout')
@section('content')
    <div class="card">
        <div class="card-header">
            Student Registration
        </div>
        <div class="card-body">
            <form action="{{url('students')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="Name">Name</label>
                    <input type="text" name="Name" id="" class="form-control">
                </div>

                <div class="form-group">
                    <label for="Address">Address</label>
                    <input type="text" name="Address" class="form-control">
                </div>
                <div class="form-group">
                    <label for="Mobile">Mobile</label>
                    <input type="text" name="Mobile" class="form-control">
                </div>

<div class="form-group">
    <button type="submit" class="btn btn-primary">Submit</button>

</div>

            </form>
        </div>
    </div>
@endsection
