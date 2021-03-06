<x-app-layout>
    <link rel="stylesheet" href="assets/css/frontpage.css">
    <x-slot name="header">
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('resultados') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                        <input type="text" name="search" placeholder="Buscar EJ por nome...">
                        <button type="submit" class="btn btn-primary">OK</button>
                        </div>
                    </form>
                </div>
            </div>    
        </div>    
    </div>
</x-app-layout>