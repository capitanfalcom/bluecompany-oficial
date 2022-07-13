<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Listado Categorias') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div>
                        <table class="table table-fixed w-full">
                            <thead class="table-header-group">
                                <tr class="table-row">
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Accion</th>
                                </tr>
                            </thead>
                            <tbody class="table-row-group">
                                @foreach ($categoriasAll as $categoria)
                                <tr class="text-center">
                                    <td>{{ $categoria->id }}</td>
                                    <td>{{ $categoria->nombre }}</td>
                                    <td>
                                        <div class="flex justify-center">
                                            <!-- <a :href="url('/categorias/create')">
                                                <i class="material-icons">edit</i>
                                            </a> -->
                                            {{Form::open([ 'method'  => 'DELETE', 'route' => [ 'categorias', $categoria->id ] ])}}
                                            {{Form::button('<i class="material-icons">delete_forever</i>', array('type' => 'submit', 'class' => ''))}}
                                            {{ Form::close() }}
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <x-button class="my-3">
                        <x-nav-link class="flex items-center text-white" :href="url('/categorias/create')">
                            {{ __('Agregar Categorias') }}
                        </x-nav-link>
                    </x-button>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>