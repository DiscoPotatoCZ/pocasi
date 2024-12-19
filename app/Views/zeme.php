<?= $this->extend("layout/sablona"); ?>

<?=$this->section("content");?>
<body>

</body>

<?php


    ?>

    <div class="container">
    <div class="row">
    <h1>Přehled meteorologických stanic ve spolkové zemi 
<?php
foreach ($bundesland as $row) {
    echo $row["name"];
}
?>
</h1>

        <?php
        foreach($station as $row){
            echo"<div class=\"card col-lg-4\">";
            echo"<div class=\"cad-body\">".anchor("mereni/" .$row["S_ID"],$row["place"])."<br>"." Zeměpisná šířka: ".$row["geo_latitude"]."<br>"." Zeměpisná délka: ".$row["geo_longtitude"]."<br>"." Nadmořská výška: ".$row["height"]."</div>";
            echo"</div>";
        }

?>
</div>
</div>


<?=$this ->endSection(); ?>