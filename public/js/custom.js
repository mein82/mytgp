$(document).ready(function() {
    $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
  });
 });

$('#ic_no').on('change', function () {
    if($(this).val()!=''){
        var testString = $(this).val();
        var numericString = testString.replace(/-/gi,"");
        $(this).val(numericString);

        var date = getDob($(this).val());
        $('#dob').val(date);
        $('#gender_id').val(getGender($(this).val()));
        $('#gender_id').trigger('change');
    }else{
        $('#dob').val('');
    }
});

function getGender(idNumber){
    var digit = idNumber.substring(11, 12);
    if (digit % 2 == 0) return 2; else return 1;
}

function getDob(idNumber) {
    var Year = idNumber.substring(0, 2);
    var Month = idNumber.substring(2, 4)
    var Day = idNumber.substring(4, 6)

    var cutoff = (new Date()).getFullYear() - 2000

    var dob = (Year > cutoff ? '19' : '20') + Year + '-' + Month + '-' + Day;

    return dob;
}

function stringMatch(term, candidate) {
        return candidate && candidate.toLowerCase().indexOf(term.toLowerCase()) >= 0;
    }

function matchCustom(params, data) {
    // If there are no search terms, return all of the data
    if ($.trim(params.term) === '') {
        return data;
    }
    // Do not display the item if there is no 'text' property
    if (typeof data.text === 'undefined') {
        return null;
    }
    // Match text of option
    if (stringMatch(params.term, data.text)) {
        return data;
    }
    // Match attribute "data-foo" of option
    if (stringMatch(params.term, $(data.element).attr('data-foo'))) {
        return data;
    }
    // Return `null` if the term should not be displayed
    return null;
}

function formatCustom(state) {
    return $(
        '<div><div>' + state.text + '</div><div class="text-gray-500 fs-8">'
            + $(state.element).attr('data-foo')
            + '</div></div>'
    );
}