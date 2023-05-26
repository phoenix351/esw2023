export function generateTableRows(table, rows) {
    table.innerHTML = "";
    for (var i = 0; i < count; i++) {
        table.appendChild(row);
    }
}

export function loadRt(url) {
    // load
    $.ajax({
        url: url,
        type: "GET",
        dataType: "json",
        success: function (data) {
            $("#rt-body").html("");
            const links = data.links;
            $("#pagination").html("");
            for (let i = 0; i < links.length; i++) {
                let link = generateLink(links[i]);
                let currPageLinks = $("#pagination").html();

                $("#pagination").html(currPageLinks + link);
            }

            $("#showing").html(data.from + " - " + data.to);
            $("#total").html(data.total);

            // const num_pages = data.data.length%10>0 ? data.length

            $.each(data.data, function (indeks, rt) {
                let content_html =
                    '<tr class="hover:bg-gray-100 dark:hover:bg-gray-600">';
                let aksiButton = `<td class="px-4 py-3 flex items-center justify-end">
                                            <button type="button" onclick="editRt(${indeks})" class="edit-rt block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</button>
                                            <button onclick="deleteRt(${indeks})" class="hapus-rt block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete</button>
                                        </td>`;
                // console.log({indeks});
                content_html = content_html + varGenerator(rt.id, "id", true);
                content_html =
                    content_html +
                    varGenerator(rt.nomor_bangunan, "nomor_bangunan", true);
                content_html =
                    content_html + varGenerator(rt.nurtup, "nurtup", true);
                content_html =
                    content_html + varGenerator(rt.nama_krt, "nama_krt", false);
                content_html =
                    content_html +
                    varGenerator(rt.jumlah_uup, "jumlah_uup", true);

                content_html = content_html + aksiButton + "</tr>";
                $("#rt-body").append(content_html);

                console.log({
                    content_html,
                });
            });
        },
    });
}

export function getKec() {
    const kabkot = document.getElementById("kabkot").value;
    console.log(kabkot);
}

export function copyValue(e) {
    console.log(e.value);
    document.getElementById("email").value = e.value;
}

export function deleteRt(element) {
    const currentRow = $("#rt-body tr").eq(Number(element));
    const data = {
        id: currentRow.find(".id").html(),
        nurtup: currentRow.find(".nurtup").html(),
        nomor_bangunan: currentRow.find(".nomor_bangunan").html(),
        nama_krt: currentRow.find(".nama_krt").html(),
        jumlah_uup: currentRow.find(".jumlah_uup").html(),
    };
    $("#delete-ruta-modal").show();
    const modalBackDrop = `<div id="modal-backdrop"><div modal-backdrop class="bg-gray-900 bg-opacity-50 dark:bg-opacity-80 fixed inset-0 z-40"></div><div modal-backdrop class="bg-gray-900 bg-opacity-50 dark:bg-opacity-80 fixed inset-0 z-40"></div></div>`;
    $("body").append(modalBackDrop);
    // $('body').append(modalBackDrop);
}

export function editRt(element) {
    const currentRow = $("#rt-body tr").eq(Number(element));
    const data = {
        id: currentRow.find(".id").html(),
        nurtup: currentRow.find(".nurtup").html(),
        nomor_bangunan: currentRow.find(".nomor_bangunan").html(),
        nama_krt: currentRow.find(".nama_krt").html(),
        jumlah_uup: currentRow.find(".jumlah_uup").html(),
    };

    $("#id_rt").val(data.id);
    $("#r107").val(data.nomor_bangunan);
    $("#r108").val(data.nurtup);
    $("#r109").val(data.nama_krt);
    $("#r201u").val(data.jumlah_uup);

    // fetch and add data pengelola
    const url = `/getPengelola/${data.id}`;
    loadPengelola(url);

    $("#modal-title").html("Edit Ruta");
    $("#ruta-tab").click();
    $("#add-ruta-modal").show();

    $("#modal-backdrop").show();
}

export function loadPengelola(url) {
    $.ajax({
        url: url,
        type: "GET",
        dataType: "json",
        success: function (data) {
            $("#pengelola-body").html("");

            const links = data.links;

            $("#pengelola-pagination").html("");
            for (let i = 0; i < links.length; i++) {
                links[i]["namaFungsi"] = "loadPengelola";
                let link = generateLink(links[i]);
                let currPageLinks = $("#pengelola-pagination").html();
                $("#pengelola-pagination").html(currPageLinks + link);
            }
            $("#pengelola-showing").html(data.from + " - " + data.to);
            $("#pengelola-total").html(data.total);
            // const num_pages = data.data.length%10>0 ? data.length
            $.each(data.data, function (indeks, rt) {
                const rowPengelola = generateRowPengelola({
                    indeks: indeks,
                    id: rt.id,
                    r301: rt.r301,
                    r302: rt.r302,
                    r303: rt.r303,
                    r307: rt.r307,
                    r309: rt.r309,
                });

                $("#pengelola-body").append(rowPengelola);
                $(".hapus-pengelola").on("click", (e) => {
                    let id_hapus = $(e.target.closest("tr"))
                        .find("td.id")
                        .html();

                    $("#id-pengelola-hapus").text(id_hapus);
                    $("#hapus-pengelola-modal").show();
                });
            });
        },
    });
}

