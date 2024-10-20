@extends('backend.master')
@section('content')



<form action="{{route('role.submit.permission',$role_id)}}" method="post">
  @csrf
@foreach($permission as $permission)
<div class="form-check  mt-5">

  <input class="form-check-input" @if(in_array($permission->id,$rolePermission)) checked @endif type="checkbox" value="{{$permission->id}}" name="permission[]" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    {{$permission->name}}
  </label>
</div>

@endforeach
<button class="btn btn-primary" type="submit">Submit</button>
</form>
@endsection