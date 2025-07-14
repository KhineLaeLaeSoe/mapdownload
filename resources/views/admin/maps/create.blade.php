@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Upload Map</h2>
    <form action="{{ route('admin.maps.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
           <label for="title">Map Title:</label>
    <input type="text" name="title" required><br>

    <label for="file">Map File (PDF/JPG):</label>
    <input type="file" name="file" required><br>

    <label for="image">Map Cover Image (jpg/png):</label>
    <input type="file" name="image" required><br>

    <label for="type">Type:</label>
    <select name="type">
        <option value="free">Free</option>
        <option value="paid">Paid</option>
    </select><br>

    <label for="price">Price:</label>
    <input type="number" name="price"><br>

    <button type="submit">Upload</button>
    </form>
</div>
@endsection
    