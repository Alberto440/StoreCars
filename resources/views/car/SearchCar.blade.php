<x-app-layout>

    <div class="fixed mt-16 top-0 z-1 w-full">
        <div class="h-2 w-full bg-white">
            <div class="h-2 bg-yellow-300 w-0" id="myBar"></div>
        </div>
    </div>

    <section class="mt-16 bg-cover bg-center" style="background-image: url('{{ asset('img/home/BackCAr.jpg') }}')">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-28">
            <div class="w-full md:w-3/4 md:ml-36 lg:w-2/3 lg:ml-48">
                <h1 class="text-4xl text-center text-white">Find your ideal car</h1>
                <p class="text-lg mt-2 mb-4 text-center text-white">Using the search engine you will be able to choose your favorite car</p>
            </div>
    </section>

    <section class="mt-16 flex-grow">
        <h1 class="text-gray-600 text-center text-3xl mb-6">CARS</h1>

        {{-- Vista en views/livewire --}}
        @livewire('car-search-type')

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
