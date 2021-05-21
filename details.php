<?php 
    include('./db_connect.php');

    if(isset($_POST['delete'])){
        $id_to_delete = mysqli_real_escape_string($conn,$_POST['id_to_delete']);

        $sql = "DELETE FROM pizza WHERE id=$id_to_delete";

        if(mysqli_query($conn,$sql)){
            //success
            header('Location: index4.php');
        }else{
            //failure
            echo 'query error: '. mysqli_error($conn);
        }
    }

    //check GET request param
    if(isset($_GET['id'])){
        $id = mysqli_real_escape_string($conn,$_GET['id']);

        //make sql
        $sql = "SELECT * FROM pizza WHERE id = $id";

         //get query result
        $result = mysqli_query($conn,$sql);

        //fetch result in array format
        $item = mysqli_fetch_assoc($result);

        mysqli_free_result($result);
        mysqli_close($conn);
    }
?>

<!DOCTYPE html>
<html lang="en">

<?php include('header.php') ?>
    <div class="container center">
        <?php if($item): ?>

            <h4><?php echo htmlspecialchars($item['title']); ?></h4>
            <p><?php echo htmlspecialchars($item['email']); ?></p>
            <p><?php echo date($item['created_at']); ?></p>
            <p>Ingredients</p>
            <p><?php echo htmlspecialchars($item['ingredients']); ?></p>


            <!--DELETE FORM-->
            <form action="details.php" method="POST">
                <input type="hidden" name="id_to_delete" value="<?php echo $item['id'] ?>">
                <input type="submit" name="delete" value="Delete" class="btn brand z-depth-0">
            </form>

        <?php else: ?>

            <h5>No such Pizza exists!</h5>

        <?php endif; ?>
    </div>
<?php include('footer.php') ?>

</html>