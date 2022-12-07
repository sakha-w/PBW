<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <form method="POST" action="{{ route('koleksi.infoKoleksi', $collection->id) }}">
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

                <x-text-input id="jenisKoleksi" class="block mt-1 w-full" type="number" name="jenisKoleksi" readonly value="{{ $collection->jenisKoleksi }}" required autofocus />

                <x-input-error :messages="$errors->get('jenisKoleksi')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="jumlahKoleksi" :value="__('Jumlah Koleksi')" />

                <x-text-input id="jumlahKoleksi" class="block mt-1 w-full" type="number" name="jumlahKoleksi" readonly value="{{ $collection->jumlahKoleksi }}" required />

                <x-input-error :messages="$errors->get('jumlahKoleksi')" class="mt-2" />
            </div>
            <div class="mt-4">
                <x-input-label for="createdAt" :value="__('createdAt')" />

                <x-text-input id="createdAt" class="block mt-1 w-full" type="date" name="createdAt" readonly value="{{ $collection->createdAt }}" required />

                <x-input-error :messages="$errors->get('createdAt')" class="mt-2" />
            </div>


            <div class="px-4 py-10">
                <a href="{{ route('collection') }}"
                 class="shadow-lg bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                 Kembali
                </a>
             </div>
        </form>
    </x-auth-card>
</x-guest-layout>
