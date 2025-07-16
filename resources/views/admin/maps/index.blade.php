@extends('layouts.app')
@section('title', 'Payments List')
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
<div class="container py-4">
    <h2 class="text-xl font-bold mb-4">Payments List</h2>

    @foreach($payments as $payment)
    <div class="p-4 mb-4 bg-white rounded shadow">
        <p><strong>Name:</strong> {{ $payment->name }}</p>
        <p><strong>Email:</strong> {{ $payment->email }}</p>
        <p><strong>Phone:</strong> {{ $payment->phone }}</p>
        <p><strong>Amount:</strong> {{ $payment->amount }} MMK</p>
        <p><strong>Status:</strong> {{ ucfirst($payment->status) }}</p>
        <p><strong>Payment Image:</strong><br>
            <img src="{{ asset('storage/' . $payment->payment_image) }}" alt="Payment proof" class="w-48 mt-2">
        </p>

        @if($payment->status !== 'approved')
            <form action="{{ route('admin.payments.approve', $payment->id) }}" method="POST">
                @csrf
                @method('PUT')
                <button type="submit" class="bg-green-600 text-white px-4 py-1 rounded mt-2">✅ Approve & Send Link</button>
            </form>
        @else
            <p class="text-green-600 mt-2">✔ Already approved.</p>
        @endif
    </div>
    @endforeach
</div>
{{-- @endsection --}}
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
