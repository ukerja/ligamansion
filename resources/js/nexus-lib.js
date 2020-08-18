class class_library {


    constructor() {

        this.validation = new class_validation();

    }


}


class class_validation {
    checkAddress(ErrorLengthLimit) {

        if (document.getElementsByClassName("nexus-valid-input-address").length > 0) {

            if (document.getElementsByClassName("nexus-valid-input-address")[0].value != "") {

                if (document.getElementsByClassName("nexus-valid-input-address")[0].value.length >= 3 && document.getElementsByClassName("nexus-valid-input-address")[0].value.length <= 255) {

                    if (document.getElementsByClassName("nexus-valid-icon-address").length > 0) {

                        document.getElementsByClassName("nexus-valid-icon-address")[0].innerHTML = "<img src=\"/resources/images/desktop/ok-icon.gif\" />";

                    }

                    if (document.getElementsByClassName("nexus-valid-response-address").length > 0) {

                        document.getElementsByClassName("nexus-valid-response-address")[0].style.display = "none";

                    }

                    return true;

                }

                else {

                    if (document.getElementsByClassName("nexus-valid-icon-address").length > 0) {

                        document.getElementsByClassName("nexus-valid-icon-address")[0].innerHTML = "<img src=\"/resources/images/desktop/wrong-icon.gif\" />";

                    }

                    if (document.getElementsByClassName("nexus-valid-response-address").length > 0) {

                        document.getElementsByClassName("nexus-valid-response-address")[0].innerHTML = ErrorLengthLimit;
                        document.getElementsByClassName("nexus-valid-response-address")[0].style.display = "block";

                    }

                    return false;

                }

            }

            else {

                if (document.getElementsByClassName("nexus-valid-icon-address").length > 0) {

                    document.getElementsByClassName("nexus-valid-icon-address")[0].innerHTML = "<img src=\"/resources/images/desktop/ok-icon.gif\" />";

                }

                if (document.getElementsByClassName("nexus-valid-response-address").length > 0) {

                    document.getElementsByClassName("nexus-valid-response-address")[0].style.display = "none";

                }

                return true;

            }

        } else {

            return true;

        }

    }


    checkBank(ErrorSelectBank) {

        if (document.getElementsByClassName("nexus-valid-input-bank").length > 0) {

            if (!document.getElementsByClassName("nexus-valid-input-bank")[0].value == "") {

                if (document.getElementsByClassName("nexus-valid-icon-bank").length > 0) {

                    document.getElementsByClassName("nexus-valid-icon-bank")[0].innerHTML = "<img src=\"/resources/images/desktop/ok-icon.gif\" />";

                }

                if (document.getElementsByClassName("nexus-valid-response-bank").length > 0) {

                    document.getElementsByClassName("nexus-valid-response-bank")[0].style.display = "none";

                }

                return true;

            }

            else {

                if (document.getElementsByClassName("nexus-valid-icon-bank").length > 0) {

                    document.getElementsByClassName("nexus-valid-icon-bank")[0].innerHTML = "<img src=\"/resources/images/desktop/wrong-icon.gif\" />";

                }

                if (document.getElementsByClassName("nexus-valid-response-bank").length > 0) {

                    document.getElementsByClassName("nexus-valid-response-bank")[0].innerHTML = ErrorSelectBank;
                    document.getElementsByClassName("nexus-valid-response-bank")[0].style.display = "block";

                }

                return false;

            }

        } else {

            return true;

        }

    }


