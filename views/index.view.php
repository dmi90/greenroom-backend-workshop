<?php require "partials/head.php"; ?>

<h1>Home</h1>

<ul>
<?php foreach ($tasks as $task) : ?>
    <li>
        <?php if ($task->completed) : ?>
            <strike><?= $task->getAssignee() . ": " . $task->description ?></strike>
        <?php else: ?>
            <?= $task->getAssignee() . ": " . $task->description ?>
        <?php endif; ?>
    </li>
<?php endforeach; ?>
</ul>

<?php require "partials/footer.php"; ?>