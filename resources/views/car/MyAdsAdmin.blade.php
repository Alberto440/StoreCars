@extends('adminlte::page')
@section('title', 'Car Ads')

@section('content')

    <div class="w-full">
    <section class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-4 py-12">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($cars as $car)
                {{-- @if (auth()->user()->id == $car->user_id) --}}
                    <div class="w-full bg-gray-800 rounded-lg sahdow-lg p-12 flex flex-col justify-center items-center">
                        <div class="mb-8">
                            <img class="object-center object-cover rounded-full h-36 w-36"
                            src="{{ asset('img/imgUser/' . $car->img) }}"
                                alt="photo">
                            </div>
                        <div class="text-center">
                            <p class="text-xl text-white font-bold mb-2">{{ $car->Name }}</p>
                            <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal"
                            data-bs-target="#modal-delete-{{ $car->id }}">
                            Delete
                        </button>
                        </div>
                       
                    </div>
                     @include('car.delete')
                {{-- @endif --}}
            @endforeach
        </div>
    </section>
    </div>

    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
@stop

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
@stop