    checkBankAccountName(ErrorLengthLimit, ErrorCharacter) {

        if (document.getElementsByClassName("nexus-valid-input-bank-account-name").length > 0) {

            if (document.getElementsByClassName("nexus-valid-input-bank-account-name")[0].value.match(/^[a-zA-Z ]*$/)) {
                if (document.getElementsByClassName("nexus-valid-icon-bank-account-name").length > 0) {
                    document.getElementsByClassName("nexus-valid-icon-bank-account-name")[0].innerHTML = "<img src=\"/resources/images/desktop/ok-icon.gif\" />";
                }

                if (document.getElementsByClassName("nexus-valid-response-bank-account-name").length > 0) {
                    document.getElementsByClassName("nexus-valid-response-bank-account-name")[0].style.display = "none";
                }
            } else {
                if (document.getElementsByClassName("nexus-valid-icon-bank-account-name").length > 0) {
                    document.getElementsByClassName("nexus-valid-icon-bank-account-name")[0].innerHTML = "<img src=\"/resources/images/desktop/wrong-icon.gif\" />";
                }

                if (document.getElementsByClassName("nexus-valid-response-bank-account-name").length > 0) {
                    document.getElementsByClassName("nexus-valid-response-bank-account-name")[0].innerHTML = ErrorCharacter;
                    document.getElementsByClassName("nexus-valid-response-bank-account-name")[0].style.display = "block";
                }

                return false;
            }

            if (document.getElementsByClassName("nexus-valid-input-bank-account-name")[0].value.length >= 3 && document.getElementsByClassName("nexus-valid-input-bank-account-name")[0].value.length <= 100) {

                if (document.getElementsByClassName("nexus-valid-icon-bank-account-name").length > 0) {

                    document.getElementsByClassName("nexus-valid-icon-bank-account-name")[0].innerHTML = "<img src=\"/resources/images/desktop/ok-icon.gif\" />";

                }

                if (document.getElementsByClassName("nexus-valid-response-bank-account-name").length > 0) {

                    document.getElementsByClassName("nexus-valid-response-bank-account-name")[0].style.display = "none";

                }

                return true;

            }

            else {

                if (document.getElementsByClassName("nexus-valid-icon-bank-account-name").length > 0) {

                    document.getElementsByClassName("nexus-valid-icon-bank-account-name")[0].innerHTML = "<img src=\"/resources/images/desktop/wrong-icon.gif\" />";

                }

                if (document.getElementsByClassName("nexus-valid-response-bank-account-name").length > 0) {

                    document.getElementsByClassName("nexus-valid-response-bank-account-name")[0].innerHTML = ErrorLengthLimit;
                    document.getElementsByClassName("nexus-valid-response-bank-account-name")[0].style.display = "block";

                }

                return false;

            }

        } else {

            return true;

        }

    }


    checkBankAccountNumber(ErrorLengthLimit) {

        if (document.getElementsByClassName("nexus-valid-input-bank-account-number").length > 0) {

            if (document.getElementsByClassName("nexus-valid-input-bank-account-number")[0].value.match(/^[0-9]+$/) && document.getElementsByClassName("nexus-valid-input-bank-account-number")[0].value.length >= 10 && document.getElementsByClassName("nexus-valid-input-bank-account-number")[0].value.length <= 20) {

                if (document.getElementsByClassName("nexus-valid-icon-bank-account-number").length > 0) {

                    document.getElementsByClassName("nexus-valid-icon-bank-account-number")[0].innerHTML = "<img src=\"/resources/images/desktop/ok-icon.gif\" />";

                }

                if (document.getElementsByClassName("nexus-valid-response-bank-account-number").length > 0) {

                    document.getElementsByClassName("nexus-valid-response-bank-account-number")[0].style.display = "none";

                }
                return true;

            }

            else {
                if (document.getElementsByClassName("nexus-valid-icon-bank-account-number").length > 0) {

                    document.getElementsByClassName("nexus-valid-icon-bank-account-number")[0].innerHTML = "<img src=\"/resources/images/desktop/wrong-icon.gif\" />";

                }

                if (document.getElementsByClassName("nexus-valid-response-bank-account-number").length > 0) {

                    document.getElementsByClassName("nexus-valid-response-bank-account-number")[0].innerHTML = ErrorLengthLimit;
                    document.getElementsByClassName("nexus-valid-response-bank-account-number")[0].style.display = "block";

                }

                return false;

            }

        } else {

            return true;

        }

    }

