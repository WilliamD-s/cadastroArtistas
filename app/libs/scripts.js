$(document).ready(function(){
    remover = (id) => {
        let resultado = $("#result");
        $.ajax({
            method: "POST",
            url: "index.php?act=remover",
            data: {item:id}
        }).done(()=>{
            resultado.text('removido com sucesso');
        }).fail(()=>{
            resultado.text('falha ao remover');
        })

        $('#artista'+id).remove();
    }

    enviar = () => {
        let nome = $('#artNome').val();
        let pais = $('#artPais').val();
        let resultado = $("#result");

        $.ajax({
            method: "POST",
            url: "index.php?act=cadastrar",
            data: { nome: nome, pais: pais}
        }).done(()=>{
            resultado.text('enviado com sucesso');
        }).fail(()=>{
            resultado.text('falha ao enviar');
        })

        $('#artNome').val("");
        $('#artPais').val("");
    }
})