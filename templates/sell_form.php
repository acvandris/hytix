<form action="sell.php" method="post">
    <fieldset>
        <div class="form-group">
            <input autofocus class="form-control" name="name" placeholder="Your name" type="text"/>
        </div>
        <div class="form-group">
            <label>Quantity: <select class="form-control" name="quantity" type="number">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>  
                </select>
            </label>
        </div>
        <div class="form-group">
            <input autofocus class="form-control" name="price" id="price" placeholder="Price per ticket (no $)" type = />
        </div>
        <!-- ensure only numbers entered in price -->
        <script>
        
        </script>
        <div class="form-group">
            <textarea class="form-control" rows="4" name="details" placeholder="Add details such as section and seats"></textarea>
        </div>
        <div class="form-group">
            <input autofocus class="form-control" name="phone" placeholder="Phone or email" type="text"/>
        </div>
        
        <div class="form-group">
            <button type="submit" class="btn btn-success">Post Listing</button>
        </div>
    </fieldset>
</form>

