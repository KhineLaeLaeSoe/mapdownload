@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="text-xl font-bold mb-4">Payment Requests</h2>

    <table class="table-auto w-full border">
        <thead>
            <tr class="bg-gray-100">
                <th>Name</th><th>Email</th><th>Phone</th><th>Amount</th><th>Status</th><th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($payments as $payment)
            <tr class="border-t">
                {{-- alsdasd --}}
                <td>{{ $payment->name }}</td>
                <td>{{ $payment->email }}</td>
                <td>{{ $payment->phone }}</td>
                <td>{{ $payment->amount }} MMK</td>
                <td>{{ $payment->is_paid ? '✅ Approved' : '⏳ Pendings' }}</td>
                <td>
                    @if(!$payment->is_paid)
                    <form action="{{ route('admin.payments.approve', $payment) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="pdf_file" required class="mb-1">
                        <button type="submit" class="px-3 py-1 bg-green-600 text-dark rounded" style="color:dark">Approve & Send</button>
                    </form>
                    @else
                    <a href="{{ asset('storage/' . $payment->pdf_file) }}" target="_blank" class="text-blue-600 underline">View Map</a>
                    @endif
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
