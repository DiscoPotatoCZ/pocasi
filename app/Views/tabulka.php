<?= $this->extend("layout/sablona"); ?>

<?=$this->section("content");?>
<body>
<div class="container">
<h1>Spolkové země:</h1>

</body>
<?php
$navbar = ["class" => "nav-link"];
?>
<!-- <?= anchor("pokus", "Klikni sem", $navbar); ?> -->

<?php

$table = new \CodeIgniter\View\Table();
$table->setHeading('Jméno');
foreach($bundesland as $Skibidi_ligma_sigma){
    $table->addRow(anchor("zeme/".$Skibidi_ligma_sigma["id"],$Skibidi_ligma_sigma["name"]));
    //anchor("hrac/".$Skibidi_ligma_sigma["id"],$Skibidi_ligma_sigma["name"]);
}
$template = array(
    'table_open'=> '<table class="table table-bordered">',
    'thead_open'=> '<thead>',
    'thead_close'=> '</thead>',
    'heading_row_start'=> '<tr>',
    'heading_row_end'=>' </tr>',
    'heading_cell_start'=> '<th>',
    'heading_cell_end' => '</th>',
    'tbody_open' => '<tbody>',
    'tbody_close' => '</tbody>',
    'row_start' => '<tr>',
    'row_end'  => '</tr>',
    'cell_start' => '<td>',
    'cell_end' => '</td>',
    'row_alt_start' => '<tr>',
    'row_alt_end' => '</tr>',
    'cell_alt_start' => '<td>',
    'cell_alt_end' => '</td>',
    'table_close' => '</table>'
    );
    
    $table->setTemplate($template);

echo $table->generate();



$img = array(
    "src" => "obrazky/mango.png",
    "alt" => "skibidi",
    "class" => "mx-auto d-block",
    "style" => "width: 25%; height: auto; align-content: center;"
);
?>

<?=$this ->endSection(); ?>