// ============================================
//  W.A Moraes Peças e Acessórios Automotivos
//  Arquivo: js/script.js
//  Aluno: 1º Trimestre - Desenvolvimento Front-End
//  Funcionalidade: Validação do formulário de contato
// ============================================


// Aguarda o carregamento completo da página antes de executar o código
document.addEventListener("DOMContentLoaded", function () {

    // Seleciona o formulário pelo elemento form da página
    var formulario = document.querySelector("form");

    // Adiciona o evento de submit ao formulário
    formulario.addEventListener("submit", function (evento) {

        // Impede o envio padrão do formulário enquanto validamos os campos
        evento.preventDefault();

        // Pega os valores digitados em cada campo
        var nome      = document.getElementById("nome").value;
        var email     = document.getElementById("email").value;
        var telefone  = document.getElementById("telefone").value;
        var mensagem  = document.getElementById("mensagem").value;

        // ---- Validação do Nome ----
        if (nome === "") {
            alert("Por favor, preencha o campo Nome.");
            document.getElementById("nome").focus();
            return;
        }

        // ---- Validação do E-mail ----
        if (email === "") {
            alert("Por favor, preencha o campo E-mail.");
            document.getElementById("email").focus();
            return;
        }

        // Verifica se o e-mail contém "@" e "." — validação básica de formato
        if (email.indexOf("@") === -1 || email.indexOf(".") === -1) {
            alert("Por favor, informe um e-mail válido (exemplo: nome@email.com).");
            document.getElementById("email").focus();
            return;
        }

        // ---- Validação do Telefone ----
        if (telefone === "") {
            alert("Por favor, preencha o campo Telefone.");
            document.getElementById("telefone").focus();
            return;
        }

        // Remove tudo que não for número para contar os dígitos
        var apenasNumeros = telefone.replace(/\D/g, "");

        // Um telefone válido deve ter pelo menos 10 dígitos (DDD + número)
        if (apenasNumeros.length < 10) {
            alert("Por favor, informe um telefone válido com DDD (mínimo 10 dígitos).");
            document.getElementById("telefone").focus();
            return;
        }

        // ---- Validação da Mensagem ----
        if (mensagem === "") {
            alert("Por favor, escreva uma mensagem antes de enviar.");
            document.getElementById("mensagem").focus();
            return;
        }

        // ---- Todos os campos estão corretos ----
        alert("Mensagem enviada com sucesso! Entraremos em contato em breve.");

        // Limpa todos os campos do formulário após o envio bem-sucedido
        document.getElementById("nome").value     = "";
        document.getElementById("email").value    = "";
        document.getElementById("telefone").value = "";
        document.getElementById("mensagem").value = "";

    });

});
