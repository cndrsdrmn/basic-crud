@extends('app')

@section('content')
    <h1>
        Data of: <code>{{ $user->customer_fullname }}</code>
        <a href="{{ route('index') }}" class="btn btn-success float-end">Home</a>
    </h1>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="col">
        @foreach(trans('fields') as $field => $label)
            <div class="col-md-6 mb-3 row">
                <label for="{{ $field }}" class="col-form-label col-md-3">{{ $label }}</label>
                <div class="col-md-9">
                    <input id="{{ $field }}"
                           type="text"
                           class="form-control-plaintext"
                           value="{{ $user->{$field} }}"
                           name="{{ $field }}">
                </div>
            </div>
        @endforeach
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
