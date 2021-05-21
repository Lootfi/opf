@props(['active'])

@php
$classes = ($active ?? false)
? 'block px-4 py-2 text-sm leading-5 border-l-4 border-indigo-400 text-gray-700 hover:bg-gray-100 focus:outline-none
focus:bg-gray-100 transition'
: 'block px-4 py-2 border-l-4 border-transparent text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none
focus:bg-gray-100
transition'
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</a>
