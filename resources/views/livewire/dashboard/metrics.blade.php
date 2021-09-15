<div class="flex-col">
    <div class="flex">
        <p class="text-lg text-gray">
            <i class="fa fa-user"></i> Tickets
        </p>
    </div>
    <div class="flex flex-wrap space-x-2 space-y-2">
    <x-ui.metrics-dashboard icon="list" title="Tickets" value="{{$all}}"/>
    <x-ui.metrics-dashboard icon="bullseye text-warning" title="Open" value="{{$open}}"/>
    <x-ui.metrics-dashboard icon="user" title="Escalated" value="0"/>
    <x-ui.metrics-dashboard icon="check text-success" title="Solved" value="{{$solved}}"/>
    </div>
</div>  