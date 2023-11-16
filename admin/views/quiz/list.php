<table class="table mt-4">
    <h2 class="text-center text-primary mt-3">Quiz List</h2>
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Quiz Name</th>
            <th scope="col">Quiz Point</th>
            <th scope="col">Quiz Time</th>
            <th scope="col">Quiz Active</th>
            <th scope="col">Created by</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($quiz as $quiz) { ?>
        <tr>
            <th scope="row"><?php echo $quiz['quiz_id']; ?></th>
            <td><?php echo $quiz['quiz_name']; ?></td>
            <td><?php echo $quiz['point']; ?></td>
            <td><?php echo $quiz['time']; ?></td>
            <td><?php echo $quiz['active'] ? 'Active' : 'Inactive'; ?></td>
            <td><?php echo $quiz['created_by']; ?></td>
            <td>
                <button type="button" class="btn btn-warning">Edit</button>
                <button type="button" class="btn btn-danger">Delete</button>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>
<a href="index.php?act=add-quiz" class="btn btn-primary">Add Quiz</a>