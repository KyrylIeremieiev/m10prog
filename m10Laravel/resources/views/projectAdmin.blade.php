@extends('layout')

@section('content')
    <div class="container mx-auto mt-8">
        <form method="POST" action="http://127.0.0.1:8000/meta/projectHandler" class="max-w-md mx-auto p-6 bg-white border rounded shadow">
            @csrf

            <div class="mb-4">
                <label for="operation" class="block text-gray-700 text-sm font-bold mb-2">Operation</label>
                <select id="operation" name="operation" class="w-full p-2 border rounded">
                    <option value="create">Create</option>
                    <option value="read">Read</option>
                    <option value="update">Update</option>
                    <option value="delete">Delete</option>
                </select>
            </div>

            <div class="mb-4">
                <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Title</label>
                <input type="text" id="title" name="title" class="w-full p-2 border rounded">
            </div>

            <div class="mb-4">
                <label for="disc" class="block text-gray-700 text-sm font-bold mb-2">Description</label>
                <textarea id="disc" name="disc" class="w-full p-2 border rounded"></textarea>
            </div>

            <div class="mb-4">
                <label for="image" class="block text-gray-700 text-sm font-bold mb-2">Image URL</label>
                <input type="text" id="image" name="image" class="w-full p-2 border rounded">
            </div>

            <div class="mb-4">
                <button type="submit" class="bg-blue-500 text-white p-2 rounded">Submit</button>
            </div>
        </form>
    </div>
@endsection
