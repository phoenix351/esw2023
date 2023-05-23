@extends('layouts.tail')

@section('content')
 <section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-4xl lg:py-16">
        <form action="#">
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">I. KETERANGAN TEMPAT</h2>

            <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                <div>
                    <label for="provinsi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Provinsi</label>
                    <select id="provinsi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option value="71">Sulawesi Utara</option>
                    </select>
                </div> 
                
               
                <div>
                    <label for="id_kab" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kabupaten/Kota</label>
                    <select data-te-select-init data-te-select-clear-button="true"  data-te-select-filter="true" id="id_kab" name="id_kab" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required>
                        <option value="">-- Pilih Kabupaten/Kota --</option>

                        @foreach($wilayah as $wil)
                        <option value={{$wil->id_kab}}>{{$wil->nama_kab}}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="id_kec" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kecamatan</label>
                    <select data-te-select-placeholder="Pilih Kecamatan" data-te-select-clear-button="true" data-te-select-init data-te-select-filter="true" name="id_kec" id="id_kec" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required>
                    </select>
                </div>
                <div>
                    <label for="id_desa" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Desa/Kelurahan</label>
                    <select data-te-select-placeholder="Pilih Desa/Kelurahan" data-te-select-clear-button="true" data-te-select-init data-te-select-filter="true" name="id_desa" id="id_desa" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required>    
                    </select>
                </div>
                <div>
                    <label for="id_sls" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">SLS</label>
                    <select id="id_sls" name="id_sls" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required>
                        <option selected disabled>Pilih SLS</option>
                    </select>
                </div>
                
            </div>
            <button type="submit" id="muat-data-sls-btn" class="mt-4 flex items-center justify-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
               Muat Data
               <svg aria-hidden="true" class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                <path fill-rule="evenodd" d="M10.5 3.75a6.75 6.75 0 100 13.5 6.75 6.75 0 000-13.5zM2.25 10.5a8.25 8.25 0 1114.59 5.28l4.69 4.69a.75.75 0 11-1.06 1.06l-4.69-4.69A8.25 8.25 0 012.25 10.5z" clip-rule="evenodd" />
              </svg>
            </button>
          
        </form>
            {{-- Table  --}}
            <section class="bg-gray-50 dark:bg-gray-900 mt-5">
                <div class="mx-auto max-w-screen-xl">
                  
                    <!-- Start coding here -->
                    <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
                            <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                               
                                <div class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                                    <button onclick="openModal('#add-ruta-modal','Tambah Ruta')" type="button" class="flex items-center justify-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                                        <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path clip-rule="evenodd" fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                                        </svg>
                                        Tambah Ruta UP
                                    </button>
                                </div>
                            </div>
                    
                        <div class="overflow-x-auto">
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="px-4 py-3 text-right">Nomor URTUP</th>
                                        <th scope="col" class="px-4 py-3 text-right">Nomor Bangunan</th>
                                        <th scope="col" class="px-4 py-3">Nama Kepala Keluarga</th>
                                        <th scope="col" class="px-4 py-3 text-right">Jumlah ART Pengelola</th>
                                        <th scope="col" class="px-4 py-3">
                                            <span class="sr-only">Actions</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody id="rt-body">
                                    
                                </tbody>
                            </table>
                        </div>
                      
                        <nav class="flex flex-col md:flex-row justify-between items-start md:items-center space-y-3 md:space-y-0 p-4" aria-label="Table navigation">
                            <span class="text-sm font-normal text-gray-500 dark:text-gray-400">
                                Showing
                                <span id="showing" class="font-semibold text-gray-900 dark:text-white">?</span>
                                of
                                <span id="total" class="font-semibold text-gray-900 dark:text-white">?</span>
                            </span>
                            <ul id="pagination" class="inline-flex items-stretch -space-x-px">
                               
                            </ul>
                        </nav>
                    </div>
                </div>
            </section>
    </div>
  </section>
  {{-- <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script> --}}

