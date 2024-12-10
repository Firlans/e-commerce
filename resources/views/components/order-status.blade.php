@props(['status'])

<span class="px-3 py-1 text-sm font-medium rounded-full
    {{ $status === 'pending' ? 'bg-amber-100 text-amber-800' :
    ($status === 'processing' ? 'bg-blue-100 text-blue-800' :
        ($status === 'paid' ? 'bg-green-100 text-green-800' : 'bg-gray-100 text-gray-800')) }}">
    {{ ucfirst($status) }}
</span>