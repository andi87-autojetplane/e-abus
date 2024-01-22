{{-- <x-guest-layout>
    <x-auth-card>
        <x-splade-form action="{{ route('register') }}" class="space-y-4">
            <x-splade-input id="nik" name="nik" :label="__('NIK')" required />
            <x-splade-input id="name" type="text" name="name" :label="__('Name')" required autofocus />
            <x-splade-input id="nomor_handphone" name="nomor_handphone" :label="__('Nomor Handphone')" required autofocus />
            <x-splade-input id="username" type="text" name="username" :label="__('Username')" required />
            <x-splade-input id="email" type="email" name="email" :label="__('Email')" required />
            <x-splade-input id="password" type="password" name="password" :label="__('Password')" required autocomplete="new-password" />
            <x-splade-input id="password_confirmation" type="password" name="password_confirmation" :label="__('Confirm Password')" required />

            <div class="flex items-center justify-end">
                <Link class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </Link>

                <x-splade-submit class="ml-4" :label="__('Register')" />
            </div>
        </x-splade-form>
    </x-auth-card>
</x-guest-layout> --}}


<!-- source: https://gist.github.com/nraloux/bce10c4148380061781b928cdab9b193 -->
<!-- I have added support for dark mode and improved UI -->

<div class="h-full bg-gray-400 dark:bg-gray-900">
	<!-- Container -->
	<div class="mx-auto">
		<div class="flex justify-center px-6 py-12">
			<!-- Row -->
			<div class="w-full xl:w-3/4 lg:w-11/12 flex">
				<!-- Col -->
				<div class="w-full h-auto bg-gray-400 dark:bg-gray-800 hidden lg:block lg:w-5/12 bg-cover rounded-l-lg"
					style="background-image: url('{{ asset('img/young-handsome-physician-medical-robe-with-stethoscope.jpg') }}')"></div>
				<!-- Col -->
				<div class="w-full lg:w-7/12 bg-white dark:bg-gray-700 p-5 rounded-lg lg:rounded-l-none">
                    <Link href="#" class=" mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
                        <img class="w-8 h-8 mr-2" src="{{ asset('logo/logo.png') }}" alt="logo">
                        e-abus
                    </Link>
					<h3 class="py-4 text-2xl text-center text-gray-800 dark:text-white">Daftar Akun baru</h3>
					{{-- <form class="px-8 pt-6 pb-8 mb-4 bg-white dark:bg-gray-800 rounded"> --}}
                    <x-splade-form action="{{ route('register') }}" class="space-y-4">
                        <x-splade-input id="name" type="text" name="name" :label="__('Nama Lengkap (Tanpa Gelar)')"
                        class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white rounded  appearance-none focus:outline-none focus:shadow-outline"
                        required autofocus />

                        <x-splade-input id="username" type="text" name="username" :label="__('Username')"
                        class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white rounded  appearance-none focus:outline-none focus:shadow-outline"
                        required />

                        <x-splade-input id="email" type="email" name="email" :label="__('Email')"
                        class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white rounded  appearance-none focus:outline-none focus:shadow-outline"
                        required />
						<div class="mb-4 md:flex md:justify-between">
							<div class="mb-4 md:mr-2 md:mb-0">
								{{-- <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="firstName">
                                    First Name
                                </label>
								<input
                                    class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    id="firstName"
                                    type="text"
                                    placeholder="First Name"
                                /> --}}
                                <x-splade-input id="nomor_handphone" name="nomor_handphone" :label="__('Nomor Handphone')"
                                class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white rounded  appearance-none focus:outline-none focus:shadow-outline"
                                required autofocus />
							</div>
							<div class="md:ml-2">
								{{-- <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="lastName">
                                    Last Name
                                </label>
								<input
                                    class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    id="lastName"
                                    type="text"
                                    placeholder="Last Name"
                                /> --}}
                                <x-splade-input id="nik" name="nik" :label="__('NIK')"
                                class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white rounded  appearance-none focus:outline-none focus:shadow-outline"
                                required />
							</div>
						</div>
						{{-- <div class="mb-4">
                            <x-splade-input id="email" type="email" name="email" :label="__('Email')" required />
							<label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="email">
                                Email
                            </label>
							<input
                                class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                id="email"
                                type="email"
                                placeholder="Email"
                            />
						</div> --}}
						<div class="mb-4 md:flex md:justify-between">
							<div class="mb-4 md:mr-2 md:mb-0">
								{{-- <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="password">
                                    Password
                                </label>
								<input
                                    class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 dark:text-white border border-red-500 rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    id="password"
                                    type="password"
                                    placeholder="******************"
                                />
								<p class="text-xs italic text-red-500">Please choose a password.</p> --}}
                                <x-splade-input id="password" type="password" name="password" :label="__('Password')"
                                class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white rounded  appearance-none focus:outline-none focus:shadow-outline"
                                required autocomplete="new-password" />


							</div>
							<div class="md:ml-2">
								{{-- <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="c_password">
                                    Confirm Password
                                </label>
								<input
                                    class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    id="c_password"
                                    type="password"
                                    placeholder="******************"
                                /> --}}
                                <x-splade-input id="password_confirmation" type="password" name="password_confirmation" :label="__('Confirm Password')"
                                class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white rounded  appearance-none focus:outline-none focus:shadow-outline"
                                required />
							</div>
						</div>
						<div class="mb-6 text-center">
							{{-- <button
                                class="w-full px-4 py-2 font-bold text-white bg-blue-500 rounded-full hover:bg-blue-700 dark:bg-blue-700 dark:text-white dark:hover:bg-blue-900 focus:outline-none focus:shadow-outline"
                                type="button"
                            >
                                Register Account
                            </button> --}}
						</div>
                        <x-splade-submit class="w-full " :label="__('Daftar')" />
						<hr class="mb-6 border-t" />
						<div class="text-center">
							<Link class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                {{ __('Sudah terdaftar?klik disini') }}
                            </Link>
						</div>
					{{-- </form> --}}
                </x-splade-form>
				</div>
			</div>
		</div>
	</div>
</div>
