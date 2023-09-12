<?php include 'inc/header.php'; 

$sql = "SELECT * FROM feedback;";
$result = mysqli_query($conn, $sql);
$feedbacks = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<main>
  <div class="container d-flex flex-column align-items-center">
   
    <h2>Feedback</h2>

    <?php if(empty($feedbacks)):?>
      <p class="lead my-3">There is no feedback</p>
    <?php endif; ?>
<?php foreach($feedbacks as $feedback): ?>
    <div class="card my-3 w-75">
     <div class="card-body text-center">
        <?php echo $feedback['body'];?>
      <div class="text-secondary mt-2">
        <?php echo $feedback['name'];?> on <?php echo $feedback['date'];?>
      </div>
    </div>
   </div>
<?php endforeach; ?>

  </div>
</main>

<?php include 'inc/footer.php'; ?>

