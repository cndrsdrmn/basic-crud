@extends('app')

@section('content')
    <h1>
        Form Edit: <code>{{ $user->name }}</code>
        <a href="{{ route('index') }}" class="btn btn-success float-end">Home</a>
    </h1>

    <div class="col mx-auto">
        <form class="row g-3 mt-3" action="{{ route('update', $user->id) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="col-md-6">
                <label for="first_name" class="form-label">First Name</label>
                <input id="first_name" type="text" class="form-control" value="{{ $user->first_name }}" name="first_name">
                @error('first_name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-md-6">
                <label for="last_name" class="form-label">Last Name</label>
                <input id="last_name" type="text" class="form-control" value="{{ $user->last_name }}" name="last_name">
                @error('last_name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-12">
                <label for="address" class="form-label">Address</label>
                <textarea id="address" name="address" class="form-control">{{ $user->address }}</textarea>
                @error('address')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
@endsection
