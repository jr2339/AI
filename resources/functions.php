<?php

//helper functions


function redirect($location){

    header("Location: $location");

}


function query($sql){
    //from config file
    global $connection;
    return mysqli_query($connection,$sql);

}


function confirm($result){
    global $connection;
    if(!$result){
        die("QUERY FAILED".mysqli_erroe($connection));
    }

}


function escape_string($string){
    global $connection;
    return mysqli_real_escape_string($connection,$string);
}




function fetch_array($result){

    return mysqli_fetch_array($result);
}

//get products

function get_products(){

    $query = query("SELECT * FROM products");
    //check our query works
    confirm($query);

    while($row = fetch_array($query)){
        $product = <<<DELIMETER
        <div class="col-sm-4 col-lg-4 col-md-4">
            <div class="thumbnail">
               <a href="item.php?id={$row['product_id']}"><img src="{$row['product_image']}" alt=""></a>
                <div class="caption">
                    <h5 class="pull-right">&#36;{$row['product_price']}</h5>
                    <h5><a href="product.html">{$row['product_title']}</a>
                    </h5>
                    <p>See more snippets like this online store item at <a target="_blank" href="http://www.bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
                    <a class="btn btn-primary" target="_blank" href="item.php?id={$row['product_id']}">Add to cart</a>
                </div>
            </div>
        </div>

DELIMETER;
        echo $product;
    }
}



//get categories
function get_categories(){
    $query = query("SELECT * FROM categories");

    confirm($query);

    while($row = fetch_array($query)){
        $categories = <<<DELIMETER
        <a href='category.php?id={$row['cat_id']}' class='list-group-item'>{$row['cat_title']}</a>

DELIMETER;
    echo $categories;
    }
}










?>