<div class="flex-col w-full">
    <div class="w-full">
        <div class="m-7">
            <div class="mb-6">
                <label for="name" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Name</label>
                <input type="text" wire:model="post.name" name="name" id="name" placeholder="John Doe" required
                       class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500"/>
            </div>
        </div>
    </div>
    <div class="flex">
        <div class="w-1/2">
            <div class="m-7">
                <div class="mb-6">
                    <label for="name" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Curso</label>
                    <select wire:model="post.course_id" class="form-select mt-1 block w-full">
                        <option selected>Choose one</option>
                        @foreach($this->courses as $course)
                            <option value="{{$course->id}}">{{$course->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="w-1/2">
            <div class="m-7">
                <div class="mb-6">
                    <label for="name" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Free</label>
                    <label class="inline-flex items-center">
                        <input wire:model="post.free" type="checkbox" class="form-checkbox" checked>
                    </label>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full" style="text-align: end">
        <div class="m-7">
            <div class="mb-6">
                @if($method ==='update')
                    <button wire:click="update({{$post->id}})"
                            class="h-10 px-5 text-green-700 transition-colors duration-150 border border-green-500 rounded-lg focus:shadow-outline hover:bg-green-500 hover:text-green-100">
                        Update
                    </button>
                @else
                    <button wire:click="store()"
                            class="h-10 px-5 text-green-700 transition-colors duration-150 border border-green-500 rounded-lg focus:shadow-outline hover:bg-green-500 hover:text-green-100">
                        Save
                    </button>
                @endif
            </div>
        </div>
    </div>
</div>