    checkBankAccountNumberCustom(ErrorLengthLimit, MinLength, MaxLength) {

        if (document.getElementsByClassName("nexus-valid-input-bank-account-number").length > 0) {

            if (document.getElementsByClassName("nexus-valid-input-bank-account-number")[0].value.match(/^[0-9]+$/) && document.getElementsByClassName("nexus-valid-input-bank-account-number")[0].value.length >= MinLength && document.getElementsByClassName("nexus-valid-input-bank-account-number")[0].value.length <= MaxLength) {

                if (document.getElementsByClassName("nexus-valid-icon-bank-account-number").length > 0) {

                    document.getElementsByClassName("nexus-valid-icon-bank-account-number")[0].innerHTML = "<img src=\"/resources/images/desktop/ok-icon.gif\" />";

                }

                if (document.getElementsByClassName("nexus-valid-response-bank-account-number").length > 0) {

                    document.getElementsByClassName("nexus-valid-response-bank-account-number")[0].style.display = "none";

                }
                return true;

            }

            else {
                if (document.getElementsByClassName("nexus-valid-icon-bank-account-number").length > 0) {

                    document.getElementsByClassName("nexus-valid-icon-bank-account-number")[0].innerHTML = "<img src=\"/resources/images/desktop/wrong-icon.gif\" />";

                }

                if (document.getElementsByClassName("nexus-valid-response-bank-account-number").length > 0) {

                    document.getElementsByClassName("nexus-valid-response-bank-account-number")[0].innerHTML = ErrorLengthLimit;
                    document.getElementsByClassName("nexus-valid-response-bank-account-number")[0].style.display = "block";

                }

                return false;

            }

        } else {

            return true;

        }

    }

    checkBirthday(ErrorDOB) {

        if (document.getElementsByClassName("nexus-valid-input-birthday").length > 0) {

            if (document.getElementsByClassName("nexus-valid-input-birthday")[0].value != "") {

                if (document.getElementsByClassName("nexus-valid-input-birthday")[0].value.match(/^([0-9]){2,}\/([0-9]){2,}\/([0-9]){4,}$/)) {

                    if (document.getElementsByClassName("nexus-valid-icon-birthday").length > 0) {

                        document.getElementsByClassName("nexus-valid-icon-birthday")[0].innerHTML = "<img src=\"/resources/images/desktop/ok-icon.gif\" />";

                    }

                    if (document.getElementsByClassName("nexus-valid-response-birthday").length > 0) {

                        document.getElementsByClassName("nexus-valid-response-birthday")[0].style.display = "none";

                    }

                    return true;

                }

                else {

                    if (document.getElementsByClassName("nexus-valid-icon-birthday").length > 0) {

                        document.getElementsByClassName("nexus-valid-icon-birthday")[0].innerHTML = "<img src=\"/resources/images/desktop/wrong-icon.gif\" />";

                    }

                    if (document.getElementsByClassName("nexus-valid-response-birthday").length > 0) {

                        document.getElementsByClassName("nexus-valid-response-birthday")[0].innerHTML = ErrorDOB;
                        document.getElementsByClassName("nexus-valid-response-birthday")[0].style.display = "block";

                    }

                    return false;

                }

            }

            else {

                if (document.getElementsByClassName("nexus-valid-icon-birthday").length > 0) {

                    document.getElementsByClassName("nexus-valid-icon-birthday")[0].innerHTML = "<img src=\"/resources/images/desktop/ok-icon.gif\" />";

                }

                if (document.getElementsByClassName("nexus-valid-response-birthday").length > 0) {

                    document.getElementsByClassName("nexus-valid-response-birthday")[0].style.display = "none";

                }

                return true;

            }

        } else {

            return true;

        }

    }


    checkCaptcha(ErrorCaptcha) {

        if (document.getElementsByClassName("nexus-valid-input-captcha").length > 0) {

            if (document.getElementsByClassName("nexus-valid-input-captcha")[0].value != "") {

                if (document.getElementsByClassName("nexus-valid-icon-captcha").length > 0) {

                    document.getElementsByClassName("nexus-valid-icon-captcha")[0].innerHTML = "<img src=\"/resources/images/desktop/ok-icon.gif\" />";

                }

                if (document.getElementsByClassName("nexus-valid-response-captcha").length > 0) {

                    document.getElementsByClassName("nexus-valid-response-captcha")[0].style.display = "none";

                }

                return true;

            }

            else {

                if (document.getElementsByClassName("nexus-valid-icon-captcha").length > 0) {

                    document.getElementsByClassName("nexus-valid-icon-captcha")[0].innerHTML = "<img src=\"/resources/images/desktop/wrong-icon.gif\" />";

                }

                if (document.getElementsByClassName("nexus-valid-response-captcha").length > 0) {

                    document.getElementsByClassName("nexus-valid-response-captcha")[0].innerHTML = ErrorCaptcha;
                    document.getElementsByClassName("nexus-valid-response-captcha")[0].style.display = "block";

                }

                return false;

            }

        } else {

            return true;

        }

    }


