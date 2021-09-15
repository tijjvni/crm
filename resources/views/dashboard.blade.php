<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container w-full bg-white shadow rounded-sm mx-auto p-5">
        <section class="px-4 py-12 mx-auto w-full">
    
            
            <div class="flex flex-col lg:flex-row w-full lg:space-x-2 space-y-2 lg:space-y-0 mb-2 lg:mb-4">

            
                <div class="w-full md:w-1/4">
                    <div class="widget w-full p-4 rounded bg-white border border-gray-500">
                        <div class="flex flex-row items-center justify-between">
                            <div class="flex flex-col">
                                <div class="text-xs uppercase font-light text-gray-700">
                                    Tickets
                                </div>
                                <div class="text-xl font-bold">
                                    23
                                </div>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                            </svg>
                            
                        </div>
                    </div>
                </div>
                
                
            </div>



        </section>
          
    </div>




</x-app-layout>
