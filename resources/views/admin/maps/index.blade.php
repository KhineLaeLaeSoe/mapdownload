@extends('layouts.app')

@section('content')

    {{-- <div class="container">
        <h2>Maps List</h2>

@foreach($maps as $map)
    <div>
        <h3>{{ $map->title }}</h3>
        <p>Type: {{ $map->type }}</p>
        <p>Price: {{ $map->price ?? 'Free' }}</p>
        <a href="{{ asset('storage/' . $map->file_path) }}" download>Download</a>
    </div>
@endforeach --}}
        <a href="{{ route('admin.maps.create') }}" class="btn btn-primary mb-3">Upload New Map</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Type</th>
                    <th>Price</th>
                    <th>Downloads</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($maps as $map)
                <tr>
                    <td>{{ $map->title }}</td>
                    <td>{{ $map->type }}</td>
                    <td>{{ $map->price }}</td>
                    <td>{{ $map->download_count }}</td>
                    <td>
                        <form action="{{ route('admin.maps.destroy', $map) }}" method="POST">
                            @csrf @method('DELETE')
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
