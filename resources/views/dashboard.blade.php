<x-app-layout>
    <x-slot name="header">
        <!-- <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2> -->
    </x-slot>

    <div class="py-12">
        <!-- <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div> -->
        <div class="">
            <div class="w-full grid grid-cols-5">
                <!-- <div class="w-full col-span-1 h-fit min-h-screen bg-primary">
                    <div class="text-center py-2 text-brand font-bold">
                        Dashboard
                    </div>
                    <div class="flex flex-col gap-4">
                        <div>
                        <a href="/dashboard/employee">
                            <i></i>
                            <h1 class="text-brand font-bold px-2">Employee</h1>
                        </a>
                        </div>
                    </div>
                </div> -->
                <livewire:dashboard.sidebar/>
                <div class="w-full h-full grid grid-cols-2 gap-2 col-span-4">
                    <div class="p-4 bg-white/70 h-fit">
                        <h1>Employees Statistics</h1>
                    </div>
                    <div class="p-4 bg-white/70 h-fit">
                        <h1>Salaries Satistics</h1>
                    </div>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
