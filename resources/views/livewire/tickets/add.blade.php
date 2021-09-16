<div>

    <x-jet-form-section submit="createTicket">
		<x-slot name="title" >Update Contact Info</x-slot>
		<x-slot name="description">Please update valid contact details</x-slot>
		<x-slot name="form">
			<div class="col-span-6">
				<x-jet-validation-errors class="mb-4" />

                <x-jet-label for="subject" value="{{ __('Subject ') }}"/>
                <x-jet-input id="subject" class="block mt-1 mb-5 w-full" type="text" placeholder="Ticket Subject" wire:model="subject"/>

            </div>
		</x-slot>
	    <x-slot name="actions">
    		<x-jet-button class="flex justify-center w-full font-medium" >
				<x-ui.spinning-icon target="createTicket"/>
				<span wire:target="createTicket" wire:loading.remove>
					Create Ticket
				</span>
    		</x-jet-button> 				        
	    </x-slot>	
	</x-jet-form-section>        
</div>
