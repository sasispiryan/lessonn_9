jQuery(document).ready(function($) {
    let rate_value = 0;
    $("#changedrat").on("click", function() {
    $.ajax({
        url:'./../server/routes/web.php',
        method:'get',
        data:{action:'_dolar', name:'USA'},
        dataType:'json',
        success:function(response) {
            rate_value = response.rate[0].rate;
            $("#new_rate").val(rate_value)
        }
    });
})
        $("#changedrat").on("click", function() {
    $.ajax({
        url:'./../server/routes/web.php',
        method:'get',
        data:{action:'evro', name:'EUR'},
        dataType:'json',
        success:function(response) {
            rate_value = response.rate[0].rate;
            $("#new_rate").val(rate_value)
        }
    });
})
    $("#change").on("click", function() {
        let result = +$("#value").val() * rate_value;
        $("#result").val(result);
    })
    $("#btn-update").on("click", function() {
        let rate = +$("#new_rate").val();
        $.ajax({
            url:'./../server/routes/web.php',
            method:'post',
            data:{action:'update_rate', rate},
            success:function() {
                location.reload();
            }
        })
    })
})