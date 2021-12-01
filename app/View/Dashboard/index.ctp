<div class="col-md-12">

    <section id="etnia">
        <iframe id="if_etnia" src="<?php echo $this->Html->url(array("controller"=>"dashboard","action"=>"etnia")) ?>" style="width: 100%" frameBorder="0" scrolling="auto"></iframe>
    </section>
    <br>
    <section id="rede">
        <iframe id="if_rede" src="<?php echo $this->Html->url(array("controller"=>"dashboard","action"=>"rede")) ?>" style="width: 100%" frameBorder="0" scrolling="auto"></iframe>
    </section>
    <br>
    <section id="genero">
        <iframe id="if_genero" src="<?php echo $this->Html->url(array("controller"=>"dashboard","action"=>"genero")) ?>" style="width: 100%" frameBorder="0" scrolling="auto"></iframe>
    </section>
    <br>
    <section id="renda">
        <iframe id="if_renda" src="<?php echo $this->Html->url(array("controller"=>"dashboard","action"=>"renda")) ?>" style="width: 100%" frameBorder="0" scrolling="auto"></iframe>
    </section>
    <br>
    <section id="matricula">
        <iframe id="if_matricula" src="<?php echo $this->Html->url(array("controller"=>"dashboard","action"=>"matricula")) ?>" style="width: 100%" frameBorder="0" scrolling="auto"></iframe>
    </section>
    <br>
    <section id="naturalidade">
        <iframe id="if_naturalidade" src="<?php echo $this->Html->url(array("controller"=>"dashboard","action"=>"naturalidade")) ?>" style="width: 100%" frameBorder="0" scrolling="auto"></iframe>
    </section>
    <br>
    <section id="faixa">
        <iframe id="if_faixa" src="<?php echo $this->Html->url(array("controller"=>"dashboard","action"=>"faixa")) ?>" style="width: 100%" frameBorder="0" scrolling="auto"></iframe>
    </section>

</div>

<script>
var if_etnia = document.getElementById("if_etnia");

if_etnia.onload = function(){
    if_etnia.style.height = if_etnia.contentWindow.document.body.scrollHeight + 'px';
}

var if_rede = document.getElementById("if_rede");

if_rede.onload = function(){
    if_rede.style.height = if_rede.contentWindow.document.body.scrollHeight + 'px';
}

var if_genero = document.getElementById("if_genero");

if_genero.onload = function(){
    if_genero.style.height = if_genero.contentWindow.document.body.scrollHeight + 'px';
}

var if_renda = document.getElementById("if_renda");

if_renda.onload = function(){
    if_renda.style.height = if_renda.contentWindow.document.body.scrollHeight + 'px';
}

var if_matricula = document.getElementById("if_matricula");

if_matricula.onload = function(){
    if_matricula.style.height = if_matricula.contentWindow.document.body.scrollHeight + 'px';
}

var if_naturalidade = document.getElementById("if_naturalidade");

if_naturalidade.onload = function(){
    if_naturalidade.style.height = if_naturalidade.contentWindow.document.body.scrollHeight + 'px';
}

var if_faixa = document.getElementById("if_faixa");

if_faixa.onload = function(){
    if_faixa.style.height = if_faixa.contentWindow.document.body.scrollHeight + 'px';
}
</script>