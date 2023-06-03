export function generateTableRows(table, rows) {
    table.innerHTML = "";
    for (var i = 0; i < count; i++) {
        table.appendChild(row);
    }
}

export function loadRt(url) {
    // show the skeleton table
    $("#rt-body").html("");

    $("#ruta-loading").show();
    $("#ruta-empty").hide();

    $.ajax({
        url: url,
        type: "GET",
        dataType: "json",
        success: function (data) {
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
            if (data.data.length < 1) {
                $("#ruta-empty").show();

                return 0;
            } else {
                $("#ruta-empty").hide();
            }

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
            });
        },
    })
        .done(() => {
            $("#ruta-loading").hide();
        })
        .fail(() => {
            $("#ruta-empty").show();
            $("#ruta-loading").hide();
        });
}

export function getKec() {
    const kabkot = document.getElementById("kabkot").value;
    console.log(kabkot);
}

export function copyValue(e) {
    console.log(e.value);
    document.getElementById("nik").value = e.value;
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
    $("#form-ruta-loading").show();
    $("#form-ruta").hide();

    $.ajax({
        url: `getRtById/${data.id}`,
        type: "GET",
        dataType: "json",
        success: function (dataRt) {
            if (dataRt.length) {
                setFormValue("form-ruta", dataRt[0]);
                return 0;
            }
            setFormValue("form-ruta", {});
        },
    })
        .done(() => {
            $("#form-ruta").show();
            $("#form-ruta-loading").hide();
        })
        .fail(() => {
            $("#form-ruta").show();
            $("form-ruta-loading").hide();
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
                $(".hapus-pengelola")
                    .off("click")
                    .on("click", (e) => {
                        hapusPengelola(e);
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

    $("#pengelola-loader").show();
    $("#pengelola-icon").hide();

    const id = document.getElementById("id-uup").value;
    let data = getFormValue("form-pengelola");
    data["id"] = id;
    data["r301"] = $("#usaha-r301").val();
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
    })
        .done(() => {
            $("#pengelola-loader").hide();
            $("#pengelola-icon").show();
        })
        .fail(() => {
            $("#pengelola-loader").hide();
            $("#pengelola-icon").show();
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
    // $("#modal-backdrop").show();
    document.getElementById("modal-backdrop").style.display = "block";
    $(idSelector).find(".modal-title").html(title);
    $(idSelector).show();
    $(idSelector).show();
}

export function closeModal(idSelector) {
    $("#modal-backdrop").hide();
    $(idSelector).hide();
}

export function varGenerator(nilaiVar, namaVar, isNum) {
    return `<td class="${namaVar} ${
        namaVar == "id" ? "id hidden" : ""
    } px-4 py-3 text-${isNum ? "right" : "left"}">${nilaiVar}</td>`;
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

    $(".hapus-pengelola")
        .off("click")
        .on("click", (e) => {
            hapusPengelola(e);
        });
}
export function updateTotal(element) {
    let total = 0;
    element
        .closest("tr")
        .querySelectorAll("input.updateTotal")
        .forEach(
            (currentElement) => (total = total + Number(currentElement.value))
        );
    element.closest("tr").querySelector("input.r311").value = total;
}

export function generateRowGen2(
    key,
    value,
    length,
    dataType,
    readOnly = false,
    onChange = ""
) {
    const numOnly = dataType === "number" ? "only_num" : "";
    const textAlign = dataType !== "number" ? "left" : "right";

    return `<td scope="row" class="${
        key == "id" ? "id hidden" : key
    } px-2 py-2 text-center"><input type="text" value="${value}" onkeyup="${onChange}(this)"  name="${key}"  class="${onChange} ${key} ${numOnly} w-[${length}rem] bg-gray-50 border border-gray-300 text-${textAlign} text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" ${
        readOnly ? "readonly" : ""
    }
    } ></td>`;
}
export function reCalculateIndex(tableId, className) {
    const rows = document.querySelectorAll(`#${tableId} tr`);
    rows.forEach((row, indeks) => {
        console.log({ row, indeks });
        row.querySelector(`input.${className}`).value = indeks + 1;
    });
}
export function tambahUsaha(bodyTableId, fungsiHapus, jenis, data) {
    // console.log(data);
    const tr_s = document.querySelectorAll(`#${bodyTableId} tr`) || [];
    const usahaCount = tr_s.length;
    const usahaMax = Number(document.getElementById("r309").value) || 0;
    console.log({ usahaCount, usahaMax, jenis, bodyTableId });
    if (jenis === "lahan" && usahaCount >= usahaMax) {
        alert("Maaf Jumlah Lahan sudah mencapai batas");
        return false;
    }
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
            r310: { value: "", length: 3, dataType: "number", readOnly: true },
            r311: { value: 0, length: 3, dataType: "number", readOnly: true },
            r312: {
                value: "",
                length: 3,
                dataType: "number",
                onChange: "updateTotal",
            },
            r313: {
                value: "",
                length: 3,
                dataType: "number",
                onChange: "updateTotal",
            },
            r314: {
                value: "",
                length: 3,
                dataType: "number",
                onChange: "updateTotal",
            },
            r315: {
                value: "",
                length: 3,
                dataType: "number",
                onChange: "updateTotal",
            },
            r316: {
                value: "",
                length: 3,
                dataType: "number",
                onChange: "updateTotal",
            },
            r317: {
                value: "",
                length: 3,
                dataType: "number",
                onChange: "updateTotal",
            },
            r318: {
                value: "",
                length: 3,
                dataType: "number",
                onChange: "updateTotal",
            },
            r319: {
                value: "",
                length: 3,
                dataType: "number",
                onChange: "updateTotal",
            },
            r320: {
                value: "",
                length: 3,
                dataType: "number",
                onChange: "updateTotal",
            },
            r321: {
                value: "",
                length: 3,
                dataType: "number",
                onChange: "updateTotal",
            },
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
        <button onclick='${fungsiHapus}(this,true,"${jenis}","id-${
        jenis.length > 2 ? "lahan" : "ternak"
    }-hapus")' class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete</button>
    </td>`;
    let rowsGenerated = "";
    for (let key in dataProcessed) {
        let rowGenerated = generateRowGen2(
            key,
            dataProcessed[key].value,
            dataProcessed[key].length,
            dataProcessed[key].dataType,
            dataProcessed[key].readOnly ?? "",
            dataProcessed[key].onChange ?? ""
        );
        rowsGenerated += rowGenerated;
    }
    const blank_lahan = `  <tr class="border-b dark:border-gray-700">
    ${aksiButton}
    ${rowsGenerated}
    </tr>`;
    $(`#${bodyTableId}`).append(blank_lahan);

    // $(".only_num").keypress(function (e) {
    //     console.log("asu");
    //     //if the letter is not digit then display error and don't type anything
    //     if (e.which > 57 || e.which < 48) {
    //         e.preventDefault();
    //     }
    // });
    document.querySelectorAll(".only_num").forEach((element) => {
        element.addEventListener("keypress", onlyNumber);
    });

    // document.
}
export function onlyNumber(element) {
    if (element.which > 57 || element.which < 48) e.preventDefault();
}
export function simpanTernak(jenis, token) {
    //show loading
    $(`#peternakan-${jenis}-loader`).show();
    $(`#peternakan-${jenis}-icon`).hide();

    // const table_inputs = $(`#peternakan-${jenis}-body`).find("tr");
    const tableRows = document.querySelectorAll(`#peternakan-${jenis}-body tr`);
    let data = [];
    tableRows.forEach((row) => {
        let rowData = {};

        const rowInputs = row.querySelectorAll("input");
        rowInputs.forEach((input) => {
            let value = input.value;
            let key = input.getAttribute("name");
            rowData[key] = value;
        });
        rowData["id_pengelola"] = document.getElementById("id-uup").value;

        data.push(rowData);
    });

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
    })
        .done(() => {
            $(`#peternakan-${jenis}-loader`).hide();
            $(`#peternakan-${jenis}-icon`).show();
            alert("data berhasil disimpan");
            // hide loading
        })
        .fail(() => {
            $(`#peternakan-${jenis}-loader`).hide();
            $(`#peternakan-${jenis}-icon`).show();
            alert("data gagal disimpan");
        });
}
export function capitalizeWord(word) {
    const firstLetter = word.charAt(0);

    const firstLetterCap = firstLetter.toUpperCase();

    const remainingLetters = word.slice(1);

    return firstLetterCap + remainingLetters;
}
export function hapusTernak(element, jenis) {
    const row = $(element.closest("tr"));
    const id_ternak = row.find("input.id").val();

    if (id_ternak.length < 1) {
        if (confirm("Apakah anda yakin akan menghapus data ini ?")) {
            row.remove();
            return false;
        }
    }
    $("#id-ternak-hapus").text(id_ternak);
    $("#jenis-ternak-hapus").text(jenis);
    $("#hapus-ternak-modal").show();
}

export function hapusLahan(element) {
    const row = $(element.closest("tr"));
    const id_lahan = row.find("input.id").val();
    $("#id-lahan-hapus").text(id_lahan);
    $("#hapus-lahan-modal").show();
}

export function hapusPengelola(event) {
    let id_hapus = $(event.target.closest("tr")).find("td.id").html();

    if (id_hapus == "null") {
        if (confirm("Apakah anda yakin akan menghapus data ini ?")) {
            const row = $(event.target.closest("tr")).remove();
            return 0;
        }
    }
    $("#id-pengelola-hapus").text(id_hapus);
    $("#hapus-pengelola-modal").show();
}

export async function hapusRow(
    element,
    isInput,
    jenis = "",
    idHapusContainer = ""
) {
    const row = element.closest("tr");
    const id = isInput
        ? row.querySelector("input.id").value
        : row.querySelector("td.id").innerHTML();

    if (id == "null" || id == "") {
        if (confirm("Apakah anda yakin akan menghapus data ini ?")) {
            await row.remove();
            reCalculateIndex("lahan-body", "r310");
            return false;
        }
    }
    document.getElementById(idHapusContainer).innerHTML = id;
    document.getElementById("jenis-ternak-hapus").innerHTML =
        jenis != "lahan" ? jenis : "";
    console.log(jenis == "lahan");
    const modalSelector = `#${
        jenis.length > 1 ? "lahan" : "ternak"
    }-hapus-modal`;
    $(modalSelector).show();

    return true;
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
            },
        });
    }

    // done
    $("#ternak-hapus-modal").hide();
}

