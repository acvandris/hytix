<form action="delete.php" method="post">
    
    <label> Choosing listing to delete: <br/> <select class="form-control" name="deleteselect">
        <?php foreach ($rows as $row): ?>
            <option> <?php echo $row["time"]; ?> </option>
        <?php endforeach ?>
    </label> </select>
    <br/> 
    <br/>
    <div class="form-group">
        <button type="submit" class="btn btn-danger">Delete Post</button>
    </div>
    
</form>






