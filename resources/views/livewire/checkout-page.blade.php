<div class="w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto">
	<h1 class="text-2xl font-bold text-gray-800 dark:text-white mb-4">
		Verificación
	</h1>
	<div class="grid grid-cols-12 gap-4">
		<div class="md:col-span-12 lg:col-span-8 col-span-12">
			<!-- Card -->
			<div class="bg-white rounded-xl shadow p-4 sm:p-7 dark:bg-slate-900">
				<!-- Shipping Address -->
				<div class="mb-6">
					<h2 class="text-xl font-bold underline text-gray-700 dark:text-white mb-2">
						Dirección de envío
					</h2>
					<div class="grid grid-cols-2 gap-4">
						<div>
							<label class="block text-gray-700 dark:text-white mb-1" for="first_name">
								Nombres
							</label>
							<input class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none" id="first_name" type="text">
							</input>
						</div>
						<div>
							<label class="block text-gray-700 dark:text-white mb-1" for="last_name">
								Apellidos
							</label>
							<input class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none" id="last_name" type="text">
							</input>
						</div>
					</div>
					<div class="mt-4">
						<label class="block text-gray-700 dark:text-white mb-1" for="phone">
							Teléfono o celular
						</label>
						<input class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none" id="phone" type="text">
						</input>
					</div>
					<div class="mt-4">
						<label class="block text-gray-700 dark:text-white mb-1" for="address">
							Dirección
						</label>
						<input class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none" id="address" type="text">
						</input>
					</div>
					<div class="mt-4">
						<label class="block text-gray-700 dark:text-white mb-1" for="city">
							Ciudad
						</label>
						<input class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none" id="city" type="text">
						</input>
					</div>
					<div class="grid grid-cols-2 gap-4 mt-4">
						<div>
							<label class="block text-gray-700 dark:text-white mb-1" for="state">
								Estado
							</label>
							<input class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none" id="state" type="text">
							</input>
						</div>
						<div>
							<label class="block text-gray-700 dark:text-white mb-1" for="zip">
								Código postal
							</label>
							<input class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none" id="zip" type="text">
							</input>
						</div>
					</div>
				</div>
				<div class="text-lg font-semibold mb-4">
					Selecciona el método de pago
				</div>
				<ul class="grid w-full gap-6 md:grid-cols-2">
					<li>
						<input class="hidden peer" id="hosting-small" name="hosting" required="" type="radio" value="hosting-small" />
						<label class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700" for="hosting-small">
							<div class="block">
								<div class="w-full text-lg font-semibold">
									Tarjeta de Crédito o Débito
								</div>
							</div>
							<svg aria-hidden="true" class="w-5 h-5 ms-3 rtl:rotate-180" fill="none" viewbox="0 0 14 10" xmlns="http://www.w3.org/2000/svg">
								<path d="M1 5h12m0 0L9 1m4 4L9 9" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
								</path>
							</svg>
						</label>
					</li>
					<li>
						<input class="hidden peer" id="hosting-big" name="hosting" type="radio" value="hosting-big">
						<label class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700" for="hosting-big">
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
			</div>
			<!-- End Card -->
		</div>
		<div class="md:col-span-12 lg:col-span-4 col-span-12">
			<div class="bg-white rounded-xl shadow p-4 sm:p-7 dark:bg-slate-900">
				<div class="text-xl font-bold underline text-gray-700 dark:text-white mb-2">
					Resumen del carrito
				</div>
				<ul class="divide-y divide-gray-200 dark:divide-gray-700" role="list">
					<li class="py-3 sm:py-4">
						<div class="flex items-center">
							<div class="flex-shrink-0">
								<img alt="Neil image" class="w-12 h-12 rounded-full" src="/images/lomo-saltado.png">
								</img>
							</div>
							<div class="flex-1 min-w-0 ms-4">
								<p class="text-sm font-medium text-gray-900 truncate dark:text-white">
									Lomo Saltado
								</p>
								<p class="text-sm text-gray-500 truncate dark:text-gray-400">
									Cantidad: 1
								</p>
							</div>
							<div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
								S/ 20.00
							</div>
						</div>
					</li>
					<li class="py-3 sm:py-4">
						<div class="flex items-center">
							<div class="flex-shrink-0">
								<img alt="Neil image" class="w-12 h-12 rounded-full" src="/images/arroz-con-mariscos.png">
								</img>
							</div>
							<div class="flex-1 min-w-0 ms-4">
								<p class="text-sm font-medium text-gray-900 truncate dark:text-white">
									Arroz con Mariscos
								</p>
								<p class="text-sm text-gray-500 truncate dark:text-gray-400">
									Cantidad: 1
								</p>
							</div>
							<div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
								S/ 25.00
							</div>
						</div>
					</li>
					<li class="py-3 sm:py-4">
						<div class="flex items-center">
							<div class="flex-shrink-0">
								<img alt="Neil image" class="w-12 h-12 rounded-full" src="/images/arroz-con-pollo.png">
								</img>
							</div>
							<div class="flex-1 min-w-0 ms-4">
								<p class="text-sm font-medium text-gray-900 truncate dark:text-white">
									Arroz con pollo
								</p>
								<p class="text-sm text-gray-500 truncate dark:text-gray-400">
									Cantidad: 1
								</p>
							</div>
							<div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
								S/ 20.00
							</div>
						</div>
					</li>
				</ul>
				<div class="text-xl font-bold underline text-gray-700 dark:text-white mb-2">
					Resumen de Boleta
				</div>
				<div class="flex justify-between mb-2 font-bold">
					<span>
						Subtotal
					</span>
					<span>
						65.00
					</span>
				</div>
				<div class="flex justify-between mb-2 font-bold">
					<span>
						Delivery
					</span>
					<span>
						5.00
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
				<hr class="bg-slate-400 my-4 h-1 rounded">
				<div class="flex justify-between mb-2 font-bold">
					<span>
						Total
					</span>
					<span>
						70.00
					</span>
				</div>
				</hr>
			</div>
			<button class="bg-digirest mt-4 w-full p-3 rounded-lg text-lg text-black hover:bg-digirestDark">
				Realizar pedido
			</button>
			{{-- <div class="bg-white mt-4 rounded-xl shadow p-4 sm:p-7 dark:bg-slate-900">
				<div class="text-xl font-bold underline text-gray-700 dark:text-white mb-2">
					BASKET SUMMARY
				</div>
				<ul class="divide-y divide-gray-200 dark:divide-gray-700" role="list">
					<li class="py-3 sm:py-4">
						<div class="flex items-center">
							<div class="flex-shrink-0">
								<img alt="Neil image" class="w-12 h-12 rounded-full" src="/images/">
								</img>
							</div>
							<div class="flex-1 min-w-0 ms-4">
								<p class="text-sm font-medium text-gray-900 truncate dark:text-white">
									Lomo Saltado
								</p>
								<p class="text-sm text-gray-500 truncate dark:text-gray-400">
									Cantidad: 1
								</p>
							</div>
							<div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
								S/ 20.00
							</div>
						</div>
					</li>
					<li class="py-3 sm:py-4">
						<div class="flex items-center">
							<div class="flex-shrink-0">
								<img alt="Neil image" class="w-12 h-12 rounded-full" src="/images/">
								</img>
							</div>
							<div class="flex-1 min-w-0 ms-4">
								<p class="text-sm font-medium text-gray-900 truncate dark:text-white">
									Arroz con Mariscos
								</p>
								<p class="text-sm text-gray-500 truncate dark:text-gray-400">
									Cantidad: 1
								</p>
							</div>
							<div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
								S/ 25.00
							</div>
						</div>
					</li>
					<li class="py-3 sm:py-4">
						<div class="flex items-center">
							<div class="flex-shrink-0">
								<img alt="Neil image" class="w-12 h-12 rounded-full" src="/images/">
								</img>
							</div>
							<div class="flex-1 min-w-0 ms-4">
								<p class="text-sm font-medium text-gray-900 truncate dark:text-white">
									Apple iPhone 15 Pro Max
								</p>
								<p class="text-sm text-gray-500 truncate dark:text-gray-400">
									Cantidad: 1
								</p>
							</div>
							<div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
								S/ 20.00
							</div>
						</div>
					</li>
				</ul>
			</div> --}}
		</div>
	</div>
</div>