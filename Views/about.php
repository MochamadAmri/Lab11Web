<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title; ?></title>
</head>
<body>
    <?= $this->include('template/header'); ?>
    <section id="about">
        <div class="row">
            <img src="MochamadAmri.JPG" title="Mochamad Amri Adrian Wiratama" alt="Mochamad Amri Adrian Wiratama" class="image-circle" width="200" style="float: left; border: 2px solid black;">
            <h1>Mochamad Amri Adrian Wiratama</h1>
            <p>Nama saya Mochamad Amri Adrian Wiratama, Saya adalah seorang mahasiswa Universitas Pelita Bangsa Jurusan Teknik Informatika. Saya lahir di Purwokerto, 13 Juli 1999.
            </p>
        </div>
    </section>
    <?= $this->include('template/footer'); ?>
</body>
</html>
