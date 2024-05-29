<?php
$nama = $_POST['nama'];
$email = $_POST['email'];
$password = $_POST['password'];
$gender = isset($_POST['gender']) ? $_POST['gender'] : false;
$alamat = $_POST['alamat'];

if ($nama != "" && $email != "" && $password != "" && $gender != "" && $alamat != "") {
    echo "<style>";
    echo "table {";
    echo "border: 2px black solid;";
    echo "border-collapse: collapse;";
    echo "width: 50%;"; // Ubah lebar tabel sesuai kebutuhan
    echo "margin: 50px auto;";
    echo "}";
    echo "th, td {";
    echo "border: 1px solid black;";
    echo "padding: 8px;";
    echo "text-align: left;";
    echo "}";
    echo "</style>";

    echo "<table>";
    echo "<tr>";
    echo "<td>Nama</td>";
    echo "<td>$nama</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>Email</td>";
    echo "<td>$email</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>Password</td>";
    echo "<td>$password</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>Gender</td>";
    echo "<td>$gender</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>Alamat</td>";
    echo "<td>$alamat</td>";
    echo "</tr>";
    echo "</table>";
} else {
    echo "Nama, email, password, gender, alamat wajib diisi !! <a href='Challange_4783.php'>kembali</a>";
}
?>
