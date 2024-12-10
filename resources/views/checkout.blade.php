<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - BiblioHaven</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="{{ config('midtrans.client_key') }}"></script>
</head>

<body class="bg-amber-50/30">
    <x-navbar></x-navbar>

    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="text-center">
            <h1 class="text-2xl font-serif font-bold text-amber-800 mb-6">Processing Payment</h1>
            <p class="text-amber-700 mb-4">Please wait while we redirect you to the payment page...</p>

            <!-- Loading indicator -->
            <div class="animate-spin rounded-full h-12 w-12 border-b-2 border-amber-700 mx-auto"></div>
        </div>
    </main>

    @if(isset($snapToken))
        <script type="text/javascript">
            window.snapToken = "{{ $snapToken }}";

            // Trigger Snap payment on page load
            window.onload = function () {
                window.snap.pay(window.snapToken, {
                    onSuccess: function (result) {
                        window.location.href = '{{ route("orders.index") }}?status=success';
                    },
                    onPending: function (result) {
                        window.location.href = '{{ route("orders.index") }}?status=pending';
                    },
                    onError: function (result) {
                        window.location.href = '{{ route("orders.index") }}?status=error';
                    },
                    onClose: function () {
                        window.location.href = '{{ route("orders.index") }}?status=cancelled';
                    }
                });
            };
        </script>
    @else
        <script>
            window.location.href = '{{ route("orders.index") }}?status=error';
        </script>
    @endif

    <x-footer></x-footer>
</body>

</html>