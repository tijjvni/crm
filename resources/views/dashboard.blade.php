<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">



            <table class="table">
  <thead>
    <tr>
      <th>Name</th>
      <th>Status</th>
      <th>Price</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Landinator 9000 <span class="badge ~neutral">New</span></td>
      <td><span class="chip ~positive">Completed</span></td>
      <td>$300</td>
    </tr>
    <tr>
      <td>Hammer</td>
      <td><span class="chip ~urge">Waiting</span></td>
      <td>$20</td>
    </tr>
    <tr>
      <td>Computer</td>
      <td><span class="chip ~info">Processing</span></td>
      <td>$500</td>
    </tr>
  </tbody>
</table>



            </div>
        </div>
    </div>
</x-app-layout>
