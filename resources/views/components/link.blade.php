@php
    $classes = "text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900
        dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2
        focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
@endphp
{{-- unimos los atributos que vengan del html --}}
<a {{$attributes->merge(['class' => $classes])}} >
    {{-- Pasamos el slot para hacerlo dinamico --}}
    {{$slot}}
</a>
