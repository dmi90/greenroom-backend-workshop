<?php require "partials/head.php"; ?>

<h1>Home</h1>

<ul>
<?php foreach ($tasks as $task) : ?>
    <li>
        <?php if ($task['completed']) : ?>
            <strike><?= $task['assignee'] . ": " . $task['description'] ?></strike>
        <?php else: ?>
            <?= $task['assignee'] . ": " . $task['description'] ?>
        <?php endif; ?>
    </li>
<?php endforeach; ?>
</ul>

<?php require "partials/footer.php"; ?>