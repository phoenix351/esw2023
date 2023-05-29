<div class="flex justify-end space-x-4 px-4">
    <label for="usaha-r301"
        class="flex items-center text-sm font-medium text-gray-900 dark:text-white content-center">Nomor
        Unit
        Usaha</label>
    <input type="number" name="id-uup" id="id-uup" onkeypress="return false;"
        class="hidden bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-[4rem] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
    <input type="text" name="usaha-r301" id="usaha-r301" onkeypress="return false;"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-[4rem] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
</div>
<div class="mb-4 border-b border-gray-200 dark:border-gray-700">
    <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab2" data-tabs-toggle="#myTab2Content"
        role="tablist">
        <li class="mr-2" role="presentation">
            <button class="inline-block p-4 border-b-2 rounded-t-lg" id="ruta-tab" data-tabs-target="#pertanian"
                type="button" role="tab" aria-controls="pertanian" aria-selected="false">Pertanian</button>
        </li>
        <li class="mr-2" role="presentation">
            <button
                class="inline-block p-4 border-b-2 rounded-t-lg dark:border-transparent text-gray-500 hover:text-gray-600 dark:text-gray-400 border-gray-100 hover:border-gray-300 dark:border-gray-700 dark:hover:text-gray-300"
                id="peternakan-tab" data-tabs-target="#peternakan" type="button" role="tab"
                aria-controls="peternakan" aria-selected="false">Peternakan</button>
        </li>


    </ul>
</div>
<div id="myTab2Content">
    {{-- Identitas --}}

    {{-- Tab pertanian --}}
    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="pertanian" role="tabpanel"
        aria-labelledby="pertanian-tab">
        @include('modals.ruta-tab-lahan')
    </div>
    {{-- Tab peternakan --}}
    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="peternakan" role="tabpanel"
        aria-labelledby="peternakan-tab">
        @include('modals.ruta-tab-peternakan')
    </div>


</div>
