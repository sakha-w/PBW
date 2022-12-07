<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <form method="POST" action="{{ route('koleksi.store') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="namaKoleksi" :value="__('Nama Koleksi')" />

                <x-text-input id="namaKoleksi" class="block mt-1 w-full" type="text" name="namaKoleksi" :value="old('namaKoleksi')" required autofocus />

                <x-input-error :messages="$errors->get('namaKoleksi')" class="mt-2" />
            </div>
            <div>
                <x-input-label for="jenisKoleksi" :value="__('Jenis Koleksi')" />

                <select name="jenisKoleksi" id="jenisKoleksi" class="block block mt-1 w-full">
                <option value="1">Buku </option>
                <option value="2">Majalah </option>
                <option value="3">Cakram Digital </option>
                </select>

                <x-input-error :messages="$errors->get('jenisKoleksi')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="jumlahKoleksi" :value="__('Jumlah Koleksi')" />

                <x-text-input id="jumlahKoleksi" class="block mt-1 w-full" type="number" name="jumlahKoleksi" :value="old('jumlahKoleksi')" required />

                <x-input-error :messages="$errors->get('jumlahKoleksi')" class="mt-2" />
            </div>
            <div class="mt-4">
                <x-input-label for="createdAt" :value="__('createdAt')" />

                <x-text-input id="createdAt" class="block mt-1 w-full" type="date" name="createdAt" :value="old('createdAt')" required />

                <x-input-error :messages="$errors->get('createdAt')" class="mt-2" />
            </div>


            <div class="flex items-center justify-end mt-4">

                <x-primary-button class="ml-4">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
