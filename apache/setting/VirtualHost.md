<h2 class="western" lang="id-ID"><span style="font-family: Tahoma, serif;"><span style="font-size: medium;">Virtual Host</span></span></h2>
<p class="western" lang="id-ID"><span style="font-family: Tahoma, serif;"><span style="font-size: medium;">Virtual Host, ini digunakan jika kita ingin membuat lebih dari satu domain di satu xampp</span></span></p>
<p class="western" lang="id-ID"><span style="font-family: Tahoma, serif;"><span style="font-size: medium;">Di sini saya akan membuat domain baru yaitu </span></span><span style="font-family: Tahoma, serif;"><span style="font-size: medium;"><em>arsip.big</em></span></span><span style="font-family: Tahoma, serif;"><span style="font-size: medium;"> karena aplikasi ini harus berjalan di server root jadi diakalin pakai modul ini</span></span></p>
<p class="western" lang="id-ID"><span style="font-family: Tahoma, serif;"><span style="font-size: medium;"><strong> Xampp Folder</strong></span></span></p>
<p class="western" lang="id-ID"><span style="font-family: Tahoma, serif;"><span style="font-size: medium;"> E:\xampp\</span></span></p>
<p class="western" lang="id-ID"><br /> </p>
<p class="western" lang="id-ID"><span style="font-family: Tahoma, serif;"><span style="font-size: medium;"><em>Buka file C:\Windows\System32\Drivers\etc\host</em></span></span></p>
<p class="western" lang="id-ID"><span style="font-family: Tahoma, serif;"><span style="font-size: medium;">Tambahkan script ini di akhir baris</span></span></p>
<dl>
<dd>
<table width="554" cellspacing="0" cellpadding="7">
<tbody>
<tr>
<td valign="top" width="538">
<p class="western" lang="id-ID"><span style="font-family: 'Courier New', serif;"><span style="font-size: medium;">127.0.0.1 arsip.big</span></span></p>
</td>
</tr>
</tbody>
</table>
</dd>
</dl>
<p class="western" lang="id-ID"><br /> </p>
<p class="western" lang="id-ID" align="justify"><span style="font-family: Tahoma, serif;"><span style="font-size: medium;"><em>Buka file E:\xampp\apache\conf\httpd.conf</em></span></span></p>
<dl>
<dd>
<table width="554" cellspacing="0" cellpadding="7">
<tbody>
<tr>
<td valign="top" width="538">
<p class="western" lang="id-ID"><span style="font-family: 'Courier New', serif;"><span style="font-size: medium;"># Virtual hosts</span></span></p>
<p class="western" lang="id-ID"><span style="font-family: 'Courier New', serif;"><span style="font-size: medium;">Include "conf/extra/httpd-vhosts.conf"</span></span></p>
</td>
</tr>
</tbody>
</table>
</dd>
</dl>
<p class="western" lang="id-ID" align="justify"><br /> </p>
<p class="western" lang="id-ID"><span style="font-family: Tahoma, serif;"><span style="font-size: medium;">Pastikan hashtag didepan include sudah dihilangkan</span></span></p>
<p class="western" lang="id-ID"><br /> </p>
<p class="western" lang="id-ID"><span style="font-family: Tahoma, serif;"><span style="font-size: medium;"><em>Buka file E:\xampp\apache\conf\extra\httpd-vhosts.conf</em></span></span></p>
<p class="western" lang="id-ID"><span style="font-family: Tahoma, serif;"><span style="font-size: medium;">Tambahkan script berikut diakhir baris</span></span></p>
<dl>
<dd>
<table width="554" cellspacing="0" cellpadding="7">
<tbody>
<tr>
<td valign="top" width="538">
<p class="western" lang="id-ID"><span style="font-family: 'Courier New', serif;"><span style="font-size: medium;">&lt;VirtualHost arsip.big:80&gt;</span></span></p>
<p class="western" lang="id-ID"><span style="font-family: 'Courier New', serif;"><span style="font-size: medium;">ServerAdmin postmaster@arsip.big</span></span></p>
<p class="western" lang="id-ID"><span style="font-family: 'Courier New', serif;"><span style="font-size: medium;">DocumentRoot "E:/KERJAAN/TRASPAC/arsip_v1_big"</span></span></p>
<p class="western" lang="id-ID"><span style="font-family: 'Courier New', serif;"><span style="font-size: medium;">ServerName arsip.big</span></span></p>
<p class="western" lang="id-ID"><span style="font-family: 'Courier New', serif;"><span style="font-size: medium;">ServerAlias arsip.big</span></span></p>
<p class="western" lang="id-ID"><span style="font-family: 'Courier New', serif;"><span style="font-size: medium;">ErrorLog "logs/arsip.big.log"</span></span></p>
<p class="western" lang="id-ID"><span style="font-family: 'Courier New', serif;"><span style="font-size: medium;">CustomLog "logs/arsip.big-access.log" combined</span></span></p>
<p class="western" lang="id-ID"><span style="font-family: 'Courier New', serif;"><span style="font-size: medium;">&lt;/VirtualHost&gt;</span></span></p>
</td>
</tr>
</tbody>
</table>
</dd>
</dl>
<p class="western" lang="id-ID"><br /> </p>
<p class="western" lang="id-ID"><span style="font-family: Tahoma, serif;"><span style="font-size: medium;">Restart apache dan coba buka di browser sekarang sudah ada 2 domain di local anda</span></span></p>
<p class="western" lang="id-ID"><a href="http://localhost/"><span style="font-family: Tahoma, serif;"><span style="font-size: medium;">http://localhost/</span></span></a></p>
<p class="western" lang="id-ID"><span style="font-family: Tahoma, serif;"><span style="font-size: medium;">http://arsip.big/</span></span></p>
<p class="western" lang="id-ID"><br /> </p>
