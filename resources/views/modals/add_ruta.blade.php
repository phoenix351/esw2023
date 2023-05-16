<div id="add-ruta-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-4xl max-h-full">
        <!-- Modal content -->
        <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
            <!-- Modal header -->
            <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Tambah Ruta</h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-target="add-ruta-modal" data-modal-toggle="add-ruta-modal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->

            <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                    <li class="mr-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 rounded-t-lg" id="ruta-tab" data-tabs-target="#ruta" type="button" role="tab" aria-controls="ruta" aria-selected="false">Ket. Ruta</button>
                    </li>
                    <li class="mr-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="pengelola-tab" data-tabs-target="#pengelola" type="button" role="tab" aria-controls="pengelola" aria-selected="false">Pengelola UP</button>
                    </li>
                    <li class="mr-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="lahan-tab" data-tabs-target="#lahan" type="button" role="tab" aria-controls="lahan" aria-selected="false">Lahan UP</button>
                    </li>
                    
                </ul>
            </div>
            <div id="myTabContent">
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="ruta" role="tabpanel" aria-labelledby="profile-tab">
                    {{-- <h3 class="mt-4 mb-2 text-lg font-semibold text-gray-900 dark:text-white">Keterangan Ruta</h3> --}}
                    <div class="grid gap-4 mb-4 sm:grid-cols-4">
                        <div>
                            <label for="r107" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor Urut Bangunan</label>
                            <input type="number" min="1" name="r107" id="r107" class="w-[4rem] text-right bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="001" required="">
                        </div>
                        <div>
                            <label for="r108" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor Urut Ruta UP</label>
                            <input type="number" name="r108" min="1" id="r108" class="w-[4rem] text-right bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="001" required="">
                        </div>
                        <div>
                            <label for="r109" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Kepala Ruta</label>
                            <input type="text" name="r109" id="r109" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Yulius Adwendi" required="">
                        </div>
                        <div>
                            <label for="r201u" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah Ruta Pengelola UP</label>
                            <input type="number" name="r201u" min="0" id="r201u" class="w-[4rem] text-right bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="5" required="">
                        </div>
                        
                    </div>
                    <button id="halaman-1-next"  class="text-white inline-flex items-center bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800" data-tabs-target="#pengelola" role="tab" aria-controls="pengelola" aria-selected="false">
                        Berikutnya
                        <svg aria-hidden="true" class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>                
                </div>
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="pengelola" role="tabpanel" aria-labelledby="dashboard-tab">
                    <section class="bg-gray-50 dark:bg-gray-900 mt-5">
                        <div class="mx-auto max-w-screen-xl">
                            <!-- Start coding here -->
                            <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
                                
                                <div class="overflow-x-auto">
                                    <table id="pengelola-tabel" class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
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
                                                <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white text-right">1</th>
                                                <td class="px-4 py-3 text-left">NULL</td>
                                                <td class="px-4 py-3 text-right">NULL</td>
                                                <td class="px-4 py-3 text-right">NULL</td>
                                                <td class="px-4 py-3 text-right">NULL</td>
                                                <td class="px-4 py-3 flex items-center justify-end">
                                                    <button id="pengelola-1-aksi-button" data-dropdown-toggle="pengelola-1-aksi" class="inline-flex items-center p-0.5 text-sm font-medium text-center text-gray-500 hover:text-gray-800 rounded-lg focus:outline-none dark:text-gray-400 dark:hover:text-gray-100" type="button">
                                                        <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z"></path>
                                                        </svg>
                                                    </button>
                                                    <div id="pengelola-1-aksi" class="z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600 block" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(656px, 102px);" data-popper-placement="bottom">
                                                        <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="pengelola-1-aksi-button">
                                                            <li>
                                                                <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Show</a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                                                            </li>
                                                        </ul>
                                                        <div class="py-1">
                                                            <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr><tr class="pengelola-row border-b dark:border-gray-700">
                                                <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white text-right">2</th>
                                                <td class="px-4 py-3 text-left">NULL</td>
                                                <td class="px-4 py-3 text-right">NULL</td>
                                                <td class="px-4 py-3 text-right">NULL</td>
                                                <td class="px-4 py-3 text-right">NULL</td>
                                                <td class="px-4 py-3 flex items-center justify-end">
                                                    <button id="pengelola-2-aksi-button" data-dropdown-toggle="pengelola-2-aksi" class="inline-flex items-center p-0.5 text-sm font-medium text-center text-gray-500 hover:text-gray-800 rounded-lg focus:outline-none dark:text-gray-400 dark:hover:text-gray-100" type="button">
                                                        <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z"></path>
                                                        </svg>
                                                    </button>
                                                    <div id="pengelola-2-aksi" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                                        <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="pengelola-2-aksi-button">
                                                            <li>
                                                                <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Show</a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                                                            </li>
                                                        </ul>
                                                        <div class="py-1">
                                                            <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr><tr class="pengelola-row border-b dark:border-gray-700">
                                                <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white text-right">3</th>
                                                <td class="px-4 py-3 text-left">NULL</td>
                                                <td class="px-4 py-3 text-right">NULL</td>
                                                <td class="px-4 py-3 text-right">NULL</td>
                                                <td class="px-4 py-3 text-right">NULL</td>
                                                <td class="px-4 py-3 flex items-center justify-end">
                                                    <button id="pengelola-3-aksi-button" data-dropdown-toggle="pengelola-3-aksi" class="inline-flex items-center p-0.5 text-sm font-medium text-center text-gray-500 hover:text-gray-800 rounded-lg focus:outline-none dark:text-gray-400 dark:hover:text-gray-100" type="button">
                                                        <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z"></path>
                                                        </svg>
                                                    </button>
                                                    <div id="pengelola-3-aksi" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                                        <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="pengelola-3-aksi-button">
                                                            <li>
                                                                <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Show</a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                                                            </li>
                                                        </ul>
                                                        <div class="py-1">
                                                            <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr><tr class="pengelola-row border-b dark:border-gray-700">
                                                <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white text-right">4</th>
                                                <td class="px-4 py-3 text-left">NULL</td>
                                                <td class="px-4 py-3 text-right">NULL</td>
                                                <td class="px-4 py-3 text-right">NULL</td>
                                                <td class="px-4 py-3 text-right">NULL</td>
                                                <td class="px-4 py-3 flex items-center justify-end">
                                                    <button id="pengelola-4-aksi-button" data-dropdown-toggle="pengelola-4-aksi" class="inline-flex items-center p-0.5 text-sm font-medium text-center text-gray-500 hover:text-gray-800 rounded-lg focus:outline-none dark:text-gray-400 dark:hover:text-gray-100" type="button">
                                                        <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z"></path>
                                                        </svg>
                                                    </button>
                                                    <div id="pengelola-4-aksi" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                                        <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="pengelola-4-aksi-button">
                                                            <li>
                                                                <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Show</a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                                                            </li>
                                                        </ul>
                                                        <div class="py-1">
                                                            <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr><tr class="pengelola-row border-b dark:border-gray-700">
                                                <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white text-right">5</th>
                                                <td class="px-4 py-3 text-left">NULL</td>
                                                <td class="px-4 py-3 text-right">NULL</td>
                                                <td class="px-4 py-3 text-right">NULL</td>
                                                <td class="px-4 py-3 text-right">NULL</td>
                                                <td class="px-4 py-3 flex items-center justify-end">
                                                    <button id="pengelola-5-aksi-button" data-dropdown-toggle="pengelola-5-aksi" class="inline-flex items-center p-0.5 text-sm font-medium text-center text-gray-500 hover:text-gray-800 rounded-lg focus:outline-none dark:text-gray-400 dark:hover:text-gray-100" type="button">
                                                        <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z"></path>
                                                        </svg>
                                                    </button>
                                                    <div id="pengelola-5-aksi" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                                        <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="pengelola-5-aksi-button">
                                                            <li>
                                                                <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Show</a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                                                            </li>
                                                        </ul>
                                                        <div class="py-1">
                                                            <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                                <nav class="flex flex-col md:flex-row justify-between items-start md:items-center space-y-3 md:space-y-0 p-4" aria-label="Table navigation">
                                    <span class="text-sm font-normal text-gray-500 dark:text-gray-400">
                                        Showing
                                        <span class="font-semibold text-gray-900 dark:text-white">1-10</span>
                                        of
                                        <span class="font-semibold text-gray-900 dark:text-white">1000</span>
                                    </span>
                                    <ul class="inline-flex items-stretch -space-x-px">
                                        <li>
                                            <a href="#" class="flex items-center justify-center h-full py-1.5 px-3 ml-0 text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                                <span class="sr-only">Previous</span>
                                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                                        </li>
                                        <li>
                                            <a href="#" class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                                        </li>
                                        <li>
                                            <a href="#" aria-current="page" class="flex items-center justify-center text-sm z-10 py-2 px-3 leading-tight text-primary-600 bg-primary-50 border border-primary-300 hover:bg-primary-100 hover:text-primary-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                                        </li>
                                        <li>
                                            <a href="#" class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">...</a>
                                        </li>
                                        <li>
                                            <a href="#" class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">100</a>
                                        </li>
                                        <li>
                                            <a href="#" class="flex items-center justify-center h-full py-1.5 px-3 leading-tight text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                                <span class="sr-only">Next</span>
                                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        </section>
                    
                </div>
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="lahan" role="tabpanel" aria-labelledby="settings-tab">
                    <div class="grid gap-4 mb-4 sm:grid-cols-2">
                        <div>
                            <label for="r107" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor Urut Bangunan</label>
                            <input type="number" name="r107" id="r107" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="contoh:001" required="">
                        </div>
                        <div>
                            <label for="r108" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor Urut Rumah Tangga Usaha Pertanian</label>
                            <input type="number" name="r108" id="r108" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="contoh:001" required="">
                        </div>
                        <div>
                            <label for="r109" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Kepala Rumah Tangga</label>
                            <input type="text" name="r109" id="r109" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="contoh:Yulius Adwendi" required="">
                        </div>
                        <div>
                            <label for="r201u" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah Ruta Pengelola UP</label>
                            <input type="number" name="r201u" id="r201u" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="contoh:5" required="">
                        </div>
                        
                    </div>
                    <button type="submit" class="text-white inline-flex items-center bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                       
                        Berikutnya
                        <svg aria-hidden="true" class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
    
                    </button>                </div>
            </div>
            
            <form action="#">
               
               
             
             
              
            </form>
        </div>
    </div>
