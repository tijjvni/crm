<div class="my-2">

    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="flex flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
            <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Ticket
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Type
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Status
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    More
                </th>
                <th scope="col" class="relative px-6 py-3">
                    <span class="sr-only">view</span>
                </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse($tickets as $ticket )
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="text-sm font-medium text-primary">
                                    {{$ticket->subject}}
                                </div>
                                <div class="text-sm text-gray">
                                    {{ $ticket->openedBy->email }}
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray">{{$ticket->ticketType->type}}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            @if($ticket->open)
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-warning-light text-warning-dark">
                                    Open
                                </span>
                            @else
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-success-light text-success-dark">
                                    Solved
                                </span>
                            @endif
                            @if($ticket->escalated)
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-secondary-light text-primary">
                                    Escalated to: {{ $ticket->escalated->name }}
                                </span>
                            @endif
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            {{ $ticket->created_at->diffForHumans() }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <a href="/ticket/{{$ticket->id}}" class="text-primary ">view</a>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="5">
                            <div>
                                {{ $tickets->links() }}
                            </div>                            
                        </td>
                    </tr>

                @empty 
                    <tr>
                        <td colspan="5">
                            No ticket yet
                        </td>
                    </tr>
                @endforelse

                </tbody>
            </table>
        </div>
        </div>
    </div>
    </div>


</div>
