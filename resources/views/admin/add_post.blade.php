<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            @if(Auth::check() && Auth::user()->usertype == 'admin')
            {{ __('Admin Dashboard')}}
            @else
            {{ __('User Dashboard')}}
            @endif
        </h2>
    </x-slot>
    @section('content')
    <div class="py-12">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white shadow-md rounded-lg">
            <div class="px-6 py-8"> <!-- Padding inside the box -->
                <h2 class="text-2xl font-semibold text-gray-800 mb-8 text-center">Add New Post</h2>

                <form action="" method="POST" enctype="multipart/form-data" class="space-y-6">
                    @csrf

                    <!-- Title -->
                    <div>
                        <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Post Title</label>
                        <input
                            type="text"
                            name="title"
                            id="title"
                            placeholder="Enter post title"
                            class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 px-4 py-2"
                        >
                    </div>

                    <!-- Description -->
                    <div>
                        <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                        <textarea
                            name="description"
                            id="description"
                            rows="4"
                            placeholder="Write your post here..."
                            class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 px-4 py-2"
                        ></textarea>
                    </div>

                    <!-- Image -->
                    <div>
                        <label for="image" class="block text-sm font-medium text-gray-700 mb-1">Upload Image</label>
                        <input
                            type="file"
                            name="image"
                            id="image"
                            class="block w-full text-sm text-gray-600
                                   file:mr-4 file:py-2 file:px-4
                                   file:rounded-md file:border-0
                                   file:text-sm file:font-semibold
                                   file:bg-blue-50 file:text-blue-700
                                   hover:file:bg-blue-100"
                        >
                    </div>

                    <!-- Submit -->
                    <div class="text-center">
                        <button
                            type="submit"
                            name="submit"
                            class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded-md transition duration-200"
                        >
                            Add Post
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

    @endsection
</x-app-layout>