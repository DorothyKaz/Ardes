<h3><?=date('F j, Y, G:i:s T ',$exchange->timestamp)?></h3>
<p>База: <?=$exchange->base?></p>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Currency</th>
      <th scope="col">Code</th>
      <th scope="col">Rate</th>
    </tr>
  </thead>
  <tbody>
      <?php foreach($exchange->rates as $key => $value){?>
        <tr>
            <td scope="row"><?=$currencies->$key?></th>
            <td><?=$key?></td>
            <td><?=$value?></td>
        </tr>
     <?php } ?>
</tbody>
</table>