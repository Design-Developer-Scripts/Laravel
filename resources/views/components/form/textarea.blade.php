<div class="mt-4 mb-7">
    <label class="block w-full">
        <span class="block mb-2">{{$title}}
        @if($option == true)
            <b class="text-red-600 mx-1">*</b>
        @endif
        </span>
        <textarea rows="4" cols="80" name="{{$name}}" class="py-2 px-3 border-gray-300 focus:border-blue-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm w-full" 
        @if($option == true)
            required
        @endif
        >{{$value}}</textarea>
    </label>
</div>