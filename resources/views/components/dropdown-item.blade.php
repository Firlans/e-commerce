@props(['type' => 'button'])

<button type="{{ $type }}" {{ $attributes->merge(['class' => 'block w-full px-4 py-2 text-left text-sm hover:bg-amber-50 focus:outline-none focus:bg-amber-50 text-amber-700']) }}>
    {{ $slot }}
</button>