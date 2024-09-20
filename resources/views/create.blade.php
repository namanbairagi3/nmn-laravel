{{-- resources/views/nmn/create.blade.php --}}
@extends('layout')

@section('title', 'Create NMN')

@section('content')
    <h1>Create New NMN</h1>

    <form action="{{ route('nmn.store') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="{{ old('name') }}" required>

        <label for="description">Description:</label>
        <textarea name="description" id="description" required>{{ old('description') }}</textarea>

        <button type="submit">Submit</button>
    </form>

    <a href="{{ route('nmn.index') }}">Back to List</a>
@endsection
