function infoDados(nome, cpf, dataNascimento) {
    // Contar o número de caracteres no nome
    var caractNome = nome.length;

    function validaCPF(cpf) {
        cpf = cpf.replace(/[^\d]+/g, '');
        return cpf.length == 11;
    }

    var cpfValido = validaCPF(cpf) ? "Válido" : "Inválido";

    // Calcular o número de dias decorridos desde a data de nascimento
    var dataNascimentoArray = dataNascimento.split('/');
    var dataNascimentoFormatada = new Date(dataNascimentoArray[2], dataNascimentoArray[1] - 1, dataNascimentoArray[0]);
    var dataHoje = new Date();
    var diff = Math.abs(dataHoje - dataNascimentoFormatada);
    var numDias = Math.ceil(diff / (1000 * 60 * 60 * 24));

    return caractNome + " - " + cpfValido + " - " + numDias + " dias";
}

console.log(infoDados("Jorge Amado da Silva", "154.181.777-69", "20/05/1978"));
