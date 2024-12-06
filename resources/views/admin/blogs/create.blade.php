@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ __('add_new_blog') }}</title>
    <script src="https://cdn.jsdelivr.net/npm/tailwindcss-jit-cdn"></script>
</head>
<body class="bg-gray-100 min-h-screen">
    <div class="lg:min-w-[800px] bg-white shadow-md rounded-lg p-8 mx-auto">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">{{ __('add_new_blog') }}</h2>
        
        <form method="POST" enctype="multipart/form-data" action="{{ route('admin.blogs.store') }}">
            @csrf

            {{-- Title Field --}}
            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-700">{{ __('title') }}</label>
                <input type="text" name="title" id="title" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500" placeholder="{{ __('enter_blog_title') }}" required>
                @error('title')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            
            {{-- Content Field --}}
            <div class="mb-4">
                <label for="content" class="block text-sm font-medium text-gray-700">{{ __('content') }}</label>
                <textarea name="content" id="content" rows="6" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500" placeholder="{{ __('write_blog_content') }}" required></textarea>
                @error('content')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            
            {{-- Author Field --}}
            <div class="mb-4">
                <label for="author" class="block text-sm font-medium text-gray-700">{{ __('author') }}</label>
                <input type="text" name="author" id="author" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500" placeholder="{{ __('author_name') }}" required>
                @error('author')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            
            {{-- Published At Field --}}
            <div class="mb-4">
                <label for="published_at" class="block text-sm font-medium text-gray-700">{{ __('published_at') }}</label>
                <input type="datetime-local" name="published_at" id="published_at" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500" required>
                @error('published_at')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            
            {{-- Thumbnail Field --}}
            <div class="mb-6">
                <label for="thumbnail" class="block text-sm font-medium text-gray-700">{{ __('thumbnail') }}</label>
                <input type="file" name="thumbnail" id="thumbnail" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500">
                @error('thumbnail')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            
            {{-- Submit Button --}}
            <div class="flex justify-end">
                <button type="submit" class="px-6 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600 transition">{{ __('add_blog') }}</button>
            </div>
        </form>
    </div>
</body>
</html>
@endsection