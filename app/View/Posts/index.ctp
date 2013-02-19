<h1>Blog posts</h1>
    <div class="row">
<div class="span9">
        <?php foreach ($posts as $post): ?>
        <div class=" post">
    <div class="row">
            <div class="span7">
                <h4>
                    <?php echo $this->Html->link($post['Post']['title'],
                    array('controller' => 'posts', 'action' => 'view', $post['Post']['id'])); ?>
                </h4>
            </div>
            <div class="span2">
                <div class="pull-right time">
                    <?php echo $post['Post']['created']; ?>
                </div>

            </div>
        </div>
            <?php echo $post['Post']['body']; ?>
            <hr>
        </div>
        <?php endforeach; ?>
</div>
        <div class="span3">
            <?php echo $this->element('sidebar'); ?>
        </div>
    </div>