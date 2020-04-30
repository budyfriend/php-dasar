<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");
function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    global $conn;
    $npm = htmlspecialchars($data["npm"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);

    // Upload gambar
    $gambar = upload();
    // if($gambar === false){}
    if (!$gambar) {
        return false;
    }

    $query = "INSERT INTO mahasiswa (id, npm, nama, email, jurusan, gambar)
    VALUES
    (NULL, '$npm', '$nama', '$email', '$jurusan', '$gambar')
    ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function upload()
{
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar'][tmp_name];

    // cek apakah tidak ada gambar yang diupload
    if ($error === 4) {
        echo "<script>
                alert('pilih gambar terlebih dahulu');
            </script>";
        return false;
    }

    // mengecek gambar/bukan
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));

    // mencari jarum didalam jerami (in_array) / menacri string didalam array
    // menghasilkan true and false
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>
            alert('yang anda upload bukan gambar');
        </script>";
        return false;
    }

    // cek jika ukurannya erlalu besar
    // 1000000 = 1MB
    if ($ukuranFile > 1000000) {
        echo "<script>
            alert('ukuran gambar terlalu besar');
        </script>";
        return false;
    }

    // lolos pengecekan, gambar siap upload
    // generate nama baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;
    move_uploaded_file($tmpName, 'img/' . $namaFileBaru);
    return $namaFileBaru;
}

function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    global $conn;
    $id = $data["id"];
    $npm = htmlspecialchars($data["npm"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambarLama = htmlspecialchars($data["gambarLama"]);

    // cek apakah user pilih gambar baru atau tidak
    if ($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }



    $query = "UPDATE mahasiswa SET 
    npm = '$npm',
    nama = '$nama',
    email = '$email',
    jurusan = '$jurusan',
    gambar = '$gambar'
    WHERE id = '$id'";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


function cari($keyword)
{
    $query = "SELECT * FROM mahasiswa
        WHERE 
        npm LIKE '%$keyword%' OR
        nama LIKE '%$keyword%' OR
        email LIKE '%$keyword%' OR
        jurusan LIKE '%$keyword%'
        ";
    return query($query);
}

function registrasi($data)
{
    global $conn;
    // merubah huruf kecil dan menghilangkan back slash
    $username = strtolower(stripslashes($data["username"]));
    // memasukan data kutip
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    // cek username udah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "
            <script>
                alert('username sudah terdaftar');
            </script>
        ";
        return false;
    }

    // cek konfirmasi pasword
    if ($password !== $password2) {
        echo "
            <script>
                alert('konfirmasi password tidak sesuai');
            </script>
        ";
        return false;
    }
    // enkripsi password
    // md5
    // $password = md5($password);
    // password_hash
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambahkan user baru kedatabase
    mysqli_query($conn, "INSERT INTO user VALUES(NULL,'$username','$password')");
    return mysqli_affected_rows($conn);
}
