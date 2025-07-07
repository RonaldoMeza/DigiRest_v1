<div class="w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto">
	<h1 class="text-2xl font-bold text-gray-800 dark:text-white mb-4">
		Verificación de compra
	</h1>
	<form wire:submit.prevent='placeOrder' id="checkout-form">
		<div class="grid grid-cols-12 gap-4">
		<div class="md:col-span-12 lg:col-span-8 col-span-12">
			<!-- Card -->
			<div class="bg-white rounded-xl shadow p-4 sm:p-7 dark:bg-slate-900">
				<!-- Shipping Address -->
				<div class="mb-6">
					<h2 class="text-xl font-bold underline text-gray-700 dark:text-white mb-2">
						Dirección de envío
					</h2>

					<!-- Nombres y Apellidos -->
					<div class="grid grid-cols-2 gap-4">
						<div>
							<label class="block text-gray-700 dark:text-white mb-1" for="first_name">
								Nombres
							</label>
							<input wire:model="first_name" class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white 
								dark:border-none @error('first_name') border-red-500 @enderror" id="first_name" type="text">
							</input>
							@error('first_name')
								<div class="text-red-500 text-sm">{{ $message }}</div>
							@enderror
						</div>
						<div>
							<label class="block text-gray-700 dark:text-white mb-1" for="last_name">
								Apellidos
							</label>
							<input wire:model="last_name" class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white 
									dark:border-none @error('last_name') border-red-500 @enderror" id="last_name" type="text">
							</input>
							@error('last_name')
								<div class="text-red-500 text-sm">{{ $message }}</div>
							@enderror
						</div>
					</div>

					<div class="grid grid-cols-2 gap-4">
						<!-- Teléfono -->
						<div class="mt-4">
							<label class="block text-gray-700 dark:text-white mb-1" for="phone">
								Teléfono o celular
							</label>
							<input wire:model="phone" class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white 
								dark:border-none @error('phone') border-red-500 @enderror" id="phone" type="text">
							</input>
							@error('phone')
								<div class="text-red-500 text-sm">{{ $message }}</div>
							@enderror
						</div>
						<!-- Distrito -->
						<div class="mt-4">
							<label class="block text-gray-700 dark:text-white mb-1" for="district">
							Distrito
							</label>
							<input wire:model="district" class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white 
								dark:border-none @error('district') border-red-500 @enderror" id="district" type="text"/>
							@error('district')
								<div class="text-red-500 text-sm">{{ $message }}</div>
							@enderror
						</div>
					</div>

					<!-- Dirección -->
					<div class="mt-4">
						<label class="block text-gray-700 dark:text-white mb-1" for="street_address">
						Dirección completa
						</label>
						<input wire:model="street_address" class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white 
							dark:border-none @error('street_address') border-red-500 @enderror" id="street_address" type="text"/>
						@error('street_address')
							<div class="text-red-500 text-sm">{{ $message }}</div>
						@enderror
					</div>

					<!-- Referencia -->
					<div class="mt-4">
						<label class="block text-gray-700 dark:text-white mb-1" for="reference">
						Referencia (p. ej., puntos de referencia)
						</label>
						<input wire:model="reference" class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white 
							dark:border-none" id="reference" type="text"/>
					</div>
					
				</div>
				<div class="text-lg font-semibold mb-4">
					Selecciona el método de pago
				</div>
				<ul class="grid w-full gap-6 md:grid-cols-2">
					<li>
						<input wire:model='payment_method' class="hidden peer" id="hosting-small" required="" type="radio" value="tarjeta" />
						<label class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-digirestDark peer-checked:text-digirestDark hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700" 
							for="hosting-small">
							<div class="block">
								<div class="w-full text-lg font-semibold">
									Pago con tarjeta
								</div>
							</div>
							<svg aria-hidden="true" class="w-5 h-5 ms-3 rtl:rotate-180" fill="none" viewbox="0 0 14 10" xmlns="http://www.w3.org/2000/svg">
								<path d="M1 5h12m0 0L9 1m4 4L9 9" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
								</path>
							</svg>
						</label>
					</li>
					<li>
						<input wire:model='payment_method' class="hidden peer" id="hosting-big" type="radio" value="efectivo">
						<label class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-digirestDark peer-checked:text-digirestDark hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700" for="hosting-big">
							<div class="block">
								<div class="w-full text-lg font-semibold">
									Pago en efectivo
								</div>
							</div>
							<svg aria-hidden="true" class="w-5 h-5 ms-3 rtl:rotate-180" fill="none" viewbox="0 0 14 10" xmlns="http://www.w3.org/2000/svg">
								<path d="M1 5h12m0 0L9 1m4 4L9 9" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
								</path>
							</svg>
						</label>
						</input>
					</li>
				</ul>
				@error('payment_method')
					<div class="text-red-500 text-sm">{{ $message }}</div>
				@enderror
			</div>
			<!-- End Card -->
		</div>

		<div class="md:col-span-12 lg:col-span-4 col-span-12">
			<div class="bg-white mb-4 rounded-xl shadow p-4 sm:p-7 dark:bg-slate-900">
				<div class="text-xl font-bold underline text-gray-700 dark:text-white mb-2">
					Resumen del carrito
				</div>
				<ul class="divide-y divide-gray-200 dark:divide-gray-700" role="list">
					
					@foreach ($cart_items as $ci)
					<li class="py-3 sm:py-4" wire:key='{{ $ci['product_id'] }}'>
						<div class="flex items-center">
							<div class="flex-shrink-0">
								<img alt="{{ $ci['name'] }}" class="w-12 h-12 rounded-full" src="{{ url('storage', $ci['image']) }}">
								</img>
							</div>
							<div class="flex-1 min-w-0 ms-4">
								<p class="text-sm font-medium text-gray-900 truncate dark:text-white">
									{{ $ci['name'] }}
								</p>
								<p class="text-sm text-gray-500 truncate dark:text-gray-400">
									Cantidad: {{ $ci['quantity'] }} unidades
								</p>
							</div>
							<div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
								S/ {{ Number::format($ci['total_amount'], 2) }}
							</div>
						</div>
					</li>
					@endforeach
				</ul>
			</div>

			<div class="bg-white rounded-xl shadow p-4 sm:p-7 dark:bg-slate-900">
				<div class="text-xl font-bold underline text-gray-700 dark:text-white mb-6">
					Resumen del pedido
				</div>
				<div class="flex justify-between mb-2 font-bold">
					<span>
						Subtotal
					</span>
					<span>
						S/ {{ Number::format($grand_total, 2) }}
					</span>
				</div>
				<div class="flex justify-between mb-2 font-bold">
					<span>
						Delivery
					</span>
					<span>
						S/ {{ Number::format(0, 2) }}
					</span>
				</div>
				{{-- <div class="flex justify-between mb-2 font-bold">
					<span>
						Envío
					</span>
					<span>
						0.00
					</span>
				</div> --}}
				<hr class="bg-slate-200 my-4 h-1 rounded">
				<div class="flex justify-between mb-2 font-bold">
					<span>
						Total
					</span>
					<span>
						S/ {{ Number::format($grand_total, 2) }}
					</span>
				</div>
				</hr>
			</div>
			<button type="submit" class="btn-click bg-digirest font-bold mt-4 w-full p-3 rounded-lg text-lg text-black hover:bg-digirestDark">
				<span wire:loading.remove >Confirmar</span>
				<span wire:loading class="flex justify-center items-center gap-2">
					<svg class="h-5 w-5 text-black animate-spin" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
						<path stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
							d="M4.5 12a7.5 7.5 0 0113.115-4.623M19.5 12a7.5 7.5 0 01-13.115 4.623M19.5 12H16.5m3 0l-1.5 1.5m1.5-1.5l-1.5-1.5" />
					</svg>
				</span>
			</button>
		</div>
	</div>
	</form>
</div>
