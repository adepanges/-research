<h2 class="western" lang="id-ID"><span style="font-family: Tahoma, serif;">Beda Port</span></h2>
<p class="western" lang="id-ID"><span style="font-family: Tahoma, serif;"><span style="font-size: medium;"> Beda Port, ini digunakan jika kita ingin mejalankan 2 server apache yang berbeda, misalkan ada aplikasi Gg hanya bisa menggunakan xampp x.1 tapi ada aplikasi yang harus menggunakan xampp x.2 maka kita dapat menjalankan kedua xampp tersebut bersamaan dengan cara mengatur Port nya.</span></span></p>
<p class="western" lang="id-ID"><span style="font-family: Tahoma, serif;"><span style="font-size: medium;"><strong> Xampp Folder 1</strong></span></span></p>
<p class="western" lang="id-ID"><span style="font-family: Tahoma, serif;"><span style="font-size: medium;"> E:\xampp\</span></span></p>
<p class="western" lang="id-ID"><br /> </p>
<p class="western" lang="id-ID" align="justify"><span style="font-family: Tahoma, serif;"><span style="font-size: medium;"><em>Buka file E:\xampp\apache\conf\httpd.conf</em></span></span></p>
<p class="western" lang="id-ID"><span style="font-family: Tahoma, serif;"><span style="font-size: medium;">Cari script berikut</span></span></p>
<dl>
<dd>
<table width="554" cellspacing="0" cellpadding="7" bgcolor="#ffffff">
<tbody>
<tr>
<td style="background: #ffffff;" valign="top" bgcolor="#ffffff" width="538">
<p class="western" lang="id-ID"><span style="font-family: 'Courier New', serif;"><span style="font-size: medium;">Listen 80</span></span></p>
</td>
</tr>
</tbody>
</table>
</dd>
</dl>
<p class="western" lang="id-ID"><a name="_GoBack"></a> <br /> </p>
<p class="western" lang="id-ID"><span style="font-family: Tahoma, serif;"><span style="font-size: medium;">Dan</span></span></p>
<dl>
<dd>
<table width="554" cellspacing="0" cellpadding="7" bgcolor="#d9d9d9">
<tbody>
<tr>
<td style="background: #ffffff;" valign="top" bgcolor="#ffffff" width="538">
<p class="western" lang="id-ID"><span style="font-family: 'Courier New', serif;"><span style="font-size: medium;">ServerName localhost:80</span></span></p>
</td>
</tr>
</tbody>
</table>
</dd>
</dl>
<p class="western" lang="id-ID"><br /> </p>
<p class="western" lang="id-ID"><span style="font-family: Tahoma, serif;"><span style="font-size: medium;">Ganti angka 80 dengan angka lain untuk membedakan antara xampp satu dan lainya</span></span></p>
<p class="western" lang="id-ID"><span style="font-family: Tahoma, serif;"><span style="font-size: medium;">Misalkan kita mengganti dengan Port 8080 maka kita dapat mengakses </span></span></p>
<p class="western" lang="id-ID"><span style="font-family: Tahoma, serif;"><span style="font-size: medium;">http://localhost:8080/</span></span></p>
