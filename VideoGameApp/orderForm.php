<form action="index.php" method="post">
  <div class="mb-3">
    <label for="first_name" class="form-label">First Name</label>
    <input type="text" class="form-control" id="first_name" name="first_name">
  </div>
  <div class="mb-3">
    <label for="last_name" class="form-label">Last Name</label>
    <input type="text" class="form-control" id="last_name" name="last_name">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email">
  </div>
  <select class="form-select" aria-label="Default select example" name="game_id">
    <?php foreach($games as $game): ?>
      <option value="<?php echo $game[0] ?>" name="game_id"><?php echo $game[1] ?></option>
    <?php endforeach; ?>
  </select>
    <br>
    <label for="quantity" class="form-label">Quantity</label>
    <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Quantity">
    <br>
  <button type="submit" class="btn btn-primary">Order</button>
</form>

<div class="row row-cols-1 row-cols-md-3 g-4">
<?php 
foreach($games as $game): ?>
    <div class="col">
    <div class="card h-100" style="width: 18rem;">
      <img src="<?php echo  "./img/".$game[4] ?>" class="card-img-top" alt="<?php echo $game[1]; ?>">
      <div class="card-body">
        <h5 class="card-title"><?php echo $game[1] ?></h5>
        <p><?php echo $game[2] ?></p>
        <p><?php echo $game[3] ?></p>
      </div>
    </div>
    </div>
  
<?php endforeach; ?>
</div>