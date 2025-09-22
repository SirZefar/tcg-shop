@extends('layouts.app')
@section('title', 'Helios Guard')
@section('content')
    @include('templates.heroSection');
    <x-highlights title="Recien Agregados" subtitle="Descubre los productos mas nuevos" :info=$new_brandes/>
    <x-highlights title="Destacados" subtitle="Nuestros clientes aman estos productos" :info=$notables/>
    <section class="py-16 bg-gray-100">
        <div class="container mx-auto px-4 md:px-6">
            <h2 class="text-3xl font-bold tracking-tight text-center mb-12">Categorias</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="group relative overflow-hidden rounded-lg shadow-md bg-white animate-fade-in">
                    <div class="aspect-video overflow-hidden bg-gray-100">
                        <img class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-110"
                            src="" alt="">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 p-6">
                        <h3 class="text-xl font-bold text-white mb-2">Pokémon TCG</h3>
                        <button
                            class="border border-input bg-background hover:cursor-pointer hover:bg-accent hover:text-accent-foreground rounded-md px-4 py-2 text-sm font-medium transition-all duration-200 bg-white/20 backdrop-blur-sm border-white/30 text-white hover:bg-white/30">
                            Explorar
                        </button>
                    </div>
                </div>
                <div class="group relative overflow-hidden rounded-lg shadow-md bg-white animate-fade-in">
                    <div class="aspect-video overflow-hidden bg-gray-100">
                        <img class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-110"
                            src="" alt="">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 p-6">
                        <h3 class="text-xl font-bold text-white mb-2">YU-GI-OH TCG</h3>
                        <button
                            class="border border-input bg-background hover:cursor-pointer hover:bg-accent hover:text-accent-foreground rounded-md px-4 py-2 text-sm font-medium transition-all duration-200 bg-white/20 backdrop-blur-sm border-white/30 text-white hover:bg-white/30">
                            Explorar
                        </button>
                    </div>
                </div>
                <div class="group relative overflow-hidden rounded-lg shadow-md bg-white animate-fade-in">
                    <div class="aspect-video overflow-hidden bg-gray-100">
                        <img class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-110"
                            src="" alt="">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 p-6">
                        <h3 class="text-xl font-bold text-white mb-2">Lorcana</h3>
                        <button
                            class="border border-input bg-background hover:cursor-pointer hover:bg-accent hover:text-accent-foreground rounded-md px-4 py-2 text-sm font-medium transition-all duration-200 bg-white/20 backdrop-blur-sm border-white/30 text-white hover:bg-white/30">
                            Explorar
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
