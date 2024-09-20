{{-- resources/views/nmn/edit.blade.php --}}
@extends('layout')

@section('title', 'Edit NMN')

@section('content')
    <h1>Edit NMN</h1>

    <form action="{{ route('nmn.update', $nmn->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="{{ old('name', $nmn->name) }}" required>

        <label for="description">Description:</label>
        <textarea name="description" id="description" required>{{ old('description', $nmn->description) }}</textarea>

        <button type="submit">Update</button>
    </form>

    <a href="{{ route('nmn.index') }}">Back to List</a>
@endsection
