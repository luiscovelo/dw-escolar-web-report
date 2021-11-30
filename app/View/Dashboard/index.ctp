<div class="col-md-12">

    <section id="etnia">
        <iframe id="if_etnia" src="<?php echo $this->Html->url(array("controller"=>"dashboard","action"=>"etnia")) ?>" style="width: 100%" frameBorder="0" scrolling="auto"></iframe>
    </section>

    <section id="rede">
        <iframe id="if_rede" src="<?php echo $this->Html->url(array("controller"=>"dashboard","action"=>"rede")) ?>" style="width: 100%" frameBorder="0" scrolling="auto"></iframe>
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

</script>