export function hapusPengelolaSubmit(indeks, token) {
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
    reCalculateIndex("lahan-body", "r310");
    $("#lahan-hapus-modal").hide();

    return 1;
}

export async function editPengelola(indeks) {
    $("#usaha-tab").prop("disabled", false);
    $("#usaha-tab").click();
    $("#usaha-tab").prop("disabled", true);
    // show loading
    $(".usaha-loading").show();
    $(".usaha-data").hide();
    const row = $("#pengelola-body tr").eq(indeks);
    localStorage.setItem("pengelola-indeks", indeks);
    const r301 = row.find(".r301").html();
    const id = row.find(".id").html();
    const id_uup = row.find(".id").html();
    // $('#r301').val("3");
    $("#id-uup").val(id_uup);
    $("#usaha-r301").val(r301);

    // ambil data lahan berdasarkan id pengelola
    const urlPengelola = `getPengelolaById/${id_uup}`;
    $.ajax({
        url: urlPengelola,
        type: "GET",
        dataType: "json",
        success: function (data) {
            console.log(data);
            if (data.length < 1) {
                setFormValue("form-pengelola", { r301: r301 });
                return 0;
            }
            setFormValue("form-pengelola", data[0]);
        },
    });

    const url = `/getLahan/${id_uup}`;
    await loadLahan(url);
    await loadTernak(`getKerbau/${id_uup}`, "a");
    await loadTernak(`getDomba/${id_uup}`, "b");
    await loadTernak(`getUnggas/${id_uup}`, "c");
    await loadTernak(`getLainnya/${id_uup}`, "d");

    $(".usaha-loading").hide();
    $(".usaha-data").show();
}

