<?php
	$lUserIDString = "";
	if($_SESSION['loggedin'] == "True"){
	    $lUserIDString = "&uid=" . $lUserID;
	} //end if
?>

<div id="smoothmenu1" class="ddsmoothmenu">
	<ul>
		<li>
                        <a href="index.php?page=home.php">Home</a>
                </li>
		<li>
			<?php
                                if ($_SESSION['loggedin'] == 'True'){
                                        echo '<a href="index.php?page=pencariansuper-dns.php">DNS Lookup</a>';
                                } else {
                                        echo '<a href="index.php?page=login.php">Login</a>';
                                }// end if
                        ?>
		</li>
				<li>
					<a href="https://bssn.go.id" target="_blank">
						CyberSecurity Indonesia
					</a>
				</li>
				<li>
					<a href="https://www.owasp.org/index.php/Top_Ten" target="_blank">
						OWASP Top Ten
					</a>
				</li>
				<li>
					<a href="https://addons.mozilla.org/en-US/firefox/collections/jdruin/pro-web-developer-qa-pack/" target="_blank">
					Web Penetration Testing Add-Ons
					</a>
				</li>
			</ul>
		</li>
	</ul>
</div>
