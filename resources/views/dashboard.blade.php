<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-4">
                <div class="p-3 m-2 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in") }} {{ Auth::user()->name }}!
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-4 shadow-lg">
        <div class="card-body">
            <h5 class="card-title text-primary">Post Summary</h5>
            <p class="font-monospace"><small><b>Total Posts: </b>{{ $totalPosts }}</small></p>
            <hr>
            <p class="font-monospace"><small><b>Total Published Posts: </b>{{ $totalPublish }}</small></p>
            <hr>
            <p class="font-monospace"><small><b>Total Unpublished Posts: </b>{{ $totalUnPublish }}</small></p>
            <hr>
        </div>
    </div>

    <style>
        .card:hover {
            background-color: #f8f9fa;
            transform: translateY(-5px);
            transition: transform 0.3s, background-color 0.3s;
        }
        .card-body h5 {
            font-weight: bold;
        }
        .card-body p {
            font-size: 1.1em;
        }
        .card-body hr {
            border-top: 2px solid #e9ecef;
        }
        .p-3.m-2 {
            padding: 1rem !important;
            margin: .5rem !important;
        }
    </style>
</x-app-layout>
