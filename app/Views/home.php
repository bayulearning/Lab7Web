<?= $this->include('template/header')?>
<?= $this->extend('layout/main') ?> 
<?= $this->section('content') ?> 
<h1>
    <?= $title; ?>
</h1> 
<hr> 
<p>
    <?= $content; ?>
</p> 
<?= $this->endSection() ?>
<?= $this->include('template/footer')?>