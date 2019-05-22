<?php require "partials/head.php"; ?>

    <h1>Task page</h1>

    <form method="post" action="/insert">
        <div class="form-row">
            <label for="description" class="label">Description:</label>
            <textarea name="description" required></textarea>
        </div>
        <div class="form-row">
            <label for="assignee" class="label">Assignee:</label>
            <input name="assignee" type="text" required>
        </div>
        <div class="form-row">
            <span class="label">Is completed?</span>
            <label for="completed-0">No</label>
            <input type="radio" value="0" name="completed" id="completed-0" checked required>
            <label for="completed-1">Yes</label>
            <input type="radio" value="1" name="completed" id="completed-1">
        </div>

        <div class="form-row">
            <button type="submit">Insert</button>
        </div>
    </form>

<?php require "partials/footer.php"; ?>