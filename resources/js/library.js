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
    $.ajax({
        url: `/getPengelola/${data.id}`,
        type: "GET",
        dataType: "json",
        success: function (data) {
            $("#pengelola-body").html("");

            const links = data.links;
            $("#pengelola-pagination").html("");
            for (let i = 0; i < links.length; i++) {
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

    $("#modal-title").html("Edit Ruta");
    $("#add-ruta-modal").show();

    $("#modal-backdrop").show();
}

export function backPages(currentPages) {
    return 0;
}

export function generateLink({ url, label, active }) {
    return active
        ? `<li><button onclick="loadRt('${url}')" id="page-${label}" aria-current="page" class="flex items-center justify-center text-sm z-10 py-2 px-3 leading-tight text-primary-600 bg-primary-50 border border-primary-300 hover:bg-primary-100 hover:text-primary-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">${label}</button></li>`
        : `<li><button onclick="loadRt('${url}')" id="page-${label}" class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">${label}</button></li>`;
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

export function hapusPengelola(indeks, token) {
    // delete in html
    console.log(indeks);

    const row = $("#pengelola-body tr").eq(Number(indeks));
    // delete in db is any
    const id = Number(row.find(".id").html());
    if (id > 0) {
        $.ajax({
            url: "/pengelola/delete",
            type: "DELETE",
            dataType: "json",
            data: { id },
            headers: {
                "X-CSRF-TOKEN": token, // Add CSRF token for Laravel security
            },
            success: function (response) {
                console.log(response);
            },
        });
    }
    // delete row
    row.remove();

    // done
    $("#hapus-pengelola-modal").hide();

    return row;
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

    $.ajax({
        url: `/getLahan/${id}`,
        type: "GET",
        dataType: "json",
        success: function (data) {
            $("#lahan-body").html("");

            const links = data.links;
            $("#lahan-pagination").html("");
            for (let i = 0; i < links.length; i++) {
                let link = generateLink(links[i]);
                let currPageLinks = $("#lahan-pagination").html();
                $("#lahan-pagination").html(currPageLinks + link);
            }
            $("#lahan-showing").html(data.from + " - " + data.to);
            $("#lahan-total").html(data.total);
            // const num_pages = data.data.length%10>0 ? data.length
            $.each(data.data, function (indeks, rt) {
                let content_html =
                    '<tr class="hover:bg-gray-100 dark:hover:bg-gray-600">';
                let aksiButton = `<td class="px-4 py-3 flex items-center justify-end">
                                                <button type="button" class="edit-lahan block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</button>
                                                <button type="button" class="hapus-lahan block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete</button>
                                            </td>`;
                // console.log({indeks});
                content_html = content_html + varGenerator(rt.id, "id", true);
                content_html =
                    content_html + varGenerator(rt.r310, "r310", true);
                content_html =
                    content_html + varGenerator(rt.r311, "r311", true);
                content_html =
                    content_html + varGenerator(rt.r312, "r312", true);
                content_html =
                    content_html + varGenerator(rt.r313, "r313", true);
                content_html =
                    content_html + varGenerator(rt.r314, "r314", true);
                content_html =
                    content_html + varGenerator(rt.r315, "r315", true);
                content_html =
                    content_html + varGenerator(rt.r316, "r316", true);
                content_html =
                    content_html + varGenerator(rt.r317, "r317", true);
                content_html =
                    content_html + varGenerator(rt.r318, "r318", true);
                content_html =
                    content_html + varGenerator(rt.r319, "r319", true);
                content_html =
                    content_html + varGenerator(rt.r320, "r320", true);
                content_html =
                    content_html + varGenerator(rt.r321, "r321", true);
                content_html =
                    content_html + varGenerator(rt.r322, "r322", true);
                content_html =
                    content_html + varGenerator(rt.r323, "r323", true);
                content_html =
                    content_html +
                    varGenerator(rt.r324_desa, "r324_desa", true);
                content_html =
                    content_html +
                    varGenerator(rt.r324_kabkot, "r324_kabkot", true);
                content_html =
                    content_html + varGenerator(rt.r324_kec, "r324_kec", true);
                content_html =
                    content_html +
                    varGenerator(rt.r324_prov, "r324_prov", true);

                content_html = content_html + aksiButton + "</tr>";
                $("#lahan-body").append(content_html);
                // console.log({content_html});
            });
        },
    });
}
