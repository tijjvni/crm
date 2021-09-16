<i wire:target="{{(isset($target)) ? $target : '' }}" wire:loading {!! $attributes->merge(['class' => 'fa fa-spinner fa-spin']) !!}></i>
