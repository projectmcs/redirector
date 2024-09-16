<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Redirector</title>
  <script>
    // Fungsi untuk mendapatkan nilai query parameter
    function getParameterByName(name) {
      const urlParams = new URLSearchParams(window.location.search);
      return urlParams.get(name);
    }

    //=== Kode ===
    const kode = getParameterByName('kode');

    
    const domain = 'https://iabhi.or.id/certificatevalidity.php'; // domain tujuan redirect

    // Redirect ke domain dengan parameter 'kode'
    if (kode) {
      window.location.href = `${domain}?kode=${kode}`;
    } else {
      // Jika 'kode' tidak ada, tampilkan pesan kesalahan
      document.write("Kode tidak ditemukan!");
    }
  </script>
</head>
<body>
  <noscript>JavaScript diperlukan untuk melakukan redirect.</noscript>
</body>
</html>