    checkConfirmPassword(ErrorConfirmPassEmpty, ErrorConfirmPassNotMatch) {
        if (document.getElementsByClassName("nexus-valid-input-confirm-password").length > 0) {

            if (document.getElementsByClassName("nexus-valid-input-confirm-password")[0].value.length === 0) {
                if (document.getElementsByClassName("nexus-valid-icon-confirm-password").length > 0) {

                    document.getElementsByClassName("nexus-valid-icon-confirm-password")[0].innerHTML = "<img src=\"/resources/images/desktop/wrong-icon.gif\" />";

                }

                if (document.getElementsByClassName("nexus-valid-response-confirm-password").length > 0) {

                    document.getElementsByClassName("nexus-valid-response-confirm-password")[0].innerHTML = ErrorConfirmPassEmpty;
                    document.getElementsByClassName("nexus-valid-response-confirm-password")[0].style.display = "block";

                }

                return false;
            }

            else if (document.getElementsByClassName("nexus-valid-input-confirm-password")[0].value.match(document.getElementsByClassName("nexus-valid-input-password")[0].value)) {

                if (document.getElementsByClassName("nexus-valid-icon-confirm-password").length > 0) {

                    document.getElementsByClassName("nexus-valid-icon-confirm-password")[0].innerHTML = "<img src=\"/resources/images/desktop/ok-icon.gif\" />";

                }

                if (document.getElementsByClassName("nexus-valid-response-confirm-password").length > 0) {

                    document.getElementsByClassName("nexus-valid-response-confirm-password")[0].style.display = "none";

                }

                return true;

            }

            else {

                if (document.getElementsByClassName("nexus-valid-icon-confirm-password").length > 0) {

                    document.getElementsByClassName("nexus-valid-icon-confirm-password")[0].innerHTML = "<img src=\"/resources/images/desktop/wrong-icon.gif\" />";

                }

                if (document.getElementsByClassName("nexus-valid-response-confirm-password").length > 0) {

                    document.getElementsByClassName("nexus-valid-response-confirm-password")[0].innerHTML = ErrorConfirmPassNotMatch;
                    document.getElementsByClassName("nexus-valid-response-confirm-password")[0].style.display = "block";

                }

                return false;

            }

        } else {

            return true;

        }

    }


    checkCountry(ErrorSelectCountry) {

        if (document.getElementsByClassName("nexus-valid-input-country").length > 0) {

            if (document.getElementsByClassName("nexus-valid-input-country")[0].value != "") {

                if (document.getElementsByClassName("nexus-valid-icon-country").length > 0) {

                    document.getElementsByClassName("nexus-valid-icon-country")[0].innerHTML = "<img src=\"/resources/images/desktop/ok-icon.gif\" />";

                }

                if (document.getElementsByClassName("nexus-valid-response-country").length > 0) {

                    document.getElementsByClassName("nexus-valid-response-country")[0].style.display = "none";

                }

                return true;

            }

            else {

                if (document.getElementsByClassName("nexus-valid-icon-country").length > 0) {

                    document.getElementsByClassName("nexus-valid-icon-country")[0].innerHTML = "<img src=\"/resources/images/desktop/wrong-icon.gif\" />";

                }

                if (document.getElementsByClassName("nexus-valid-response-country").length > 0) {

                    document.getElementsByClassName("nexus-valid-response-country")[0].innerHTML = ErrorSelectCountry;
                    document.getElementsByClassName("nexus-valid-response-country")[0].style.display = "block";

                }

                return false;

            }

        } else {

            return true;

        }

    }


    checkEmail(ErrorEmail) {

        if (document.getElementsByClassName("nexus-valid-input-email").length > 0) {

            if (document.getElementsByClassName("nexus-valid-input-email")[0].value.length > 0) {

                if (document.getElementsByClassName("nexus-valid-input-email")[0].value.match(/^([0-9A-Za-z_\-\.]){1,}\@([0-9A-Za-z_\-\.]){1,}\.([A-Za-z]){2,}$/)) {

                    if (document.getElementsByClassName("nexus-valid-icon-email").length > 0) {

                        document.getElementsByClassName("nexus-valid-icon-email")[0].innerHTML = "<img src=\"/resources/images/desktop/ok-icon.gif\" />";

                    }

                    if (document.getElementsByClassName("nexus-valid-response-email").length > 0) {

                        document.getElementsByClassName("nexus-valid-response-email")[0].style.display = "none";

                    }

                    return true;

                }

                else {

                    if (document.getElementsByClassName("nexus-valid-icon-email").length > 0) {

                        document.getElementsByClassName("nexus-valid-icon-email")[0].innerHTML = "<img src=\"/resources/images/desktop/wrong-icon.gif\" />";

                    }

                    if (document.getElementsByClassName("nexus-valid-response-email").length > 0) {

                        document.getElementsByClassName("nexus-valid-response-email")[0].innerHTML = ErrorEmail;
                        document.getElementsByClassName("nexus-valid-response-email")[0].style.display = "block";

                    }

                    return false;

                }

            } else {

                return true;

            }

        } else {

            return true;

        }

    }


