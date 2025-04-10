@extends('layouts.app')
@section('content')
<div class="container">
    <h2> </h2>
    <div class="mb-3">
    <a href="{{ route('services.create') }}" class="btn btn-outline-primary">Add Data</a>
    </div>
    
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <!-- Form Pencarian -->
    <form action="{{ route('services.index') }}" method="GET" class="mb-4">
        <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="Search by name..." value="{{ request('search') }}">
            <button type="button" class="btn btn-info">Search</button>
        </div>
    </form>

    <!-- Tabel Data Services -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($services as $service)
            <tr>
                <td>{{ $service->name }}</td>
                <td>{{ $service->email }}</td>
                <td>{{ $service->phone }}</td>
                <td>
                    <a href="{{ route('services.edit', $service->id) }}" class="btn btn-outline-warning">Edit</button></a>
                    <form action="{{ route('services.destroy', $service->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Delete</button>
                    </form>
                </td>
            @endforeach
        </tbody>
    </table>
</div>
@endsection