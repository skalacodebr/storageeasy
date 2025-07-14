$.noConflict();
jQuery(document).ready(function($) {
   $(document).ready(function(){
        $('#placa').mask('AAA-0A00', {
            translation: {
                'A': {pattern: /[A-Za-z]/},
                '0': {pattern: /[0-9]/}
            }
        });
        $('#Renavam').mask('00000000000', {
            reverse: true
        });
        
        $('#cnh').mask('0000000000000', {
            reverse: true
        });
        
        $('#pgu').mask('0000000000000', {
            reverse: true
        });
    });
    
    $(document).ready(function(){
        var cpfCnpjMaskBehavior = function (val) {
            return val.replace(/\D/g, '').length <= 11 ? '000.000.000-009' : '00.000.000/0000-00';
        },
        cpfCnpjpOptions = {
            onKeyPress: function(val, e, field, options) {
                field.mask(cpfCnpjMaskBehavior.apply({}, arguments), options);
            }
        };
    
        $('#CPF_CNPJ').mask(cpfCnpjMaskBehavior, cpfCnpjpOptions);
    });
    
    $(document).ready(function(){
        $('#nome_proprietario').on('input', function(){
            this.value = this.value.replace(/[0-9]/g, '');
        });
        
        $('#bairro').on('input', function(){
            this.value = this.value.replace(/[0-9]/g, '');
        });
    });
    
    $(document).ready(function() {
        $('.btn-cancelar').click(function(e) {
            e.preventDefault(); // Impede o comportamento padrão do link
            window.location.reload(); // Recarrega a página
        });
    });
    
    $(document).ready(function() {
        ['emissao', 'primeira_habilitacao', 'venc_cnh', 'data_exame'].forEach(function(id) {
            $('#' + id).flatpickr({
                locale: 'pt' // Define a localização para português
            });
        });
    });
    
    $(document).ready(function() {
        function limpa_formulario_cep() {
            // Limpa valores dos formulários de endereço.
            $jq("#logradouro").val("");
            $jq("#Complemento").val("");
            $jq("#numero_casa").val("");
            $jq("#bairro").val("");
            $jq("#municipio").val("");
            $jq("#uf").val("");
            // Remove o modo de leitura dos campos.
            $jq("#logradouro, #Complemento, #numero_casa, #bairro, #municipio, #uf").prop('readonly', false);
        }

        function exibirAlerta(mensagem) {
            $jq("#alertText").text(mensagem); // Define a mensagem do alerta
            $jq("#cepAlert").fadeIn(); // Mostra o alerta
        }

        $("#CEP").mask('00000-000').blur(function() {
            var cep = $jq(this).val().replace(/\D/g, "");
            if (cep != "") {
                var validacep = /^[0-9]{8}$/;
                if (validacep.test(cep)) {
                    $jq("#logradouro").val("...");
                    $jq("#bairro").val("...");
                    $jq("#municipio").val("...");
                    $jq("#uf").val("...");
                    $jq.getJSON("https://viacep.com.br/ws/" + cep + "/json/?callback=?", function(dados) {
                        if (!("erro" in dados)) {
                            // Atualiza os campos com os valores da consulta e torna-os readonly se tiverem informações.
                            if (dados.logradouro) {
                                $jq("#logradouro").val(dados.logradouro).prop('readonly', true);
                            }
                            if (dados.bairro) {
                                $jq("#bairro").val(dados.bairro).prop('readonly', true);
                            }
                            if (dados.localidade) {
                                $jq("#municipio").val(dados.localidade).prop('readonly', true);
                            }
                            if (dados.uf) {
                                $jq("#uf").val(dados.uf).prop('readonly', true);
                            }
                        } else {
                            limpa_formulario_cep();
                            exibirAlerta("CEP não encontrado.");
                        }
                    });
                } else {
                    limpa_formulario_cep();
                    exibirAlerta("Formato de CEP inválido.");
                }
            } else {
                limpa_formulario_cep();
            }
        });

    // Permite a edição quando o valor do CEP é alterado.
        $("#CEP").on('input', function() {
            if ($jq(this).val().length === 0) {
                $jq("#logradouro, #Complemento, #numero_casa, #bairro, #municipio, #uf").prop('readonly', false);
            }
        });
    })
});