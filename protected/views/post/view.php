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

<h1>Create Comment</h1>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'comment-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($new_comment); ?>

	<div class="row">
		<?php echo $form->labelEx($new_comment,'comment'); ?>
		<?php echo $form->textArea($new_comment,'comment',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($new_comment,'comment'); ?>
	</div>


	<?php echo $form->hiddenField($new_comment,'post_id'); ?>
	

	<div class="row">
		Post By <?php echo Yii::app()->user->name; ?>
		<?php echo $form->hiddenField($new_comment,'user_id'); ?>
		
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($new_comment->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->