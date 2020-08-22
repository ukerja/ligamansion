<html>
<head>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
</head>
<body>
    <div style="float: left;margin-right: 10px;">
        <img src="cid:logo_mynotescode" alt="Logo" style="height: 50px">
    </div>
    <h2 style="margin-bottom: 0;">LIGAMANSION.COM</h2>
    <div style="clear: both"></div>
    <hr />
	<h2 style="text-align:center;"><?php echo $subjek; // Tampilkan isi pesan ?></h2>
    <div style="text-align: justify">
		<table>
			<!--<tr>
				<td>
					Nama Lengkap
				</td>
				<td>
				
				</td>
			</tr>-->
			<tr>
				<td>
					Email
				</td>
				<td>
					: <?php echo $email; // Tampilkan isi pesan ?>
				</td>
			</tr>
			<tr>
				<td>
					No WhatsApp
				</td>
				<td>
					: <?php echo $nowa; // Tampilkan isi pesan ?>
				</td>
			</tr>
			<tr>
				<td>
					Bank
				</td>
				<td>
					: <?php echo $bank . ' ' .$_txtBankLainnya; // Tampilkan isi pesan ?>
				</td>
			</tr>
			<tr>
				<td>
					Nama Rekening
				</td>
				<td>
					: <?php echo $namarekening; // Tampilkan isi pesan ?>
				</td>
			</tr>
			<tr>
				<td>
					Nomor Rekening
				</td>
				<td>
					: <?php echo $nomorrekening; // Tampilkan isi pesan ?>
				</td>
			</tr>
			<tr>
				<td>
					Jenis Permainan
				</td>
				<td>
					: <?php echo $jenispermainan; // Tampilkan isi pesan ?>
				</td>
			</tr>
		</table>
		<br/>
		<a><i>This is auto send mail by Ligamansion.com.
		Please don't reply this email.</i>
		</a>
    </div>
</body>
</html>