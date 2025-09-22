<section class="relative min-h-screen flex items-center overflow-hidden pt-20">
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-gradient-to-b from-transparent to-background"></div>
    </div>
    <div class="container mx-auto px-4 md:px-6 z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="space-y-6 animate-fade-in">
                <span class="inline-block px-3 py-1 bg-secondary text-sm font-medium rounded-full">Colecciones Premium</span>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold tracking-tight">Descubre el mundo de las cartas coleccionables</h1>
                <p class="text-lg md:text-xl text-muted-foreground">Explora nuestra selección exclusiva de cartas TCG de las mejores series. Desde rarezas hasta ediciones limitadas.</p>
                <div class="flex flex-col sm:flex-row gap-4 pt-4">
                    <button class="h-10 bg-gray-950 text-white hover:bg-gray-950/80 px-4 py-2 hover:cursor-pointer  duration-200 shadow-sm inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg]:size-4 [&_svg]:shrink-0">
                        Explorar Colección
                        <span class="ml-2 h-4 w-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                            </svg>
                        </span>
                    </button>
                    <button class="h-10 border border-input bg-background hover:bg-gray-100/80 hover:text-accent-foreground hover:cursor-pointer rounded-md px-4 py-2 text-sm font-medium transition-all duration-200 ">
                        Últimos Lanzamientos
                    </button>
                </div>
            </div>
            <div class="relative h-[400px] md:h-[500px] lg:h-[600px]">
                <div class="absolute inset-0 transition-all duration-700 ease-in-out transform hover:rotate-5 hover:scale-110">
                    <div class="relative h-full w-full">
                        <img class="h-full w-full object-contain shadow-[0_10px_25px_-15px_rgba(0,0,0,0.3)] rounded-lg" src="{{ asset('assets/img/banners/banner_700x600.png') }}" alt="">
                        <div class="absolute inset-0 bg-gradient-to-t from-background/20 to-transparent rounded-lg"></div>
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-100/70 to-transparent"></div>
                </div>
            </div>
        </div>
    </div>
</section>