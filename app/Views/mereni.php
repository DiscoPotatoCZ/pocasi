<?= $this->extend("layout/sablona"); ?>

<?=$this->section("content");?>
<?php
$navbar = ["class" => "nav-link"];
?>

<div class="container">
<div class="row">
<h1>Měření stanice:</h1>

        <?php
        foreach($data as $row){
            echo"<div class=\"card col-lg-4\">";
            echo"<div class=\"cad-body\">"."ID Stanice: ".$row["Stations_ID"]."<br>"."Datum měření: ".$row["date"]."<br>"."Vlhkost: ".$row["humidity"]."<br>"."Maximální vítr: ".$row["max_wind"]."</div>";
            echo"</div>";
        }

?>
</div>
</div>
</div>
<?=$this ->endSection(); ?>