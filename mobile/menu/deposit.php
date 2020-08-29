	<?php 
	include '../template/header.php'; 
	?>
<div class="contactmain">
        <div class="container">
            <div class="row">
                <li class="col-sm-12">
                    <div>
	
                        <ul>
                            <li class="" style="text-align: left;">							
                                    <label>
                                        Informasi Deposit
                                    </label>
                                       <p>1. Setelah Anda Melakukan Transfer Dana Ke Kami, Silahkan Anda Mengisi Form Konfirmasi Deposit ini.</p>

									   <p>2. Member Yang Melakukan Deposit Wajib Mengisi Data Yang Benar dan Lengkap.</p>

									   <p>3. Minimal Untuk Melakukan Deposit Rp.50.000,.</p>

									   <p>4. Deposit Akan Dapat Di Proses Apabila Dana Sudah Masuk Ke Dalam Rekening Mutasi Kami.</p>

									   <p>5. Saat Bank Sedang Offline / Gangguan Harap Mohon Di Tunggu Sampai Bank Online / Sudah Normal Kembali, Setelah Online / Normal Kembali Saldo Anda Akan Langsung Kami Proseskan Ke Dalam Akun Anda.</p>

									   <p>Terima Kasih Atas Perhatiannya.</p></li>
                            
                                <li><label>User ID<span style="color: #ff0000">*</span></label>						
                                <input name="_txtUserID" type="text" maxlength="100" id="_txtUserID" class="login_inputbox" placeholder="User ID" autocomplete="false">
								<!--<span id="ctl00_ContentPlaceHolder1_rfvEmail" style="color:Red;display:none;"></span>-->
                                <span id="ctl00_ContentPlaceHolder1_revEmail" style="color:Red;display:none;"></span>
                            
							
                                <li><label>Nama Rekening Depositor<span style="color: #ff0000">*</span></label>							
                                <input name="_txtNamaRekening" type="text" maxlength="100" id="_txtNamaRekening" class="login_inputbox" placeholder="Nama Rekening Depositor" autocomplete="off">
								<span id="ctl00_ContentPlaceHolder1_rfvUsername" style="color:Red;display:none;"></span>
                                <span id="ctl00_ContentPlaceHolder1_revUsername" style="color:Red;display:none;"></span>
                                                        
                            
                                <li><label>Tujuan Deposit<span style="color: #ff0000">*</span></label>
								<select name="_ddlBank" id="_ddlBank" class="login_inputbox" style="padding:5px;margin-bottom:20px;">
									<option value="">-- Pilih Bank --</option>
									<option value="BCA">BCA</option>
									<option value="MANDIRI">MANDIRI</option>
									<option value="BNI">BNI</option>
									<option value="BRI">BRI</option>
									<option value="CIMB">CIMB</option>
									<option value="OVO">OVO</option>
								</select>
								<button class="btn btn-style-one orange" id="_btnIBANKING" disabled style="height: 35px;padding: 0;top: 0;position: unset;font-size:20px;border-radius:0;border:0;">
									<div id="ibank-img" class=""></div>
									i-Banking
								</button>
                                <span id="ctl00_ContentPlaceHolder1_RequiredFieldValidator1" style="color:Red;display:none;"></span>                           
                            
                            
                               <li> <label>Jenis Permainan<span style="color: #ff0000">*</span></label>		
							   <select name="_ddlJenisPermainan" id="_ddlJenisPermainan" class="login_inputbox" style="padding:5px;">
									<option value="">-- Pilih Permainan --</option>
									<option value="Sbobet">Sbobet</option>
									<option value="Maxbet">Maxbet</option>
									<option value="Ion Casino">Ion Casino</option>
									<option value="Sabung Ayam">Sabung Ayam</option>
									<option value="Tangkasnet">Tangkasnet</option>
									<option value="Sexy Gaming">Sexy Gaming</option>
									<option value="Joker Gaming">Joker Gaming</option>
								</select>
							   </li>
							   
                                <li><label>Jumlah Deposit<span style="color: #ff0000">*</span></label>
								<input value="0" maxlength="11" oncopy="return false;" onpaste="return false" name="_JumlahDeposit" type="text" maxlength="20" id="_JumlahDeposit" class="login_inputbox" placeholder="Jumlah Deposit" autocomplete="off">
								<button type="button" style="height: 39px;top: 29px;right: 0px;">IDR</button>
								<span id="ctl00_ContentPlaceHolder1_rfvPassword" style="color:Red;display:none;"></span>
                                <span id="ctl00_ContentPlaceHolder1_revPassword" style="color:Red;display:none;"></span></li>
                            
							<li style="display:none;">							
								<input type="file" name="attachment" id="_attachment" style="margin-top: 5px;width: 400px" hidden /></li>
							
                            
                              <li>  <input type="button" name="_btnSubmit" value="DEPOSIT" id="_btnSubmit" class="btn-style-one orange" />
                            <div id="ctl00_ContentPlaceHolder1_validation1" style="color:Red;display:none;"></li>

	</div>
                            With click DEPOSIT buttons, I mentioned that i was above 18 years and have read and approved terms &amp; condition of LIGAMANSION..
                        </ul>
                    
