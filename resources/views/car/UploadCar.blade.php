<x-app-layout>

    <div class="flex items-center justify-center mt-24">
        <div class="grid bg-white rounded-lg shadow-xl w-11/12 md:w-11/12 lg:w-9/12">

            <form action="{{ route('car.cars.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                {{-- Para recoger el id del usuario que sube el coche --}}
                {!! Form::hidden('user_id', auth()->user()->id) !!}

                <div class="grid grid-cols-1 mt-5 mx-7">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Name</label>
                    <input name="Name" 
                        class="py-2 px-3 rounded-lg border-2 border-yellow-400 mt-1 focus:outline-none focus:ring-2 focus:ring-yellow-600 focus:border-transparent"
                        type="text" placeholder="Name" />
                        @error('Name')
                            <small class="text-red-500" >{{$message}}</small>
                        @enderror
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
                    <div class="grid grid-cols-1">
                        <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Price</label>
                        <input name="Price" type="number" 
                            class="py-2 px-3 rounded-lg border-2 border-black-400 mt-1 focus:outline-none focus:ring-2 focus:ring-gray-600 focus:border-transparent"
                            type="text" placeholder="Price" />
                            @error('Price')
                            <small class="text-red-500" >{{$message}}</small>
                        @enderror
                    </div>
                    <div class="grid grid-cols-1">
                        <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Year</label>
                        <input name="Year" type="number" min="1700" max="2022"
                            class="py-2 px-3 rounded-lg border-2 border-black-400 mt-1 focus:outline-none focus:ring-2 focus:ring-gray-600 focus:border-transparent"
                            type="text" placeholder="Year" />
                            @error('Year')
                            <small class="text-red-500" >{{$message}}</small>
                        @enderror
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
                    <div class="grid grid-cols-1">
                        <label
                            class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Fuel_type</label>
                            <select  name="Fuel_type" class="py-2 px-3 rounded-lg border-2 border-yellow-400 mt-1 focus:outline-none focus:ring-2 focus:ring-yellow-600 focus:border-transparent">
                                <option disabled selected>-- Select option --</option>
                                <option>Gasoline</option>
                                <option>Diesel</option>
                                <option>Electricity</option>
                                <option>Natural gas</option>
                                <option>GLP</option>
                              </select>
                            @error('Fuel_type')
                            <small class="text-red-500" >{{$message}}</small>
                        @enderror
                    </div>
                    <div class="grid grid-cols-1">
                        <label
                            class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Mileage</label>
                        <input name="Mileage" type="number" min="0"
                            class="py-2 px-3 rounded-lg border-2 border-yellow-400 mt-1 focus:outline-none focus:ring-2 focus:ring-yellow-600 focus:border-transparent"
                            type="text" placeholder="Mileage" />
                            @error('Mileage')
                            <small class="text-red-500" >{{$message}}</small>
                        @enderror
                    </div>
                </div>
                <div class="grid grid-cols-1 mt-5 mx-7">
                    <label
                        class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Transmission_type</label>
                        <select  name="Transmission_type" class="py-2 px-3 rounded-lg border-2 border-black-400 mt-1 focus:outline-none focus:ring-2 focus:ring-gray-600 focus:border-transparent">
                            <option disabled selected>-- Select option --</option>
                            <option>Manual</option>
                            <option>Automatic</option>
                            <option>CVT</option>
                            <option>DCT Automatic</option>
                          </select>
                        @error('Transmission_type')
                        <small class="text-red-500" >{{$message}}</small>
                    @enderror
                </div>

                <div class="grid grid-cols-1 mt-5 mx-7">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Bodywork</label>
                    
                    <select  name="Bodywork" class="py-2 px-3 rounded-lg border-2 border-yellow-400 mt-1 focus:outline-none focus:ring-2 focus:ring-yellow-600 focus:border-transparent">
                        <option disabled selected>-- Select option --</option>
                        <option>Buggy</option>
                        <option>Cabriolet</option>
                        <option>Coupé</option>
                        <option>Flower car</option>
                        <option>Hatchback</option>
                        <option>Hearse</option>
                        <option>Limousine</option>
                        <option>Microvan</option>
                        <option>MPV</option>
                        <option>Panel truck</option>
                        <option>Roadster</option>
                        <option>Sedan</option>
                        <option>Cabrio</option>
                        <option>Coupé</option>
                        <option>Hardtop</option>
                        <option>Phaeton</option>
                        <option>Landaulet</option>
                      </select>
                        @error('Bodywork')
                        <small class="text-red-500" >{{$message}}</small>
                    @enderror
                </div>

                {{-- Img upload --}}
                <div class="flex items-center justify-center bg-grey-lighter mt-6">
                    <label name="file"
                        class="w-64 flex flex-col items-center px-4 py-6 bg-white text-blue rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:border-yellow-400 hover:border-2">
                        <svg name="file" class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20">
                            <path
                                d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                        </svg>
                        <span class="mt-2 text-base leading-normal">Select a file</span>
                        <input type="file" id="image" class="hidden" name="file" accept="image/*"/>  
                        @error('file')
                            <small class="text-red-500" >{{$message}}</small>
                        @enderror     
                    </label>
                   
                    
                </div>
                {{-- Preview --}}
                <div class="flex items-center justify-center bg-grey-lighter mt-6">
                    <div class="col-md-12 mb-2">
                        <img id="preview-image" src="" style="max-height: 300px; max-width: 350px;">
                    </div>
                </div>

                {{-- Create btn --}}
                <div class='flex items-center justify-center md:gap-8 gap-4 pt-4 pb-5'>
                    <button type="submit"
                        class='w-auto bg-green-400 hover:bg-green-700 rounded-lg shadow-xl font-medium text-white px-4 py-2'>Create</button>
                </div>

                {{-- JQ para preview img --}}
                <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
                <script type="text/javascript">
                    $(document).ready(function(e) {
                        $('#image').change(function() {
                            let reader = new FileReader();
                            reader.onload = (e) => {
                                $('#preview-image').attr('src', e.target.result);
                            }
                            reader.readAsDataURL(this.files[0]);
                        });
                    });
                </script>
        </div>
        </form>
    </div>

</x-app-layout>