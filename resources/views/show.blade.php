{{-- resources/views/nmn/show.blade.php --}}
@extends('layout')

@section('title', 'NMN Details')

@section('content')
    <h1>{{ $nmn->name }}</h1>
    <p>{{ $nmn->description }}</p>

    <a href="{{ route('nmn.index') }}">Back to List</a>
    <a href="{{ route('nmn.edit', $nmn->id) }}">Edit</a>

    <form action="{{ route('nmn.destroy', $nmn->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
@endsection
