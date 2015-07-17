<?php include __DIR__.'/../header.php' ?>
<?php if(count($people) > 0): ?>
    <ul>
    <?php foreach($people as $person): ?>
        <li><?php echo $person; ?></li>
    <?php endforeach; ?>
    </ul>
<?php endif; ?>
<?php include __DIR__.'/../footer.php' ?>
