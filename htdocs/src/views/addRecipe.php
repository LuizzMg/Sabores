
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Receita</title>
    <link rel="stylesheet" href="../public/css/addRecipe.css" />
    
</head>
<body>
    <div id="viewAddRecipe">

    <div id="formaddRecipe">
    <h3>Crie sua Receita</h3>
  <form id="formulario" method="POST" action="/index.php?page=home">

    <label for="tipo" class="identificador">Tipo da Receita</label>
    <select id="tipo" class="campo_input item_form_login" name="tipo">
        <option value="Entrada" class="campo_opt">Entrada</option>
        <option value="Prato Principal" class="campo_opt">Prato Principal</option>
        <option value="Sobremesa" >Sobremesa</option>
    </select>

    <label for="custo" class="identificador">Custo Total (R$)</label>
    <input type="number" id="custo" class="campo_input item_form_login" name="custo" placeholder="120">

    <label for="tempo_prep" class="identificador">Tempo de Preparo (min)</label>
    <input type="number" class="campo_input item_form_login" id="tempo_prep" name="tempo_prep" min="1" placeholder="45">

    <label for="ingred" class="identificador">Ingredientes</label>
    <textarea id="ingred" class="campo_input item_form_login" name="ingred" rows="5" placeholder="Farinha ; Leite ; Ovo"></textarea>

    <label for="mod_prep" class="identificador">Modo de Preparo</label>
    <textarea id="mod_prep"  class="campo_input item_form_login" name="mod_prep" rows="6" placeholder="Cozinhe ambos os ingredientes"></textarea>

    <button type="submit" id="criar_receita">Criar Receita</button>
  
</form>
  <div id="mensagem"></div>
</div>
</div>
</body>
</html>