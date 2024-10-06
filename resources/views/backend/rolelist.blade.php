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


<a href="{{route('role.form')}}" class="button">Add List</a>
<table class="table caption-top">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
  </tbody>
</table>

@endsection