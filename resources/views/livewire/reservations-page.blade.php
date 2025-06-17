<div class="bg-gray-50 min-h-screen p-4">
    <div class="max-w-7xl mx-auto bg-white rounded-lg shadow-lg overflow-hidden">
        <!-- Header -->
        <div class="bg-black text-white p-6">
            <h1 class="text-3xl font-bold text-center">Reserva tu Mesa</h1>
            <p class="text-gray-300 text-center mt-2">Completa los datos y selecciona tu mesa preferida</p>
        </div>

        <div class="flex flex-col lg:flex-row min-h-[600px]">
            <!-- Panel Izquierdo - Formulario -->
            <div class="w-full lg:w-1/2 p-6 border-r border-gray-200">
                <!-- Formulario de datos personales -->
                <section aria-labelledby="personal-data-heading" class="mb-8">
                    <h2 id="personal-data-heading" class="text-2xl font-semibold mb-6 text-black flex items-center">
                        <svg class="w-6 h-6 text-gold mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                        </svg>
                        Datos de la Reserva
                    </h2>
                    
                    <div class="space-y-4">
                        <div>
                            <label for="fullName" class="block text-sm font-medium text-gray-700 mb-2">Nombre Completo *</label>
                            <input 
                                type="text" 
                                id="fullName" 
                                name="fullName"
                                required
                                aria-required="true"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gold focus:border-gold transition-colors text-lg"
                                placeholder="Ingresa tu nombre completo"
                            >
                        </div>
                        
                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Teléfono *</label>
                            <input 
                                type="tel" 
                                id="phone" 
                                name="phone"
                                required
                                aria-required="true"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gold focus:border-gold transition-colors text-lg"
                                placeholder="+51 999 999 999"
                            >
                        </div>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="date" class="block text-sm font-medium text-gray-700 mb-2">Fecha *</label>
                                <input 
                                    type="date" 
                                    id="date" 
                                    name="date"
                                    required
                                    aria-required="true"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gold focus:border-gold transition-colors text-lg"
                                >
                            </div>
                            <div>
                                <label for="guests" class="block text-sm font-medium text-gray-700 mb-2">Nº de Comensales *</label>
                                <select 
                                    id="guests" 
                                    name="guests"
                                    required
                                    aria-required="true"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gold focus:border-gold transition-colors text-lg"
                                >
                                    <option value="">Seleccionar</option>
                                    <option value="1">1 persona</option>
                                    <option value="2">2 personas</option>
                                    <option value="3">3 personas</option>
                                    <option value="4">4 personas</option>
                                    <option value="5">5 personas</option>
                                    <option value="6">6 personas</option>
                                    <option value="7">7 personas</option>
                                    <option value="8">8 personas</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="startTime" class="block text-sm font-medium text-gray-700 mb-2">Hora Inicio *</label>
                                <input 
                                    type="time" 
                                    id="startTime" 
                                    name="startTime"
                                    required
                                    aria-required="true"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gold focus:border-gold transition-colors text-lg"
                                >
                            </div>
                            <div>
                                <label for="endTime" class="block text-sm font-medium text-gray-700 mb-2">Hora Fin *</label>
                                <input 
                                    type="time" 
                                    id="endTime" 
                                    name="endTime"
                                    required
                                    aria-required="true"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gold focus:border-gold transition-colors text-lg"
                                >
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Resumen de la reserva -->
                <section aria-labelledby="summary-heading" class="mb-6">
                    <h3 id="summary-heading" class="text-xl font-semibold mb-4 text-black flex items-center">
                        <svg class="w-5 h-5 text-gold mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                        Resumen de Reserva
                    </h3>
                    <div id="reservation-summary" class="bg-gray-50 p-4 rounded-lg border-2 border-dashed border-gray-300">
                        <div id="no-selection" class="text-gray-500 text-center py-6">
                            <svg class="w-12 h-12 text-gray-400 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <p class="font-medium">Selecciona una mesa</p>
                            <p class="text-sm">para ver el resumen de tu reserva</p>
                        </div>
                        <div id="selection-details" class="hidden">
                            <div class="bg-white p-4 rounded-lg border border-gold">
                                <div class="flex items-center justify-between mb-3">
                                    <span class="text-lg font-bold text-gold">Mesa Seleccionada</span>
                                    <span id="selected-table" class="text-2xl font-bold text-black bg-gold px-3 py-1 rounded-full"></span>
                                </div>
                                <div class="flex items-center text-gray-700">
                                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z"/>
                                    </svg>
                                    <span>Capacidad: </span>
                                    <span id="selected-capacity" class="ml-1 font-semibold text-black"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Botón de reserva -->
                <div class="text-center">
                    <button 
                        type="submit"
                        id="reserve-btn"
                        disabled
                        class="w-full px-8 py-4 bg-gray-300 text-gray-500 rounded-lg cursor-not-allowed transition-all duration-200 font-bold text-xl"
                        aria-describedby="reserve-btn-help"
                    >
                        Reservar Ahora
                    </button>
                    <p id="reserve-btn-help" class="text-sm text-gray-500 mt-3">
                        Completa todos los campos y selecciona una mesa para continuar
                    </p>
                </div>
            </div>

            <!-- Panel Derecho - Selección de Mesas -->
            <div class="w-full lg:w-1/2 p-6 bg-gray-50">
                <!-- Filtro de pisos -->
                <section aria-labelledby="floor-filter-heading" class="mb-6">
                    <h3 id="floor-filter-heading" class="text-2xl font-semibold mb-4 text-black flex items-center">
                        <svg class="w-6 h-6 text-gold mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h12M9 7h6m-6 4h6m-6 4h6"/>
                        </svg>
                        Selecciona el Piso
                    </h3>
                    <div class="flex gap-3">
                        <button 
                            type="button" 
                            id="floor1-btn"
                            onclick="filterFloor('1')"
                            class="floor-filter active flex-1 px-6 py-3 rounded-lg border-2 border-gold bg-gold text-black font-bold hover:bg-yellow-400 transition-colors text-lg"
                            aria-pressed="true"
                        >
                            Primer Piso
                        </button>
                        <button 
                            type="button" 
                            id="floor2-btn"
                            onclick="filterFloor('2')"
                            class="floor-filter flex-1 px-6 py-3 rounded-lg border-2 border-gray-300 bg-white text-gray-700 font-bold hover:border-gold hover:text-gold transition-colors text-lg"
                            aria-pressed="false"
                        >
                            Segundo Piso
                        </button>
                    </div>
                </section>

                <!-- Grid de mesas -->
                <section aria-labelledby="tables-heading" class="mb-6">
                    <h3 id="tables-heading" class="text-xl font-semibold mb-4 text-black flex items-center">
                        <svg class="w-5 h-5 text-gold mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/>
                        </svg>
                        Mesas Disponibles
                    </h3>
                    
                    <div class="mb-4 flex items-center gap-6 text-sm">
                        <div class="flex items-center">
                            <div class="w-4 h-4 rounded-full bg-green-500 mr-2"></div>
                            <span class="text-gray-700">Disponible</span>
                        </div>
                        <div class="flex items-center">
                            <div class="w-4 h-4 rounded-full bg-red-500 opacity-60 mr-2"></div>
                            <span class="text-gray-700">Ocupada</span>
                        </div>
                        <div class="flex items-center">
                            <div class="w-4 h-4 rounded-full bg-gold mr-2"></div>
                            <span class="text-gray-700">Seleccionada</span>
                        </div>
                    </div>
                    
                    <div id="tables-grid" class="grid grid-cols-3 sm:grid-cols-4 gap-4">
                        <!-- Mesas del primer piso -->
                        <button 
                            type="button"
                            class="table-btn available floor-1 w-24 h-24 rounded-full border-3 border-green-400 bg-green-50 hover:bg-green-100 hover:border-green-500 hover:scale-105 transition-all duration-200 flex flex-col items-center justify-center group focus:outline-none focus:ring-2 focus:ring-gold shadow-lg"
                            data-table="M01"
                            data-capacity="2"
                            data-floor="1"
                            onclick="selectTable('M01', 2)"
                            aria-label="Mesa M01 para 2 personas, disponible"
                        >
                            <span class="text-sm font-bold text-green-700 group-hover:text-green-800">M01</span>
                            <div class="flex items-center mt-1">
                                <svg class="w-4 h-4 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z"/>
                                </svg>
                                <span class="text-sm text-green-600 ml-1 font-semibold">2</span>
                            </div>
                        </button>

                        <button 
                            type="button"
                            class="table-btn available floor-1 w-24 h-24 rounded-full border-3 border-green-400 bg-green-50 hover:bg-green-100 hover:border-green-500 hover:scale-105 transition-all duration-200 flex flex-col items-center justify-center group focus:outline-none focus:ring-2 focus:ring-gold shadow-lg"
                            data-table="M02"
                            data-capacity="4"
                            data-floor="1"
                            onclick="selectTable('M02', 4)"
                            aria-label="Mesa M02 para 4 personas, disponible"
                        >
                            <span class="text-sm font-bold text-green-700 group-hover:text-green-800">M02</span>
                            <div class="flex items-center mt-1">
                                <svg class="w-4 h-4 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z"/>
                                </svg>
                                <span class="text-sm text-green-600 ml-1 font-semibold">4</span>
                            </div>
                        </button>

                        <button 
                            type="button"
                            class="table-btn occupied floor-1 w-24 h-24 rounded-full border-3 border-red-400 bg-red-50 opacity-60 cursor-not-allowed flex flex-col items-center justify-center shadow-lg"
                            data-table="M03"
                            data-capacity="6"
                            data-floor="1"
                            disabled
                            aria-label="Mesa M03 para 6 personas, ocupada"
                        >
                            <span class="text-sm font-bold text-red-700">M03</span>
                            <div class="flex items-center mt-1">
                                <svg class="w-4 h-4 text-red-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z"/>
                                </svg>
                                <span class="text-sm text-red-600 ml-1 font-semibold">6</span>
                            </div>
                        </button>

                        <button 
                            type="button"
                            class="table-btn available floor-1 w-24 h-24 rounded-full border-3 border-green-400 bg-green-50 hover:bg-green-100 hover:border-green-500 hover:scale-105 transition-all duration-200 flex flex-col items-center justify-center group focus:outline-none focus:ring-2 focus:ring-gold shadow-lg"
                            data-table="M04"
                            data-capacity="8"
                            data-floor="1"
                            onclick="selectTable('M04', 8)"
                            aria-label="Mesa M04 para 8 personas, disponible"
                        >
                            <span class="text-sm font-bold text-green-700 group-hover:text-green-800">M04</span>
                            <div class="flex items-center mt-1">
                                <svg class="w-4 h-4 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z"/>
                                </svg>
                                <span class="text-sm text-green-600 ml-1 font-semibold">8</span>
                            </div>
                        </button>

                        <button 
                            type="button"
                            class="table-btn available floor-1 w-24 h-24 rounded-full border-3 border-green-400 bg-green-50 hover:bg-green-100 hover:border-green-500 hover:scale-105 transition-all duration-200 flex flex-col items-center justify-center group focus:outline-none focus:ring-2 focus:ring-gold shadow-lg"
                            data-table="M05"
                            data-capacity="2"
                            data-floor="1"
                            onclick="selectTable('M05', 2)"
                            aria-label="Mesa M05 para 2 personas, disponible"
                        >
                            <span class="text-sm font-bold text-green-700 group-hover:text-green-800">M05</span>
                            <div class="flex items-center mt-1">
                                <svg class="w-4 h-4 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z"/>
                                </svg>
                                <span class="text-sm text-green-600 ml-1 font-semibold">2</span>
                            </div>
                        </button>

                        <button 
                            type="button"
                            class="table-btn occupied floor-1 w-24 h-24 rounded-full border-3 border-red-400 bg-red-50 opacity-60 cursor-not-allowed flex flex-col items-center justify-center shadow-lg"
                            data-table="M06"
                            data-capacity="4"
                            data-floor="1"
                            disabled
                            aria-label="Mesa M06 para 4 personas, ocupada"
                        >
                            <span class="text-sm font-bold text-red-700">M06</span>
                            <div class="flex items-center mt-1">
                                <svg class="w-4 h-4 text-red-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z"/>
                                </svg>
                                <span class="text-sm text-red-600 ml-1 font-semibold">4</span>
                            </div>
                        </button>

                        <!-- Mesas del segundo piso -->
                        <button 
                            type="button"
                            class="table-btn available floor-2 hidden w-24 h-24 rounded-full border-3 border-green-400 bg-green-50 hover:bg-green-100 hover:border-green-500 hover:scale-105 transition-all duration-200 flex flex-col items-center justify-center group focus:outline-none focus:ring-2 focus:ring-gold shadow-lg"
                            data-table="M07"
                            data-capacity="2"
                            data-floor="2"
                            onclick="selectTable('M07', 2)"
                            aria-label="Mesa M07 para 2 personas, disponible"
                        >
                            <span class="text-sm font-bold text-green-700 group-hover:text-green-800">M07</span>
                            <div class="flex items-center mt-1">
                                <svg class="w-4 h-4 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z"/>
                                </svg>
                                <span class="text-sm text-green-600 ml-1 font-semibold">2</span>
                            </div>
                        </button>

                        <button 
                            type="button"
                            class="table-btn occupied floor-2 hidden w-24 h-24 rounded-full border-3 border-red-400 bg-red-50 opacity-60 cursor-not-allowed flex flex-col items-center justify-center shadow-lg"
                            data-table="M08"
                            data-capacity="4"
                            data-floor="2"
                            disabled
                            aria-label="Mesa M08 para 4 personas, ocupada"
                        >
                            <span class="text-sm font-bold text-red-700">M08</span>
                            <div class="flex items-center mt-1">
                                <svg class="w-4 h-4 text-red-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z"/>
                                </svg>
                                <span class="text-sm text-red-600 ml-1 font-semibold">4</span>
                            </div>
                        </button>

                        <button 
                            type="button"
                            class="table-btn available floor-2 hidden w-24 h-24 rounded-full border-3 border-green-400 bg-green-50 hover:bg-green-100 hover:border-green-500 hover:scale-105 transition-all duration-200 flex flex-col items-center justify-center group focus:outline-none focus:ring-2 focus:ring-gold shadow-lg"
                            data-table="M09"
                            data-capacity="6"
                            data-floor="2"
                            onclick="selectTable('M09', 6)"
                            aria-label="Mesa M09 para 6 personas, disponible"
                        >
                            <span class="text-sm font-bold text-green-700 group-hover:text-green-800">M09</span>
                            <div class="flex items-center mt-1">
                                <svg class="w-4 h-4 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z"/>
                                </svg>
                                <span class="text-sm text-green-600 ml-1 font-semibold">6</span>
                            </div>
                        </button>

                        <button 
                            type="button"
                            class="table-btn available floor-2 hidden w-24 h-24 rounded-full border-3 border-green-400 bg-green-50 hover:bg-green-100 hover:border-green-500 hover:scale-105 transition-all duration-200 flex flex-col items-center justify-center group focus:outline-none focus:ring-2 focus:ring-gold shadow-lg"
                            data-table="M10"
                            data-capacity="8"
                            data-floor="2"
                            onclick="selectTable('M10', 8)"
                            aria-label="Mesa M10 para 8 personas, disponible"
                        >
                            <span class="text-sm font-bold text-green-700 group-hover:text-green-800">M10</span>
                            <div class="flex items-center mt-1">
                                <svg class="w-4 h-4 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z"/>
                                </svg>
                                <span class="text-sm text-green-600 ml-1 font-semibold">8</span>
                            </div>
                        </button>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
