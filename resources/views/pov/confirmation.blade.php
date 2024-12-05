<!-- resources/views/application/confirmation.blade.php -->

@extends('pov.app')

@section('content')
<!-- Confirmation Overlay -->
<div class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden" id="confirmationOverlay">
    <div class="bg-pink-500 p-8 rounded-lg shadow-lg text-center max-w-lg mx-auto">
        <h2 class="text-2xl font-bold text-white mb-6">
            Thank you for your application!
        </h2>
        <p class="text-white mb-6">
            We have received your submission and will review it shortly. Please remember to always check your
            application status for updates.
        </p>
        <button class="bg-white text-pink-600 px-6 py-3 rounded-lg hover:bg-pink-100 transition duration-200"
            onclick="redirectToStatusPage()">
            Confirm
        </button>
    </div>
</div>

<script>
    // Function to show the confirmation overlay
    window.onload = function () {
        document.getElementById('confirmationOverlay').classList.remove('hidden');
    };

    // Redirect to the application status page
    function redirectToStatusPage() {
        window.location.href = '{{ route('application.status') }}'; // Replace with your actual status page route
    }
</script>
@endsection