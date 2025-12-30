@php
    function remoteImageExists($url)
    {
        return @getimagesize($url) ? true : false;
    }
@endphp

<div class="bg-white mx-auto">
    @section('content')
        <div name="header" class="mx-auto w-full text-center">
            <div class="py-24 sm:py-32 bg-center bg-no-repeat bg-cover"
                style="background-image: url('/banner/slider/BannerSlider.png');">
                <div class="mx-auto px-6 lg:px-8">
                    <h2 class="text-center text-2xl font-semibold text-white">Noticias</h2>
                </div>
            </div>
        </div>

        <div class="py-6 px-12 max-w-6xl mx-auto">
            <div class="mx-auto">
                <div class="overflow-hidden my-5">
                    <div class="border border-gray-200 rounded-none py-5">
                        <div class="relative overflow-x-auto sm:rounded-lg">
                            <table class="min-w-full rounded-xl table-auto">
                                <thead class="text-center">
                                    <tr class="bg-gray-50 text-center">
                                        <th scope="col"
                                            class="p-5 text-sm leading-6 font-semibold text-gray-900 capitalize rounded-t-xl">
                                            Imagen
                                        </th>
                                        <th scope="col"
                                            class="p-5 text-sm leading-6 font-semibold text-gray-900 capitalize">
                                            Titulo
                                        </th>
                                        <th scope="col"
                                            class="p-5 text-sm leading-6 font-semibold text-gray-900 capitalize">
                                            Descripción
                                        </th>
                                        <th>

                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-300 ">
                                    @if (count($posts) > 0)
                                        @foreach ($posts as $post)
                                            <tr class="bg-white transition-all duration-500 hover:bg-gray-50">
                                                <td
                                                    class="p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900">
                                                    <img class="w-20 rounded mx-auto"
                                                        src="{{ remoteImageExists($post->img) ? $post->img : '/img/default.png' }}"
                                                        alt="{{ $post->titulo }}" />
                                                </td>
                                                <td
                                                    class="p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900">
                                                    {{ $post->titulo }}
                                                </td>
                                                <td
                                                    class="p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900">
                                                    <p class="text-justify hyphens-auto line-clamp-2 text-wrap"> {{ $post->descripcion }} </p>
                                                </td>
                                                <td class="p-5">
                                                    <div class="flex items-center gap-1 text-sm">
                                                        <button wire:click.prevent="viewPost({{ $post->id }})"
                                                            class="rounded-full group transition-all duration-500 flex item-center bg-jmapaYellow text-white p-3 px-5 hover:bg-jmapaBlueDark">
                                                            Ver <x-icon class="w-5 h-5 ml-1" name="eye" color="#FFFFFF" />
                                                        </button>
                                                        <!-- <a href="{{ route('view-post', $post->id) }}" class="rounded-full group transition-all duration-500 flex item-center bg-jmapaYellow text-white p-3 px-5 hover:bg-jmapaBlueDark">
                                                            Ver post <x-icon class="w-5 h-5 ml-1" name="eye" color="#FFFFFF" />
                                                        </a> -->
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="5" class="text-center">
                                                No Posts Found.
                                            </td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
</div>
