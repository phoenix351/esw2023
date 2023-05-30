<div id="l1-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
    class="fixed top-0 left-0 right-0 z-50 p-4 overflow-x-hidden md:inset-0 h-[calc(100%-1rem)] justify-center items-center flex">
    <div class="relative w-full max-w-7xl max-h-full">
        <!-- Modal content -->
        <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
            <!-- Modal header -->
            <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                <h3 class="modal-title text-lg font-semibold text-gray-900 dark:text-white">Input L1</h3>
                <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    onclick="$('#l1-modal').hide();$('#modal-backdrop').hide()">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewbox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->

            <div id="form-l1-loading" class="hidden flex items-center justify-center flex-col">
                <!-- <div class="loader z-50">Loading...</div> -->
                <div>
                    <!-- ... -->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        style="margin: auto; background: none; display: block; shape-rendering: auto;" width="204px"
                        height="204px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
                        <circle cx="84" cy="50" r="10" fill="#e6261f">
                            <animate attributeName="r" repeatCount="indefinite" dur="0.5s" calcMode="spline"
                                keyTimes="0;1" values="6;0" keySplines="0 0.5 0.5 1" begin="0s" />
                            <animate attributeName="fill" repeatCount="indefinite" dur="2s" calcMode="discrete"
                                keyTimes="0;0.25;0.5;0.75;1" values="#e6261f;#a3e048;#f7d038;#eb7532;#e6261f"
                                begin="0s" />
                        </circle>
                        <circle cx="16" cy="50" r="10" fill="#e6261f">
                            <animate attributeName="r" repeatCount="indefinite" dur="2s" calcMode="spline"
                                keyTimes="0;0.25;0.5;0.75;1" values="0;0;6;6;6"
                                keySplines="0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1" begin="0s" />
                            <animate attributeName="cx" repeatCount="indefinite" dur="2s" calcMode="spline"
                                keyTimes="0;0.25;0.5;0.75;1" values="16;16;16;50;84"
                                keySplines="0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1" begin="0s" />
                        </circle>
                        <circle cx="50" cy="50" r="10" fill="#eb7532">
                            <animate attributeName="r" repeatCount="indefinite" dur="2s" calcMode="spline"
                                keyTimes="0;0.25;0.5;0.75;1" values="0;0;6;6;6"
                                keySplines="0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1" begin="-0.5s" />
                            <animate attributeName="cx" repeatCount="indefinite" dur="2s" calcMode="spline"
                                keyTimes="0;0.25;0.5;0.75;1" values="16;16;16;50;84"
                                keySplines="0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1" begin="-0.5s" />
                        </circle>
                        <circle cx="84" cy="50" r="10" fill="#f7d038">
                            <animate attributeName="r" repeatCount="indefinite" dur="2s" calcMode="spline"
                                keyTimes="0;0.25;0.5;0.75;1" values="0;0;6;6;6"
                                keySplines="0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1" begin="-1s" />
                            <animate attributeName="cx" repeatCount="indefinite" dur="2s" calcMode="spline"
                                keyTimes="0;0.25;0.5;0.75;1" values="16;16;16;50;84"
                                keySplines="0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1" begin="-1s" />
                        </circle>
                        <circle cx="16" cy="50" r="10" fill="#a3e048">
                            <animate attributeName="r" repeatCount="indefinite" dur="2s" calcMode="spline"
                                keyTimes="0;0.25;0.5;0.75;1" values="0;0;6;6;6"
                                keySplines="0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1" begin="-1.5s" />
                            <animate attributeName="cx" repeatCount="indefinite" dur="2s" calcMode="spline"
                                keyTimes="0;0.25;0.5;0.75;1" values="16;16;16;50;84"
                                keySplines="0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1" begin="-1.5s" />
                        </circle>
                        <!-- [ldio] generated by https://loading.io/ -->
                    </svg>

                </div>
                <p class="text-center font-semibold text-gray-400 dark:text-gray-500">Memuat Data...</p>

            </div>
            <form action="#" id="form-l1">
                @csrf
                <div class="grid xs:grid-cols-1 md:grid-cols-4 gap-4 mb-4">

                    <div class="id">
                        <label for="id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ID
                            Ruta</label>
                        <input type="text" name="id" id="id-ruta" onkeypress="return false"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    </div>
                    <div>
                        <label for="r303"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">R303. Jumlah rumah
                            tangga hasil pemutakhiran</label>
                        <input required type="number" min="0" name="r303"
                            class="w-[5rem] text-right bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            required="">
                    </div>
                    <div>
                        <label for="r305"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">305. Jumlah pengelola
                            unit usaha pertanian peroranga</label>
                        <input required type="number" min="0" name="r305"
                            class="w-[5rem] text-right bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            required="">
                    </div>

                </div>
                <button id="l1-submit" type="submit"
                    class="text-white inline-flex items-center bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
                    data-tabs-target="#pengelola" role="tab" aria-controls="pengelola" aria-selected="false">
                    Simpan
                    <svg id="l1-loader" aria-hidden="true"
                        class="hidden w-5 h-5 mr-1 ml-2 text-white animate-spin fill-blue-600" viewBox="0 0 100 101"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                            fill="currentColor" />
                        <path
                            d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                            fill="currentFill" />
                    </svg>

                    <svg id="l1-icon" aria-hidden="true" class="w-5 h-5 ml-2 -mr-1" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" />
                    </svg>
                </button>
            </form>


        </div>
    </div>
</div>
