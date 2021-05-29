<html>

<head>
    <title>Belajar Thunkable dengan Database MySQL</title>
    <link rel="stylesheet" href="../framework/bootstrap-4.3.1/css/bootstrap.min.css">
</head>

<body>
    <?php
    #koneksi
    $connect = mysqli_connect("localhost", "root", "", "mobil_app");
    if ($connect->connect_errno) {
        die("Connection failed: " . $connect->connect_errno);
    }

    #tangkap data hehe
    $hehe = $_GET["hehe"];

    #ambil dari database dan tampilkan
    $sql = "SELECT * FROM t_data where nama = '" . $hehe . "'";
    $result = $connect->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "
            <div class='col-lg-6'>
            ID:" . $row["id"] . "
            Nama:" . $row["nama"] . "
            Alamat:" . $row["alamat"] . "
            Pekerjaan:" . $row["pekerjaan"] . "
            </div>";
        }
    } else {
        echo "0 Result";
    }
    $connect->close();
    ?>

</body>

</html>