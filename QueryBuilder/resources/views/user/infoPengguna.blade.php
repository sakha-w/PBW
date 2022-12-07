<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <form method="POST" action="{{ route('user.infoPengguna', $user->id) }}">
            @csrf
              @method('Put')
            <!-- Name -->
            <div>
                <x-input-label for="username" :value="__('Username')" />

                <x-text-input id="username" class="block mt-1 w-full" type="text" name="username" readonly value="{{ $user->username }}" required autofocus />

                <x-input-error :messages="$errors->get('username')" class="mt-2" />
            </div>
            <div>
                <x-input-label for="fullname" :value="__('Fullname')" />

                <x-text-input id="fullname" class="block mt-1 w-full" type="text" name="fullname" readonly value="{{ $user->fullname }}" required autofocus />

                <x-input-error :messages="$errors->get('fullname')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />

                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" readonly value="{{ $user->email }}" required />

                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

           
            <div>
                <x-input-label for="address" :value="__('Address')" />

                <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" readonly value="{{ $user->address }}" required autofocus />

                <x-input-error :messages="$errors->get('address')" class="mt-2" />
            </div>
            <div>
                <x-input-label for="birthdate" :value="__('Birthdate')" />

                <x-text-input id="birthdate" class="block mt-1 w-full" type="date" name="birthdate" readonly value="{{ $user->birthdate }}" required autofocus />

                <x-input-error :messages="$errors->get('birthdate')" class="mt-2" />
            </div>
            <div>
                <x-input-label for="phoneNumber" :value="__('PhoneNumber')" />

                <x-text-input id="phoneNumber" class="block mt-1 w-full" type="number" name="phoneNumber" readonly value="{{ $user->phoneNumber }}" required autofocus />

                <x-input-error :messages="$errors->get('phoneNumber')" class="mt-2" />
            </div>
            <div>



            <div class="px-4 py-10">
                <a href="{{ route('user.daftarPengguna') }}"
                 class="shadow-lg bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                 Kembali
                </a>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
