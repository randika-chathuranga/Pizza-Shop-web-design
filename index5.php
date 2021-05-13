<?php 
/*
    if(isset($_GET['submit'])){
        echo $_GET['email'];
        echo $_GET['title'];
        echo $_GET['ingredients'];
    }
*/

/*
    if(isset($_POST['submit'])){
        echo htmlspecialchars($_POST['email']);
        echo htmlspecialchars($_POST['title']);
        echo htmlspecialchars($_POST['ingredients']);
    }
*/

    if(isset($_POST['submit'])){
        if(empty($_POST['email'])){
            echo 'A email is required';
        }
        else{
            echo htmlspecialchars($_POST['email']); 
        }

        if(empty($_POST['title'])){
            echo 'A title is required';
        }
        else{
            echo htmlspecialchars($_POST['title']); 
        }

        if(empty($_POST['ingredients'])){
            echo 'A ingredients is required';
        }
        else{
            echo htmlspecialchars($_POST['ingredients']); 
        }
    }

    
?>

<!DOCTYPE html>
<html lang="en">
    <?php include('header.php') ?>
    
        <section class="container grey-text">
            <h4 class="white">Add Pizza</h4>
            <form class="white" action="index5.php" method="POST">
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


