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
                    <div class="columns-6">
                        <table class="border-collapse mx-auto">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Valor</th>
                                    <th>Fecha Elaboracion</th>
                                    <th>Accion</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($productsAll as $producto)
                                <tr>
                                    <td class="px-3">{{ $producto->id }}</td>
                                    <td class="px-3">{{ $producto->nombre }}</td>
                                    <td class="px-3">{{ $producto->valor }}</td>
                                    <td class="px-3"> --- </td>
                                    <td class="px-3">
                                        <div>
                                            <i class="material-icons">edit</i>

                                            <!-- <i data-target="{{ $producto->id }}" :href="url('/productos/destroy/{{ $producto->id }}')" class="material-icons">delete_forever</i> -->

                                            {{Form::open([ 'method'  => 'DELETE', 'route' => [ 'productos', $producto->id ] ])}}
                                            {{Form::button('<i class="material-icons">delete_forever</i>', array('type' => 'submit', 'class' => ''))}}
                                            {{ Form::close() }}
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <x-button class="ml-3">
                        <x-responsive-nav-link class="flex items-center" :href="url('/productos/create')">
                            {{ __('Agregar Producto') }}
                        </x-responsive-nav-link>
                    </x-button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>