@extends('layouts.app')
@section('title' , 'Helios Guard - Productos')

@section('content')
<div class="bg-white">
    <div class="container mt-16 mx-auto px-4 py-8">
        <div class="mb-8">
            <h1 class="text-3xl font-bold mb-4">Todas los productos</h1>
            <p class="text-gray-400">
                Explorar nuestra colección de cartas TCG y encuentra tu próxima adquisición.
            </p>
        </div>

        <div class="flex flex-col md:flex-row justify-between gap-4 mb-8">
            <form class="flex-1 max-w-md">
                <div class="relative">
                    <input type="text" placeholder="Buscar" class="pr-10 flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none disabled:cursor-not-allowed disabled:opacity-50 md:text-sm">
                    <button type="submit" class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 hover:text-gray-900 hover:cursor-pointer">
                        <span class="h-4 w-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                            </svg>
                        </span>
                    </button>
                </div>
            </form>
            <div class="flex items-center gap-2">
                <select name="" id="" class="flex h-10 w-[180px] items-center justify-between rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 [&>span]:line-clamp-1">
                    <option value="">Más nuevos</option>
                    <option value="">Precio: Mayor a Menor</option>
                    <option value="">Precio: Menor a Mayor</option>
                    <option value="">Nombre: A-Z</option>
                    <option value="">Nombre: Z-A</option>
                </select>
                <button class="md:hidden bg-transparent hover:bg-accent hover:text-accent-foreground">
                    <span class="h-10 w-10"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6h9.75M10.5 6a1.5 1.5 0 1 1-3 0m3 0a1.5 1.5 0 1 0-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-9.75 0h9.75" />
                        </svg>
                    </span>
                </button>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
            <div class="hidden lg:block">
                <div class="bg-white rounded-lg border p-4 sticky top-4">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="font-medium flex items-center gap-2">
                            <span class="h-4 w-4">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 3c2.755 0 5.455.232 8.083.678.533.09.917.556.917 1.096v1.044a2.25 2.25 0 0 1-.659 1.591l-5.432 5.432a2.25 2.25 0 0 0-.659 1.591v2.927a2.25 2.25 0 0 1-1.244 2.013L9.75 21v-6.568a2.25 2.25 0 0 0-.659-1.591L3.659 7.409A2.25 2.25 0 0 1 3 5.818V4.774c0-.54.384-1.006.917-1.096A48.32 48.32 0 0 1 12 3Z" />
                                </svg>
                            </span>
                            Filtros
                        </h3>
                    </div>
                    <div class="mb-6 pb-4 border-b border-gray-200">
                        <h2 class="text-xl font-semibold mb-3 text-gray-800">Juego</h2>
                        <div class="space-y-2">
                            <label class="flex items-center cursor-pointer">
                                <input type="checkbox" class="form-checkbox h-5 w-5 ">
                                <span class="ml-2 text-gray-700">Pokémon</span>
                            </label>
                            <label class="flex items-center cursor-pointer">
                                <input type="checkbox" class="form-checkbox h-5 w-5 ">
                                <span class="ml-2 text-gray-700">Yu-Gi-Oh!</span>
                            </label>
                            <label class="flex items-center cursor-pointer">
                                <input type="checkbox" class="form-checkbox h-5 w-5 ">
                                <span class="ml-2 text-gray-700">Magic: The Gathering</span>
                            </label>
                        </div>
                    </div>
                    <!-- Filtro: Rareza -->
                    <div class="mb-6 pb-4 border-b border-gray-200">
                        <h2 class="text-xl font-semibold mb-3 text-gray-800">Rareza</h2>
                        <div class="space-y-2">
                            <label class="flex items-center cursor-pointer">
                                <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600">
                                <span class="ml-2 text-gray-700">Ultra Raro</span>
                            </label>
                            <label class="flex items-center cursor-pointer">
                                <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600">
                                <span class="ml-2 text-gray-700">Raro</span>
                            </label>
                            <label class="flex items-center cursor-pointer">
                                <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600">
                                <span class="ml-2 text-gray-700">Mítico</span>
                            </label>
                            <label class="flex items-center cursor-pointer">
                                <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600">
                                <span class="ml-2 text-gray-700">Promocional</span>
                            </label>
                        </div>
                    </div>

                    <!-- Filtro: Condición -->
                    <div class="mb-6 pb-4 border-b border-gray-200">
                        <h2 class="text-xl font-semibold mb-3 text-gray-800">Condición</h2>
                        <div class="space-y-2">
                            <label class="flex items-center cursor-pointer">
                                <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600">
                                <span class="ml-2 text-gray-700">Mint</span>
                            </label>
                            <label class="flex items-center cursor-pointer">
                                <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600">
                                <span class="ml-2 text-gray-700">Near Mint</span>
                            </label>
                            <label class="flex items-center cursor-pointer">
                                <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600">
                                <span class="ml-2 text-gray-700">Excellent</span>
                            </label>
                            <label class="flex items-center cursor-pointer">
                                <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600">
                                <span class="ml-2 text-gray-700">Good</span>
                            </label>
                            <label class="flex items-center cursor-pointer">
                                <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600">
                                <span class="ml-2 text-gray-700">Played</span>
                            </label>
                        </div>
                    </div>

                    <!-- Filtro: Precio -->
                    <div class="mb-6 pb-4 border-b border-gray-200">
                        <h2 class="text-xl font-semibold mb-3 text-gray-800">Precio</h2>
                        <div class="space-y-4 mt-2">
                            <input type="range" step="100" class="my-4 h-full bg-primary relative flex w-full touch-none select-none items-center" min="0" max="10000">
                            <div class="flex items-center justify-between">
                                <span>Min</span>
                                <span>Max</span>
                            </div>
                        </div>
                    </div>

                    <div class="mb-6 pb-4 border-b border-gray-200 flex justify-center items-center">
                        <button class="btn">Filtrar</button>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-3">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach ($products as $product)
                    <livewire:product-card
                        wire:key="$product->id"
                        :productId="$product->id"
                        :productImg="$product->gallery_path"
                        :nombre="$product->name"
                        :categoria="$product->category->category"
                        :price="$product->selling_price"
                        :rareza="@isset($product->rarity->rarity) ? $product->rarity->rarity : $product->product_type" />
                    @endforeach
                </div>
            </div>
            <div class="lg:col-span-3">{{ $products->links() }}</div>
        </div>
    </div>
</div>
@endsection