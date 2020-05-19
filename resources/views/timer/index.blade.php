@extends('app')
@section('main-content')
<div class="timer">
  <div class="container mt-3">
      <form>
        <div class="form-row">
          <div class="form-group col-md-6">
              <input type="text" class="form-control form-control-lg" id="exampleInputPassword1"
                  placeholder="What are you working on..">
          </div>
          <select class="selectpicker">
            <option>Mustard</option>
            <option>Ketchup</option>
            <option>Relish</option>
          </select>
          
        </div>
        <button type="submit" class="btn btn-primary mb-2">Submit</button>
      </form>
  </div>
</div>
@endsection
