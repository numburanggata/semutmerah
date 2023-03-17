<style>
	a{
		font-weight: bold;
	}
</style>

<?php
	/* Check if required software is installed. Issue warning if not. */
 
	if (!$RequiredSoftwareHandler->isPHPCurlIsInstalled()){
		echo $RequiredSoftwareHandler->getNoCurlAdviceBasedOnOperatingSystem();
	}// end if

	if (!$RequiredSoftwareHandler->isPHPJSONIsInstalled()){
		echo $RequiredSoftwareHandler->getNoJSONAdviceBasedOnOperatingSystem();
	}// end if
?>

<table style="margin:0px;margin-top:5px;">
 	<tr>
		<td class="label" title="Apa itu DNS Lookup?">
			<a>
				<img align="middle" alt="Siberakyat LDIF File" src="./images/ldap-server-48-59.png" />
				Apa itu DNS Lookup?
			</a>
		</td>
	</tr>
	<tr>	
	<td>
DNS Lookup adalah proses menerjemahkan dan mencari IP dari suatu website. Jadi, sebelum Anda bisa melihat dan mengunduh semua  
resource dengan menggunakan browser, DNS lookup harus dijalankan terlebih dulu di semua domain yang menyediakan  informasi yang 
diminta.</td>
	</tr>
</table>
