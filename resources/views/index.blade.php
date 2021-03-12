@extends('layout')

@section('content')

<style>
  .push-top {
    margin-top: 50px;
  }
</style>

<div class="push-top">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table">
    <thead>
        <tr class="table-warning">
          <td>ID</td>
          <td>Name</td>
          <td>Year of Creation</td>
          <td>From Comic</td>
          <td>Author</td>
          <td class="text-center">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($character as $characters)
        <tr>
            <td>{{$characters->id}}</td>
            <td>{{$characters->name}}</td>
            <td>{{$characters->creationyear}}</td>
            <td>{{$characters->comic}}</td>
            <td>{{$characters->author}}</td>
            <td class="text-center">
                <a href="{{ route('characters.edit', $characters->id)}}" class="btn btn-primary btn-sm"">Edit</a>
                <form action="{{ route('characters.destroy', $characters->id)}}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm"" type="submit">Delete</button>
                  </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection