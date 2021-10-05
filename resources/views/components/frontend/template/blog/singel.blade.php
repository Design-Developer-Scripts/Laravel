<x-guest-layout>

   <x-frontend.template.masthead title="{{$content->title}}"/>

    <div class="w-full px-5 py-6 mx-auto space-y-5 sm:py-8 md:py-12 sm:space-y-8 md:space-y-16 max-w-7xl">
        <div class="md:flex gap-12">
            <div class="w-full md:w-8/12">

                <div class="bg-white rounded-md shadow-md overflow-hidden">
                    @if($content->image)
                    <figure>
                        <img class="w-full" src="{{$content->image}}">
                    </figure>
                    @endif
                    <div class="px-5 md:px-12 py-12">
                        <hr class="py-5" />
                        {{$content->content}}
                        
                    </div>
                </div>
                
            </div>
            <div class="w-full md:w-4/12">

            </div>
        </div>
    </div>
    <div class="w-full px-5 py-6 mx-auto space-y-5 sm:py-8 md:py-12 sm:space-y-8 md:space-y-16 max-w-7xl">
        <x-frontend.template.blog.carousel />
    </div>
    

    <x-frontend.template.logos/>

</x-guest-layout>
