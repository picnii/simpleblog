<?php
/* @var $this PostController */
/* @var $model Post */

$this->breadcrumbs=array(
	'Posts'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Post', 'url'=>array('index')),
	array('label'=>'Create Post', 'url'=>array('create')),
	array('label'=>'Update Post', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Post', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Post', 'url'=>array('admin')),
);
?>

<h1><?php echo $model->subject; ?></h1>
<div class="body">
	<?php echo $model->content; ?>
</div>
Create By : <?php echo $model->user->email; ?> 
<h2>Comment</h2>
<?php foreach ($model->comments as $comment) { ?>
	<div class="comment">
		<?php echo $comment->comment; ?>
		<div class="by">
			By. <?php echo $comment->user->email; ?>
		</div>
	</div>
<?php } ?>