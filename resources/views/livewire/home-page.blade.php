<div>
    
    <!---------------------- INICIO 2 SECTIONS ------------------>
    <div class="section-container">

        <!---------------------- SECCION INICIO ------------------>
        <div class="w-full"> 
            <div
                class="section1 mx-auto max-w-[85rem] px-4 sm:px-6 lg:px-8 
                    grid grid-cols-1 md:grid-cols-2 gap-8 items-center
                    min-h-[calc(100vh-5rem)]">
                <!-- TEXTO -->
                <div class="space-y-6">
                <h1
                    class="text-3xl sm:text-4xl lg:text-6xl font-leckerli text-white leading-tight text-center md:text-left">
                    Ven y disfruta de la mejor gastronomía <span class="text-digirest"></span>
                </h1>
                <p class="flex items-start text-lg text-gray-300">
                    <svg class="w-6 h-6 mr-2 text-digirest" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                    </svg>
                    Realiza tus reservas de manera sencilla y rápida.
                </p>
                <p class="flex items-start text-lg text-gray-300">
                    <svg class="w-6 h-6 mr-2 text-digirest" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                    </svg>
                    Descubre un menú variado y delicioso.
                </p>
                <p class="flex items-start text-lg text-gray-300">
                    <svg class="w-6 h-6 mr-2 text-digirest" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                    </svg>
                    Recibe tus platillos favoritos en la puerta de tu casa.
                </p>
                <div class="mt-4 flex flex-col sm:flex-row gap-4 justify-center md:justify-start">
                    <a href="/register"
                    class="py-3 px-6 text-sm font-semibold rounded-lg bg-digirest text-black hover:bg-digirestDark transition">
                    Reservar mesa
                    <svg class="inline-block ml-2 w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                        <path d="M9 18l6-6-6-6"></path>
                    </svg>
                    </a>
                    <a href="/contact"
                    class="py-3 px-6 text-sm font-medium rounded-lg border border-gray-200 bg-white text-black hover:bg-gray-200 transition">
                    Contacto
                    </a>
                </div>
                </div>

                <!-- IMAGEN -->
                <div class="flex justify-center md:justify-end overflow-hidden">
                <img src="/images/robot-chef.png" alt="Robot-Chef"
                    class="chef-img w-full h-auto object-contain rounded-lg shadow-md" />
                </div>
            </div>
        </div>
        <!---------------------- FIN DE SECCION INICIO ------------------>



        <!----------------------SECTION BIENVENIDOS ------------------>
        <section class="min-h-screen flex items-center justify-center py-5 px-4 relative overflow-hidden">
            <!-- Decorative background element -->
            <div class="absolute top-0 right-0 w-96 h-96 bg-gradient-to-br from-primary/5 to-transparent rounded-full blur-3xl transform translate-x-1/2 -translate-y-1/2"></div>
            <div class="absolute bottom-0 left-0 w-80 h-80 bg-gradient-to-tr from-blue-500/5 to-transparent rounded-full blur-3xl transform -translate-x-1/2 translate-y-1/2"></div>
            
            <div class="max-w-6xl mx-auto w-full">
                <div class="flex flex-col items-center justify-center text-center space-y-16">
                    
                    <!-- Contenido de texto centrado arriba -->
                    <div class="max-w-xl mx-auto">
                        <div class="text-center ">
                            <div class="relative flex flex-col items-center mb-8">
                                <h1 class="text-3xl sm:text-4xl lg:text-5xl  font-leckerli dark:text-gray-200 text-white">
                                Bienvenidos a Digi<span class="text-digirest">Rest</span> </h1>
                
                            </div>
                            <p class="text-base text-center text-gray-300">
                            En DigiRest, combinamos la pasión por la gastronomía con la tecnología para ofrecerte una experiencia única.</p>
                        </div>
                    </div>
                    
                    <!-- Grid de tarjetas centrado abajo -->
                    <div class="w-full max-w-5xl">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                        
                        <!-- Card 1: Menú Digital -->
                        <a href="#menu" class="group relative bg-white rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 card-shadow-menu h-80">
                            <div class="relative w-full h-full overflow-hidden">
                                <img src="/images/restaurant.jpg" 
                                    alt="Menú Digital" 
                                    class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110">
                                
                                <!-- Overlay con gradiente -->
                                <div class="absolute inset-0 overlay-gradient opacity-80 group-hover:opacity-90 transition-opacity duration-400"></div>
                                
                                <!-- Contenido del card -->
                                <div class="absolute inset-0 flex items-center justify-center p-6">
                                    <h3 class="text-white text-xl font-semibold drop-shadow-lg text-center relative accent-line">
                                        Reservas
                                    </h3>
                                </div>
                            </div>
                        </a>
                        
                        <!-- Card 2: Gestión de Pedidos -->
                        <a href="#orders" class="group relative bg-white rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 card-shadow-orders h-80">
                            <div class="relative w-full h-full overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1556909114-f6e7ad7d3136?w=400&h=400&fit=crop&crop=center" 
                                    alt="Gestión de Pedidos" 
                                    class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110">
                                
                                <div class="absolute inset-0 overlay-gradient opacity-80 group-hover:opacity-90 transition-opacity duration-400"></div>
                                
                                <div class="absolute inset-0 flex items-center justify-center p-6">
                                    <h3 class="text-white text-xl font-semibold drop-shadow-lg text-center relative accent-line">
                                        Gestión de Pedidos
                                    </h3>
                                </div>
                            </div>
                        </a>
                        
                        <!-- Card 3: Análisis de Datos -->
                        <a href="#analytics" class="group relative bg-white rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 card-shadow-analytics h-80">
                            <div class="relative w-full h-full overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=400&h=400&fit=crop&crop=center" 
                                    alt="Análisis de Datos" 
                                    class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110">
                                
                                <div class="absolute inset-0 overlay-gradient opacity-80 group-hover:opacity-90 transition-opacity duration-400"></div>
                                
                                <div class="absolute inset-0 flex items-center justify-center p-6">
                                    <h3 class="text-white text-xl font-semibold drop-shadow-lg text-center relative accent-line">
                                        Análisis de Datos
                                    </h3>
                                </div>
                            </div>
                        </a>
                        
                        <!-- Card 4: Experiencia del Cliente -->
                        <a href="#customer" class="group relative bg-white rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 card-shadow-customer h-80">
                            <div class="relative w-full h-full overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?w=400&h=400&fit=crop&crop=center" 
                                    alt="Experiencia del Cliente" 
                                    class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110">
                                
                                <div class="absolute inset-0 overlay-gradient opacity-80 group-hover:opacity-90 transition-opacity duration-400"></div>
                                
                                <div class="absolute inset-0 flex items-center justify-center p-6">
                                    <h3 class="text-white text-xl font-semibold drop-shadow-lg text-center relative accent-line">
                                        Experiencia del Cliente
                                    </h3>
                                </div>
                            </div>
                        </a>
                        
                    </div>
                </div>
                    
                </div>
            </div>
        </section>
        <!---------------------- FIN SECTION BIENVENIDOS ------------------>

    </div>
    <!---------------------FIN 2 SECTIONS------------------------------>


    
    <!---------------------- SECCION CATEGORIAS ------------------>
    <div class="bg-whiteDark py-20">
    <div class="max-w-xl mx-auto">
        <div class="text-center ">
        <div class="relative flex flex-col items-center mb-6">
            <h1 class="text-5xl font-leckerli dark:text-gray-200"> Nuestra <span class="text-digirest">Carta</span> </h1>
            {{-- <div class="flex w-40 mt-2 mb-6 overflow-hidden rounded">
            <div class="flex-1 h-2 bg-digiresClear">
            </div>
            <div class="flex-1 h-2 bg-digiresClear">
            </div>
            <div class="flex-1 h-2 bg-digirest">
            </div>
            </div> --}}
        </div>
        <p class="mb-12 text-base text-center text-gray-700">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus magni eius eaque?
            Pariatur
            numquam, odio quod nobis ipsum ex cupiditate?
        </p>
        </div>
    </div>

    <div class="max-w-[85rem] px-4 sm:px-6 lg:px-8 mx-auto">
        <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3 sm:gap-6">

        <a class="categoria-link group flex flex-col bg-white border transition dark:bg-slate-900 dark:border-white dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="#">
            <div class="p-4 md:p-5">
            <div class="flex justify-between items-center">
                <div class="flex items-center">
                <img class="h-[2.375rem] w-[2.375rem] rounded-full" src="/images/fondos1-categorias.png" alt="Image Description">
                <div class="ms-3">
                    <h3 class="group-hover:text-digirest font-semibold text-black dark:group-hover:text-gray-400 dark:text-gray-200">
                    Fondos
                    </h3>
                </div>
                </div>
                <div class="ps-3">
                <svg class="flex-shrink-0 w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m9 18 6-6-6-6" />
                </svg>
                </div>
            </div>
            </div>
        </a>

        <a class="categoria-link group flex flex-col bg-white border transition dark:bg-slate-900 dark:border-white dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="#">
            <div class="p-4 md:p-5">
            <div class="flex justify-between items-center">
                <div class="flex items-center">
                <img class="h-[2.375rem] w-[2.375rem] rounded-full" src="/images/bebidas5-categorias.png" alt="Image Description">
                <div class="ms-3">
                    <h3 class="group-hover:text-digirest font-semibold text-black dark:group-hover:text-gray-400 dark:text-gray-200">
                    Bebidas
                    </h3>
                </div>
                </div>
                <div class="ps-3">
                <svg class="flex-shrink-0 w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m9 18 6-6-6-6" />
                </svg>
                </div>
            </div>
            </div>
        </a>

        <a class="categoria-link group flex flex-col bg-white border transition dark:bg-slate-900 dark:border-white dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="#">
            <div class="p-4 md:p-5">
            <div class="flex justify-between items-center">
                <div class="flex items-center">
                <img class="h-[2.375rem] w-[2.375rem] rounded-full" src="/images/aperitivos2-cate.png" alt="Image Description">
                <div class="ms-3">
                    <h3 class="group-hover:text-digirest font-semibold text-black dark:group-hover:text-gray-400 dark:text-gray-200">
                    Aperitivos
                    </h3>
                </div>
                </div>
                <div class="ps-3">
                <svg class="flex-shrink-0 w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m9 18 6-6-6-6" />
                </svg>
                </div>
            </div>
            </div>
        </a>

        <a class="categoria-link group flex flex-col bg-white border transition dark:bg-slate-900 dark:border-white dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="#">
            <div class="p-4 md:p-5">
            <div class="flex justify-between items-center">
                <div class="flex items-center">
                <img class="h-[2.375rem] w-[2.375rem] rounded-full" src="/images/postres1-categorias.png" alt="Image Description">
                <div class="ms-3">
                    <h3 class="group-hover:text-digirest font-semibold text-black dark:group-hover:text-gray-400 dark:text-gray-200">
                    Postres
                    </h3>
                </div>
                </div>
                <div class="ps-3">
                <svg class="flex-shrink-0 w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m9 18 6-6-6-6" />
                </svg>
                </div>
            </div>
            </div>
        </a>

        </div>
    </div>

    </div>
    <!---------------------- FIN CATEGORIAS ------------------>
    

    <!---------------------- SECTION COMENTARIOS ------------------>
    <section class="py-14 bg-white font-poppins dark:bg-white">
        <div class="max-w-6xl px-4 py-6 mx-auto lg:py-4 md:px-6">
            <div class="max-w-xl mx-auto">
            <div class="text-center ">
                <div class="relative flex flex-col items-center mb-6">
                <h1 class="text-5xl font-leckerli dark:text-gray-200"> Coment<span class="text-digirest">arios</span>
                    </span> </h1>
                {{-- <div class="flex w-40 mt-2 mb-6 overflow-hidden rounded">
                    <div class="flex-1 h-2 bg-digirestClear">
                    </div>
                    <div class="flex-1 h-2 bg-digirest">
                    </div>
                    <div class="flex-1 h-2 bg-digirestDark">
                    </div>
                </div> --}}
                </div>
                <p class="mb-12 text-base text-center text-black">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus magni eius eaque?
                Pariatur
                numquam, odio quod nobis ipsum ex cupiditate?
                </p>
            </div>
            </div>

            <div class="grid grid-cols-1 gap-6 lg:grid-cols-2 ">
            <div class="py-6 bg-white rounded-md shadow dark:bg-gray-900">
                <div class="flex flex-wrap items-center justify-between pb-4 mb-6 space-x-2 border-b dark:border-gray-700">
                <div class="flex items-center px-6 mb-2 md:mb-0 ">
                    <div class="flex mr-2 rounded-full">
                    <img src="/images/cliente.png" alt="" class="object-cover w-12 h-12 rounded-full">
                    </div>
                    <div>
                    <h2 class="text-lg font-semibold text-gray-900 dark:text-gray-300">
                        Mariana López</h2>
                    <p class="text-xs text-gray-500 dark:text-gray-400">Web Designer</p>
                    </div>
                </div>
                <p class="px-6 text-base font-medium text-gray-600 dark:text-gray-400"> 12 de mayo de 2025
                </p>
                </div>
                <p class="px-6 mb-6 text-base text-gray-500 dark:text-gray-400">
                ¡Excelente atención y la comida llegó justo a tiempo! Reservar fue súper fácil, y el sabor del lomo saltado es simplemente espectacular. ¡Definitivamente volveré!
                </p>
                <div class="flex flex-wrap justify-between pt-4 border-t dark:border-gray-700">
                <div class="flex px-6 mb-2 md:mb-0">
                    <ul class="flex items-center justify-start mr-4">
                    <li>
                        <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-digirest dark:text-digirest bi bi-star-fill" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                            </path>
                        </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-digirest dark:text-digirest bi bi-star-fill" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                            </path>
                        </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-digirest dark:text-digirest bi bi-star-fill" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                            </path>
                        </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-digirest dark:text-digirest bi bi-star-fill" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                            </path>
                        </svg>
                        </a>
                    </li>
                    </ul>
                    <h2 class="text-sm text-gray-500 dark:text-gray-400">Calificación:<span class="font-semibold text-gray-600 dark:text-gray-300">
                        3.0</span>
                    </h2>
                </div>
                <div class="flex items-center px-6 space-x-1 text-sm font-medium text-gray-500 dark:text-gray-400">
                    <div class="flex items-center">
                    <div class="flex mr-3 text-sm text-gray-700 dark:text-gray-400">
                        <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 h-4 mr-1 text-digirest bi bi-hand-thumbs-up-fill" viewBox="0 0 16 16">
                            <path d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z">
                            </path>
                        </svg>
                        </a>
                        <span>12</span>
                    </div>
                    {{-- <div class="flex text-sm text-gray-700 dark:text-gray-400">
                        <a href="#" class="inline-flex hover:underline">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 h-4 mr-1 text-digirest bi bi-chat" viewBox="0 0 16 16">
                            <path d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z">
                            </path>
                        </svg>Reply</a>
                    </div> --}}
                    </div>
                </div>
                </div>
            </div>
            <div class="py-6 bg-white rounded-md shadow dark:bg-gray-900">
                <div class="flex flex-wrap items-center justify-between pb-4 mb-6 space-x-2 border-b dark:border-gray-700">
                <div class="flex items-center px-6 mb-2 md:mb-0 ">
                    <div class="flex mr-2 rounded-full">
                    <img src="/images/cliente.png" alt="" class="object-cover w-12 h-12 rounded-full">
                    </div>
                    <div>
                    <h2 class="text-lg font-semibold text-gray-900 dark:text-gray-300">
                        Pablo García</h2>
                    <p class="text-xs text-gray-500 dark:text-gray-400">Manager</p>
                    </div>
                </div>
                <p class="px-6 text-base font-medium text-gray-600 dark:text-gray-400"> 3 de mayo de 2025
                </p>
                </div>
                <p class="px-6 mb-6 text-base text-gray-500 dark:text-gray-400">
                Buena comida, pero el tiempo de espera fue un poco más largo de lo prometido. Aun así, la app es fácil de usar.
                </p>
                <div class="flex flex-wrap justify-between pt-4 border-t dark:border-gray-700">
                <div class="flex px-6 mb-2 md:mb-0">
                    <ul class="flex items-center justify-start mr-4">
                    <li>
                        <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-digirest dark:text-digirest bi bi-star-fill" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                            </path>
                        </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-digirest dark:text-digirest bi bi-star-fill" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                            </path>
                        </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-digirest dark:text-digirest bi bi-star-fill" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                            </path>
                        </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-digirest dark:text-digirest bi bi-star-fill" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                            </path>
                        </svg>
                        </a>
                    </li>
                    </ul>
                    <h2 class="text-sm text-gray-500 dark:text-gray-400">Calificación:<span class="font-semibold text-gray-600 dark:text-gray-300">
                        3.0</span>
                    </h2>
                </div>
                <div class="flex items-center px-6 space-x-1 text-sm font-medium text-gray-500 dark:text-gray-400">
                    <div class="flex items-center">
                    <div class="flex mr-3 text-sm text-gray-700 dark:text-gray-400">
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 h-4 mr-1 text-digirest bi bi-hand-thumbs-up-fill" viewBox="0 0 16 16">
                            <path d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z">
                            </path>
                        </svg></a>
                        <span>12</span>
                    </div>
                    {{-- <div class="flex text-sm text-gray-700 dark:text-gray-400">
                        <a href="#" class="inline-flex hover:underline">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 h-4 mr-1 text-digirest bi bi-chat" viewBox="0 0 16 16">
                            <path d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z">
                            </path>
                        </svg>Reply</a>
                    </div> --}}
                    </div>
                </div>
                </div>
            </div>
            <div class="py-6 bg-white rounded-md shadow dark:bg-gray-900">
                <div class="flex flex-wrap items-center justify-between pb-4 mb-6 space-x-2 border-b dark:border-gray-700">
                <div class="flex items-center px-6 mb-2 md:mb-0 ">
                    <div class="flex mr-2 rounded-full">
                    <img src="/images/cliente.png" alt="" class="object-cover w-12 h-12 rounded-full">
                    </div>
                    <div>
                    <h2 class="text-lg font-semibold text-gray-900 dark:text-gray-300">
                        Andrés Martínez</h2>
                    <p class="text-xs text-gray-500 dark:text-gray-400">Marketing Officer</p>
                    </div>
                </div>
                <p class="px-6 text-base font-medium text-gray-600 dark:text-gray-400"> 9 de mayo de 2025
                </p>
                </div>
                <p class="px-6 mb-6 text-base text-gray-500 dark:text-gray-400">
                La comida estaba riquísima y caliente. El sistema de reserva es intuitivo, aunque me gustaría que incluyeran más opciones veganas.
                </p>
                <div class="flex flex-wrap justify-between pt-4 border-t dark:border-gray-700">
                <div class="flex px-6 mb-2 md:mb-0">
                    <ul class="flex items-center justify-start mr-4">
                    <li>
                        <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-digirest dark:text-digirest bi bi-star-fill" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                            </path>
                        </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-digirest dark:text-digirest bi bi-star-fill" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                            </path>
                        </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-digirest dark:text-digirest bi bi-star-fill" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                            </path>
                        </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-digirest dark:text-digirest bi bi-star-fill" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                            </path>
                        </svg>
                        </a>
                    </li>
                    </ul>
                    <h2 class="text-sm text-gray-500 dark:text-gray-400">Calificación:<span class="font-semibold text-gray-600 dark:text-gray-300">
                        3.0</span>
                    </h2>
                </div>
                <div class="flex items-center px-6 space-x-1 text-sm font-medium text-gray-500 dark:text-gray-400">
                    <div class="flex items-center">
                    <div class="flex mr-3 text-sm text-gray-700 dark:text-gray-400">
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 h-4 mr-1 text-digirest bi bi-hand-thumbs-up-fill" viewBox="0 0 16 16">
                            <path d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z">
                            </path>
                        </svg></a>
                        <span>12</span>
                    </div>
                    {{-- <div class="flex text-sm text-gray-700 dark:text-gray-400">
                        <a href="#" class="inline-flex hover:underline">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 h-4 mr-1 text-digirest bi bi-chat" viewBox="0 0 16 16">
                            <path d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z">
                            </path>
                        </svg>Reply</a>
                    </div> --}}
                    </div>
                </div>
                </div>
            </div>
            <div class="py-6 bg-white rounded-md shadow dark:bg-gray-900">
                <div class="flex flex-wrap items-center justify-between pb-4 mb-6 space-x-2 border-b dark:border-gray-700">
                <div class="flex items-center px-6 mb-2 md:mb-0 ">
                    <div class="flex mr-2 rounded-full">
                    <img src="/images/cliente.png" alt="" class="object-cover w-12 h-12 rounded-full">
                    </div>
                    <div>
                    <h2 class="text-lg font-semibold text-gray-900 dark:text-gray-300">
                        Laura Jiménez</h2>
                    <p class="text-xs text-gray-500 dark:text-gray-400">Java Programmer</p>
                    </div>
                </div>
                <p class="px-6 text-base font-medium text-gray-600 dark:text-gray-400">  5 de mayo de 2025
                </p>
                </div>
                <p class="px-6 mb-6 text-base text-gray-500 dark:text-gray-400">
                Perfecto para almuerzos rápidos. Me encantó que pude elegir el horario exacto y ¡todo estuvo listo cuando llegué!
                </p>
                <div class="flex flex-wrap justify-between pt-4 border-t dark:border-gray-700">
                <div class="flex px-6 mb-2 md:mb-0">
                    <ul class="flex items-center justify-start mr-4">
                    <li>
                        <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-digirest dark:text-digirest bi bi-star-fill" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                            </path>
                        </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-digirest dark:text-digirest bi bi-star-fill" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                            </path>
                        </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-digirest dark:text-digirest bi bi-star-fill" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                            </path>
                        </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-digirest dark:text-digirest bi bi-star-fill" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                            </path>
                        </svg>
                        </a>
                    </li>
                    </ul>
                    <h2 class="text-sm text-gray-500 dark:text-gray-400">Calificación:<span class="font-semibold text-gray-600 dark:text-gray-300">
                        3.0</span>
                    </h2>
                </div>
                <div class="flex items-center px-6 space-x-1 text-sm font-medium text-gray-500 dark:text-gray-400">
                    <div class="flex items-center">
                    <div class="flex mr-3 text-sm text-gray-700 dark:text-gray-400">
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 h-4 mr-1 text-digirest bi bi-hand-thumbs-up-fill" viewBox="0 0 16 16">
                            <path d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z">
                            </path>
                        </svg></a>
                        <span>12</span>
                    </div>
                    {{-- <div class="flex text-sm text-gray-700 dark:text-gray-400">
                        <a href="#" class="inline-flex hover:underline">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 h-4 mr-1 text-digirest bi bi-chat" viewBox="0 0 16 16">
                            <path d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z">
                            </path>
                        </svg>Reply</a>
                    </div> --}}
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </section>
    <!---------------------- FIN COMENTARIOS ------------------>

    <!---------------------- Sección de Contacto y Ubicación ----------------------->
    <section class="bg-neutral-900 py-16 px-4 sm:px-6 lg:px-8">
        <div class="container mx-auto max-w-7xl">
            <div class="flex flex-col md:flex-row gap-8 md:gap-12 items-stretch">
                
                <!-- Columna Izquierda - Mapa -->
                <div class="w-full md:w-1/2">
                    <div class="h-64 md:h-96 w-full rounded-lg overflow-hidden shadow-2xl border border-zinc-700">
                        {{-- <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31208.84167394065!2d-76.97531545!3d-12.0463731!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c6f19ee5b4c5%3A0x4c9e82b8c8b8b8b8!2sSanta%20Anita%2C%20Lima!5e0!3m2!1ses!2spe!4v1609459200000!5m2!1ses!2spe"
                            width="100%" 
                            height="100%" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade"
                            class="w-full h-full">
                        </iframe> --}}
                    </div>
                </div>

                <!-- Columna Derecha - Información de Contacto -->
                <div class="w-full md:w-1/2 flex flex-col justify-center space-y-8">
                    
                    <!-- Secciones Ubícanos y Contáctanos lado a lado -->
                    <div class="flex flex-col sm:flex-row gap-8">
                        
                        <!-- Sección Ubicanos -->
                        <div class="flex-1 space-y-4">
                            <div class="flex items-center space-x-3">
                                <div class="w-8 h-8 bg-digirest rounded-full flex items-center justify-center">
                                    <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <h2 class="text-xl md:text-2xl font-bold text-white tracking-wide">
                                    Ubícanos
                                </h2>
                            </div>
                            <div class="pl-11">
                                <p class="text-gray-300 text-base leading-relaxed">
                                    Av. Los Frutales 344<br>
                                    Santa Anita, Lima 43<br>
                                    Lima, Perú
                                </p>
                            </div>
                        </div>

                        <!-- Sección Contáctanos -->
                        <div class="flex-1 space-y-4">
                            <div class="flex items-center space-x-3">
                                <div class="w-8 h-8 bg-digirest rounded-full flex items-center justify-center">
                                    <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                                    </svg>
                                </div>
                                <h3 class="text-xl md:text-2xl font-bold text-white tracking-wide">
                                    Contáctanos
                                </h3>
                            </div>
                            <div class="pl-11 space-y-3">
                                <div class="space-y-1">
                                    <p class="text-sm text-gray-400 font-medium">Celular</p>
                                    <p class="text-white text-base font-semibold">+51 987 654 321</p>
                                </div>
                                <div class="space-y-1">
                                    <p class="text-sm text-gray-400 font-medium">Teléfono Fijo</p>
                                    <p class="text-white text-base font-semibold">(01) 345 6789</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Horarios de Atención -->
                    <div class="bg-zinc-800 rounded-lg p-6 border border-zinc-700">
                        <div class="flex items-center space-x-3 mb-4">
                            <div class="w-6 h-6 bg-digirest rounded-full flex items-center justify-center">
                                <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <h4 class="text-lg font-semibold text-white">Horarios de Atención</h4>
                        </div>
                        <div class="space-y-2 text-gray-300">
                            <div class="flex justify-between">
                                <span class="font-medium">Lun - Vie:</span>
                                <span>9:00 AM - 10:00 PM</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="font-medium">Sábados:</span>
                                <span>10:00 AM - 11:00 PM</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="font-medium">Domingos:</span>
                                <span>11:00 AM - 9:00 PM</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!---------------------- FIN Sección de Contacto y Ubicación ----------------------->

</div>