    checkFullName(ErrorFullNameLengthLimit, ErrorCharacter) {

        if (document.getElementsByClassName("nexus-valid-input-full-name").length > 0) {

            if (document.getElementsByClassName("nexus-valid-input-full-name")[0].value.length >= 3 && document.getElementsByClassName("nexus-valid-input-full-name")[0].value.length <= 100) {

                if (document.getElementsByClassName("nexus-valid-input-full-name")[0].value.match(/^[a-zA-Z ]*$/)) {

                    if (document.getElementsByClassName("nexus-valid-icon-full-name").length > 0) {

                        document.getElementsByClassName("nexus-valid-icon-full-name")[0].innerHTML = "<img src=\"/resources/images/desktop/ok-icon.gif\" />";

                    }

                    if (document.getElementsByClassName("nexus-valid-response-full-name").length > 0) {

                        document.getElementsByClassName("nexus-valid-response-full-name")[0].style.display = "none";

                    }

                    return true;
                } else {
                    if (document.getElementsByClassName("nexus-valid-icon-full-name").length > 0) {

                        document.getElementsByClassName("nexus-valid-icon-full-name")[0].innerHTML = "<img src=\"/resources/images/desktop/wrong-icon.gif\" />";

                    }

                    if (document.getElementsByClassName("nexus-valid-response-full-name").length > 0) {

                        document.getElementsByClassName("nexus-valid-response-full-name")[0].innerHTML = ErrorCharacter;
                        document.getElementsByClassName("nexus-valid-response-full-name")[0].style.display = "block";

                    }

                    return false;
                }

            }

            else {

                if (document.getElementsByClassName("nexus-valid-icon-full-name").length > 0) {

                    document.getElementsByClassName("nexus-valid-icon-full-name")[0].innerHTML = "<img src=\"/resources/images/desktop/wrong-icon.gif\" />";

                }

                if (document.getElementsByClassName("nexus-valid-response-full-name").length > 0) {

                    document.getElementsByClassName("nexus-valid-response-full-name")[0].innerHTML = ErrorFullNameLengthLimit;
                    document.getElementsByClassName("nexus-valid-response-full-name")[0].style.display = "block";

                }

                return false;

            }

        } else {

            return true;

        }

    }


    checkGender() {

        if (document.getElementsByClassName("nexus-valid-input-gender").length > 0) {

            if (document.getElementsByClassName("nexus-valid-input-gender")[0].value != "") {

                if (document.getElementsByClassName("nexus-valid-icon-gender").length > 0) {

                    document.getElementsByClassName("nexus-valid-icon-gender")[0].innerHTML = "<img src=\"/resources/images/desktop/ok-icon.gif\" />";

                }

                if (document.getElementsByClassName("nexus-valid-response-gender").length > 0) {

                    document.getElementsByClassName("nexus-valid-response-gender")[0].style.display = "none";

                }

                return true;

            }

            else {

                if (document.getElementsByClassName("nexus-valid-icon-gender").length > 0) {

                    document.getElementsByClassName("nexus-valid-icon-gender")[0].innerHTML = "<img src=\"/resources/images/desktop/wrong-icon.gif\" />";

                }

                if (document.getElementsByClassName("nexus-valid-response-gender").length > 0) {

                    document.getElementsByClassName("nexus-valid-response-gender")[0].innerHTML = "* Please select gender!";
                    document.getElementsByClassName("nexus-valid-response-gender")[0].style.display = "block";

                }

                return false;

            }

        } else {

            return true;

        }

    }


