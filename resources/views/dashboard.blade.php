<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Dashboard') }}
      </h2>
  </x-slot>
  <div class="container mx-auto p-5">
    <div>
      <div class="flex gap-2 flex-wrap ">
        <x-metrics-card/>
        <x-metrics-card/>
        <x-metrics-card/>
      </div>
    </div>    
  </div>
    




</x-app-layout>
