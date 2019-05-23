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
                <form method="post" action="remove">
                    <input type="hidden" name="id" value="<?= $task['id'] ?>">
                    <input type="submit" name="submitId" value="Remove">
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php require "partials/footer.php"; ?>