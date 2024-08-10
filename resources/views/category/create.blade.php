<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Category Create</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="py-12">
    <div class="container mx-auto">
        <div class="w-full max-w-md mx-auto bg-white shadow-lg rounded-lg p-8">
            <form action="{{ route('category.store') }}" class="max-w-sm mx-auto" method="POST">
                @csrf
                <div class="mb-5">
                    <h1 class="text-center text-2xl">Create Category</h1>
                </div>
                <div class="mb-5">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900">
                        Category Name
                    </label>
                    <input type="text" id="name" name="name"
                        class="
                        @error('name')
                            border-red-600
                        @enderror
                         border text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="business type or economics type" />
                    @error('name')
                        <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="description" class="block mb-2 text-sm font-medium text-gray-900">
                        Description
                    </label>
                    <textarea id="description" rows="4" name="description"
                        class="
                        @error('description')
                            border-red-600
                        @enderror
                        block p-2.5 w-full text-sm text-gray-900 rounded-lg border focus:ring-blue-500 focus:border-blue-500 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Leave a comment..."></textarea>
                    @error('description')
                        <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
            </form>
        </div>
    </div>
</body>

</html>
