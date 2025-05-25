<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Reflektif</title>

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        body {
            padding-top: 70px;
            background-color: #f9f9f9;
        }
        .navbar {
            background-color: #007bff;
        }
        .navbar a {
            color: white !important;
        }
        .content {
            max-width: 900px;
            margin: auto;
            background-color: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }
        img {
            max-width: 100%;
            border-radius: 10px;
        }
        blockquote {
            margin-top: 20px;
            padding: 15px;
            background-color: #e9f5ff;
            border-left: 5px solid #0d6efd;
            font-style: italic;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg fixed-top shadow">
    <div class="container">
        <a class="navbar-brand text-white fw-bold" href="#">Blog Reflektif</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="profilinteraktif.php">Profil Interaktif</a></li>
                <li class="nav-item"><a class="nav-link" href="timeline.php">Timeline</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="content">
<?php
$artikel = [
    [
        'judul' => 'Manfaat Konsultasi Psikologi untuk Kesehatan Mental',
        'file' => '1',
        'tanggal' => '20 Mei 2025',
        'gambar' => 'psikolog.png',
        'sumber' => 'https://www.alodokter.com/memanfaatkan-konsultasi-psikologi-untuk-meningkatkan-kesehatan-mental',
        'kutipan' => [
            "kuliah sewajarnya, kalo sakit, mati, keluarga yang sedih, kampus mah tinggal cari mahasiswa lagi.",
        ]
    ],
    [
        'judul' => 'Baskara ‘Hindia’ Putra dan Lagu-lagunya yang Diklaim Menyembuhkan Depresi',
        'file' => '2',
        'tanggal' => '21 Mei 2025',
        'gambar' => 'hindia.jpg',
        'sumber' => 'https://mojok.co/terminal/baskara-hindia-putra-dan-lagu-lagunya-yang-diklaim-menyembuhkan-depresi/',
        'kutipan' => [
            "kau tau ku tak minta di lahirkan juga",
        ]
    ],
    [
        'judul' => 'Pentingnya Someone To Talk',
        'file' => '3',
        'tanggal' => '22 Mei 2025',
        'gambar' => 'deep-talk-artinya.png',
        'sumber' => 'https://health.indozone.id/mental-health/485537645/6-pengaruh-curhat-terhadap-kesehatan-mental-kenapa-someone-to-talk-itu-penting',
        'kutipan' => [
            "petingnya samwan tu talk bagi asprak, agar ga dendam sama praktikan nya",
        ]
    ]
];

function tampilkanKutipan($list) {
    return $list[rand(0, count($list)-1)];
}

if (isset($_GET['id'])) {
    $id = $_GET['id'] - 1;
    if (isset($artikel[$id])) {
        $post = $artikel[$id];
        echo "<h2>{$post['judul']}</h2>";
        echo "<p class='text-muted'><i>Diposting pada: {$post['tanggal']}</i></p>";
        echo "<img src='{$post['gambar']}' alt='{$post['judul']}' class='mb-4'><br>";

        if ($id == 0) {
            echo '<p>Konsultasi psikologi merupakan salah satu cara untuk mengatasi masalah atau gangguan mental. Namun, tak sedikit orang yang merasa malu dan menganggap bahwa konsultasi dengan psikolog hanya untuk orang dengan gangguan jiwa. Padahal, kesehatan mental sama pentingnya dengan kesehatan fisik. Konsultasi psikologi adalah kegiatan komunikasi dua arah antara pasien dan psikolog untuk mencari solusi atas masalah perasaan, perilaku, atau gangguan mental yang dialami pasien. Solusi ini diberikan berdasarkan kondisi kejiwaan dan cara berpikir pasien serta pengaruhnya terhadap perilaku pasien yang dinilai psikolog selama konsultasi.</p>';
            echo "<a href='{$post['sumber']}' class='btn btn-link'>Selengkapnya</a>";
        } elseif ($id == 1) {
            echo '<p>Akhir-akhir ini Hindia seolah dipuja semua orang terutama dari kalangan milenial. Banyak sekali kicauan di Twitter maupun komentar di YouTube yang mengucapkan terima kasih kepada Baskara atas lagu-lagu yang ia ciptakan. Yang membuat saya mengerutkan kening, ada ucapan terima kasih karena saat mendengarkan lagu Hindia si pendengar jadi sembuh dari depresi. Depresi bagaimana yang dialami si pemberi komentar, sampai-sampai begitu hebatnya efek lagu-lagu Hindia bisa mengobati depresinya? pikir saya. Memang benar lagu-lagu Hindia mengajarkan fase acceptance terhadap masalah yang kita alami. Tapi untuk menyembuhkan depresi? Saya rasa tidak semudah mendengarkan lagu. Sejak membaca komentar itu, saya mulai mengobservasi teman-teman sendiri. Rupanya banyak juga yang baru-baru ini memproklamirkan diri sebagai fans Hindia. Ketika saya bertanya kenapa kamu suka Hindia, jawaban mereka sama. Lagu-lagu Hindia related dengan masalah mereka, yaitu depresi. Saya paham, usia 21 tahun ke atas jadi momen yang rentan akan quarter life crisis. Saya juga merasakannya. Tetapi apa pantas kita mendiagnosis diri mengidap depresi tanpa sekal ipun berkonsultasi ke psikolog atau pskiater, saya rasa tidak. Kalian perlu tahu, alasan terbesar bunuh diri di Indonesia adalah karena depresi. Hal tersebut tidak bisa dianggap enteng mengingat kasus bunuh diri di Indonesia makin tahun makin melonjak. Menurut Riset Kesehatan Dasar Kemenkes tahun 2018, sebanyak 6,1% penduduk Indonesia berusia 15 tahun ke atas mengalami depresi. Artinya, dari 170 juta populasi berusia 15 tahun ke atas pada 2018, sebanyak 10,37 orang depresi. Seram? Tentu saja. Karena itu, depresi bukan hal sembarangan. Depresi berbeda dengan penyakit lain yang yang bisa terdekteksi dengan tes laboratorium. Hanya modal baca di internet soal gejala depresi lalu kemudian merasa bahwa dirinya mengidap depresi, saya harap kalian jangan seperti itu.</p>';
            echo "<a href='{$post['sumber']}' class='btn btn-link'>Baca selengkapnya di sini yaa!!!</a>";
        } else {
            echo '<p>Halo semua! Sehat kan?! Semoga kita semua dalam keadaan sehat yaa sehingga bisa menjalankan apa yang menjadi kewajiban kita…
        Disini aku mau menulis sedikit tentang someone to talk, yang terkadang beberapa orang mengabaikan hal tersebut.
        Generasi muda sekarang tentu tidak asing lagi dengan istilah “Someone to talk”. Istilah tersebut dapat diartikan bahwa seseorang yang dapat kita ajak bicara atau curhat lah ya bahasa gaulnya. Banyak kalangan yang menyebut bahwa someone to talk itu adalah pacar. Tapi, dengan hasil yang aku amati serta dari pengalaman pribadi, ternyata tidak. Someone to talk tidak hanya pacar saja, melainkan teman dekat yang bisa kita percaya atau bahkan orang tua kita. Asalkan kamu percaya dengan orang tersebut, kamu boleh bercerita.
        Kenapa sih kita membutuhkan someone to talk? <br>
        Mungkin kalian semua juga sudah mengetahui apa pentingnya. Someone to talk itu penting banget menurut aku. Karena secara tidak langsung kita bisa mengurangi beban pada pikiran kita. Walaupun orang yang kita ajak bicara tersebut tidak mempunyai jalan keluar untuk permasalahan yang kita hadapi, tapi setidaknya masalah yang kita punya tidak kita pendam sendiri.   
        Jika kita memendam masalah kita sendiri tanpa ada orang yang kita ajak bicara, kemungkinan kesehatan mental kita juga akan terganggu. Akibat kesehatan mental yang terganggu tentu sangat bermacam macam, bahkan bisa membawa kepada kematian. Kenapa? Karena ketika kita memiliki masalah yang tidak ada jalan keluarnya, otomatis masalah tersebut akan tertimbun dalam pikirann kita. Kita jadi kepikiran, tertekan, stress, depresi, sehingga memicu kita untuk berbuat sesuatu yang berbahaya, seperti mengakhiri hidup di dunia dan semacamnya.
        Gimana kalo ga punya someone to talk?
        Buat kalian yang sama sekali tidak punya someone to talk, menurutku kalian bisa menuliskannya di sosial media. Kalian bisa mengungkapkan apa yang kalian rasakan lewat tulisan. Setidaknya kalian bisa terbuka lewat tulisan yang kalian buat sendiri. Aku juga pernah membaca dari pengalaman seorang influencer di Indonesia. Ia sangat terpukul dan tertekan dengan masalah yang dihadapinya, dan ia sama sekali tidak memiliki teman untuk ia ajak bicara. Ia kemudian berinisiatif untuk menuliskan apa yang sedang ia rasakan di sebuah buku, dan akhirnya buku tersebut menjadi sebuah karya kebanggannya. Tapi menurutku pribadi, kalian juga harus terbuka kepada orang orang yang kalian percaya, misalkan orang tua atau saudara.
        Jadi aku tekankan sekali lagi, someone to talk atau orang yang diajak bicara tidak hanya pacar saja, melainkan adalah orang yang menurut kalian bisa dipercaya, perempuan atau laki laki terserah kalian yang penting kalian dekat, dan saling mempercayai. Eits… tapi ingat yaa, cerita seperlunya saja, jangan terlalu oversharing yaaah!
        Mungkin itu yang bisa aku tulis. Bagi kalian yang merasa terbantu, ya aku bersyukur. Tapi jika kalian merasa tulisan ini tidak ada gunanya, jangan diterusin bacanya yaaa… salam sehat!</p>';
            echo "<a href='{$post['sumber']}' class='btn btn-link'>6 Pengaruh Curhat Terhadap Kesehatan Mental</a>";
        }

        echo "<blockquote>Kutipan: \"" . tampilkanKutipan($post['kutipan']) . "\"</blockquote>";
        echo '<a href="blogreflektif.php" class="btn btn-primary mt-3">Kembali ke daftar artikel</a>';
    } else {
        echo "<p class='text-danger'>Artikel tidak ditemukan.</p>";
    }
} else {
    echo "<h3>Daftar Artikel:</h3><ul class='list-group'>";
    foreach ($artikel as $index => $post) {
        $no = $index + 1;
        echo "<li class='list-group-item'><a href='blogreflektif.php?id=$no'>{$post['judul']} <span class='text-muted'>({$post['tanggal']})</span></a></li>";
    }
    echo "</ul>";
}
?>
</div>

</body>
</html>