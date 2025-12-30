<div class="bg-white py-16 max-w-2xl mx-auto">
    @section('content')
        <div name="header" class="mx-auto w-full text-center">
            <div class="py-24 sm:py-32 bg-center bg-no-repeat bg-cover"
                style="background-image: url('/banner/slider/BannerSlider.png');">
                <div class="mx-auto px-6 lg:px-8">
                    <h2 class="text-center text-2xl font-semibold text-white">Gestión Social</h2>
                </div>
            </div>
        </div>

        @livewire('pages.web.gestion-social')
    @endsection
</div>
