<div class=" max-w-7xl mx-auto sm:px-6 lg:px-8  dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg     py-4">


    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        NOMBRE DE AGENCIA
                    </th>
                    <th scope="col" class="px-6 py-3">
                        REPRESENTANTE
                    </th>
                    <th scope="col" class="px-6 py-3">
                        TIPO DE AGENCIA
                    </th>
                    <th scope="col" class="px-4 py-3">
                        MODALIDAD
                    </th>
                    <th scope="col" class="px-6 py-3">
                        MAIL
                    </th>
                    <th scope="col" class="px-5 py-3">
                        MONTO PAGADO
                    </th>
                    <th scope="col" class="px-5 py-3">
                        FICHA
                    </th>
                </tr>
            </thead>
            <tbody>


                @foreach ( $agencias as  $agencia)
                <tr>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$agencia->nombre_agencia}}
                    </th>
                    <td class="px-6 py-4">
                        {{$agencia->nombre_cliente}}
                    </td>
                    <td class="px-6 py-4">
                        {{$agencia->tipo_agencia}}
                    </td>
                    <td class="px-6 py-4">
                        {{$agencia->modalidad}}
                    </td>
                    <td class="px-6 py-4">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>


</div>
