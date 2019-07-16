//== Class definition
var WizardDemo = function () {
    //== Base elements
    var wizardEl = $('#m_wizard');
    var formEl = $('#m_form');
    var validator;
    var wizard;

    //== Private functions
    var initWizard = function () {
        //== Initialize form wizard
        wizard = wizardEl.mWizard({
            startStep: 1
        });

        //== Validation before going to next page
        wizard.on('beforeNext', function(wizard) {

            // Check for family details form.
            // if ($(".has-danger")[0]) {
            //     swal({
            //         "title": "",
            //         "text": "There are some errors in your submission. Please correct them.",
            //         "type": "error",
            //         "confirmButtonClass": "btn btn-secondary m-btn m-btn--wide"
            //     });
            //     return false;  // don't go to the next step
            // }

            if (validator.form() !== true) {
                return false;  // don't go to the next step
            }
        })

        //== Change event
        wizard.on('change', function(wizard) {
            mApp.scrollTop();
        });
    }

    var initValidation = function() {
        validator = formEl.validate({
            //== Validate only visible fields
            ignore: ":hidden",

            //== Validation rules
            rules: {
                //=== Member details(step 1)
                legal_name: {
                    required: true,
                    minlength: 3
                },
                chinese_name: {
                    minlength: 3
                },
                nickname: {
                    minlength: 2
                },
                ic_number: {
                    number: true,
                    minlength: 12,
                    maxlength: 12,
                    required: true
                },
                email: {
                    email: true
                },
                mobile_phone: {
                    number: true,
                    rangelength: [10, 11]
                },
                house_phone: {
                    number: true
                },
                //== Mailing address(step 2)
                parent_ic: {
                    number: true,
                    minlength: 12,
                    maxlength: 12
                },
                address1: {
                    required: true,
                    minlength: 5
                },
                address2: {
                    minlength: 5
                },
                postcode: {
                    required: true,
                    number: true,
                    minlength: 5
                },
                city: {
                    required: true,
                    minlength: 3
                },
                state: {
                    required: true,
                    minlength: 3
                },
                country: {
                    required: true
                },
                //== Family Details
                'name_family[]': {
                    minlength: 2
                },
                'relationship_family[]': {
                    minlength: 2
                },
                'phone_family[]': {
                    number: true,
                    rangelength: [10, 11]
                },
                //=== Church Information(step 3)
                baptized: {
                    required: true,
                },
                baptized_in: {
                    required: true,
                },
                baptized_in_others: {
                    required: true,
                },
                membership_in: {
                    required: true,
                },
                membership_in_others: {
                    required: true,
                },
                'fellowship[]': {
                    required: true
                }
            },

            //== Validation messages
            messages: {
                // 'legal_name': {
                //     required: 'You must select at least one communication option'
                // }
            },
            // errorElement : 'div',
            // errorLabelContainer: '.errorTxt',
            errorPlacement: function(error, element) {
                // Custom position
                if ((element.attr("name") == "fellowship[]") || (element.attr("name") == "baptized") ||
                    (element.attr("name") == "baptized_in") || (element.attr("name") == 'membership_in'))  {
                    error.insertAfter(element.parent().parent().last());
                } else if (element.attr("name") == 'country') {
                    // The error text placement in different.
                    error.insertAfter(element.parent().last());
                } else {
                    // Default position: if no match is met (other fields)
                    error.insertAfter(element.parent().next());
                }
            },

            //== Display error
            invalidHandler: function(event, validator) {
                mApp.scrollTop();

                console.log(validator);
                console.log('this is validator');

                swal({
                    "title": "",
                    "text": "There are some errors in your submission. Please correct them.",
                    "type": "error",
                    "confirmButtonClass": "btn btn-secondary m-btn m-btn--wide"
                });
            },

            //== Submit valid form
            submitHandler: function (form) {
                console.log(form);
                console.log('what the data now');
            }
        });
    }

    var initSubmit = function() {
        var btn = formEl.find('[data-wizard-action="submit"]');

        btn.on('click', function(e) {
            e.preventDefault();

            if (validator.form()) {
                //== See: src\js\framework\base\app.js
                mApp.progress(btn);
                //mApp.block(formEl);

                //== See: http://malsup.com/jquery/form/#ajaxSubmit
                formEl.ajaxSubmit({
                    success: function(resp) {
                        mApp.unprogress(btn);
                        //mApp.unblock(formEl);
                        if (resp.statusCode == 200) {
                            swal({
                                "title": "",
                                "text": "The application has been successfully submitted!",
                                "type": "success",
                                "confirmButtonClass": "btn btn-secondary m-btn m-btn--wide"
                            });

                            // Redirect home page after 3 seconds.
                            setTimeout(function() {
                                window.location.href = "/";
                            }, 3000);
                        } else {
                            swal({
                                "title": "",
                                "text": "Something went wrong. Please try again.",
                                "type": "error",
                                "confirmButtonClass": "btn btn-secondary m-btn m-btn--wide"
                            });
                        }
                    }
                });
            }
        });
    }

    return {
        // public functions
        init: function() {
            wizardEl = $('#m_wizard');
            formEl = $('#m_form');

            initWizard();
            initValidation();
            initSubmit();
        }
    };
}();

jQuery(document).ready(function() {
    WizardDemo.init();
});
