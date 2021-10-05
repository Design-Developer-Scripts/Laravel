<div class="flex gap-4">      
    <div class="w-8/12 bg-white overflow-hidden shadow-xl sm:rounded-lg px-7 py-12">
        <x-dashboard.form.input title="Titel" option="true" type="text" name="title" value="{{$content->title}}" />

        <x-dashboard.form.input title="URL" option="" type="text" name="slug" value="{{$content->slug}}" />

        <x-dashboard.form.textarea title="Kurztext (max:255 Zeichen)" option="true" name="subline" value="{{$content->subline}}" />

        <x-dashboard.form.textarea title="Inhalt" option="true" name="content" value="{{$content->content}}" />      
    </div>
    
    <div class="w-4/12 bg-white overflow-hidden shadow-xl sm:rounded-lg px-7 py-12">
        <x-dashboard.form.label title="Status" />
        <x-dashboard.form.status status="{{$content->status}}" name="status" />

        <x-dashboard.form.image photo="{{$content->image}}" input="image" title="Blog Bild" width="800" height="500"/>
    </div>
</div>