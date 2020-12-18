<x-guest-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div>
    </div>
    <div class="hidden space-x-4 sm:-my-px sm:ml-10 sm:flex bg-gray-900">
        <a class="ml-4 whitespace-nowrap inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-gray-700 hover:bg-gray-900"
           href="{{ route('login') }}" :active="request()->routeIs('login')">
            {{ __('Login') }}
        </a>
    </div>
</x-guest-layout>
