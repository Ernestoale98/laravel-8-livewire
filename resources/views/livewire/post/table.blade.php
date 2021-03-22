<div class="mt-8">
    <div class="w-full px-5">
        @if($form)
            @include('livewire.post.form')
        @else
            <div class="w-full mb-5" style="text-align: end">
                <button wire:click="create()"
                        class="h-10 px-5 text-green-700 transition-colors duration-150 border border-green-500 rounded-lg focus:shadow-outline hover:bg-green-500 hover:text-green-100">
                    Create
                </button>
            </div>
            <table class="border border-gray-400 w-full">
                <thead>
                <tr>
                    <th class="border-t border-b border-gray-400">Id</th>
                    <th class="border-t border-b border-gray-400">Name</th>
                    <th class="border-t border-b border-gray-400">Acciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($posts as $post)
                    <tr class="py-5" style="height: 50px">
                        <td class="border-t border-b border-gray-400">{{$post->id}}</td>
                        <td class="border-t border-b border-gray-400">{{$post->name}}</td>
                        <td class="border-t border-b py-3 border-gray-400" style="text-align: center">
                            <button wire:click="edit({{$post->id}})"
                                    class="h-10 px-5 text-indigo-700 transition-colors duration-150 border border-indigo-500 rounded-lg focus:shadow-outline hover:bg-indigo-500 hover:text-indigo-100">
                                Edit
                            </button>
                            <button wire:click="destroy({{$post->id}})"
                                    class="h-10 px-5 text-red-700 transition-colors duration-150 border border-red-500 rounded-lg focus:shadow-outline hover:bg-red-500 hover:text-red-100">
                                Delete
                            </button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="block mt-5 my-3">
                {{ $posts->links() }}
            </div>
        @endif
    </div>
</div>
