<?= $this->extend("layout/sablona"); ?>

<?=$this->section("content");?>
<body>
<div class="container-fluid">
<h1 style="text-align: center; font-size: 72px;">Projekt Počasí</h1>
<p style="text-align: center; font-size: 48px;">Jen pro ty co ví!</p>


</body>
<?php
$navbar = ["class" => "nav-link"];
?>
<!-- <?= anchor("pokus", "Klikni sem", $navbar); ?> -->

<?php
$img = array(
    "src" => "obrazky/mango.png",
    "alt" => "skibidi",
    "class" => "mx-auto d-block",
    "style" => "width: 25%; height: auto; align-content: center;"
);
echo img($img);
?>

<?=$this ->endSection(); ?>