<form action="#" id="form-pengelola" class="usaha-data">
    @csrf
    <div class="">
        <div class="id">
            <label for="id_rt" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">id_rt</label>
            <input type="number" name="id_rt" id="id_rt"
                class="w-[3rem] bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                disabled>
        </div>
        <h5 class="text-xl text-center font-bold dark:text-white my-4">III. Total Lahan Unit Usaha Pertanian</h5>
        <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">

        <div class="grid gap-4 grid-cols-1 md:grid-cols-2  lg:grid-cols-3">
            <div>
                <label for="r301" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">R.301 Nomor
                    Urut Unit Usaha Pertanian</label>
                <input type="number" name="r301" id="r301"
                    class="w-[3rem] bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    disabled>
            </div>
            <div>
                <label for="r302" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">R.302 Nama
                    Pengelola</label>
                <input type="text" name="r302" id="r302"
                    class="w-[10rem] bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    required>
            </div>
            <div>
                <label for="r303" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">R.303
                    NIK</label>
                <input type="text" maxlength="16" name="r303" id="r303"
                    class="w-[10rem]  bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    required>
            </div>
            <div>
                <label for="r307" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">R.307
                    Apakah
                    Memiliki Kartu Tani dan atau Kusuka ?</label>
                <input type="number" min="1" max="4" name="r307" id="r307"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-[3rem] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    required>
            </div>
            <div>
                <label for="r309" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">R.309
                    Jumlah
                    Bidang yang dikuasai</label>
                <input type="number" min="0" max="99" name="r309" id="r309"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-[3rem] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    required>
            </div>
        </div>

        <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
        <h5 class="text-xl text-center font-bold dark:text-white my-4"> X. MANAJEMEN DALAM UNIT USAHA PERTANIAN </h5>
        <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">

        <div class="grid grid-rows-3 gap-4 md:grid-cols-2">

            <div class="flex items-start">
                <label for="r1004a" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">R.1004.a
                    Apakah menjadi anggota kelompok tani/ternak/nelayan selama periode <b>1 Mei 2022 s.d 30 April
                        2023</b></label>
                <input type="number" maxlength="1" min="1" max="2" name="r1004a" id="r1004a"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-[4rem] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    required>

            </div>
            <div class="flex items-start">
                <label for="r1006a" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">R.1006.a
                    Jenis pupuk yang digunakan untuk <b>tanaman semusim, tanaman tahunan, kehutanan, dan perikanan</b>
                    selama periode <b>1 Mei 2022 s.d 30 April
                        2023</b></label>
                <input type="number" min="0" max="30" name="r1006a" id="r1006a"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-[4rem] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    required>
            </div>
            <div class="flex flex-col">
                <label for="1006b" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">R.1006.b
                    Berapa jumlah Pupuk uera dan NK yang digunakan selama periode <b>1 Mei 2022 s.d 30 April
                        2023</b>?</label>
                <div class="grid grid-cols-4">
                    <input type="number" min="0" max="10000" name="r1006b1" id="r1006b1"
                        placeholder="Urea ... kg"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-[4rem] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    <input type="number" min="0" max="10000" name="r1006b2" id="r1006b2"
                        placeholder="Urea ... liter"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-[4rem] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    <input type="number" min="0" max="10000" name="r1006b3" id="r1006b3"
                        placeholder="NPK ... kg"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-[4rem] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    <input type="number" min="0" max="10000" name="r1006b4" id="r1006b4"
                        placeholder="NPK ... liter"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-[4rem] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                </div>

            </div>
            <div class="flex items-start">
                <label for="1006c" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">R.1006.c
                    Jenis pestisida yang digunakan untuk <b>tanaman semusim, tanaman tahunan, kehutanan, dan
                        perikanan</b>
                    selama periode <b>1 Mei 2022 s.d 30 April
                        2023</b></label>
                <input type="number" min="0" max="24" name="r1006c" id="1006c"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-[4rem] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    required="">
            </div>
            <div class="flex items-start">
                <label for="r1010a" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">R.1010.a
                    Apakah mendapatkan bantuan untuk usaha pertanian selama periode <b>1 Mei 2022 s.d 30 April
                        2023</b></label>
                <input type="number" min="1" max="2" name="r1010a" id="r1010a"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-[4rem] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    required="">
            </div>
            <div class="flex flex-col">


                <label for="1010b1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">R.1010.b
                    Sumber
                    bantuan yang diperoleh :</label>

                <div class="flex items-start justify-between">

                    <div class="flex flex-col justiify-end">
                        <label for="1010b1"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pemerintah</label>
                        <input type="number" min="1" max="2" name="r1010b1" id="1010b1"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-[4rem] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            required="">
                    </div>
                    <div class="flex flex-col justiify-end">
                        <label for="1010b2"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">BUMN/BUMD</label>
                        <input type="number" min="1" max="2" name="r1010b2" id="1010b2"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-[4rem] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            required="">
                    </div>
                    <div class="flex flex-col justiify-end">
                        <label for="1010b3"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Perusahaan
                            Swasta</label>
                        <input type="number" min="1" max="2" name="r1010b3" id="1010b3"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-[4rem] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            required="">
                    </div>
                    <div class="flex flex-col justiify-end">
                        <label for="1010b4"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Lainnya</label>
                        <input type="number" min="1" max="2" name="r1010b4" id="1010b4"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-[4rem] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            required="">
                    </div>
                </div>
            </div>
            <div class="flex flex-col">
                <label for="1010c" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">R.1010.c
                    Jenis bantuan yang diperoleh :</label>
                <div class="flex items-start justify-between">
                    <div class="">
                        <label for="r1010c1"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pupuk subsidi</label>
                        <input type="number" min="1" max="2" name="r1010c1" id="r1010c1"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-[4rem] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            required="">
                    </div>
                    <div class="">
                        <label for="r1010c2"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sarana/peralatan
                            produksi</label>
                        <input type="number" min="1" max="2" name="r1010c2" id="r1010c2"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-[4rem] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            required="">
                    </div>
                    <div class="">
                        <label for="r1010c3"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bibit</label>
                        <input type="number" min="1" max="2" name="r1010c3" id="r1010c3"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-[4rem] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            required="">
                    </div>
                    <div class="">
                        <label for="r1010c4"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pakan</label>
                        <input type="number" min="1" max="2" name="r1010c4" id="r1010c4"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-[4rem] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            required="">
                    </div>
                    <div class="">
                        <label for="r1010c5"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Lainnya</label>
                        <input type="number" min="1" max="2" name="r1010c5" id="r1010c5"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-[4rem] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            required="">
                    </div>
                </div>
            </div>
        </div>
        {{-- <div>
            <label for="1011a" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">1011a</label>
            <input type="number" min="1" max="2" name="r1011a" id="1011a"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-[4rem] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
        </div>
        <div>
            <label for="1011b" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">1011b</label>
            <input type="number" min="1" max="2" name="r1011b" id="1011b"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-[4rem] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
        </div> --}}

    </div>

    <div class="sm:max-md:grid justify-between md:flex grid-cols-1 gap-4 md:grid-cols-2 mt-4">
        <div class="mb-4">

            <button type="submit" name="lahan-generate" id="lahan-generate"
                class="text-white inline-flex items-center bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                Simpan Pengelola
                <svg id="pengelola-icon" aria-hidden="true" class="w-5 h-5 ml-2 -mr-1" fill="currentColor"
                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
                <svg id="pengelola-loader" aria-hidden="true"
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

    </div>
