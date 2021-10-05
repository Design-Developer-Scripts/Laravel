<div class="grid grid-cols-12 gap-7 pb-10 sm:px-5 gap-x-8 gap-y-16 my-24">
    
    @foreach(\App\Models\Blog::select()->where('status',true)->inRandomOrder()->limit(6)->get() as $value)
        <x-frontend.template.blog.small-card  slug="{{$value->slug}}" image="{{$value->image}}" title="{{$value->title}}" subline="{{$value->subline}}" />
    @endforeach
    
</div>
<div class="container mx-auto w-full md:w-8/12 flex justify-center my-12 px-7">
    <a href="{{route('blog.index')}}" class="hover_effect px-8 py-4 text-base font-medium text-blue-700 bg-blue-100 border border-transparent rounded-full hover:bg-blue-200">Alle Blog einträge</a>
</div>