@extends('app')

@section('content')
    <h1>Simple Form <a href="{{ route('index') }}" class="btn btn-success float-end">Home</a></h1>

    <div class="col mx-auto">
        <form class="row g-3 mt-3 needs-validation {{ $errors->any() ? 'was-validated' : '' }}" novalidate action="{{ route('store') }}" method="POST">
            @csrf
            <div class="col-md-6">
                <label for="first_name" class="form-label">First Name</label>
                <input id="first_name" type="text" class="form-control" value="{{ old('first_name') }}" name="first_name" required>
                @error('first_name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-md-6">
                <label for="last_name" class="form-label">Last Name</label>
                <input id="last_name" type="text" class="form-control" value="{{ old('last_name') }}" name="last_name" required>
                @error('last_name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-12">
                <label for="address" class="form-label">Address</label>
                <textarea id="address" name="address" class="form-control" required>{{ old('address') }}</textarea>
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
