<?php
require '../functions.php';
$pesanan = cari($_POST);
?>


<?php if (empty($pesanan)) : ?>
  <tr>
    <td colspan="6">
      <p style="color: red; font-style: italic;">Data pesanan tidak ditemukan!</p>
    </td>
  </tr>
<?php endif; ?>

<?php $i = 1;
foreach ($pesanan as $m) : ?>
  <tr>
    <td><?= $i++; ?></td>
    <td><img src="img/<?=$m['gambar']; ?>" width="60"></td>
    <td><?= $m['nama']; ?></td>
    <td><?= $m['lama_bermain']; ?></td>
    <td><?= $m['id']; ?></td>
    <td>
      <a href="detail.php?id=<?= $m['id']; ?>">lihat detail</a>
    </td>
  </tr>
<?php endforeach; ?>