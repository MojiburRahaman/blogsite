<x-app-layout title="Skill">
    <div class="container grid px-6 mx-auto">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Create Skill
        </h2>

        <!-- General elements -->

      
        <!-- Validation inputs -->
        <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <form action="{{route('skill.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="w-full overflow-x-auto">
                <label class="block text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Title</span>
                    <input name="skill_title" required
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        placeholder="Title" />
                        @error('skill_title')
                        <span class="text-xs text-red-600 dark:text-red-400">
                            {{$message}}
                        </span>
                        @enderror
                </label>
            </div>
            <div class="mt-4 w-full overflow-x-auto">
                <label class="block text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Logo</span>
                    <input type="file" name="skill_logo" required
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" />
                        @error('skill_logo')
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