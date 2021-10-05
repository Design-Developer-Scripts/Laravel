<div class="my-4">

    @if(isset($photo) && !empty($photo) && is_file('images/'.$photo))
    <figure class="relative">
        <button type="button" wire:click="remove_img('{{ $input }}')" class="absolute z-10 top-5 right-5 bg-red-500 hover:bg-red-700 text-white rounded-full w-12 h-12 flex justify-center items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="inline-block" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
        </button>
        <img src="{{url('images/'.$photo)}}" class="w-full block" />
    </figure>
    @endif
    <div class="mt-3 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
        <div class="space-y-1 text-center">
            <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
            <div class="text-sm text-gray-600">
                <label for="{{$input}}" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                    <span class="block">{{$title}} Datei hochladen</span>
                    <input id="{{$input}}" name="{{$input}}" type="file" class="sr-only">
                </label>
                <p class="pl-1">oder per Drag &amp; Drop</p>
            </div>
            <p class="text-xs text-gray-500">JPG, PNG max {{$width}}x{{$height}}px</p>
        </div>
    </div>
</div>