<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar Pengguna') }}
        </h2>
    </x-slot>

    <body>
        <div class="container mt-2">
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
            @endif
            <div class="px-4 py-4">
                                <a href="{{ route('user.registrasi') }}"
                                    class="shadow-lg bg-green hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                                    Tambah Data user
                                </a>
                            </div>
            <div class="card-body">
                <table class="w-full text-center">
                    <thead class="border-b bg-blue-800">
                        <tr>
                            <th>Id</th>
                            <th>Username</th>
                            <th>Fullname</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Birthdate</th>
                            <th>Phone Number</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user as $user )
                        <tr class="bg-white border-b">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                {{ $user->id }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                {{ $user->username }}
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                {{ $user->fullname }}
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                {{ $user->email }}
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                {{ $user->address }}
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                {{ $user->birthdate }}
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                {{ $user->phoneNumber }}
                            </td>

                            <td>
                                <a class="inline-block border border-gray-700 bg-gray-700 text-white rounded-md px-2 py-1 m-1 transition duration-500 ease select-none hover:bg-gray-800 focus:outline-none focus:shadow-outline" href="{{ route('user.edit', $user->id) }}">
                                    Edit
                                </a>

                                <a class="inline-block border border-gray-700 bg-blue-700 text-white rounded-md px-2 py-1 m-1 transition duration-500 ease select-none hover:bg-gray-800 focus:outline-none focus:shadow-outline" href="{{ route('user.infoPengguna', $user->id) }}">
                                    Show
                                </a>

                                <form class="inline-block" action="{{ route('user.delete', $user->id) }}" method="POST">
                                    @csrf
                                    @method('Delete')
                                    <button class="border border-red-500 bg-red-500 text-white rounded-md px-2 py-1 m-2 transition duration-500 ease select-none hover:bg-red-600 focus:outline-none focus:shadow-outline">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr class="bg-white border-b">
                        @endforeach
                    </tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </body>

</x-app-layout>