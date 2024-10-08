@extends('backend.master')
@section('content')

<style>
.h1{
    font-size: large;
    align-content: center;
}
</style>
<h1>This is {{$role->name}} view table </h1>

<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    {{$role->id}}
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
  <label class="form-check-label" for="flexCheckChecked">
    {{$role->name}}
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
  <label class="form-check-label" for="flexCheckChecked">
    {{$role->status}}
  </label>
</div>

@endsection