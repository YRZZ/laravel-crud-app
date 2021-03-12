@extends('layout')

@section('content')

<style>
    .container {
      max-width: 450px;
    }
    .push-top {
      margin-top: 50px;
    }
</style>

<div class="card push-top">
  <div class="card-header">
    Add Character
  </div>

  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('characters.store') }}">
          <div class="form-group">
              @csrf
              <label for="name">Name</label>
              <input type="text" class="form-control" name="name"/>
          </div>
          <div class="form-group">
              <label for="creationyear">Year of Creation</label>
              <input type="number" class="form-control" name="creationyear"/>
          </div>
          <div class="form-group">
              <label for="comic">From Comic</label>
              <input type="text" class="form-control" name="comic"/>
          </div>
          <div class="form-group">
              <label for="author">Author</label>
              <input type="text" class="form-control" name="author"/>
          </div>
          <button type="submit" class="btn btn-block btn-danger">Create Character</button>
      </form>
  </div>
</div>
@endsection