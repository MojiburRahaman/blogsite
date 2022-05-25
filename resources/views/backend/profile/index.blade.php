<x-app-layout title="Profile">
    <div class="container grid px-6 mx-auto">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Profile
        </h2>

        <!-- General elements -->


        <!-- Validation inputs -->
        <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <form action="{{route('setting.update',$settting->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="w-full overflow-x-auto">
                    <label class="block text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Name</span>
                        <input name="name" required value="{{$settting->name}}"
                            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                            placeholder="name" />
                        @error('name')
                        <span class="text-xs text-red-600 dark:text-red-400">
                            {{$message}}
                        </span>
                        @enderror
                    </label>
                </div>
                <div class="mt-4 w-full overflow-x-auto">
                    <label class="block text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Meta Title</span>
                        <input name="meta_title" required value="{{$settting->meta_title}}"
                            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                            placeholder="Meta Title" />
                        @error('meta_title')
                        <span class="text-xs text-red-600 dark:text-red-400">
                            {{$message}}
                        </span>
                        @enderror
                    </label>
                </div>
                <div class="mt-4 w-full overflow-x-auto">
                    <label class="block text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Meta Description</span>
                        <input name="meta_description" required value="{{$settting->meta_description}}"
                            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                            placeholder="Meta Description" />
                        @error('meta_description')
                        <span class="text-xs text-red-600 dark:text-red-400">
                            {{$message}}
                        </span>
                        @enderror
                    </label>
                </div>
                <div class="mt-4 w-full overflow-x-auto">
                    <label class="block text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Meta Keyword</span>
                        <input name="meta_keyword" required value="{{$settting->meta_keyword}}"
                            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                            placeholder="Meta Keyword" />
                        @error('meta_description')
                        <span class="text-xs text-red-600 dark:text-red-400">
                            {{$message}}
                        </span>
                        @enderror
                    </label>
                </div>
                <div class="mt-4 w-full overflow-x-auto">
                    <label class="block text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Logo</span>
                        <input type="file" name="logo"  placeholder="logo"
                            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" />
                        @error('logo')
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

    @include('backend.ckeditor')
</x-app-layout>