</div>
                
            </div>
        </div>
    </div>
	        <?php 
	include '../template/footer.php'; 
	?>
	<script type="text/javascript">
		
		function validasiSubmit(){
			
			var okTitle, ok = "";
			var bol = false;
			var number = 0;

			okTitle = "Peringatan!";
			//ok = "<ul><li>Please complete the following fields : ";
			ok = "Silahkan Lengkapi Form Dibawah Ini : <br />";
			
			// if ($('#_txtFullName').val().replace(/\s/g, "") == '' || $('#_txtFullName').val().length == 0) {
				// bol = true;
				// number++;
				// ok += " " + number + ".  <b>Nama Lengkap</b> <br /> ";
				// bol = true;
				// $('#_txtFullName').addClass("is-Invalid");
				
				// if ($('#_txtFullName').val().replace(/\s/g, "") == '') {
					// $('#_txtFullName').val("");
				// }
			// }
			
			if ($('#_txtUserID').val().replace(/\s/g, "") == '' || $('#_txtUserID').val().length == 0) {
				bol = true;
				number++;
				ok += " " + number + ".  <b>User ID</b> <br /> ";
				bol = true;
				$('#_txtUserID').addClass("is-Invalid");
				
				if ($('#_txtUserID').val().replace(/\s/g, "") == '') {
					$('#_txtUserID').val("");
				}
			}
			
			if ($('#_txtNamaRekening').val().replace(/\s/g, "") == '' || $('#_txtNamaRekening').val().length == 0) {
				bol = true;
				number++;
				ok += " " + number + ".  <b>Nama Rekening</b> <br /> ";
				bol = true;
				$('#_txtNamaRekening').addClass("is-Invalid");
				
				if ($('#_txtNamaRekening').val().replace(/\s/g, "") == '') {
					$('#_txtNamaRekening').val("");
				}
			}	
			
			if ($('#_ddlBank').val().replace(/\s/g, "") == '' || $('#_ddlBank').val().length == 0) {
				bol = true;
				number++;
				ok += " " + number + ".  <b>Tujuan Deposit</b> <br /> ";
				bol = true;
				$('#_ddlBank').addClass("is-Invalid");
				
				if ($('#_ddlBank').val().replace(/\s/g, "") == '') {
					$('#_ddlBank').val("");
				}
			}
			
			if ($('#_ddlJenisPermainan').val().replace(/\s/g, "") == '' || $('#_ddlJenisPermainan').val().length == 0) {
				bol = true;
				number++;
				ok += " " + number + ".  <b>Jenis Permainan</b> <br /> ";
				bol = true;
				$('#_ddlJenisPermainan').addClass("is-Invalid");
				
				if ($('#_ddlJenisPermainan').val().replace(/\s/g, "") == '') {
					$('#_ddlJenisPermainan').val("");
				}
			}
			
			if ($('#_JumlahDeposit').val().replace(/\s/g, "") == '' || $('#_JumlahDeposit').val().length == 0 || $('#_JumlahDeposit').val().length <= 2) {
				bol = true;
				number++;
				ok += " " + number + ".  <b>Jumlah Deposit</b> <br /> ";
				bol = true;
				$('#_JumlahDeposit').addClass("is-Invalid");
				
				if ($('#_JumlahDeposit').val().replace(/\s/g, "") == '') {
					$('#_JumlahDeposit').val("");
				}
			}
			
			if(bol == true){				
				Lobibox.notify('warning', {
					title: '' + okTitle + '',
					msg: '' + ok + '',
					position: 'top right',
					delay: 5000,
					messageHeight: false,
					pauseDelayOnHover: true,
					continueDelayOnInactiveTab: false,
				});
			}else{
				var fileUpload = $("#_attachment").get(0);
				var files = fileUpload.files;	
				var	jenispermainan = "";			
				var myFormData = new FormData();
						
				$.each($("input[name='cbPermainan']:checked"), function () {
					jenispermainan += ", " + $(this).attr("jenis-permainan");
				});
				
				jenispermainan = jenispermainan.substring(2);
				
				if(files.length > 0){					
					myFormData.append('attachment', files[0]);
					myFormData.append('isAttachment', "true");
				}else{
					myFormData.append('attachment', "");
					myFormData.append('isAttachment', "false");
				}
				myFormData.append('email_penerima', 'ligamansiondeposit@gmail.com');
				myFormData.append('subjek', 'DEPOSIT');
				myFormData.append('pesan', 'DEPOSIT');
				
				// myFormData.append('namalengkap', $('#_txtFullName').val().toUpperCase());
				myFormData.append('userid', $('#_txtUserID').val());
				myFormData.append('jumlah', $('#_JumlahDeposit').val());
				myFormData.append('bank', $('#_ddlBank').val());
				
				myFormData.append('namarekening', $('#_txtNamaRekening').val().toUpperCase());
				myFormData.append('jenispermainan', $('#_ddlJenisPermainan').val());
				myFormData.append('jenisemail', 'DEPOSIT');
				myFormData.append('email', '');
				myFormData.append('nowa', '');
				myFormData.append('banklainnya', '');
				myFormData.append('nomorrekening', '');
				
				 $.ajax({
					url:"email_php/send.php", //the page containing php script
					type: "Post", //request type,	
					// cache: false,
					processData: false, // important
					contentType: false, // important				
					data: myFormData,					
					beforeSend: function () {
					   showLoading();
					},
					complete: function () {
					   closeLoading();
					},
					success:function(result){	
						if(result == "Berhasil"){							
                            Lobibox.notify('success', {
                                title: 'Berhasil',
                                msg: 'Berhasil Mengirimkan Data',
                                position: 'top right',
                                delay: 5000
                            });
						}else{
							Lobibox.notify('error', {
								title: 'Error',
								msg: 'Data Tidak Berhasil Terkirim',
								position: 'top right',
								delay: 5000
							});
						}
						
						$('#_txtUserID').val("");
						$('#_JumlahDeposit').val("0");
						$('#_ddlBank').val("");
						$('#_txtNamaRekening').val("");
						$('#_ddlJenisPermainan').val("");
					   }
					 });
			}
		}		
		
        $('#_btnSubmit').click(function () {
           validasiSubmit();
        });
		
		$("#_ddlBank").change(function() {
			var val = $("#_ddlBank").val();
			if( val != ""){
				if(val == "OVO"){
					$('#_btnIBANKING').css("display", "none");
				}else {
					$('#_btnIBANKING').css("display", "");
					$('#ibank-img').removeClass();
					$('#ibank-img').addClass(val+"_BANK");
					$('#_btnIBANKING').prop("disabled", false);
				}
			}else{
				$('#ibank-img').removeClass();
				$('#_btnIBANKING').prop("disabled", true);
			}
		});
		
		$(".register_inputform").change(function() {
			var val = $(this).val().replace(/\s/g, "");
			if(val != ""){
				$(this).removeClass("is-Invalid");
			}
		});
		
    $("#_JumlahDeposit").keypress(function (e) {
        if (((event.which != 46 || (event.which == 46 && $(this).val() == ''))) && (event.which < 48 || event.which > 57)) {
            event.preventDefault();
        }
        if (event.which == 46) {
            e.preventDefault();
        }
    });

    $("#_JumlahDeposit").on("input", function (e) {
        var value = $(this).val();
        var numbers = value.replace(/[^0-9]/g, "");
        $(this).val(numbers);
    });	
	
	$("#_btnIBANKING").on("click", function() {
		var bankcode = $("#_ddlBank").val();
		var link = getIbankUrl(bankcode);
		if(bankcode != "OVO"){
			window.open(link, "_blank", "toolbar,scrollbars,resizable,top=100,left=200,width=900,height=500");
		}
	});
	
    function getIbankUrl(bankCode) {
      if (bankCode == 'BCA') {
        return 'https://ibank.klikbca.com/';
      } else if (bankCode == 'BNI') {
        return 'https://ibank.bni.co.id/';
      } else if (bankCode == 'BRI') {
        return 'https://ib.bri.co.id/ib-bri/';
      } else if (bankCode == 'MANDIRI') {
        return 'https://ibank.bankmandiri.co.id/retail3/';
      } else if (bankCode == 'CIMB') {
        return 'https://www.octoclicks.co.id/';
      }
    }
	
	$('#_JumlahDeposit').priceFormat({
      	prefix: '',
      	centsLimit: 0,
      	thousandsSeparator: ','
    });
	
	</script>