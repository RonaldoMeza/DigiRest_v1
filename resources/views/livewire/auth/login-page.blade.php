<div class=" bg-gradient-to-br from-gray-50 to-gray-100 dark:from-gray-900 dark:to-gray-800 flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="w-full max-w-md space-y-8">
        <main class="bg-white dark:bg-gray-800 shadow-2xl rounded-2xl border border-gray-200 dark:border-gray-700 overflow-hidden">
            <div class="px-8 py-10">
                <!-- Header -->
                <div class="text-center mb-8">
                    <h1 class="text-3xl font-leckerli text-gray-900 dark:text-white mb-2">DigiRest</h1>
                    <p class="text-sm text-gray-600 dark:text-gray-400">
                        ¿Aún no tienes cuenta?
                        <a wire:navigate class="text-digirest hover:text-digirestDark font-medium transition-colors duration-200 hover:underline decoration-2 underline-offset-2 dark:focus:outline-none dark:focus:ring-2 dark:focus:ring-digirest dark:focus:ring-offset-2 dark:focus:ring-offset-gray-800" href="/registrar">
                            Regístrate aquí
                        </a>
                    </p>
                </div>

                <!-- Divider -->
                <div class="relative mb-8">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-gray-300 dark:border-gray-600"></div>
                    </div>
                    <div class="relative flex justify-center text-sm">
                        <span class="px-4 bg-white dark:bg-gray-800 text-gray-500 dark:text-gray-400">Iniciar sesión</span>
                    </div>
                </div>

                <!-- Form -->
                <form wire:submit.prevent='save' class="space-y-6">
                    <!-- Error Alert -->
                    @if (session('error'))
                        <div
                            wire:key="login-error-{{ now()->timestamp }}"
                            x-data="{ show: true }"
                            x-show="show"
                            x-init="setTimeout(() => show = false, 4000)"
                            x-transition:enter="transition ease-out duration-300"
                            x-transition:enter-start="opacity-0 transform -translate-y-2"
                            x-transition:enter-end="opacity-100 transform translate-y-0"
                            x-transition:leave="transition ease-in duration-200"
                            x-transition:leave-start="opacity-100 transform translate-y-0"
                            x-transition:leave-end="opacity-0 transform -translate-y-2"
                            class="flex items-center space-x-3 bg-red-50 dark:bg-red-900/20 border border-red-200 dark:border-red-800 text-red-700 dark:text-red-400 px-4 py-3 rounded-lg shadow-sm"
                            role="alert"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L3.084 16.5c-.77.833.192 2.5 1.732 2.5z" />
                            </svg>
                            <span class="text-sm font-medium">{{ session('error') }}</span>
                        </div>
                    @endif

                    <!-- Email Field -->
                    <div class="space-y-2">
                        <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                            Correo Electrónico
                        </label>
                        <div class="relative">
                            <input 
                                type="email" 
                                id="email" 
                                wire:model="email" 
                                class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg text-sm placeholder-gray-400 dark:placeholder-gray-500 bg-white dark:bg-gray-700 text-gray-900 dark:text-gray-100 focus:ring-2 focus:ring-digirest focus:border-digirest transition-colors duration-200 disabled:opacity-50 disabled:cursor-not-allowed @error('email') border-red-300 dark:border-red-600 focus:ring-red-500 focus:border-red-500 @enderror" 
                                placeholder="tu@email.com"
                                aria-describedby="email-error"
                            >
                            @error('email')
                                <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                    <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                    </svg>
                                </div>
                            @enderror
                        </div>
                        @error('email')
                            <p class="text-xs text-red-600 dark:text-red-400 mt-1" id="email-error">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Password Field -->
                    <div class="space-y-2">
                        <div class="flex justify-between items-center">
                            <label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                                Contraseña
                            </label>
                            {{-- <a wire:navigate class="text-sm text-digirest hover:text-digirestDark font-medium transition-colors duration-200 hover:underline decoration-2 underline-offset-2 dark:focus:outline-none dark:focus:ring-2 dark:focus:ring-digirest dark:focus:ring-offset-2 dark:focus:ring-offset-gray-800" href="/contraseña-olvidada">¿Olvidaste tu contraseña?</a> --}}
                        </div>
                        <div class="relative">
                            <input 
                                type="password" 
                                id="password" 
                                wire:model="password" 
                                class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg text-sm placeholder-gray-400 dark:placeholder-gray-500 bg-white dark:bg-gray-700 text-gray-900 dark:text-gray-100 focus:ring-2 focus:ring-digirest focus:border-digirest transition-colors duration-200 disabled:opacity-50 disabled:cursor-not-allowed @error('password') border-red-300 dark:border-red-600 focus:ring-red-500 focus:border-red-500 @enderror" 
                                placeholder="••••••••"
                                aria-describedby="password-error"
                            >
                            @error('password')
                                <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                    <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                    </svg>
                                </div>
                            @enderror
                        </div>
                        @error('password')
                            <p class="text-xs text-red-600 dark:text-red-400 mt-1" id="password-error">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Submit Button -->
                    <div class="pt-4">
                        <button 
                            type="submit" 
                            class="btn-click w-full flex justify-center items-center gap-x-2 py-3 px-4 text-sm font-bold rounded-lg border border-transparent bg-digirest text-black hover:bg-digirestDark focus:outline-none focus:ring-2 focus:ring-digirest focus:ring-offset-2 focus:ring-offset-white dark:focus:ring-offset-gray-800 disabled:opacity-50 disabled:cursor-not-allowed transition-all duration-200 transform hover:scale-[1.02] active:scale-[0.98]"
                        >
                            Iniciar Sesión
                        </button>
                    </div>
                </form>
            </div>
        </main>
    </div>
</div>