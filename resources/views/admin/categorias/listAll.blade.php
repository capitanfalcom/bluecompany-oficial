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
                <div class="columns-6">
                        <table class="border-collapse mx-auto">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>                                    
                                    <th>Accion</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categoriasAll as $categoria)
                                <tr>
                                    <td class="px-3">{{ $categoria->id }}</td>
                                    <td class="px-3">{{ $categoria->nombre }}</td>
                                    <td class="px-3">
                                        <div>
                                            <i class="material-icons">edit</i>

                                            
                                            
                                            {{Form::open([ 'method'  => 'DELETE', 'route' => [ 'categorias', $categoria->id ] ])}}                                                
                                                {{Form::button('<i class="material-icons">delete_forever</i>', array('type' => 'submit', 'class' => ''))}}
                                            {{ Form::close() }}
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- <x-button class="ml-3" onclick="{{ url('productos/create') }}">
                            Agregar
                        </x-button> -->

                        <x-button class="ml-3">
                            <x-responsive-nav-link class="flex items-center" :href="url('/categorias/create')">
                                {{ __('Agregar Categorias') }}
                            </x-responsive-nav-link>
                        </x-button>


                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>