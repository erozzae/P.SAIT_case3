<?php
$curl = curl_init();
curl_setopt($curl,CURLOPT_RETURNTRANSFER,True);
curl_setopt($curl,CURLOPT_URL,'http://localhost/sait_api_1.0/mahasiswa_api.php');
$res = curl_exec($curl);
$json = json_decode($res,true);

echo"<table border=1>
         <tr>
            <td width=200>Nim</td>
            <td width=200>Nama</td>
            <td width=200>Gender</td>
            <td width=200>Jurusan</td>
         </tr>";
foreach($json["data"] as $key => $data){
   echo "<tr><td> {$data['nim']} </td>
             <td> {$data['nama']} </td>
             <td> {$data['gender']} </td>
             <td> {$data['jurusan']} </td>
         </tr>";
}
echo"</table>";


?>


