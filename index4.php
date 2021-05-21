<?php
    include('./db_connect.php');
    
    //write a quary
    $sql = 'SELECT * FROM pizza';

    //make query
    $result = mysqli_query($conn,$sql);

    //get result as array
    $pizza = mysqli_fetch_all($result,MYSQLI_ASSOC);

    //free result from memeory(not compulsary)
    mysqli_free_result($result);


    //close connection
    mysqli_close($conn);

   


?>

<!DOCTYPE html>
<html lang="en">
    <?php 
        include('header.php')
    ?>

    <h4 class="center text-grey">Pizzas!</h4>
    <div class="container">
        <div class="row">
            <?php foreach($pizza as $item){ ?>
                    <div class="col s6 md3">
                        <div class="card">
                            <img src="./pizza.jpg" class="pizza">
                            <div class="card-content center">
                                <h6><?php echo htmlspecialchars($item['title']); ?></h6>
                                <ul>
                                    <?php foreach(explode(',',$item['ingredients']) as $ing) { ?>
                                        <li><?php echo htmlspecialchars($ing); ?></li>
                                    <?php } ?>
                                </ul>
                            </div>

                            <div class="card-action right-align">
                                <a class="brand-text" href="details.php?id=<?php echo $item['id'] ?>">more info</a>
                            </div>
                        </div>
                    </div>
            <?php }?>
        </div>
    </div>

    <?php 
        include('footer.php')
    ?>
</html>