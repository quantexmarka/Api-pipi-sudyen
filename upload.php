<?php
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $apiAdi = preg_replace('/[^a-z0-9]/', '', strtolower($_POST['apiAdi']));
    $icerik = $_POST['icerik'];

    if(empty($apiAdi) || empty($icerik)) {
        die("Hata");
    }

    $dosyaYolu = "api/" . $apiAdi . ".php";
    $phpIcerik = "<?php\nheader(\"Content-Type: text/plain\");\necho \"" . addslashes($icerik) . "\";\n?>";

    file_put_contents($dosyaYolu, $phpIcerik);
    echo "başarılı";
    exit;
}
?>