    checkPassword(ErrorPassEmpty, ErrorPassAlphaNum) {

        if (document.getElementsByClassName("nexus-valid-input-password").length > 0) {

            if (document.getElementsByClassName("nexus-valid-input-password")[0].value.length === 0) {

                if (document.getElementsByClassName("nexus-valid-icon-password").length > 0) {

                    document.getElementsByClassName("nexus-valid-icon-password")[0].innerHTML = "<img src=\"/resources/images/desktop/wrong-icon.gif\" />";

                }

                if (document.getElementsByClassName("nexus-valid-response-password").length > 0) {

                    document.getElementsByClassName("nexus-valid-response-password")[0].innerHTML = ErrorPassEmpty;
                    document.getElementsByClassName("nexus-valid-response-password")[0].style.display = "block";

                }

                return false;
            }

            if (document.getElementsByClassName("nexus-valid-input-password")[0].value.match("^(?=.{8,20}$)(?=.*?[a-z])(?=.*?[A-Z])(?=.*?[0-9]).*$")){

                if (document.getElementsByClassName("nexus-valid-icon-password").length > 0) {

                    document.getElementsByClassName("nexus-valid-icon-password")[0].innerHTML = "<img src=\"/resources/images/desktop/ok-icon.gif\" />";

                }

                if (document.getElementsByClassName("nexus-valid-response-password").length > 0) {

                    document.getElementsByClassName("nexus-valid-response-password")[0].style.display = "none";

                }

                return true;

            }

            else {

                if (document.getElementsByClassName("nexus-valid-icon-password").length > 0) {

                    document.getElementsByClassName("nexus-valid-icon-password")[0].innerHTML = "<img src=\"/resources/images/desktop/wrong-icon.gif\" />";

                }

                if (document.getElementsByClassName("nexus-valid-response-password").length > 0) {

                    document.getElementsByClassName("nexus-valid-response-password")[0].innerHTML = ErrorPassAlphaNum;
                    document.getElementsByClassName("nexus-valid-response-password")[0].style.display = "block";

                }

                return false;

            }

        } else {

            return true;

        }

    }


    checkPhone() {



        if (document.getElementsByClassName("nexus-valid-input-phone")[0].value.match(/^[0-9]+$/)) {

            if (document.getElementsByClassName("nexus-valid-icon-phone").length > 0) {

                document.getElementsByClassName("nexus-valid-icon-phone")[0].innerHTML = "<img src=\"/resources/images/desktop/ok-icon.gif\" />";

            }

            if (document.getElementsByClassName("nexus-valid-response-phone").length > 0) {

                document.getElementsByClassName("nexus-valid-response-phone")[0].style.display = "none";

            }

            return true;

        }

        else {

            if (document.getElementsByClassName("nexus-valid-icon-phone").length > 0) {

                document.getElementsByClassName("nexus-valid-icon-phone")[0].innerHTML = "<img src=\"/resources/images/desktop/wrong-icon.gif\" />";

            }

            if (document.getElementsByClassName("nexus-valid-response-phone").length > 0) {

                document.getElementsByClassName("nexus-valid-response-phone")[0].innerHTML = "* Please enter valid contact number!";
                document.getElementsByClassName("nexus-valid-response-phone")[0].style.display = "block";

            }

            return false;

        }



    }


    checkPostcode() {

        if (document.getElementsByClassName("nexus-valid-input-postcode").length > 0) {

            if (document.getElementsByClassName("nexus-valid-input-postcode")[0].value != "") {

                if (document.getElementsByClassName("nexus-valid-input-postcode")[0].value.match(/^[0-9]+$/) && document.getElementsByClassName("nexus-valid-input-postcode")[0].value.length == 5) {

                    if (document.getElementsByClassName("nexus-valid-icon-postcode").length > 0) {

                        document.getElementsByClassName("nexus-valid-icon-postcode")[0].innerHTML = "<img src=\"/resources/images/desktop/ok-icon.gif\" />";

                    }

                    if (document.getElementsByClassName("nexus-valid-response-postcode").length > 0) {

                        document.getElementsByClassName("nexus-valid-response-postcode")[0].style.display = "none";

                    }

                    return true;

                }

                else {

                    if (document.getElementsByClassName("nexus-valid-icon-postcode").length > 0) {

                        document.getElementsByClassName("nexus-valid-icon-postcode")[0].innerHTML = "<img src=\"/resources/images/desktop/wrong-icon.gif\" />";

                    }

                    if (document.getElementsByClassName("nexus-valid-response-postcode").length > 0) {

                        document.getElementsByClassName("nexus-valid-response-postcode")[0].innerHTML = "* Please enter valid postcode!";
                        document.getElementsByClassName("nexus-valid-response-postcode")[0].style.display = "block";

                    }

                    return false;

                }

            }

            else {

                if (document.getElementsByClassName("nexus-valid-icon-postcode").length > 0) {

                    document.getElementsByClassName("nexus-valid-icon-postcode")[0].innerHTML = "<img src=\"/resources/images/desktop/ok-icon.gif\" />";

                }

                if (document.getElementsByClassName("nexus-valid-response-postcode").length > 0) {

                    document.getElementsByClassName("nexus-valid-response-postcode")[0].style.display = "none";

                }

                return true;

            }

        } else {

            return true;

        }

    }


