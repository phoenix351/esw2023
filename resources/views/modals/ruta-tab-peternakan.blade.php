{{-- Tabel A --}}
<div class="my-4">
    <h4 class="my-2 text-lg font-medium text-gray-900 dark:text-white">Ternak Kerbau Potong, Kerbau Perah, Sapi Potong,
        dan
        Sapi Perah</h4>
    <div
        class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
        <button onclick="tambahUsaha('peternakan-a-body','hapusTernak','a',{})" type="button"
            class="flex items-center justify-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
            <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                aria-hidden="true">
                <path clip-rule="evenodd" fill-rule="evenodd"
                    d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"></path>
            </svg>
            Tambah Ternak
        </button>
        <form>
            @csrf
            <button type="button" onclick="simpanTernak('a','{{ csrf_token() }}')"
                class="text-white inline-flex items-center bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                Simpan Ternak
                <svg id="peternakan-a-icon" aria-hidden="true" class="w-5 h-5 ml-2 -mr-1" fill="currentColor"
                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" />
                </svg>

                <svg id="peternakan-a-loader" aria-hidden="true"
                    class="hidden w-5 h-5 mr-1 ml-2 text-white animate-spin fill-blue-600" viewBox="0 0 100 101"
                    fill="none" xmlns="http://www.w3.org/2000/svg">

                    <path
                        d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                        fill="currentColor" />
                    <path
                        d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                        fill="currentFill" />

                </svg>
            </button>
    </div>
    <div class="overflow-x-auto mt-4">
        <table class="usaha-data w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-4 py-3">
                        <span class="sr-only">Actions</span>
                    </th>
                    <th scope="col" class="id px-2 py-2 text-center">id</th>
                    <th scope="col" class="px-2 py-2 text-center">r602</th>
                    <th scope="col" class="px-2 py-2 text-center">r603</th>
                    <th scope="col" class="px-2 py-2 text-center">r604</th>
                    <th scope="col" class="px-2 py-2 text-center">r605</th>
                    <th scope="col" class="px-2 py-2 text-center">r606</th>
                    <th scope="col" class="px-2 py-2 text-center">r607</th>
                    <th scope="col" class="px-2 py-2 text-center">r608</th>
                    <th scope="col" class="px-2 py-2 text-center">r609</th>
                    <th scope="col" class="px-2 py-2 text-center">r610</th>
                    <th scope="col" class="px-2 py-2 text-center">r611</th>
                    <th scope="col" class="px-2 py-2 text-center">r612</th>
                    <th scope="col" class="px-2 py-2 text-center">r613</th>
                    <th scope="col" class="px-2 py-2 text-center">r617</th>
                    <th scope="col" class="px-2 py-2 text-center">r618</th>
                </tr>
            </thead>
            <tbody id="peternakan-a-body" class="hidden">

            </tbody>
            </form>

        </table>
    </div>
    <div id="peternakan-a-empty" class="">
        <div class="z-50 relative flex flex-col justify-center items-center">
            <img class="w-52" src="{{ 'images/Mesa de trabajo Cabemoane.png' }}" alt="" />
        </div>
        <p class="text-center font-semibold text-gray-400 dark:text-gray-500 ">Data tidak ditemukan
        </p>
    </div>
    <div id="peternakan-a-loading" class="usaha-loading hidden flex items-center justify-center flex-col">
        <!-- <div class="loader z-50">Loading...</div> -->
        <div>
            <!-- ... -->
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                style="margin: auto; background: none; display: block; shape-rendering: auto;" width="204px"
                height="204px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
                <circle cx="84" cy="50" r="10" fill="#e6261f">
                    <animate attributeName="r" repeatCount="indefinite" dur="0.5s" calcMode="spline" keyTimes="0;1"
                        values="6;0" keySplines="0 0.5 0.5 1" begin="0s" />
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

    <nav class="flex flex-col md:flex-row justify-between items-start md:items-center space-y-3 md:space-y-0 p-4"
        aria-label="Table navigation">
        <span class="text-sm font-normal text-gray-500 dark:text-gray-400">
            Showing
            <span id="peternakan-a-showing" class="font-semibold text-gray-900 dark:text-white">?</span>
            of
            <span id="peternakan-a-total" class="font-semibold text-gray-900 dark:text-white">?</span>
        </span>
        <ul id="peternakan-a-pagination" class="inline-flex items-stretch -space-x-px">

        </ul>
    </nav>
