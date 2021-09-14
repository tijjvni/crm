<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container w-full bg-white shadow rounded-sm mx-auto p-5">
        <section class="px-4 py-12 mx-auto w-full">
        <div class="grid grid-cols-1 gap-5 md:grid-cols-4">
            <div class="flex-row items-center p-5 shadow">
                <div class="flex items-center justify-center w-10 h-10 bg-secondary text-primary rounded">
                    <i class="fa fa-lists"></i>
                </div>
                <div class="ml-3">
                <h2 class="mb-1 text-lg font-bold leading-none text-gray-900 truncate">563</h2>
                <p class="text-sm leading-none text-gray-600">Tickets</p>
                </div>
            </div>

            <div class="flex-row items-center p-5 shadow">
                <div class="flex items-center justify-center w-10 h-10 bg-secondary text-primary rounded">
                    <i class="fa fa-lists"></i>
                </div>
                <div class="ml-3">
                <h2 class="mb-1 text-lg font-bold leading-none text-gray-900 truncate">563</h2>
                <p class="text-sm leading-none text-gray-600">Tickets</p>
                </div>
            </div>            
        </div>
        </section>
          
    </div>




</x-app-layout>