    checkReferrerCode() {

        if (document.getElementsByClassName("nexus-valid-input-referrer-code").length > 0) {

            if (document.getElementsByClassName("nexus-valid-input-referrer-code")[0].value != "") {

                if (document.getElementsByClassName("nexus-valid-input-referrer-code")[0].value.length >= 3 && document.getElementsByClassName("nexus-valid-input-referrer-code")[0].value.length <= 255) {

                    if (document.getElementsByClassName("nexus-valid-icon-referrer-code").length > 0) {

                        document.getElementsByClassName("nexus-valid-icon-referrer-code")[0].innerHTML = "<img src=\"/resources/images/desktop/ok-icon.gif\" />";

                    }

                    if (document.getElementsByClassName("nexus-valid-response-referrer-code").length > 0) {

                        document.getElementsByClassName("nexus-valid-response-referrer-code")[0].style.display = "none";

                    }

                    return true;

                }

                else {

                    if (document.getElementsByClassName("nexus-valid-icon-referrer-code").length > 0) {

                        document.getElementsByClassName("nexus-valid-icon-referrer-code")[0].innerHTML = "<img src=\"/resources/images/desktop/wrong-icon.gif\" />";

                    }

                    if (document.getElementsByClassName("nexus-valid-response-referrer-code").length > 0) {

                        document.getElementsByClassName("nexus-valid-response-referrer-code")[0].innerHTML = "* Please enter between 3 - 255 character!";
                        document.getElementsByClassName("nexus-valid-response-referrer-code")[0].style.display = "block";

                    }

                    return false;

                }

            }

            else {

                if (document.getElementsByClassName("nexus-valid-icon-referrer-code").length > 0) {

                    document.getElementsByClassName("nexus-valid-icon-referrer-code")[0].innerHTML = "<img src=\"/resources/images/desktop/ok-icon.gif\" />";

                }

                if (document.getElementsByClassName("nexus-valid-response-referrer-code").length > 0) {

                    document.getElementsByClassName("nexus-valid-response-referrer-code")[0].style.display = "none";

                }

                return true;

            }

        } else {

            return true;

        }

    }


    checkState() {

        if (document.getElementsByClassName("nexus-valid-input-state").length > 0) {

            if (document.getElementsByClassName("nexus-valid-input-state")[0].value != "") {

                if (document.getElementsByClassName("nexus-valid-input-state")[0].value.length >= 3 && document.getElementsByClassName("nexus-valid-input-state")[0].value.length <= 20) {

                    if (document.getElementsByClassName("nexus-valid-icon-state").length > 0) {

                        document.getElementsByClassName("nexus-valid-icon-state")[0].innerHTML = "<img src=\"/resources/images/desktop/ok-icon.gif\" />";

                    }

                    if (document.getElementsByClassName("nexus-valid-response-state").length > 0) {

                        document.getElementsByClassName("nexus-valid-response-state")[0].style.display = "none";

                    }

                    return true;

                }

                else {

                    if (document.getElementsByClassName("nexus-valid-icon-state").length > 0) {

                        document.getElementsByClassName("nexus-valid-icon-state")[0].innerHTML = "<img src=\"/resources/images/desktop/wrong-icon.gif\" />";

                    }

                    if (document.getElementsByClassName("nexus-valid-response-state").length > 0) {

                        document.getElementsByClassName("nexus-valid-response-state")[0].innerHTML = "* Please enter between 3 - 20 character!";
                        document.getElementsByClassName("nexus-valid-response-state")[0].style.display = "block";

                    }

                    return false;

                }

            }

            else {

                if (document.getElementsByClassName("nexus-valid-icon-state").length > 0) {

                    document.getElementsByClassName("nexus-valid-icon-state")[0].innerHTML = "<img src=\"/resources/images/desktop/ok-icon.gif\" />";

                }

                if (document.getElementsByClassName("nexus-valid-response-state").length > 0) {

                    document.getElementsByClassName("nexus-valid-response-state")[0].style.display = "none";

                }

                return true;

            }

        } else {

            return true;

        }

    }