</div>
{{-- Tabel B --}}
<div class="my-4">
    <h4 class="my-2 text-lg font-medium text-gray-900 dark:text-white">Ternak Domba Potong, Domba Perah, Kambing
        Potong,
        Kambing Perah, Babi, Kuda, Kelingci Potong, Rusa, Unta, dan
        Keledai</h4>
    <div
        class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
        <button onclick="tambahUsaha('peternakan-b-body','hapusTernak','b',{})" type="button"
            class="flex items-center justify-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
            <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                aria-hidden="true">
                <path clip-rule="evenodd" fill-rule="evenodd"
                    d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"></path>
            </svg>
            Tambah Ternak
        </button>
        <form>
            @csrf
            <button type="button" onclick="simpanTernak('b','{{ csrf_token() }}')"
                class="text-white inline-flex items-center bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                Simpan Ternak
                <svg id="peternakan-b-icon" aria-hidden="true" class="w-5 h-5 ml-2 -mr-1" fill="currentColor"
                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" />
                </svg>

                <svg id="peternakan-b-loader" aria-hidden="true"
                    class="hidden w-5 h-5 mr-1 ml-2 text-white animate-spin fill-blue-600" viewBox="0 0 100 101"
                    fill="none" xmlns="http://www.w3.org/2000/svg">

                    <path
                        d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                        fill="currentColor" />
                    <path
                        d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                        fill="currentFill" />

                </svg>
            </button>
    </div>
    <div class="overflow-x-auto mt-4">
        <table class="usaha-data w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-4 py-3">
                        <span class="sr-only">Actions</span>
                    </th>
                    <th scope="col" class="id px-2 py-2 text-left">id</th>
                    <th scope="col" class="px-2 py-2 text-left">r602</th>
                    <th scope="col" class="px-2 py-2 text-left">r603</th>
                    <th scope="col" class="px-2 py-2 text-left">r606</th>
                    <th scope="col" class="px-2 py-2 text-left">r614</th>
                    <th scope="col" class="px-2 py-2 text-left">r617</th>
                    <th scope="col" class="px-2 py-2 text-left">r618</th>
                </tr>
            </thead>
            <tbody id="peternakan-b-body" class="hidden">

            </tbody>
            </form>

        </table>
    </div>
    <div id="peternakan-b-empty" class="">
        <div class="z-50 relative flex flex-col justify-center items-center">
            <img class="w-52" src="{{ 'images/Mesa de trabajo Cabemoane.png' }}" alt="" />
        </div>
        <p class="text-center font-semibold text-gray-400 dark:text-gray-500 ">Data tidak ditemukan
        </p>
    </div>
    <div id="peternakan-b-loading" class="usaha-loading hidden flex items-center justify-center flex-col">
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
    <nav class="flex flex-col md:flex-row justify-between items-start md:items-center space-y-3 md:space-y-0 p-4"
        aria-label="Table navigation">
        <span class="text-sm font-normal text-gray-500 dark:text-gray-400">
            Showing
            <span id="peternakan-b-showing" class="font-semibold text-gray-900 dark:text-white">?</span>
            of
            <span id="peternakan-b-total" class="font-semibold text-gray-900 dark:text-white">?</span>
        </span>
        <ul id="peternakan-b-pagination" class="inline-flex items-stretch -space-x-px">

        </ul>
    </nav>
    {{-- Tabel C --}}
    <div class="my-4">
        <h4 class="my-2 text-lg font-medium text-gray-900 dark:text-white">Ternak Unggas</h4>
        <div
            class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
            <button onclick="tambahUsaha('peternakan-c-body','hapusTernak','c',{})" type="button"
                class="flex items-center justify-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path clip-rule="evenodd" fill-rule="evenodd"
                        d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z">
                    </path>
                </svg>
                Tambah Ternak
            </button>
            <form>
                @csrf
                <button type="button" onclick="simpanTernak('c','{{ csrf_token() }}')"
                    class="text-white inline-flex items-center bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                    Simpan Ternak
                    <svg id="peternakan-c-icon" aria-hidden="true" class="w-5 h-5 ml-2 -mr-1" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" />
                    </svg>
                    <svg id="peternakan-c-loader" aria-hidden="true"
                        class="hidden w-5 h-5 mr-1 ml-2 text-white animate-spin fill-blue-600" viewBox="0 0 100 101"
                        fill="none" xmlns="http://www.w3.org/2000/svg">

                        <path
                            d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                            fill="currentColor" />
                        <path
                            d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                            fill="currentFill" />

                    </svg>
                </button>
        </div>
        <div class="overflow-x-auto mt-4">
            <table class="usaha-data w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-4 py-3">
                            <span class="sr-only">Actions</span>
                        </th>
                        <th scope="col" class="id px-2 py-2 text-left">id</th>
                        <th scope="col" class="px-2 py-2 text-left">r602</th>
                        <th scope="col" class="px-2 py-2 text-left">r603</th>
                        <th scope="col" class="px-2 py-2 text-left">r606</th>
                        <th scope="col" class="px-2 py-2 text-left">r610</th>
                        <th scope="col" class="px-2 py-2 text-left">r614</th>
                        <th scope="col" class="px-2 py-2 text-left">r615</th>
                        <th scope="col" class="px-2 py-2 text-left">r616</th>
                        <th scope="col" class="px-2 py-2 text-left">r617</th>
                        <th scope="col" class="px-2 py-2 text-left">r618</th>

                    </tr>
                </thead>
                <tbody id="peternakan-c-body" class="hidden">

                </tbody>
                </form>

            </table>
        </div>
        <div id="peternakan-c-empty" class="">
            <div class="z-50 relative flex flex-col justify-center items-center">
                <img class="w-52" src="{{ 'images/Mesa de trabajo Cabemoane.png' }}" alt="" />
            </div>
            <p class="text-center font-semibold text-gray-400 dark:text-gray-500 ">Data tidak ditemukan
            </p>
        </div>
        <div id="peternakan-c-loading" class="usaha-loading hidden flex items-center justify-center flex-col">
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
        <nav class="flex flex-col md:flex-row justify-between items-start md:items-center space-y-3 md:space-y-0 p-4"
            aria-label="Table navigation">
            <span class="text-sm font-normal text-gray-500 dark:text-gray-400">
                Showing
                <span id="peternakan-c-showing" class="font-semibold text-gray-900 dark:text-white">?</span>
                of
                <span id="peternakan-c-total" class="font-semibold text-gray-900 dark:text-white">?</span>
            </span>
            <ul id="peternakan-c-pagination" class="inline-flex items-stretch -space-x-px">

            </ul>
        </nav>
    </div>
