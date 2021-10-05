<x-guest-layout>

    <section class="w-full px-6 pb-12 antialiased bg-gray-200 background-start">
    <div class="mx-auto max-w-7xl">

        <x-frontend.template.navigation/>

        <!-- Main Hero Content -->
        <div class="container max-w-lg px-4 py-48 mx-auto text-left md:max-w-none md:text-center">
            <h1 class="text-5xl font-extrabold leading-10 tracking-tight text-left text-gray-900 md:text-center sm:leading-none md:text-6xl lg:text-7xl"><span class="inline md:block">Blog</span> <span class="relative mt-2 text-transparent bg-clip-text bg-gradient-to-br from-blue-600 to-blue-500 md:inline-block">what you need to know</span></h1>
            
        </div>
        <!-- End Main Hero Content -->

    </div>
</section>


    <div class="w-full px-5 py-6 mx-auto space-y-5 sm:py-8 md:py-12 sm:space-y-8 md:space-y-16 max-w-7xl">
        <div class="md:flex gap-12 relative">
            <div class="w-full md:w-9/12">

                @foreach($content as $value)
                    <x-frontend.template.blog.card  slug="{{$value->slug}}" image="{{$value->image}}" title="{{$value->title}}" subline="{{$value->subline}}" />
                @endforeach

                <div class="">
                    {{ $content->render(('pagination::tailwind')) }}
                </div>
            </div>
            <div class="w-full md:w-3/12">
                <figure class="rounded-md shadow-md overflow-hidden sticky top-0 block">
                    <img src="https://picsum.photos/200/300" alt="" title="" class="w-full " />
                </figure>
            </div>
        </div>
    </div>

    <x-frontend.template.logos/>

</x-guest-layout>
