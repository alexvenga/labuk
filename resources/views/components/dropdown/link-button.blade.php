@props([
    'active' => false,
])
<button tabindex="-1" {{ $attributes->merge([
    'class' => ($active ? 'bg-gray-200 text-gray-900' : 'text-gray-700 hover:bg-gray-200 hover:text-gray-900').' block px-4 py-2 text-sm w-full text-left',
    'type'  => 'button',
]) }}>
    {{ $slot }}
</button>
