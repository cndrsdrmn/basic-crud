@extends('app')

@section('content')
    <h1>Simple Form <a href="{{ route('index') }}" class="btn btn-success float-end">Home</a></h1>

    <div class="col mx-auto">
        <form class="row g-3 mt-3 needs-validation {{ $errors->any() ? 'was-validated' : '' }}" novalidate
              action="{{ route('store') }}" method="POST">
            @csrf

            @foreach(trans('fields') as $field => $label)
                <div class="col-md-6">
                    <label for="{{ $field }}" class="form-label">{{ $label }}{!! ensure_mandatory($field) ? '<span class="text-danger">*</span>' : '' !!}</label>
                    <input id="{{ $field }}"
                           type="text"
                           class="form-control"
                           {{ ensure_mandatory($field) ? 'required' : '' }}
                           value="{{ old($field) }}"
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
