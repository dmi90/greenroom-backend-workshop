<?php require "partials/head.php"; ?>

<h1>Home</h1>

<table>
    <tbody>
        <tr>
            <th>Description</th>
            <th>Assignee</th>
            <th>Operations</th>
        </tr>
        <?php foreach ($tasks as $task) : ?>
        <tr <?php if ($task['completed']) : ?>class="completed"<?php endif; ?>>
            <td><?= $task['description'] ?></td>
            <td><?= $task['assignee'] ?></td>
            <td>
                <a href="remove?id=<?= $task['id'] ?>">Remove</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php require "partials/footer.php"; ?>