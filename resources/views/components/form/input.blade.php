<div class="mt-4 mb-7">
    <label class="block w-full">
        <span class="block mb-2">{{$title}}
        @if($option == true)
            <b class="text-red-600 mx-1">*</b>
        @endif
        </span>
        <input class="py-2 px-3 border-gray-300 focus:border-blue-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm w-full" 
        type="{{$type}}" name="{{$name}}" value="{{$value}}"
        @if($option == true)
            required
        @endif
        />
    </label>
</div>