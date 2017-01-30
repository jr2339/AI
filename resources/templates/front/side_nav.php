<div class="col-md-3">
    <p class="lead">Categories</p>
    <div class="list-group">

        <?php
            //SQL statement here
            $query ="SELECT * FROM categories";
            $send_query = mysqli_query($connection,$query);
            if(!$send_query){
                die("QUERY FAILED".mysqli_error($connection));
            }
            while($row = mysqli_fetch_array($send_query)){
                echo "<a href=' ' class='list-group-item'>{$row['cat_title']}</a>";
            }
        ?>

        <!----------------This is the code from templates------------
        <a href="category.html" class="list-group-item">Category 1</a>
        <a href="#" class="list-group-item">Category 2</a>
        <a href="#" class="list-group-item">Category 3</a>
        ------------------------------------------------------------->
    </div>
</div>