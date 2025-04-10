@extends('layouts.app')
@section('content')

<div class="card" style="width: 18rem;">
    <div class="card-body">
        <form action="{{ route('services.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" placeholder="" value="{{ old('name') }}" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" name="email" placeholder="" value="{{ old('email') }}" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" class="form-control" name="phone" placeholder="" value="{{ old('phone') }}" required>
            </div>
            <button type="submit" class="btn btn-outline-info">Submit</button>
        </form>
    </div>
</div>
@endsection