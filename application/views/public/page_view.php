<?php $this->load->view('public/templates/header', array(
	'title' => $page_data->name,
	'link' => $page_data->slug,
)); ?>

<ul class="breadcrumb">
	<li><?php echo $page_data->name ?></li>
</ul>

<?php echo $page_data->body ?>

<?php $this->load->view('public/templates/footer') ?>