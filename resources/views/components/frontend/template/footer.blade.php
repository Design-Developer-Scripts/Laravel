
<!-- Section 1 -->
<section class="bg-gray-100 text-gray-700 body-font">
    <div class="container flex flex-col items-center px-8 py-8 mx-auto max-w-7xl sm:flex-row">
        <p class="mt-4 text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:mt-0">© 2021 <a href="https://design-developer.de" target="_blank">Design-Developer</a></p>
        <ul class="inline-flex justify-center mt-4 space-x-5 sm:ml-auto sm:mt-0 sm:justify-start">
            <li><a href="{{url('/')}}" class="text-sm text-gray-400 hover:text-gray-500">Home</a></li>
            <li><a href="{{route('datenschutzerklaerung')}}" class="text-sm text-gray-400 hover:text-gray-500">Datenschutzerklärung</a></li>
            <li><a href="{{route('impressum')}}" class="text-sm text-gray-400 hover:text-gray-500">Impressum</a></li>
        </ul>
    </div>
</section>
<div class="text-center text-sm text-gray-500 py-12">
    <span class="text-red-500">Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})</span>
</div>
