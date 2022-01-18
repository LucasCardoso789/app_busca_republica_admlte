<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
@extends('adminlte::page')

@section('content_header')
    <h1>Adição de República</h1>
@stop

@section('content')
    <p>Aqui você poderá adicionar uma nova República no Sistema</p>

    <form action="{{ route('republica.store') }}" method="post">
        @csrf
{{-- label com nome e imput --}}
<div class="row">
    <x-adminlte-input name="nome" label="Digite o nome da República" placeholder="República Unimontes"
        fgroup-class="col-md-6"/>

    <x-adminlte-input name="quant_quartos" label="Digite a quantidade quartos na república" placeholder="3" type="number"
        fgroup-class="col-md-6"/>
</div>

<div class="row">
    <x-adminlte-input name="preco" label="Digite o valor mensal da república" placeholder="R$600" type="number"
        fgroup-class="col-md-6"/>
</div>

<div>
    <x-adminlte-textarea label="Insira a descrição da república" name="descricao" placeholder="Insira a descrição..."/> 
</div>

<div>
    <x-adminlte-textarea label="Se pertinente, insira as regras da república" name="regras" placeholder="Insira a regras..."/> 
</div>

<div class="row">
    <x-adminlte-input name="contato" label="Digite o telefone de contato da república" placeholder="(38) 1234-5678" type="number"
        fgroup-class="col-md-6"/>
</div>

<h5>Endereço</h5>


    <div style="font-weight: 700;">Digite o cep da república (somente números)</div>
        <div style="display: flex; flex-direction: row">
            <x-adminlte-input name="cep" id="cep" placeholder="39400636" type="number"
                    fgroup-class="col-md-6"/>     
        </div> 

        


<div class="row">
    <x-adminlte-input name="rua" id="logradouro" label="Digite o nome da rua da república" placeholder="Rua Santo Antônio"
        fgroup-class="col-md-6"/>

    <x-adminlte-input name="numero" label="Digite o número da república" placeholder="142" type="number"
        fgroup-class="col-md-6"/>

    <x-adminlte-input name="complemento" id="complemento" label="Digite o complemento, se necessário" placeholder="Apartamento 402"
        fgroup-class="col-md-6"/>
</div>

<div>
<x-adminlte-input name="bairro" id="bairro" label="Digite o nome do bairro da república" placeholder="Morada do Sol"
        fgroup-class="col-md-6"/>
</div>

<div>
    <x-adminlte-input name="cidade" id="cidade" label="Digite o nome da cidade da república" placeholder="Montes Claros"
            fgroup-class="col-md-6"/>
</div>

<div>
    <x-adminlte-input name="estado" id="uf" label="Digite o nome do estado da república" placeholder="bahia"
            fgroup-class="col-md-6"/>
</div>


<div>
    <x-adminlte-button class="btn-flat m-6" type="submit" label="Salvar" theme="success" icon="fas fa-lg fa-save"/>
</div>

<div>
    <br>
</div>

</form>


<script type="text/javascript">
	$("#cep").focusout(function(){
        $("#cep").focusout(function(){
		//Início do Comando AJAX
		$.ajax({
			//O campo URL diz o caminho de onde virá os dados
			//É importante concatenar o valor digitado no CEP
			url: 'https://viacep.com.br/ws/'+$(this).val()+'/json/unicode/',
			//Aqui você deve preencher o tipo de dados que será lido,
			//no caso, estamos lendo JSON.
			dataType: 'json',
			//SUCESS é referente a função que será executada caso
			//ele consiga ler a fonte de dados com sucesso.
			//O parâmetro dentro da função se refere ao nome da variável
			//que você vai dar para ler esse objeto.
			success: function(resposta){
				//Agora basta definir os valores que você deseja preencher
				//automaticamente nos campos acima.
				$("#logradouro").val(resposta.logradouro);
				$("#complemento").val(resposta.complemento);
				$("#bairro").val(resposta.bairro);
				$("#cidade").val(resposta.localidade);
				$("#uf").val(resposta.uf);
				//Vamos incluir para que o Número seja focado automaticamente
				//melhorando a experiência do usuário
				$("#numero").focus();
			}
		});
	});	
	});
</script>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
