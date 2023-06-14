<x-dashboard.dashboard>

    <!-- component -->
    <div class="py-6 bg-gray-100 flex items-center justify-center">
        <div class="w-full">
            <div>
                <h2 class="font-semibold text-xl text-gray-600">Responsive Form</h2>
                <p class="text-gray-500 mb-6">Form is mobile responsive. Give it a try.</p>

                <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-1">
                        <div class="text-gray-600 mb-5">
                            <p class="font-medium text-lg">Personal Details</p>
                            <p>Please fill out all the fields.</p>
                        </div>

                        <form class="lg:col-span-2" enctype="multipart/form-data" multipart=""
                            action={{ route('dashboard.products.store') }} method="POST">
                            @csrf
                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-10">
                                <div class="md:col-span-5">
                                    <label for="full_name">Product Name</label>
                                    <input type="text" name="title" id="full_name"
                                        class="h-10 border mt-1 rounded px-4 w-full bg-gray-50"
                                        placeholder="product title here .." />
                                </div>

                                <div class="md:col-span-5">
                                    <label for="email">Product Description</label>
                                    <textarea class="border mt-1 rounded px-4 w-full bg-gray-50" name="description" id="">

                                    </textarea>
                                </div>

                                <div class="md:col-span-3">
                                    <label for="address">Product Type</label>
                                    <select class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" name="type"
                                        id="">
                                        <option value="" selected disabled> Select Offer Type ..</option>
                                        <option value="main-offer"> Header Offer .</option>
                                        <option value="special-offer"> Special Offer .</option>
                                        <option value="offer">Normale Offer .</option>

                                    </select>
                                </div>

                                <div class="md:col-span-2">
                                    <label for="city">Price</label>
                                    <input type="text" name="price"
                                        class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value=""
                                        placeholder="product price $$.." />
                                </div>

                                <div class="md:col-span-2">
                                    <label for="country">Selecte Categories</label>
                                    <div class="h-10 bg-gray-50 flex border border-gray-200 rounded items-center mt-1">
                                        <livewire:categories-selecte />

                                    </div>
                                </div>

                                <div class="md:col-span-5">
                                    <label for="email">Product Images</label>
                                    <div class="flex items-center justify-center w-full mt-3">
                                        <label for="dropzone-file"
                                            class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                                <svg aria-hidden="true" class="w-10 h-10 mb-3 text-gray-400"
                                                    fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12">
                                                    </path>
                                                </svg>
                                                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span
                                                        class="font-semibold">Click to upload</span> or drag and drop
                                                </p>
                                                <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF
                                                    (MAX. 800x400px)</p>
                                            </div>
                                            <input id="dropzone-file" name="images[]" type="file" class="hidden"
                                                multiple />
                                        </label>
                                    </div>

                                </div>

                            </div>
                            <div id="preview" class="mt-5 w-full grid grid-cols-4 gap-4">
                            </div>

                            <div class="flex bg-indigo-500 border border-indigo-500 rounded mt-7">
                                <button
                                    class="block w-full py-3 text-center text-white transition uppercase font-roboto font-medium">
                                    Create Product
                                </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @prepend('script')
        <script>
            let selectedImage = document.querySelector("#dropzone-file");
            let preview = document.getElementById('preview');
            selectedImage.onchange = evt => {
                preview.innerHTML = ''; // Clear previous previews

                const files = selectedImage.files;
                for (let i = 0; i < files.length; i++) {
                    const file = files[i];
                    let srcUrl = URL.createObjectURL(file);
                    let imgElement = document.createElement('img');
                    imgElement.src = srcUrl;
                    preview.appendChild(imgElement);
                }
            }
        </script>
    @endprepend


</x-dashboard.dashboard>
