<div class="bg-gray-100 min-h-screen flex items-center justify-center p-4">
    <div class="card-style bg-white rounded-lg shadow-sm p-6 w-full max-w-md">
        <h2 class="text-2xl font-semibold text-black mb-6 text-center">Información de pago</h2>

        {{-- Formulario Livewire --}}
        <form wire:submit.prevent="submit" class="space-y-4">

            {{-- Nombre del titular --}}
            <div>
                <label for="cardholder" class="block text-sm font-medium text-gray-700 mb-2">Nombre del titular</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </div>
                    <input wire:model="cardholder" type="text" id="cardholder" name="cardholder"
                        placeholder="Juan Pérez"
                        class="w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-digirest focus:border-transparent transition duration-200 ease-in-out"
                        required>
                    @error('cardholder') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                </div>
            </div>

            {{-- Número de tarjeta --}}
            <div>
                <label for="cardnumber" class="block text-sm font-medium text-gray-700 mb-2">Número de tarjeta</label>
                <div class="relative">
                    <input wire:model="cardnumber" type="text" id="cardnumber" name="cardnumber"
                        placeholder="1234 5678 9012 3456" maxlength="19"
                        class="w-full px-3 py-2 pr-24 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-digirest focus:border-transparent transition duration-200 ease-in-out"
                        required>
                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center space-x-1">
                        <img src="/images/tarjeta.png" alt="Visa" class="h-8 w-auto">
                    </div>
                    @error('cardnumber') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                </div>
            </div>

            {{-- Fecha y CVC --}}
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label for="expiry" class="block text-sm font-medium text-gray-700 mb-2">Fecha de vencimiento</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <input wire:model="expiry" type="text" id="expiry" name="expiry" placeholder="MM/AA" maxlength="5"
                            class="w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-digirest focus:border-transparent transition duration-200 ease-in-out"
                            required>
                        @error('expiry') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div>
                </div>

                <div>
                    <label for="cvc" class="block text-sm font-medium text-gray-700 mb-2">CVC</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <input wire:model="cvc" type="text" id="cvc" name="cvc" placeholder="123" maxlength="3"
                            class="w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-digirest focus:border-transparent transition duration-200 ease-in-out"
                            required>
                        @error('cvc') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div>
                </div>
            </div>

            {{-- Botón --}}
            <button type="submit"
                class="w-full bg-digirest text-black py-3 px-4 rounded-md font-medium hover:bg-digirest/90 active:bg-digirest/80 focus:outline-none focus:ring-2 focus:ring-digirest focus:ring-offset-2 transition duration-200 ease-in-out shadow-sm hover:shadow mt-6">
                <span wire:loading.remove>Pagar S/ {{ number_format($grand_total, 2) }}</span>
                <span wire:loading class="flex justify-center items-center gap-2">
                    <svg class="h-5 w-5 text-black animate-spin" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                            d="M4.5 12a7.5 7.5 0 0113.115-4.623M19.5 12a7.5 7.5 0 01-13.115 4.623M19.5 12H16.5m3 0l-1.5 1.5m1.5-1.5l-1.5-1.5" />
                    </svg>
                </span>
            </button>
        </form>

        {{-- Seguridad --}}
        <div class="mt-6 flex items-center justify-center text-xs text-gray-500">
            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd"
                    d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                    clip-rule="evenodd" />
            </svg>
            Pago simulado y encriptado
        </div>
    </div>
</div>
