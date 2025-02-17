@extends('events.layouts.events')

@section('main-content')

<h1>Add New Event</h1>

<hr>

@if ($errors->any())
    <div class="alert alert-danger border-left-danger" role="alert">
        <ul class="pl-4 my-2">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('events.store') }}" method="POST">
  @csrf

  <div class="mb-3">
    <label class="form-label">Name</label>
    <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Slug</label>
    <input type="text" name="slug" class="form-control" value="{{ old('slug') }}" required>
  </div>

  <br>

  <a class="btn btn-dark" href="{{ route('events.index') }}">Back</a>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection