
<div >


    <div class="grid grid-cols-2 ">
        <div class=" px-6 mb-3">
            {{-- <form> --}}
                <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    </div>
                    <input type="search" id="default-search" wire:model="buscar" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Nombre, Tipo de agencia..." required>
                    <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Buscar</button>
                </div>
            {{-- </form> --}}
        </div>

        <div class="grid grid-cols-2 ">
            <div class=" px-6 mb-3 py-2">
                <select id="filtro1"  name="filtro1" wire:model="buscar"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected value="">Todos los Agency</option>
                    <option selected value="Maryel Cervantes">Maryel Cervantes</option>
                    <option value="Fernanda Saldivar">Fernanda Saldivar</option>
                </select>
            </div>

            <div class=" px-6 mb-3 py-2">
                <select id="filtro2"  name="filtro2" wire:model="buscar"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected value="">Todas las Agencias</option>
                    <option selected value="Emprendedor">Emprendedor</option>
                    <option value="StartUp">StartUp</option>
                    <option value="Completa">Completa</option>
                </select>
            </div>


       </div>
    </div>


    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        @if($agencias->count())
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class=" px-6 py-3 cursor-pointer" wire:click="order('id')">
                            ID

                            @if ( $sort == "id")
                                 @if ( $direccion == "asc")
                                    <i class="fas fa-sort-alpha-down"></i>
                                 @else
                                     <i class="fas fa-sort-alpha-up-alt"></i>
                                 @endif
                            @else
                                <i class="fas fa-sort"></i>
                            @endif
                        </th>
                        <th scope="col" class="px-6 py-3 cursor-pointer" wire:click="order('nombre_agencia')">
                            NOMBRE DE AGENCIA
                            @if ( $sort == "nombre_agencia")
                            @if ( $direccion == "asc")
                               <i class="fas fa-sort-alpha-down"></i>
                            @else
                                <i class="fas fa-sort-alpha-up-alt"></i>
                            @endif
                                @else
                                    <i class="fas fa-sort"></i>
                                @endif
                        </th>
                        <th scope="col" class="px-6 py-3 cursor-pointer" wire:click="order('nombre_cliente')">
                            REPRESENTANTE
                            @if ( $sort == "nombre_cliente")
                            @if ( $direccion == "asc")
                               <i class="fas fa-sort-alpha-down"></i>
                            @else
                                <i class="fas fa-sort-alpha-up-alt"></i>
                            @endif
                                @else
                                    <i class="fas fa-sort"></i>
                                @endif
                        </th>
                        <th scope="col" class="px-6 py-3 cursor-pointer" wire:click="order('tipo_agencia')">
                            TIPO DE AGENCIA
                            @if ( $sort == "tipo_agencia")
                            @if ( $direccion == "asc")
                               <i class="fas fa-sort-alpha-down"></i>
                            @else
                                <i class="fas fa-sort-alpha-up-alt"></i>
                            @endif
                                @else
                                    <i class="fas fa-sort"></i>
                                @endif
                        </th>
                        <th scope="col" class="px-4 py-3 cursor-pointer" wire:click="order('modalidad')">
                            MODALIDAD
                            @if ( $sort == "modalidad")
                            @if ( $direccion == "asc")
                               <i class="fas fa-sort-alpha-down"></i>
                            @else
                                <i class="fas fa-sort-alpha-up-alt"></i>
                            @endif
                                @else
                                    <i class="fas fa-sort"></i>
                                @endif
                        </th>
                        <th scope="col" class="px-6 py-3 cursor-pointer" wire:click="order('mail')">
                            MAIL
                            @if ( $sort == "mail")
                            @if ( $direccion == "asc")
                               <i class="fas fa-sort-alpha-down"></i>
                            @else
                                <i class="fas fa-sort-alpha-up-alt"></i>
                            @endif
                                @else
                                    <i class="fas fa-sort"></i>
                                @endif
                        </th>
                        <th scope="col" class="px-4 py-3 cursor-pointer" wire:click="order('agency')">
                            Agency Manager
                            @if ( $sort == "agency")
                            @if ( $direccion == "asc")
                               <i class="fas fa-sort-alpha-down"></i>
                            @else
                                <i class="fas fa-sort-alpha-up-alt"></i>
                            @endif
                                @else
                                    <i class="fas fa-sort"></i>
                                @endif
                        </th>

                        <th scope="col" class="px-5 py-3 cursor-pointer">
                            FICHA
                        </th>
                    </tr>
                </thead>
                <tbody>


                    @foreach ( $agencias as  $agencia)
                    <tr>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white" >
                            {{$agencia->id}}
                        </th>
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
                            {{$agencia->mail}}
                        </td>

                        <td class="px-4 py-4">
                            {{$agencia->agency}}
                        </td>
                        <td class="px-6 py-4">
                            <div class=" items-center ">
                                @livewire('ver-ficha', ['agencia'=> $agencia], key($agencia->id))
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <div class="px-6 py-3 text-white">
                No hay coincidencias con los parametros ingresados
            </div>
        @endif

        @if ($agencias->hasPages())
            <div class="px-6 py-3  text-white">
                {{$agencias->links()}}
            </div>
        @endif


    </div>




</div>
