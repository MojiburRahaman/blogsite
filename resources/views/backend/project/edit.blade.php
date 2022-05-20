<x-app-layout title="Blog">
    <div class="container grid px-6 mx-auto">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Edit Blog
        </h2>

        <!-- General elements -->


        <!-- Validation inputs -->
        <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <form action="{{route('blog.update',$project->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="w-full overflow-x-auto">
                    <label class="block text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Title</span>
                        <input name="title" required value="{{$project->title}}"
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
                        <span class="text-gray-700 dark:text-gray-400">Meta Description</span>
                        <input name="meta_description" required value="{{$project->meta_description}}"
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
                        <input name="meta_keyword" required value="{{$project->meta_keyword}}"
                            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                            placeholder="Meta Keyword" />
                        @error('meta_keyword')
                        <span class="text-xs text-red-600 dark:text-red-400">
                            {{$message}}
                        </span>
                        @enderror
                    </label>
                </div>
                <div class="mt-4 w-full overflow-x-auto">
                    <label class="block text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Category</span>
                        <select  name="category_id"
                            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
                            <option value>Select One</option>
                            @foreach ($category as $cat)
                            <option {{($cat->id == $project->category_id)? 'selected' : ''}}
                                value="{{$cat->id}}">{{$cat->title}}</option>
                            @endforeach
                        </select>
                        @error('category_id')
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
                    <label class="block text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Description</span>
                        {{-- <textarea  name="description" required id="editor" 
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" />
               {{$project->description}}
                        </textarea> --}}
                        <textarea required
                            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                            id="summernote" name="description"> {{$project->description}}</textarea>

                        @error('description')
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
    @include('backend.summer-note')

</x-app-layout>