export function loadLahan(url) {
    $("#lahan-loading").show();
    $("#lahan-body").html("");

    $("#lahan-body").hide();
    $("#lahan-pagination").html("");

    $.ajax({
        url: url,
        type: "GET",
        dataType: "json",
        success: function (data) {
            const links = data.links;
            if (data.total > 0) {
                $("#lahan-empty").hide();
            } else {
                $("#lahan-empty").show();
            }

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
                    "hapusRow",
                    "lahan",
                    rt
                );
                // console.log(rowLahan);
                // $("#lahan-body").append(rowLahan);
                // console.log({content_html});
            });
        },
    })
        .done(() => {
            $("#lahan-loading").hide();
            $("#lahan-body").show();
        })
        .fail(() => {
            $("#lahan-loading").hide();
            $("#lahan-body").show();
        });
}
export function loadTernak(url, jenis) {
    // show loading
    const idTable = `peternakan-${jenis}-body`;
    const idLoading = `peternakan-${jenis}-loading`;
    const idEmpty = `peternakan-${jenis}-empty`;

    $(`#${idTable}`).hide();
    $(`#${idLoading}`).show();

    const idPagination = `#peternakan-${jenis}-pagination`;
    $("#" + idTable).html("");
    $(idPagination).html("");

    $.ajax({
        url: url,
        type: "GET",
        dataType: "json",
        success: function (data) {
            const links = data.links;
            if (data.total > 0) {
                $(`#${idEmpty}`).hide();
            } else {
                $(`#${idEmpty}`).show();
            }
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
                const rowTernak = tambahUsaha(idTable, "hapusRow", jenis, rt);
                console.log(rowTernak);
                $(idTable).append(rowTernak);
                // console.log({content_html});
            });
        },
    }).done(() => {
        $(`#${idTable}`).show();
        $(`#${idLoading}`).hide();
    });
}

