<div class="card">
    <div class="card-body">
        <h4 class="card-title">
            Etnia
        </h4>

        <hr>

        <?php echo $this->Form->create('report'); ?>
            <div class="row" style="padding-bottom: 7px;">
                <div class="col-md-3">
                    <?php echo $this->Form->input('genero_id',array('label' => 'Gênero', 'class' => 'form-control form-control-chosen','options'=>$generos,"empty"=>"Todos gêneros","label"=>false)); ?>
                </div>

                <div class="col-md-3">
                    <?php echo $this->Form->input('rede_id',array('label' => 'Rede', 'class' => 'form-control form-control-chosen','options'=>$redes,"empty"=>"Todas redes","label"=>false)); ?>
                </div>

                <div class="col-md-3">
                    <?php echo $this->Form->input('renda_id',array('label' => 'Renda', 'class' => 'form-control form-control-chosen','options'=>$rendas,"empty"=>"Todas rendas","label"=>false)); ?>
                </div>

                <div class="col-md-3">
                    <?php echo $this->Form->input('matricula_id',array('label' => 'Situação matrícula', 'class' => 'form-control form-control-chosen','options'=>$matriculas,"empty"=>"Todas situações de matrícula","label"=>false)); ?>
                </div>

            </div>
            
            <div class="row">

                <div class="col-md-3">
                    <?php echo $this->Form->input('estado_id',array('label' => 'Estado', 'class' => 'form-control form-control-chosen','options'=>$estados,"empty"=>"Todos estados","label"=>false)); ?>
                </div>

                <div class="col-md-3">
                    <?php echo $this->Form->input('cidade_id',array('label' => 'Cidade', 'class' => 'form-control form-control-chosen','options'=>$cidades,"empty"=>"Todas cidades","label"=>false)); ?>
                </div>

                <div class="col-md-6">
                    <?php echo $this->Form->button('Filtrar <i class="fa fa-search"></i>',array('type' => 'submit', 'class' => 'btn-block pull-left btn-flat btn btn-info')); ?>
                </div>

            </div>

        <?php echo $this->Form->end(); ?>

        <br>

        <div class="row">
                
            <div class="col-md-6">
            
                <table class="table table-bordered">
                    <tr>
                        <th></th>
                        <?php foreach ($dados as $key => $value) { ?>
                            <th><?php echo $value["etnia"]["nome"] ?></th>
                        <?php } ?>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <?php foreach ($dados as $key => $value) { ?>
                            <td><?php echo $value[0]["total"] ?></td>
                        <?php } ?>
                    </tr>
                </table>

            </div>

            <div class="col-md-6">

                <select id="select-type-chart" class="form-control form-control-sm" onchange="changeChart(this.value)">
                    <option value="">Alterar tipo do gráfico</option>
                    <option value="line">Gráfico em linha</option>
                    <option value="bar">Gráfico em barra</option>
                    <option value="doughnut">Gráfico em doughnut</option>
                    <option value="pie">Gráfico em pizza</option>
                </select>
                <hr>
                <center>
                    <div class="chart-container" style="position: relative;width:25vw">
                        <canvas id="chart"></canvas>
                    </div>
                </center>
            </div>

        </div>

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="<?php echo $this->webroot ?>js/palette.js"></script>

<script>

const ctx = document.getElementById('chart').getContext('2d');

var data = {
    labels: <?php echo $labels ?>,
    datasets: [{
        label: '# Qtde por etnia',
        data: <?php echo $values ?>,
        backgroundColor: COLORS_HEX.map(function(hex){
            return hex;
        }),
        borderWidth: 1
    }]
};

var chartCfg = {
    type: 'pie',
    data: data
};

var myChart = new Chart(ctx, chartCfg );

function changeChart(type) {
    if(type){
        chartCfg.type = type;
        myChart.update();
    }
}

</script>