    checkStreet() {

        if (document.getElementsByClassName("nexus-valid-input-street").length > 0) {

            if (document.getElementsByClassName("nexus-valid-input-street")[0].value != "") {

                if (document.getElementsByClassName("nexus-valid-input-street")[0].value.length >= 3 && document.getElementsByClassName("nexus-valid-input-street")[0].value.length <= 255) {

                    if (document.getElementsByClassName("nexus-valid-icon-street").length > 0) {

                        document.getElementsByClassName("nexus-valid-icon-street")[0].innerHTML = "<img src=\"/resources/images/desktop/ok-icon.gif\" />";

                    }

                    if (document.getElementsByClassName("nexus-valid-response-street").length > 0) {

                        document.getElementsByClassName("nexus-valid-response-street")[0].style.display = "none";

                    }

                    return true;

                }

                else {

                    if (document.getElementsByClassName("nexus-valid-icon-street").length > 0) {

                        document.getElementsByClassName("nexus-valid-icon-street")[0].innerHTML = "<img src=\"/resources/images/desktop/wrong-icon.gif\" />";

                    }

                    if (document.getElementsByClassName("nexus-valid-response-street").length > 0) {

                        document.getElementsByClassName("nexus-valid-response-street")[0].innerHTML = "* Please enter between 3 - 255 character!";
                        document.getElementsByClassName("nexus-valid-response-street")[0].style.display = "block";

                    }

                    return false;

                }

            }

            else {

                if (document.getElementsByClassName("nexus-valid-icon-street").length > 0) {

                    document.getElementsByClassName("nexus-valid-icon-street")[0].innerHTML = "<img src=\"/resources/images/desktop/ok-icon.gif\" />";

                }

                if (document.getElementsByClassName("nexus-valid-response-street").length > 0) {

                    document.getElementsByClassName("nexus-valid-response-street")[0].style.display = "none";

                }

                return true;

            }

        } else {

            return true;

        }

    }


    checkUsername(ErrorLengthLimit) {

        if (document.getElementsByClassName("nexus-valid-icon-username").length > 0) {

            var strUsername = document.getElementsByClassName("nexus-valid-input-username")[0].value;
            if (strUsername.trim().indexOf(" ") > 0) {

                document.getElementsByClassName("nexus-valid-icon-username")[0].innerHTML = "<img src=\"/resources/images/desktop/wrong-icon.gif\" />";
                document.getElementsByClassName("nexus-valid-response-username")[0].innerHTML = "* Username can not have spacing!";
                document.getElementsByClassName("nexus-valid-response-username")[0].style.display = "block";

                return false;
            }


            if (document.getElementsByClassName("nexus-valid-input-username")[0].value.length >= 3 && document.getElementsByClassName("nexus-valid-input-username")[0].value.length <= 12 && document.getElementsByClassName("nexus-valid-input-username")[0].value.match(/^[0-9a-zA-Z]+$/)) {

                if (document.getElementsByClassName("nexus-valid-icon-username").length > 0) {

                    document.getElementsByClassName("nexus-valid-icon-username")[0].innerHTML = "<img src=\"/resources/images/desktop/ok-icon.gif\" />";

                }

                if (document.getElementsByClassName("nexus-valid-response-username").length > 0) {

                    document.getElementsByClassName("nexus-valid-response-username")[0].style.display = "none";

                }

                return true;

            }

            else {
                if (document.getElementsByClassName("nexus-valid-icon-username").length > 0) {

                    document.getElementsByClassName("nexus-valid-icon-username")[0].innerHTML = "<img src=\"/resources/images/desktop/wrong-icon.gif\" />";

                }

                if (document.getElementsByClassName("nexus-valid-response-username").length > 0) {

                    document.getElementsByClassName("nexus-valid-response-username")[0].innerHTML = ErrorLengthLimit;
                    document.getElementsByClassName("nexus-valid-response-username")[0].style.display = "block";

                }

                return false;

            }

        } else {

            return true;

        }

    }


}