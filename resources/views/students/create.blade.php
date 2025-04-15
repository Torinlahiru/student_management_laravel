@extends('layout')
@section('content')
    <div class="card">
        <div class="card-header">
            Student Registration
        </div>
        <div class="card-body">
            <form action="{{route('students.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="" class="form-control">
                </div>

                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" name="address" class="form-control">
                </div>
                <div class="form-group">
                    <label for="mobile">Mobile</label>
                    <input type="text" name="mobile" class="form-control">
                </div>

<div class="form-group">
    <button type="submit" class="btn btn-primary">Submit</button>

</div>

            </form>
        </div>
    </div>
@endsection
