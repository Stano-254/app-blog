<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-400 hover:text-gray-100 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>
<div class="m-2">
    <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1">
            <div>
                <div class="mt-1 flex items-center" id ="app">
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
        <div class="mt-5 md:mt-0 md:col-span-2 ">
            <form action="#" method="POST">

                <div class="shadow sm:rounded-md sm-overflow-hidden">
                    <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-3">
                                <label for="first_name" class="block text-sm font-medium text-gray-700">First Name</label>
                                <input type="text" name="first_name" id="first_name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" >
                            </div>
                          <div class="col-span-6 sm:col-span-3">
                              <label for="last_name" class="block text-sm font-medium text-gray-700">Last Name</label>
                               <input type="text" name="last_name" id="last_name" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" >
                          </div>
                            <div class="col-span-6 sm:col-span-4">
                                <label for="email_address" class="block text-sm font-medium text-gray-700">Email address</label>
                                <input type="email" id="email_address"  autocomplete="email"
                                       class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>
                        </div>


                        <div class="grid grid-cols-3 gap-6">
                            <div class="col-span-3 sm:col-span-2">
                                <label for="company_website" class="block text-sm font-medium text-gray-700">Website goes here</label>
                                <div class="mt-1 flex rounded-md shadow-sm">
                                    <span class="inline-flex items-center px-3 rounded-1-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                        http://
                                    </span>
                                    <input type="text" name="comapny_website"class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none
                                    rounded-r-md sm:text-sm border-gray-300" placeholder="www.website.com">
                                </div>
                            </div>
                        </div>
                    <div>
                    <label for="about" class="block text-sm font-medium text-gray-700">About</label>
                    <div class="mt-1">
                        <textarea name="" id="about" cols="30" rows="4"
                                  class="shadow-sm focus:ring-indigo-500 focus-border-indigo-500 mt-1 block w-full
                                  sm:text-sm border-gray-300 rounded-md" placeholder="you@example.com"></textarea>
                    </div>
                    <p class="mt-2 text-sm text-gray-500">
                        Brief description for yor profile. url are hyperlinked
                    </p>
                </div>
                  <div class="mt-1 flex items-center">
                    <label for="photo_upload" class="block text-sm font-medium text-gray-700">
                         <span class="inline-block h-24 w-24 rounded-full overflow-hidden bg-gray-100 focus:ring-gray-500 hover:border-gray-500">
                          <img id="output_image" src="../placeholder.png">
                        </span>
                        <input type="file" name="photo_upload" id="photo_upload" class="sr-only">
                    </label>
                    </div>

                        <div>
                            <label for="cover photo" class="block text-sm font-medium text-gray-700">
                                Cover photo
                            </label>
                            <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                                <div class="space-y-1 text-center">
                                    <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                        <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <div class="flex text-sm text-gray-600">
                                        <label for="file-upload"
                                               class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:offset-2 focus-within:ring-indigo-500">
                                            <span>Upload a File</span>
                                            <input type="file" name="file-upload" id="file-upload" class="sr-only">
                                        </label>
                                       <p class="pl-1">or drag and drop</p>
                                    </div>
                                    <p class="text-xs text-gray-500">
                                        PNG, JPG, GIF up to 10MB
                                    </p>
                                </div>
                            </div>
                        </div>

                </div>
                    <div class="px-4 py-3 bg-gray-100 text-right sm:px-6">
                        <button type="submit" class="inline-flex justify-center py-2 px-4 border-transparent shadow-sm text-sm font-bold font-medium rounded-md text-white bg-indigo-700 focus:outline-none focus:ring-offset-2 focus:ring-indigo-500">
                            Save
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

</x-app-layout>
<script type="text/x-template" id="image-input">
    <div class="image-input"
         :style="{ 'background-image': `url(${imageData})` }"
         @click="chooseImage">
    <span
        v-if="!imageData"
        class="placeholder">
      Choose an Image
    </span>
        <input
            class="file-input"
            ref="fileInput"
            type="file"
            @input="onSelectFile">
    </div>
</script>
