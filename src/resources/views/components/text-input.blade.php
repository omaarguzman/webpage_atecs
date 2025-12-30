@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
    'class' => 'border-gray-300 focus:border-jmapaBlue focus:ring-jmapaBlueDark rounded-md shadow-sm',
]) !!}>
