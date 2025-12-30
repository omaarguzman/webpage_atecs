@php
    function remoteImageExists($url)
    {
        return @getimagesize($url) ? true : false;
    }
@endphp

<div class="mx-auto max-w-6xl p-12 bg-jmapaBlueLight">
    <div class="font-bold text-2xl text-center">
        <h2>NOTICIAS</h2>
    </div>

    <div class="flex items-center justify-center space-x-10 mb-4 mt-5 mx-auto max-w-6xl">
        @if (count($posts) > 0)
            @foreach ($posts as $i => $post)
                @if ($i < 3)
                    <div class="max-w-sm bg-white border border-gray-200 rounded-none shadow">
                        <a href="#">
                            <img class="h-70 w-full"
                                src="{{ remoteImageExists($post->img) ? $post->img : '/img/default.png' }}"
                                alt="{{ $post->titulo }}" />
                        </a>
                        <div class="p-5">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-blue-800">
                                {{ $post->titulo }}
                            </h5>
                            <p class="mb-3 font-normal text-gray-700 line-clamp-3 text-justify">
                                {{ $post->descripcion }}
                            </p>
                        </div>
                    </div>
                @endif
            @endforeach
        @endif
    </div>
    @if (count($posts) > 0)
        <div class="flex items-center justify-center pt-12">
            <a href="/all-posts" wire:navigate
                class="text-lg font-semibold text-white bg-jmapaYellow rounded-lg p-3 px-5 hover:bg-jmapaBlueDark uppercase">
                Ver más <x-icon name="caret-right" class="w-7 h-7 inline -mt-1" solid color="#ffffff" />
            </a>
        </div>
    @endif
</div>
