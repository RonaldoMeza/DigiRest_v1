<div class="w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto">
    <div class="container mx-auto px-4">
        <h1 class="text-2xl font-semibold mb-4">Carrito de compras</h1>
        <div class="flex flex-col md:flex-row gap-4">
        <div class="md:w-3/4">
            <div class="bg-white overflow-x-auto rounded-lg shadow-md p-6 mb-4">
            <table class="w-full">
                <thead>
                <tr>
                    <th class="text-left font-semibold">Producto</th>
                    <th class="text-left font-semibold">Precio unitario</th>
                    <th class="text-left font-semibold">Cantidad</th>
                    <th class="text-left font-semibold">Total</th>
                    <th class="text-left font-semibold">Acción</th>
                </tr>
                </thead>
                <tbody>

                @forelse ($cart_items as $item)
                    <tr wire:key='{{ $item['product_id'] }}'>
                    <td class="py-4">
                    <div class="flex items-center">
                        <!-- IMAGEN DEL PRODUCTO -->
                        <img class="h-16 w-16 mr-4" src="{{ url('storage', $item['image']) }}" alt="{{ $item['name'] }}">
                        <!-- NOMBRE DEL PRODUCTO -->
                        <span class="font-semibold">{{ $item['name'] }}</span>
                    </div>
                    </td>
                    <!-- PRECIO -->
                    <td class="py-4">S/ {{ Number::format($item['unit_amount'], 2) }}</td>
                    <td class="py-4">
                        <div class="inline-flex items-center bg-white dark:bg-gray-800 rounded-lg shadow-md border border-gray-200 dark:border-gray-700 overflow-hidden">
                            <!-- BTN DISMINUIR CANTIDAD-->
                            <button class="flex items-center justify-center w-8 h-8 bg-gradient-to-r from-gray-50 to-gray-100 dark:from-gray-700 dark:to-gray-800 hover:from-red-50 hover:to-red-100 dark:hover:from-red-900/20 dark:hover:to-red-800/20 text-gray-600 dark:text-gray-400 hover:text-red-600 dark:hover:text-red-400 transition-all duration-200 ease-in-out transform hover:scale-110 active:scale-95 focus:outline-none focus:ring-2 focus:ring-red-400 focus:ring-opacity-50" wire:click='decreaseQty({{ $item['product_id'] }})'>
                                <span class="text-sm font-medium">−</span>
                            </button>
                            <!-- CANTIDAD del PRODUCTO-->
                            <span class="flex items-center justify-center w-10 h-8 px-2 text-center font-bold text-gray-800 dark:text-gray-200 bg-gradient-to-b from-gray-50 to-white dark:from-gray-800 dark:to-gray-900 select-none text-sm">{{ $item['quantity'] }}</span>
                            <!-- BTN AUMENTAR CANTIDAD-->
                            <button class="flex items-center justify-center w-8 h-8 bg-gradient-to-r from-gray-100 to-gray-50 dark:from-gray-800 dark:to-gray-700 hover:from-green-50 hover:to-green-100 dark:hover:from-green-900/20 dark:hover:to-green-800/20 text-gray-600 dark:text-gray-400 hover:text-green-600 dark:hover:text-green-400 transition-all duration-200 ease-in-out transform hover:scale-110 active:scale-95 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-opacity-50" wire:click='increaseQty({{ $item['product_id'] }})'>
                                <span class="text-sm font-medium">+</span>
                            </button>
                        </div>
                    </td>
                    <!-- MONTO TOTAL  -->
                    <td class="py-4">
                        {{-- {{ Number::currency($item['total_amount'], 'PEN') }} --}}
                        S/ {{ Number::format($item['total_amount'], 2) }}
                    </td>
                    <td>
                        <!-- BOTÓN ELIMINAR -->
                        
                        <button wire:click="removeItem({{ $item['product_id'] }})"
                                class="group relative w-10 h-10 bg-gradient-to-r from-gray-100 to-gray-200 dark:from-gray-700 dark:to-gray-800 border border-gray-300 dark:border-gray-600 rounded-lg hover:from-red-500 hover:to-red-600 hover:border-red-600 dark:hover:from-red-600 dark:hover:to-red-700 dark:hover:border-red-500 text-gray-600 dark:text-gray-400 hover:text-white dark:hover:text-white flex items-center justify-center transition-all duration-300 ease-in-out transform hover:scale-105 active:scale-95 focus:outline-none focus:ring-2 focus:ring-red-400 focus:ring-opacity-50 shadow-md hover:shadow-lg" 
                                title="Eliminar del carrito">
                            <!-- Ícono tachito normal -->
                            <span wire:loading.remove wire:target="removeItem({{ $item['product_id'] }})" class="transition-transform duration-200 group-hover:scale-110">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="3 6 5 6 21 6"></polyline>
                                    <path d="M19 6l-2 14H7L5 6"></path>
                                    <path d="M10 11v6"></path>
                                    <path d="M14 11v6"></path>
                                </svg>
                            </span>
                            <!-- Ícono tachito animado cuando hace clic -->
                            <span wire:loading wire:target="removeItem({{ $item['product_id'] }})" class="absolute flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 animate-spin text-white-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="3 6 5 6 21 6"></polyline>
                                    <path d="M19 6l-2 14H7L5 6"></path>
                                    <path d="M10 11v6"></path>
                                    <path d="M14 11v6"></path>
                                </svg>
                            </span>
                        </button>
                    </td>
                    </tr>
                {{-- @empty sirve para mostrar un mensaje cuando el carrito está vacío --}}
                @empty
                    <tr>
                        <td colspan="5" class="text-center py-4 text-4xl font-semibold text-slate-500">
                            Añade productos al carrito para solicitar un pedido.
                        </td>
                    </tr>
                @endforelse
                <!-- More product rows -->

                </tbody>
            </table>
            </div>
        </div>
        <div class="md:w-1/4">
            <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-lg font-semibold mb-4">Resumen</h2>
            <div class="flex justify-between mb-2">
                <span>Subtotal</span>
                <span>S/ {{ Number::format($grand_total, 2) }}</span>
            </div>
            <div class="flex justify-between mb-2">
                <span>Delivery</span>
                <span>S/ {{ Number::format(0, 2) }}</span>
            </div>
            {{-- <div class="flex justify-between mb-2">
                <span>Envío</span>
                <span>S/ 0.00</span>
            </div> --}}
            <hr class="my-2">
            <div class="flex justify-between mb-2">
                <span class="font-semibold">Total</span>
                <span class="font-semibold">S/ {{ Number::format($grand_total, 2) }}</span>
            </div>
            @if ($cart_items)
                <a wire:navigate href="/verificar" class="btn-click font-bold block text-center w-full bg-digirest hover:bg-digirestDark text-black py-2 px-4 rounded-lg mt-4 w-full">
                    Continuar compra
                </a>
            @endif
            </div>
        </div>
        </div>
    </div>
</div>