"use strict";
var KTCreateAccount = function() {
  var rules = {};

    var e, t, i, o, s, r, a = [], d;
    return {
        init: function() {
            (e = document.querySelector("#kt_modal_create_account")) && new bootstrap.Modal(e), t = document.querySelector("#kt_create_account_stepper"), i = t.querySelector("#kt_create_account_form"), o = t.querySelector('[data-kt-stepper-action="submit"]'), s = t.querySelector('[data-kt-stepper-action="next"]'), d = t.querySelector('#draft'), (r = new KTStepper(t)).on("kt.stepper.changed", (function(e) {
              4 === r.getCurrentStepIndex() ? (o.classList.remove("d-none"), o.classList.add("d-inline-block"), s.classList.add("d-none"), d.classList.add('d-none')) : (o.classList.remove("d-inline-block"), o.classList.remove("d-none"), s.classList.remove("d-none"),d.classList.remove("d-none"))
            })), r.on("kt.stepper.next", (function(e) {
                console.log("stepper.next");
                var t = a[e.getCurrentStepIndex() - 1];
                t ? t.validate().then((function(t) {
                    console.log("validated!"), "Valid" == t ? (e.goNext(), KTUtil.scrollTop()) : Swal.fire({
                        text: "Sorry, looks like there are some errors detected, please try again.",
                        icon: "error",
                        buttonsStyling: !1,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-light"
                        }
                    }).then((function() {
                        KTUtil.scrollTop()
                    }))
                })) : (e.goNext(), KTUtil.scrollTop())
            })),r.on("kt.stepper.previous", (function(e) {
                console.log("stepper.previous"), e.goPrevious(), KTUtil.scrollTop()
            })),r.on("kt.stepper.click", (function(e) {
               console.log("stepper.click"), e.goTo(e.getClickedStepIndex()), KTUtil.scrollTop()
            })), a.push(FormValidation.formValidation(i, {
                fields: {
                    title_id: {
                        validators: {
                            notEmpty: {
                                message: "This field is required"
                            }
                        }
                    },
                    name: {
                        validators: {
                            notEmpty: {
                                message: "This field is required"
                            }
                        }
                    },
                    ic_no: {
                        validators: {
                            notEmpty: {
                                message: "This field is required"
                            }
                        }
                    },
                    dob: {
                        validators: {
                            notEmpty: {
                                message: "This field is required"
                            }
                        }
                    },
                    gender_id: {
                        validators: {
                            notEmpty: {
                                message: "This field is required"
                            }
                        }
                    },
                    marital_id: {
                        validators: {
                            notEmpty: {
                                message: "This field is required"
                            }
                        }
                    },
                    ethnic_id: {
                        validators: {
                            notEmpty: {
                                message: "This field is required"
                            }
                        }
                    },
                    avatar: {
                        validators: {
                            // notEmpty: {
                            //     message: "This field is required"
                            // }
                            callback: {
                                message: "This field is required",
                                callback: function(e) {
                                    console.log($('[name="avatar"]').val())
                                    console.log($('[name="avatar_file"]').val())
                                    console.log($('[name="avatar_file"]').val()!="default.png" && $('[name="avatar"]').val()!="");
                                    if($('[name="avatar_file"]').val()=="default.png")
                                      return $('[name="avatar"]').val()!=""
                                }
                            }
                        }
                    },
                    position: {
                        validators: {
                            notEmpty: {
                                message: "This field is required"
                            }
                        }
                    },
                    designation: {
                        validators: {
                            notEmpty: {
                                message: "This field is required"
                            }
                        }
                    },
                    scheme_id: {
                        validators: {
                            notEmpty: {
                                message: "This field is required"
                            }
                        }
                    },
                    grade_id: {
                        validators: {
                            notEmpty: {
                                message: "This field is required"
                            }
                        }
                    },
                    organization: {
                        validators: {
                            notEmpty: {
                                message: "This field is required"
                            }
                        }
                    },
                    programme_id: {
                        validators: {
                            notEmpty: {
                                message: "This field is required"
                            }
                        }
                    },
                    office_street: {
                        validators: {
                            notEmpty: {
                                message: "This field is required"
                            }
                        }
                    },
                    office_city: {
                        validators: {
                            notEmpty: {
                                message: "This field is required"
                            }
                        }
                    },
                    office_postcode: {
                        validators: {
                            notEmpty: {
                                message: "This field is required"
                            },
                            digits: {
                                message: "Postcode must contain only digits"
                            },
                            stringLength: {
                                min: 5,
                                max: 5,
                                message: "Postcode must contain 5 digits only"
                            }
                        }
                    },
                    office_state: {
                        validators: {
                            notEmpty: {
                                message: "This field is required"
                            }
                        }
                    },
                    home_street: {
                        validators: {
                            notEmpty: {
                                message: "This field is required"
                            }
                        }
                    },
                    home_city: {
                        validators: {
                            notEmpty: {
                                message: "This field is required"
                            }
                        }
                    },
                    home_postcode: {
                        validators: {
                            notEmpty: {
                                message: "This field is required"
                            },
                            digits: {
                                message: "Postcode must contain only digits"
                            },
                            stringLength: {
                                min: 5,
                                max: 5,
                                message: "Postcode must contain 5 digits only"
                            }
                        }
                    },
                    home_state: {
                        validators: {
                            notEmpty: {
                                message: "This field is required"
                            }
                        }
                    },
                    office_phone: {
                        validators: {
                            notEmpty: {
                                message: "This field is required"
                            }
                        }
                    },
                    mobile_phone: {
                        validators: {
                            notEmpty: {
                                message: "This field is required"
                            }
                        }
                    },
                    official_email: {
                        validators: {
                            notEmpty: {
                                message: "This field is required"
                            },
                            emailAddress: {
                                message: "The value is not a valid email address"
                            }
                        }
                    },
                    personal_email: {
                        validators: {
                            emailAddress: {
                                message: "The value is not a valid email address"
                            }
                        }
                    }
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger,
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: ".fv-row",
                        eleInvalidClass: "",
                        eleValidClass: ""
                    })
                }
            })), a.push(FormValidation.formValidation(i, {
                fields: {
                  type_id: {
                        validators: {
                            notEmpty: {
                                message: "This field is required"
                            }
                        }
                    },
                    qualification: {
                        validators: {
                            notEmpty: {
                                message: "This field is required"
                            }
                        }
                    },
                    aca_year: {
                        validators: {
                            notEmpty: {
                                 message: "This field is required"
                            }
                        }
                    },
                    institute: {
                        validators: {
                            notEmpty: {
                                 message: "This field is required"
                            }
                        }
                    },
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger,
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: ".fv-row",
                        eleInvalidClass: "",
                        eleValidClass: ""
                    })
                }
            })), a.push(FormValidation.formValidation(i, {
                fields: {
                    year_of_appt: {
                        validators: {
                            notEmpty: {
                                message: "This field is required"
                            }
                        }
                    },
                    year_of_conf: {
                        validators: {
                            notEmpty: {
                                message: "This field is required"
                            }
                        }
                    },
                    headquarters: {
                        validators: {
                            notEmpty: {
                                message: "This field is required"
                            }
                        }
                    },
                    managerial_id: {
                        validators: {
                            callback: {
                                message: "This field is required",
                                callback: function(e) {
                                    if($('[name=group]').val()=="3")
                                        return e.value!==""
                                    return true

                                }
                            }
                        }
                    },
                    managerial_year:{
                        validators: {
                            callback: {
                                message: "This field is required",
                                callback: function(e) {
                                    if($('[name="managerial_id"]').val()>"1")
                                        return e.value!==""
                                    return true

                                }
                            }
                        }
                    },
                    managerial_remark:{
                        validators: {
                                callback: {
                                    message: "This field is required",
                                    callback: function(e) {
                                        if($('[name="managerial_id"]').val()>"1")
                                            return e.value!==""
                                        return true

                                    }
                                }
                            }
                        },
                    "kt_docs_repeater_designation[0][prev_desig]": {
                        validators: {
                            notEmpty: {
                                message: "This field is required"
                            }
                        }
                    },
                    "kt_docs_repeater_designation[0][prev_org]": {
                        validators: {
                            notEmpty: {
                                message: "This field is required"
                            }
                        }
                    },
                    "kt_docs_repeater_designation[0][prev_start]": {
                        validators: {
                            notEmpty: {
                                message: "This field is required"
                            }
                        }
                    },
                    cpdnsr_type: {
                        validators: {
                            notEmpty: {
                                message: "This field is required"
                            }
                        }
                    },
                    cpdnsr_year: {
                        validators: {
                            notEmpty: {
                                message: "This field is required"
                            }
                        }
                    },
                    cpdnsr_mark: {
                        validators: {
                            notEmpty: {
                                message: "This field is required"
                            },
                            numeric: {
                                message: "This field must contain only numbers"
                            },
                        }
                    },
                    lnpt_year: {
                        validators: {
                            notEmpty: {
                                message: "This field is required"
                            }
                        }
                    },
                    lnpt_mark: {
                        validators: {
                            notEmpty: {
                                message: "This field is required"
                            },
                            numeric: {
                                message: "This field must contain only numbers"
                            },
                        }
                    },
                    res_area: {
                        validators: {
                            notEmpty: {
                                message: "This field is required"
                            }
                        }
                    },
                    res_title: {
                        validators: {
                            notEmpty: {
                                message: "This field is required"
                            }
                        }
                    },
                    committee_pos_id: {
                        validators: {
                            callback: {
                                message: "This field is required",
                                callback: function(e) {
                                    if($('[name=group]').val()=="3")
                                        return e.value!==""
                                    return true

                                }
                            }
                        }
                    },
                    committee_year: {
                        validators: {
                            callback: {
                                    message: "This field is required",
                                    callback: function(e) {
                                        if($('[name="committee_pos_id"]').val()>"1")
                                            return e.value!==""
                                        return true

                                    }
                                }
                        }
                    },
                    committee_remark: {
                        validators: {
                            callback: {
                                message: "This field is required",
                                callback: function(e) {
                                    if($('[name="committee_pos_id"]').val()>"1")
                                        return e.value!==""
                                    return true

                                }
                            }
                        }
                    },
                    programme_pos_id: {
                        validators: {
                            callback: {
                                message: "This field is required",
                                callback: function(e) {
                                    if($('[name=group]').val()=="3")
                                        return e.value!==""
                                    return true

                                }
                            }
                        }
                    },
                    programme_year: {
                        validators: {
                            callback: {
                                message: "This field is required",
                                callback: function(e) {
                                    if($('[name="programme_pos_id"]').val()>"1")
                                        return e.value!==""
                                    return true

                                }
                            }
                        }
                    },
                    programme_remark: {
                        validators: {
                            callback: {
                                message: "This field is required",
                                callback: function(e) {
                                    if($('[name="programme_pos_id"]').val()>"1")
                                        return e.value!==""
                                    return true

                                }
                            }
                        }
                    },
                    voluntary_id: {
                        validators: {
                            callback: {
                                message: "This field is required",
                                callback: function(e) {
                                    if($('[name=group]').val()=="3")
                                        return e.value!==""
                                    return true

                                }
                            }
                        }
                    },
                    voluntary_year: {
                        validators: {
                            callback: {
                                    message: "This field is required",
                                    callback: function(e) {
                                        if($('[name="voluntary_id"]').val()=="1")
                                            return e.value!==""
                                        return true

                                    }
                                }
                        }
                    },
                    voluntary_org: {
                        validators: {
                            callback: {
                                    message: "This field is required",
                                    callback: function(e) {
                                        if($('[name="voluntary_id"]').val()=="1")
                                            return e.value!==""
                                        return true

                                    }
                                }
                        }
                    },
                    voluntary_pos: {
                        validators: {
                            callback: {
                                    message: "This field is required",
                                    callback: function(e) {
                                        if($('[name="voluntary_id"]').val()=="1")
                                            return e.value!==""
                                        return true

                                    }
                                }
                        }
                    },
                    research_id: {
                        validators: {
                            callback: {
                                message: "This field is required",
                                callback: function(e) {
                                    if($('[name=group]').val()=="3")
                                        return e.value!==""
                                    return true

                                }
                            }
                        }
                    },
                    research_role: {
                        validators: {
                            callback: {
                                    message: "This field is required",
                                    callback: function(e) {
                                        if($('[name="research_id"]').val()=="1")
                                            return e.value!==""
                                        return true

                                    }
                                }
                        }
                    },
                    research_title: {
                        validators: {
                            callback: {
                                    message: "This field is required",
                                    callback: function(e) {
                                        if($('[name="research_id"]').val()=="1")
                                            return e.value!==""
                                        return true

                                    }
                                }
                        }
                    },
                    research_nmrrid: {
                        validators: {
                            callback: {
                                    message: "This field is required",
                                    callback: function(e) {
                                        if($('[name="research_id"]').val()=="1")
                                            return e.value!==""
                                        return true

                                    }
                                }
                        }
                    },
                    present_id: {
                        validators: {
                            callback: {
                                    message: "This field is required",
                                    callback: function(e) {
                                        if($('[name="research_id"]').val()=="1")
                                            return e.value!==""
                                        return true

                                    }
                                }
                        }
                    },
                    present_remark: {
                        validators: {
                            callback: {
                                    message: "This field is required",
                                    callback: function(e) {
                                        if($('[name="present_id"]').val()=="1")
                                            return e.value!==""
                                        return true

                                    }
                                }
                        }
                    },
                    present_year: {
                        validators: {
                            callback: {
                                    message: "This field is required",
                                    callback: function(e) {
                                        if($('[name="present_id"]').val()=="1")
                                            return e.value!==""
                                        return true

                                    }
                                }
                        }
                    },
                    present_type: {
                        validators: {
                            callback: {
                                    message: "This field is required",
                                    callback: function(e) {
                                        if($('[name="present_id"]').val()=="1")
                                            return e.value!==""
                                        return true

                                    }
                                }
                        }
                    },
                    present_title: {
                        validators: {
                            callback: {
                                    message: "This field is required",
                                    callback: function(e) {
                                        if($('[name="present_id"]').val()=="1")
                                            return e.value!==""
                                        return true

                                    }
                                }
                        }
                    },
                    present_venue: {
                        validators: {
                            callback: {
                                    message: "This field is required",
                                    callback: function(e) {
                                        if($('[name="present_id"]').val()=="1")
                                            return e.value!==""
                                        return true

                                    }
                                }
                        }
                    },
                    publish_id: {
                        validators: {
                            callback: {
                                    message: "This field is required",
                                    callback: function(e) {
                                        if($('[name="research_id"]').val()=="1")
                                            return e.value!==""
                                        return true

                                    }
                                }
                        }
                    },
                    publish_remark: {
                        validators: {
                            callback: {
                                    message: "This field is required",
                                    callback: function(e) {
                                        if($('[name="publish_id"]').val()=="1")
                                            return e.value!==""
                                        return true

                                    }
                                }
                        }
                    },
                    publish_title: {
                        validators: {
                            callback: {
                                    message: "This field is required",
                                    callback: function(e) {
                                        if($('[name="publish_id"]').val()=="1")
                                            return e.value!==""
                                        return true

                                    }
                                }
                        }
                    },
                    publish_year: {
                        validators: {
                            callback: {
                                    message: "This field is required",
                                    callback: function(e) {
                                        if($('[name="publish_id"]').val()=="1")
                                            return e.value!==""
                                        return true

                                    }
                                }
                        }
                    },
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger,
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: ".fv-row",
                        eleInvalidClass: "",
                        eleValidClass: ""
                    })
                }
            })), a.push(FormValidation.formValidation(i, {
                fields: {
                    statement: {
                        validators: {
                            notEmpty: {
                                message: "This field is required"
                            }
                        }
                    },
                    cpd_complete: {
                        validators: {
                            notEmpty: {
                                message: "This field is required"
                            }
                        }
                    },
                    
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger,
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: ".fv-row",
                        eleInvalidClass: "",
                        eleValidClass: ""
                    })
                }
            })), o.addEventListener("click", (function(e) {
                a[3].validate().then((function(t) {
                    console.log("validated!"), "Valid" == t ? (e.preventDefault(), o.disabled = !0, o.setAttribute("data-kt-indicator", "on"), setTimeout((function() {
                        o.removeAttribute("data-kt-indicator"), o.disabled = !1, i.submit()
                    }), 2e3)) : Swal.fire({
                        text: "Sorry, looks like there are some errors detected, please try again.",
                        icon: "error",
                        buttonsStyling: !1,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-light"
                        }
                    }).then((function() {
                        KTUtil.scrollTop()
                    }))
                }))
            })), 
            $(i.querySelector('[name="title_id"]')).on("change", (function() {
                a[0].revalidateField("title_id")
            })), $(i.querySelector('[name="gender_id"]')).on("change", (function() {
                a[0].revalidateField("gender_id")
            })), $(i.querySelector('[name="marital_id"]')).on("change", (function() {
                a[0].revalidateField("marital_id")
            })), $(i.querySelector('[name="ethnic_id"]')).on("change", (function() {
                a[0].revalidateField("ethnic_id")
            })), $(i.querySelector('[name="scheme_id"]')).on("change", (function() {
                a[0].revalidateField("scheme_id")
            })), $(i.querySelector('[name="grade_id"]')).on("change", (function() {
                a[0].revalidateField("grade_id")
            })), $(i.querySelector('[name="programme_id"]')).on("change", (function() {
                a[0].revalidateField("programme_id")
            })), $(i.querySelector('[name="office_state"]')).on("change", (function() {
                a[0].revalidateField("office_state")
            })), $(i.querySelector('[name="home_state"]')).on("change", (function() {
                a[0].revalidateField("home_state")
            })), $(i.querySelector('[name="aca_year"]')).on("change", (function() {
                a[1].revalidateField("aca_year")
            })), $(i.querySelector('[name="type_id"]')).on("change", (function() {
                a[1].revalidateField("type_id")
            })), $(i.querySelector('[name="year_of_appt"]')).on("change", (function() {
                a[2].revalidateField("year_of_appt")
            })), $(i.querySelector('[name="year_of_conf"]')).on("change", (function() {
                a[2].revalidateField("year_of_conf")
            })), $(i.querySelector('[name="managerial_id"]')).on("change", (function() {
                a[2].revalidateField("managerial_id")
            })), $(i.querySelector('[name="managerial_year"]')).on("change", (function() {
                a[2].revalidateField("managerial_year")
            })), $(i.querySelector('[name="lnpt_year"]')).on("change", (function() {
                a[2].revalidateField("lnpt_year")
            })), $(i.querySelector('[name="cpdnsr_year"]')).on("change", (function() {
                a[2].revalidateField("cpdnsr_year")
            })), $(i.querySelector('[name="cpdnsr_type"]')).on("change", (function() {
                a[2].revalidateField("cpdnsr_type")
            })), $(i.querySelector('[name="committee_pos_id"]')).on("change", (function() {
                a[2].revalidateField("committee_pos_id")
            })), $(i.querySelector('[name="committee_year"]')).on("change", (function() {
                a[2].revalidateField("committee_year")
            })), $(i.querySelector('[name="programme_pos_id"]')).on("change", (function() {
                a[2].revalidateField("programme_pos_id")
            })), $(i.querySelector('[name="programme_year"]')).on("change", (function() {
                a[2].revalidateField("programme_year")
            })), $(i.querySelector('[name="voluntary_id"]')).on("change", (function() {
                a[2].revalidateField("voluntary_id")
            })), $(i.querySelector('[name="voluntary_year"]')).on("change", (function() {
                a[2].revalidateField("voluntary_year")
            })), $(i.querySelector('[name="research_id"]')).on("change", (function() {
                a[2].revalidateField("research_id")
            })), $(i.querySelector('[name="research_role"]')).on("change", (function() {
                a[2].revalidateField("research_role")
            })), $(i.querySelector('[name="publish_id"]')).on("change", (function() {
                a[2].revalidateField("publish_id")
            })), $(i.querySelector('[name="publish_year"]')).on("change", (function() {
                a[2].revalidateField("publish_year")
            })), $(i.querySelector('[name="present_id"]')).on("change", (function() {
                a[2].revalidateField("present_id")
            })), $(i.querySelector('[name="present_year"]')).on("change", (function() {
                a[2].revalidateField("present_year")
            })), 
            d.addEventListener("click", (function(e) {
                a[r.getCurrentStepIndex()-1].validate().then((function(t) {
                    console.log("validated!"), "Valid" == t ? (e.preventDefault(), d.disabled = !0, d.setAttribute("data-kt-indicator", "on"), setTimeout((function() {
                        d.removeAttribute("data-kt-indicator"), d.disabled = !1, i.submit()
                    }), 2e3)) : Swal.fire({
                        text: "Sorry, looks like there are some errors detected, please try again.",
                        icon: "error",
                        buttonsStyling: !1,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-light"
                        }
                    }).then((function() {
                        KTUtil.scrollTop()
                    }))
                }))
            }))
        }
    }
}();
KTUtil.onDOMContentLoaded((function() {
    KTCreateAccount.init();

    $('#kt_docs_repeater_academic, #kt_docs_repeater_designation, #kt_docs_repeater_lnpt, #kt_docs_repeater_cpdnsr,  #kt_docs_repeater_apc, #kt_docs_repeater_interest').repeater({
      initEmpty: false,
      
      show: function () {
          $(this).slideDown();
          $(this).find('[data-kt-repeater="select2"]').select2();
          $(this).find('[data-kt-repeater="datepicker"]').flatpickr({
              altInput: true,
              altFormat: "m-Y",
              dateFormat: "Y-m-d",
              mode: "range"
          });
          Inputmask({
                "mask" : "99/9999",
                "placeholder": "mm/yyyy",
            }).mask("#kt_input_startdate");
            Inputmask({
                "mask" : "99/9999",
                "placeholder": "mm/yyyy",
            }).mask("#kt_input_enddate");
      
      },

      hide: function (deleteElement) {
          $(this).slideUp(deleteElement);
      },
      ready: function(){}

    });
    $('[data-kt-repeater="select2"]').select2();
  
    // $('#statement').maxlength({
    //   warningClass: "badge badge-primary",
    //   limitReachedClass: "badge badge-success"
    // });
    $('#statement').textcounter({
        type                     : "word",            // "character" or "word"
        min                      : 0,                      // minimum number of characters/words
        max                      : 250,                    // maximum number of characters/words, -1 for unlimited, 'auto' to use maxlength attribute
        countContainerElement    : "div",                  // HTML element to wrap the text count in
        countContainerClass      : "text-count-wrapper",   // class applied to the countContainerElement
        inputErrorClass          : "error",                // error class appended to the input element if error occurs
        counterErrorClass        : "error",                // error class appended to the countContainerElement if error occurs
        counterText              : "Total Count: %d",        // counter text
        errorTextElement         : "div",                  // error text element
        minimumErrorText         : "Minimum not met",      // error message for minimum not met,
        maximumErrorText         : "Maximum exceeded",     // error message for maximum range exceeded,
        displayErrorText         : true,                   // display error text messages for minimum/maximum values
        stopInputAtMaximum       : true,                   // stop further text input if maximum reached
        countSpaces              : false,                  // count spaces as character (only for "character" type)
        countDown                : true,                  // if the counter should deduct from maximum characters/words rather than counting up
        countDownText            : "Remaining word(s): %d"
    });

    $("#date_of_gazettement").flatpickr();
    $('[data-kt-repeater="datepicker"]').flatpickr({
        altInput: true,
        altFormat: "m-Y",
        dateFormat: "Y-m-d",
        mode: "range",
        defaultDate : ''
    });
    Inputmask({
        "mask" : "99/9999",
        "placeholder": "mm/yyyy",
    }).mask("#kt_input_startdate");
    Inputmask({
        "mask" : "99/9999",
        "placeholder": "mm/yyyy",
    }).mask("#kt_input_enddate");

    $('[name="managerial_id"]').on("change", (function() {
        if($(this).val()==1)
            $('.managerial').addClass('d-none')
        else
            $('.managerial').removeClass('d-none');
    }));

    $('[name="committee_pos_id"]').on("change", (function() {
        if($(this).val()==1)
            $('.committee').addClass('d-none')
        else
            $('.committee').removeClass('d-none');
    }));
    $('[name="programme_pos_id"]').on("change", (function() {
        if($(this).val()==1)
            $('.programme').addClass('d-none')
        else
            $('.programme').removeClass('d-none');
    }));
    $('[name="voluntary_id"]').on("change", (function() {
        if($(this).val()==0)
            $('.voluntary').addClass('d-none')
        else
            $('.voluntary').removeClass('d-none');
    }));
    $('[name="research_id"]').on("change", (function() {
        if($(this).val()==0)
            $('.research').addClass('d-none')
        else
            $('.research').removeClass('d-none');
    }));
    $('[name="present_id"]').on("change", (function() {
        if($(this).val()==0)
            $('.present').addClass('d-none')
        else
            $('.present').removeClass('d-none');
    }));
    $('[name="publish_id"]').on("change", (function() {
        if($(this).val()==0)
            $('.publish').addClass('d-none')
        else
            $('.publish').removeClass('d-none');
    }));

}));