<div class="w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto">
    <section class="py-10 bg-gray-50 font-poppins dark:bg-gray-800 rounded-lg">
        <div class="px-4 py-4 mx-auto max-w-7xl lg:py-6 md:px-6">
        <div class="flex flex-wrap mb-24 -mx-3">
            <div class="w-full pr-2 lg:w-1/4 lg:block">
            <div class="p-4 mb-5 bg-white border border-gray-200 dark:border-gray-900 dark:bg-gray-900">
                <h2 class="text-2xl font-bold dark:text-gray-400"> Categorías</h2>
                <div class="w-16 pb-2 mb-6 border-b border-digirest dark:border-gray-400"></div>
                <ul>
                <li class="mb-4">
                    <label for="aperitivos" class="flex items-center dark:text-gray-400 ">
                    <input type="checkbox" id="aperitivos" class="w-4 h-4 mr-2">
                    <span class="text-lg">Aperitivos</span>
                    </label>
                </li>
                <li class="mb-4">
                    <label for="fondos" class="flex items-center dark:text-gray-400 ">
                    <input type="checkbox" id="fondos" class="w-4 h-4 mr-2 ">
                    <span class="text-lg">Fondos</span>
                    </label>
                </li>
                <li class="mb-4">
                    <label for="bebidas" class="flex items-center dark:text-gray-400">
                    <input type="checkbox" id="bebidas" class="w-4 h-4 mr-2">
                    <span class="text-lg">Bebidas</span>
                    </label>
                </li>
                <li class="mb-4">
                    <label for="postres" class="flex items-center dark:text-gray-400">
                    <input type="checkbox" id="postres" class="w-4 h-4 mr-2">
                    <span class="text-lg">Postres</span>
                    </label>
                </li>
                </ul>

            </div>
            {{-- <div class="p-4 mb-5 bg-white border border-gray-200 dark:bg-gray-900 dark:border-gray-900">
                <h2 class="text-2xl font-bold dark:text-gray-400">Brand</h2>
                <div class="w-16 pb-2 mb-6 border-b border-digirest dark:border-gray-400"></div>
                <ul>
                <li class="mb-4">
                    <label for="" class="flex items-center dark:text-gray-300">
                    <input type="checkbox" class="w-4 h-4 mr-2">
                    <span class="text-lg dark:text-gray-400">Apple</span>
                    </label>
                </li>
                <li class="mb-4">
                    <label for="" class="flex items-center dark:text-gray-300">
                    <input type="checkbox" class="w-4 h-4 mr-2">
                    <span class="text-lg dark:text-gray-400">Samsung</span>
                    </label>
                </li>
                <li class="mb-4">
                    <label for="" class="flex items-center dark:text-gray-300">
                    <input type="checkbox" class="w-4 h-4 mr-2">
                    <span class="text-lg dark:text-gray-400">Nothing</span>
                    </label>
                </li>
                <li class="mb-4">
                    <label for="" class="flex items-center dark:text-gray-300">
                    <input type="checkbox" class="w-4 h-4 mr-2">
                    <span class="text-lg dark:text-gray-400">One Plus</span>
                    </label>
                </li>
                </ul>
            </div> --}}
            <div class="p-4 mb-5 bg-white border border-gray-200 dark:bg-gray-900 dark:border-gray-900">
                <h2 class="text-2xl font-bold dark:text-gray-400">Estado del Producto</h2>
                <div class="w-16 pb-2 mb-6 border-b border-digirest dark:border-gray-400"></div>
                <ul>
                <li class="mb-4">
                    <label for="disponible" class="flex items-center dark:text-gray-300">
                    <input type="checkbox" id="disponible" class="w-4 h-4 mr-2">
                    <span class="text-lg dark:text-gray-400">Disponible</span>
                    </label>
                </li>
                <li class="mb-4">
                    <label for="no-disponible" class="flex items-center dark:text-gray-300">
                    <input type="checkbox" id="no-disponible" class="w-4 h-4 mr-2">
                    <span class="text-lg dark:text-gray-400">No Disponible</span>
                    </label>
                </li>
                </ul>
            </div>

            <div class="p-4 mb-5 bg-white border border-gray-200 dark:bg-gray-900 dark:border-gray-900">
                <h2 class="text-2xl font-bold dark:text-gray-400">Precio</h2>
                <div class="w-16 pb-2 mb-6 border-b border-digirest dark:border-gray-400"></div>
                <div>
                    <input type="range" class="w-full h-1 mb-4 bg-digirestClear rounded appearance-none cursor-pointer" max="500000" value="100000" step="100000">
                    <div class="flex justify-between ">
                        <span class="inline-block text-lg font-bold text-digirestDark ">S/ 5.00</span>
                        <span class="inline-block text-lg font-bold text-digirestDark ">S/ 100.00</span>
                    </div>
                </div>
            </div>
            </div>
            <div class="w-full px-3 lg:w-3/4">
            <div class="px-3 mb-4">
                <div class="items-center justify-between hidden px-3 py-2 bg-gray-100 md:flex dark:bg-gray-900 ">
                <div class="flex items-center justify-between">
                    <select name="" id="" class="block w-40 text-base bg-gray-100 cursor-pointer dark:text-gray-400 dark:bg-gray-900">
                    <option value="">Ordenar por último</option>
                    <option value="">Ordenar por precio</option>
                    </select>
                </div>
                </div>
            </div>
            <div class="flex flex-wrap items-center ">

                <div class="w-full px-3 mb-6 sm:w-1/2 md:w-1/3">
                <div class="border border-gray-300 dark:border-gray-700">
                    <div class="relative bg-gray-200">
                    <a href="/productos/lomo-saltado" class="">
                        <img src="/images/lomo-saltado.png" alt="" class="object-cover w-full h-56 mx-auto ">
                    </a>
                    </div>
                    <div class="p-3 ">
                    <div class="flex items-center justify-between gap-2 mb-2">
                        <h3 class="text-xl font-medium dark:text-gray-400">
                        Nombre del Producto
                        </h3>
                    </div>
                    <p class="text-lg ">
                        <span class="text-digirestDark dark:text-digirestDark font-bold">S/ 50.00</span>
                    </p>
                    </div>
                    <div class="flex justify-center p-4 border-t border-gray-300 dark:border-gray-700">

                    <a href="#" class="text-gray-500 flex items-center space-x-2 dark:text-gray-400 hover:text-digirestDark dark:hover:text-red-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 h-4 bi bi-cart3 " viewBox="0 0 16 16">
                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"></path>
                        </svg><span>Añadir al carrito</span>
                    </a>

                    </div>
                </div>
                </div>
                <div class="w-full px-3 mb-6 sm:w-1/2 md:w-1/3">
                <div class="border border-gray-300 dark:border-gray-700">
                    <div class="relative bg-gray-200">
                    <a href="#" class="">
                        <img src="/images/postres1-categorias.png" alt="" class="object-cover w-full h-56 mx-auto ">
                    </a>
                    </div>
                    <div class="p-3 ">
                    <div class="flex items-center justify-between gap-2 mb-2">
                        <h3 class="text-xl font-medium dark:text-gray-400">
                        Nombre del Producto
                        </h3>
                    </div>
                    <p class="text-lg ">
                        <span class="text-digirestDark dark:text-digirestDark font-bold">S/ 50.00</span>
                    </p>
                    </div>
                    <div class="flex justify-center p-4 border-t border-gray-300 dark:border-gray-700">

                    <a href="#" class="text-gray-500 flex items-center space-x-2 dark:text-gray-400 hover:text-digirestDark dark:hover:text-red-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 h-4 bi bi-cart3 " viewBox="0 0 16 16">
                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"></path>
                        </svg><span>Añadir al carrito</span>
                    </a>

                    </div>
                </div>
                </div>
                <div class="w-full px-3 mb-6 sm:w-1/2 md:w-1/3">
                <div class="border border-gray-300 dark:border-gray-700">
                    <div class="relative bg-gray-200">
                    <a href="#" class="">
                        <img src="/images/postres1-categorias.png" alt="" class="object-cover w-full h-56 mx-auto ">
                    </a>
                    </div>
                    <div class="p-3 ">
                    <div class="flex items-center justify-between gap-2 mb-2">
                        <h3 class="text-xl font-medium dark:text-gray-400">
                        Nombre del Producto
                        </h3>
                    </div>
                    <p class="text-lg ">
                        <span class="text-digirestDark dark:text-digirestDark font-bold">S/ 50.00</span>
                    </p>
                    </div>
                    <div class="flex justify-center p-4 border-t border-gray-300 dark:border-gray-700">

                    <a href="#" class="text-gray-500 flex items-center space-x-2 dark:text-gray-400 hover:text-digirestDark dark:hover:text-red-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 h-4 bi bi-cart3 " viewBox="0 0 16 16">
                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"></path>
                        </svg><span>Añadir al carrito</span>
                    </a>

                    </div>
                </div>
                </div>
                <div class="w-full px-3 mb-6 sm:w-1/2 md:w-1/3">
                <div class="border border-gray-300 dark:border-gray-700">
                    <div class="relative bg-gray-200">
                    <a href="#" class="">
                        <img src="/images/postres1-categorias.png" alt="" class="object-cover w-full h-56 mx-auto ">
                    </a>
                    </div>
                    <div class="p-3 ">
                    <div class="flex items-center justify-between gap-2 mb-2">
                        <h3 class="text-xl font-medium dark:text-gray-400">
                        Nombre del Producto
                        </h3>
                    </div>
                    <p class="text-lg ">
                        <span class="text-digirestDark dark:text-digirestDark font-bold">S/ 50.00</span>
                    </p>
                    </div>
                    <div class="flex justify-center p-4 border-t border-gray-300 dark:border-gray-700">

                    <a href="#" class="text-gray-500 flex items-center space-x-2 dark:text-gray-400 hover:text-digirestDark dark:hover:text-red-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 h-4 bi bi-cart3 " viewBox="0 0 16 16">
                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"></path>
                        </svg><span>Añadir al carrito</span>
                    </a>

                    </div>
                </div>
                </div>
                <div class="w-full px-3 mb-6 sm:w-1/2 md:w-1/3">
                <div class="border border-gray-300 dark:border-gray-700">
                    <div class="relative bg-gray-200">
                    <a href="#" class="">
                        <img src="/images/postres1-categorias.png" alt="" class="object-cover w-full h-56 mx-auto ">
                    </a>
                    </div>
                    <div class="p-3 ">
                    <div class="flex items-center justify-between gap-2 mb-2">
                        <h3 class="text-xl font-medium dark:text-gray-400">
                        Nombre del Producto
                        </h3>
                    </div>
                    <p class="text-lg ">
                        <span class="text-digirestDark dark:text-digirestDark font-bold">S/ 50.00</span>
                    </p>
                    </div>
                    <div class="flex justify-center p-4 border-t border-gray-300 dark:border-gray-700">

                    <a href="#" class="text-gray-500 flex items-center space-x-2 dark:text-gray-400 hover:text-digirestDark dark:hover:text-red-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 h-4 bi bi-cart3 " viewBox="0 0 16 16">
                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"></path>
                        </svg><span>Añadir al carrito</span>
                    </a>

                    </div>
                </div>
                </div>
                <div class="w-full px-3 mb-6 sm:w-1/2 md:w-1/3">
                <div class="border border-gray-300 dark:border-gray-700">
                    <div class="relative bg-gray-200">
                    <a href="#" class="">
                        <img src="/images/postres1-categorias.png" alt="" class="object-cover w-full h-56 mx-auto ">
                    </a>
                    </div>
                    <div class="p-3 ">
                    <div class="flex items-center justify-between gap-2 mb-2">
                        <h3 class="text-xl font-medium dark:text-gray-400">
                        Nombre del Producto
                        </h3>
                    </div>
                    <p class="text-lg ">
                        <span class="text-digirestDark dark:text-digirestDark font-bold">S/ 50.00</span>
                    </p>
                    </div>
                    <div class="flex justify-center p-4 border-t border-gray-300 dark:border-gray-700">

                    <a href="#" class="text-gray-500 flex items-center space-x-2 dark:text-gray-400 hover:text-digirestDark dark:hover:text-red-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 h-4 bi bi-cart3 " viewBox="0 0 16 16">
                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"></path>
                        </svg><span>Añadir al carrito</span>
                    </a>

                    </div>
                </div>
                </div>

            </div>
            <!-- pagination start -->
            <div class="flex justify-end mt-6">
                <nav aria-label="page-navigation">
                <ul class="flex list-style-none">
                    <li class="page-item disabled ">
                    <a href="#" class="relative block pointer-events-none px-3 py-1.5 mr-3 text-base text-gray-700 transition-all duration-300  rounded-md dark:text-gray-400 hover:text-gray-100 hover:bg-blue-600">Previous
                    </a>
                    </li>
                    <li class="page-item ">
                    <a href="#" class="relative block px-3 py-1.5 mr-3 text-base hover:text-blue-700 transition-all duration-300 hover:bg-blue-200 dark:hover:text-gray-400 dark:hover:bg-gray-700 rounded-md text-gray-100 bg-digirestDark">1
                    </a>
                    </li>
                    <li class="page-item ">
                    <a href="#" class="relative block px-3 py-1.5 text-base text-gray-700 transition-all duration-300 dark:text-gray-400 dark:hover:bg-gray-700 hover:bg-digirestClear rounded-md mr-3  ">2
                    </a>
                    </li>
                    <li class="page-item ">
                    <a href="#" class="relative block px-3 py-1.5 text-base text-gray-700 transition-all duration-300 dark:text-gray-400 dark:hover:bg-gray-700 hover:bg-digirestClear rounded-md mr-3 ">3
                    </a>
                    </li>
                    <li class="page-item ">
                    <a href="#" class="relative block px-3 py-1.5 text-base text-gray-700 transition-all duration-300 dark:text-gray-400 dark:hover:bg-gray-700 hover:bg-digirestClear rounded-md ">Next
                    </a>
                    </li>
                </ul>
                </nav>
            </div>
            <!-- pagination end -->
            </div>
        </div>
        </div>
    </section>

</div>