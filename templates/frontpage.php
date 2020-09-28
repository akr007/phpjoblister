<?php include 'inc/header.php' ?>

<main role="main">

  <div class="container">
    <form class="form-inline my-2 my-lg-0" method="GET" action="index.php">
      <select class="form-control mr-sm-2" type="text" name="category">
        <option value="0">Choose a category</option>
        <?php foreach($categories as $category): ?>
          <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
        <?php endforeach; ?>
      </select>
      <input type="submit" class="btn btn-md btn-success" value="Find">
    </form>
    <h3><?php echo $title; ?></h3>
    <?php foreach($jobs as $job): ?>
    <div class="row mt-3" style="padding-bottom: 15px;">
      <div class="col-md-10">
        <h2><?php echo $job->job_title ?></h2>
        <p><?php echo $job->description ?></p>
      </div>
      <div class="col-md-2">
         <a class="btn btn-default bg-info" href="job.php?id=<?php echo $job->id ?>" role="button">View</a>
      </div>
    </div>
    <?php endforeach; ?>
  </div>

</main>

<?php include 'inc/footer.php' ?>