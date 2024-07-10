<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard User') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <main class="mt-6">
                    <div class="grid gap-6 lg:grid-cols-2 lg:gap-8">
                        <a
                            href="#"
                            id="docs-card"
                            class="flex flex-col items-start gap-6 overflow-hidden rounded-lg bg-white p-6 shadow-lg ring-1 ring-gray-200 transition duration-300 hover:text-gray-700 hover:ring-gray-300 focus:outline-none focus-visible:ring-red-500 dark:bg-gray-800 dark:ring-gray-700 dark:hover:text-gray-300 dark:hover:ring-gray-600 dark:focus-visible:ring-red-500"
                        >
                            <div id="screenshot-container" class="relative flex w-full items-stretch">
                                <img
                                    src="{{ asset('image2.jpg') }}"
                                    class="aspect-video h-full w-full flex-1 rounded-lg object-top object-cover drop-shadow-md dark:hidden"
                                />
                                <img
                                    src=""
                                    alt="Laravel documentation screenshot"
                                    class="hidden aspect-video h-full w-full flex-1 rounded-lg object-top object-cover drop-shadow-lg dark:block"
                                />
                                <div class="absolute -bottom-16 -left-16 h-40 w-[calc(100%+8rem)] bg-gradient-to-b from-transparent via-white to-white dark:via-gray-800 dark:to-gray-800"></div>
                            </div>

                            <div class="relative flex items-center gap-6 lg:items-end">
                                <div id="docs-card-content" class="flex items-start gap-6 lg:flex-col">
                                    <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-red-100 sm:size-16">
                                        <svg class="size-5 sm:size-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                            <path fill="#FF2D20" d="M23 4a1 1 0 0 0-1.447-.894L12.224 7.77a.5.5 0 0 1-.448 0L2.447 3.106A1 1 0 0 0 1 4v13.382a1.99 1.99 0 0 0 1.105 1.79l9.448 4.728c.14.065.293.1.447.1.154-.005.306-.04.447-.105l9.453-4.724a1.99 1.99 0 0 0 1.1-1.789V4ZM3 6.023a.25.25 0 0 1 .362-.223l7.5 3.75a.251.251 0 0 1 .138.223v11.2a.25.25 0 0 1-.362.224l-7.5-3.75a.25.25 0 0 1-.138-.22V6.023Zm18 11.2a.25.25 0 0 1-.138.224l-7.5 3.75a.249.249 0 0 1-.329-.099.249.249 0 0 1-.033-.12V9.772a.251.251 0 0 1 .138-.224l7.5-3.75a.25.25 0 0 1 .362.224v11.2Z"/>
                                            <path fill="#FF2D20" d="m3.55 1.893 8 4.048a1.008 1.008 0 0 0 .9 0l8-4.048a1 1 0 0 0-.9-1.785l-7.322 3.706a.506.506 0 0 1-.452 0L4.454.108a1 1 0 0 0-.9 1.785H3.55Z"/>
                                        </svg>
                                    </div>

                                    <div class="pt-3 sm:pt-5 lg:pt-0">
                                        <h2 class="text-xl font-semibold text-black dark:text-white">Indonesia</h2>
                                        <p class="mt-4 text-sm" style="text-align: justify">
                                            Indonesia adalah negara kepulauan terbesar di dunia yang terletak di Asia Tenggara dan Oseania, d
                                            iapit oleh Samudra Pasifik dan Samudra Hindia. Negara ini terdiri dari lebih dari 17.000 pulau, d
                                            engan beberapa pulau utama seperti Sumatera, Jawa, Kalimantan, Sulawesi, dan Papua. Secara administratif, Indonesia terbagi menjadi 38 provinsi. 
                                            Setiap provinsi dibagi lagi menjadi kabupaten dan kota, yang masing-masing memiliki pemerintahan lokal sendiri. Hingga tahun 2021, terdapat sekitar 416 kabupaten dan 98 kota di Indonesia. 
                                            Struktur administratif ini terus berkembang seiring dengan pemekaran wilayah yang terjadi dari waktu ke waktu.
                                        </p>
                                    </div>
                                </div>

                                <svg class="size-6 shrink-0 stroke-red-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"/>
                                </svg>
                            </div>
                        </a>
                        <a
                            href="#"
                            id="docs-card"
                            class="flex flex-col items-start gap-6 overflow-hidden rounded-lg bg-white p-6 shadow-lg ring-1 ring-gray-200 transition duration-300 hover:text-gray-700 hover:ring-gray-300 focus:outline-none focus-visible:ring-red-500 dark:bg-gray-800 dark:ring-gray-700 dark:hover:text-gray-300 dark:hover:ring-gray-600 dark:focus-visible:ring-red-500"
                        >
                            <div id="screenshot-container" class="relative flex w-full items-stretch">
                                <img
                                    src="{{ asset('image1.jpg') }}"
                                    class="aspect-video h-full w-full flex-1 rounded-lg object-top object-cover drop-shadow-md dark:hidden"
                                />
                                <img
                                    src=""
                                    alt="Laravel documentation screenshot"
                                    class="hidden aspect-video h-full w-full flex-1 rounded-lg object-top object-cover drop-shadow-lg dark:block"
                                />
                                <div class="absolute -bottom-16 -left-16 h-40 w-[calc(100%+8rem)] bg-gradient-to-b from-transparent via-white to-white dark:via-gray-800 dark:to-gray-800"></div>
                            </div>

                            <div class="relative flex items-center gap-6 lg:items-end">
                                <div id="docs-card-content" class="flex items-start gap-6 lg:flex-col">
                                    <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-red-100 sm:size-16">
                                        <svg class="size-5 sm:size-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                            <path fill="#FF2D20" d="M23 4a1 1 0 0 0-1.447-.894L12.224 7.77a.5.5 0 0 1-.448 0L2.447 3.106A1 1 0 0 0 1 4v13.382a1.99 1.99 0 0 0 1.105 1.79l9.448 4.728c.14.065.293.1.447.1.154-.005.306-.04.447-.105l9.453-4.724a1.99 1.99 0 0 0 1.1-1.789V4ZM3 6.023a.25.25 0 0 1 .362-.223l7.5 3.75a.251.251 0 0 1 .138.223v11.2a.25.25 0 0 1-.362.224l-7.5-3.75a.25.25 0 0 1-.138-.22V6.023Zm18 11.2a.25.25 0 0 1-.138.224l-7.5 3.75a.249.249 0 0 1-.329-.099.249.249 0 0 1-.033-.12V9.772a.251.251 0 0 1 .138-.224l7.5-3.75a.25.25 0 0 1 .362.224v11.2Z"/>
                                            <path fill="#FF2D20" d="m3.55 1.893 8 4.048a1.008 1.008 0 0 0 .9 0l8-4.048a1 1 0 0 0-.9-1.785l-7.322 3.706a.506.506 0 0 1-.452 0L4.454.108a1 1 0 0 0-.9 1.785H3.55Z"/>
                                        </svg>
                                    </div>

                                    <div class="pt-3 sm:pt-5 lg:pt-0">
                                        <h2 class="text-xl font-semibold text-black dark:text-white">Kabupaten</h2>
                                        <p class="mt-4 text-sm" style="text-align: justify">
                                            Kabupaten adalah pembagian wilayah administratif di Indonesia yang berada di bawah provinsi dan di atas kecamatan. 
                                            Setiap kabupaten dipimpin oleh seorang bupati. Kabupaten memiliki fungsi pemerintahan yang meliputi berbagai aspek, 
                                            seperti pendidikan, kesehatan, infrastruktur, dan administrasi pemerintahan daerah. Dalam konteks aplikasi web, data kabupaten 
                                            mungkin mencakup informasi seperti nama kabupaten, kode wilayah, luas wilayah, jumlah penduduk, dan sebagainya.
                                        </p>
                                    </div>
                                </div>

                                <svg class="size-6 shrink-0 stroke-red-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"/>
                                </svg>
                            </div>
                        </a>

                        <a
                            href="https://laracasts.com"
                            class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-lg ring-1 ring-gray-200 transition duration-300 hover:text-gray-700 hover:ring-gray-300 focus:outline-none focus-visible:ring-red-500 dark:bg-gray-800 dark:ring-gray-700 dark:hover:text-gray-300 dark:hover:ring-gray-600 dark:focus-visible:ring-red-500"
                        >
                            <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-red-100 sm:size-16">
                                <svg class="size-5 sm:size-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <g fill="#FF2D20">
                                        <path d="M24 8.25a.5.5 0 0 0-.5-.5H.5a.5.5 0 0 0-.5.5v12a2.5 2.5 0 0 0 2.5 2.5h19a2.5 2.5 0 0 0 2.5-2.5v-12Zm-7.765 5.868a1.221 1.221 0 0 1 0 2.264l-6.626 2.776A1.153 1.153 0 0 1 8 18.123v-5.746a1.151 1.151 0 0 1 1.609-1.035l6.626 2.776ZM19.564 1.677a.25.25 0 0 0-.177-.427H15.6a.106.106 0 0 0-.072.03l-4.54 4.543a.25.25 0 0 0 .177.427h3.783c.027 0 .054-.01.073-.03l4.543-4.543ZM22.071 1.318a.047.047 0 0 0-.045.013l-4.492 4.492a.249.249 0 0 0 .038.385.25.25 0 0 0 .14.042h5.784a.5.5 0 0 0 .5-.5v-2a2.5 2.5 0 0 0-1.925-2.432ZM13.014 1.677a.25.25 0 0 0-.178-.427H9.101a.106.106 0 0 0-.073.03l-4.54 4.543a.25.25 0 0 0 .177.427H8.4a.106.106 0 0 0 .073-.03l4.54-4.543ZM6.513 1.677a.25.25 0 0 0-.177-.427H2.5A2.5 2.5 0 0 0 0 3.75v2a.5.5 0 0 0 .5.5h1.4a.106.106 0 0 0 .073-.03l4.54-4.543Z"/>
                                    </g>
                                </svg>
                            </div>

                            <div class="pt-3 sm:pt-5">
                                <h2 class="text-xl font-semibold text-black dark:text-white">Laracasts</h2>
                                <p class="mt-4 text-sm">
                                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                                </p>
                            </div>

                            <svg class="size-6 shrink-0 self-center stroke-red-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"/>
                            </svg>
                            
                        </a>
                        
                        
                    </div>
                </main>
            </div>
        </div>
    </div>
</x-app-layout>
