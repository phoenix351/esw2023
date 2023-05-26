<div class="grid xs:grid-cols-1 md:grid-cols-4 gap-4 mb-4">
    <div>
        <label for="r107" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor Urut
            Bangunan</label>
        <input type="number" min="1" name="r107" id="r107"
            class="w-[4rem] text-right bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
            placeholder="001" required="">
    </div>
    <div>
        <label for="r108" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor Urut Ruta
            UP</label>
        <input type="number" name="r108" min="1" id="r108"
            class="w-[4rem] text-right bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
            placeholder="001" required="">
    </div>
    <div>
        <label for="r109" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Kepala
            Ruta</label>
        <input type="text" name="r109" id="r109"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
            placeholder="Yulius Adwendi" required="">
    </div>
    <div>
        <label for="r110" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat Rumah</label>
        <input type="text" name="r110" id="r110"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
            placeholder="Yulius Adwendi" required="">
    </div>
    <div>
        <label for="r111" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ID Wilkerstat</label>
        <input type="text" maxLength="6" name="r111" id="r111"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
            placeholder="Yulius Adwendi" required="">
    </div>
    <div>
        <label for="r201u" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah Unit Usaha
            (No. Terbesar kolom 215)</label>
        <input type="number" name="r201u" min="0" id="r201u"
            class="w-[4rem] text-right bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
            placeholder="5" required="">
    </div>
    <div class="hidden">
        <label for="idsls" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ID SLS</label>
        <input type="number" min="1" name="idsls" id="idsls"
            class="w-[4rem] text-right bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
            placeholder="001" required="">
    </div>
    <div>
        <label for="qc_1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Apakah termasuk QC ?
        </label>
        <div class="flex items-center mb-4">
            <input id="qc-1-radio-1" type="radio" value="0" name="qc-1-radio"
                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="qc-1-radio-1" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Ya</label>
        </div>
        <div class="flex items-center">
            <input checked id="qc-1-radio-2" type="radio" value="1" name="qc-1-radio"
                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="qc-1-radio-2" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tidak</label>
        </div>
    </div>
    <div>
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Apakah sudah dientri
            pada QC ? </label>
        <div class="flex items-center mb-4">
            <input id="qc-2-radio-1" type="radio" value="0" name="qc-2-radio"
                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="qc-2-radio-1" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Sudah</label>
        </div>
        <div class="flex items-center">
            <input checked id="qc-2-radio-2" type="radio" value="1" name="qc-2-radio"
                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="qc-2-radio-2" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Belum</label>
        </div>
    </div>
</div>
<button id="halaman-1-next"
    class="text-white inline-flex items-center bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
    data-tabs-target="#pengelola" role="tab" aria-controls="pengelola" aria-selected="false">
    Berikutnya
    <svg aria-hidden="true" class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
        xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd"
            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
            clip-rule="evenodd"></path>
    </svg>
</button>
