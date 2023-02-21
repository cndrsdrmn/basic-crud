@extends('app')

@section('content')
    <h1>
        Form Edit: <code>{{ $user->customer_fullname }}</code>
        <a href="{{ route('index') }}" class="btn btn-success float-end">Home</a>
    </h1>

    <div class="col mx-auto">
        <form class="row g-3 mt-3" action="{{ route('update', $user->id) }}" method="POST">
            @method('PUT')
            @csrf

            @foreach(trans('fields') as $field => $label)
                <div class="col-md-6">
                    <label for="{{ $field }}" class="form-label">{{ $label }}{{ ensure_mandatory($field) ? '*' : '' }}</label>
                    <input id="{{ $field }}"
                           type="text"
                           class="form-control"
                           {{ ensure_mandatory($field) ? 'required' : '' }}
                           value="{{ $user->{$field} ?? $label }}"
                           name="{{ $field }}">
                    @error($field)
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            @endforeach

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
@endsection
