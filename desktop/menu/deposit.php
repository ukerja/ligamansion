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
										Deposit
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
												Nama Rekening Depositor
											</div>
											<div class="registermain_right2sub3">*</div>
											<div class="registermain_right2sub4">
												<input name="_txtNamaRekening" type="text" maxlength="100" id="_txtNamaRekening" class="register_inputform" placeholder="Nama Rekening Depositor" autocomplete="off">
											</div>
										</div>

										<div class="registermain_right2sub1">
											<div class="registermain_right2sub2">
												Tujuan Deposit
											</div>
											<div class="registermain_right2sub3">*</div>
											<div class="registermain_right2sub4">
												<div class="demo">
													<div class="row">
														<div class="col-md-6 col-6">
															<select name="_ddlBank" id="_ddlBank" class="register_inputform" style="padding:5px;">
																<option value="">-- Pilih Bank --</option>
																<option value="BCA">BCA</option>
																<option value="MANDIRI">MANDIRI</option>
																<option value="BNI">BNI</option>
																<option value="BRI">BRI</option>
																<option value="CIMB">CIMB NIAGA</option>
																<option value="OVO">OVO</option>

															</select>
														</div>
														<div class="col-md-6 col-6" style="padding-left:0;">
															<button class="btn btn-success btn-sm btn-block" id="_btnIBANKING" disabled style="height: 35px;padding: 0;top: 0;position: unset;font-size:20px;border-radius:0;border:0;">
															<div id="ibank-img" class=""></div>
															i-Banking
															</button>
														</div>
													</div>
												</div>
											</div>
										</div>
										
										<div class="registermain_right2sub1">
											<div class="registermain_right2sub2">
												Jenis Permainan
											</div>
											<div class="registermain_right2sub3">*</div>
											<div class="registermain_right2sub4">
												<div class="demo">
													<select name="_ddlJenisPermainan" id="_ddlJenisPermainan" class="register_inputform" style="padding:5px;">
														<option value="">-- Pilih Permainan --</option>
														<option value="Sbobet">Sbobet</option>
														<option value="Maxbet">Maxbet</option>
														<option value="Ion Casino">Ion Casino</option>
														<option value="Sabung Ayam">Sabung Ayam</option>
														<option value="Tangkasnet">Tangkasnet</option>
														<option value="Sexy Gaming">Sexy Gaming</option>
														<option value="Slot">Slot</option>

													</select>
												</div>
											</div>
										</div>

										<div class="registermain_right2sub1">
											<div class="registermain_right2sub2">
												Jumlah Deposit
											</div>
											<div class="registermain_right2sub3">*</div>
											<div class="registermain_right2sub4">
												<div class="row">
													<div class="col-md-10 col-9" style="padding-right:0;">
														<input value="0" maxlength="11" oncopy="return false;" onpaste="return false" name="_JumlahDeposit" type="text" maxlength="20" id="_JumlahDeposit" class="register_inputform" placeholder="Jumlah Deposit" autocomplete="off">
														<!-- <button type="button" onclick="CopyValue()"><i class="fa fa-copy"></i></button> !-->
													</div>
													<div class="col-md-2 col-3" style="padding-left:0;">
														<button class="btn btn-success btn-sm btn-block" disabled style="height: 35px;padding: 0;top: 0;position: unset;font-size:20px;border-radius:0;border:0;background: linear-gradient(45deg,#60bb46,#16a2a7);">IDR</button>
													</div>
												</div>
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
												<input type="button" name="_btnSubmit" value="DEPOSIT" id="_btnSubmit" class="btn">
											</div>
										</div>
									</div>
									<div class="registermain_right3">
										With click DEPOSIT buttons, I mentioned that i was above 18 years and have read and approved terms &amp; condition of FORZA88.
									</div>
									<div class="registermain_right3" style="text-align: center;">
										<a href="javascript:void(0)" onclick="window.openCenteredWindow('/desktop/terms-of-use','windowTNCPage')">
											TERMS AND CONDITIONS
										</a>
									</div>
							</div>

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