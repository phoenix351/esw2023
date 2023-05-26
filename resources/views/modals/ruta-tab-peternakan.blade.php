{{-- Identitas --}}
<div class="flex justify-start space-x-4">
    <label for="r301_peternakan"
        class="flex items-center text-sm font-medium text-gray-900 dark:text-white content-center">Nomor Unit
        Usaha</label>
    <input type="number" min="1" max="2" name="r301_peternakan" id="r301_peternakan" onkeypress="return false;"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-[4rem] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
</div>
{{-- Tabel A --}}
<div class="my-4">
    <h4 class="my-2 text-lg font-medium text-gray-900 dark:text-white">Ternak Kerbau Potong, Kerbau Perah, Sapi Potong,
        dan
        Sapi Perah</h4>
    <div
        class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
        <button onclick="tambahTernak('peternakan-a-body','hapusTernak','a',{})" type="button"
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
                <svg aria-hidden="true" class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" />
                </svg>
            </button>
    </div>
    <div class="overflow-x-auto mt-4">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
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
            <tbody id="peternakan-a-body">

            </tbody>
            </form>

        </table>
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
    <h4 class="my-2 text-lg font-medium text-gray-900 dark:text-white">Ternak Domba Potong, Domba Perah, Kambing Potong,
        Kambing Perah, Babi, Kuda, Kelingci Potong, Rusa, Unta, dan
        Keledai</h4>
    <div
        class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
        <button onclick="tambahTernak('peternakan-b-body','hapusTernak','b',{})" type="button"
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
                <svg aria-hidden="true" class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" />
                </svg>
            </button>
    </div>
    <div class="overflow-x-auto mt-4">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
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
            <tbody id="peternakan-b-body">

            </tbody>
            </form>

        </table>
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
            <button onclick="tambahTernak('peternakan-c-body','hapusTernak','c',{})" type="button"
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
                <button type="button" onclick="simpanTernak('a','{{ csrf_token() }}')"
                    class="text-white inline-flex items-center bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                    Simpan Ternak
                    <svg aria-hidden="true" class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" />
                    </svg>
                </button>
        </div>
        <div class="overflow-x-auto mt-4">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
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
                <tbody id="peternakan-c-body">

                </tbody>
                </form>

            </table>
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
        <button onclick="tambahTernak('peternakan-d-body','hapusTernak','d',{})" type="button"
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
            <button type="button" onclick="simpanTernak('a','{{ csrf_token() }}')"
                class="text-white inline-flex items-center bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                Simpan Ternak
                <svg aria-hidden="true" class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" />
                </svg>
            </button>
    </div>
    <div class="overflow-x-auto mt-4">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
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
            <tbody id="peternakan-d-body">

            </tbody>
            </form>

        </table>
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
