@props([
    'label',
    'variant' => 'primary',
    'size' => 'md',
    'disabled' => false,
    'href' => null,
    'type' => 'button',
])

@php
    $colors = [
        'primary' => [
            'bg' => 'bg-green-700',
            'text' => 'text-white',
            'hover' => 'hover:bg-green-800 dark:bg-green-600 dark:hover:bg-green-700',
            'focus' => 'focus:outline-none focus:ring-4 focus:ring-green-300 dark:focus:ring-green-800',
            'affect' => 'transition ease-in-out duration-150',
            'disabled' => 'opacity-50 cursor-not-allowed pointer-events-none',
        ],
        'secondary' => [
            'bg' => 'bg-green-700',
            'text' => 'text-white',
            'hover' => 'hover:bg-green-800 dark:bg-green-600 dark:hover:bg-green-700',
            'focus' => 'focus:outline-none focus:ring-4 focus:ring-green-300 dark:focus:ring-green-800',
            'affect' => 'transition ease-in-out duration-150',
            'disabled' => 'opacity-50 cursor-not-allowed pointer-events-none',
        ]
    ];
@endphp

@if($href)
    <a {{ $attributes->merge([
        'href' => $href,
        'class' => "{$colors[$variant]['bg']} {$colors[$variant]['text']} {$colors[$variant]['hover']} {$colors[$variant]['focus']} ". ($disabled ? $colors[$variant]['disabled'] : '') ."  {$size}",
    ]) }}>
        {{ $label }}
    </a>
@else
    <button {{ $attributes->merge([
        'type' => $type,
        'class' => "{$colors[$variant]['bg']} {$colors[$variant]['text']} {$colors[$variant]['hover']} {$colors[$variant]['focus']} ". ($disabled ? $colors[$variant]['disabled'] : '') ." font-medium rounded-lg text-sm px-5 py-2.5 {$size}",
        'disabled' => $disabled ? 'disabled' : null
    ]) }}>
        {{ $label }}
    </button>
@endif
