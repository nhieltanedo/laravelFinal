<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="card shadow-sm mb-4">
                <div class="card-body p-4 sm:p-8 bg-white dark:bg-gray-800">
                    <div class="max-w-xl">
                        @include('profile.partials.update-profile-information-form')
                    </div>
                </div>
            </div>

            <div class="card shadow-sm mb-4">
                <div class="card-body p-4 sm:p-8 bg-white dark:bg-gray-800">
                    <div class="max-w-xl">
                        @include('profile.partials.update-password-form')
                    </div>
                </div>
            </div>

            <div class="card shadow-sm mb-4">
                <div class="card-body p-4 sm:p-8 bg-white dark:bg-gray-800">
                    <div class="max-w-xl">
                        @include('profile.partials.delete-user-form')
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .card:hover {
            background-color: #f8f9fa;
            transform: translateY(-5px);
            transition: transform 0.3s, background-color 0.3s;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }
        .card-body {
            border-radius: 8px;
        }
        .card-body button {
            margin-top: 1.5rem; /* Adjust as needed */
        }
    </style>
</x-app-layout>
