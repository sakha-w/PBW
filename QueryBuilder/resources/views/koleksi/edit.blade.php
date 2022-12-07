<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <form method="POST" action="{{ route('koleksi.update', $collection->id) }}">
            @csrf
            @method('Put')

            <!-- Name -->
            <div>
                <x-input-label for="namaKoleksi" :value="__('Nama Koleksi')" />

                <x-text-input id="namaKoleksi" class="block mt-1 w-full" type="text" name="namaKoleksi" readonly value="{{ $collection->namaKoleksi }}" required autofocus />

                <x-input-error :messages="$errors->get('namaKoleksi')" class="mt-2" />
            </div>
            <div>
                <x-input-label for="jenisKoleksi" :value="__('Jenis Koleksi')" />

                <select name="jenisKoleksi" id="jenisKoleksi" class="block block mt-1 w-full">
                <option selected value="{{ $collection->jenisKoleksi}}"> Data Tetap</option>
                <option value="1">Buku </option>
                <option value="2">Majalah </option>
                <option value="3">Cakram Digital </option>
                </select>
                <x-input-error :messages="$errors->get('jenisKoleksi')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="jumlahKoleksi" :value="__('Jumlah Awal')" />

                <x-text-input id="jumlahKoleksi" class="block mt-1 w-full" type="number" name="jumlahKoleksi" readonly value="{{ $collection->jumlahKoleksi }}" required />

                <x-input-error :messages="$errors->get('jumlahKoleksi')" class="mt-2" />
            </div>

            <div class="mt-4">
                <x-input-label for="koleksiSisa" :value="__('Jumlah sisa')" />

                <x-text-input id="koleksiSisa" class="block mt-1 w-full" type="number" name="koleksiSisa" value="{{ $collection->koleksiSisa }}" required />

                <x-input-error :messages="$errors->get('koleksiSisa')" class="mt-2" />
            </div>
            <div class="mt-4">
                <x-input-label for="koleksiKeluar" :value="__('Jumlah Keluar')" />

                <x-text-input id="koleksiKeluar" class="block mt-1 w-full" type="number" name="koleksiKeluar" value="{{ $collection->koleksiKeluar }}" required />

                <x-input-error :messages="$errors->get('koleksiKeluar')" class="mt-2" />
            </div>




            <div class="flex items-center justify-end mt-4">

                <x-primary-button class="ml-4">
                    {{ __('Simpan') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
