<div id="add-ruta-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-7xl max-h-full">
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
                        <div>
                            <label for="idsls" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ID SLS</label>
                            <input type="number" min="1" name="idsls" id="idsls" class="w-[4rem] text-right bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="001" required="">
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
                                    <table id="pengelola-tabel" class="relative overflow-x-auto shadow-md sm:rounded-lg text-sm text-left text-gray-500 dark:text-gray-400 mt-4">
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
                                            <tr>
                                                <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white text-right">1</th>
                                                <td class="r302 px-4 py-3 text-left">NULL</td>
                                                <td class="r303 px-4 py-3 text-right">NULL</td>
                                                <td class="r307 px-4 py-3 text-right">NULL</td>
                                                <td class="r309 px-4 py-3 text-right">NULL</td>
                                                <td class="px-4 py-3 flex items-center justify-end">
                                                    <a href="#" class="edit-pengelola block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                                                    <a href="#" class="hapus-pengelola block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete</a>
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
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="lahan" role="tabpanel" aria-labelledby="settings-tab" disabled>
                    <form action="#">
                    <div class="grid grid-rows-3 gap-4 md:grid-cols-2">
                      
                        <input type="text" name="csrf-pengelola" id="csrf-pengelola" value="{{csrf_token()}}" class="hidden">
                        <div>
                            <label for="id_rt" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">id_rt</label>
                            <input type="number" name="id_rt" id="id_rt" class="w-[3rem] bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"  disabled>
                        </div>
                        <div>
                            <label for="r301" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">R301</label>
                            <input type="number" name="r301" id="r301" class="w-[3rem] bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"  disabled>
                        </div>
                        <div>
                            <label for="r302" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">R302</label>
                            <input type="text" name="r302" id="r302" class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" >
                        </div>
                        <div>
                            <label for="r303" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">R303</label>
                            <input type="text" maxlength="16" name="r303" id="r303" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-[18rem] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"  required="">
                        </div>
                        <div>
                            <label for="r307" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">R307</label>
                            <input type="number" min="1" max="4" name="r307" id="r307" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-[3rem] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"  required="">
                        </div>
                        <div>
                            <label for="r309" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">R309</label>
                            <input type="number" min="0" name="r309" id="r309" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-[4rem] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"  required="">
                        </div>
                    </div>

                    <div class="sm:max-md:grid justify-between md:flex grid-cols-1 gap-4 md:grid-cols-2 mt-4">
                    <div class="mb-4">
                        
                    <button type="submit" name="lahan-generate" id="lahan-generate" class="text-white inline-flex items-center bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">                       
                        Generate Lahan
                        <svg aria-hidden="true" class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>
                <div class="mb-4">
                    <form>
                        @csrf
                    <button type="button" name="lahan-submit" id="lahan-submit" class="text-white inline-flex items-center bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">                       
                        Simpan Lahan
                        <svg aria-hidden="true" class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" /></svg>
                    </button>
                </div>
                    </div>
                </form>
                
                <div class="overflow-x-auto mt-4">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
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
                </div>
                

            </div>
            
           
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

      $("#r303").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
        if(e.which>57 || e.which<48){
            e.preventDefault();
            }
        });
        
        $(document).on('click', '.edit-pengelola',function() {
                        var r301 = $(this).closest('tr').find('th').text();
                        var r302 = $(this).closest('tr').find('.r302').text();
                        var r303 = $(this).closest('tr').find('.r303').text();
                        var r307 = $(this).closest('tr').find('.r307').text();
                        var r309 = $(this).closest('tr').find('.r309').text();
                        
                        $('#r301').val(r301);
                        $('#r302').val(r302);
                        $('#r303').val(r303);
                        $('#r307').val(r307);
                        $('#r309').val(r309);
                        // open tabs
                        $('#lahan-tab').prop('disabled', false);
                        $('#lahan-tab').click();
                        $('#lahan-tab').prop('disabled', true);
                        
        });

    $('#lahan-tab').prop('disabled', true);

    $('#lahan-generate').click((e)=>{
        
        e.preventDefault();
        
        const r301 = document.getElementById("r301").value;
        const r302 = document.getElementById("r302").value;
        const r303 = document.getElementById("r303").value;
        const r307 = document.getElementById("r307").value;
        const r309 = document.getElementById("r309").value;
        
        // cek validasi 

        // assign ke tab pengelola

        // define row
        const row = $('#pengelola-body tr').eq(Number(r301)-1);
        
        row.find('.r302').html(r302)
        row.find('.r303').html(r303)
        row.find('.r307').html(r307)
        row.find('.r309').html(r309)
                
        // let token = document.getElementsByName('_token')[0].value;

        const uup = {
            r301,r302,r303,r307,r309
        }
        uup['_token'] = $('#csrf-pengelola').val();
        uup['id_rt'] = $('#id_rt').val();
        // console.log(uup);

        $.ajax({
            url: '/simpanUup',
            type: 'POST',
            dataType: 'json',
            data:uup,
            success: function(data){
            console.log(data);
            }
        })

        if(r309) {

            const generateRow = (namaVar)=> `<td scope="row" class="px-4 py-3"><input type="text"  name="${namaVar}"  class="${namaVar} only_num w-[4rem] bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" ></td>`;
            const blank_lahan  = `  <tr class="border-b dark:border-gray-700">
                ${generateRow("r310")}
                ${generateRow("r311")}
                ${generateRow("r312")}
                ${generateRow("r313")}
                ${generateRow("r314")}
                ${generateRow("r315")}
                ${generateRow("r316")}
                ${generateRow("r317")}
                ${generateRow("r318")}
                ${generateRow("r319")}
                ${generateRow("r320")}
                ${generateRow("r321")}
                ${generateRow("r322")}
                ${generateRow("r323")}
                ${generateRow("r324_prov")}
                ${generateRow("r324_kabkot")}
                ${generateRow("r324_kec")}
                ${generateRow("r324_desa")}
                </tr>`;
            $('#lahan-body').html("");
            for(let i = 1; i <=Number(r309); i ++){
                $('#lahan-body').html($('#lahan-body').html()+blank_lahan);
            }
            $(".only_num").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
        if(e.which>57 || e.which<48){
            e.preventDefault();
            }
        });
        } 
        
    });

    $('#lahan-submit').click((e)=>{
        e.preventDefault();
        // ambil data dari form input
        let data = {
            data: [],
            _token: document.getElementsByName('_token')[0].value   
        };
        for (let i = 0; i < $('#lahan-body tr').length; i++) {
            let data_i = {
            id_uup: $('#r301').val(),
            r310 :  $('#lahan-body tr').eq(i).find('.r310').val(),
             r311 :  $('#lahan-body tr').eq(i).find('.r311').val(),
             r312 :  $('#lahan-body tr').eq(i).find('.r312').val(),
             r313 :  $('#lahan-body tr').eq(i).find('.r313').val(),
             r314 :  $('#lahan-body tr').eq(i).find('.r314').val(),
             r315 :  $('#lahan-body tr').eq(i).find('.r315').val(),
             r316 :  $('#lahan-body tr').eq(i).find('.r316').val(),
             r317 :  $('#lahan-body tr').eq(i).find('.r317').val(),
             r318 :  $('#lahan-body tr').eq(i).find('.r318').val(),
             r319 :  $('#lahan-body tr').eq(i).find('.r319').val(),
             r320 :  $('#lahan-body tr').eq(i).find('.r320').val(),
             r321 :  $('#lahan-body tr').eq(i).find('.r321').val(),
             r322 :  $('#lahan-body tr').eq(i).find('.r322').val(),
             r323 :  $('#lahan-body tr').eq(i).find('.r323').val(),
             r324_prov :  $('#lahan-body tr').eq(i).find('.r324_prov').val(),
             r324_kabkot :  $('#lahan-body tr').eq(i).find('.r324_kabkot').val(),
             r324_kec :  $('#lahan-body tr').eq(i).find('.r324_kec').val(),
             r324_desa :  $('#lahan-body tr').eq(i).find('.r324_desa').val(),
            }

            data.data.push(data_i);
            
        }

        // console.log(data);
        // cek validasi

        // kirim ke server
        $.ajax({
                        url: '/simpanPengelola',
                        type: 'POST',
                        dataType: 'json',
                        data:data,
                        success: function(data){
                           console.log(data);
                        }
                    })


    });

    // fungsi simpan ruta dan generate pengelola
     document.getElementById("halaman-1-next").addEventListener("click", function(){
            // ambil data dari dom

            const r107 = document.getElementById("r107").value;
            const r108 = document.getElementById("r108").value;
            const r109 = document.getElementById("r109").value;
            const r201u = document.getElementById("r201u").value;

            const tabel = document.getElementById("pengelola-body");
            const id_sls = document.getElementById("idsls").value;
            let token = document.getElementsByName('_token')[0].value;

           
            // asign ke json
            const ruta = {
                idsls:id_sls,
                nomor_bangunan: r107,
                nurtup: r108,
                nama_krt:r109,
                jumlah_uup:r201u,
                _token: token

            };
            
            // input ke ruta 
            $.ajax({
                        url: '/simpanRuta',
                        type: 'POST',
                        dataType: 'json',
                        data:ruta,
                        success: function(data){
                           
                            $('#id_rt').val(data.id_rt);
                            console.log(data);
                        }
                    })

            // cek jumlah pengelola
            
            tabel.innerHTML ="";
            if(Number(r201u)>0) {
                console.log("masuk");
                // generate pengelola
                for(let i=1;i<=Number(r201u);i++){
                    const {r302,r303,r307,r309}= {
                        r302:"NULL",
                        r303:"NULL",
                        r307:NaN,
                        r309:NaN
                    }
                    const row_blank =  `<tr class="pengelola-row border-b dark:border-gray-700">
                                                <th scope="row" class="r301 px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white text-right">${i}</th>
                                                <td class="r302 px-4 py-3 text-left">${r302}</td>
                                                <td class="r303 px-4 py-3 text-right">${r303}</td>
                                                <td class="r307 px-4 py-3 text-right">${r307}</td>
                                                <td class="r309 px-4 py-3 text-right">${r309}</td>
                                                <td class="px-4 py-3 flex items-center justify-end">
                                                    <a href="#" class="edit-pengelola block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" >Edit</a>
                                                    <a href="#" class="delete-pengelola block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete</a>
                                                </td>
                                            </tr>`;
                   
                    tabel.innerHTML = tabel.innerHTML + row_blank;
                    // create ajax request in jquery

                    
                                        
                    // $('.edit-pengelola').click((e)=>{
                    //     let r301 = $(this).closest('tr');
                    //     let cell = r301.find('th').text();
                    //     console.log(cell);
                    //     $('#r301').val(r301);
                    // });
                    $(document).on('click', '.edit-pengelola', function() {
                        var r301 = $(this).closest('tr').find('th').text();
                        $('#r301').val(r301);
                        // open tabs
                        $('#lahan-tab').prop('disabled', false);
                        $('#lahan-tab').click();
                        $('#lahan-tab').prop('disabled', true);
                        
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