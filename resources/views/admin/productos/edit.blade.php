<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Producto') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif -->
                    <form method="POST" action="/productos/store">
                        @csrf
                        <!-- Name -->
                        <div class="flex-none">
                            <x-label for="name" :value="__('Nombre Producto')" />
                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="{{ $producto->nombre }}" required autofocus />
                        </div>

                        <!-- Valor -->
                        <div class="flex-none mt-4">
                            <x-label for="valor_producto" :value="__('Valor Producto')" />
                            <x-input id="valor_producto" class="block mt-1 w-full" type="number" :value="{{ $producto->valor_producto }}" name="valor_producto" required />
                        </div>

                        <!-- select categoria -->
                        <!-- <div class="mt-3">
                            <x-label for="categoria" :value="__('Categoria')" />
                            @if(count($categorias) < 1)
                            <h3>Favor ingresar categorias</h3>
                            @endif

                            @if(count($categorias) > 0)
                            <select name="categoria" id="categoria" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected>Seleccione Categoria</option>
                                @foreach($categorias as $categoria)
                                <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                                @endforeach
                            </select>
                            @endif

                        </div> -->


                        <x-button class="mt-4 ml-4">
                            {{ __('Guardar Producto') }}
                        </x-button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>