export function simpanPengelola(e) {
    e.preventDefault();

    const id = document.getElementById("id-uup").value;
    const r301 = document.getElementById("r301").value;
    const id_rt = document.getElementById("id_rt").value;
    const r302 = document.getElementById("r302").value;
    const r303 = document.getElementById("r303").value;
    const r307 = document.getElementById("r307").value;
    const r309 = document.getElementById("r309").value;

    // cek validasi

    // let token = document.getElementsByName('_token')[0].value;

    const uup = {
        id,
        r301,
        r302,
        r303,
        r307,
        r309,
    };
    uup["_token"] = $("#csrf-pengelola").val();
    uup["id_rt"] = $("#id_rt").val();
    // console.log(uup);

    $.ajax({
        url: "/simpanUup",
        type: "POST",
        dataType: "json",
        data: uup,
        success: function (data) {
            // load pengelola
            loadPengelola(`/getPengelola/${id_rt}`);
        },
    });
}

export function backPages(currentPages) {
    return 0;
}

export function generateLink({ url, label, active, namaFungsi = "loadRt" }) {
    return active
        ? `<li><button onclick="${namaFungsi}('${url}')" id="page-${label}" aria-current="page" class="flex items-center justify-center text-sm z-10 py-2 px-3 leading-tight text-primary-600 bg-primary-50 border border-primary-300 hover:bg-primary-100 hover:text-primary-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">${label}</button></li>`
        : `<li><button onclick="${namaFungsi}('${url}')" id="page-${label}" class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">${label}</button></li>`;
}

export function openModal(idSelector, title) {
    if (title === "Tambah Ruta") {
        // kosongkan tabel pengelola
        $("#pengelola-body").html("");
        // kosongkan form ket ruta
        $("#r107").val("");
        $("#r108").val("");
        $("#r109").val("");
        $("#r201u").val("");
    }
    $("#ruta-tab").click();
    $("#modal-backdrop").show();
    $(idSelector).find(".modal-title").html(title);
    $(idSelector).show();
}

export function closeModal(idSelector) {
    $("#modal-backdrop").hide();
    $(idSelector).hide();
}

export function varGenerator(nilaiVar, namaVar, isNum) {
    return `<td class="${namaVar} ${namaVar == "id" ? "" : ""} px-4 py-3 text-${
        isNum ? "right" : "left"
    }">${nilaiVar}</td>`;
    return `<td class="${namaVar} ${
        namaVar == "id" ? "hidden" : ""
    } px-4 py-3 text-${isNum ? "right" : "left"}">${nilaiVar}</td>`;
}

export function deleteRuta(id) {
    $.ajax({
        url: "/simpanPengelola",
        type: "POST",
        dataType: "json",
        data: data,
        success: function (data) {
            $("#lahan-body tr").each(() => {});
        },
    });
}

export function generateRowPengelola({
    indeks,
    id,
    r301,
    r302 = 1,
    r303 = "NULL",
    r307 = "Nan",
    r309 = "Nan",
}) {
    let content_html = '<tr class="hover:bg-gray-100 dark:hover:bg-gray-600">';
    const aksiButton = `<td class="px-4 py-3 flex items-center justify-end">
                                            <button type="button" onclick="editPengelola(${indeks})" class="edit-pengelola block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</button>
                                            <button class="hapus-pengelola block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete</button>
                                        </td>`;
    // console.log({indeks});
    content_html = content_html + varGenerator(id, "id", true);
    content_html = content_html + varGenerator(r301, "r301", true);
    content_html = content_html + varGenerator(r302, "r302", false);
    content_html = content_html + varGenerator(r303, "r303", true);
    content_html = content_html + varGenerator(r307, "r307", true);
    content_html = content_html + varGenerator(r309, "r309", true);
    content_html = content_html + aksiButton + "</tr>";

    return content_html;
}

