<div class="bg-gray-50 min-h-screen p-4">
    <div class="max-w-4xl mx-auto bg-white rounded-lg shadow-lg">
        <!-- Header -->
        <div class="bg-black text-white p-6 rounded-t-lg">
            <h1 class="text-2xl font-bold text-center">Reserva tu Mesa</h1>
            <p class="text-gray-300 text-center mt-2">Completa los datos para realizar tu reserva</p>
        </div>

        <div class="p-6">
            <!-- Formulario de datos personales -->
            <section aria-labelledby="personal-data-heading" class="mb-8">
                <h2 id="personal-data-heading" class="text-xl font-semibold mb-4 text-black">Datos de la Reserva</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    <div>
                        <label for="fullName" class="block text-sm font-medium text-gray-700 mb-1">Nombre Completo *</label>
                        <input 
                            type="text" 
                            id="fullName" 
                            name="fullName"
                            required
                            aria-required="true"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-digirest focus:border-digirest transition-colors"
                            placeholder="Ingresa tu nombre completo"
                        >
                    </div>
                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Teléfono o Celular*</label>
                        <input 
                            type="tel" 
                            id="phone" 
                            name="phone"
                            required
                            aria-required="true"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-digirest focus:border-digirest transition-colors"
                            placeholder="+51 999 999 999"
                        >
                    </div>
                    <div>
                        <label for="date" class="block text-sm font-medium text-gray-700 mb-1">Fecha *</label>
                        <input 
                            type="date" 
                            id="date" 
                            name="date"
                            required
                            aria-required="true"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-digirest focus:border-digirest transition-colors"
                        >
                    </div>
                    <div>
                        <label for="startTime" class="block text-sm font-medium text-gray-700 mb-1">Hora Inicio *</label>
                        <input 
                            type="time" 
                            id="startTime" 
                            name="startTime"
                            required
                            aria-required="true"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-digirest focus:border-digirest transition-colors"
                        >
                    </div>
                    <div>
                        <label for="endTime" class="block text-sm font-medium text-gray-700 mb-1">Hora Fin *</label>
                        <input 
                            type="time" 
                            id="endTime" 
                            name="endTime"
                            required
                            aria-required="true"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-digirest focus:border-digirest transition-colors"
                        >
                    </div>
                    <div>
                        <label for="guests" class="block text-sm font-medium text-gray-700 mb-1">Nº de Comensales *</label>
                        <select 
                            id="guests" 
                            name="guests"
                            required
                            aria-required="true"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-digirest focus:border-digirest transition-colors"
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
            </section>

            <!-- Filtro de pisos -->
            <section aria-labelledby="floor-filter-heading" class="mb-6">
                <h3 id="floor-filter-heading" class="text-lg font-semibold mb-3 text-black">Selecciona el Piso</h3>
                <div class="flex gap-4">
                    <button 
                        type="button" 
                        id="floor1-btn"
                        onclick="filterFloor('1')"
                        class="floor-filter active px-6 py-2 rounded-md border-2 border-digirest bg-digirest text-black font-medium hover:bg-yellow-400 transition-colors"
                        aria-pressed="true"
                    >
                        Primer Piso
                    </button>
                    <button 
                        type="button" 
                        id="floor2-btn"
                        onclick="filterFloor('2')"
                        class="floor-filter px-6 py-2 rounded-md border-2 border-gray-300 bg-white text-gray-700 font-medium hover:border-digirest hover:text-digirest transition-colors"
                        aria-pressed="false"
                    >
                        Segundo Piso
                    </button>
                </div>
            </section>

            <!-- Grid de mesas -->
            <section aria-labelledby="tables-heading" class="mb-8">
                <h3 id="tables-heading" class="text-lg font-semibold mb-4 text-black">Mesas Disponibles</h3>
                <div id="tables-grid" class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4">
                    <!-- Mesas del primer piso -->
                    <button 
                        type="button"
                        class="table-btn available floor-1 w-20 h-20 rounded-full border-2 border-green-400 bg-green-50 hover:bg-green-100 hover:border-green-500 transition-all duration-200 flex flex-col items-center justify-center group focus:outline-none focus:ring-2 focus:ring-digirest"
                        data-table="M01"
                        data-capacity="2"
                        data-floor="1"
                        onclick="selectTable('M01', 2)"
                        aria-label="Mesa M01 para 2 personas, disponible"
                    >
                        <span class="text-xs font-bold text-green-700 group-hover:text-green-800">M01</span>
                        <div class="flex items-center mt-1">
                            <svg class="w-3 h-3 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z"/>
                            </svg>
                            <span class="text-xs text-green-600 ml-1">2</span>
                        </div>
                    </button>

                    <button 
                        type="button"
                        class="table-btn available floor-1 w-20 h-20 rounded-full border-2 border-green-400 bg-green-50 hover:bg-green-100 hover:border-green-500 transition-all duration-200 flex flex-col items-center justify-center group focus:outline-none focus:ring-2 focus:ring-digirest"
                        data-table="M02"
                        data-capacity="4"
                        data-floor="1"
                        onclick="selectTable('M02', 4)"
                        aria-label="Mesa M02 para 4 personas, disponible"
                    >
                        <span class="text-xs font-bold text-green-700 group-hover:text-green-800">M02</span>
                        <div class="flex items-center mt-1">
                            <svg class="w-3 h-3 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z"/>
                            </svg>
                            <span class="text-xs text-green-600 ml-1">4</span>
                        </div>
                    </button>

                    <button 
                        type="button"
                        class="table-btn occupied floor-1 w-20 h-20 rounded-full border-2 border-red-400 bg-red-50 opacity-60 cursor-not-allowed flex flex-col items-center justify-center"
                        data-table="M03"
                        data-capacity="6"
                        data-floor="1"
                        disabled
                        aria-label="Mesa M03 para 6 personas, ocupada"
                    >
                        <span class="text-xs font-bold text-red-700">M03</span>
                        <div class="flex items-center mt-1">
                            <svg class="w-3 h-3 text-red-600" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z"/>
                            </svg>
                            <span class="text-xs text-red-600 ml-1">6</span>
                        </div>
                    </button>

                    <button 
                        type="button"
                        class="table-btn available floor-1 w-20 h-20 rounded-full border-2 border-green-400 bg-green-50 hover:bg-green-100 hover:border-green-500 transition-all duration-200 flex flex-col items-center justify-center group focus:outline-none focus:ring-2 focus:ring-digirest"
                        data-table="M04"
                        data-capacity="8"
                        data-floor="1"
                        onclick="selectTable('M04', 8)"
                        aria-label="Mesa M04 para 8 personas, disponible"
                    >
                        <span class="text-xs font-bold text-green-700 group-hover:text-green-800">M04</span>
                        <div class="flex items-center mt-1">
                            <svg class="w-3 h-3 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z"/>
                            </svg>
                            <span class="text-xs text-green-600 ml-1">8</span>
                        </div>
                    </button>

                    <!-- Mesas del segundo piso -->
                    <button 
                        type="button"
                        class="table-btn available floor-2 hidden w-20 h-20 rounded-full border-2 border-green-400 bg-green-50 hover:bg-green-100 hover:border-green-500 transition-all duration-200 flex flex-col items-center justify-center group focus:outline-none focus:ring-2 focus:ring-digirest"
                        data-table="M05"
                        data-capacity="2"
                        data-floor="2"
                        onclick="selectTable('M05', 2)"
                        aria-label="Mesa M05 para 2 personas, disponible"
                    >
                        <span class="text-xs font-bold text-green-700 group-hover:text-green-800">M05</span>
                        <div class="flex items-center mt-1">
                            <svg class="w-3 h-3 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z"/>
                            </svg>
                            <span class="text-xs text-green-600 ml-1">2</span>
                        </div>
                    </button>

                    <button 
                        type="button"
                        class="table-btn occupied floor-2 hidden w-20 h-20 rounded-full border-2 border-red-400 bg-red-50 opacity-60 cursor-not-allowed flex flex-col items-center justify-center"
                        data-table="M06"
                        data-capacity="4"
                        data-floor="2"
                        disabled
                        aria-label="Mesa M06 para 4 personas, ocupada"
                    >
                        <span class="text-xs font-bold text-red-700">M06</span>
                        <div class="flex items-center mt-1">
                            <svg class="w-3 h-3 text-red-600" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z"/>
                            </svg>
                            <span class="text-xs text-red-600 ml-1">4</span>
                        </div>
                    </button>

                    <button 
                        type="button"
                        class="table-btn available floor-2 hidden w-20 h-20 rounded-full border-2 border-green-400 bg-green-50 hover:bg-green-100 hover:border-green-500 transition-all duration-200 flex flex-col items-center justify-center group focus:outline-none focus:ring-2 focus:ring-digirest"
                        data-table="M07"
                        data-capacity="6"
                        data-floor="2"
                        onclick="selectTable('M07', 6)"
                        aria-label="Mesa M07 para 6 personas, disponible"
                    >
                        <span class="text-xs font-bold text-green-700 group-hover:text-green-800">M07</span>
                        <div class="flex items-center mt-1">
                            <svg class="w-3 h-3 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z"/>
                            </svg>
                            <span class="text-xs text-green-600 ml-1">6</span>
                        </div>
                    </button>
                </div>
            </section>

            <!-- Resumen de la reserva -->
            <section aria-labelledby="summary-heading" class="mb-6">
                <h3 id="summary-heading" class="text-lg font-semibold mb-3 text-black">Resumen de la Reserva</h3>
                <div id="reservation-summary" class="bg-gray-50 p-4 rounded-md border">
                    <div id="no-selection" class="text-gray-500 text-center py-4">
                        Selecciona una mesa para ver el resumen de tu reserva
                    </div>
                    <div id="selection-details" class="hidden">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
                            <div>
                                <span class="font-medium text-gray-700">Mesa seleccionada:</span>
                                <span id="selected-table" class="ml-2 font-bold text-black"></span>
                            </div>
                            <div>
                                <span class="font-medium text-gray-700">Capacidad:</span>
                                <span id="selected-capacity" class="ml-2 text-black"></span>
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
                    class="px-8 py-3 bg-gray-300 text-gray-500 rounded-md cursor-not-allowed transition-all duration-200 font-semibold text-lg"
                    aria-describedby="reserve-btn-help"
                >
                    Reservar Ahora
                </button>
                <p id="reserve-btn-help" class="text-sm text-gray-500 mt-2">
                    Completa todos los campos y selecciona una mesa para solicitar la reserva
                </p>
            </div>
        </div>
    </div>
</div>
