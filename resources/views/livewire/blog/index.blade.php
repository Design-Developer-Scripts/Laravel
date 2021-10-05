<div>
    <div class="md:flex md:flex-row-reverse mb-5 w-full">
        
        <div class="w-full md:w-4/12 px-4 my-5">
            <a href="{{route('dashboard.blog.create')}}" class="flex justify-center items-center w-full bg-green-500 hover:bg-green-600 rounded-full py-3 px-4 transition-all duration-300 ease-in-out shadow-sm">
                <div class="flex align-middle">
                    <x-icons.create />
                    <span class="ml-1">Create Neu Blog Post</span>
                </div>
            </a>
        </div>
        <div class="w-full md:w-8/12 px-4 my-5">
            <input type="text" placeholder="Suche" wire:model="searchTerm" class="py-3 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-full shadow-sm w-full"/>
        </div>
    </div>

    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
        <x-dashboard.table.index>
            <x-slot name="heading">
                <x-dashboard.table.heading class="w-6/12 px-4 py-2 text-left">Title</x-dashboard.table.heading>
                <x-dashboard.table.heading class="w-2/12 px-4 py-2 text-left">Status</x-dashboard.table.heading>
                <x-dashboard.table.heading class="w-4/12 px-4 py-2"></x-dashboard.table.heading>
            </x-slot>
            @foreach($content as $value)
                <x-dashboard.table.row>
                    <x-dashboard.table.cell>{{$value->title}}<br />
                    <small><b class="mr-1">URL:</b><a href="{{route('blog.singel',$value->slug)}}" target="_blank">{{$value->slug}}</a></small>
                    </x-dashboard.table.cell>
                    <x-dashboard.table.cell>
                        <x-dashboard.form.status status="{{$value->status}}" name="status" id="{{$value->id}}" />
                    </x-dashboard.table.cell>
                    <x-dashboard.table.controller>
                        <a href="{{route('dashboard.blog.show',$value->id)}}">
                            <x-dashboard.button.show />
                        </a>

                        <a href="{{route('dashboard.blog.edit',$value->id)}}">
                            <x-dashboard.button.edit />
                        </a>

                        <x-dashboard.button.trash onclick="toggleModal('small-modal-{{$value->id}}')"/>
                        <x-dashboard.element.double-click-to-delete :itemID="$value->id"/>
                        
                    </x-dashboard.table.controller>
                </x-dashboard.table.row>
            @endforeach
        </x-dashboard.table.index>        
    </div>
    <div class="mt-14 mx-5">
        {{ $content->render(('pagination::tailwind')) }}
    </div>
</div>

