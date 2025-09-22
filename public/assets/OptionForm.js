$("#Kota").change(function () {
    var kotaID = $(this).val();
    if (kotaID) {
        $.ajax({
            type: "GET",
            url: "/getcabang?kotaID=" + kotaID,
            dataType: "JSON",
            success: function (res) {
                if (res) {
                    $("#Cabang").empty();
                    $("#Pegawai").empty();
                    $("#Cabang").append("<option>Pilih Cabang</option>");
                    $("#Pegawai").append("<option>Pilih Pegawai</option>");
                    $.each(res, function (nama_cabang, id) {
                        $("#Cabang").append(
                            '<option value="' +
                                id +
                                '">' +
                                nama_cabang +
                                "</option>",
                        );
                    });
                } else {
                    $("#Cabang").empty();
                    $("#Pegawai").empty();
                }
            },
        });
    } else {
        $("#Cabang").empty();
        $("#Pegawai").empty();
    }
});

$("#Cabang").change(function () {
    var cabID = $(this).val();
    if (cabID) {
        $.ajax({
            type: "GET",
            url: "/getpegawai?cabID=" + cabID,
            dataType: "JSON",
            success: function (res) {
                if (res) {
                    $("#Pegawai").empty();
                    $("#Pegawai").append("<option>Pilih Pegawai</option>");
                    $.each(res, function (nama, id) {
                        $("#Pegawai").append(
                            '<option value="' + id + '">' + nama + "</option>",
                        );
                    });
                } else {
                    $("#Pegawai").empty();
                }
            },
        });
    } else {
        $("#Pegawai").empty();
    }
});

$("#Pegawai").change(function () {
    var pegId = $(this).val();
    if (pegId) {
        $.ajax({
            type: "GET",
            url: "/getdetil?pegId=" + pegId,
            dataType: "JSON",
            success: function (res) {
                if (res) {
                    document.getElementById("jabatan").value = "";
                    document.getElementById("tel-pegawai").value = "";
                    document.getElementById("nik-pegawai").value = "";
                    document.getElementById("jabatan").value = res.jabatan;
                    document.getElementById("tel-pegawai").value = res.telepon;
                    document.getElementById("nik-pegawai").value = res.nik;
                }
            },
        });
    }
});

$("#nama_peng").change(function () {
    var pengId = $(this).val();
    if (pengId) {
        $.ajax({
            type: "GET",
            url: "/getDetilPeng?pengId=" + pengId,
            dataType: "JSON",
            success: function (res) {
                if (res) {
                    document.getElementById("nik_penggadai").value = "";
                    document.getElementById("no_tel_penggadai").value = "";
                    document.getElementById("alamat").value = "";
                    document.getElementById("nik_penggadai").value = res.nik;
                    document.getElementById("no_tel_penggadai").value = res.telepon;
                    document.getElementById("alamat").value = res.alamat;
                } else if ((res.nama = undefined)) {
                    document.getElementById("nik_penggadai").value = "";
                    document.getElementById("no_tel_penggadai").value = "";
                    document.getElementById("alamat").value = "";
                    document.getElementById("er_peng").value =
                        "NIK tidak ditemukan";
                }
            },
        });
    } else {
        document.getElementById("er_peng").value = "NIK tidak ditemukan";
    }
});

$("#gadai_id").change(function () {
    var pegId = $(this).val();
    if (pegId) {
        $.ajax({
            type: "GET",
            url: "/getdetillelang?pegId=" + pegId,
            dataType: "JSON",
            success: function (res) {
                if (res) {
                    document.getElementById("deskripsi").value = "";
                    document.getElementById("tel-pegawai").value = "";
                    document.getElementById("nik-pegawai").value = "";
                    document.getElementById("deskripsi").value = res.deskripsi;
                    document.getElementById("tel-pegawai").value = res.telepon;
                    document.getElementById("nik-pegawai").value = res.nik;
                }
            },
        });
    }
});

function calculateDays() {
    // Get the input values from the form
    const startDateInput = document.getElementById("startDate");
    const endDateInput = document.getElementById("endDate");

    // Get the date values from the input elements
    const startDate = startDateInput.value;
    const endDate = endDateInput.value;

    // Check if both dates are provided
    if (startDate && endDate) {
        // Call the function to calculate days between dates
        const daysBetweenDates = calculateDaysBetweenDates(startDate, endDate);

        // Display the result
        alert(
            `The number of days between ${startDate} and ${endDate} is: ${daysBetweenDates} days.`,
        );
    } else {
        alert("Please provide both start and end dates.");
    }
}

function calculateDaysBetweenDates(date1, date2) {
    // Parse the input dates
    const startDate = new Date(date1);
    const endDate = new Date(date2);

    // Calculate the time difference in milliseconds
    const timeDifference = endDate.getTime() - startDate.getTime();

    // Calculate the number of days
    const daysDifference = Math.floor(timeDifference / (1000 * 60 * 60 * 24));

    return daysDifference;
}

function calculateDaysBetweenDates(date1, date2) {
    // Parse the input dates
    const startDate = new Date(date1);
    const endDate = new Date(date2);

    // Calculate the time difference in milliseconds
    const timeDifference = endDate.getTime() - startDate.getTime();

    // Calculate the number of days
    const daysDifference = Math.floor(timeDifference / (1000 * 60 * 60 * 24));

    return daysDifference;
}

$("#tanggal-jatuh-tempo-input").change(function () {
    var tgljatuh = $(this).val();
    if (tgljatuh) {
        const startDateInput = document.getElementById("tgl-gadai-input");

        // Get the date values from the input elements
        const startDate = startDateInput.value;
        const endDate = tgljatuh;

        // Check if both dates are provided
        if (startDate && endDate) {
            // Call the function to calculate days between dates
            const daysBetweenDates = calculateDaysBetweenDates(
                startDate,
                endDate,
            );

            // Display the result
            document.getElementById("Durasi").value =
                daysBetweenDates + " Hari";
        } else {
            alert("Please provide both start and end dates.");
        }
    }
});
