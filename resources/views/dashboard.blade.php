<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Dashboard') }}
      </h2>
  </x-slot>
  <div class="container mx-auto p-5">
    @livewire('dashboard.tickets')  

    @can('is_admin')
      @livewire('dashboard.admin')  
    @endcan
  </div>
    
</x-app-layout>
