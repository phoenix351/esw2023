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
                                            <button onclick="deleteRt(${rt.nurtup},${rt.id})" class="hapus-rt block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete</button>
                                        </td>`;
                // console.log({indeks});
                content_html = content_html + varGenerator(rt.id, "id", true);
                content_html =
                    content_html + varGenerator(rt.nurtup, "nurtup", true);
                content_html =
                    content_html +
                    varGenerator(rt.nomor_bangunan, "nomor_bangunan", true);

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

export function deleteRt(nurtup, id) {
    // const currentRow = $("#rt-body tr").eq(Number(element));
    // const data = {
    //     id: currentRow.find(".id").html(),
    //     nurtup: currentRow.find(".nurtup").html(),
    //     nomor_bangunan: currentRow.find(".nomor_bangunan").html(),
    //     nama_krt: currentRow.find(".nama_krt").html(),
    //     jumlah_uup: currentRow.find(".jumlah_uup").html(),
    // };
    $("#id-rt-hapus").text(id);
    $("#nurtup-hapus").text(nurtup);
    $("#hapus-ruta-modal").show();
    $("#modal-backdrop").show();
    // $('body').append(modalBackDrop);
}

export function hapusRtSubmit(id, token) {
    $.ajax({
        url: `ruta/delete`,
        type: "DELETE",
        dataType: "json",
        data: { id: id },
        headers: {
            "X-CSRF-TOKEN": token, // Add CSRF token for Laravel security
        },
        success: function (response) {
            // console.log(response);
            // load ternak
            const idsls = $("#idsls").val();
            loadRt(`getRt/${idsls}`);
            $("#hapus-ruta-modal").hide();
        },
    });
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
    // $("#r107").val(data.nomor_bangunan);
    // $("#r108").val(data.nurtup);
    // $("#r109").val(data.nama_krt);
    // $("#r201u").val(data.jumlah_uup);

    // fetch and add data ruta
    $.ajax({
        url: `getRtById/${data.id}`,
        type: "GET",
        dataType: "json",
        success: function (dataRt) {
            if (dataRt.length) {
                setFormValue("form-ruta", dataRt[0]);
            }
            console.log(dataRt);
        },
    });

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
    if (!document.getElementById("form-pengelola").reportValidity()) {
        return false;
    }

    const id = document.getElementById("id-uup").value;
    let data = getFormValue("form-pengelola");
    data["id"] = id;
    $.ajax({
        url: "/simpanPengelola",
        type: "POST",
        dataType: "json",
        data: data,
        success: function (data) {
            // load pengelola
            loadPengelola(`/getPengelola/${$("#id_rt").val()}`);
            $("#id-uup").val(data.id_pengelola);
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

export function generateRowGen2(key, value, length, dataType) {
    const numOnly = dataType === "number" ? "only_num" : "";
    const textAlign = dataType !== "number" ? "left" : "right";

    return `<td scope="row" class="px-2 py-2 text-center"><input type="text" value="${value}"  name="${key}"  class="${key} ${numOnly} w-[${length}rem] bg-gray-50 border border-gray-300 text-${textAlign} text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" ></td>`;
}
export function tambahUsaha(bodyTableId, fungsiHapus, jenis, data) {
    // console.log(data);
    const dataDefault = {
        a: {
            id: { value: "", length: 3, dataType: "number" },
            r602: { value: "", length: 10, dataType: "text" },
            r603: { value: "", length: 3, dataType: "number" },
            r604: { value: "", length: 3, dataType: "number" },
            r605: { value: "", length: 3, dataType: "number" },
            r606: { value: "", length: 3, dataType: "number" },
            r607: { value: "", length: 3, dataType: "number" },
            r608: { value: "", length: 3, dataType: "number" },
            r609: { value: "", length: 3, dataType: "number" },
            r610: { value: "", length: 3, dataType: "number" },
            r611: { value: "", length: 3, dataType: "number" },
            r612: { value: "", length: 3, dataType: "number" },
            r613: { value: "", length: 3, dataType: "number" },
            r617: { value: "", length: 3, dataType: "number" },
            r618: { value: "", length: 3, dataType: "number" },
        },
        b: {
            id: { value: "", length: 3, dataType: "number" },
            r602: { value: "", length: 10, dataType: "text" },
            r603: { value: "", length: 3, dataType: "number" },
            r606: { value: "", length: 3, dataType: "number" },
            r614: { value: "", length: 3, dataType: "number" },
            r617: { value: "", length: 3, dataType: "number" },
            r618: { value: "", length: 3, dataType: "number" },
        },
        c: {
            id: { value: "", length: 3, dataType: "number" },
            r602: { value: "", length: 10, dataType: "text" },
            r603: { value: "", length: 3, dataType: "number" },
            r606: { value: "", length: 3, dataType: "number" },
            r610: { value: "", length: 3, dataType: "number" },
            r614: { value: "", length: 3, dataType: "number" },
            r615: { value: "", length: 3, dataType: "number" },
            r616: { value: "", length: 3, dataType: "number" },
            r617: { value: "", length: 3, dataType: "number" },
            r618: { value: "", length: 3, dataType: "number" },
        },
        d: {
            id: { value: "", length: 3, dataType: "number" },
            r602: { value: "", length: 10, dataType: "text" },
            r603: { value: "", length: 3, dataType: "number" },
            r606: { value: "", length: 3, dataType: "number" },
            r617: { value: "", length: 3, dataType: "number" },
            r618: { value: "", length: 3, dataType: "number" },
        },
        lahan: {
            id: { value: "", length: 3, dataType: "number" },
            r310: { value: "", length: 3, dataType: "number" },
            r311: { value: "", length: 3, dataType: "number" },
            r312: { value: "", length: 3, dataType: "number" },
            r313: { value: "", length: 3, dataType: "number" },
            r314: { value: "", length: 3, dataType: "number" },
            r315: { value: "", length: 3, dataType: "number" },
            r316: { value: "", length: 3, dataType: "number" },
            r317: { value: "", length: 3, dataType: "number" },
            r318: { value: "", length: 3, dataType: "number" },
            r319: { value: "", length: 3, dataType: "number" },
            r320: { value: "", length: 3, dataType: "number" },
            r321: { value: "", length: 3, dataType: "number" },
            r322: { value: "", length: 3, dataType: "number" },
            r323: { value: "", length: 3, dataType: "number" },
            r324_prov: { value: "", length: 3, dataType: "number" },
            r324_kabkot: { value: "", length: 3, dataType: "number" },
            r324_kec: { value: "", length: 3, dataType: "number" },
            r324_desa: { value: "", length: 3, dataType: "number" },
        },
    };

    let dataProcessed = dataDefault[jenis];

    if (Object.keys(data).length > 0) {
        console.log("masuk");
        // console.log("im in");
        //assign
        for (let key in data) {
            // console.log(dataProcessed[key]);
            if (dataProcessed.hasOwnProperty(key)) {
                dataProcessed[key]["value"] = data[key];
            }
        }
    }

    const jenisDict = {
        a: "Ternak Kerbau Potong, Kerbau Perah, Sapi Potong, dan Sapi Perah",
        b: "Ternak Domba Potong, Domba Perah, Kambing Potong, Kambing Perah, Babi, Kuda, Kelingci Potong, Rusa, Unta, dan Keledai",
        c: "Ternak Unggas",
        d: "Ternak Lainnya",
    };

    const aksiButton = `<td class="px-4 py-3 flex items-center justify-end">
        <button onclick='${fungsiHapus}(this,"${jenis}")' class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete</button>
    </td>`;
    let rowsGenerated = "";
    for (let key in dataProcessed) {
        let rowGenerated = generateRowGen2(
            key,
            dataProcessed[key].value,
            dataProcessed[key].length,
            dataProcessed[key].dataType
        );
        rowsGenerated += rowGenerated;
    }
    const blank_lahan = `  <tr class="border-b dark:border-gray-700">
    ${aksiButton}
    ${rowsGenerated}
    </tr>`;
    $(`#${bodyTableId}`).append(blank_lahan);

    $(".only_num").keypress(function (e) {
        //if the letter is not digit then display error and don't type anything
        if (e.which > 57 || e.which < 48) {
            e.preventDefault();
        }
    });
}
export function simpanTernak(jenis, token) {
    //show loading

    const table_inputs = $(`#peternakan-${jenis}-body`).find("tr");
    const id_pengelola = $("#id-uup").val();
    let data = [];
    for (let i = 0; i < table_inputs.length; i++) {
        let row_inputs = table_inputs.eq(i).find("input");
        let rowData = {};
        for (let j = 0; j < row_inputs.length; j++) {
            let value = row_inputs.eq(j).val();
            let key = row_inputs.eq(j).attr("class").split(" ")[0];
            rowData[key] = value;
            rowData["id_pengelola"] = id_pengelola;
        }
        data.push(rowData);
    }

    // define url
    const jenisUrl = {
        a: "kerbau",
        b: "domba",
        c: "unggas",
        d: "lainnya",
    };
    const url = `${jenisUrl[jenis]}/save`;

    // send ajax request
    $.ajax({
        url: url,
        type: "POST",
        dataType: "json",
        data: { data: data },
        headers: {
            "X-CSRF-TOKEN": token, // Add CSRF token for Laravel security
        },
        success: function (response) {
            console.log(response);
            // load pengelola
            const id_uup = $("#id-uup").val();
            loadTernak(
                `/get${capitalizeWord(jenisUrl[jenis])}/${id_uup}`,
                jenis
            );
        },
    }).then(() => {
        // hide loading
    });
}
export function capitalizeWord(word) {
    const firstLetter = word.charAt(0);

    const firstLetterCap = firstLetter.toUpperCase();

    const remainingLetters = word.slice(1);

    return firstLetterCap + remainingLetters;
}
export function hapusTernak(element, jenis) {
    const id_ternak = $(element.closest("tr")).find("input.id").val();
    $("#id-ternak-hapus").text(id_ternak);
    $("#jenis-ternak-hapus").text(jenis);
    $("#hapus-ternak-modal").show();
}

