<x-app-layout>
    <x-auth-card>
        <x-slot name="logo">
            <!-- <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a> -->
        </x-slot>

        <form method="POST" action="{{ route('user.store') }}">
            @csrf

             <!-- Username -->
             <div class="row form-group">
                <x-input-label for="username" :value="__('Username')" />

                <x-text-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')" required autofocus />

                <x-input-error :messages="$errors->get('username')" class="mt-2" />
            </div>

            <!-- Fullname -->
            <div class="row form-group">
                <x-input-label for="fullname" :value="__('Fullname')" />

                <x-text-input id="fullname" class="block mt-1 w-full" type="text" name="fullname" :value="old('fullname')" required autofocus />

                <x-input-error :messages="$errors->get('fullname')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="row form-group">
                <x-input-label for="email" :value="__('Email')" />

                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />

                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="row form-group">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                autocomplete="password-confirmation"/>

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="row form-group">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <!-- Address -->
            <div class="row form-group">
                <x-input-label for="address" :value="__('Address')" />

                <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required autofocus />

                <x-input-error :messages="$errors->get('address')" class="mt-2" />
            </div>

            <!-- Birthdate -->
            <div class="row form-group">
                <x-input-label for="birthdate" :value="__('Birthdate')" />

                <x-text-input id="birthdate" class="block mt-1 w-full" type="date" name="birthdate" :value="old('birthdate')" required autofocus />

                <x-input-error :messages="$errors->get('birthdate')" class="mt-2" />
            </div>

            <!-- PhoneNumber -->
            <div class="row form-group">
                <x-input-label for="phonenumber" :value="__('PhoneNumber')" />

                <x-text-input id="phonenumber" class="block mt-1 w-full" type="text" name="phonenumber" :value="old('phonenumber')" required autofocus />

                <x-input-error :messages="$errors->get('phonenumber')" class="mt-2" />
            </div>

            <div class="row form-group">
                <button class="btn btn-primary" id="buttSubmit" type="submit">Ok</button>
                <button class="btn btn-danger" type="reset">Reset</button>
            </div>

        </form>
        
</x-auth-card>
</x-app-layout>
