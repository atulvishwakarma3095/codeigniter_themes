<?= $this->extend('layout/dashboard-layout');?>
<?= $this->section('content')?>

<h1>Profile</h1><br>


<br>
<?= current_url();?><br>
<?= base_url('user/profile');?>
<?= $this->endSection();?>