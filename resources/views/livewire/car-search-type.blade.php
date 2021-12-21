<div>
    <div id="BusquedaCar">
        
        <div class="smResponsive row col-md-8 form-group">
            <h1 class="smResponsive text-xl font-bold text-gray-700 mb-2">Search by Name</h1>
            <input wire:model="Name" wire:keydown="limpiarPage" wire:keydown="validar" type="text"
                class="form-control w-full" id="buscar" placeholder="Name">

            <h1 class="smResponsive text-xl font-bold text-gray-700 mb-2 mt-2">Search by Fuel_type</h1>
            <select wire:model="Fuel_type" wire:change="limpiarPage" class="w-full px-4">
                <option selected value="">-- Select option --</option>
                <option>Gasoline</option>
                <option>Diesel</option>
                <option>Petrol</option>
                <option>Electricity</option>
                <option>Natural gas</option>
                <option>GLP</option>
            </select>

            <h1 class="smResponsive text-xl font-bold text-gray-700 mb-2 mt-2">Search by Price</h1>
            <div class="flex space-x-2">
                <div class="flex-grow">
                    <select  wire:model="Price1" wire:change="limpiarPage" class="w-full">
                        <option selected value="0">-From-</option>
                        <option value="10000">10000</option>
                        <option value="20000">20000</option>
                        <option value="30000">30000</option>
                        <option value="40000">40000</option>
                    </select>

                </div>
                <div class="flex-grow">
                    <select wire:model="Price2" wire:change="limpiarPage" class="w-full">
                        <option selected value="1000000000000">-To-</option>
                        <option value="20000">20000</option>
                        <option value="40000">40000</option>
                        <option value="50000">50000</option>
                        <option value="90000">90000</option>
                    </select>
                </div>
            </div>

            <h1 class="smResponsive text-xl font-bold text-gray-700 mb-2 mt-2">Search by Transmission_type</h1>
            <select  wire:model="transmission" wire:change="limpiarPage" class="w-full">
                <option selected value="">-- Select option --</option>
                <option value="Automatic">Automatic</option>
                <option value="Manual">Manual</option>
                <option value="Attached dual-clutch">Attached dual-clutch</option>
                <option value="6-speed manual">6-speed manual</option>
                <option value="5-speed manual">5-speed manual</option>
                <option value="8-speed longitudinal">8-speed longitudinal</option>
            </select>

            <h1 class="smResponsive text-xl font-bold text-gray-700 mb-2 mt-2">Search by Bodywork</h1>
            <select wire:model="Bodywork" wire:change="limpiarPage" class="w-full">
                <option selected value="">-- Select option --</option>
                <option value="Coupé">Coupé</option>
                <option value="Sedan">Sedan</option>
                <option value="Roadster">Roadster</option>
                <option value="4x4 SUV">4x4 SUV</option>
                <option value="MPV">MPV</option>
                <option value="Deportive">Deportive</option>
                <option value="Berlina">Berlina</option>
                <option value="Hatchback">Hatchback</option>
                <option value="5-door SUV">5-door SUV</option>
            </select>

            <h1 class="smResponsive text-xl font-bold text-gray-700 mb-2 mt-2">Search by Mileage</h1>
            <div class="flex space-x-2">
                <div class="flex-grow">
                    <select wire:model="Mileage1" wire:change="limpiarPage" class="w-full">
                        <option selected value="0">-From-</option>
                        <option value="500">500</option>
                        <option value="1000">1000</option>
                        <option value="5000">5000</option>
                        <option value="10000">10000</option>
                    </select>

                </div>
                <div class="flex-grow">
                    <select wire:model="Mileage2" wire:change="limpiarPage" class="w-full">
                        <option selected value="1000000000000">-To-</option>
                        <option value="10000">10000</option>
                        <option value="50000">50000</option>
                        <option value="70000">70000</option>
                        <option value="90000">90000</option>
                    </select>
                </div>
            </div>

            <h1 class="smResponsive text-xl font-bold text-gray-700 mb-2 mt-2">Search by year</h1>
            <input wire:model="Year" wire:keydown="limpiarPage" type="text" class="form-control w-full"
                placeholder="Year">
        </div>
    </div>

    {{-- Muestra todos los coches con los filtros --}}
    @if ($cars->count()){{-- Si existen coches --}}
        <div
            class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-6 text-center">
            @foreach ($cars as $car)
                <div
                    class="CartaCoche container mx-auto shadow-lg rounded-lg max-w-md hover:shadow-2xl transition duration-300">
                    <img class=" h-60 w-full" src="{{ asset('img/imgUser/' . $car->img) }}" alt="" />
                    <div class="text-center relative py-4">
                        <h1 class="text-2xl font-sans font-semibold text-gray-700 hover:text-gray-900 cursor-pointer">
                            {{ $car->Name }}
                        </h1>
                        <div class="grid gap-1 mt-6 mb-5 sm:grid-cols-2">

                            <div class="flex items-center space-x-4 text-gray-800 ml-1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>{{ $car->Price }}€</span>
                            </div>

                            <div class="flex items-center space-x-4 text-gray-800 ml-1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>{{ $car->Mileage }} km</span>
                            </div>

                            <div class="flex items-center space-x-4 text-gray-800 ml-1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>{{ $car->Bodywork }}</span>
                            </div>

                            <div class="flex items-center space-x-4 text-gray-800 ml-1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>{{ $car->Year }}</span>
                            </div>

                        </div>
                        <a href="{{ route('search.car', $car) }}"
                            class="mb-2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded text-center">
                            View More
                        </a>
                    </div>
                </div>
            @endforeach

            {{ $cars->links() }}

        </div>

        {{-- Else si no se encuentra ningún coche --}}
    @else
        <div class=" max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 gap-6">
            <div class="text-center flex bg-red-100 rounded-lg p-4 mb-4 text-sm text-red-700" role="alert">
                <svg class="w-5 h-5 inline mr-3" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                        clip-rule="evenodd"></path>
                </svg>
                <div>
                    <span class="font-medium">The car you are looking for is not available</span>
                </div>
            </div>
        </div>
    @endif
</div>

