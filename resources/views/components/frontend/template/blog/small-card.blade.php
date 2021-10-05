<div class="flex flex-col items-start col-span-12 space-y-3 sm:col-span-6 xl:col-span-4">
    <a href="{{route('blog.singel',$slug)}}" class="block">
        <img class="object-cover w-full mb-2 overflow-hidden rounded-lg shadow-sm" src="{{$image}}">
    </a>
    
    <h2 class="text-2xl font-bold sm:text-xl md:text-2xl hover:text-blue-700"><a href="{{route('blog.singel',$slug)}}">{{$title}}</a></h2>
    <p class="text-sm text-gray-500">{{$subline}}</p>
    
</div>