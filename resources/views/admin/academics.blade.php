<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-400 hover:text-gray-100 leading-tight cursor-pointer">
            {{ __('Academics') }}
        </h2>
    </x-slot>
<div class="m-2">
    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        <form action="#" method="POST">
            <div class="shadow sm:rounded-md sm-overflow-hidden">
                <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                    <div class="grid grid-cols-12 gap-2 flex" >
                        <div class="col-span-2 sm:col-span-2 ">
                            <label for="from" class="block text-sm font-medium text-gray-700">From</label>
                            <input type="date" name="from" id="from"  class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" >
                        </div>
                        <div class="col-span-2 sm:col-span-2">
                            <label for="To" class="block text-sm font-medium text-gray-700">To</label>
                            <input type="date" name="to" id="last_name" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" >
                        </div>
                        <div class="col-span-2 sm:col-span-2">
                            <label for="last_name" class="block text-sm font-medium text-gray-700">Institution</label>
                            <input type="text" name="last_name" id="last_name" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" >
                        </div>
                        <div class="col-span-2 sm:col-span-2">
                            <label for="level" class="block text-sm font-medium text-gray-700">Level</label>
                            <select name="level" id="level" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm border-gray-300 rounded-md">
                                <option value="KCPE">KCPE</option>
                                <option value="KCSE">KCSE</option>
                                <option value="Diploma">Diploma</option>
                                <option value="Higher Diploma">Higher Diploma</option>
                                <option value="Degree">Degree</option>
                                <option value="Masters">Masters</option>
                                <option value="PhD">PhD</option>
                                <option value="other">other</option>
                            </select>
                        </div>
                        <div class="col-span-2 sm:col-span-2">
                            <label for="last_name" class="block text-sm font-medium text-gray-700">Qualification</label>
                            <input type="text" name="last_name" id="last_name" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" >
                        </div>
                        <div class="col-span-2 sm:col-span-2">
                            <label for="last_name" class="block text-sm font-medium text-gray-700">Award</label>
                            <input type="text" name="last_name" id="last_name" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" >
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="md:grid md:grid-cols-4 md:gap-6">
        <div class="md:col-span-1 sm:col-span-2">
            <div>
                <div class="mt-1 flex items-center">
                    <span class="inline-block h-40 w-40 rounded-full overflow-hidden bg-gray-100 m-auto border  border-gray-200  hover:border-gray-300 ">
                      <svg class="h-full w-full text-gray-400" fill="currentColor" viewBox="0 0 24 24">
                       <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                           </svg>
                    </span>
                </div>
            </div>
            <div class="px-4 m-2 sm:px-0 sm:m-0.5">

                <h3 class="text-lg font-extrabold leading-6 text-gray-900 capitalize">Profile</h3>
                <p class="mt-1 text-md-center text-gary-600">enter bio data here; be careful this information wull be  shared
                publicy</p>
            </div>
        </div>
        <div class="mt-5 md:mt-0 md:col-span-3 ">
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">

                        <div class="py-4">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">

                            <table class="min-w-full  divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Name
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Title
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Status
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Role
                                    </th>
                                    <th scope="col" class="relative px-6 py-3">
                                        <span class="sr-only">Edit</span>
                                    </th>
                                </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-10 w-10">
                                                <img src="/images/home.jpeg" alt="home" class="h-10 w-10 rounded-full">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">
                                                    Jane cooper
                                                </div>
                                                <div class="text-sm text-gray-500">
                                                    jane.cooper@example.com
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">Regional Paradigm Technician</div>
                                        <div class="text-sm text-gray-500">Optimization</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 ext-green-800">
                                            Active
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        Admin
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>





</div>

</x-app-layout>
