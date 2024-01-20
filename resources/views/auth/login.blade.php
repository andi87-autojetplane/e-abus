<section class="bg-gray-100 dark:bg-gray-900">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        <Link href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
        <img class="w-8 h-8 mr-2" src="{{ asset('logo/logo.png') }}" alt="logo">
        e-abus
        </Link>
        <div
            class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1
                    class="text-center text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                    Silahkan Login
                </h1>
                <!-- Session Status -->
                <x-auth-session-status class="mb-4" />
                <x-splade-form action="{{ route('login') }}" class="space-y-4">
                    <!-- Email Address -->
                    <x-splade-input id="login" type="text" name="login" :label="__('Email/Username/No. HP')" :value="old('login')"
                        class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white rounded  appearance-none focus:outline-none focus:shadow-outline"
                        required autofocus />
                    <x-splade-input id="password" type="password" name="password" :label="__('Password')"
                        class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white rounded  appearance-none focus:outline-none focus:shadow-outline"
                        required autocomplete="current-password" />
                    <div class="flex items-center justify-between">
                        <div class="flex items-start">
                            <x-splade-checkbox id="remember_me" name="remember" :label="__('Ingat saya')"
                                class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white rounded  appearance-none focus:outline-none focus:shadow-outline" />
                        </div>
                        @if (Route::has('password.request'))
                            <Link class="text-sm font-medium text-primary-600 hover:underline dark:text-primary-500"
                                href="{{ route('password.request') }}">
                            {{ __('Lupa Password?') }}
                            </Link>
                        @endif

                    </div>
                    <x-splade-submit class="w-full" :label="__('Log in')" />
                    {{-- <x-splade-submit class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800" :label="__('Log in')" /> --}}
                    <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                        Belum Punya Akun?
                        <Link href="{{ route('register') }}"
                            class="font-medium text-primary-600 hover:underline dark:text-primary-500">Daftar</Link>
                    </p>
                </x-splade-form>
            </div>
        </div>
    </div>
</section>
