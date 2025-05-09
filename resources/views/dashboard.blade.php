<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!-- Welcome Section -->
                    <div class="text-center">
                        <h1 class="text-4xl font-extrabold mb-4">Welcome to Halcon!</h1>
                        <p class="text-lg mb-6">
                            This is your main dashboard where you can manage all the resources of the application.
                            Use the navigation links above to explore different sections like Orders, Customers, Users, and Materials.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
