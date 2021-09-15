<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Dashboard') }}
      </h2>
  </x-slot>
  <div class="container mx-auto p-5">
    <div>
      <div class="flex flex-wrap space-x-2 space-y-2">
        <x-ui.metrics-card icon="user" title="Tickets" value="2500"/>
      </div>
    </div>    
  </div>
    




</x-app-layout>
