<?= $this->extend('page_template') ?>
<?= $this->section('content') ?>
    <h1>Exchange Rates</h1>
	<div class="row justify-content-center">
        <div class="col-12">
            <?= $this->include('exchange_form'); ?>
        
			<?= $this->include('exchange_table'); ?>
		</div>
	</div>
<?= $this->endSection() ?>