$(document).ready(function () {
    let passo = $("fieldset").prop('id');
    switch (passo) {
        case "passo1":
            prepararPasso1();
            break;
        case "passo2":
            prepararPasso2();
            break;
    }

});

function prepararPasso1() {
    console.log("Preparar Passo 1");

    $('input').removeClass("is-invalid");

    $('#btnContinue1').click(function () {
        firstAccessPasso1()
    });

   $('#btnCancel').click(function () {
        window.location.href = $("[name=baseUrl]").val() + '/';
    });
}

function prepararPasso2() {
    console.log("Preparar Passo 2");

    $('#btnContinue').click(function () {
        firstAccessPasso2()
    });

   $('#btnCancel').click(function () {
        window.location.href = $("[name=baseUrl]").val() + '/';
    });

}

function prepararPasso3(retorno) {
    console.log('Preparar passo 3');
    $("#divLoading").show();

    $("[id^='msg']").html("").hide();
    $("#btnAcoes2").html('').hide();

    $("#passo3").html(retorno.message).show();

    document.querySelector('#passo3').scrollIntoView({
        behavior: 'smooth'
    });

    $('#btnContinue').click(function () {
        firstAccessPasso3()
    });

    $('#btnCancel').click(function () {
        window.location.href = $("[name=baseUrl]").val() + '/';
    });
}

function firstAccessPasso1() {

    if (!validarDadosPasso1()) {
            $('#divLoading').hide();
        return;
    }

    //Dados válidos
    var params = $("#formFirstAccess").serialize();

    console.log("seus parametros são esses: ", params);

    $.ajax({
        type: 'post',
        url: $("[name=baseUrl]").val() + '/first_access_validate',
        data: params,
        dataType: 'json',
        beforeSend: function () {
            $("#divLoading").show();
            $("[id^='divError-']").html("").hide();
            $("[id^='divNotice-']").html("").hide();
            $("[id^='msg']").html("").hide();
            $("input").removeClass("is-invalid");
        },
        success: function (retorno) {
            $("[name='csrf_test_name']").val(retorno.csrf_hash);
            var id, message, x;

            if (retorno.status == "SUCCESS") {

                $("[id^='divError-']").html("").hide();
                $("input").removeClass("is-invalid");

                $("[id^=msg]").html("").hide();
                $("#msgSucessoGeral").html(retorno.message).show();
                document.querySelector('#msgSucessoGeral').scrollIntoView({
                    behavior: 'smooth'
                });

            } else if (retorno.status.substr(0, 5) == "ERROR") {
                $("[id^='divError-']").html("").hide();
                $("input").removeClass("is-invalid");
                for (x in retorno.errors) {
                    id = retorno.errors[x].id;
                    message = retorno.errors[x].message;
                    $('#' + id).addClass("is-invalid");
                    $("#divError-" + id).html(message).show();
                }
                $("[id^=msg]").html("").hide();
                $("#msgErroGeral").html(retorno.message).show();
                document.querySelector('#msgErroGeral').scrollIntoView({
                    behavior: 'smooth'
                });
            } else if (retorno.status.substr(0, 6) == "NOTICE") {
                for (x in retorno.errors) {
                    id = retorno.errors[x].id;
                    message = retorno.errors[x].message;
                    $("#divNotice-" + id).html(message).show();
                }
                $("[id^=msg]").html("").hide();
                $("#msgAvisoGeral").html(retorno.message).show();
                document.querySelector('#msgAvisoGeral').scrollIntoView({
                    behavior: 'smooth'
                });
            } else {
                $("[id^=msg]").html("").hide();
                $("#msgErroGeral").html(debug(retorno)).show();
                document.querySelector('#msgErroGeral').scrollIntoView({
                    behavior: 'smooth'
                });
            }

        },
        error: function (xhr) {

            $("#divLoading").hide();
            $("[id^=msg]").html("").hide();
            $("#msgErroGeral").html("Código do erro: " + xhr.status + "<br />Erro: " + xhr.statusText).fadeIn(300);
            document.querySelector('#msgErroGeral').scrollIntoView({
                behavior: 'smooth'
            });

        },
        complete: function () {
            $('#divLoading').hide();
            $("#btnSend").prop("disabled", false);
        }
    });

}

function firstAccessPasso2() {

    //Dados válidos
    var params = $("#formFirstAccess").serialize();

    $.ajax({
        type: 'post',
        url: $("[name=baseUrl]").val() + '/first_access_validate_p2',
        data: params,
        dataType: 'json',
        beforeSend: function () {
            $("#divLoading").show();
            $("[id^='divError-']").html("").hide();
            $("[id^='divNotice-']").html("").hide();
            $("[id^='msg']").html("").hide();
            $("input").removeClass("is-invalid");
        },
        success: function (retorno) {
            $("[name='csrf_test_name']").val(retorno.csrf_hash);
            var id, message, x;

            if (retorno.status == "SUCCESS") {

                prepararPasso3(retorno);


            } else if (retorno.status.substr(0, 5) == "ERROR") {
                $("[id^='divError-']").html("").hide();
                $("input").removeClass("is-invalid");
                for (x in retorno.errors) {
                    id = retorno.errors[x].id;
                    message = retorno.errors[x].message;
                    $('#' + id).addClass("is-invalid");
                    $("#divError-" + id).html(message).show();
                }
                $("[id^=msg]").html("").hide();
                $("#msgErroGeral").html(retorno.message).show();
                document.querySelector('#msgErroGeral').scrollIntoView({
                    behavior: 'smooth'
                });
            } else if (retorno.status.substr(0, 6) == "NOTICE") {
                for (x in retorno.errors) {
                    id = retorno.errors[x].id;
                    message = retorno.errors[x].message;
                    $("#divNotice-" + id).html(message).show();
                }
                $("[id^=msg]").html("").hide();
                $("#msgAvisoGeral").html(retorno.message).show();
                document.querySelector('#msgAvisoGeral').scrollIntoView({
                    behavior: 'smooth'
                });
            } else {
                $("[id^=msg]").html("").hide();
                $("#msgErroGeral").html(debug(retorno)).show();
                document.querySelector('#msgErroGeral').scrollIntoView({
                    behavior: 'smooth'
                });
            }

        },
        error: function (xhr) {

            $("#divLoading").hide();
            $("[id^=msg]").html("").hide();
            $("#msgErroGeral").html("Código do erro: " + xhr.status + "<br />Erro: " + xhr.statusText).fadeIn(300);
            document.querySelector('#msgErroGeral').scrollIntoView({
                behavior: 'smooth'
            });

        },
        complete: function () {
            $('#divLoading').hide();
            $("#btnSend").prop("disabled", false);
        }
    });

}

