<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        @include('partials.head')
    </head>
    <body class="min-h-screen bg-white antialiased dark:bg-linear-to-b dark:from-neutral-950 dark:to-neutral-900">
        @include('web.shared.header')
        <div class="bg-background flex min-h-svh flex-col items-center justify-center gap-6 p-6 md:p-10">
            <div class="flex w-full max-w-md flex-col gap-2">
                {{-- <a href="{{ route('home') }}" class="flex flex-col items-center gap-2 font-medium" wire:navigate>
                    <span class="flex h-9 w-9 mb-1 items-center justify-center rounded-md">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-building2 h-8 w-8 text-[#0F2C59]">
                            <path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z"></path>
                            <path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2"></path>
                            <path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2"></path>
                            <path d="M10 6h4"></path>
                            <path d="M10 10h4"></path>
                            <path d="M10 14h4"></path>
                            <path d="M10 18h4"></path>
                        </svg>
                    </span>
                </a>
                <div class="flex flex-col items-center justify-center mb-4">
                    <h1 class="text-2xl font-bold text-gray-800">MobilitéGov</h1>
                    <p class="mt-2 text-gray-600">
                        Système de gestion de la mobilité des agents
                    </p>
                </div> --}}
                
                <div class="flex flex-col gap-6">
                    {{ $slot }}

                    {{-- <div class="bg-white dark:bg-gray-700 px-2 pb-4 pt-8 sm:rounded-lg sm:px-10 sm:pb-6 sm:shadow">
                        <form class="space-y-6">
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 dark:text-white">Email address /
                                    Username</label>
                                <div class="mt-1">
                                    <input id="email" type="text" data-testid="username" required=""
                                        class="block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 dark:bg-gray-800 dark:border-gray-600 dark:text-white dark:placeholder-gray-300 dark:focus:border-indigo-400 dark:focus:ring-indigo-400 sm:text-sm"
                                        value="">
                                </div>
                            </div>
                            <div>
                                <label for="password" class="block text-sm font-medium text-gray-700 dark:text-white">Password</label>
                                <div class="mt-1">
                                    <input id="password" name="password" type="password" data-testid="password"
                                        autocomplete="current-password" required=""
                                        class="block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 dark:bg-gray-800 dark:border-gray-600 dark:text-white dark:placeholder-gray-300 dark:focus:border-indigo-400 dark:focus:ring-indigo-400 sm:text-sm"
                                        value="">
                                </div>
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <input id="remember_me" name="remember_me" type="checkbox"
                                        class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500 dark:text-white dark:border-gray-600 dark:focus:ring-indigo-400 disabled:cursor-wait disabled:opacity-50">
                                    <label for="remember_me" class="ml-2 block text-sm text-gray-900 dark:text-white">Remember me</label>
                                </div>
                                <div class="text-sm">
                                    <a class="font-medium text-indigo-400 hover:text-indigo-500" href="">
                                        Forgot your password?
                                    </a>
                                </div>
                            </div>
                            <div>
                                <button data-testid="login" type="submit"
                                    class="group relative flex w-full justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:bg-indigo-700 dark:border-transparent dark:hover:bg-indigo-600 dark:focus:ring-indigo-400 dark:focus:ring-offset-2 disabled:cursor-wait disabled:opacity-50">
                                    <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                                        <svg class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                            aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </span>
                                    Sign In
                                </button>
                            </div>
                        </form>
                        <div class="m-auto mt-6 w-fit md:mt-8">
                            <span class="m-auto dark:text-gray-400">Vous n'avez pas de compte?
                                <a class="font-semibold text-indigo-600 dark:text-indigo-100" href="/register">Créer un compte</a>
                            </span>
                        </div>
                    </div> --}}

                    {{-- <div class="bg-white rounded-lg shadow-xl p-6 w-full max-w-md">
                        <div class="mb-8 text-center">
                            <h1 class="text-2xl font-bold text-gray-800">Bienvenue</h1>
                            <p class="text-gray-600 mt-2">Se connecter</p>
                        </div>
                        <form>
                            <div class="space-y-4">
                                <!-- Email Input -->
                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                            </svg>
                                        </div>
                                        <input id="email" name="email" type="email" autocomplete="email" required 
                                            class="block w-full pl-10 pr-3 appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 dark:bg-gray-800 dark:border-gray-600 dark:text-white dark:placeholder-gray-300 dark:focus:border-indigo-400 dark:focus:ring-indigo-400 sm:text-sm"
                                            placeholder="your@email.com">
                                    </div>
                                </div>
                
                                <!-- Password Input -->
                                <div>
                                    <div class="flex items-center justify-between">
                                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                                        <a href="#" class="text-sm font-medium text-blue-600 hover:text-blue-500">Forgot password?</a>
                                    </div>
                                    <div class="relative mt-1">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <input id="password" name="password" type="password"
                                        autocomplete="current-password" required=""
                                        class="block w-full pl-10 pr-3 appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 dark:bg-gray-800 dark:border-gray-600 dark:text-white dark:placeholder-gray-300 dark:focus:border-indigo-400 dark:focus:ring-indigo-400 sm:text-sm"
                                        placeholder="••••••••">
                                    </div>
                                </div>
                
                                <!-- Remember Me -->
                                <div class="flex items-center">
                                    <input id="remember_me" name="remember_me" type="checkbox" 
                                        class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                                    <label for="remember_me" class="ml-2 block text-sm text-gray-700">Remember me</label>
                                </div>
                
                                <!-- Submit Button -->
                                <div>
                                    <button type="submit" 
                                        class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                        Sign in
                                    </button>
                                </div>
                            </div>
                        </form>
                
                
                        <!-- Sign Up Link -->
                        <div class="mt-6 text-center">
                            <p class="text-sm text-gray-600">
                                Vous n'avez pas de compte? 
                                <a href="#" class="font-medium text-blue-600 hover:text-blue-500">Créer un compte</a>
                            </p>
                        </div>
                    </div> --}}

                </div>
            </div>
        </div>

        {{-- <div class="bg-background flex min-h-svh flex-col items-center justify-center gap-6 p-6 md:p-10">
            <div class="flex w-full max-w-sm flex-col gap-2">
                <a href="{{ route('home') }}" class="flex flex-col items-center gap-2 font-medium" wire:navigate>
                    <span class="flex h-9 w-9 mb-1 items-center justify-center rounded-md">
                        <x-app-logo-icon class="size-9 fill-current text-black dark:text-white" />
                    </span>
                    <span class="sr-only">{{ config('app.name', 'Laravel') }}</span>
                </a>
                <div class="flex flex-col gap-6">
                    {{ $slot }}
                </div>
            </div>
        </div> --}}

        {{-- @include('web.shared.footer') --}}
        
        @fluxScripts
    </body>
</html>
