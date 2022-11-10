<x-app-layout>
    <div class="container">
        @livewire('slider')
    </div>

    @livewire('barra-categorias')

    <section class="container py-10">
        <div class="flex items-center mb-3">
            <h2 class="fond-bold tex-gray-700 text-lg uppercase">Escoge tu categoría</h2>
                
            {{-- <a href="{{ route('categories.show', $category )}}" class="text-fuchsia-500 hover:text-violet-500 hover:underline ml-3 font-semibold">Ver más...</a> --}}

        </div>
       

        @livewire('categories-slider', ['categories' => $categories]) 
    </section>

    @livewire('barra-anuncio')

    @livewire('cards-ofertas')

    @livewire('barra-moda')

    @livewire('cards-modas')

    

    @push('script')
        <script>
            new Glider(document.querySelector('.glider'), {
                slidesToShow: 1,
                slidesToScroll: 1,
                draggable: true,
                dots: '.dots',
                arrows: {
                 prev: '.glider-prev',
                 next: '.glider-next'
                },
                responsive: [
                    {
                        breakpoint: 640,
                        settings: {
                            slidesToShow: 3.5,
                            slidesToScroll: 3,
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 4.5,
                            slidesToScroll: 4,
                        }
                    },
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 5.5,
                            slidesToScroll: 5,
                        }
                    },
                    {
                        breakpoint: 1280,
                        settings: {
                            slidesToShow: 5.5,
                            slidesToScroll: 2,
                        }
                    },
                ]
            });
        </script>
    @endpush

</x-app-layout>