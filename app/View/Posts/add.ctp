<div class="row">
    <div class="span9">
        <h3>About Webonise</h3>
<?php
echo $this->Form->create('Post');
echo $this->Form->input('title');
echo $this->Form->input('body', array('rows' => '3'));
echo $this->Form->end('Save Post');
?>
    </div>
    <div class="span3">
        <?php echo $this->element('sidebar'); ?>
    </div>
</div>