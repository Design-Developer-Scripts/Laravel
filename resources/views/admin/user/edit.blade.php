<x-dashboard>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <a href="{{route('user.index')}}">
                {{ __('User') }}
            </a>
        </h2>
    </x-slot>

    <form class="py-7 max-w-7xl mx-auto sm:px-6 lg:px-8 mb-24" method="post" action="{{route('dashboard.user.update',$content->id)}}">
        <div class="flex gap-4">
            @csrf
            @method('PUT')
            <div class="w-8/12 bg-white overflow-hidden shadow-xl sm:rounded-lg px-7 py-12">
                <x-dashboard.form.input title="Name" option="true" type="text" name="name" value="{{$content->name}}" />

                <x-dashboard.form.input title="E-Mail" option="true" type="email" name="email" value="{{$content->email}}" />

                <x-dashboard.form.input title="Passwort" option="" type="password" name="password" value="" />
                    @php
                    /*
                    print'<pre>';
                    print_r($content);
                    print'</pre>';
                    */
                    @endphp          
            </div>
            <div class="w-4/12 bg-white overflow-hidden shadow-xl sm:rounded-lg px-7 py-12">
                <x-dashboard.form.label title="Status" />
                <x-dashboard.form.status status="{{$content->status}}" name="status" />
            </div>
        </div>
        <button type="submit" class="mt-14 flex justify-center items-center w-full bg-green-500 hover:bg-green-600 rounded-full py-3 px-4 transition-all duration-300 ease-in-out shadow-xl">
            <div class="flex align-middle">
                <x-icons.save />
                <span class="ml-1">Speichern</span>
            </div>
        </button>
    </form>
</x-dashboard>