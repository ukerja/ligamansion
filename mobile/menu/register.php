	<?php 
	include '../template/header.php'; 
	?>
<div class="contactmain">
        <div class="container">
            <div class="row">
                <li class="col-sm-12">
                    <div>
	
                        <ul>
                            <li class="depositeafterlogin_link" style="text-align: left;">							
                                    <label>
                                        Informasi Register
                                    </label>
                                       <p>1. Member Yang Melakukan Pendaftaran Wajib Mengisi Data Yang Benar dan Lengkap.</p>

									   <p>2. Setelah Melakukan Pendaftaran, User ID Anda Akan Di Kirim Melalui Whatsapp.</p>

									   <p>3. Apabila User ID Anda Tidak Di Kirim Melalui Whatsapp selama 2 menit, Anda Bisa Langsung Konfirmasi Melalui LiveChat Kami.</p>

									   <p>Terima Kasih Atas Perhatiannya.</p></li>
                            
                                <li><label>Email<span style="color: #ff0000">*</span></label>						
								<input name="_txtEmail" type="text" maxlength="100" id="_txtEmail" class="login_inputbox" placeholder="Email@example.com" autocomplete="false">
                                <!--<span id="ctl00_ContentPlaceHolder1_rfvEmail" style="color:Red;display:none;"></span>-->
                                <span id="ctl00_ContentPlaceHolder1_revEmail" style="color:Red;display:none;"></span>
                            
							
                                <li><label>No WhatsApp<span style="color: #ff0000">*</span></label>							
								<input name="_txtNoWhatsApp" type="text" value="08" maxlength="20" id="_txtNoWhatsApp" class="login_inputbox" placeholder="No WhatsApp" autocomplete="off">
                                <span id="ctl00_ContentPlaceHolder1_rfvUsername" style="color:Red;display:none;"></span>
                                <span id="ctl00_ContentPlaceHolder1_revUsername" style="color:Red;display:none;"></span>
                                                        
                            
                                <li><label>Bank<span style="color: #ff0000">*</span></label>
								<select name="_ddlBank" id="_ddlBank" class="login_inputbox" style="padding:5px;">
									<option value="">-- Pilih Bank --</option>
									<option value="BCA">BCA</option>
									<option value="MANDIRI">MANDIRI</option>
									<option value="BNI">BNI</option>
									<option value="BRI">BRI</option>
									<option value="CIMB NIAGA">CIMB NIAGA</option>
									<option value="OVO">OVO</option>
									<option value="LAINNYA">LAINNYA</option>
								</select>
                                <span id="ctl00_ContentPlaceHolder1_RequiredFieldValidator1" style="color:Red;display:none;"></span>
                            
							<li id="divLainnya" style="display:none;" id="divLainnya">
								<input name="_txtBankLainnya" type="text" maxlength="100" id="_txtBankLainnya" class="login_inputbox" placeholder="Bank Lainnya" autocomplete="off">
                                <span id="ctl00_ContentPlaceHolder1_rfvUsername" style="color:Red;display:none;"></span>
                                <span id="ctl00_ContentPlaceHolder1_revUsername" style="color:Red;display:none;"></span></li>
							
                            
                                <li><label>Nama Rekening<span style="color: #ff0000">*</span></label>
								<input name="_txtNamaRekening" type="text" maxlength="100" id="_txtNamaRekening" class="login_inputbox" placeholder="Nama Rekening" autocomplete="off">
								<span id="ctl00_ContentPlaceHolder1_rfvPassword" style="color:Red;display:none;"></span>
                                <span id="ctl00_ContentPlaceHolder1_revPassword" style="color:Red;display:none;"></span></li>
                            
                            
                                <li><label>Nomor Rekening<span style="color: #ff0000">*</span></label>
								<input name="_txtNomorRekening" type="text" maxlength="20" id="_txtNomorRekening" class="login_inputbox" placeholder="Nomor Rekening" autocomplete="off">
								<span id="ctl00_ContentPlaceHolder1_rfvConfirmPassword" style="color:Red;display:none;"></span>
                                <span id="ctl00_ContentPlaceHolder1_revConfirmPassword" style="color:Red;display:none;"></span>
                                <span id="ctl00_ContentPlaceHolder1_cvPassword" style="color:Red;display:none;"></span></li>
                            
                            
                            
                               <li> <label>Jenis Permainan<span style="color: #ff0000">*</span></label>								
								<div class="row" style="padding-left: 13px;" id="_jenisPermainanBOX">
									<div class="col-md-6">
										<div class="form-check" style="display:flex;">
											<input type="checkbox" class="form-check-input" name="cbPermainan" jenis-permainan="Sbobet" id="_Sbobet" style="transform: scale(1.5);">
											<label class="form-check-label" for="_Sbobet" style="font-size:18px;padding-left:20px;">Sbobet</label>
										</div>			
										<div class="form-check" style="display:flex;">
											<input type="checkbox" class="form-check-input" name="cbPermainan" jenis-permainan="Maxbet" id="_Maxbet" style="transform: scale(1.5);">
											<label class="form-check-label" for="_Maxbet" style="font-size:18px;padding-left:20px;">Maxbet</label>
										</div>			
										<div class="form-check" style="display:flex;">
											<input type="checkbox" class="form-check-input" name="cbPermainan" jenis-permainan="Ion Casino" id="_IonCasino" style="transform: scale(1.5);">
											<label class="form-check-label" for="_IonCasino" style="font-size:18px;padding-left:20px;">Ion Casino</label>
										</div>			
										<div class="form-check" style="display:flex;">
													<input type="checkbox" class="form-check-input" name="cbPermainan" jenis-permainan="Sabung Ayam" id="_SabungAyam" style="transform: scale(1.5);">
											<label class="form-check-label" for="_SabungAyam" style="font-size:18px;padding-left:20px;">Sabung Ayam</label>
										</div>									
									</div>
									<div class="col-md-6">
										<div class="form-check" style="display:flex;">
											<input type="checkbox" class="form-check-input" name="cbPermainan" jenis-permainan="Tangkasnet" id="_Tangkasnet" style="transform: scale(1.5);">
											<label class="form-check-label" for="_Tangkasnet" style="font-size:18px;padding-left:20px;">Tangkasnet</label>
										</div>			
										<div class="form-check" style="display:flex;">
											<input type="checkbox" class="form-check-input" name="cbPermainan" jenis-permainan="Sexy Gaming" id="_SexyGaming" style="transform: scale(1.5);">
											<label class="form-check-label" for="_SexyGaming" style="font-size:18px;padding-left:20px;">Sexy Gaming</label>
										</div>			
										<div class="form-check" style="display:flex;">
											<input type="checkbox" class="form-check-input" name="cbPermainan" jenis-permainan="Joker Gaming" id="_JokerGaming" style="transform: scale(1.5);">
											<label class="form-check-label" for="_JokerGaming" style="font-size:18px;padding-left:20px;">Joker Gaming</label>
										</div>								
									</div>
								</div></li>
                            
							<li style="display:none;">							
								<input type="file" name="attachment" id="_attachment" style="margin-top: 5px;width: 400px" hidden /></li>
							
                            
                              <li>  <input type="button" name="_btnSubmit" value="REGISTER" id="_btnSubmit" class="btn-style-one orange" />
                            <div id="ctl00_ContentPlaceHolder1_validation1" style="color:Red;display:none;"></li>

	</div>
                            With click REGISTER buttons, I mentioned that i was above 18 years and have read and approved terms &amp; condition of LIGAMANSION..
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
			//ok = "<ul>Please complete the following fields : ";
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
			
			if ($('#_txtEmail').val().replace(/\s/g, "") == '' || $('#_txtEmail').val().length == 0) {
				bol = true;
				number++;
				ok += " " + number + ".  <b>Email</b> <br /> ";
				bol = true;
				// $('#_txtEmail').addClass("is-Invalid");
				$('#_txtEmail').css("border", "1px solid red");
				
				if ($('#_txtEmail').val().replace(/\s/g, "") == '') {
					$('#_txtEmail').val("");
				}
			}
			
			if ($('#_txtNoWhatsApp').val().replace(/\s/g, "") == '' || $('#_txtNoWhatsApp').val().length == 0 || $('#_txtNoWhatsApp').val().length <= 2) {
				bol = true;
				number++;
				ok += " " + number + ".  <b>No WhatsApp</b> <br /> ";
				bol = true;
				// $('#_txtNoWhatsApp').addClass("is-Invalid");
				$('#_txtNoWhatsApp').css("border", "1px solid red");
				
				if ($('#_txtNoWhatsApp').val().replace(/\s/g, "") == '') {
					$('#_txtNoWhatsApp').val("");
				}
			}
			
			if ($('#_ddlBank').val().replace(/\s/g, "") == '' || $('#_ddlBank').val().length == 0) {
				bol = true;
				number++;
				ok += " " + number + ".  <b>Bank</b> <br /> ";
				bol = true;
				// $('#_ddlBank').addClass("is-Invalid");
				$('#_ddlBank').css("border", "1px solid red");
				
				if ($('#_ddlBank').val().replace(/\s/g, "") == '') {
					$('#_ddlBank').val("");
				}
			}
						
			if ($('#_ddlBank').val() == 'LAINNYA' ) {				
				if ($('#_txtBankLainnya').val().replace(/\s/g, "") == '' || $('#_txtBankLainnya').val().length == 0) {
					bol = true;
					number++;
					ok += " " + number + ".  <b>Bank</b> <br /> ";
					bol = true;
					// $('#_txtBankLainnya').addClass("is-Invalid");
					$('#_txtBankLainnya').css("border", "1px solid red");
					
					if ($('#_txtBankLainnya').val().replace(/\s/g, "") == '') {
						$('#_txtBankLainnya').val("");
					}
				}
			}
			
			if ($('#_txtNamaRekening').val().replace(/\s/g, "") == '' || $('#_txtNamaRekening').val().length == 0) {
				bol = true;
				number++;
				ok += " " + number + ".  <b>Nama Rekening</b> <br /> ";
				bol = true;
				// $('#_txtNamaRekening').addClass("is-Invalid");
				$('#_txtNamaRekening').css("border", "1px solid red");
				
				if ($('#_txtNamaRekening').val().replace(/\s/g, "") == '') {
					$('#_txtNamaRekening').val("");
				}
			}
			
			if ($('#_txtNomorRekening').val().replace(/\s/g, "") == '' || $('#_txtNomorRekening').val().length == 0) {
				bol = true;
				number++;
				ok += " " + number + ".  <b>Nomor Rekening</b> <br /> ";
				bol = true;
				// $('#_txtNomorRekening').addClass("is-Invalid");
				$('#_txtNomorRekening').css("border", "1px solid red");
				
				if ($('#_txtNomorRekening').val().replace(/\s/g, "") == '') {
					$('#_txtNomorRekening').val("");
				}
			}			

			if ($('input[name="cbPermainan"]:checked').length == 0) {
				number++;
				ok += " " + number + ".  <b>Jenis Permainan</b> <br /> ";
				bol = true;
				$("#_jenisPermainanBOX").css("border", "1px solid red");
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
				myFormData.append('email_penerima', 'ligamansionregister@gmail.com');
				myFormData.append('subjek', 'REGISTER');
				myFormData.append('pesan', 'REGISTER');
				
				// myFormData.append('namalengkap', $('#_txtFullName').val().toUpperCase());
				myFormData.append('email', $('#_txtEmail').val());
				myFormData.append('nowa', $('#_txtNoWhatsApp').val());
				myFormData.append('bank', $('#_ddlBank').val());
				if($('#_ddlBank').val() == 'LAINNYA' ){
					myFormData.append('banklainnya', "( " + $('#_txtBankLainnya').val().toUpperCase() + " )");
				}else{					
					myFormData.append('banklainnya', $('#_txtBankLainnya').val().toUpperCase());
				}
				myFormData.append('namarekening', $('#_txtNamaRekening').val().toUpperCase());
				myFormData.append('nomorrekening', $('#_txtNomorRekening').val());
				myFormData.append('jenispermainan', jenispermainan);
				
				myFormData.append('userid', '');
				myFormData.append('jumlah', '');
				myFormData.append('jenisemail', 'REGISTER');
				
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
						
						$('#_txtEmail').val("");
						$('#_txtNoWhatsApp').val("08");
						$('#_ddlBank').val("");
						$('#_txtBankLainnya').val("");
						$('#_txtNamaRekening').val("");
						$('#_txtNomorRekening').val("");
						$("input[name='cbPermainan']").prop("checked", false);
					   }
					 });
			}
		}		
		
        $('#_btnSubmit').click(function () {
           validasiSubmit();
        });
		
		$("#_ddlBank").change(function() {
			var val = $("#_ddlBank").val();
			
			if(val == "LAINNYA"){
				$("#divLainnya").css("display", "");
			}else{
				$("#divLainnya").css("display", "none");
			}
		});
		
		$(".login_inputbox").change(function() {
			var val = $(this).val().replace(/\s/g, "");
			if(val != ""){
				// $(this).removeClass("is-Invalid");
				$(this).css("border", "");
			}
		});
		
    $("#_txtNoWhatsApp").keypress(function (e) {
        if (((event.which != 46 || (event.which == 46 && $(this).val() == ''))) && (event.which < 48 || event.which > 57)) {
            event.preventDefault();
        }
        if (event.which == 46) {
            e.preventDefault();
        }
    });

    $("#_txtNoWhatsApp").on("input", function (e) {
        var value = $(this).val();
        var numbers = value.replace(/[^0-9]/g, "");
        $(this).val(numbers);
    });	

	$("input:checkbox[name^='cbPermainan']").on('change', function () {
		if ($('input[name="cbPermainan"]:checked').length > 0) {
			$("#_jenisPermainanBOX").css("border", "1px solid transparent");
		}
	});
	
	
	</script>