	<?php
	include '../template/header.php';
	?>
<!--===========================banner===========================-->
<div class="allpageinner2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="registermain">
                    <div class="registermain_left">

                        <img id="ctl00_ContentPlaceHolder1_RegisterImage" src="../../resources/images/desktop/register_96c00afb-2339-4071-aabc-5685e6905423_1597852022565.png" style="border-width:0px;">
                    </div>
                    <div class="registermain_right">
                        <div id="ctl00_ContentPlaceHolder1_pnlRegister">
							<form>
								<div class="registermain_right1">
									Register
								</div>
								<div class="registermain_right2">

									<div class="registermain_right2sub1">
										<div class="registermain_right2sub2">
											Nama Lengkap
										</div>
										<div class="registermain_right2sub3">*</div>
										<div class="registermain_right2sub4">
											<input name="_txtFullName" type="text" maxlength="100" id="_txtFullName" class="register_inputform" placeholder="Nama Lengkap">
										</div>
									</div>


									<div class="registermain_right2sub1">
										<div class="registermain_right2sub2">
											Email
										</div>
										<div class="registermain_right2sub3">*</div>
										<div class="registermain_right2sub4">
											<input name="_txtEmail" type="text" maxlength="100" id="_txtEmail" class="register_inputform" placeholder="Email@example.com" autocomplete="false">
										</div>
									</div>



									<div class="registermain_right2sub1">
										<div class="registermain_right2sub2">
											No WhatsApp
										</div>
										<div class="registermain_right2sub3">*</div>
										<div class="registermain_right2sub4">
											<input name="_txtNoWhatsApp" type="text" value="08" maxlength="20" id="_txtNoWhatsApp" class="register_inputform" placeholder="No WhatsApp">
											<!-- <button type="button" onclick="CopyValue()"><i class="fa fa-copy"></i></button> !-->
											<span id="ctl00_ContentPlaceHolder1_revContactNo" style="color:Red;visibility:hidden;">Please Enter Only Numbers</span>
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
										</div>
									</div>
									<div class="registermain_right2sub1">
										<div class="registermain_right2sub2">
											Nama Rekening
										</div>
										<div class="registermain_right2sub3">*</div>
										<div class="registermain_right2sub4">
											<input name="_txtNamaRekening" type="text" maxlength="100" id="_txtNamaRekening" class="register_inputform" placeholder="Nama Rekening">
										</div>
									</div>
									<div class="registermain_right2sub1">
										<div class="registermain_right2sub2">
											Nomor Rekening
										</div>
										<div class="registermain_right2sub3">*</div>
										<div class="registermain_right2sub4">
											<input name="_txtNomorRekening" type="text" maxlength="20" id="_txtNomorRekening" class="register_inputform" placeholder="Nomor Rekening">
										</div>
									</div>

									<div class="registermain_right2sub1">
										<div class="registermain_right2sub2">&nbsp;</div>
										<div class="registermain_right2sub3">&nbsp;</div>
										<div class="registermain_right2sub4">
											<input type="submit" name="ctl00$ContentPlaceHolder1$btnSubmit" value="REGISTER" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$ContentPlaceHolder1$btnSubmit&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" id="ctl00_ContentPlaceHolder1_btnSubmit" class="btn">
										</div>
									</div>
								</div>
								<div class="registermain_right3">
									With click REGISTER buttons, I mentioned that i was above 18 years and have read and approved terms &amp; condition of FORZA88.
								</div>
								<div class="registermain_right3" style="text-align: center;">
									<a href="javascript:void(0)" onclick="window.openCenteredWindow('/desktop/terms-of-use','windowTNCPage')">
										TERMS AND CONDITIONS
									</a>
								</div>
							</form>
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