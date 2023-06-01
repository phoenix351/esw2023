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
                        <select data-te-select-clear-button="true" data-te-select-init data-te-select-filter="true"
                            for="id_sls" id="id_kab" name="id_kab"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            required>
                            <option selected>-- Pilih Kabupaten/Kota --</option>

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
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">SLS</label>
                        <select data-te-select-placeholder="Pilih SLS" data-te-select-clear-button="true"
                            data-te-select-init data-te-select-filter="true" for="id_sls" id="id_sls" name="id_sls"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            required>
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
                            class="flex flex-col md:flex-row items-center justify-end space-y-3 md:space-y-0 md:space-x-4 p-4">

                            <div
                                class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                                <button
                                    onclick="if($('#idsls').val()!==''){openModal('#add-ruta-modal','Tambah Ruta');setFormValue('form-ruta',{});} else {alert('Silahkan Pilih Wilayah s.d SLS Terlebih dahulu!')}"
                                    type="button"
                                    class="flex items-center justify-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                                    <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path clip-rule="evenodd" fill-rule="evenodd"
                                            d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                                    </svg>
                                    Tambah Ruta UP
                                </button>
                                <button
                                    onclick="if($('#idsls').val()!==''){openModal('#l1-modal','Entri L1');loadL1($('#idsls').val());} else {alert('Silahkan Pilih Wilayah s.d SLS Terlebih dahulu!')}"
                                    type="button"
                                    class="flex items-center justify-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">

                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="h-3.5 w-3.5 mr-2">
                                        <path
                                            d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32L19.513 8.2z" />
                                    </svg>

                                    Entri L1
                                </button>
                            </div>
                        </div>

                        <div class="overflow-x-auto">
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead
                                    class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="id px-4 py-3 text-right">id</th>
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

                            <!-- <div class="loader z-50">Loading...</div> -->
                            <div id="ruta-empty" class="">
                                <div class="z-50 relative flex flex-col justify-center items-center">
                                    <img class="w-52" src="{{ 'images/Mesa de trabajo Cabemoane.png' }}"
                                        alt="" />
                                </div>
                                <p class="text-center font-semibold text-gray-400 dark:text-gray-500 ">Data tidak ditemukan
                                </p>
                            </div>
                            <div id="ruta-loading" class="hidden flex items-center justify-center flex-col">
                                <!-- <div class="loader z-50">Loading...</div> -->
                                <div>
                                    <!-- ... -->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        style="margin: auto; background: none; display: block; shape-rendering: auto;"
                                        width="204px" height="204px" viewBox="0 0 100 100"
                                        preserveAspectRatio="xMidYMid">
                                        <circle cx="84" cy="50" r="10" fill="#e6261f">
                                            <animate attributeName="r" repeatCount="indefinite" dur="0.5s"
                                                calcMode="spline" keyTimes="0;1" values="6;0" keySplines="0 0.5 0.5 1"
                                                begin="0s" />
                                            <animate attributeName="fill" repeatCount="indefinite" dur="2s"
                                                calcMode="discrete" keyTimes="0;0.25;0.5;0.75;1"
                                                values="#e6261f;#a3e048;#f7d038;#eb7532;#e6261f" begin="0s" />
                                        </circle>
                                        <circle cx="16" cy="50" r="10" fill="#e6261f">
                                            <animate attributeName="r" repeatCount="indefinite" dur="2s"
                                                calcMode="spline" keyTimes="0;0.25;0.5;0.75;1" values="0;0;6;6;6"
                                                keySplines="0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1"
                                                begin="0s" />
                                            <animate attributeName="cx" repeatCount="indefinite" dur="2s"
                                                calcMode="spline" keyTimes="0;0.25;0.5;0.75;1" values="16;16;16;50;84"
                                                keySplines="0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1"
                                                begin="0s" />
                                        </circle>
                                        <circle cx="50" cy="50" r="10" fill="#eb7532">
                                            <animate attributeName="r" repeatCount="indefinite" dur="2s"
                                                calcMode="spline" keyTimes="0;0.25;0.5;0.75;1" values="0;0;6;6;6"
                                                keySplines="0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1"
                                                begin="-0.5s" />
                                            <animate attributeName="cx" repeatCount="indefinite" dur="2s"
                                                calcMode="spline" keyTimes="0;0.25;0.5;0.75;1" values="16;16;16;50;84"
                                                keySplines="0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1"
                                                begin="-0.5s" />
                                        </circle>
                                        <circle cx="84" cy="50" r="10" fill="#f7d038">
                                            <animate attributeName="r" repeatCount="indefinite" dur="2s"
                                                calcMode="spline" keyTimes="0;0.25;0.5;0.75;1" values="0;0;6;6;6"
                                                keySplines="0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1"
                                                begin="-1s" />
                                            <animate attributeName="cx" repeatCount="indefinite" dur="2s"
                                                calcMode="spline" keyTimes="0;0.25;0.5;0.75;1" values="16;16;16;50;84"
                                                keySplines="0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1"
                                                begin="-1s" />
                                        </circle>
                                        <circle cx="16" cy="50" r="10" fill="#a3e048">
                                            <animate attributeName="r" repeatCount="indefinite" dur="2s"
                                                calcMode="spline" keyTimes="0;0.25;0.5;0.75;1" values="0;0;6;6;6"
                                                keySplines="0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1"
                                                begin="-1.5s" />
                                            <animate attributeName="cx" repeatCount="indefinite" dur="2s"
                                                calcMode="spline" keyTimes="0;0.25;0.5;0.75;1" values="16;16;16;50;84"
                                                keySplines="0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1"
                                                begin="-1.5s" />
                                        </circle>
                                        <!-- [ldio] generated by https://loading.io/ -->
                                    </svg>

                                </div>
                                <p class="text-center font-semibold text-gray-400 dark:text-gray-500">Memuat Data...</p>

                            </div>


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
    {{-- @include('modals.edit_ruta') --}}
    @include('modals.ruta-hapus')
    @include('modals.pengelola-hapus')
    @include('modals.lahan-hapus')
    @include('modals.ternak-hapus')
    @include('modals.l1')

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            // Initialization for ES Users
            $('#l1-submit').click((e) => {
                simpanL1(e);
            });

            // $('#edit-ruta-modal').hide();
            $('#hapus-ruta-modal').hide();
            $('#hapus-pengelola-modal').hide();
            $('#lahan-hapus-modal').hide();
            $('#ternak-hapus-modal').hide();
            // $('#rt-body').append($('#empty-container').html());
            $('#l1-modal').hide();



            const modalBackDrop =
                `<div id="modal-backdrop"><div modal-backdrop class="bg-gray-900 bg-opacity-50 dark:bg-opacity-80 fixed inset-0 z-40"></div><div modal-backdrop class="bg-gray-900 bg-opacity-50 dark:bg-opacity-80 fixed inset-0 z-40"></div></div>`;
            $('body').append(modalBackDrop);
            $("#modal-backdrop").hide();

            $('#id_kab').change(function() {
                var id_kab = $(this).val()
                if (id_kab) {
                    $.ajax({
                        url: 'getKec/' + id_kab,
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
                        url: 'getDesa/' + id_kec,
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
                        url: 'getSls/' + id_desa,
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

            // $(document).on('click', '.edit-pengelola', function() {
            //     let id = $(this).closest('tr').find('.id').text();
            //     // let r301 = $(this).closest('tr').find('.r301').text();
            //     // let r302 = $(this).closest('tr').find('.r302').text();
            //     // let r303 = $(this).closest('tr').find('.r303').text();
            //     // let r307 = $(this).closest('tr').find('.r307').text();
            //     // let r309 = $(this).closest('tr').find('.r309').text();

            //     // $('#r301').val(r301);
            //     // $('#r302').val(r302);
            //     // $('#r303').val(r303);
            //     // $('#r307').val(r307);
            //     // $('#r309').val(r309);
            //     // open tabs
            //     $('#usaha-tab').prop('disabled', false);
            //     $('#usaha-tab').click();
            //     $('#usaha-tab').prop('disabled', true);

            // });

            $('#usaha-tab').prop('disabled', true);

            $('#lahan-generate').click(simpanPengelola);

            $('#lahan-submit').click(simpanLahan);

            // fungsi simpan ruta dan generate pengelola
            document.getElementById("halaman-1-next").addEventListener("click", (e) => {
                halamanSatuNext(e)
            });
            loadRt('getRt/2');
            $('#idsls').val('2')
            setTimeout(() => {
                $('#content').show();
                $('#splash-screen').hide();
            }, 1000);

            $('.id').hide();
        });
    </script>
@endsection
