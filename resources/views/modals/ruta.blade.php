<div id="add-ruta-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
    class="fixed top-0 left-0 right-0 z-50 w-screen p-4 overflow-x-hidden md:inset-0 h-[calc(100%-1rem)] justify-center items-center flex">
    <div class="relative w-full max-w-7xl max-h-full">
        <!-- Modal content -->
        <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
            <!-- Modal header -->
            <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                <h3 id="modal-title" class="modal-title text-lg font-semibold text-gray-900 dark:text-white"></h3>
                <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    onclick="$('#add-ruta-modal').hide();$('#modal-backdrop').hide();">
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

            <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab"
                    data-tabs-toggle="#myTabContent" role="tablist">
                    <li class="mr-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 rounded-t-lg" id="ruta-tab" data-tabs-target="#ruta"
                            type="button" role="tab" aria-controls="ruta" aria-selected="false">Ket. Ruta</button>
                    </li>
                    <li class="mr-2" role="presentation">
                        <button
                            class="inline-block p-4 border-b-2 rounded-t-lg dark:border-transparent text-gray-500 hover:text-gray-600 dark:text-gray-400 border-gray-100 hover:border-gray-300 dark:border-gray-700 dark:hover:text-gray-300"
                            id="pengelola-tab" data-tabs-target="#pengelola" type="button" role="tab"
                            aria-controls="pengelola" aria-selected="false">Pengelola</button>
                    </li>
                    <li class="mr-2" role="presentation">
                        <button
                            class="inline-block p-4 border-b-2 rounded-t-lg dark:border-transparent text-gray-500 hover:text-gray-600 dark:text-gray-400 border-gray-100 hover:border-gray-300 dark:border-gray-700 dark:hover:text-gray-300"
                            id="usaha-tab" data-tabs-target="#usaha" type="button" role="tab" aria-controls="usaha"
                            aria-selected="false">Usaha</button>


                </ul>
            </div>
            <div id="myTabContent">
                {{-- Tab Ruta --}}
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="ruta" role="tabpanel"
                    aria-labelledby="ruta-tab">
                    @include('modals.ruta-tab-ruta')
                </div>
                {{-- Tab Pengelola --}}
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="pengelola" role="tabpanel"
                    aria-labelledby="pengelola-tab">
                    @include('modals.ruta-tab-pengelola')
                </div>

                {{-- Tab Usaha --}}
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="usaha" role="tabpanel"
                    aria-labelledby="usaha-tab" disabled>
                    @include('modals.ruta-tab-usaha')


                </div>
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="peternakan" role="tabpanel"
                    aria-labelledby="peternakan-tab" disabled>

                    @include('modals.ruta-tab-peternakan')
                </div>


            </div>


        </div>
    </div>
</div>
