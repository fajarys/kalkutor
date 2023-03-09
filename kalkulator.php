<?php
$hasil = 0;

//Untuk melakukan eksekusi operasi Matematika Dasar.
if (isset($_POST['operator'])) {
    $bilangan1 = $_POST['bil1'];
    $bilangan2 = $_POST['bil2'];

    //Eksekusi Penjumlahan
    if (isset($_POST['tambah'])) {
        $hasil = $bilangan1 + $bilangan2;

        //Eksekusi Pengurangan
    } else if (isset($_POST['kurang'])) {
        $hasil = $bilangan1 - $bilangan2;

        //Eksekusi Peekalian
    } else if (isset($_POST['kali'])) {
        $hasil = $bilangan1 * $bilangan2;

        //Eksekusi Pembagian
    } else if (isset($_POST['bagi'])) {
        $hasil = $bilangan1 / $bilangan2;
    }
}
?>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Kalkulator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mx-auto mt-5">
                <div class="card">
                    <div class="card-header">
                        <h2 align="center">Kalkulator</h2>
                    </div>
                    <div class="card-body">

                        <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
                            <div class="form-group">
                                <label>Bilangan 1</label>
                                <input type="number" name="bil1" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Bilangan 2</label>
                                <input type="number" name="bil2" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="hidden" name="operator" value="operator">
                                <label>Pilihlah Operator</label><br>
                                <input type="submit" name="tambah" class="btn btn-primary" value="+">
                                <input type="submit" name="kurang" class="btn btn-primary" value="-">
                                <input type="submit" name="kali" class="btn btn-primary" value="x">
                                <input type="submit" name="bagi" class="btn btn-primary" value="/">
                            </div>
                        </form>
                        <div class="form-group">
                            Hasilnya : <?php echo $hasil; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>