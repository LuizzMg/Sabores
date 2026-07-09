const campoCusto = document.getElementById('custo');
const campoTempo = document.getElementById('tempo_prep');
const campoIngred = document.getElementById('ingred');
const campoModo = document.getElementById('mod_prep');
const msg_output = document.getElementById('mensagem');

function teste(event){
    event.preventDefault(); // IMPEDE a página de recarregar e cancelar o fetch

    let formularioValido = true; // Variável de controle para saber se o formulário está válido

    if(campoCusto.value.trim() === "") { // trim remove os espaços em branco das extremidades
        campoCusto.classList.add('erro_borda'); // Adiciona a borda vermelha
        formularioValido = false;
    } else {
        campoNome.classList.remove('erro_borda'); // Remove se estiver preenchido
    }

    if (campoSenha.value.trim() === "") {
        campoSenha.classList.add('erro_borda'); // Adiciona a borda vermelha
        formularioValido = false;
    } else {
        campoSenha.classList.remove('erro_borda'); // Remove se estiver preenchido
    }

    if (!formularioValido) { // Exibe a mensagem na div baseado na validação
        msg_output.textContent = "Nome do usuário ou senha obrigatório!";
        msg_output.className = "msg_erro"; // Aplica cor vermelha no texto
        console.error("Nome do usuário ou senha obrigatório!");
    } else {
        logar_db(campoNome.value.trim(), campoSenha.value.trim());
    }
}
