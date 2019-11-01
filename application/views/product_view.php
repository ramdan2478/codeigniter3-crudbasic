<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Index</title>
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url('assets/favicon/apple-touch-icon.png');?>">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url('assets/favicon/favicon-32x32.png');?>">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('assets/favicon/favicon-16x16.png');?>">
  <link rel="manifest" href="<?php echo base_url('assets/favicon/site.webmanifest');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/bulma.min.css');?>">
  <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
</head>
<body>
  <section class="section">
    <div class="container">

      <h1 class="title">
        <center>Product List</center>
      </h1>

      <table class="table is-fullwidth">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Product Name</th>
            <th scope="col">Price</th>
          </tr>
        </thead>
        <tbody>
        <?php
          $count = 0;
          foreach ($product->result() as $row) :
            $count++;
        ?>
          <tr>
            <th scope="row"><?php echo $count;?></th>
            <td><?php echo $row->product_name;?></td>
            <td><?php echo number_format($row->product_price);?></td>
          </tr>
          <?php endforeach;?>
        </tbody>
      </table>

    </div>
  </section>
</body>
</html>