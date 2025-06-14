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
                    <div class="features-container flex flex-col space-y-4 px-4 items-center md:items-start">
                    <p class="feature-item flex items-center gap-x-2 text-base md:text-lg text-gray-300">
                        <svg class="w-6 h-6 text-digirest" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                        </svg>
                        Recibe tus platillos favoritos en la puerta de tu casa y disfruta del verdadero sabor.
                    </p>
                    <p class="feature-item flex items-center gap-x-2 text-base md:text-lg text-gray-300">
                        <svg class="w-5 h-5 text-digirest" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                        </svg>
                        Descubre un menú variado y delicioso solo aquí, en DigiRest.
                    </p>
                    <p class="feature-item flex items-center gap-x-2 text-base md:text-lg text-gray-300">
                        <svg class="w-6 h-6 text-digirest" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                        </svg>
                        Realiza tus reservas de manera sencilla y rápida para vivir una experiencia inolvidable.
                    </p>
                    </div>

                    <div class="mt-4 flex flex-wrap gap-4 justify-center md:justify-start px-4">
                    <a href="/reservas"
                        class="inline-flex items-center py-3 px-6 text-sm font-semibold rounded-lg bg-digirest text-black hover:bg-digirestDark transition">
                        Reservar mesa
                        <svg class="inline-block ml-2 w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                        <path d="M9 18l6-6-6-6"></path>
                        </svg>
                    </a>
                    <a href="#contacto"
                        class="inline-flex items-center py-3 px-6 text-sm font-medium rounded-lg border border-gray-200 bg-white text-black hover:bg-gray-200 transition">
                        Contacto
                    </a>
                    </div>
                </div>

                <!-- IMAGEN -->
                <div class="container-padre flex justify-center md:justify-end overflow-hidden ">
                    <div class="container-hijo">
                        <img src="/images/robot-chef-v2.png" alt="Robot-Chef"
                    class="chef-img w-full h-auto object-contain rounded-lg shadow-md" />
                    </div>
                </div>
            </div>
        </div>
        <!---------------------- FIN DE SECCION INICIO ------------------>



        <!----------------------SECTION BIENVENIDOS ------------------>
        <section class="min-h-screen flex items-center justify-center py-10 px-4 relative overflow-hidden">
            <!-- Decorative background element -->
            <div class="absolute top-0 right-0 w-96 h-96 bg-gradient-to-br from-primary/5 to-transparent rounded-full blur-3xl transform translate-x-1/2 -translate-y-1/2"></div>
            <div class="absolute bottom-0 left-0 w-80 h-80 bg-gradient-to-tr from-blue-500/5 to-transparent rounded-full blur-3xl transform -translate-x-1/2 translate-y-1/2"></div>
            
            <div class="max-w-6xl mx-auto w-full">
                <div class="flex flex-col items-center justify-center text-center space-y-6">
                    
                    <!-- Contenido de texto centrado arriba -->
                    <div class="max-w-xl mx-auto">
                        <div class="text-center ">
                            <div class="relative flex flex-col items-center mb-6">
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
                        <a href="reservas" class="group relative bg-white rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 card-shadow-menu h-80">
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
                                        Platillos excelentes
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
    <div class="bg-gradient-to-b from-black to-gray-800 py-20">
    <div class="max-w-xl mx-auto">
        <div class="text-center ">
        <div class="relative flex flex-col items-center mb-6">
            <h1 class="text-5xl text-white font-leckerli dark:text-gray-200">Nuestra <span class="text-digirest">Carta</span> </h1>
            {{-- <div class="flex w-40 mt-2 mb-6 overflow-hidden rounded">
            <div class="flex-1 h-2 bg-digiresClear">
            </div>
            <div class="flex-1 h-2 bg-digiresClear">
            </div>
            <div class="flex-1 h-2 bg-digirest">
            </div>
            </div> --}}
        </div>
        <p class="mb-12 text-base text-center text-gray-400">
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
    

    <!-------------------- Sección de Testimonios -------------------------->
    <section class="bg-gradient-to-b from-gray-800 to-black py-16 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <!-- Título de la sección -->
            <div class="text-center mb-12">
                <h2 class="text-4xl sm:text-5xl font-bold text-white mb-4">
                    Lo que dicen nuestros 
                    <span class="text-[#FAC122]">clientes</span>
                </h2>
                <p class="text-gray-300 text-lg max-w-2xl mx-auto">
                    Descubre por qué miles de usuarios confían en nosotros para sus proyectos más importantes
                </p>
            </div>

            <!-- Grid de testimonios -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-8">
                
                <!-- Testimonio 1 -->
                <div class="bg-white rounded-2xl shadow-md p-8 hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                    <!-- Header del testimonio -->
                    <div class="flex items-center mb-6">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=64&h=64&fit=crop&crop=face" 
                            alt="Avatar de Carlos" 
                            class="w-14 h-14 rounded-full object-cover mr-4">
                        <div class="flex-1">
                            <h3 class="font-semibold text-gray-900 text-lg">Carlos Mendoza</h3>
                            <p class="text-gray-600 text-sm">CEO, TechStart Solutions</p>
                            <p class="text-gray-400 text-xs mt-1">15 de mayo, 2024</p>
                        </div>
                    </div>

                    <!-- Contenido del comentario -->
                    <p class="text-gray-700 mb-6 leading-relaxed">
                        "Excelente servicio y atención al cliente. El equipo superó nuestras expectativas en cada etapa del proyecto. La calidad del trabajo y la dedicación son impresionantes."
                    </p>

                    <!-- Footer con estrellas y likes -->
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <div class="flex text-[#FAC122] text-lg mr-2">
                                ⭐⭐⭐⭐⭐
                            </div>
                            <span class="text-gray-600 text-sm font-medium">5.0</span>
                        </div>
                        <div class="flex items-center text-gray-500">
                            <svg class="w-5 h-5 mr-1 hover:text-[#FAC122] cursor-pointer transition-colors" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z"></path>
                            </svg>
                            <span class="text-sm">24</span>
                        </div>
                    </div>
                </div>

                <!-- Testimonio 2 -->
                <div class="bg-white rounded-2xl shadow-md p-8 hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                    <div class="flex items-center mb-6">
                        <img src="https://images.unsplash.com/photo-1494790108755-2616b95aa46c?w=64&h=64&fit=crop&crop=face" 
                             alt="Avatar de María" 
                             class="w-14 h-14 rounded-full object-cover mr-4">
                        <div class="flex-1">
                            <h3 class="font-semibold text-gray-900 text-lg">María González</h3>
                            <p class="text-gray-600 text-sm">Directora de Marketing, InnovaCorp</p>
                            <p class="text-gray-400 text-xs mt-1">8 de mayo, 2024</p>
                        </div>
                    </div>

                    <p class="text-gray-700 mb-6 leading-relaxed">
                        "Una experiencia increíble de principio a fin. El nivel de profesionalismo y la capacidad de adaptarse a nuestras necesidades específicas nos convenció por completo."
                    </p>

                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <div class="flex text-[#FAC122] text-lg mr-2">
                                ⭐⭐⭐⭐⭐
                            </div>
                            <span class="text-gray-600 text-sm font-medium">5.0</span>
                        </div>
                        <div class="flex items-center text-gray-500">
                            <svg class="w-5 h-5 mr-1 hover:text-[#FAC122] cursor-pointer transition-colors" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z"></path>
                            </svg>
                            <span class="text-sm">18</span>
                        </div>
                    </div>
                </div>

                <!-- Testimonio 3 -->
                <div class="bg-white rounded-2xl shadow-md p-8 hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                    <div class="flex items-center mb-6">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=64&h=64&fit=crop&crop=face" 
                             alt="Avatar de Roberto" 
                             class="w-14 h-14 rounded-full object-cover mr-4">
                        <div class="flex-1">
                            <h3 class="font-semibold text-gray-900 text-lg">Roberto Silva</h3>
                            <p class="text-gray-600 text-sm">Fundador, EcoTech Innovations</p>
                            <p class="text-gray-400 text-xs mt-1">3 de mayo, 2024</p>
                        </div>
                    </div>

                    <p class="text-gray-700 mb-6 leading-relaxed">
                        "Trabajar con este equipo ha sido una experiencia transformadora. Su enfoque innovador y atención al detalle realmente marcaron la diferencia en nuestro proyecto."
                    </p>

                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <div class="flex text-[#FAC122] text-lg mr-2">
                                ⭐⭐⭐⭐☆
                            </div>
                            <span class="text-gray-600 text-sm font-medium">4.0</span>
                        </div>
                        <div class="flex items-center text-gray-500">
                            <svg class="w-5 h-5 mr-1 hover:text-[#FAC122] cursor-pointer transition-colors" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z"></path>
                            </svg>
                            <span class="text-sm">12</span>
                        </div>
                    </div>
                </div>

                <!-- Testimonio 4 -->
                <div class="bg-white rounded-2xl shadow-md p-8 hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                    <div class="flex items-center mb-6">
                        <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=64&h=64&fit=crop&crop=face" 
                             alt="Avatar de Ana" 
                             class="w-14 h-14 rounded-full object-cover mr-4">
                        <div class="flex-1">
                            <h3 class="font-semibold text-gray-900 text-lg">Ana Martínez</h3>
                            <p class="text-gray-600 text-sm">CTO, DigitalFlow Agency</p>
                            <p class="text-gray-400 text-xs mt-1">28 de abril, 2024</p>
                        </div>
                    </div>

                    <p class="text-gray-700 mb-6 leading-relaxed">
                        "La comunicación fue fluida durante todo el proceso y los resultados superaron ampliamente nuestras expectativas. Definitivamente recomendaría sus servicios."
                    </p>

                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <div class="flex text-[#FAC122] text-lg mr-2">
                                ⭐⭐⭐⭐⭐
                            </div>
                            <span class="text-gray-600 text-sm font-medium">5.0</span>
                        </div>
                        <div class="flex items-center text-gray-500">
                            <svg class="w-5 h-5 mr-1 hover:text-[#FAC122] cursor-pointer transition-colors" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z"></path>
                            </svg>
                            <span class="text-sm">31</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!---------------------- FIN COMENTARIOS ----------------------->

    <!---------------------- Sección de Contacto y Ubicación ----------------------->
    <section id="contacto" class="bg-gradient-to-b from-black to-gray-800 py-16 px-4 sm:px-6 lg:px-8">
        <div class="container mx-auto max-w-7xl">

            <div class="text-center mb-12">
                <h2 class="text-4xl sm:text-5xl font-bold text-white mb-4">
                    Contáct<span class="text-[#FAC122]">anos</span>
                </h2>
                <p class="text-gray-300 text-lg max-w-2xl mx-auto">
                    Gracias por visitar nuestro sitio web. Esperamos puedas visitarnos para vivir una experiencia inolvidable
                </p>
            </div>  
            <div class="flex flex-col md:flex-row gap-8 md:gap-12 items-stretch">
                
                <!-- Columna Izquierda - Mapa -->
                <div class="w-full md:w-1/2">
                    <div class="h-64 md:h-96 w-full rounded-lg overflow-hidden shadow-2xl border border-zinc-700">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31208.84167394065!2d-76.97531545!3d-12.0463731!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c6f19ee5b4c5%3A0x4c9e82b8c8b8b8b8!2sSanta%20Anita%2C%20Lima!5e0!3m2!1ses!2spe!4v1609459200000!5m2!1ses!2spe"
                            width="100%" 
                            height="100%" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade"
                            class="w-full h-full">
                        </iframe>
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
