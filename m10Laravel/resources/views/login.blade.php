@extends('layout')
@section('content')
    <div class="container mx-auto mt-8">
        <form method="POST" action="http://127.0.0.1:8000/meta/login" class="max-w-md mx-auto p-6 bg-white border rounded shadow">
            @csrf

            <div class="mb-4">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
                <input type="text" id="name" name="name" class="w-full p-2 border rounded">
            </div>

            <div class="mb-4">
                <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                <input type="password" id="password" name="password" class="w-full p-2 border rounded">
            </div>

            <div class="mb-4">
                <button type="submit" class="bg-blue-500 text-white p-2 rounded">Submit</button>
            </div>
        </form>
    </div>
@endsection
