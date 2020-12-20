@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Popular Games</h2>
        <div class="popular-games text-sm grid grid-cols-6 gap-12 border-b border-gray-800 pb-16">
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="/ff7.jpg" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right:-20px; bottom:-20px;">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                    Final Fantasy 7 Remake
                </a>
                <div class="text-gray-400 mt-1">Playstation 4</div>
            </div>
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="/ff7.jpg" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right:-20px; bottom:-20px;">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                    Final Fantasy 7 Remake
                </a>
                <div class="text-gray-400 mt-1">Playstation 4</div>
            </div>
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="/ff7.jpg" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right:-20px; bottom:-20px;">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                    Final Fantasy 7 Remake
                </a>
                <div class="text-gray-400 mt-1">Playstation 4</div>
            </div>
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="/ff7.jpg" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right:-20px; bottom:-20px;">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                    Final Fantasy 7 Remake
                </a>
                <div class="text-gray-400 mt-1">Playstation 4</div>
            </div>
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="/ff7.jpg" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right:-20px; bottom:-20px;">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                    Final Fantasy 7 Remake
                </a>
                <div class="text-gray-400 mt-1">Playstation 4</div>
            </div>
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="/ff7.jpg" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right:-20px; bottom:-20px;">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                    Final Fantasy 7 Remake
                </a>
                <div class="text-gray-400 mt-1">Playstation 4</div>
            </div>
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="/ff7.jpg" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right:-20px; bottom:-20px;">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                    Final Fantasy 7 Remake
                </a>
                <div class="text-gray-400 mt-1">Playstation 4</div>
            </div>
        </div>

        <div class="flex my-10">
            <div class="recently-reviewed w-3/4 mr-32">
                <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Recently Reviewed</h2>
                <div class="recently-reviewed-container space-y-12 mt-8">
                    <div class="game bg-gray-800 rounded-large shadow-md flex px-6 py-6">
                        <div class="relative flex-none">
                            <a href="#">
                                <img src="/ff7.jpg" alt="game cover" class="w-48 hover:opacity-75 transition ease-in-out duration-150">
                            </a>
                            <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-900 rounded-full" style="right:-20px; bottom:-20px;">
                                <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>
                            </div>
                        </div>
                        <div class="ml-12">
                            <a href="#" class="block text-large font-semibold leading-tight hover:text-gray-400 mt-4">
                                Final Fantasy 7 Remake
                            </a>
                            <div class="text-gray-400 mt-1">Playstation 4</div>
                            <p class="mt-6 text-gray-400">
                                In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="recently-reviewed-container space-y-12 mt-8">
                    <div class="game bg-gray-800 rounded-large shadow-md flex px-6 py-6">
                        <div class="relative flex-none">
                            <a href="#">
                                <img src="/ff7.jpg" alt="game cover" class="w-48 hover:opacity-75 transition ease-in-out duration-150">
                            </a>
                            <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-900 rounded-full" style="right:-20px; bottom:-20px;">
                                <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>
                            </div>
                        </div>
                        <div class="ml-12">
                            <a href="#" class="block text-large font-semibold leading-tight hover:text-gray-400 mt-4">
                                Final Fantasy 7 Remake
                            </a>
                            <div class="text-gray-400 mt-1">Playstation 4</div>
                            <p class="mt-6 text-gray-400">
                                In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="recently-reviewed-container space-y-12 mt-8">
                    <div class="game bg-gray-800 rounded-large shadow-md flex px-6 py-6">
                        <div class="relative flex-none">
                            <a href="#">
                                <img src="/ff7.jpg" alt="game cover" class="w-48 hover:opacity-75 transition ease-in-out duration-150">
                            </a>
                            <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-900 rounded-full" style="right:-20px; bottom:-20px;">
                                <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>
                            </div>
                        </div>
                        <div class="ml-12">
                            <a href="#" class="block text-large font-semibold leading-tight hover:text-gray-400 mt-4">
                                Final Fantasy 7 Remake
                            </a>
                            <div class="text-gray-400 mt-1">Playstation 4</div>
                            <p class="mt-6 text-gray-400">
                                In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="most-anticipated w-1/4">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. </div>
        </div>
    </div> <!-- end container -->
@endsection
