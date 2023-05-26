<form action="#">
    <div class="grid grid-rows-3 gap-4 md:grid-cols-2">

        <input type="text" name="csrf-pengelola" id="csrf-pengelola" value="{{ csrf_token() }}" class="hidden">
        <input type="text" name="id-uup" id="id-uup" value="" class="hidden">
        <div>
            <label for="id_rt" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">id_rt</label>
            <input type="number" name="id_rt" id="id_rt"
                class="w-[3rem] bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                disabled>
        </div>
        <div>
            <label for="r301" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">R301</label>
            <input type="number" name="r301" id="r301"
                class="w-[3rem] bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                disabled>
        </div>
        <div>
            <label for="r302" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">R302</label>
            <input type="text" name="r302" id="r302"
                class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
        </div>
        <div>
            <label for="r303" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">R303</label>
            <input type="text" maxlength="16" name="r303" id="r303"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-[18rem] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                required="">
        </div>
        <div>
            <label for="r307" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">R307</label>
            <input type="number" min="1" max="4" name="r307" id="r307"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-[3rem] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                required="">
        </div>
        <div>
            <label for="r309" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">R309</label>
            <input type="number" min="0" name="r309" id="r309"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-[4rem] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                required="">
        </div>
        <div>
            <label for="1004a" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">1004a</label>
            <input type="number" min="1" max="2" name="1004a" id="1004a"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-[4rem] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                required="">
        </div>
        <div>
            <label for="1006a" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">1006a</label>
            <input type="number" min="1" max="2" name="1006a" id="1006a"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-[4rem] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                required="">
        </div>
        <div>
            <label for="1006b" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">1006b</label>
            <input type="number" min="1" max="2" name="1006b" id="1006b"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-[4rem] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                required="">
        </div>
        <div>
            <label for="1006c" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">1006c</label>
            <input type="number" min="1" max="2" name="1006c" id="1006c"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-[4rem] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                required="">
        </div>
        <div>
            <label for="1010a" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">1010a</label>
            <input type="number" min="1" max="2" name="1010a" id="1010a"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-[4rem] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                required="">
        </div>
        <div>
            <label for="1010b1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">1010b1</label>
            <input type="number" min="1" max="2" name="1010b1" id="1010b1"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-[4rem] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                required="">
        </div>
        <div>
            <label for="1010b2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">1010b2</label>
            <input type="number" min="1" max="2" name="1010b2" id="1010b2"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-[4rem] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                required="">
        </div>
        <div>
            <label for="1010b3" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">1010b3</label>
            <input type="number" min="1" max="2" name="1010b3" id="1010b3"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-[4rem] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                required="">
        </div>
        <div>
            <label for="1010b4" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">1010b4</label>
            <input type="number" min="1" max="2" name="1010b4" id="1010b4"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-[4rem] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                required="">
        </div>
        <div>
            <label for="1010c1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">1010c1</label>
            <input type="number" min="1" max="2" name="1010c1" id="1010c1"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-[4rem] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                required="">
        </div>
        <div>
            <label for="1010c2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">1010c2</label>
            <input type="number" min="1" max="2" name="1010c2" id="1010c2"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-[4rem] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                required="">
        </div>
        <div>
            <label for="1010c3" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">1010c3</label>
            <input type="number" min="1" max="2" name="1010c3" id="1010c3"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-[4rem] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                required="">
        </div>
        <div>
            <label for="1010c4" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">1010c4</label>
            <input type="number" min="1" max="2" name="1010c4" id="1010c4"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-[4rem] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                required="">
        </div>
        <div>
            <label for="1010c5" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">1010c5</label>
            <input type="number" min="1" max="2" name="1010c5" id="1010c5"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-[4rem] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                required="">
        </div>
        <div>
            <label for="1011a" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">1011a</label>
            <input type="number" min="1" max="2" name="1011a" id="1011a"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-[4rem] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                required="">
        </div>
        <div>
            <label for="1011b" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">1011b</label>
            <input type="number" min="1" max="2" name="1011b" id="1011b"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-[4rem] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                required="">
        </div>

    </div>

    <div class="sm:max-md:grid justify-between md:flex grid-cols-1 gap-4 md:grid-cols-2 mt-4">
        <div class="mb-4">

            <button type="submit" name="lahan-generate" id="lahan-generate"
                class="text-white inline-flex items-center bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                Simpan Pengelola
                <svg aria-hidden="true" class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>

    </div>
</form>

<div class="mt-4">
    <div
        class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
        <button onclick="tambahLahan({})" type="button"
            class="flex items-center justify-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
            <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                aria-hidden="true">
                <path clip-rule="evenodd" fill-rule="evenodd"
                    d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"></path>
            </svg>
            Tambah Lahan
        </button>
        <form>
            @csrf
            <button type="button" onclick="simpanLahan('{{ csrf_token() }}')"
                class="text-white inline-flex items-center bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                Simpan Lahan
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
                    <th scope="col" class="px-4 py-3 text-center">id</th>
                    <th scope="col" class="px-4 py-3 text-center">r310</th>
                    <th scope="col" class="px-4 py-3 text-center">r311</th>
                    <th scope="col" class="px-4 py-3 text-center">r312</th>
                    <th scope="col" class="px-4 py-3 text-center">r313</th>
                    <th scope="col" class="px-4 py-3 text-center">r314</th>
                    <th scope="col" class="px-4 py-3 text-center">r315</th>
                    <th scope="col" class="px-4 py-3 text-center">r316</th>
                    <th scope="col" class="px-4 py-3 text-center">r317</th>
                    <th scope="col" class="px-4 py-3 text-center">r318</th>
                    <th scope="col" class="px-4 py-3 text-center">r319</th>
                    <th scope="col" class="px-4 py-3 text-center">r320</th>
                    <th scope="col" class="px-4 py-3 text-center">r321</th>
                    <th scope="col" class="px-4 py-3 text-center">r322</th>
                    <th scope="col" class="px-4 py-3 text-center">r323</th>
                    <th scope="col" class="px-4 py-3 text-center">prov</th>
                    <th scope="col" class="px-4 py-3 text-center">kabkot</th>
                    <th scope="col" class="px-4 py-3 text-center">kec</th>
                    <th scope="col" class="px-4 py-3 text-center">desa</th>
                </tr>
            </thead>
            <tbody id="lahan-body">

            </tbody>
            </form>

        </table>
    </div>
    <nav class="flex flex-col md:flex-row justify-between items-start md:items-center space-y-3 md:space-y-0 p-4"
        aria-label="Table navigation">
        <span class="text-sm font-normal text-gray-500 dark:text-gray-400">
            Showing
            <span id="lahan-showing" class="font-semibold text-gray-900 dark:text-white">?</span>
            of
            <span id="lahan-total" class="font-semibold text-gray-900 dark:text-white">?</span>
        </span>
        <ul id="lahan-pagination" class="inline-flex items-stretch -space-x-px">

        </ul>
    </nav>
</div>
