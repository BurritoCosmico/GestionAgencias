
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 grid grid-cols-3">
                    <div>
                         <button class="bg-red-200">Save Changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="py-12" id="opciones">
        <div class="  max-w-7xl mx-auto sm:px-6 lg:px-8  dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg  grid grid-cols-3   text-center py-4">
           <div class="mt-4 mb-4 ml-4" >
                <input id="agregar" name="agregar" type="button" value="Agregar Agencia" class="items-center px-4 py-4  bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
           </div>

           <div class="mt-4 mb-4 ml-4">
            <input id="editar" name="editar" type="button" value="Editar Agencia" class="items-center px-4 py-4  bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
           </div>

           <div class="mt-4 mb-4 ml-4">
                <input id="eliminar" name="eliminar" type="button" value="Eliminar Agencia" class="items-center px-4 py-4  bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
           </div>
        </div>
    </div>

    <div class="Oculto " id="input_add">
        <div class="  max-w-7xl mx-auto sm:px-6 lg:px-8  dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg     py-4">
            <form method="POST" action="{{route('add')}}">
                @csrf
                <div class="grid grid-cols-3">
                    <div>
                        <p class="text-white text-lg font ml-6"> AGREGAR AGENCIA NUEVA</p>
                    </div>


                </div>
                <div class="grid grid-cols-2 mt-4">
                    <div class=" px-6 ">
                        <label for="nombre_agencia" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre de tu agencia:</label>
                        <input type="text" id="nombre_agencia" name="nombre_agencia" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Social Conecta" required>
                    </div>

                    <div class=" px-6">
                        <label for="tipo_agencia" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipo de Agencia</label>
                        <select id="tipo_agencia" name="tipo_agencia" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="Emprendedor">Emprendedor</option>
                            <option value="StartUp">StartUp</option>
                            <option value="Completa">Completa</option>
                        </select>
                    </div>
                </div>

                <div class="grid grid-cols-3 mt-4">
                        <div class=" px-6">
                            <label for="ciudad" name="ciudad" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ciudad:</label>
                            <input type="text" id="ciudad" name="ciudad" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Cuernavaca" required>
                        </div>

                        <div class="px-6">
                            <label for="estado" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Estado/Departamento/Región: </label>
                            <input type="text" id="estado" name="estado" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Morelos" required>
                        </div>

                        <div class="px-6">
                            <label for="pais" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">País: </label>
                            <input type="text" id="pais"  name="pais" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="México" required>
                        </div>
                </div>

                <div class="grid grid-cols-2 mt-4">

                    <div class=" px-6">
                        <label for="nombre_cliente" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre del cliente o representante:</label>
                        <input type="text" id="nombre_cliente" name="nombre_cliente" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="John Doe" required>
                    </div>

                    <div class="px-6">
                        <label for="mail" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> Correo: </label>
                        <input type="text" id="mail" name="mail" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="correo@correo.com" required>
                    </div>

                </div>

                <div class="grid grid-cols-2 mt-4">
                    <div class=" px-6">
                        <label for="telefono" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Teléfono del representante con clave lada o clave del país:</label>
                        <input type="text" id="telefono" name="telefono" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="+52 7771836483" required>
                    </div>

                    <div class=" px-6">
                        <label for="agency" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Agency asignado:</label>
                        <select id="agency" name="agency" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="Fernanda Saldivar">Fernanda Saldivar</option>
                            <option value="Maryel Cervantes">Maryel Cervantes</option>
                        </select>
                    </div>
                </div>

                <div class="grid grid-cols-3 mt-4">
                    <div class=" px-6">
                        <label for="fecha_compra" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fecha de compra:</label>
                        <input type="date" id="fecha_compra" name="fecha_compra" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="17/04/2023" required>
                    </div>

                    <div class=" px-6">
                        <label for="modalidad" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Modalidad: </label>
                        <input type="text" id="modalidad" name="modalidad" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Mensual" required>
                    </div>

                    <div class=" px-6">
                        <label for="monto_pago"  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Monto Pagado: </label>
                        <input type="text" id="monto_pago" name="monto_pago" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="$12,000" required>
                    </div>
                </div>

                <div class="grid grid-cols-2 mt-4">
                    <div class=" px-6">
                        <label for="vendedor" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Vendedor:</label>
                        <input type="text" id="vendedor" name="vendedor" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="John Doe" required>
                    </div>

                    <div class=" px-6">
                        <label for="porcentaje" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Porcentaje de descuento: </label>
                        <input type="text" id="porcentaje" name="porcentaje" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="20%" required>
                    </div>
                </div>

                <div class=" grid grid-cols-1 mt-4 ">
                <button type="submit" class="text-white ml-6 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                </div>
            </form>
        </div>
    </div>

    {{-- EDITAR AGENCIAS  --}}
    {{-- FORMULARIO PARA LA EDICIÓN DE AGENCIAS --}}
    <div class="Oculto " id="editar_section">
        <div class="  max-w-7xl mx-auto sm:px-6 lg:px-8  dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg     py-4">
            <form method="POST" action="{{route('add')}}">
                @csrf
                <div class="grid grid-cols-3">
                    <div>
                        <p class="text-white text-lg font ml-6"> EDITAR AGENCIAS</p>
                    </div>


                </div>
                <div class="grid grid-cols-1 mt-4">
                    <div class=" px-6">
                        <label for="edit_nombre_agencia" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre de tu agencia:</label>
                        <input type="text" id="edit_nombre_agencia" name="edit_nombre_agencia" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Social Conecta" required>
                    </div>
                </div>


                <div class="grid grid-cols-2 mt-4">

                    <div class=" px-6">
                        <label for="edit_nombre_cliente" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre del cliente o representante:</label>
                        <input type="text" id="edit_nombre_cliente" name="edit_nombre_cliente" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="John Doe" required>
                    </div>

                    <div class="px-6">
                        <label for="edit_mail" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> Correo: </label>
                        <input type="text" id="edit_mail" name="edit_mail" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="correo@correo.com" required>
                    </div>

                </div>

                <div class=" grid grid-cols-1 mt-4 ">
                <button type="submit" class="text-white ml-6 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Buscar</button>
                </div>
            </form>
        </div>
    </div>
    {{-- TERMINA EDITAR AGENCIAS --}}

    {{-- SUSPENDER AGENCIAS --}}
    <div class=" Oculto" id="drop_section">
        <div class="  max-w-7xl mx-auto sm:px-6 lg:px-8  dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg     py-2">
            <form method="POST" action="{{route('add')}}">
                @csrf
                <div class="grid grid-cols-3">
                    <div>
                        <p class="text-white text-lg font ml-6"> SUSPENDER AGENCIAS </p>
                    </div>


                </div>
                <div class="grid grid-cols-1 mt-4">
                    <div class=" px-6">
                        <label for="edit_nombre_agencia" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre de tu agencia:</label>
                        <input type="text" id="edit_nombre_agencia" name="edit_nombre_agencia" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Social Conecta" required>
                    </div>
                </div>


                <div class="grid grid-cols-2 mt-4">

                    <div class=" px-6">
                        <label for="edit_nombre_cliente" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre del cliente o representante:</label>
                        <input type="text" id="edit_nombre_cliente" name="edit_nombre_cliente" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="John Doe" required>
                    </div>

                    <div class="px-6">
                        <label for="edit_mail" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> Correo: </label>
                        <input type="text" id="edit_mail" name="edit_mail" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="correo@correo.com" required>
                    </div>

                </div>

                <div class=" grid grid-cols-1 mt-4 ">
                <button type="submit" class="text-white ml-6 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Buscar</button>
                </div>
            </form>
        </div>
    </div>
    {{-- TERMINA SUSPENDER AGENCIAS --}}

    {{-- SUSPENDER AGENCIAS --}}
    <div class="mt-4" id="drop_section">
        <div class="  max-w-7xl mx-auto sm:px-6 lg:px-8  dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg     py-4">
            <div>
                <p class="text-white text-lg font ml-6"> LISTADO DE AGENCIAS</p>
            </div>

            <div class="grid grid-cols-2 mt-4">
                <div class=" px-6">
                    <form>
                        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                            </div>
                            <input type="search" id="default-search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Nombre, Tipo de agencia..." required>
                            <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                        </div>
                    </form>
                </div>
            </div>


            {{-- TABLA DE RESULTADOS DE AGENCIAS --}}
            <div class="grid grid-cols-1 mt-8 mb-4">
                {{-- <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    NOMBRE AGENCIA
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    REPRESENTANTE
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    TIPO DE AGENCIA
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    MODALIDAD
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Monto Pagado
                                </th>

                                <th scope="col" class="px-6 py-3">
                                    PAÍS
                                </th>

                                <th scope="col" class="px-6 py-3">
                                    FICHA
                                </th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Apple MacBook Pro 17"
                                </th>
                                <td class="px-6 py-4">
                                    Silver
                                </td>
                                <td class="px-6 py-4">
                                    Laptop
                                </td>
                                <td class="px-6 py-4">
                                    $2999
                                </td>
                                <td class="px-6 py-4">
                                    $2999
                                </td>
                                <td class="px-6 py-4">
                                    México
                                </td>
                                <td class="px-6 py-4">
                                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                </td>
                            </tr>
                            <tr class="border-b bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Microsoft Surface Pro
                                </th>
                                <td class="px-6 py-4">
                                    White
                                </td>
                                <td class="px-6 py-4">
                                    Laptop PC
                                </td>
                                <td class="px-6 py-4">
                                    $1999
                                </td>
                                <td class="px-6 py-4">
                                    $1999
                                </td>
                                <td class="px-6 py-4">
                                    México
                                </td>
                                <td class="px-6 py-4">
                                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                </td>
                            </tr>
                            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Magic Mouse 2
                                </th>
                                <td class="px-6 py-4">
                                    Black
                                </td>
                                <td class="px-6 py-4">
                                    Accessories
                                </td>
                                <td class="px-6 py-4">
                                    $99
                                </td>
                                <td class="px-6 py-4">
                                    $99
                                </td>
                                <td class="px-6 py-4">
                                    México
                                </td>
                                <td class="px-6 py-4">
                                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                </td>
                            </tr>
                            <tr class="border-b bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Google Pixel Phone
                                </th>
                                <td class="px-6 py-4">
                                    Gray
                                </td>
                                <td class="px-6 py-4">
                                    Phone
                                </td>
                                <td class="px-6 py-4">
                                    $799
                                </td>
                                <td class="px-6 py-4">
                                    $799
                                </td>
                                <td class="px-6 py-4">
                                    México
                                </td>
                                <td class="px-6 py-4">
                                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Apple Watch 5
                                </th>
                                <td class="px-6 py-4">
                                    Red
                                </td>
                                <td class="px-6 py-4">
                                    Wearables
                                </td>
                                <td class="px-6 py-4">
                                    $999
                                </td>
                                <td class="px-6 py-4">
                                    $999
                                </td>
                                <td class="px-6 py-4">
                                    México
                                </td>
                                <td class="px-6 py-4">
                                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div> --}}

                @livewire('busqueda-agencias')

            </div>





        </div>
    </div>
    {{-- TERMINA SUSPENDER AGENCIAS --}}


</x-app-layout>
