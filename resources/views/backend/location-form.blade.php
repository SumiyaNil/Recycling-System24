@extends('backend.master')
@section('content')


<form action="" method="" enctype="multipart/form-data">
@csrf
  <!-- <div class="form-group">
  <select class="form-select" aria-label="Default select example" name="cat_name">
              <option selected>Select Location</option>
              <option value=""></option>
              
  </div> -->
<style>
  label {
    display: inline-table;
    margin-bottom: 1rem;
}
</style>

  <div class="form-group row">
    <label for="industry" class="" >Location</label>
    <select name="industry" class="form-control">
        <option value="" disabled selected>Select Industry</option>
        <option value="financial-service">Financial Services</option>
        <option value="healthcare-lifescience">Healthcare & Life Science</option>
        <option value="communications">Communications</option>
    </select>
</div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>



@endsection