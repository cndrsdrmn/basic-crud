@extends('app')

@section('content')
    <h1>
        Data of: <code>{{ $user->name }}</code>
        <a href="{{ route('index') }}" class="btn btn-success float-end">Home</a>
    </h1>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="col">
        <div class="col-md-6 mb-3 row">
            <label for="first_name" class="col-form-label col-md-3">First Name</label>
            <div class="col-md-9">
                <input id="first_name" type="text" class="form-control-plaintext" value="{{ $user->first_name }}"
                       name="first_name">
            </div>
        </div>
        <div class="col-md-6 mb-3 row">
            <label for="last_name" class="col-form-label col-md-3">Last Name</label>
            <div class="col-md-9">
                <input id="last_name" type="text" class="form-control-plaintext" value="{{ $user->last_name }}"
                       name="last_name">
            </div>
        </div>
        <div class="col-md-6 mb-3 row">
            <label for="address" class="col-form-label col-md-3">Address</label>
            <div class="col-md-9">
                <textarea id="address" class="form-control-plaintext" style="resize: none;" name="address">{{ $user->address }}</textarea>
            </div>
        </div>
    </div>

    <div class="col my-3">
        <form action="{{ route('destroy', $user->id) }}" method="POST">
            @method('DELETE')
            @csrf
            <div class="btn-group" role="group" aria-label="Basic example">
                <a href="{{ route('edit', $user->id) }}" class="btn btn-primary">Edit</a>
                <button type="submit" class="btn btn-danger">Delete</button>
            </div>
        </form>
    </div>
@endsection