export function hapusTernakSubmit(indeks, token, jenis) {
    // show loading

    // delete in db is any
    const jenisUrl = {
        a: "kerbau",
        b: "domba",
        c: "unggas",
        d: "lainnya",
    };
    let jenisX = jenisUrl[jenis];
    if (indeks > 0) {
        $.ajax({
            url: `${jenisX}/delete`,
            type: "DELETE",
            dataType: "json",
            data: { id: indeks },
            headers: {
                "X-CSRF-TOKEN": token, // Add CSRF token for Laravel security
            },
            success: function (response) {
                // console.log(response);
                // load ternak
                const id_uup = $("#id-uup").val();
                loadTernak(`get${capitalizeWord(jenisX)}/${id_uup}`, jenis);
                $("#hapus-ternak-modal").hide();
            },
        });
    }

    // done
    $("#hapus-pengelola-modal").hide();
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
    loadTernak(`getKerbau/${id_uup}`, "a");
    loadTernak(`getDomba/${id_uup}`, "b");
    loadTernak(`getUnggas/${id_uup}`, "c");
    loadTernak(`getLainnya/${id_uup}`, "d");
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
                const rowLahan = tambahUsaha(
                    "lahan-body",
                    "hapusLahan",
                    "lahan",
                    rt
                );
                // console.log(rowLahan);
                // $("#lahan-body").append(rowLahan);
                // console.log({content_html});
            });
        },
    });
}
export function loadTernak(url, jenis) {
    // show loading
    $.ajax({
        url: url,
        type: "GET",
        dataType: "json",
        success: function (data) {
            const idPagination = `#peternakan-${jenis}-pagination`;
            const idTable = `peternakan-${jenis}-body`;
            $("#" + idTable).html("");
            $(idPagination).html("");

            const links = data.links;
            for (let i = 0; i < links.length; i++) {
                links[i]["namaFungsi"] = "loadTernak";
                let link = generateLink(links[i]);
                let currPageLinks = $(idPagination).html();
                $(idPagination).html(currPageLinks + link);
            }

            $(`#peternakan-${jenis}-showing`).html(data.from + " - " + data.to);
            $(`#peternakan-${jenis}-total`).html(data.total);
            // const num_pages = data.data.length%10>0 ? data.length
            $.each(data.data, function (indeks, rt) {
                const rowTernak = tambahUsaha(
                    idTable,
                    "hapusTernak",
                    jenis,
                    rt
                );
                console.log(rowTernak);
                $(idTable).append(rowTernak);
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
            id_pengelola: id_uup, // belum,

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

export function halamanSatuNext(e) {
    $("#loader-hal-1").show();
    $("#icon-hal-1").hide();
    e.preventDefault();
    if (!document.getElementById("form-ruta").reportValidity()) {
        return 0;
    }

    const tabel = document.getElementById("pengelola-body");
    const id_sls = document.getElementById("idsls").value;
    let token = document.getElementsByName("_token")[0].value;

    const ruta = getFormValue("form-ruta");

    // input ke ruta

    $.ajax({
        url: "/simpanRuta",
        type: "POST",
        dataType: "json",
        data: ruta,
        success: function (data) {
            $("#id_rt").val(data.id_rt);
            console.log(data);
        },
    }).then(() => {
        $("#loader-hal-1").hide();
        $("#icon-hal-1").show();
        document.getElementById("pengelola-tab").click();
    });

    // cek jumlah pengelola

    return 1;
}

export function getFormValue(idForm) {
    const formInputs = $(`#${idForm} input`);
    let data = {};

    for (let i = 0; i < formInputs.length; i++) {
        let key = formInputs.eq(i).attr("name");
        let value = formInputs.eq(i).val();
        // console.log({ key, value });
        data[key] = value;
    }
    return data;
}
export function setFormValue(idForm, data) {
    const formInputs = $(`#${idForm} input`);

    for (let i = 0; i < formInputs.length; i++) {
        let key = formInputs.eq(i).attr("name");
        // set
        if (data.hasOwnProperty(key)) {
            let input = $(`#${idForm} input[name="${key}"]`);
            console.log(input.attr("type") === "radio");
            if (input.attr("type") === "radio") {
                $(`#${idForm} input[name="${key}"][value="${data[key]}"]`).prop(
                    "checked",
                    true
                );
            } else {
                input.val(data[key]);
            }
        }
    }
}
