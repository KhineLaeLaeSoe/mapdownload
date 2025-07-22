@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Upload Map</h2>
    <form action="{{ route('admin.maps.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
        
        <select id="citySelect" class="city-select">
        <option value="">-- Choose City --</option>
        <option value="yangon">Yangon  Region</option>
        <option value="mandalay">Mandalay Region</option>
        <option value="sagaing">Sagaing Region</option>
        <option value="bago">Bago Region</option>
        <option value="ayeyarwady">Ayeyarwady Region </option>
        <option value="magway">Magway Region</option>
        <option value="tanintharyi">Tanintharyi Region </option>

        <option value="yangon">Chin State </option>
        <option value="mandalay">Kachin State</option>
        <option value="sagaing">Kayah State</option>
        <option value="bago">Kayin State </option>
        <option value="ayeyarwady">Mon State</option>
        <option value="magway">Rakhine State</option>
        <option value="tanintharyi">Shan State </option>
      </select>
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
    