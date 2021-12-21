<x-app-layout>

    <div class="w-full mt-16">
        <section class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-4 py-12">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($cars as $car)
                    @if (auth()->user()->id == $car->user_id)
                        <div
                            class="w-full bg-gray-800 rounded-lg sahdow-lg p-12 flex flex-col justify-center items-center">
                            <div class="mb-8">
                                <img class="object-center object-cover rounded-full h-37 w-37"
                                    src="{{ asset('img/imgUser/' . $car->img) }}" alt="photo">
                            </div>
                            <div class="text-center">
                                <p class="text-xl text-white font-bold mb-2">{{ $car->Name }}</p>
                            </div>
                            @include('car.delete')
                        </div>
                    @endif
                @endforeach
            </div>
        </section>
    </div>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
</x-app-layout>
