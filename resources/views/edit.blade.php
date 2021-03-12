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
    Edit & Update
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
      <form method="post" action="{{ route('characters.update', $character->id) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="name">Name</label>
              <input type="text" class="form-control" name="name" value="{{ $character->name }}"/>
          </div>
          <div class="form-group">
              <label for="creationyear">Year of Creation</label>
              <input type="number" class="form-control" name="creationyear" value="{{ $character->creationyear }}"/>
          </div>
          <div class="form-group">
              <label for="comic">From Comic</label>
              <input type="text" class="form-control" name="comic" value="{{ $character->comic }}"/>
          </div>
          <div class="form-group">
              <label for="author">Author</label>
              <input type="text" class="form-control" name="author" value="{{ $character->author }}"/>
          </div>
          <button type="submit" class="btn btn-block btn-danger">Update Character</button>
      </form>
  </div>
</div>
@endsection