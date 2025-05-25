<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Profil Interaktif Mahasiswa</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        <style>
    body {
        background-color: #f0f8ff;
    }
    .container {
        background-color: #ffffff;
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 0 15px rgba(0,0,0,0.1);
        margin-top: 40px;
    }
    h1, h2 {
        color: #007bff;
    }
    .profil-foto {
        width: 150px;
        border-radius: 10px;
    }
    .profil-info {
        display: flex;
        align-items: center;
        gap: 20px;
        margin-bottom: 20px;
    }
    .navbar .nav-link,
    .navbar .navbar-brand {
        color: #ffffff !important;
    }
</style>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Profil Mahasiswa</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="timeline.php">Timeline</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="blogreflektif.php">Blog Reflektif</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <h1 class="text-center mb-4">Profil Interaktif Mahasiswa</h1>

    <!-- Foto + Informasi Pribadi -->
    <div class="profil-info">
        <!-- Ganti nama file sesuai gambar formal kamu -->
        <img src="FOTO FORMAL.jpg" alt="Foto Formal" class="profil-foto">
        <table class="table table-bordered w-100">
            <tr><th>Informasi</th><th>Detail</th></tr>
            <tr><td>Nama</td><td>Dian Wildan Primantara Putra</td></tr>
            <tr><td>NIM</td><td>240441100064</td></tr>
            <tr><td>Tempat, Tanggal Lahir</td><td>Pamekasan, 30-04-2006</td></tr>
            <tr><td>Email</td><td>dianwildanp@gmail.com</td></tr>
            <tr><td>Nomor HP</td><td>087717511477</td></tr>
        </table>
    </div>

    <!-- Formulir Input -->
    <h2>Form Isian</h2>
    <form method="post">
        <div class="mb-3">
            <label class="form-label">Bahasa Pemrograman yang Dikuasai:</label><br>
            <?php
                $bahasaList = ['Python', 'JavaScript', 'PHP', 'C++'];
                foreach ($bahasaList as $b) {
                    echo "<div class='form-check form-check-inline'>
                        <input class='form-check-input' type='checkbox' name='bahasa[]' value='$b' id='bahasa_$b'>
                        <label class='form-check-label' for='bahasa_$b'>$b</label>
                    </div>";
                }
            ?>
        </div>

        <div class="mb-3">
            <label for="pengalaman" class="form-label">Deskripsi Pengalaman Proyek:</label>
            <textarea class="form-control" id="pengalaman" name="pengalaman" rows="3" required></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Software yang Sering Digunakan:</label><br>
            <?php
                $softwareList = ['VS Code', 'XAMPP', 'Git'];
                foreach ($softwareList as $s) {
                    echo "<div class='form-check form-check-inline'>
                        <input class='form-check-input' type='checkbox' name='software[]' value='$s' id='software_$s'>
                        <label class='form-check-label' for='software_$s'>$s</label>
                    </div>";
                }
            ?>
        </div>

        <div class="mb-3">
            <label class="form-label">Sistem Operasi yang Digunakan:</label><br>
            <?php
                $osList = ['Windows', 'Linux', 'Mac'];
                foreach ($osList as $os) {
                    echo "<div class='form-check form-check-inline'>
                        <input class='form-check-input' type='radio' name='os' value='$os' id='os_$os' required>
                        <label class='form-check-label' for='os_$os'>$os</label>
                    </div>";
                }
            ?>
        </div>

        <div class="mb-3">
            <label for="tingkat" class="form-label">Tingkat Penguasaan PHP:</label>
            <select class="form-select" name="tingkat" id="tingkat" required>
                <option value="">-- Pilih --</option>
                <option value="Pemula">Pemula</option>
                <option value="Menengah">Menengah</option>
                <option value="Mahir">Mahir</option>
            </select>
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Kirim</button>
    </form>

    <!-- Hasil -->
    <?php
    if (isset($_POST['submit'])) {
        $valid = !empty($_POST['bahasa']) && !empty($_POST['pengalaman']) &&
                 !empty($_POST['software']) && !empty($_POST['os']) &&
                 !empty($_POST['tingkat']);

        if ($valid) {
            $bahasa = $_POST['bahasa'];
            $pengalaman = htmlspecialchars($_POST['pengalaman']);
            $software = $_POST['software'];
            $os = $_POST['os'];
            $tingkat = $_POST['tingkat'];

            echo "<h2 class='mt-5'>Hasil Input</h2>";
            echo "<table class='table table-bordered'>
                    <tr><td><strong>Bahasa Pemrograman</strong></td><td>" . implode(', ', $bahasa) . "</td></tr>
                    <tr><td><strong>Pengalaman</strong></td><td>$pengalaman</td></tr>
                    <tr><td><strong>Software</strong></td><td>" . implode(', ', $software) . "</td></tr>
                    <tr><td><strong>Sistem Operasi</strong></td><td>$os</td></tr>
                    <tr><td><strong>Tingkat PHP</strong></td><td>$tingkat</td></tr>
                  </table>";

            if (count($bahasa) > 2) {
                echo "<div class='alert alert-success'>Anda cukup berpengalaman dalam pemrograman!</div>";
            }
        } else {
            echo "<div class='alert alert-danger mt-4'>Semua input wajib diisi!</div>";
        }
    }
    ?>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>