export function simpanLahan(token) {
    // show loading
    $("#lahan-icon").hide();
    $("#lahan-loader").show();
    // ambil data dari form input
    // let data = {
    //     data: [],
    // };
    const id_uup = $("#id-uup").val();
    // for (let i = 0; i < $("#lahan-body tr").length; i++) {
    //     let data_i = {
    //         id_pengelola: id_uup, // belum,

    //         id: $("#lahan-body tr").eq(i).find(".id").val() || null,
    //         r310: $("#lahan-body tr").eq(i).find(".r310").val(),
    //         r311: $("#lahan-body tr").eq(i).find(".r311").val(),
    //         r312: $("#lahan-body tr").eq(i).find(".r312").val(),
    //         r313: $("#lahan-body tr").eq(i).find(".r313").val(),
    //         r314: $("#lahan-body tr").eq(i).find(".r314").val(),
    //         r315: $("#lahan-body tr").eq(i).find(".r315").val(),
    //         r316: $("#lahan-body tr").eq(i).find(".r316").val(),
    //         r317: $("#lahan-body tr").eq(i).find(".r317").val(),
    //         r318: $("#lahan-body tr").eq(i).find(".r318").val(),
    //         r319: $("#lahan-body tr").eq(i).find(".r319").val(),
    //         r320: $("#lahan-body tr").eq(i).find(".r320").val(),
    //         r321: $("#lahan-body tr").eq(i).find(".r321").val(),
    //         r322: $("#lahan-body tr").eq(i).find(".r322").val(),
    //         r323: $("#lahan-body tr").eq(i).find(".r323").val(),
    //         r324_prov: $("#lahan-body tr").eq(i).find(".r324_prov").val(),
    //         r324_kabkot: $("#lahan-body tr").eq(i).find(".r324_kabkot").val(),
    //         r324_kec: $("#lahan-body tr").eq(i).find(".r324_kec").val(),
    //         r324_desa: $("#lahan-body tr").eq(i).find(".r324_desa").val(),
    //     };

    //     data.data.push(data_i);
    // }
    const table_inputs = $(`#lahan-body`).find("tr");
    const id_pengelola = $("#id-uup").val();
    const tableRows = document.querySelectorAll("#lahan-body tr");
    let data = [];
    tableRows.forEach((row) => {
        let rowData = {};

        const rowInputs = row.querySelectorAll("input");
        rowInputs.forEach((input) => {
            let value = input.value;
            let key = input.getAttribute("name");
            rowData[key] = value;
        });
        rowData["id_pengelola"] = id_pengelola;

        data.push(rowData);
    });
    $.ajax({
        url: "/lahan/save",
        type: "POST",
        dataType: "json",
        data: { data: data },
        headers: {
            "X-CSRF-TOKEN": token, // Add CSRF token for Laravel security
        },
        success: function (response) {
            loadLahan(`/getLahan/${id_uup}`);
        },
    })
        .done(() => {
            $("#lahan-icon").show();
            $("#lahan-loader").hide();
            alert("Data berhasil disimpan");
            // show loadingtu
        })
        .fail(() => {
            $("#lahan-icon").show();
            $("#lahan-loader").hide();
        });
}