</div>
{{-- Tabel D --}}
<div class="my-4">
    <h4 class="my-2 text-lg font-medium text-gray-900 dark:text-white">Ternak Lainnya</h4>
    <div
        class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
        <button onclick="tambahUsaha('peternakan-d-body','hapusTernak','d',{})" type="button"
            class="flex items-center justify-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
            <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                aria-hidden="true">
                <path clip-rule="evenodd" fill-rule="evenodd"
                    d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z">
                </path>
            </svg>
            Tambah Ternak
        </button>
        <form>
            @csrf
            <button type="button" onclick="simpanTernak('d','{{ csrf_token() }}')"
                class="text-white inline-flex items-center bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                Simpan Ternak
                <svg id="peternakan-d-icon" aria-hidden="true" class="w-5 h-5 ml-2 -mr-1" fill="currentColor"
                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" />
                </svg>

                <svg id="peternakan-d-loader" aria-hidden="true"
                    class="hidden w-5 h-5 mr-1 ml-2 text-white animate-spin fill-blue-600" viewBox="0 0 100 101"
                    fill="none" xmlns="http://www.w3.org/2000/svg">

                    <path
                        d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                        fill="currentColor" />
                    <path
                        d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                        fill="currentFill" />

                </svg>
            </button>
    </div>
    <div class="overflow-x-auto mt-4">
        <table class="usaha-data w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-4 py-3">
                        <span class="sr-only">Actions</span>
                    </th>
                    <th scope="col" class="id px-2 py-2 text-left">id</th>
                    <th scope="col" class="px-2 py-2 text-left">r602</th>
                    <th scope="col" class="px-2 py-2 text-left">r603</th>
                    <th scope="col" class="px-2 py-2 text-left">r606</th>
                    <th scope="col" class="px-2 py-2 text-left">r617</th>
                    <th scope="col" class="px-2 py-2 text-left">r618</th>
                </tr>
            </thead>
            <tbody id="peternakan-d-body" class="hidden">

            </tbody>
            </form>

        </table>
    </div>
    <div id="peternakan-d-empty" class="">
        <div class="z-50 relative flex flex-col justify-center items-center">
            <img class="w-52" src="{{ 'images/Mesa de trabajo Cabemoane.png' }}" alt="" />
        </div>
        <p class="text-center font-semibold text-gray-400 dark:text-gray-500 ">Data tidak ditemukan
        </p>
    </div>
    <div id="peternakan-d-loading" class="usaha-loading hidden flex items-center justify-center flex-col">
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
    <nav class="flex flex-col md:flex-row justify-between items-start md:items-center space-y-3 md:space-y-0 p-4"
        aria-label="Table navigation">
        <span class="text-sm font-normal text-gray-500 dark:text-gray-400">
            Showing
            <span id="peternakan-d-showing" class="font-semibold text-gray-900 dark:text-white">?</span>
            of
            <span id="peternakan-d-total" class="font-semibold text-gray-900 dark:text-white">?</span>
        </span>
        <ul id="peternakan-d-pagination" class="inline-flex items-stretch -space-x-px">

        </ul>
    </nav>
</div>
