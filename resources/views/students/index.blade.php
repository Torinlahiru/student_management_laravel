@extends('layout')
@section('content')

@if (session('flash_message'))
    <div class="alert alert-success">
        {{ session('flash_message') }}
    </div>
@endif

<table class="table">
    <a href="{{url('student/create')}}" class="btn btn-success"> Add new</a>
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Address</th>
        <th scope="col">Mobile</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
     @foreach ($students as $item)

      <tr>

        <td>{{$item->id}}</th>
        <td>{{$item->name}}</td>
        <td>{{$item->address}}</td>
        <td>{{$item->mobile}}</td>
        <td>
            <a type="button" class="btn btn-info" href="{{url('/student'.'/'.$item->id)}}">View</a>
        </td>
      </tr>
      @endforeach

    </tbody>
  </table>

  @endsection
