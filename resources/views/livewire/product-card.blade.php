<div class="animate-fade-in">
    <a class="group bloc">
        <div class="relative overflow-hidden rounded-lg bg-white shadow-md transition-all duration-300 ease-out hover:translate-y-[-5px] hover:shadow-xl">
            <div class="relative aspect-[3/4] overflow-hidden bg-gray-100">
                <img class="absolute inset-0 h-full w-full object-contain transition-transform duration-500 scale-100" src="{{asset($productImg)}}" alt="">
                <span class="absolute top-2 left-2 bg-black/80 text-white text-xs px-2 py-1 rounded">{{ $rareza }}</span>
                <div class="absolute inset-0 bg-black/40 flex items-center justify-center hover:opacity-100 opacity-0 transition-opacity duration-300">
                    <div class="flex gap-2">
                        <button class="h-10 w-10 rounded-full bg-white text-black hover:bg-white/90 hover:cursor-pointer" wire:click="$js.addToFav">
                            <span class="h-4 w-4">♥️</span>
                            <span class="sr-only">Añadir a favoritos</span>
                        </button>
                        <button class="h-10 w-10 rounded-full bg-white text-black hover:bg-white/90 hover:cursor-pointer" wire:click="addToCart">
                            <span class="h-4 w-4">🛒</span>
                            <span class="sr-only">Añadir al carrito</span>
                        </button>
                        <a href={{ Route('producto' , ['id' => $productId]) }}>
                            <button class="h-10 w-10 rounded-full bg-white text-black hover:bg-white/90 hover:cursor-pointer">
                                <span class="h-4 w-4">👁️‍🗨️</span>
                                <span class="sr-only">Ver detalles</span>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="p-4">
                <div class="mb-1 text-xs text-muted-foreground">
                    {{ $categoria }}
                </div>
                <h3 class="text-sm font-medium line-clamp-2 mb-2">
                    {{ $nombre }}
                </h3>
                <div class="flex items-center justify-between">
                    <span class="font-bold">${{$price}}</span>
                </div>
            </div>
        </div>
    </a>
</div>

@script
<script>
    $js('addToFav' , ()=> {
        let favList = localStorage.getItem('favList');
        
        if (!favList) {
            localStorage.setItem('favList' , JSON.stringify([$wire.productId,]));
        }

        if (favList) {
            const list = JSON.parse(favList);
            let newList = list.filter(idProd => idProd !== $wire.productId);
            
        }
    })
</script>
@endscript