</form>

<div id="form-pengelola-loading" class="usaha-loading hidden flex items-center justify-center flex-col">
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
<hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
<h5 class="text-xl text-center font-bold dark:text-white my-4"> Daftar Lahan </h5>
<hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
<div class="mt-4">
    <div
        class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
        <button
            onclick="tambahUsaha('lahan-body','hapusRow','lahan',{r310:document.querySelectorAll('#lahan-body tr').length+1})"
            type="button"
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
                <svg id="lahan-icon" aria-hidden="true" class="w-5 h-5 ml-2 -mr-1" fill="currentColor"
                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" />
                </svg>
                <svg id="lahan-loader" aria-hidden="true"
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
                    <th scope="col" class="id px-4 py-3 text-center">id</th>
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
            <tbody id="lahan-body" class="hidden">

            </tbody>
            </form>

        </table>
    </div>
    <div id="lahan-empty" class="">
        <div class="z-50 relative flex flex-col justify-center items-center">
            <img class="w-52" src="{{ 'images/Mesa de trabajo Cabemoane.png' }}" alt="" />
        </div>
        <p class="text-center font-semibold text-gray-400 dark:text-gray-500 ">Data tidak ditemukan
        </p>
    </div>
    <div id="lahan-loading" class="usaha-loading hidden flex items-center justify-center flex-col">
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
            <span id="lahan-showing" class="font-semibold text-gray-900 dark:text-white">?</span>
            of
            <span id="lahan-total" class="font-semibold text-gray-900 dark:text-white">?</span>
        </span>
        <ul id="lahan-pagination" class="inline-flex items-stretch -space-x-px">

        </ul>
    </nav>
</div>
