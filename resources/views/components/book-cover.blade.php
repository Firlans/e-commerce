@props(['book'])

@if($book->image_cover_url)
    <img src="{{ asset($book->image_cover_url) }}" alt="{{ $book->title }}" class="w-full h-full object-cover">
@else
    <div class="w-full h-full flex items-center justify-center">
        <i class="fa-solid fa-book text-2xl text-amber-300"></i>
    </div>
@endif