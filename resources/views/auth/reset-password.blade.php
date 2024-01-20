<section class="bg-gray-100 dark:bg-gray-900">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        <div
            class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <Link href="#" class="flex justify-center text-2xl font-semibold text-gray-900 dark:text-white">
                <img class="w-8 h-8 mr-2" src="{{ asset('logo/logo.png') }}" alt="logo">
                e-abus
                </Link>
                <x-splade-form :default="['email' => $request->email, 'token' => $request->route('token')]" action="{{ route('password.store') }}" class="space-y-4">
                    <x-splade-input id="email" type="email" name="email" :label="__('Email')"
                        class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white rounded  appearance-none focus:outline-none focus:shadow-outline"
                        required autofocus />
                    <x-splade-input id="password" type="password" name="password" :label="__('Password')"
                        class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white rounded  appearance-none focus:outline-none focus:shadow-outline"
                        required />
                    <x-splade-input id="password_confirmation" type="password" name="password_confirmation"
                        :label="__('Confirm Password')"
                        class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white rounded  appearance-none focus:outline-none focus:shadow-outline"
                        required />

                    <div class="flex items-center justify-end">
                        <x-splade-submit :label="__('Reset Password')" />
                    </div>
                </x-splade-form>
            </div>
        </div>
    </div>
</section>
