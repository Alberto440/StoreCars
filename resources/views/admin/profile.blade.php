<x-app-layout>

    <div class="bg-gray-100 mt-24">

        <div class="container mx-auto my-5 p-5">
            <div class="md:flex no-wrap md:-mx-2 ">
                <!-- Left Side -->
                <div class="w-full md:w-5/12 md:mx-2 text-center">

                    <!-- Profile Card -->
                    <div class="bg-white p-2 border-t-4 border-green-400">
                        <div class="mb-3">
                            <img class="m-auto rounded-full md:w-1/3 lg:w-1/3  sm:w-2/12"
                                src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                        </div>

                        <h1 class="text-gray-900 font-bold text-xl leading-8 my-1">{{ auth()->user()->name }}</h1>
                        <ul>
                            <li class="flex items-center py-3">
                                <span>Status</span>
                                <span class="ml-auto"><span
                                        class="bg-green-500 py-1 px-2 rounded text-white text-sm">Active</span></span>
                            </li>
                            <li class="flex items-center py-3">
                                <span>Member since</span>
                                <span class="ml-auto">{{ auth()->user()->created_at->toDateString() }}</span>
                            </li>
                        </ul>
                    </div>

                    <div class="my-4"></div>
                    <!-- End of friends card -->
                </div>

                <div class="w-full md:w-8/12 mx-2 h-64">
                    <!-- About Section -->
                    <div class="bg-white p-3 shadow-sm rounded-sm lg:mt-16 md:mt-16">
                        <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8">
                            <span clas="text-green-500">
                                <i class="fas fa-user"></i>
                            </span>
                            <span class="tracking-wide">About</span>
                        </div>

                        <div claFss="text-gray-700">
                            <div>
                                <div class="grid grid-cols-2">
                                    <div class="px-4 py-2 font-semibold">Name</div>
                                    <div class="px-4 py-2">{{ auth()->user()->name }}</div>

                                </div>
                                <div class="grid grid-cols-2">
                                    <div class="px-4 py-2 font-semibold">Email</div>
                                    <div class="px-4 py-2">
                                        <a>{{ auth()->user()->email }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="my-4"></div>

                </div>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</x-app-layout>
