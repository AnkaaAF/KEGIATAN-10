<?php
$url = "http://localhost/pwdkegiatan10/getdatamhs.php";
$client = curl_init($url);
curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($client);
$result = json_decode($response);
foreach ($result as $r) {
 echo "<p>";
 echo "nim : " . $r->nim . "<br />";
 echo "namaMHS : " . $r->namaMHS . "<br />";
 echo "jkel : " . $r->jkel . "<br />";
 echo "alamat : " . $r->alamat . "<br />";
 echo "tglhr : " . $r->tgllhr . "<br />";
 echo "prodi : " . $r->prodi . "<br />";
 echo "</p>";
}