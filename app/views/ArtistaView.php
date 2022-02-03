
<div style="margin-bottom:4%;">
    <label for="nome">Nome</label>
    <input id="artNome" type="text" name="nome">
    <label for="pais">Pais do artista</label>
    <input id="artPais" type="text" name="pais">
    <button onclick="enviar()">enviar</button>
    <span id="result" style="background-color:yellow;border-radius:55px;"></span>
</div>

<div>
<?php if(count($content['artistas'])>0){
    $artistas = $content['artistas'];
?>
    <table style="width:100%;">
        <colgroup>
            <tr>
                <td span="1">ID</td>
                <td span="1">NOME</td>
                <td span="1">País</td>
                <td span="1">Opções</td>
            </tr>
        </colgroup>
        <?php  foreach($artistas as $artista){ ?>
        <tr id="artista<?= $artista['id'] ?>">
            <td style="width:20%;"><?= $artista['id']; ?> </td>
            <td style="width:30%;"><?= $artista['nome']; ?> </td>
            <td style="width:30%;"><?= $artista['pais']; ?> </td>
            <td style="width:20%;">
                <a><button onclick="remover(<?= $artista['id'] ?>)">Remover</button></a>
            </td>
        </tr>
        <?php } ?>
    </table>
<?php } ?>
</div>

