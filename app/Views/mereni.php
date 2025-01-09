<?= $this->extend("layout/sablona"); ?>

<?=$this->section("content");?>
<?php
$navbar = ["class" => "nav-link"];
?>

<div class="container">
<div class="row">
<h1>Měření stanice:</h1>

        <?php
        //karty skibidi
    //   foreach($data as $row){
    //        echo"<div class=\"card col-lg-4\">";
  //          echo"<div class=\"cad-body\">"."ID Stanice: ".$row["Stations_ID"]."<br>"."Datum měření: ".$row["date"]."<br>"."Vlhkost: ".$row["humidity"]."<br>"."Maximální vítr: ".$row["max_wind"]."</div>";
   //         echo"</div>";
//        }

        $table = new \CodeIgniter\View\Table();

$table->setHeading('ID', "Datum", "Vlhkost", "Maximální vítr", "Délka slunce");
foreach($data as $row){
    $table->addRow($row["Stations_ID"], $row["date"], $row["humidity"], $row["max_wind"], $row["sun_length"]);
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

?>
</div>
</div>
</div>
<?=$this ->endSection(); ?>