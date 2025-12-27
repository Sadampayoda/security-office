@props([
    'name',
    'label' => null,
    'type' => 'text',
    'id' => false,
    'placeholder' => null,
    'class' => '',
    'error' => null,
])

@if ($label)
    <label for="">{{ $label }}</label>
@endif


<input type="{{ $type }}" name="{{ $name }}" id="{{ $id ?? $name }}" placeholder="{{ $placeholder }}"
    class="w-full border {{ $errors->has($error ?? $name) ? 'border-red-400' : 'border-stone-500' }}  p-4 rounded-xl {{ $class }}
    focus:border-stone-950
    focus:ring-2 focus:ring-stone-300
    focus:outline-none transition-all duration-400 ease-in-out ">

@error($error ?? $name)
    <p class="text-red-400 text-xs lg:text-sm"> {{ $message }}</p>
@enderror
