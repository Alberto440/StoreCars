<x-app-layout>

    <div class="min-w-screen min-h-screen flex items-center p-5 lg:p-10 overflow-hidden relative">
        <div
            class="w-full max-w-6xl rounded bg-white shadow-xl p-10 lg:p-20 mx-auto text-gray-800 relative md:text-left mt-12">
            <div class="md:flex items-center -mx-10">
                <div class="w-full md:w-1/2 px-10 mb-10 md:mb-0">
                    <div class="relative">
                        <img src="{{ asset('img/imgUser/' . $car->img) }}" class="w-full relative z-10" alt="">
                        <div class="border-4 border-yellow-200 absolute top-10 bottom-10 left-10 right-10 z-0"></div>
                    </div>
                </div>
                <div class="w-full md:w-1/2 px-10">
                    <div class="mb-6">
                        <h1 class="font-bold uppercase text-2xl mb-5">{{ $car->Name }}</h1>
                        <p>
                            <b>Mileage: </b>{{ $car->Mileage }} Km<br>
                            <b>Year: </b>{{ $car->Year }}<br>
                            <b>BodyWork: </b>{{ $car->Bodywork }}<br>
                            <b>Fuel_type: </b>{{ $car->Fuel_type }}<br>
                            <b>Transmission_type: </b>{{ $car->Transmission_type }}<br>
                        </p>
                    </div>
                    <div>
                        <div class="inline-block align-bottom mr-6">
                            <span class="font-bold text-3xl leading-none align-baseline">{{ $car->Price }}€</span>
                        </div>
                        @can('Buy-Sell Cars')

                            <div class="inline-block align-bottom">
                                <button
                                    class="cursor-not-allowed bg-yellow-300 opacity-75 hover:opacity-100 text-yellow-900 hover:text-gray-900 rounded-full px-8 py-1 font-semibold">Add
                                    to fav (Not working)</button>
                        </div>@endcan
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
