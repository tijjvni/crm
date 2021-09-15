<div {{ $attributes->merge(['class' => 'flex-1 bg-white p-3 rounded shadow-md self-center h-28 my-2 md:mb-0']) }}>
    <div class="flex flex-row">
		<div class="h-20 w-20 mr-1 inline-flex items-center justify-center flex-shrink-0 text-green-500 bg-green-100 rounded-full">
            <i class="fa fa-{{$icon}} text-3xl"></i>		
		</div> 
		<div class="flex-grow text-secondary">
			<p class="text-base">{{$title}}</p>
			<h3 class="text-2xl text-primary font-semibold">{{$value}}</h3>
		</div>
	</div>	
</div>