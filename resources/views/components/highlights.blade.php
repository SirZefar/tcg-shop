<!-- Productos Relacionados -->
<div class="mt-24">
    <section class="py-16">
        <div class="container mx-auto px-4 md:px-6">
            <div class="flex justify-between items-start md:items-center mb-8 gap-6">
                <div>
                    <!-- Titulo -->
                    <h2 class="text-3xl font-bold tracking-tight">{{$title}}</h2>
                    <!-- Subtitle -->
                    <p class="text-muted-foreground mt-2">{{$subtitle}}</p>
                </div>
                <!-- Link con filtros agregados -->
                <a class="group inline-flex items-center text-sm font-medium" href="">
                    Ver todo
                    <span class="ml-2 h-4 w-4 transition-transform group-hover:translate-x-1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                        </svg>
                    </span>
                </a>
            </div>
            @if (@isset($info))
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach ($info as $product)
                <livewire:product-card
                    wire:key="$product->id"
                    :id="$product->id"
                    :productImg="$product->gallery_path"
                    :nombre="$product->name"
                    :categoria="$product->category->category"
                    :price="$product->selling_price"
                    :rareza="@isset($product->rarity->rarity) ? $product->rarity->rarity : $product->product_type" />
                @endforeach
            </div>
            @endif
        </div>
    </section>
</div>