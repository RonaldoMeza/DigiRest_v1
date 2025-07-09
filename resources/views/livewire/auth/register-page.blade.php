<div class="min-h-screen bg-gradient-to-br from-gray-50 to-gray-100 dark:from-gray-900 dark:to-gray-800 flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="w-full max-w-md space-y-8">
        <main class="bg-white dark:bg-gray-800 shadow-2xl rounded-2xl border border-gray-200 dark:border-gray-700 overflow-hidden">
            <div class="px-8 py-10">
                <!-- Header -->
                <div class="text-center mb-8">
                    <h1 class="text-3xl font-leckerli text-gray-900 dark:text-white mb-2">DigiRest</h1>
                    <p class="text-sm text-gray-600 dark:text-gray-400">
                        ¿Ya tienes cuenta?
                        <a wire:navigate class="text-digirest hover:text-digirestDark font-medium transition-colors duration-200 hover:underline decoration-2 underline-offset-2 dark:focus:outline-none dark:focus:ring-2 dark:focus:ring-digirest dark:focus:ring-offset-2 dark:focus:ring-offset-gray-800" href="/iniciar-sesion">
                            Inicia Sesión aquí
                        </a>
                    </p>
                </div>

                <!-- Divider -->
                <div class="relative mb-8">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-gray-300 dark:border-gray-600"></div>
                    </div>
                    <div class="relative flex justify-center text-sm">
                        <span class="px-4 bg-white dark:bg-gray-800 text-gray-500 dark:text-gray-400">Crear cuenta</span>
                    </div>
                </div>

                <!-- Form -->
                <form wire:submit.prevent='save' class="space-y-6">
                    <!-- Name Field -->
                    <div class="space-y-2">
                        <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                            Nombre Completo
                        </label>
                        <div class="relative">
                            <input 
                                type="text" 
                                id="name" 
                                wire:model="name" 
                                class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg text-sm placeholder-gray-400 dark:placeholder-gray-500 bg-white dark:bg-gray-700 text-gray-900 dark:text-gray-100 focus:ring-2 focus:ring-digirest focus:border-digirest transition-colors duration-200 disabled:opacity-50 disabled:cursor-not-allowed @error('name') border-red-300 dark:border-red-600 focus:ring-red-500 focus:border-red-500 @enderror" 
                                placeholder="Tu nombre completo"
                                aria-describedby="name-error"
                            >
                            @error('name')
                                <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                    <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                    </svg>
                                </div>
                            @enderror
                        </div>
                        @error('name')
                            <p class="text-xs text-red-600 dark:text-red-400 mt-1" id="name-error">{{ $message }}</p>
                        @enderror
                    </div>

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
                        <label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                            Contraseña
                        </label>
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
                            Registrarse
                        </button>
                    </div>
                </form>
            </div>
        </main>
    </div>
</div>