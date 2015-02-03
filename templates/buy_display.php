<!-- form from http://stackoverflow.com/questions/9387113/php-sorting-a-list-using-a-drop-down-menu?rq=1 -->

<form name="sort" action="buy.php" method="post">
    <select name="order" class="form-control">
       <option value="choose">Sort the listings</option>
       <option value="quantity">Quantity</option>
       <option value="price">Price Per Ticket</option>
       <option value="time">Time Posted</option>
    </select>
    <input type="submit" class="btn btn-info" value="Sort" />
</form>

<br/>
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

