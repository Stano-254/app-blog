<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-400 hover:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div>
        <div class="md:grid md:grid-cols-6 md:gap-6 h-screen">
            <div class="md:col-span-1 bg-gray-800">
                <div class="2xl:text-white text-white ">
                    <div class="bg-gray-700 text-gray-400 mx-0 my-2 px-6 py-2 hover:bg-gray-7=600 hover:text-gray-50  ">
                        <a href="dashboard" class="">Dashboard</a>
                    </div>
                    <div class="bg-gray-700 text-gray-400 mx-0 my-2 px-6 py-2 hover:bg-gray-700 hover:text-gray-50">
                        <a href="dashboard/profile" class="">Profile</a>
                    </div>
                    <div class="bg-gray-700 text-gray-400 mx-0 my-2 px-6 py-2 hover:bg-gray-700 hover:text-gray-50 ">
                        <a href="dashboard/projects" class="">Projects</a>
                    </div>
                    <div class="bg-gray-700 text-gray-400 mx-0 my-2 px-6 py-2 hover:bg-gray-700 hover:text-gray-50 ">
                        <a href="dashboard/academic" class="">Academics</a>
                    </div>
                    <div class="bg-gray-700 text-gray-400 mx-0 my-2 px-6 py-2 hover:bg-gray-700 hover:text-gray-50 ">
                        <a href="about" class="">About</a>
                    </div>
                    <div class="bg-gray-700 text-gray-400 mx-0 my-2 px-6 py-2 hover:bg-gray-700 hover:text-gray-50 ">
                        <a href="contact" class="">contact us</a>
                    </div>
                </div>

            </div>


        <div class="md:col-span-5 pt-3 ">

            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div class="container-md h-50 bg-primary w-50 sm:rounded-lg">
                            <a class="text-black-50 " href="dashboard/portfolio">portfolio</a>
                        </div>
                    </div>
                </div>

        </div>


       </div>
    </div>
</x-app-layout>
