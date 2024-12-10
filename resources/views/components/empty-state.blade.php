@props(['icon', 'message', 'actionLink' => null, 'actionText' => null])

<div class="text-center py-12">
    <div class="mb-4">
        <i class="fa-solid fa-{{ $icon }} text-5xl text-amber-300"></i>
    </div>
    <p class="text-amber-700">{{ $message }}</p>
    @if($actionLink && $actionText)
        <a href="{{ $actionLink }}" 
           class="mt-4 inline-block bg-amber-700 text-white px-6 py-2 rounded-full hover:bg-amber-800 transition-colors">
            {{ $actionText }}
        </a>
    @endif
</div>