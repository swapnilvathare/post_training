<h3>Featured Posts</h3>
    <ul>

        <?php foreach ($posts as $post): ?>
        <li>
            <?php echo $this->Html->link($post['Post']['title'],
            array('controller' => 'posts', 'action' => 'view', $post['Post']['id'])); ?>
        </li>
        <?php endforeach; ?>
    </ul>