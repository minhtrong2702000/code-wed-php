<?php
$page = $data['pages'];
?>
  <div class="row alert alert-danger text-center fw-bold">
          <div class="col-md-12"><?php echo $page['title'] ?></div>
        </div> 
<div class="row">
    <div class="card">
        <div class="alert alert-success row">
            <p class="card-text"><?php echo $page['content'] ?></p>
        </div>
    </div>
</div>