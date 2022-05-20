<x-app-layout title="Category Create">
    <div class="container grid px-6 mx-auto">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Create Category
        </h2>

        <!-- General elements -->


        <!-- Validation inputs -->
        <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <form action="{{route('category.update',$category->id)}}" method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="w-full overflow-x-auto">
                    <label class="block text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Title</span>
                        <input name="title" required value="{{$category->title}}"
                            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                            placeholder="Title" />
                        @error('title')
                        <span class="text-xs text-red-600 dark:text-red-400">
                            {{$message}}
                        </span>
                        @enderror
                    </label>
                </div>
                <div class="mt-4 w-full overflow-x-auto">
                    <label class="block text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Thumbnail</span>
                        <input type="file" name="thumbnail" 
                            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" />
            
                            @error('thumbnail')
                        <span class="text-xs text-red-600 dark:text-red-400">
                            {{$message}}
                        </span>
                        @enderror
                    </label>
                     
                </div>

                <div class="mt-4 w-full overflow-x-auto">
                    <button type="submit"
                        class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>


</x-app-layout>