</div>

<script>
  document.addEventListener("DOMContentLoaded", function(event) {
      /* 
        - Code to execute when only the HTML document is loaded.
        - This doesn't wait for stylesheets, 
          images, and subframes to finish loading. 
      */
     document.getElementById("")
     document.getElementById("halaman-1-next").addEventListener("click", function(){
            // ambil data dari dom
            const r107 = document.getElementById("r107").value;
            const r108 = document.getElementById("r108").value;
            const r109 = document.getElementById("r109").value;
            const r201u = document.getElementById("r201u").value;

            const tabel = document.getElementById("pengelola-body");
           
            // asign ke json
            const ruta = {
                r107,r108,r109,r201u
            };

            // cek jumlah pengelola
            
            tabel.innerHTML ="";
            if(Number(r201u)>0) {
                console.log("masuk");
                // generate pengelola
                for(let i=1;i<=Number(r201u);i++){
                    const {r302,r303,r307,r309}= {
                        r302:"NULL",
                        r303:"NULL",
                        r307:"NULL",
                        r309:"NULL"
                    }
                    const row_blank =  `<tr class="pengelola-row border-b dark:border-gray-700">
                                                <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white text-right">${i}</th>
                                                <td class="px-4 py-3 text-left">${r302}</td>
                                                <td class="px-4 py-3 text-right">${r303}</td>
                                                <td class="px-4 py-3 text-right">${r307}</td>
                                                <td class="px-4 py-3 text-right">${r309}</td>
                                                <td class="px-4 py-3 flex items-center justify-end">
                                                    <button id="pengelola-${i}-aksi-button" data-dropdown-toggle="pengelola-${i}-aksi" class="inline-flex items-center p-0.5 text-sm font-medium text-center text-gray-500 hover:text-gray-800 rounded-lg focus:outline-none dark:text-gray-400 dark:hover:text-gray-100" type="button">
                                                        <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                                        </svg>
                                                    </button>
                                                    <div id="pengelola-${i}-aksi" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600 block" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(656px, 102px);" data-popper-placement="bottom">
                                                        <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="pengelola-${i}-aksi-button">
                                                            <li>
                                                                <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Show</a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                                                            </li>
                                                        </ul>
                                                        <div class="py-1">
                                                            <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>`;
                   
                    tabel.innerHTML = tabel.innerHTML + row_blank;
                    document.getElementById(`pengelola-${i}-aksi-button`).addEventListener("click", function(){
                        if(document.getElementById(`pengelola-${i}-aksi`).classList.contains("hidden")){
                            document.getElementById(`pengelola-${i}-aksi`).classList.remove("hidden");
                            document.getElementById(`pengelola-${i}-aksi`).classList.add("block");
                            return 0;
                        }
                        document.getElementById(`pengelola-${i}-aksi`).classList.remove("block");
                            document.getElementById(`pengelola-${i}-aksi`).classList.add("hidden");
                            return 0;

                       
                    });
                    document.getElementById("pengelola-tab").click();
                   
                }
                return 1;
            } 
            // return 
            return 0;
            
     });
  });
    function generateTableRows(table, rows) {
        table.innerHTML = '';
        for (var i = 0; i < count; i++) {
            table.appendChild(row);
        }
    }
</script>