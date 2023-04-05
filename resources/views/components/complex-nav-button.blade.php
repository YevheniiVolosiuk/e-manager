@props([
    'variant' => 'nav-button',
    'href' => null,
    'type' => 'button',
    'active' => false
])

@php
    $classes = ($active ?? false) ? 'bg-gray-100 dark:bg-gray-700' : 'hover:bg-gray-100 dark:hover:bg-gray-700';
@endphp

@php
    $colors = [
        'nav-button' => [
            'base' => 'flex items-center w-full p-2 rounded-lg group',
            'bg' => 'hover:bg-gray-100 ',
            'text' => ' text-gray-900 dark:text-white',
            'hover' => 'dark:hover:bg-gray-700',
            'affect' => ' transition duration-75',
        ],
        'nav-link' => [
            'base' => "flex items-center p-2 sidebar-dropdown rounded-lg" ,
            'bg' => $classes,
            'text' => 'text-base font-normal text-gray-900 dark:text-white',
            'hover' => $classes,
        ]
    ];
@endphp

@if($href)
    <a {{ $attributes->merge([
        'href' => $href,
        'class' => "
                {$colors[$variant]['base']}
                {$colors[$variant]['bg']}
                {$colors[$variant]['text']}
                {$colors[$variant]['hover']}
        ",
    ]) }}>
        {{ $svgIcon ?? null }}
        <span class="flex-1 ml-3 whitespace-nowrap">{{ $slot }}</span>
    </a>
@else
    <button {{ $attributes->merge([
        'type' => $type,
        'class' => "
                {$colors[$variant]['base']}
                {$colors[$variant]['bg']}
                {$colors[$variant]['text']}
                {$colors[$variant]['hover']}
                {$colors[$variant]['affect']}
        ",
    ]) }}>
        {{ $slot }}
    </button>
@endif
