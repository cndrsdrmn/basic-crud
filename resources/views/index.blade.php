@extends('app')

@section('content')
    <h1>Data <a class="btn btn-primary float-end my-3" href="{{ route('create') }}">Create</a></h1>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <table class="table table-bordered mt-3">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">No Identitas</th>
            <th scope="col">Shortname</th>
            <th scope="col">Alamat</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @forelse($users as $key => $user)
            <tr>
                <th scope="row">{{ ($users->currentpage()-1) * $users->perpage() + $key + 1 }}</th>
                <td>{{ $user->no_identitas }}</td>
                <td>{{ $user->shortname }}</td>
                <td>{{ $user->alamat1 }}</td>
                <td>
                    <form action="{{ route('destroy', $user->id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="{{ route('edit', $user->id) }}" class="btn btn-primary">Edit</a>
                            <a href="{{ route('show', $user->id) }}" class="btn btn-warning">Show</a>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </div>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5" class="text-center">Data Not Available</td>
            </tr>
        @endforelse
        </tbody>
    </table>

    {{ $users->links() }}
@endsection
