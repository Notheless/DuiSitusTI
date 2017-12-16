<!-- top part -->
<div class="admin-top-box-wrapper">
    <?php $path = pathinfo($_SERVER['REQUEST_URI']); ?>
    <li id="left-bar"><a href="index.php">Utama</a></li>
    <div class="admin-top-box-bar">
        <li id="<?php if ($path['filename'] == "postingan") { echo "active"; } ?>"><a href="postingan.php">Postingan</a></li>
        <li id="<?php if ($path['filename'] == "dosen") { echo "active"; } ?>"><a href="dosen.php">Dosen</a></li>
        <li id="<?php if ($path['filename'] == "lulusan") { echo "active"; } ?>"><a href="lulusan.php">Lulusan</a></li>
        <li id="<?php if ($path['filename'] == "Halaman") { echo "active"; } ?>"><a href="Halaman.php">Halaman</a></li>
    </div>
    <li id="right-bar"><a href="/">Keluar</a></li>
</div>