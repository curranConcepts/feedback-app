<?php include 'partials/header.php'; ?>
<?php
$sql =  'SELECT * FROM feedback';
$result = mysqli_query($db, $sql);
$feedback = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>


<div class="text">
  <h3 class="page-title">Previous Feedback</h3>
  <?php if (empty($feedback)) : ?>
    <p class="lead mt-3">There is no feedback.</p>
  <?php endif; ?>

  <div class="feedback-container">
    <?php foreach ($feedback as $item) : ?>
      <div class="card">
        <div class="card-body">
          <?php echo $item['body']; ?>
        </div>
        <div class="card-info">
          By <?php echo $item['name']; ?> on <?php echo $item['date']; ?>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>
<?php include 'partials/footer.php'; ?>