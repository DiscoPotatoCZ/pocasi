<?= $this->extend("layout/sablona"); ?>
<?=$this->section("content");?>

<div class="row pt-3">
    <h1>Info o <?php foreach ($bundesland as $skibidi){
        echo($skibidi["name"]);
    } ?></h1>
    <div class="col-6">
    <h2>Mapa:</h2>
        <?php foreach ($bundesland as $skibidi): ?>
            <img class="img-fluid" style="width: 30%; height: auto;" src="<?= base_url("obrazky/" . esc($skibidi["mapa"])) ?>" alt="Mapa">
        <?php endforeach; ?>
    </div>
    <div class="col-6">
    <h2>Vlajka:</h2>
        <?php foreach ($bundesland as $skibidi): ?>
            <img class="img-fluid" style="width: 30%; height: auto;" src="<?= base_url("obrazky/" . esc($skibidi["vlajka"])) ?>" alt="Vlajka">
        <?php endforeach; ?>
    </div>
</div>

<?= $this->endSection() ?>