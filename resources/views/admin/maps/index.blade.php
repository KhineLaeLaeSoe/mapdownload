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
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">

<style>
    .container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
    font-family: "Segoe UI", sans-serif;
    background-color: #f9fafb;
}

/* Headings */
h2 {
    color: #1f2937;
    font-size: 24px;
    font-weight: 600;
    margin-bottom: 1rem;
}

/* Payment Cards */
.payment-card {
    background-color: #fff;
    padding: 20px;
    margin-bottom: 20px;
    border-radius: 12px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.05);
    transition: transform 0.2s ease;
}

.payment-card:hover {
    transform: translateY(-2px);
}

.payment-card p {
    margin: 8px 0;
    color: #374151;
}

.payment-card img {
    max-width: 200px;
    border-radius: 6px;
    border: 1px solid #ccc;
}

/* Buttons */
button, .btn {
    display: inline-block;
    padding: 8px 16px;
    background-color: #10b981; /* green */
    color: white;
    border: none;
    border-radius: 6px;
    font-weight: 500;
    cursor: pointer;
    transition: background-color 0.2s ease;
    text-decoration: none;
}

button:hover, .btn:hover {
    background-color: #059669;
}

.btn-danger {
    background-color: #ef4444; /* red */
}

.btn-danger:hover {
    background-color: #dc2626;
}

/* Table Styling */
.table {
    width: 100%;
    border-collapse: collapse;
    background-color: #fff;
    border-radius: 10px;
    overflow: hidden;
}

.table th, .table td {
    padding: 12px 16px;
    text-align: left;
    border-bottom: 1px solid #e5e7eb;
}

.table thead {
    background-color: #f3f4f6;
}

.table tbody tr:hover {
    background-color: #f9fafb;
}

/* Status Colors */
.text-approved {
    color: #16a34a;
    font-weight: 500;
}

.text-pending {
    color: #f59e0b;
    font-weight: 500;
}
</style>

<div class="container mx-auto p-6 space-y-8">

    {{-- Payments List --}}
    <div>
        <h2 class="text-2xl font-semibold text-gray-800 mb-4"> Payments List</h2>

        @foreach($payments as $payment)
        <div class="p-6 bg-white rounded-xl shadow-md space-y-3">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <p><span class="font-medium text-gray-600">Name:</span> {{ $payment->name }}</p>
                <p><span class="font-medium text-gray-600">Email:</span> {{ $payment->email }}</p>
                <p><span class="font-medium text-gray-600">Phone:</span> {{ $payment->phone }}</p>
                <p><span class="font-medium text-gray-600">Amount:</span> {{ $payment->amount }} MMK</p>
                <p><span class="font-medium text-gray-600">Status:</span> 
                    <span class="{{ $payment->status == 'approved' ? 'text-green-600' : 'text-yellow-600' }}">
                        {{ ucfirst($payment->status) }}
                    </span>
                </p>
                <div>
                    <span class="font-medium text-gray-600 block mb-1">Payment Image:</span>
                    <img src="{{ asset('storage/' . $payment->payment_image) }}" alt="Payment proof" class="w-48 rounded-md border">
                </div>
            </div>

            @if($payment->status !== 'approved')
            <form action="{{ route('admin.payments.approve', $payment->id) }}" method="POST">
                @csrf
                @method('PUT')
                <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">
                    ✅ Approve & Send Link
                </button>
            </form>
            @else
            <p class="text-green-700 font-medium">✔ Already approved.</p>
            @endif
        </div>
        @endforeach
    </div>

    {{-- Maps List --}}
    <div>
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-2xl font-semibold text-gray-800">🗺️ Maps List</h2>
            <a href="{{ route('admin.maps.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                ➕ Upload New Map
            </a>
        </div>

        <div class="overflow-x-auto bg-white rounded-xl shadow-md">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">Title</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">Type</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">Price</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">Downloads</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-100">
                    @foreach($maps as $map)
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 text-sm text-gray-700">{{ $map->title }}</td>
                        <td class="px-6 py-4 text-sm text-gray-700 capitalize">{{ $map->type }}</td>
                        <td class="px-6 py-4 text-sm text-green-600 font-medium">{{ $map->price ?? 'Free' }}</td>
                        <td class="px-6 py-4 text-sm text-gray-700">{{ $map->download_count }}</td>
                        <td class="px-6 py-4">
                            <form action="{{ route('admin.maps.destroy', $map) }}" method="POST" onsubmit="return confirm('Are you sure to delete this map?');">
                                @csrf
                                @method('DELETE')
                                <button class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 text-sm">
                                    🗑 Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection
