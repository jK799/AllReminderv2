<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            {{-- Powitanie --}}
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-2xl font-bold mb-2">
                        Cześć, {{ Auth::user()->name }} 👋
                    </h1>
                    <p class="text-gray-700">
                        Witaj w AllReminder – Twoim cyfrowym organizerze serwisowym.
                    </p>
                </div>
            </div>

            {{-- Kafelki (na razie proste placeholdery) --}}
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white shadow-sm sm:rounded-lg p-6">
                    <p class="text-sm text-gray-500">Urządzenia</p>
                    <p class="text-3xl font-semibold mt-2">
                        (wkrótce liczba urządzeń)
                    </p>
                </div>

                <div class="bg-white shadow-sm sm:rounded-lg p-6">
                    <p class="text-sm text-gray-500">Pojazdy</p>
                    <p class="text-3xl font-semibold mt-2">
                        (wkrótce liczba pojazdów)
                    </p>
                </div>

                <div class="bg-white shadow-sm sm:rounded-lg p-6">
                    <p class="text-sm text-gray-500">Najbliższe przypomnienia</p>
                    <p class="mt-2 text-gray-700">
                        W kolejnych etapach pokażemy tutaj listę najbliższych serwisów.
                    </p>
                </div>
            </div>

            {{-- Przycisk do strony urządzeń (na razie pustej) --}}
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 flex items-center justify-between">
                    <div>
                        <h2 class="text-lg font-semibold mb-1">
                            Zarządzaj swoimi urządzeniami
                        </h2>
                        <p class="text-gray-700">
                            W kolejnych krokach dodamy tutaj pełną listę urządzeń, pojazdów i serwisów.
                        </p>
                    </div>

                    <a href="{{ route('devices.index') }}"
                       class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                        Przejdź do urządzeń
                    </a>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
