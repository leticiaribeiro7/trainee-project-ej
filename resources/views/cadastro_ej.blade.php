<x-app-layout>
    <link rel="stylesheet" href="assets/css/frontpage.css">
    <x-slot name="header">
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3> Cadastro Empresa Junior </h3>
                    <br>
                    <form action="{{ route('ej_created') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="nome" class="form-label" id="nome-ej">Nome da EJ</label>
                            <input type="text" name="nome">
                        </div>
                        <div class="mb-3">
                            <label for="nome" class="form-label" id="nome-fed">Federação</label>
                            <select class="form-select" name="id_federacao" aria-label="Default select example" required>
                                <option>Selecione</option>
                                @foreach ($federacoes as $federacao)
                                    <option value="{{$federacao->id}}">{{$federacao->nome}}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>