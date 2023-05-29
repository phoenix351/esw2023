<form action="#" id="form-ruta">
    @csrf
    <div class="grid xs:grid-cols-1 md:grid-cols-4 gap-4 mb-4">
        <div>
            <label for="idsls" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ID SLS</label>
            <input required type="number" min="1" onkeypress="return false" name="idsls" id="idsls"
                class="w-[4rem] text-right bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                required="">
        </div>
        <div class="id">
            <label for="id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ID
                Ruta</label>
            <input type="text" name="id" id="id-ruta"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
        </div>
        <div>
            <label for="nomor_bangunan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor Urut
                Bangunan</label>
            <input required type="number" min="1" name="nomor_bangunan" id="nomor_bangunan"
                class="w-[4rem] text-right bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                required="">
        </div>
        <div>
            <label for="nurtup" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor Urut Ruta
                UP</label>
            <input required type="number" name="nurtup" min="1" id="nurtup"
                class="w-[4rem] text-right bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                required="">
        </div>
        <div>
            <label for="nama_krt" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Kepala
                Ruta</label>
            <input required type="text" name="nama_krt" id="nama_krt"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                required="">
        </div>
        <div>
            <label for="r110" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat
                Rumah</label>
            <input required type="text" name="r110" id="r110"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                required="">
        </div>
        <div>
            <label for="r111" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ID
                Wilkerstat</label>
            <input required type="text" maxLength="6" name="r111" id="r111"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                required="">
        </div>
        <div>
            <label for="jumlah_uup" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah Unit
                Usaha
                (No. Terbesar kolom 215)</label>
            <input required type="number" name="jumlah_uup" min="0" id="jumlah_uup"
                class="w-[4rem] text-right bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                required="">
        </div>
        <div>
            <label for="qc1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Apakah termasuk
                QC ?
            </label>
            <div class="flex items-center mb-4">
                <input required id="qc1-1" type="radio" value="1" name="qc1"
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="qc-1-radio-1" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Ya</label>
            </div>
            <div class="flex items-center">
                <input required id="qc1-2" type="radio" value="2" name="qc1"
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="qc1-2" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tidak</label>
            </div>
        </div>
        <div>
            <label for="qc2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Apakah sudah
                dientri
                pada QC ? </label>
            <div class="flex items-center mb-4">
                <input required id="qc2-1" type="radio" value="1" name="qc2"
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="qc-2-radio-1"
                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Sudah</label>
            </div>
            <div class="flex items-center">
                <input required id="qc2-2" type="radio" value="2" name="qc2"
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="qc-2" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Belum</label>
            </div>
        </div>
    </div>
    <button id="halaman-1-next" type="submit"
        class="text-white inline-flex items-center bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
        data-tabs-target="#pengelola" role="tab" aria-controls="pengelola" aria-selected="false">
        Berikutnya
        <svg id="loader-hal-1" aria-hidden="true"
            class="hidden w-5 h-5 mr-1 ml-2 text-white animate-spin fill-blue-600" viewBox="0 0 100 101"
            fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                fill="currentColor" />
            <path
                d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                fill="currentFill" />
        </svg>

        <svg id="icon-hal-1" aria-hidden="true" class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                clip-rule="evenodd"></path>
        </svg>
    </button>
</form>
<div id="form-ruta-loading" class="hidden flex items-center justify-center flex-col">
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
                    keyTimes="0;0.25;0.5;0.75;1" values="#e6261f;#a3e048;#f7d038;#eb7532;#e6261f" begin="0s" />
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
