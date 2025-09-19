@extends('layouts.app')
@section('title', 'Inicio - Helios Guard')

@section('content')
    <div class="min-h-screen">
        <main class="pt-24 pb-16">
            <div class="container mx-auto px-4 md:px-6">
                <div class="flex items-center text-sm mb-8">
                    <a class="text-muted-foreground hover:text-foreground transition-colors" href="#">
                        Inicio
                    </a>
                    <span class="h-4 w-4 mx-2 text-muted-foreground">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                        </svg>
                    </span>
                    <a class="text-muted-foreground hover:text-foreground transition-colors" href="#">
                        Productos
                    </a>
                    <span class="h-4 w-4 mx-2 text-muted-foreground">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                        </svg>
                    </span>
                    <span class="font-medium">
                        Charizard Holo 1st Edition - Base Set
                    </span>
                </div>
                <!-- Detalles del Producto !-->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                    <!-- Imagenes del Producto -->
                    <div class="space-y-4">
                        <div class="aspect-square bg-white rounded-lg overflow-hidden">
                            <img class="h-full w-full object-contain p-4 tcg-card-shadow"
                                src="https://static.tcgcollector.com/content/images/0c/48/79/0c48792192325dbc65a3e02e9552669de02deab5ba500a559429cb1041de7e1e.jpg"
                                alt="">
                        </div>
                        <div class="flex gap-4 overflow-x-auto pb-2">
                            <button class="relative h-20 w-20 rounded-md overflow-hidden border-2 border-transparent">
                                <img class="h-full w-full object-cover"
                                    src="https://static.tcgcollector.com/content/images/0c/48/79/0c48792192325dbc65a3e02e9552669de02deab5ba500a559429cb1041de7e1e.jpg"
                                    alt="">
                            </button>
                        </div>
                    </div>
                    <!-- Producto Info !-->
                    <div class="animate-slide-in">
                        <div class="mb-6">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="px-2 py-1 bg-gray-100 text-xs font-medium rounded">Pokémon TCG</span>
                                <span class="px-2 py-1 bg-black text-white text-xs font-medium rounded">Ultra Raro</span>
                            </div>
                            <h1 class="text-3xl font-bold tracking-tight">Charizard Holo 1st Edition - Base Set</h1>
                            <div class="mt-4 text-3xl font-bold">$4000.00$</div>
                            <div class="mt-6 space-y-6">
                                <p class="text-muted-foreground">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Sapiente blanditiis similique, et rem quia vel tempora voluptatibus esse deleniti ipsam
                                    itaque modi. Veritatis culpa ducimus illum sit, maiores officiis est!</p>
                                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                                    <div class="bg-gray-100 rounded-lg p-3">
                                        <div class="text-xs text-muted-foreground">Estado</div>
                                        <div class="font-medium">Near Mint</div>
                                    </div>
                                    <div class="bg-gray-100 rounded-lg p-3">
                                        <div class="text-xs text-muted-foreground">Año</div>
                                        <div class="font-medium">1994</div>
                                    </div>
                                    <div class="bg-gray-100 rounded-lg p-3">
                                        <div class="text-xs text-muted-foreground">Set</div>
                                        <div class="font-medium">Base Set</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="mr-6">
                                        <label class="block text-sm mb-1" for="">Cantidad</label>
                                        <div class="flex items-center border rounded-md w-32">
                                            <button class="w-10 h-10 flex items-center justify-center"> - </button>
                                            <input type="number"
                                                class="w-12 h-10 text-center border-none focus:outline-none" min="1"
                                                type="text">
                                            <button class="w-10 h-10 flex items-center justify-center"> + </button>
                                        </div>
                                    </div>
                                    <div class="text-sm">
                                        <span class="text-green-600">En Stock</span>
                                    </div>
                                </div>
                                <div class="flex flex-col sm:flex-row gap-4">
                                    <button
                                        class="flex-1 bg-gray-950 text-green-50 hover:bg-primary/90 rounded-md px-4 py-2 text-sm font-medium transition-all duration-200 shadow-sm">
                                        <span class="mr-2 h-4 w-4">🛒</span>
                                        Añadir a carrito
                                    </button>
                                    <button
                                        class="flex-1 border border-input bg-white hover:bg-accent hover:text-accent-foreground rounded-md px-4 py-2 text-sm font-medium transition-all duration-200">
                                        <span class="mr-2 h-4 w-4">⭐</span>
                                        Añadir a favoritos
                                    </button>
                                </div>
                            </div>
                            <div class="border-t pt-6 mt-8 space-y-4">
                                <div class="flex items-center gap-3 text-sm">
                                    <span class="h-5 w-5 text-muted-foreground">🛡️</span>
                                    <span>Autenticidad garantizada por expertos</span>
                                </div>
                                <div class="flex items-center gap-3 text-sm">
                                    <span class="h-5 w-5 text-muted-foreground">🏅</span>
                                    <span>Calidad premium, cuidadosamente inspeccionada</span>
                                </div>
                                <div class="flex items-center gap-3 text-sm">
                                    <span class="h-5 w-5 text-muted-foreground">🚚</span>
                                    <span>Envío seguro con seguimiento y protección</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @include('templates.destacados');
            </div>
        </main>
    </div>
@endsection
