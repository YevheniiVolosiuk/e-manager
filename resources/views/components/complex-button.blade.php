{{--<a {{ $attributes->merge(['class' => 'text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700']) }}>{{ $slot }}</a>--}}
{{--<a {{ $attributes->merge(['class' => 'text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800']) }}>{{ $slot }}</a>--}}


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