export function halamanSatuNext(e) {
    document.getElementById("loader-hal-1").style.display = "block";
    document.getElementById("icon-hal-1").style.display = "none";

    e.target.closest("button").disabled = true;

    e.preventDefault();
    if (!document.getElementById("form-ruta").reportValidity()) {
        e.target.closest("button").disabled = false;
        document.getElementById("loader-hal-1").style.display = "block";
        document.getElementById("icon-hal-1").style.display = "none";

        return 0;
    }

    const tabel = document.getElementById("pengelola-body");
    const id_sls = document.getElementById("idsls").value;
    let token = document.getElementsByName("_token")[0].value;

    const ruta = getFormValue("form-ruta");
    console.log({ ruta });

    // input ke ruta

    $.ajax({
        url: "/simpanRuta",
        type: "POST",
        dataType: "json",
        data: ruta,
        success: function (data) {
            $("#id_rt").val(data.id_rt);
            // console.log(data);
        },
    })
        .then(() => {
            document.getElementById("pengelola-tab").click();
        })
        .done(() => {
            e.target.closest("button").disabled = false;
            // $(e.target).closest("button").attr("disabled", false);
            document.getElementById("loader-hal-1").style.display = "none";
            document.getElementById("icon-hal-1").style.display = "block";
            document.getElementById("pengelola-tab").click();
        })
        .fail(() => {
            // $(e.target).closest("button").attr("disabled", false);
            e.target.closest("button").disabled = false;
            document.getElementById("loader-hal-1").style.display = "none";
            document.getElementById("icon-hal-1").style.display = "block";
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
        if (
            formInputs.eq(i).attr("type") === "radio" &&
            formInputs.eq(i).prop("checked") === false
        ) {
            continue;
        }
        // console.log({ key, value });
        data[key] = value;
    }
    return data;
}

export function setFormValue(idForm, data) {
    const formInputs = $(`#${idForm} input`);
    if (Object.keys(data).length < 1) {
        console.log("masukkkkkk");
        for (let i = 0; i < formInputs.length; i++) {
            let key = formInputs.eq(i).attr("name");
            // set

            if (
                key !== "_token" &&
                key !== "id_rt" &&
                key !== "idsls" &&
                key !== "r301"
            ) {
                // console.log({ key });

                let input = $(`#${idForm} input[name="${key}"]`);
                if (input.attr("type") === "radio") {
                    $(`#form-ruta input[name=${key}]`).prop("checked", false);
                    continue;
                }
                input.val("");
            }
        }
        return false;
    }

    for (let i = 0; i < formInputs.length; i++) {
        // console.log("masukk2");
        let key = formInputs.eq(i).attr("name");
        // set
        if (data.hasOwnProperty(key)) {
            let input = $(`#${idForm} input[name="${key}"]`);
            if (input.attr("type") === "radio") {
                const nama_form_radio = `#${idForm} input[name="${key}"][value="${data[key]}"]`;
                console.log({ nama_form_radio });
                $(nama_form_radio).prop("checked", true);
            } else {
                input.val(data[key]);
            }
        }
    }
}

export async function simpanL1(e) {
    document.getElementById("l1-icon").classList.add("hidden");
    document.getElementById("l1-loader").classList.remove("hidden");
    e.preventDefault();
    if (!document.getElementById("form-l1").reportValidity()) {
        document.getElementById("l1-icon").classList.remove("hidden");
        document.getElementById("l1-loader").classList.add("hidden");
        return false;
    }
    let data = getFormValue("form-l1");

    $.ajax({
        url: "/l1/save",
        type: "POST",
        dataType: "json",
        data: data,
        success: function (response) {
            $('#form-l1 input[name="id"]').val(response.id);
        },
    })
        .done(() => {
            document.getElementById("l1-icon").style.display = "block";
            document.getElementById("l1-loader").style.display = "none";

            alert(`data berhasil disimpan`);

            new Modal(document.getElementById("l1-modal")).hide();

            document.getElementById("modal-backdrop").style.display = "none";
        })
        .fail((error) => {
            document.getElementById("l1-icon").classList.remove("hidden");
            document.getElementById("l1-loader").classList.add("hidden");
            alert(`Maaf terjadi kesalahan ${error.message}`);
        });
}
export function loadL1(idsls) {
    $("#form-l1-loading").show();
    $("#form-l1").hide();

    const url = "getL1/" + idsls;
    $.ajax({
        url: url,
        type: "GET",
        dataType: "json",
        success: function (data) {
            console.log({ data });
            if (Object.keys(data[0]).length > 0) {
                setFormValue("form-l1", data[0]);
            }

            $("#form-l1-loading").hide();
            $("#form-l1").show();
        },
    }).fail(() => {
        $("#form-l1-loading").hide();
        $("#form-l1").show();
    });
}
