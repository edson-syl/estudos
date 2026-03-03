$(document).ready(() => {
    $datapadrao = "2018-08-01"

	$('#btn-suporte').click(() => {
        $('#pagina').load('suporte.html')
    })

    $('#btn-doc').click(() => {
        $('#pagina').load('documentacao.html')
    })

    $('#btn-dash').click(() => {
        $('body').load('index.html')
    })
    
    $.ajax({
            type: 'GET',
            url: 'app.php',
            data: { datas: $('#datas').val() },
            dataType: 'json',
            success: function(dados) {
            $('#clientes_ativos').text(dados.clientesAtivos)
            }
        });
    $('#datas').change(function() {
        $.ajax({
            type: 'GET',
            url: 'app.php',
            data: { datas: $('#datas').val() },
            dataType: 'json',
            success: function(dados) {
            $('#num_vendas').text(dados.numeroVendas);
            $('#total_vendas').text(dados.totalVendas);
            }
        });
    });

    $.ajax({
        type: 'GET',
        url: 'app.php',
        data: { datas: $datapadrao },
        dataType: 'json',
        success: function(dados) {
            $('#clientes_ativos').text(dados.clientesAtivos)
            $('#clientes_inativos').text(dados.clientesInativos)
            $('#total_reclamacoes').text(dados.totalReclamacoes)
            $('#total_elogios').text(dados.totalElogios)
            $('#total_sugestoes').text(dados.totalSugestoes)
            $('#total_despesas').text(dados.totalDespesas)
            }
    });
    
    

})

