<?php 

?>

<!DOCTYPE html>
<html lang="en">
    <?php include('header.php') ?>
    
        <section class="container grey-text">
            <h4 class="white">Add Pizza</h4>
            <form class="white" action="" method="">
                <label for="">Your email:</label>
                <input type="text" name="email">

                <label for="">Pizza Title</label>
                <input type="text" name="title">

                <label for="">Ingredients (comma separated)</label>
                <input type="text" name="ingredients">
                <div class="center">
                    <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
                </div>
            </form>
        </section>
    
    <?php include('footer.php') ?>
</html>