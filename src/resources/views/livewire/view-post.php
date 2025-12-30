<div class="bg-white py-16 max-w-2xl mx-auto">
    @section('content')
        <div name="header" class="mx-auto w-full text-center">
            <div class="py-24 sm:py-32 bg-center bg-no-repeat bg-cover"
                style="background-image: url('/banner/slider/BannerSlider.png');">
                <div class="mx-auto px-6 lg:px-8">
                    <h2 class="text-center text-2xl font-semibold text-white">{{ $post->titulo }}</h2>
                </div>
            </div>
        </div>

        <div class="py-6 px-12 max-w-6xl mx-auto">
            <div class="mx-auto">
                <div class="grid xl:grid-cols-2 lg:grid-col-2 md:grid-col-2 sm:grid-col-1 xs:grid-col-1">
                    <div class="items-center">
                        <img class="w-64 h-auto rounded mx-auto" src="{{ $post->img }}" alt="">
                    </div>
                    <div class="text-justify px-6 mt-2">
                        <h1 class="text-pretty text-3xl font-bold tracking-tight text-jmapaBlue">{{ $post->titulo }}</h1>
                        <div class="py-6"> 
                            {{ $post->contenido }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
</div>