@include('modals.add_ruta')
@include('modals.edit_ruta')
@include('modals.delete_ruta')
<script>
    document.addEventListener("DOMContentLoaded", () => {
        // Initialization for ES Users

        $('#edit-ruta-modal').hide();
        $('#delete-ruta-modal').hide();

        $('#id_kab').change(function() {
                var id_kab = $(this).val()
                if (id_kab){
                    $.ajax({
                        url: '/getKec/' + id_kab,
                        type: 'GET',
                        dataType: 'json',
                        success: function(data){
                            $('#id_kec').empty()
                            $('#id_kec').append('<option value="">-- Pilih Kecamatan --</option>')
                            $.each(data, function(key, value){
                                $('#id_kec').append('<option value="' + value + '">' + key + '</option>')
                            })
                        }
                    })
                } else {
                    $('#id_kec').empty()
                    $('#id_kec').append('<option value="">-- Pilih Kecamatan --</option>')
                    $('#id_desa').empty()
                    $('#id_desa').append('<option value="">-- Pilih Desa --</option>')
                    $('#id_sls').empty()
                    $('#id_sls').append('<option value="">-- Pilih SLS --</option>')
                }
            })
            
            $('#id_kec').change(function() {
                var id_kec = $(this).val()
                if (id_kec){
                    $.ajax({
                        url: '/getDesa/' + id_kec,
                        type: 'GET',
                        dataType: 'json',
                        success: function(data){
                            $('#id_desa').empty()
                            $('#id_desa').append('<option value="">-- Pilih Desa --</option>')
                            $.each(data, function(key, value){
                                $('#id_desa').append('<option value="' + value + '">' + key + '</option>')
                            })
                        }
                    })
                } else {
                    $('#id_desa').empty()
                    $('#id_desa').append('<option value="">-- Pilih Desa --</option>')
                    $('#id_sls').empty()
                    $('#id_sls').append('<option value="">-- Pilih SLS --</option>')
                }
            })
            
            $('#id_desa').change(function() {
                var id_desa = $(this).val()
                if (id_desa){
                    $.ajax({
                        url: '/getSls/' + id_desa,
                        type: 'GET',
                        dataType: 'json',
                        success: function(data){
                            $('#id_sls').empty()
                            $('#id_sls').append('<option value="">-- Pilih SLS --</option>')
                           
                            $.each(data, function(indeks,data){
                                console.log(data.id);
                                $('#id_sls').append('<option value="' + data.id + '">' + data.nama_sls +' - ['+ data.id_sls6 + ']</option>')
                            })
                        }
                    })
                } else {
                    $('#id_sls').empty()
                    $('#id_sls').append('<option value="">-- Pilih SLS --</option>')
                }
            })
            // fungsi muat data
            $("#muat-data-sls-btn").click((e)=>{
                e.preventDefault();
                const input_idsls = $("#id_sls").val();
                $("#idsls").val(input_idsls);
                let url = `/getRt/${input_idsls}`;
                loadRt(url);

            });
    });

    function loadRt(url){
        
                // load
                $.ajax({
                        url: url,
                        type: 'GET',
                        dataType: 'json',
                        success: function(data){
                            $('#rt-body').html('');
                            const links = data.links;
                            $('#pagination').html('');
                            for( let i=0; i<links.length; i++){
                                let link = generateLink(links[i]);
                                let currPageLinks = $('#pagination').html();

                                $('#pagination').html(currPageLinks+link);
                            }
                            
                            $('#showing').html(data.from+' - '+data.to);
                            $('#total').html(data.total)

                            // const num_pages = data.data.length%10>0 ? data.length 
                            
                            $.each(data.data, function(indeks,rt){
                                let content_html = '<tr class="hover:bg-gray-100 dark:hover:bg-gray-600">';
                                let aksiButton = `<td class="px-4 py-3 flex items-center justify-end">
                                                    <button type="button" onclick="editRt(${indeks})" class="edit-rt block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</button>
                                                    <button onclick="deleteRt(${indeks})" class="hapus-rt block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete</button>
                                                </td>`;
                                    // console.log({indeks});
                                content_html = content_html + varGenerator(rt.id,'id',true);
                                content_html = content_html + varGenerator(rt.nomor_bangunan,'nomor_bangunan',true);
                                content_html = content_html + varGenerator(rt.nurtup,'nurtup',true);
                                content_html = content_html + varGenerator(rt.nama_krt,'nama_krt',false);
                                content_html = content_html + varGenerator(rt.jumlah_uup,'jumlah_uup',true);

                                content_html = content_html +aksiButton+ '</tr>';
                                $('#rt-body').append(content_html);

                                console.log({content_html});
                                
                            })
                        }
                    })
    }
    function getKec() {
        const kabkot = document.getElementById("kabkot").value;
        console.log(kabkot);

    }
    function copyValue(e){
        console.log(e.value);
        document.getElementById('email').value = e.value;
    }

    function deleteRt(element) {
        const currentRow = $('#rt-body tr').eq(Number(element));
        const data = {
            id:currentRow.find('.id').html(),
            nurtup:currentRow.find('.nurtup').html(),
            nomor_bangunan:currentRow.find('.nomor_bangunan').html(),
            nama_krt:currentRow.find('.nama_krt').html(),
            jumlah_uup:currentRow.find('.jumlah_uup').html(),
        }
        $('#delete-ruta-modal').show();
        const modalBackDrop = `<div id="modal-backdrop"><div modal-backdrop class="bg-gray-900 bg-opacity-50 dark:bg-opacity-80 fixed inset-0 z-40"></div><div modal-backdrop class="bg-gray-900 bg-opacity-50 dark:bg-opacity-80 fixed inset-0 z-40"></div></div>`;
        $('body').append(modalBackDrop);
        // $('body').append(modalBackDrop);
    }
    function editRt(element) {
        const currentRow = $('#rt-body tr').eq(Number(element));
        const data = {
            id:currentRow.find('.id').html(),
            nurtup:currentRow.find('.nurtup').html(),
            nomor_bangunan:currentRow.find('.nomor_bangunan').html(),
            nama_krt:currentRow.find('.nama_krt').html(),
            jumlah_uup:currentRow.find('.jumlah_uup').html(),
            }
        
        $('#id_rt').val(data.id);
        $('#r107').val(data.nomor_bangunan);
        $('#r108').val(data.nurtup);
        $('#r109').val(data.nama_krt);
        $('#r201u').val(data.jumlah_uup);


        // fetch and add data pengelola
        $.ajax(
            {
                url: `/getPengelola/${data.id}`,
                type: 'GET',
                dataType: 'json',
                success: function(data){
                    $('#pengelola-body').html('');
                    
                    const links = data.links;
                    $('#pengelola-pagination').html('');
                    for( let i=0; i<links.length; i++){
                        let link = generateLink(links[i]);
                        let currPageLinks = $('#pengelola-pagination').html();
                        $('#pengelola-pagination').html(currPageLinks+link);
                        }
                    $('#pengelola-showing').html(data.from+' - '+data.to);
                    $('#pengelola-total').html(data.total)
                    // const num_pages = data.data.length%10>0 ? data.length 
                    $.each(data.data, function(indeks,rt){
                        let content_html = '<tr class="hover:bg-gray-100 dark:hover:bg-gray-600">';
                        let aksiButton = `<td class="px-4 py-3 flex items-center justify-end">
                                                    <button type="button" onclick="editPengelola(${indeks})" class="edit-pengelola block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</button>
                                                    <button onclick="deletePengelola(${indeks})" class="hapus-pengelola block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete</button>
                                                </td>`;
                        // console.log({indeks});
                        content_html = content_html + varGenerator(rt.id,'id',true);
                        content_html = content_html + varGenerator(rt.r301,'r301',true);
                        content_html = content_html + varGenerator(rt.r302,'r302',false);
                        content_html = content_html + varGenerator(rt.r303,'r303',true);
                        content_html = content_html + varGenerator(rt.r307,'r307',true);
                        content_html = content_html + varGenerator(rt.r309,'r309',true);
                        content_html = content_html +aksiButton+ '</tr>';
                        $('#pengelola-body').append(content_html);
                        console.log({content_html});
                        })
                    }})

        $('#modal-title').html('Edit Ruta');
        $('#add-ruta-modal').show();
        const modalBackDrop = `<div id="modal-backdrop"><div modal-backdrop class="bg-gray-900 bg-opacity-50 dark:bg-opacity-80 fixed inset-0 z-40"></div><div modal-backdrop class="bg-gray-900 bg-opacity-50 dark:bg-opacity-80 fixed inset-0 z-40"></div></div>`;
        $('body').append(modalBackDrop);
        // $('body').append(modalBackDrop);

    }

    function backPages(currentPages){
        return 0;
    }
    function generateLink({url,label,active}){
        return active ? 
        `<li><button onclick="loadRt('${url}')" id="page-${label}" aria-current="page" class="flex items-center justify-center text-sm z-10 py-2 px-3 leading-tight text-primary-600 bg-primary-50 border border-primary-300 hover:bg-primary-100 hover:text-primary-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">${label}</button></li>`
        :
        `<li><button onclick="loadRt('${url}')" id="page-${label}" class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">${label}</button></li>`;
    }

    function openModal(idSelector,title){
        
        if(title==='Tambah Ruta') {
            // kosongkan tabel pengelola
            $('#pengelola-body').html('');
            // kosongkan form ket ruta
            $('#r107').val('');
            $('#r108').val('');
            $('#r109').val('');
            $('#r201u').val('');
        }
        
        const modalBackDrop = `<div id="modal-backdrop"><div modal-backdrop class="bg-gray-900 bg-opacity-50 dark:bg-opacity-80 fixed inset-0 z-40"></div><div modal-backdrop class="bg-gray-900 bg-opacity-50 dark:bg-opacity-80 fixed inset-0 z-40"></div></div>`;
        $('body').append(modalBackDrop);
        
        $(idSelector).find('.modal-title').html(title);
        $(idSelector).show();
    }
    function closeModal(idSelector){
       $('#modal-backdrop').remove();
        $(idSelector).hide();
    }
    function varGenerator(nilaiVar,namaVar,isNum){
        return `<td class="${namaVar} ${namaVar=='id'?'hidden':''} px-4 py-3 text-${isNum?'right':'left'}">${nilaiVar}</td>`;
    }
 
</script>
@endsection

