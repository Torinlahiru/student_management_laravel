@extends('layout')
@section('content')

<table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Address</th>
        <th scope="col">Mobile</th>
      </tr>
    </thead>
    <tbody>
     @foreach ($students as $item)

      <tr>

        <th scope="row">1</th>
        <td>{{$item->name}}</td>
        <td>Otto</td>
        <td>@mdo</td>
      </tr>
      @endforeach

    </tbody>
  </table>

  @endsection
