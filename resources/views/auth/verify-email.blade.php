<section class="bg-gray-100 dark:bg-gray-900">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <Link href="#" class="flex justify-center text-2xl font-semibold text-gray-900 dark:text-white">
                    <img class="w-8 h-8 mr-2" src="{{ asset('logo/logo.png') }}" alt="logo">
                    e-abus
                </Link>
        <div class="mb-4 text-sm text-gray-600">
            {{ __('Terima kasih telah mendaftar!Sebelum memulai, anda harus melakukan klik link verifikasi yang telah kami kirimkan ke email anda. Jika tidak masuk ke email anda, Silahkan untuk melakukan pengiriman kembali link verifikasi dengan menekan tombol dibawah atau cek folder spam apabila link verfikasi tidak muncul di folder utama email anda.') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('Link verifikasi baru telah dikirim ke email anda. Silahkan cek kembali email anda untuk mengaktifkan akun. Cek folder spam apabila email anda tidak masuk ke folder utama! ') }}
            </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <x-splade-form action="{{ route('verification.send') }}">
                <x-splade-submit :label="__('Kirim kembali link verifikasi')" />
            </x-splade-form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                    {{ __('Log Out') }}
                </button>
            </form>
        </div>
            </div>
        </div>
    </div>
</section>
