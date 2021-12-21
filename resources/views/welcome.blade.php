<x-app-layout>

    {{-- ScrollBar Indicator --}}
    <div class="fixed mt-16 top-0 z-1 w-full">
        <div class="h-2 w-full bg-white">
            <div class="h-2 bg-yellow-300 w-0" id="myBar"></div>
        </div>
    </div>

    <section class="mt-16 bg-cover bg-center" style="background-image: url('{{ asset('img/home/road.jpg') }}')">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-28">
            <div class="w-full md:w-3/4 md:ml-36 lg:w-2/3 lg:ml-48">
                <h1 class="text-4xl text-center text-white">Buying and selling cars</h1>
                <p class="text-lg mt-2 mb-4 text-center text-white">The car store created for the most demanding users
                    with various types of cars.</p>

                <div class="flex justify-center mt-4">
                    <a href="{{ route('search.index') }}"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Find your car</a>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-24">

        <div
            class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-6 text-center">
            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full  object-cover" src="{{ asset('img\home\1.jpeg') }}" alt="">
                </figure>

                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Quality/price</h1>
                </header>
                <p class="text-sm text-gray-500">The Dacia Sandero is a utility car available in 5-door body. It is a
                    decent and inexpensive car.</p>

            </article>
            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{ asset('img\home\2.jpeg') }}" alt="">
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">The best seller</h1>
                </header>
                <p class="text-sm text-gray-500">The SEAT Arona continues unstoppable on its way to becoming the
                    best-selling car</p>
            </article>
            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{ asset('img\home\3.jpeg') }}" alt="">
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">The most expensive car in the world</h1>
                </header>
                <p class="text-sm text-gray-500">Rolls Royce Boat Tail - 23 million euros</p>
            </article>
            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{ asset('img\home\4.jpeg') }}" alt="">
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">The fastest car in the world</h1>
                </header>
                <p class="text-sm text-gray-500">SSC Tuatara achieves an average speed of 455.2 km/h (186.2 mph)</p>
            </article>
        </div>
    </section>

    {{-- WHY US --}}
    <div class="container px-6 py-10 mx-auto md:py-16">
        <div class="flex flex-col space-y-6 md:flex-row md:items-center md:space-x-6">
            <div class="flex items-center justify-center w-full md:w-1/2">
                <img src=" {{ asset('img/home/whyUs.jpeg') }} " alt="car photo"
                    class="w-full h-full max-w-2xl rounded" />
            </div>
            <div class="w-full md:w-1/2">
                <div class="max-w-md mx-auto">
                    <h1 class="text-2xl font-medium tracking-wide text-gray-800 md:text-4xl">
                        Why us?
                    </h1>
                    <p class="mt-5 leading-7 text-gray-600">
                        With us you will quickly get the car you want. With our partner
                        network of all known premium car manufacturers, it is possible
                        for us to respond to your special requests. <br />
                        Our logistics partners enable a fast delivery. We also offer the
                        option that the car is delivered to you by air.
                    </p>
                    <div class="grid gap-6 mt-8 sm:grid-cols-2">
                        <div class="flex items-center space-x-6 text-gray-800">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Fast Shipping</span>
                        </div>
                        <div class="flex items-center space-x-6 text-gray-800">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Secure process</span>
                        </div>
                        <div class="flex items-center space-x-6 text-gray-800">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Exclusive selection</span>
                        </div>
                        <div class="flex items-center space-x-6 text-gray-800">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Premium service</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- 4 Ramdom cars en wweb.php --}}
    <h1 class="text-gray-600 text-center text-3xl mb-6 mt-6">Four cars out of the garage</h1>
    <section class=" max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-6 text-center">
        @foreach ($cars as $car)
            <article class="mb-24">
                <figure>
                    <img class="rounded-xl h-36 w-full  object-cover" src="{{ asset('img/imgUser/' . $car->img) }}"
                        alt="">
                </figure>

                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">{{ $car->Name }}</h1>
                </header>
            </article>  
        @endforeach
    </section>

    
    <script>
        window.onscroll = function() {
            let winScroll = document.body.scrollTop || document.documentElement.scrollTop;
            let height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            let scrolled = (winScroll / height) * 100;
            document.getElementById("myBar").style.width = scrolled + "%";
        };
    </script>

</x-app-layout>