export function tambahPengelola() {
    // get id
    const id = null;
    // get indeks
    const indeks =
        $("#pengelola-body tr").length > 0 ? $("#pengelola-body tr").length : 0;
    // get r301
    const r301 = indeks + 1;
    // generate row
    const row = generateRowPengelola({
        indeks,
        id,
        r301,
    });
    $("#pengelola-body").append(row);
}
export function hapusLahan(element) {
    const id_lahan = $(element.closest("tr")).find("input.id").val();
    $("#id-lahan-hapus").text(id_lahan);
    $("#hapus-lahan-modal").show();
}
export function tambahLahan(options) {
    const {
        id = "",
        r310 = "",
        r311 = "",
        r312 = "",
        r313 = "",
        r314 = "",
        r315 = "",
        r316 = "",
        r317 = "",
        r318 = "",
        r319 = "",
        r320 = "",
        r321 = "",
        r322 = "",
        r323 = "",
        r324_prov = "",
        r324_kabkot = "",
        r324_kec = "",
        r324_desa = "",
    } = options;
    const generateRow = (key, value) =>
        `<td scope="row" class="px-4 py-3"><input type="text" value="${value}"  name="${key}"  class="${key} only_num w-[4rem] bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" ></td>`;
    const aksiButton = `<td class="px-4 py-3 flex items-center justify-end">
        <button onclick='hapusLahan(this)' class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete</button>
    </td>`;
    const blank_lahan = `  <tr class="border-b dark:border-gray-700">
    ${aksiButton}
    ${generateRow("id", id)}
    ${generateRow("r310", r310)}
    ${generateRow("r311", r311)}
    ${generateRow("r312", r312)}
    ${generateRow("r313", r313)}
    ${generateRow("r314", r314)}
    ${generateRow("r315", r315)}
    ${generateRow("r316", r316)}
    ${generateRow("r317", r317)}
    ${generateRow("r318", r318)}
    ${generateRow("r319", r319)}
    ${generateRow("r320", r320)}
    ${generateRow("r321", r321)}
    ${generateRow("r322", r322)}
    ${generateRow("r323", r323)}
    ${generateRow("r324_prov", r324_prov)}
    ${generateRow("r324_kabkot", r324_kabkot)}
    ${generateRow("r324_kec", r324_kec)}
    ${generateRow("r324_desa", r324_desa)}
    </tr>`;
    $("#lahan-body").append(blank_lahan);

    $(".only_num").keypress(function (e) {
        //if the letter is not digit then display error and don't type anything
        if (e.which > 57 || e.which < 48) {
            e.preventDefault();
        }
    });
}

export function hapusPengelola(indeks, token) {
    // show loading

    // delete in db is any
    if (indeks > 0) {
        $.ajax({
            url: "/pengelola/delete",
            type: "DELETE",
            dataType: "json",
            data: { id: indeks },
            headers: {
                "X-CSRF-TOKEN": token, // Add CSRF token for Laravel security
            },
            success: function (response) {
                // console.log(response);
                // load pengelola
                const id_rt = $("#id_rt").val();
                loadPengelola(`/getPengelola/${id_rt}`);
            },
        }).then(() => {
            // hide loading
        });
    }

    // done
    $("#hapus-pengelola-modal").hide();

    return row;
}
export function hapusLahanSubmit(indeks, token) {
    // show loading

    // delete in db is any
    if (indeks > 0) {
        $.ajax({
            url: "/lahan/delete",
            type: "DELETE",
            dataType: "json",
            data: { id: indeks },
            headers: {
                "X-CSRF-TOKEN": token, // Add CSRF token for Laravel security
            },
            success: function (response) {
                console.log(response);
                // load pengelola
                const id_uup = $("#id-uup").val();
                loadLahan(`/getLahan/${id_uup}`);
            },
        }).then(() => {
            // hide loading
        });
    }

    // done
    $("#hapus-lahan-modal").hide();

    return 1;
}

export function editPengelola(indeks) {
    const row = $("#pengelola-body tr").eq(indeks);
    localStorage.setItem("pengelola-indeks", indeks);
    const r301 = row.find(".r301").html();
    const id = row.find(".id").html();
    const id_uup = row.find(".id").html();
    // $('#r301').val("3");
    $("#id-uup").val(id_uup);
    console.log({
        r301,
        id,
    });

    // ambil data lahan berdasarkan id pengelola
    const url = `/getLahan/${id_uup}`;
    loadLahan(url);
}

