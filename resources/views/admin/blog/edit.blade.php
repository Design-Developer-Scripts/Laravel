<x-dashboard>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <a href="{{route('blog.index')}}">
                {{ __('Blog') }}
            </a>
        </h2>
    </x-slot>

    <form class="py-7 max-w-7xl mx-auto sm:px-6 lg:px-8 mb-24" method="post" action="{{route('dashboard.blog.update',$content->id)}}">
        @csrf
        @method('PUT')
        @livewire('blog.edit', ['content' => $content])
        <button type="submit" class="mt-14 flex justify-center items-center w-full bg-green-500 hover:bg-green-600 rounded-full py-3 px-4 transition-all duration-300 ease-in-out shadow-xl">
            <div class="flex align-middle">
                <x-icons.save />
                <span class="ml-1">Speichern</span>
            </div>
        </button>
    </form>
</x-dashboard>