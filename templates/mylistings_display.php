<table class="table table-striped table-bordered">
    
    <tr>
        <th>Name</th>
        <th>Quantity</th>
        <th>Price Per Ticket</th>
        <th>Details</th>
        <th>Phone/Email</th>
        <th>Time Posted</th>
    </tr>
    
    <?php foreach ($rows as $row): ?>
    <tr>
            <td><?= $row["name"] ?></td>
            <td><?= $row["quantity"] ?></td>
            <td><?= $row["price"] ?></td>
            <td><?= $row["details"] ?></td>
            <td><?= $row["phone"] ?></td>
            <td><?= $row["time"] ?></td>
    </tr>

<?php endforeach ?>
    
        
</table>

