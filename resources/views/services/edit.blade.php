@extends('layouts.app')
@section('content')

<div class="card" style="width: 18rem;">
    <div class="card-body">
    <h2>Edit Service</h2>
    <form action="{{ route('services.update', $service->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" name="name" class="form-control" value="{{ $service->name }}" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" value="{{ $service->email }}" required>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Telepon</label>
            <input type="text" name="phone" class="form-control" value="{{ $service->phone }}" required>
        </div>
        <button type="submit" class="btn btn-outline-info">update</button>
        <a href="{{ route('services.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection

