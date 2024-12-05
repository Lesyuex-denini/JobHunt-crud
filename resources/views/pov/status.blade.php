@extends('pov.app')

@section('content')
<div class="relative h-screen w-screen">
    <div class="container mx-auto py-12 px-6 relative z-10 bg-blue-300">
        <!-- Application Status Section -->
        <div class="bg-pink-500 p-8 rounded-lg shadow-lg max-w-3xl mx-auto mb-8">
            <h2 class="text-3xl font-bold text-white mb-6 text-center">
                Application Status
            </h2>
        </div>

        <!-- Applications List Section -->
        <div class="bg-pink-300 p-8 rounded-lg shadow-lg max-w-3xl mx-auto">
            @if ($applications->isEmpty())
                <p class="text-white text-center">You have no applications yet.</p>
            @else
                <table class="w-full text-black">
                    <thead>
                        <tr class="border-b-2 border-gray-800">
                            <th class="py-2 px-4 text-left">Job Title</th>
                            <th class="py-2 px-4 text-left">Applied On</th>
                            <th class="py-2 px-4 text-left">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($applications as $application)
                            <tr class="border-b-2 border-gray-800">
                                <td class="py-2 px-4">{{ $application->job_applying_for }}</td>
                                <td class="py-2 px-4">{{ $application->date_today }}</td>
                                <td class="py-2 px-4">
                                    @if ($application->status)
                                        {{ $application->status }}
                                    @else
                                        Not yet reviewed
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif

            <div class="text-center mt-6">
                <a class="bg-white text-pink-600 px-6 py-2 rounded-lg hover:bg-pink-100 transition duration-200"
                    href="{{ route('home') }}">
                    Go back to home
                </a>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
    <link href="https://cdn.tailwindcss.com" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <style>
        html,
        body {
            background-color: #171f2e;
            width: 100%;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        .relative {
            overflow-x: hidden;
        }

        .container {
            max-width: 100% !important;
            overflow-x: hidden;
        }

        table {
            table-layout: fixed;
        }
    </style>
@endpush