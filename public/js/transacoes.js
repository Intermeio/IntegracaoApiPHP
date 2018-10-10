// No clique do botão com o id gerar_token é feito uma requisição em AJAX para a controler Ajax e o método getToken para ser apresentado na tela
$("#gerar_token").click(function () {
    var request = $.ajax({
        url: $(this).attr("data-url"),
        method: "GET",
    });
    request.done(function (data) {
        if (data != null) {
            swal("Token gerado com sucesso!.", { icon: "success" });
            $("#token_valor").html(data);
        }
    });
    request.fail(function (jqXHR, textStatus) {
        swal("Erro ao gerar o token, tente novamente.", { icon: "error" });
    });
});

// Limpa o token apresentado na tela
$("#limpar_token").click(function () {
    $("#token_valor").html('');
});

// No change do ratio button dependendo do que for passado por parametro mostra ou oculta a div de split
function hiidenClienteSplit(valor){
    if(valor){
        $("#abortamento_split").removeAttr('hidden');
        $("#div_split_cliente").removeAttr('hidden');
    }
    else{
        $("#abortamento_split").attr('hidden', true);
        $("#div_split_cliente").attr('hidden', true);
    }
}

// Função para deixar os campos input somente numeros, "." e "/"
function somenteNumeros(num) {
    var er = /[^0-9./]/;
    er.lastIndex = 0;
    var campo = num;
    if (er.test(campo.value)) {
      campo.value = "";
    }
}