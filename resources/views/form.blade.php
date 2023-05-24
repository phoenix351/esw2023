@extends('layouts.tail')

@section('content')
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-4xl lg:py-16">
            <form action="#">
                <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">I. KETERANGAN TEMPAT</h2>

                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                    <div>
                        <label for="provinsi"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Provinsi</label>
                        <select id="provinsi"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="71">Sulawesi Utara</option>
                        </select>
                    </div>


                    <div>
                        <label for="id_kab"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kabupaten/Kota</label>
                        <select data-te-select-init data-te-select-clear-button="true" data-te-select-filter="true"
                            id="id_kab" name="id_kab"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            required>
                            <option value="">-- Pilih Kabupaten/Kota --</option>

                            @foreach ($wilayah as $wil)
                                <option value={{ $wil->id_kab }}>{{ $wil->nama_kab }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="id_kec"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kecamatan</label>
                        <select data-te-select-placeholder="Pilih Kecamatan" data-te-select-clear-button="true"
                            data-te-select-init data-te-select-filter="true" name="id_kec" id="id_kec"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            required>
                        </select>
                    </div>
                    <div>
                        <label for="id_desa"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Desa/Kelurahan</label>
                        <select data-te-select-placeholder="Pilih Desa/Kelurahan" data-te-select-clear-button="true"
                            data-te-select-init data-te-select-filter="true" name="id_desa" id="id_desa"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            required>
                        </select>
                    </div>
                    <div>
                        <label for="id_sls"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">SLS</label>
                        <select id="id_sls" name="id_sls"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            required>
                            <option selected disabled>Pilih SLS</option>
                        </select>
                    </div>

                </div>
                <button type="submit" id="muat-data-sls-btn"
                    class="mt-4 flex items-center justify-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                    Muat Data
                    <svg aria-hidden="true" class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd"
                            d="M10.5 3.75a6.75 6.75 0 100 13.5 6.75 6.75 0 000-13.5zM2.25 10.5a8.25 8.25 0 1114.59 5.28l4.69 4.69a.75.75 0 11-1.06 1.06l-4.69-4.69A8.25 8.25 0 012.25 10.5z"
                            clip-rule="evenodd" />
                    </svg>
                </button>

            </form>
            {{-- Table  --}}
            <section class="bg-gray-50 dark:bg-gray-900 mt-5">
                <div class="mx-auto max-w-screen-xl">

                    <!-- Start coding here -->
                    <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
                        <div
                            class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">

                            <div
                                class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                                <button onclick="openModal('#add-ruta-modal','Tambah Ruta')" type="button"
                                    class="flex items-center justify-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                                    <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path clip-rule="evenodd" fill-rule="evenodd"
                                            d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                                    </svg>
                                    Tambah Ruta UP
                                </button>
                            </div>
                        </div>

                        <div class="overflow-x-auto">
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead
                                    class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
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

                        <nav class="flex flex-col md:flex-row justify-between items-start md:items-center space-y-3 md:space-y-0 p-4"
                            aria-label="Table navigation">
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

    @include('modals.ruta')
    @include('modals.edit_ruta')
    @include('modals.delete_ruta')
    @include('modals.pengelola-hapus')
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            // Initialization for ES Users

            $('#edit-ruta-modal').hide();
            $('#delete-ruta-modal').hide();
            $('#hapus-pengelola-modal').hide();
            const modalBackDrop =
                `<div id="modal-backdrop"><div modal-backdrop class="bg-gray-900 bg-opacity-50 dark:bg-opacity-80 fixed inset-0 z-40"></div><div modal-backdrop class="bg-gray-900 bg-opacity-50 dark:bg-opacity-80 fixed inset-0 z-40"></div></div>`;
            $('body').append(modalBackDrop);
            $("#modal-backdrop").hide();

            $('#id_kab').change(function() {
                var id_kab = $(this).val()
                if (id_kab) {
                    $.ajax({
                        url: '/getKec/' + id_kab,
                        type: 'GET',
                        dataType: 'json',
                        success: function(data) {
                            $('#id_kec').empty()
                            $('#id_kec').append(
                                '<option value="">-- Pilih Kecamatan --</option>')
                            $.each(data, function(key, value) {
                                $('#id_kec').append('<option value="' + value + '">' +
                                    key + '</option>')
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
                if (id_kec) {
                    $.ajax({
                        url: '/getDesa/' + id_kec,
                        type: 'GET',
                        dataType: 'json',
                        success: function(data) {
                            $('#id_desa').empty()
                            $('#id_desa').append('<option value="">-- Pilih Desa --</option>')
                            $.each(data, function(key, value) {
                                $('#id_desa').append('<option value="' + value + '">' +
                                    key + '</option>')
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
                if (id_desa) {
                    $.ajax({
                        url: '/getSls/' + id_desa,
                        type: 'GET',
                        dataType: 'json',
                        success: function(data) {
                            $('#id_sls').empty()
                            $('#id_sls').append('<option value="">-- Pilih SLS --</option>')

                            $.each(data, function(indeks, data) {
                                console.log(data.id);
                                $('#id_sls').append('<option value="' + data.id + '">' +
                                    data.nama_sls + ' - [' + data.id_sls6 +
                                    ']</option>')
                            })
                        }
                    })
                } else {
                    $('#id_sls').empty()
                    $('#id_sls').append('<option value="">-- Pilih SLS --</option>')
                }
            })
            // fungsi muat data
            $("#muat-data-sls-btn").click((e) => {
                e.preventDefault();
                const input_idsls = $("#id_sls").val();
                $("#idsls").val(input_idsls);
                let url = `/getRt/${input_idsls}`;
                loadRt(url);

            });
            $('#add-ruta-modal').hide();
            $("#r303").keypress(function(e) {
                //if the letter is not digit then display error and don't type anything
                if (e.which > 57 || e.which < 48) {
                    e.preventDefault();
                }
            });

            $(document).on('click', '.edit-pengelola', function() {
                let id = $(this).closest('tr').find('.id').text();
                let r301 = $(this).closest('tr').find('.r301').text();
                let r302 = $(this).closest('tr').find('.r302').text();
                let r303 = $(this).closest('tr').find('.r303').text();
                let r307 = $(this).closest('tr').find('.r307').text();
                let r309 = $(this).closest('tr').find('.r309').text();

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

            $('#lahan-generate').click((e) => {

                e.preventDefault();

                const id = document.getElementById("id-uup").value;
                const r301 = document.getElementById("r301").value;
                const r302 = document.getElementById("r302").value;
                const r303 = document.getElementById("r303").value;
                const r307 = document.getElementById("r307").value;
                const r309 = document.getElementById("r309").value;

                // cek validasi 

                // assign ke tab pengelola

                // define row
                const indeks = Number(localStorage.getItem('pengelola-indeks'));
                const row = $('#pengelola-body tr').eq(indeks);

                row.find('.id').html(id);
                row.find('.301').html(r301);
                row.find('.r302').html(r302);
                row.find('.r303').html(r303);
                row.find('.r307').html(r307);
                row.find('.r309').html(r309);

                // let token = document.getElementsByName('_token')[0].value;

                const uup = {
                    id,
                    r301,
                    r302,
                    r303,
                    r307,
                    r309
                }
                uup['_token'] = $('#csrf-pengelola').val();
                uup['id_rt'] = $('#id_rt').val();
                // console.log(uup);

                $.ajax({
                    url: '/simpanUup',
                    type: 'POST',
                    dataType: 'json',
                    data: uup,
                    success: function(data) {
                        console.log(data);
                    }
                })

                if (r309) {

                    const generateRow = (namaVar) =>
                        `<td scope="row" class="px-4 py-3"><input type="text"  name="${namaVar}"  class="${namaVar} only_num w-[4rem] bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" ></td>`;
                    const blank_lahan = `  <tr class="border-b dark:border-gray-700">
                ${generateRow("id_lahan")}
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
                    for (let i = 1; i <= Number(r309); i++) {
                        $('#lahan-body').html($('#lahan-body').html() + blank_lahan);
                    }
                    $(".only_num").keypress(function(e) {
                        //if the letter is not digit then display error and don't type anything
                        if (e.which > 57 || e.which < 48) {
                            e.preventDefault();
                        }
                    });
                }

            });

            $('#lahan-submit').click((e) => {
                e.preventDefault();
                // ambil data dari form input
                let data = {
                    data: [],
                    _token: document.getElementsByName('_token')[0].value
                };
                for (let i = 0; i < $('#lahan-body tr').length; i++) {
                    let data_i = {
                        id_uup: $('#r301').val(), // belum,

                        id: $('#lahan-body tr').eq(i).find('.id_lahan').val() ? $('#lahan-body tr').eq(
                            i).find('.id_lahan').val() : null,
                        r310: $('#lahan-body tr').eq(i).find('.r310').val(),
                        r311: $('#lahan-body tr').eq(i).find('.r311').val(),
                        r312: $('#lahan-body tr').eq(i).find('.r312').val(),
                        r313: $('#lahan-body tr').eq(i).find('.r313').val(),
                        r314: $('#lahan-body tr').eq(i).find('.r314').val(),
                        r315: $('#lahan-body tr').eq(i).find('.r315').val(),
                        r316: $('#lahan-body tr').eq(i).find('.r316').val(),
                        r317: $('#lahan-body tr').eq(i).find('.r317').val(),
                        r318: $('#lahan-body tr').eq(i).find('.r318').val(),
                        r319: $('#lahan-body tr').eq(i).find('.r319').val(),
                        r320: $('#lahan-body tr').eq(i).find('.r320').val(),
                        r321: $('#lahan-body tr').eq(i).find('.r321').val(),
                        r322: $('#lahan-body tr').eq(i).find('.r322').val(),
                        r323: $('#lahan-body tr').eq(i).find('.r323').val(),
                        r324_prov: $('#lahan-body tr').eq(i).find('.r324_prov').val(),
                        r324_kabkot: $('#lahan-body tr').eq(i).find('.r324_kabkot').val(),
                        r324_kec: $('#lahan-body tr').eq(i).find('.r324_kec').val(),
                        r324_desa: $('#lahan-body tr').eq(i).find('.r324_desa').val(),
                    }

                    data.data.push(data_i);

                }

                console.log(data);
                // cek validasi

                // kirim ke server
                $.ajax({
                    url: '/simpanPengelola',
                    type: 'POST',
                    dataType: 'json',
                    data: data,
                    success: function(data) {
                        $('#lahan-body tr').each(() => {

                        })
                    }
                })


            });

            // fungsi simpan ruta dan generate pengelola
            document.getElementById("halaman-1-next").addEventListener("click", function() {
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
                    idsls: id_sls,
                    nomor_bangunan: r107,
                    nurtup: r108,
                    nama_krt: r109,
                    jumlah_uup: r201u,
                    _token: token

                };

                // input ke ruta 
                $.ajax({
                    url: '/simpanRuta',
                    type: 'POST',
                    dataType: 'json',
                    data: ruta,
                    success: function(data) {

                        $('#id_rt').val(data.id_rt);
                        console.log(data);
                    }
                })

                // cek jumlah pengelola

                tabel.innerHTML = "";
                if (Number(r201u) > 0) {
                    console.log("masuk");
                    // generate pengelola
                    for (let i = 1; i <= Number(r201u); i++) {
                        const {
                            r302,
                            r303,
                            r307,
                            r309
                        } = {
                            r302: "NULL",
                            r303: "NULL",
                            r307: NaN,
                            r309: NaN
                        }
                        const row_blank = `<tr class="pengelola-row border-b dark:border-gray-700">
                                                <th scope="row" class="r301 px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white text-right">${i}</th>
                                                <td class="r302 px-4 py-3 text-left">${r302}</td>
                                                <td class="r303 px-4 py-3 text-right">${r303}</td>
                                                <td class="r307 px-4 py-3 text-right">${r307}</td>
                                                <td class="r309 px-4 py-3 text-right">${r309}</td>
                                                <td class="px-4 py-3 flex items-center justify-end">
                                                    <a href="#" value=${i} class="edit-pengelola block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" >Edit</a>
                                                    <a href="#" value=${i} class="delete-pengelola block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete</a>
                                                </td>
                                            </tr>`;

                        tabel.innerHTML = tabel.innerHTML + row_blank;
                        // create ajax request in jquery

                        $(document).on('click', '.edit-pengelola', editPengelola)
                    }
                    document.getElementById("pengelola-tab").click();

                }
                return 1;
            });
        });
    </script>
@endsection
