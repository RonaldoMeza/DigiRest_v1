<div class="w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto">
    <section class="py-10 bg-gray-50 font-poppins dark:bg-gray-800 rounded-lg">
        <div class="px-4 py-4 mx-auto max-w-7xl lg:py-6 md:px-6">
        <div class="flex flex-wrap mb-24 -mx-3">
            <div class="w-full pr-2 lg:w-1/4 lg:block">
                <div class="p-4 mb-5 bg-white border border-gray-200 dark:border-gray-900 dark:bg-gray-900">
                    <h2 class="text-2xl font-bold dark:text-gray-400"> Categorías</h2>

                    <div class="w-16 pb-2 mb-6 border-b border-digirest dark:border-digirest"></div>
                    
                    <ul>
                    {{-- Filtro de categorías --}}
                    @foreach ($categories as $category )
                    <li class="mb-4" wire:key="{{ $category->id }}">
                        <label for="{{ $category->slug }}" class="flex items-center dark:text-gray-400 ">
                        <input type="checkbox" wire:model.live="selected_categories" id="{{ $category->slug }}" value="{{ $category->id }}" 
                                class="w-4 h-4 mr-2 rounded-sm border border-gray-400 appearance-none 
                                checked:bg-digirest checked:border-digirest focus:outline-none">
                        <span class="text-lg">{{ $category->name }}</span>
                        </label>
                    </li>
                    @endforeach
                    </ul>

                </div>
            
                <div class="p-4 mb-5 bg-white border border-gray-200 dark:bg-gray-900 dark:border-gray-900">
                    <h2 class="text-2xl font-bold dark:text-gray-400">Stock del Producto</h2>
                    <div class="w-16 pb-2 mb-6 border-b border-digirest dark:border-gray-400"></div>
                    {{-- Filtro de stock (disponibilidad) --}}
                    <ul>
                        <li class="mb-4">
                            <label for="stock-1" class="flex items-center dark:text-gray-300">
                            <input type="radio" name="stock" id="stock-1" wire:model.live="stock" value="1"
                                class="appearance-none h-4 w-4 border border-gray-400 rounded-sm checked:bg-digirest checked:border-digirest 
                                    focus:outline-none transition"/>
                            <span class="ml-2 text-lg dark:text-gray-400">Disponible</span>
                            </label>
                        </li>
                        <li class="mb-4">
                            <label for="stock-0" class="flex items-center dark:text-gray-300">
                            <input type="radio" name="stock" id="stock-0" wire:model.live="stock" value="0"
                                class="appearance-none h-4 w-4 border border-gray-400 rounded-sm checked:bg-digirest checked:border-digirest 
                                    focus:outline-none transition"/>
                            <span class="ml-2 text-lg dark:text-gray-400">No Disponible</span>
                            </label>
                        </li>
                    </ul>
                </div>

            {{--     <div class="p-4 mb-5 bg-white border border-gray-200 dark:bg-gray-900 dark:border-gray-900">
                    <h2 class="text-2xl font-bold dark:text-gray-400">Precio</h2>
                    <div class="w-16 pb-2 mb-6 border-b border-digirest dark:border-gray-400"></div>
                    <div>
                        <input type="range" class="w-full h-1 mb-4 bg-gray-400 rounded appearance-none cursor-pointer" max="150" value="100000" step="20">
                        <div class="flex justify-between ">
                            <span class="inline-block text-lg font-bold text-digirestDark ">S/ {{ $prodctu }}</span>
                            <span class="inline-block text-lg font-bold text-digirestDark ">S/ 100.00</span>
                        </div>
                    </div>
                </div> --}}
            </div>
            <div class="w-full px-3 lg:w-3/4">
            <div class="px-3 mb-4">
                <div class="items-center justify-between hidden px-3 py-2 bg-gray-100 md:flex dark:bg-gray-900 ">
                <div class="flex items-center justify-between">
                    <select wire:model.live="sort" class="block w-40 text-base bg-gray-100 cursor-pointer dark:text-gray-400 dark:bg-gray-900">
                    <option value="latest">Ordenar por último</option>
                    <option value="price">Ordenar por precio</option>
                    </select>
                </div>
                </div>
            </div>
{{-- 
            <div class="flex flex-wrap items-center ">
                @foreach ($products as $product)
                <div class="w-full px-3 mb-6 sm:w-1/2 md:w-1/3" wire:key="{{ $product->id }}">
                    <div class="border border-gray-300 dark:border-gray-700">
                        <div class="relative bg-gray-200">
                            
                            <a wire:navigate href="/productos/{{ $product->slug }}" class="">
                                <img src="{{ url('storage', $product->images[0]) }}" alt=" {{ $product->name }} " class="object-cover w-full h-56 mx-auto ">
                            </a>
                        </div>
                        <div class="p-3 ">
                            <div class="flex items-center justify-between gap-2 mb-2">
                                <h3 class="text-xl font-medium dark:text-gray-400">
                                {{ $product->name }}
                                </h3>
                            </div>
                            <p class="text-lg ">
                                <span class="text-digirestDark dark:text-digirestDark font-bold">S/ {{ $product->price }}</span>
                            </p>
                        </div>

                        <div class="flex justify-center p-4 border-t border-gray-300 dark:border-gray-700">
                            <a wire:click.prevent='addToCart({{ $product->id }})' href="#" class="text-gray-500 flex items-center space-x-2 dark:text-gray-400 hover:text-digirestDark dark:hover:text-red-300">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 h-4 bi bi-cart3 " viewBox="0 0 16 16">
                                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"></path>
                                </svg><span>Añadir al carrito</span>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div> --}}


            <div class="flex flex-wrap items-center">
            @foreach ($products as $product)
                <div class="w-full px-3 mb-6 sm:w-1/2 md:w-1/3" wire:key="{{ $product->id }}">
                <div class="border border-gray-300 dark:border-gray-700 rounded-lg overflow-hidden">

                    {{-- Imagen y enlace al detalle (solo si hay stock) --}}
                    <div class="relative bg-gray-200">
                    @if($product->in_stock)
                        <a wire:navigate href="/productos/{{ $product->slug }}" class="block">
                        <img
                            src="{{ url('storage', $product->images[0]) }}"
                            alt="{{ $product->name }}"
                            class="object-cover w-full h-56 mx-auto"/>
                        </a>
                    @else
                        <div class="block opacity-50 cursor-not-allowed">
                        <img
                            src="{{ url('storage', $product->images[0]) }}"
                            alt="{{ $product->name }}"
                            class="object-cover w-full h-56 mx-auto"/>
                        </div>
                    @endif
                    </div>

                    {{-- Nombre y precio --}}
                    <div class="p-3">
                    <h3 class="text-xl font-medium dark:text-gray-400 mb-2">
                        {{ $product->name }}
                    </h3>
                    <p class="text-lg">
                        <span class="text-digirestDark font-bold">
                        S/ {{ $product->price }}
                        </span>
                    </p>
                    </div>

                    {{-- Botón “Añadir al carrito” --}}
                    <div class="flex justify-center p-4 border-t border-gray-300 dark:border-gray-700">
                    @if($product->in_stock)
                        {{-- prevent para que no se recargue al darle click al botón de añadir al carrito --}}
                        <a wire:click.prevent='addToCart({{ $product->id }})' href="#" class="btn-section text-black">
                        {{-- SVG completo para el carrito --}}
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 
                                    .485.379L2.89 3H14.5a.5.5 0 0 1 
                                    .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472
                                    L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 
                                    1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 
                                    0 0 1-.5-.5zM3.102 4l.84 4.479 
                                    9.144-.459L13.89 4H3.102zM5 12a2 
                                    2 0 1 0 0 4 2 2 0 0 0 0-4zm7 
                                    0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 
                                    1a1 1 0 1 1 0 2 1 1 0 0 1 
                                    0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 
                                    1 0-2z"/>
                        </svg>
                        <span wire:loading.remove wire:target='addToCart({{ $product->id }})'>Añadir al carrito</span>
                        <span wire:loading wire:target='addToCart({{ $product->id }})'>...</span>
                        </a>
                    @else
                        <a href="#" aria-disabled="true" class="text-gray-500 flex items-center space-x-2 dark:text-gray-400 
                                opacity-50 cursor-not-allowed pointer-events-none transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 
                                    .485.379L2.89 3H14.5a.5.5 0 0 1 
                                    .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472
                                    L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 
                                    1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 
                                    0 0 1-.5-.5zM3.102 4l.84 4.479 
                                    9.144-.459L13.89 4H3.102zM5 12a2 
                                    2 0 1 0 0 4 2 2 0 0 0 0-4zm7 
                                    0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 
                                    1a1 1 0 1 1 0 2 1 1 0 0 1 
                                    0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 
                                    1 0-2z"/>
                        </svg>
                        <span>Añadir al carrito</span>
                        </a>
                    @endif
                    </div>
                </div>
                </div>
            @endforeach
            </div>


            <!-- pagination start -->
            <div class="flex justify-end mt-6">
                {{ $products->links() }}
            </div>
            <!-- pagination end -->

            </div>
        </div>
        </div>
    </section>
</div>

<!--------------- SWEET ALERT PARA EL CARRITO ----------------->
@script
<script type="text/javascript">
    document.addEventListener("sweet.success", event => {
        Swal.fire({
            toast:true,
            position:"bottom",
            icon: "success",
            title: "¡Añadido exitosamente!",
            showConfirmButton: false,
            timer: 1500
        });
    });
</script>
@endscript