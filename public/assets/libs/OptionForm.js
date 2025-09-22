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
                                "</option>"
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
                            '<option value="' + id + '">' + nama + "</option>"
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
                    document.getElementById('jabatan').value = '';
                    document.getElementById('tel-pegawai').value = '';
                    document.getElementById('nik-pegawai').value = '';
                        document.getElementById('jabatan').value = res.jabatan;
                        document.getElementById('tel-pegawai').value = res.telepon;
                        document.getElementById('nik-pegawai').value = res.nik;
                }
            },
        });
    }
})
    

    
$("#nik_penggadai").change(function () {
    var pengId = $(this).val();
    if (pengId) {
        $.ajax({
            type: "GET",
            url: "/getDetilPeng?pengId=" + pengId,
            dataType: "JSON",
            success: function (res) {
                if (res) {
                    document.getElementById('nama_penggadai').value = '';
                    document.getElementById('no_tel_penggadai').value = '';
                    document.getElementById('alamat').value = '';
                        document.getElementById('nama_penggadai').value = res.nama;
                        document.getElementById('no_tel_penggadai').value = res.telepon;
                        document.getElementById('alamat').value = res.alamat;
                } else if(res.nama = undefined) {
                    document.getElementById('nama_penggadai').value = '';
                    document.getElementById('no_tel_penggadai').value = '';
                    document.getElementById('alamat').value = '';
                    document.getElementById('er_peng').value = "NIK tidak ditemukan";
                }
            },
        });
    } else {
        document.getElementById('er_peng').value = "NIK tidak ditemukan";
    }

});
