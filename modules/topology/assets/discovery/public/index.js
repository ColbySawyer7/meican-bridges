/**
 * @copyright Copyright (c) 2016 RNP
 * @license http://github.com/ufrgs-hyman/meican#license
 */

function submitDeleteForm() {
    $("#rule-form").submit();
}

$(document).ready(function() {
    $("#rule-grid").on("click",'.execute-discovery',  function() {
        context = $(this);
        $.ajax({
            url: baseUrl+'/topology/discovery/execute',
            method: "GET",
            data: {
                rule: context.parent().parent().parent().attr('data-key'),
            },
            success: function(response) {
            },
            error: function(response) {
            }
        });
        return false;
    });
});