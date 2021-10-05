<div class="w-full border-1 bg-white rounded-md shadow-md mb-16 overflow-hidden">
    <img class="w-full" src="{{$image}}">
    
    <div class="px-5 md:px-12 py-12">
        <hr class="py-5" />
        <h2 class="text-2xl font-bold sm:text-xl md:text-3xl mb-5 text-center"><a href="{{route('blog.singel',$slug)}}">{{$title}}</a></h2>
        <p class="text-base text-gray-500">{{$subline}}</p>
        <a href="{{route('blog.singel',$slug)}}" class="inline-flex items-center mt-7 px-5 py-3 text-base font-medium hover:text-blue-700">
        Weiterlesen
        <svg class="ml-1 h-5 inline-block" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h13M12 5l7 7-7 7"/></svg>
        </a>
    </div>
</div>