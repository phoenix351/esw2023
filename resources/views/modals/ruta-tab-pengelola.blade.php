<section class="bg-gray-50 dark:bg-gray-900 mt-5">
    <div class="mx-auto max-w-screen-xl">
        <!-- Start coding here -->
        <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
            <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                <div
                    class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                    <button onclick="tambahPengelola()" type="button"
                        class="flex items-center justify-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                        <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path clip-rule="evenodd" fill-rule="evenodd"
                                d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z">
                            </path>
                        </svg>
                        Tambah Pengelola
                    </button>
                    <button onclick="simpanPengelola()" class="hidden" type="button"
                        class="flex items-center justify-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                        Simpan Pengelola
                        <svg aria-hidden="true" class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" />
                        </svg>
                    </button>
                </div>

            </div>
            <div class="overflow-x-auto">
                <table id="pengelola-tabel"
                    class="relative overflow-x-auto shadow-md sm:rounded-lg text-sm text-left text-gray-500 dark:text-gray-400 mt-4">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-4 py-3 text-right">R301. No. Urut UUP</th>
                            <th scope="col" class="px-4 py-3 text-left">R302. Nama Pengelola UUP</th>
                            <th scope="col" class="px-4 py-3 text-right">R303. NIK</th>
                            <th scope="col" class="px-4 py-3 text-right">R307. Kepemilikan Kartu Tani/ Kusuka</th>
                            <th scope="col" class="px-4 py-3 text-right">R309. Jumlah bidang lahan</th>
                            <th scope="col" class="px-4 py-3">
                                <span class="sr-only">Actions</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody id="pengelola-body">

                    </tbody>
                </table>
            </div>
            <nav class="flex flex-col md:flex-row justify-between items-start md:items-center space-y-3 md:space-y-0 p-4"
                aria-label="Table navigation">
                <span class="text-sm font-normal text-gray-500 dark:text-gray-400">
                    Showing
                    <span id="pengelola-showing" class="font-semibold text-gray-900 dark:text-white">?</span>
                    of
                    <span id="pengelola-total" class="font-semibold text-gray-900 dark:text-white">?</span>
                </span>
                <ul id="pengelola-pagination" class="inline-flex items-stretch -space-x-px">

                </ul>
            </nav>
        </div>
    </div>
</section>
