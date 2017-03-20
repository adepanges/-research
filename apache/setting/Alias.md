<p class="western" lang="id-ID"><br /> </p>
<h2 class="western" lang="id-ID"><span style="font-family: Tahoma, serif;">Alias (alias_module)</span></h2>
<p class="western" lang="id-ID" align="justify"><span style="font-family: Tahoma, serif;"><span style="font-size: medium;"> Penggunaan untuk alias ini adalah ketika kita membutuhkan folder Web kita agar dapat diakses tanpa meletaknya nya di Dokumen Root (default htdocs)</span></span></p>
<p class="western" lang="id-ID"><span style="font-family: Tahoma, serif;"><span style="font-size: medium;"><strong> Xampp Folder</strong></span></span></p>
<p class="western" lang="id-ID"><span style="font-family: Tahoma, serif;"><span style="font-size: medium;"> E:\xampp\</span></span></p>
<p class="western" lang="id-ID"><span style="font-family: Tahoma, serif;"><span style="font-size: medium;"><strong>Masalah</strong></span></span></p>
<p class="western" lang="id-ID" align="justify"><span style="font-family: Tahoma, serif;"><span style="font-size: medium;">Misalkan kita mempunyai folder master di E:/MASTER dan kita ingin mengakses nya dari Web server yg kita punya tanpa memindah folder master tersebut ke folder htdoc kita bisa menggunakan alias_module dari apache ini</span></span></p>
<p class="western" lang="id-ID" align="justify"><span style="font-family: Tahoma, serif;"><span style="font-size: medium;"><em>Buka file E:\xampp\apache\conf\httpd.conf</em></span></span></p>
<p class="western" lang="id-ID" align="justify"><span style="font-family: Tahoma, serif;"><span style="font-size: medium;"><strong>Di akhir file taruh script berikut</strong></span></span></p>
<dl>
<dd>
<table width="554" cellspacing="0" cellpadding="7">
<tbody>
<tr>
<td valign="top" width="538">
<p class="western" lang="id-ID" align="justify"><span style="font-family: 'Courier New', serif;"><span style="font-size: medium;">&lt;IfModule alias_module&gt;</span></span></p>
<p class="western" lang="id-ID" align="justify"><span style="font-family: 'Courier New', serif;"><span style="font-size: medium;">Alias /master "E:/MASTER/"</span></span></p>
<p class="western" lang="id-ID" align="justify"><span style="font-family: 'Courier New', serif;"><span style="font-size: medium;">&lt;Directory "E:/MASTER"&gt;</span></span></p>
<p class="western" lang="id-ID" align="justify"><span style="font-family: 'Courier New', serif;"><span style="font-size: medium;">Options Indexes MultiViews</span></span></p>
<p class="western" lang="id-ID" align="justify"><span style="font-family: 'Courier New', serif;"><span style="font-size: medium;">AllowOverride None</span></span></p>
<p class="western" lang="id-ID" align="justify"><span style="font-family: 'Courier New', serif;"><span style="font-size: medium;">Order allow,deny</span></span></p>
<p class="western" lang="id-ID" align="justify"><span style="font-family: 'Courier New', serif;"><span style="font-size: medium;">Allow from all</span></span></p>
<p class="western" lang="id-ID" align="justify"><span style="font-family: 'Courier New', serif;"><span style="font-size: medium;">&lt;/Directory&gt;</span></span></p>
<p class="western" lang="id-ID" align="justify"><span style="font-family: 'Courier New', serif;"><span style="font-size: medium;">&lt;/IfModule&gt;</span></span></p>
</td>
</tr>
</tbody>
</table>
</dd>
</dl>
<p class="western" lang="id-ID" align="justify"><br /> </p>
<p class="western" lang="id-ID" align="justify"><span style="font-family: Tahoma, serif;"><span style="font-size: medium;">Dari setting-an di atas kita bisa meng akses folder E:\MASTER di Wet server dengan meong akses <a href="http://localhost/master">http://localhost/master</a></span></span></p>
