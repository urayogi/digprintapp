var Script = function () {

    $().ready(function() {
        // validate signup form on keyup and submit
        $("#register_form").validate({
            rules: {
                fullname: {
                    required: true,
                    minlength: 4
                },
                address: {
                    required: true,
                    minlength: 10
                },
                username: {
                    required: true,
                    minlength: 3
                },
                password: {
                    required: true,
                    minlength: 3
                },
                confirm_password: {
                    required: true,
                    minlength: 3,
                    equalTo: "#password"
                },
                passwordedit: {
                    required: false,
                    minlength: 3
                },
                confirm_passwordedit: {
                    required: false,
                    minlength: 3,
                    equalTo: "#passwordedit"
                },
                topic: {
                    required: "#newsletter:checked",
                    minlength: 2
                },
                agree: "required"
            },
            messages: {
                fullname: {
                    required: "Please enter a Full Name.",
                    minlength: "Your Full Name must consist of at least 6 characters long."
                },
                address: {
                    required: "Please enter a Address.",
                    minlength: "Your Address must consist of at least 10 characters long."
                },
                username: {
                    required: "Please enter a Username.",
                    minlength: "Your username must consist of at least 5 characters long."
                },
                password: {
                    required: "Mohon diisi password.",
                    minlength: "Wajib minimal 3 karakter."
                },
                confirm_password: {
                    required: "Mohon diisi password.",
                    minlength: "Wajib minimal 3 karakter.",
                    equalTo: "Password harus sama dengan di atas."
                },
                passwordedit: {

                    minlength: "Wajib minimal 3 karakter."
                },
                confirm_passwordedit: {
                    
                    minlength: "Wajib minimal 3 karakter.",
                    equalTo: "Password harus sama dengan di atas."
                },
                email: "Please enter a valid email address.",
                agree: "Please accept our terms & condition."
            }
        });

        // propose username by combining first- and lastname
        $("#username").focus(function() {
            var firstname = $("#firstname").val();
            var lastname = $("#lastname").val();
            if(firstname && lastname && !this.value) {
                this.value = firstname + "." + lastname;
            }
        });

        //code to hide topic selection, disable for demo
        var newsletter = $("#newsletter");
        // newsletter topics are optional, hide at first
        var inital = newsletter.is(":checked");
        var topics = $("#newsletter_topics")[inital ? "removeClass" : "addClass"]("gray");
        var topicInputs = topics.find("input").attr("disabled", !inital);
        // show when newsletter is checked
        newsletter.click(function() {
            topics[this.checked ? "removeClass" : "addClass"]("gray");
            topicInputs.attr("disabled", !this.checked);
        });
    });


}();