function firstAccessPasso3() {

    //Dados válidos
    var params = $("#formFirstAccess").serialize();

    $.ajax({
        type: 'post',
        url: $("[name=baseUrl]").val() + '/first_access_validate_p3',
        data: params,
        dataType: 'json',
        beforeSend: function () {
            $("#divLoading").show();
            $("[id^='divError-']").html("").hide();
            $("[id^='divNotice-']").html("").hide();
            $("[id^='msg']").html("").hide();
            $("input").removeClass("is-invalid");
        },
        success: function (retorno) {
            $("[name='csrf_test_name']").val(retorno.csrf_hash);
            var id, message, x;

            if (retorno.status == "SUCCESS") {
                $("#divLoading").show();

                $("[id^='divError-']").html("").hide();
                $("[id^='divNotice-']").html("").hide();
                $("[id^='msg']").html("").hide();
                $("input").removeClass("is-invalid");
                $("input").removeClass("is-notice");
                // $("#msgSucessoGeral").html(retorno.message).show().animate({scrollTop: $(document).height()});
                $("#passo4").html(retorno.message).show();
                document.querySelector('#passo4').scrollIntoView({
                    behavior: 'smooth'
                });

                // setTimeout(function(){
                //     window.location.href = $("[name=baseUrl]").val() + '/';
                // }, 5000);


            } else if (retorno.status.substr(0, 5) == "ERROR") {
                $("[id^='divError-']").html("").hide();
                $("input").removeClass("is-invalid");
                for (x in retorno.errors) {
                    id = retorno.errors[x].id;
                    message = retorno.errors[x].message;
                    $('#' + id).addClass("is-invalid");
                    $("#divError-" + id).html(message).show();
                }
                $("[id^='msg']").html("").hide();
                $("#msgErroGeral").html(retorno.message).show();
                document.querySelector('#msgErroGeral').scrollIntoView({
                    behavior: 'smooth'
                });

                setTimeout(function(){
                    window.location.href = $("[name=baseUrl]").val() + '/';
                }, 5000);


            } else if (retorno.status.substr(0, 6) == "NOTICE") {
                $("[id^='divNotice-']").html("").hide();
                $("input").removeClass("is-notice");
                for (x in retorno.errors) {
                    id = retorno.errors[x].id;
                    message = retorno.errors[x].message;
                    $("#divNotice-" + id).html(message).show();
                }
                $("[id^=msg]").html("").hide();
                $("#msgAvisoGeral").html(retorno.message).show();
                $('html, body').animate({scrollTop: $(document).height()});
            } else {
                $("[id^=msg]").html("").hide();
                $("#msgErroGeral").html(debug(retorno)).show();
                document.querySelector('#msgErroGeral').scrollIntoView({
                    behavior: 'smooth'
                });
            }

        },
        error: function (xhr) {

            $("#divLoading").hide();
            $("[id^=msg]").html("").hide();
            $("#msgErroGeral").html("Código do erro: " + xhr.status + "<br />Erro: " + xhr.statusText).fadeIn(300);
            document.querySelector('#msgErroGeral').scrollIntoView({
                behavior: 'smooth'
            });

        },
        complete: function () {
            $('#divLoading').hide();
            $("#btnSend").prop("disabled", false);
        }
    });

}

function validarDadosPasso1() {

    var totalErros = 0;
    $("[id^='divError-']").html("").hide();

    if ($('#identificador').val() == '') { // Verificar CPF
        //CPF vazio
        $('#identificador').addClass("is-invalid");
        var labelCpf = $('label[for="identificador"]').text().replace(/\*/g,'').toUpperCase();
        $('#divError-identificador').html('O campo '+labelCpf+' é obrigatório').show();
        totalErros++;
    } else if (!isCpfValido($('#identificador').val())) { // Verificar CPF
        //CPF inválido
        $('#identificador').addClass("is-invalid");
        $('#divError-identificador').html('CPF inválido').show();
        totalErros++;
    }


    if (jQuery.trim($('#email').val()) == '') { //Verificar Email
        //Email vazio
        $('#email').addClass("is-invalid");
        var labelEmail = $('label[for="email"]').text().replace(/\*/g,'').toUpperCase();
        $('#divError-email').html('O campo '+labelEmail+' é obrigatório').show();
        totalErros++;
    } else if (!isEmail($('#email').val())) { //Verificar Email
        //Email inválido
        $('#email').addClass("is-invalid");
        $('#divError-email').html('Email inválido').show();
        totalErros++;
    }

    if (totalErros > 0) {
        setFocusError();
    }
    return !(totalErros > 0);

}
