@extends('backend.master')
@section('content')
<style>
    a.button {
    padding: 1px 6px;
    border: 2px outset buttonborder;
    border-radius: 4px;
    color: black;
    background-color: #4295f5;
    text-decoration: none;
}
</style>


<a href="{{route('location.form')}}" class="button">Add Location</a>
<table class="table caption-top">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Location</th>
      <th scope="col">Sector</th>
      <th scope="col">Road</th>
      <th scope="col">House</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
    </tr>
  </tbody>
</table>
@endsection