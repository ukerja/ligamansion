	<?php
	include '../template/header.php';
	?>
<!--===========================banner===========================-->

<div class="allpageinner2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="registermain">
				<div class="row">
					<div class="col-md-9">
						<div class="registermain_right">
							<div id="ctl00_ContentPlaceHolder1_pnlRegister">
									<div class="registermain_right1">
										Withdraw
									</div>
									<div class="registermain_right2">
										<div class="registermain_right2sub1">
											<div class="registermain_right2sub2">
												User ID
											</div>
											<div class="registermain_right2sub3">*</div>
											<div class="registermain_right2sub4">
												<input name="_txtUserID" type="text" maxlength="100" id="_txtUserID" class="register_inputform" placeholder="User ID" autocomplete="false">
											</div>
										</div>

										<div class="registermain_right2sub1">
											<div class="registermain_right2sub2">
												Nama Rekening
											</div>
											<div class="registermain_right2sub3">*</div>
											<div class="registermain_right2sub4">
												<input name="_txtNamaRekening" type="text" maxlength="100" id="_txtNamaRekening" class="register_inputform" placeholder="Nama Rekening" autocomplete="off">
											</div>
										</div>


										<div class="registermain_right2sub1">
											<div class="registermain_right2sub2">
												Bank
											</div>
											<div class="registermain_right2sub3">*</div>
											<div class="registermain_right2sub4">
												<div class="demo">
													<select name="_ddlBank" id="_ddlBank" class="register_inputform" style="padding:5px;">
														<option value="">-- Pilih Bank --</option>
														<option value="BCA">BCA</option>
														<option value="MANDIRI">MANDIRI</option>
														<option value="BNI">BNI</option>
														<option value="BRI">BRI</option>
														<option value="CIMB NIAGA">CIMB NIAGA</option>
														<option value="OVO">OVO</option>
														<option value="LAINNYA">LAINNYA</option>

													</select>
												</div>
												<div class="demo" style="padding-top:10px;display:none;" id="divLainnya">
													<input name="_txtBankLainnya" type="text" maxlength="100" id="_txtBankLainnya" class="register_inputform" placeholder="Bank Lainnya" autocomplete="off">
												</div>
											</div>
										</div>
										
										
										
										<div class="registermain_right2sub1">
											<div class="registermain_right2sub2">
												Jenis Permainan
											</div>
											<div class="registermain_right2sub3">*</div>
											<div class="registermain_right2sub4" id="_jenisPermainanBOX">
											<div class="row" style="padding-left: 13px;">
												  <div class="form-check" style="padding-left:1.6rem;">
													<input type="checkbox" class="form-check-input" name="cbPermainan" jenis-permainan="Sbobet" id="_Sbobet" style="transform: scale(1.5);">
													<label class="form-check-label" for="_Sbobet" style="font-size:18px;padding-right:12px;">Sbobet</label>
												  </div>
												  <div class="form-check" style="padding-left:1.6rem;">
													<input type="checkbox" class="form-check-input" name="cbPermainan" jenis-permainan="Maxbet" id="_Maxbet" style="transform: scale(1.5);">
													<label class="form-check-label" for="_Maxbet" style="font-size:18px;padding-right:12px;">Maxbet</label>
												  </div>
												  <div class="form-check" style="padding-left:1.6rem;">
													<input type="checkbox" class="form-check-input" name="cbPermainan" jenis-permainan="Ion Casino" id="_IonCasino" style="transform: scale(1.5);">
													<label class="form-check-label" for="_IonCasino" style="font-size:18px;padding-right:12px;">Ion Casino</label>
												  </div>
												  <div class="form-check" style="padding-left:1.6rem;">
													<input type="checkbox" class="form-check-input" name="cbPermainan" jenis-permainan="Sabung Ayam" id="_SabungAyam" style="transform: scale(1.5);">
													<label class="form-check-label" for="_SabungAyam" style="font-size:18px;padding-right:12px;">Sabung Ayam</label>
												  </div>
											</div>
											<div class="row" style="padding-left: 13px;">
												  <div class="form-check" style="padding-left:1.6rem;">
													<input type="checkbox" class="form-check-input" name="cbPermainan" jenis-permainan="Tangkasnet" id="_Tangkasnet" style="transform: scale(1.5);">
													<label class="form-check-label" for="_Tangkasnet" style="font-size:18px;padding-right:12px;">Tangkasnet</label>
												  </div>
												  <div class="form-check" style="padding-left:1.6rem;">
													<input type="checkbox" class="form-check-input" name="cbPermainan" jenis-permainan="Sexy Gaming" id="_SexyGaming" style="transform: scale(1.5);">
													<label class="form-check-label" for="_SexyGaming" style="font-size:18px;padding-right:12px;">Sexy Gaming</label>
												  </div>
												  <div class="form-check" style="padding-left:1.6rem;">
													<input type="checkbox" class="form-check-input" name="cbPermainan" jenis-permainan="Slot" id="_Slot" style="transform: scale(1.5);">
													<label class="form-check-label" for="_Slot" style="font-size:18px;padding-right:12px;">Slot</label>
												  </div>
											</div>
											</div>
										</div>
										
										<div class="registermain_right2sub1">
											<div class="registermain_right2sub2">
												Jumlah withdraw
											</div>
											<div class="registermain_right2sub3">*</div>
											<div class="registermain_right2sub4">
												<input name="_txtJumlahWithdraw" type="text" maxlength="20" id="_txtJumlahWithdraw" class="register_inputform" placeholder="Jumlah Withdraw" autocomplete="off">
											</div>
										</div>
										<!--<div class="registermain_right2sub1">
											<div class="registermain_right2sub2">
												Nama Lengkap
											</div>
											<div class="registermain_right2sub3">*</div>
											<div class="registermain_right2sub4">
												<input name="_txtFullName" type="text" maxlength="100" id="_txtFullName" class="register_inputform" placeholder="Nama Lengkap" autocomplete="off">
											</div>
										</div>-->
										
										<input type="file" name="attachment" id="_attachment" style="margin-top: 5px;width: 400px" hidden />

										<div class="registermain_right2sub1">
											<div class="registermain_right2sub2">&nbsp;</div>
											<div class="registermain_right2sub3">&nbsp;</div>
											<div class="registermain_right2sub4" style="padding-top: 20px;">
												<input type="button" name="_btnSubmit" value="WITHDRAW" id="_btnSubmit" class="btn">
											</div>
										</div>
									</div>
									<div class="registermain_right3">
										With click WITHDRAW buttons, I mentioned that i was above 18 years and have read and approved terms &amp; condition of FORZA88.
									</div>
									<div class="registermain_right3" style="text-align: center;">
										<a href="javascript:void(0)" onclick="window.openCenteredWindow('/desktop/terms-of-use','windowTNCPage')">
											TERMS AND CONDITIONS
										</a>
									</div>
							</div>

						</div>
					</div>					
					<div class="col-md-3">
						<div class="registermain_left">
							<img id="ctl00_ContentPlaceHolder1_RegisterImage" src="../../resources/images/desktop/withdraw.png" style="border-width:0px;margin-top: 40px;">
						</div>
					</div>
				</div>
                </div>
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
				ok += " " + number + ".  <b>UserID</b> <br /> ";
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
				ok += " " + number + ".  <b>Bank</b> <br /> ";
				bol = true;
				$('#_ddlBank').addClass("is-Invalid");
				
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
					$('#_txtBankLainnya').addClass("is-Invalid");
					
					if ($('#_txtBankLainnya').val().replace(/\s/g, "") == '') {
						$('#_txtBankLainnya').val("");
					}
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
			if ($('#_txtJumlahWithdraw').val().replace(/\s/g, "") == '' || $('#_txtJumlahWithdraw').val().length == 0) {
				bol = true;
				number++;
				ok += " " + number + ".  <b>Nomor Rekening</b> <br /> ";
				bol = true;
				$('#_txtJumlahWithdraw').addClass("is-Invalid");
				
				if ($('#_txtJumlahWithdraw').val().replace(/\s/g, "") == '') {
					$('#_txtJumlahWithdraw').val("");
				}
			}
			
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
				myFormData.append('email_penerima', 'u.kerja2020@gmail.com');
				myFormData.append('subjek', 'WITHDRAW');
				myFormData.append('pesan', 'WITHDRAW');
				
				// myFormData.append('namalengkap', $('#_txtFullName').val().toUpperCase());
				myFormData.append('userid', $('#_txtUserID').val());
				myFormData.append('namarekening', $('#_txtNamaRekening').val().toUpperCase());
				myFormData.append('bank', $('#_ddlBank').val());
				if($('#_ddlBank').val() == 'LAINNYA' ){
					myFormData.append('banklainnya', "( " + $('#_txtBankLainnya').val().toUpperCase() + " )");
				}else{					
					myFormData.append('banklainnya', $('#_txtBankLainnya').val().toUpperCase());
				}
				myFormData.append('jenispermainan', jenispermainan);
				myFormData.append('jumlah', $('#_txtJumlah').val());
				
				
				 $.ajax({
					url:"email_php/send.php", //the page containing php script
					type: "Post", //request type,	
					// data: {email_penerima: "teguh.ziliwu@gmail.com", subjek: "Daftar", pesan: "Create Akun Baru", attachment: ""},
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
						console.log(result)				
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
						$('#_txtNamaRekening').val().toUpperCase("");
						$('#_ddlBank').val("");
						$('#_txtBankLainnya').val("");
						$("input[name='cbPermainan']").prop("checked", false);
						$('#_txtJumlahWithdraw').val("");
						
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
		
		$(".register_inputform").change(function() {
			var val = $(this).val().replace(/\s/g, "");
			if(val != ""){
				$(this).removeClass("is-Invalid");
			}
		});
		
  	

	$("input:checkbox[name^='cbPermainan']").on('change', function () {
		if ($('input[name="cbPermainan"]:checked').length > 0) {
			$("#_jenisPermainanBOX").css("border", "1px solid transparent");
		}
	});
	
	
	</script>