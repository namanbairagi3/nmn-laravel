{{-- resources/views/nmn/index.blade.php --}}
@extends('layout')

@section('title', 'NMN List')

@section('content')
    <h1>List of NMNs</h1>
    <a href="{{ route('nmn.create') }}">Create New NMN</a>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($nmns as $nmn)
                <tr>
                    <td>{{ $nmn->name }}</td>
                    <td>{{ $nmn->description }}</td>
                    <td>
                        <a href="{{ route('nmn.show', $nmn->id) }}">View</a>
                        <a href="{{ route('nmn.edit', $nmn->id) }}">Edit</a>
                        <form action="{{ route('nmn.destroy', $nmn->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3">No NMNs found</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
    