export function loadLahan(url) {
    $.ajax({
        url: url,
        type: "GET",
        dataType: "json",
        success: function (data) {
            $("#lahan-body").html("");

            const links = data.links;
            $("#lahan-pagination").html("");
            for (let i = 0; i < links.length; i++) {
                links[i]["namaFungsi"] = "loadLahan";
                let link = generateLink(links[i]);
                let currPageLinks = $("#lahan-pagination").html();
                $("#lahan-pagination").html(currPageLinks + link);
            }
            $("#lahan-showing").html(data.from + " - " + data.to);
            $("#lahan-total").html(data.total);
            // const num_pages = data.data.length%10>0 ? data.length
            $.each(data.data, function (indeks, rt) {
                const rowLahan = tambahLahan(rt);
                console.log(rowLahan);
                $("#lahan-body").append(rowLahan);
                // console.log({content_html});
            });
        },
    });
}

export function simpanLahan(token) {
    // ambil data dari form input
    let data = {
        data: [],
    };
    const id_uup = $("#id-uup").val();
    for (let i = 0; i < $("#lahan-body tr").length; i++) {
        let data_i = {
            id_uup: id_uup, // belum,

            id: $("#lahan-body tr").eq(i).find(".id").val() || null,
            r310: $("#lahan-body tr").eq(i).find(".r310").val(),
            r311: $("#lahan-body tr").eq(i).find(".r311").val(),
            r312: $("#lahan-body tr").eq(i).find(".r312").val(),
            r313: $("#lahan-body tr").eq(i).find(".r313").val(),
            r314: $("#lahan-body tr").eq(i).find(".r314").val(),
            r315: $("#lahan-body tr").eq(i).find(".r315").val(),
            r316: $("#lahan-body tr").eq(i).find(".r316").val(),
            r317: $("#lahan-body tr").eq(i).find(".r317").val(),
            r318: $("#lahan-body tr").eq(i).find(".r318").val(),
            r319: $("#lahan-body tr").eq(i).find(".r319").val(),
            r320: $("#lahan-body tr").eq(i).find(".r320").val(),
            r321: $("#lahan-body tr").eq(i).find(".r321").val(),
            r322: $("#lahan-body tr").eq(i).find(".r322").val(),
            r323: $("#lahan-body tr").eq(i).find(".r323").val(),
            r324_prov: $("#lahan-body tr").eq(i).find(".r324_prov").val(),
            r324_kabkot: $("#lahan-body tr").eq(i).find(".r324_kabkot").val(),
            r324_kec: $("#lahan-body tr").eq(i).find(".r324_kec").val(),
            r324_desa: $("#lahan-body tr").eq(i).find(".r324_desa").val(),
        };

        data.data.push(data_i);
    }

    console.log(data);
    // return 1;
    // cek validasi

    // kirim ke server
    $.ajax({
        url: "/lahan/save",
        type: "POST",
        dataType: "json",
        data: data,
        headers: {
            "X-CSRF-TOKEN": token, // Add CSRF token for Laravel security
        },
        success: function (response) {
            console.log(response);
            loadLahan(`/getLahan/${id_uup}`);
        },
    }).then(() => {
        // show loadingtu
    });
}

export function halamanSatuNext() {
    // ambil data dari dom

    const r107 = document.getElementById("r107").value;
    const r108 = document.getElementById("r108").value;
    const r109 = document.getElementById("r109").value;
    const r201u = document.getElementById("r201u").value;
    const r110 = document.getElementById("r110").value;
    const r111 = document.getElementById("r111").value;

    const qc_1 = $('input[name="qc-1-radio"]:checked').val();
    const qc_2 = $('input[name="qc-2-radio"]:checked').val();

    const tabel = document.getElementById("pengelola-body");
    const id_sls = document.getElementById("idsls").value;
    let token = document.getElementsByName("_token")[0].value;

    // asign ke json
    const ruta = {
        idsls: id_sls,
        nomor_bangunan: r107,
        nurtup: r108,
        nama_krt: r109,
        jumlah_uup: r201u,
        qc_1: qc_1,
        qc_2: qc_2,
        r110: r110,
        r111: r111,
        _token: token,
    };

    console.log(ruta);
    // input ke ruta
    return ruta;
    $.ajax({
        url: "/simpanRuta",
        type: "POST",
        dataType: "json",
        data: ruta,
        success: function (data) {
            $("#id_rt").val(data.id_rt);
            console.log(data);
        },
    });

    // cek jumlah pengelola

    tabel.innerHTML = "";
    if (Number(r201u) > 0) {
        console.log("masuk");
        // generate pengelola
        for (let i = 1; i <= Number(r201u); i++) {
            const { r302, r303, r307, r309 } = {
                r302: "NULL",
                r303: "NULL",
                r307: NaN,
                r309: NaN,
            };
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

            $(document).on("click", ".edit-pengelola", editPengelola);
        }
        document.getElementById("pengelola-tab").click();
    }
    return 1;
}
