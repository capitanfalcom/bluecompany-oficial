<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Listado Productos') }}
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
                                    <th>Valor</th>
                                    <th>Fecha Elaboracion</th>
                                    <th>Accion</th>
                                </tr>
                            </thead>
                            <tbody class="table-row-group">
                                @foreach ($productsAll as $producto)
                                <tr class="text-center">
                                    <td>{{ $producto->id }}</td>
                                    <td>{{ $producto->nombre }}</td>
                                    <td>{{ $producto->valor }}</td>
                                    <td> --- </td>
                                    <td class="flex justify-center">

                                        <!-- <i class="material-icons">edit</i> -->
                                        <!-- <i data-target="{{ $producto->id }}" :href="url('/productos/destroy/{{ $producto->id }}')" class="material-icons">delete_forever</i> -->
                                        {{Form::open([ 'method'  => 'DELETE', 'route' => [ 'productos', $producto->id ] ])}}
                                        {{Form::button('<i class="material-icons">delete_forever</i>', array('type' => 'submit', 'class' => ''))}}
                                        {{ Form::close() }}

                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <x-button class="my-3">
                        <x-nav-link class="flex items-center text-white" :href="url('/productos/create')">
                            {{ __('Agregar Producto') }}
                        </x-nav-link>
                    </x-button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>