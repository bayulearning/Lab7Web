<?= $this->include('template/header'); ?>
<?= $this->extend('layout/main')?>
<h1><?= $title; ?></h1> 
<hr> <p><?= $content; ?></p> 
<?= $this->include('template/footer'); ?>