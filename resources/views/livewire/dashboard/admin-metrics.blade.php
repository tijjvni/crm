<div class="flex-col my-2">
    <div class="flex">
        <p class="text-lg text-gray">
            <i class="fa fa-chart"></i> Admin
        </p>
    </div>    

    <div class="flex flex-wrap space-y-2 space-x-2">

    
        <div class=" flex-1 flex-col-1 divide-y divide-gray-light bg-white rounded-md shadow ">
            <div class="flex-col space-y-1 py-4 px-2 h-24">
                <p class="text-gray-light text-base">Tickets</p>
                <p class="text-lg text-gray">{{ count($tickets) }}</p>
            </div>
            <div class="flex p-2 bg-gray-50 text-primary h-8 rounded-b-md items-end">
                <div class="flex items-center justify-between text-sm">
                    <div class="w-0 flex-1 flex items-center">
                        <i class="fa fa-plus"></i>
                    </div>    
                    <p class="flex-1"> Create new</p>
                </div>                
            </div>
        </div>        
        <div class=" flex-1 flex-col-1 divide-y divide-gray-light bg-white rounded-md shadow ">
            <div class="flex-col space-y-1 py-4 px-2 h-24">
                <p class="text-gray-light text-base">Admins</p>
                <p class="text-lg text-gray">{{ count($admins) }}</p>
            </div>
            <div class="flex p-2 bg-gray-50 text-primary h-8 rounded-b-md items-end">
                <div class="flex items-center justify-between text-sm">
                    <div class="w-0 flex-1 flex items-center">
                        <i class="fa fa-plus"></i>
                    </div>    
                    <p class="flex-1"> Grant permission</p>
                </div>                
            </div>
        </div>
        <div class=" flex-1 flex-col-1 divide-y divide-gray-light bg-white rounded-md shadow ">
            <div class="flex-col space-y-1 py-4 px-2 h-24">
                <p class="text-gray-light text-base">Users</p>
                <p class="text-lg text-gray">{{ count($users) }}</p>
            </div>
            <div class="flex p-2 bg-gray-50 text-primary h-8 rounded-b-md items-end">
                <div class="flex items-center justify-between text-sm">
                    <div class="w-0 flex-1 flex items-center">
                        <i class="fa fa-plus"></i> 
                    </div>    
                    <p class="flex-1"> View users</p>
                </div>                
            </div>       

        </div>
    </div>



</div>
