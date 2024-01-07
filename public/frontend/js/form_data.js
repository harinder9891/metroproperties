function validateForm(formNumber) {
    var form = $('#form' + formNumber);
    var formData = form.serialize();
    
    // Clear previous error messages
    form.find('.error').text('');

    // Perform client-side validation
    if (!validateFields(form)) {
        return;
    }
    var formid2 =form.attr('id');
    // Continue with AJAX request if validation passes
    $.ajax({
        url: "/lead/store", // Replace with your route
        method: "POST",
        data: formData,
        dataType: "json",
        success: function (data, textStatus, xhr) {
            // Handle the validation response
            if(textStatus == 'success'){
              $('#success_'+formid2).text('Thank you! We appreciate your interest and will get back to you soon.').css('color','green');
            }
        },
        error: function (xhr, status, error) {
            console.log(xhr.responseText);
        }
    });
}

function validateFields(form) {
    var valid = true;

    var formid =form.attr('id');
    // Add your custom validation logic here
    form.find('.required').each(function () {
        var input = $(this);
        var fieldName = input.attr('name');
        var errorSpan = $('#error_'+formid +'_' + fieldName);
        if (input.val().trim() == '') {
            errorSpan.text('Please fill in the ' +fieldName+ ' field.').css('color','red');
            valid = false;
        }
    });

    return valid;
}