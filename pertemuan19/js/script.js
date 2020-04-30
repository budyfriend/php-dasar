// ambil elemen2 yang dibutuhkan
var keyword = document.getElementById('keyword');
var tombolCari = document.getElementById('tombol-cari');
var container = document.getElementById('container');

// mouseover
// tombolCari.addEventListener('click', function () {
//     alert('berhasil');
// });

// tambahkan event ketika keyword ditulis
// keypress =  mengetik sesuatu ke dalam inputnya
// keyup = melepas tangan kekeyboard
keyword.addEventListener('keyup', function () {
    // console.log(keyword.value);
    // buat object ajax
    var xhr = new XMLHttpRequest();

    // cek kesiapan ajax
    xhr.onreadystatechange = function () {
        // ready dan ok
        if (xhr.readyState == 4 && xhr.status == 200) {
            // console.log(xhr.responseText); (didalam file txt)
            container.innerHTML = xhr.responseText;
        }
    }

    // eksekusi ajax
    // metode, sumber dari mana, true(asyncronus)/false(syncronus)
    xhr.open('GET', 'ajax/mahasiswa.php?keyword=' + keyword.value, true);
    // menjalankan ajax
    xhr.send();
});