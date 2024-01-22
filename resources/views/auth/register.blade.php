
<!-- source: https://gist.github.com/nraloux/bce10c4148380061781b928cdab9b193 -->
<!-- I have added support for dark mode and improved UI -->

<div class="h-full bg-gray-100 dark:bg-gray-900">
	<!-- Container -->
	<div class="mx-auto">
        <Link href="#" class="flex justify-center text-2xl font-semibold text-gray-900 dark:text-white py-6">
            <img class="w-8 h-8 mr-2" src="{{ asset('logo/logo.png') }}" alt="logo">
            e-abus
        </Link>
		<div class="flex justify-center px-6">
			<!-- Row -->

			<div class="w-full xl:w-3/4 lg:w-11/12 flex">
				<!-- Col -->
				<div class="w-full h-auto bg-gray-400 dark:bg-gray-800 hidden lg:block lg:w-5/12 bg-cover rounded-l-lg"
					style="background-image: url('{{ asset('img/17545.jpg') }}')"></div>
				<!-- Col -->
				<div class="w-full lg:w-7/12 bg-white dark:bg-gray-700 p-5 rounded-lg lg:rounded-l-none">
					<h3 class="py-2 text-2xl text-center text-gray-800 dark:text-white">Daftar Akun baru</h3>
                    <x-splade-form action="{{ route('register') }}" class="space-y-2">
                        <x-splade-input id="name" type="text" name="name" :label="__('Nama Lengkap (Tanpa Gelar)')"
                        placeholder="Masukkan Nama Lengkap tanpa gelar"
                        class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white rounded  appearance-none focus:outline-none focus:shadow-outline"
                        required autofocus />


                        <x-splade-input
                        class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white rounded  appearance-none focus:outline-none focus:shadow-outline"
                        id="username" type="text" name="username" :label="__('Username')"
                        placeholder="Masukkan username" required />

                        <x-splade-input id="email" type="email" name="email" :label="__('Email')"
                        placeholder="Masukkan email aktif anda"
                        class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white rounded  appearance-none focus:outline-none focus:shadow-outline"
                        required />
						<div class="mb-4 md:flex md:justify-between">
							<div class="mb-4 md:mr-2 md:mb-0">
                                <x-splade-input id="nomor_handphone" name="nomor_handphone" :label="__('Nomor Handphone')"
                                placeholder="Nomor HP Aktif"
                                class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white rounded  appearance-none focus:outline-none focus:shadow-outline"
                                required autofocus />
							</div>
							{{-- <div class="md:ml-2">
                                <x-splade-input id="nik" name="nik" :label="__('NIK')"
                                placeholder="Masukkan NIK"
                                class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white rounded  appearance-none focus:outline-none focus:shadow-outline"
                                required />
							</div> --}}
						</div>
						<div class="mb-4 md:flex md:justify-between">
							<div class="mb-4 md:mr-2 md:mb-0">

                                <x-splade-input id="password" type="password" name="password" :label="__('Password')"
                                class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white rounded  appearance-none focus:outline-none focus:shadow-outline"
                                required autocomplete="new-password" />
							</div>
							<div class="md:ml-2">

                                <x-splade-input id="password_confirmation" type="password" name="password_confirmation" :label="__('Confirm Password')"
                                class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white rounded  appearance-none focus:outline-none focus:shadow-outline"
                                required />
							</div>
						</div>
						<div class="mb-6 text-center">
						</div>
                        <x-splade-submit class="w-full " :label="__('Daftar')" />
						<hr class="mb-6 border-t" />
						<div class="text-center">
							<Link class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                {{ __('Sudah terdaftar?klik disini') }}
                            </Link>
						</div>
                </x-splade-form>
				</div>
			</div>
		</div>
	</div>
</div>
