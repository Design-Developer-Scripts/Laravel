<div class="flex gap-4">      
    <div class="w-8/12 bg-white overflow-hidden shadow-xl sm:rounded-lg px-7 py-12">

        @if(count($errors) > 0)
            @foreach($errors->all() as $message)
                <p class="text-red-500 my-2">{{$message}}</p>
            @endforeach
        @endif

        <x-dashboard.form.input title="Titel" option="true" type="text" name="title" value="{{old('title')}}" />


        <x-dashboard.form.textarea title="Kurztext (max:255 Zeichen)" option="true" name="subline" value="{{old('subline')}}" />

        <x-dashboard.form.textarea title="Inhalt" option="true" name="content" value="{{old('content')}}" />      
    </div>
    
    <div class="w-4/12 bg-white overflow-hidden shadow-xl sm:rounded-lg px-7 py-12">
        <x-dashboard.form.label title="Status" />
        <x-dashboard.form.status status="true" name="status" />

        <x-dashboard.form.image photo="" input="image" title="Blog Bild" width="800" height="500"/>
    </div>
</div>