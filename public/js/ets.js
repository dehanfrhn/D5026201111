function validateForm(){

    let nama = $('#nama').val();
    let harga = $('#harga').val();
    let jenis = $('.select').val();
    let kode = $('#kode').val();
    
    if (document.forms[".formulir"]["nama"].value == "") {
        alert("Nama barang Harus Diisi");
        document.forms[".formulir"]["nama"].focus();
        check = false;
    }
    if (document.forms[".formulir"]["harga"].value == "") {
        alert("Harga Harus Diisi");
        document.forms[".formulir"]["harga"].focus();
        check = false;
    }
    if (document.forms[".formulir"]["jenis"].value == "") {
        alert("Harap Pilih Jenis Barang");
        document.forms[".formulir"]["jenis"].focus();
        check = false;
    }
    if (document.forms[".formulir"]["kode"].value == "") {
        alert("kode Harus Diisi");
        document.forms[".formulir"]["kode"].focus();
        check = false;
    }
}