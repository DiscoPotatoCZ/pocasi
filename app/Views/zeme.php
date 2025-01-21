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
$skibidiVlajka = [];
foreach ($bundesland as $row) {
    $skibidiVlajka[] = [
        'src' => base_url("obrazky/" . $row['vlajka']),
        'alt' => "vlajka",
        'class' => 'img-fluid'
    ];
}

foreach ($station as $row) {
    echo "<div class=\"card col-lg-4\">";
    echo "<div class=\"card-body\">";

    foreach ($skibidiVlajka as $vlajka) {
        echo img($vlajka); 
    }

    echo anchor("mereni/" . $row["S_ID"], $row["place"]) . "<br>";
    echo "Zeměpisná šířka: " . $row["geo_latitude"] . "<br>";
    echo "Zeměpisná délka: " . $row["geo_longtitude"] . "<br>";
    echo "Nadmořská výška: " . $row["height"];
    echo "</div>";
    echo "</div>";
}


?>
</div>
</div>


<?=$this ->endSection(); ?>