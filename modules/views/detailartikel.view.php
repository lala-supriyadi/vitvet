

<?php
foreach($data["artikel"] as $artikel) {
?>
<article class="post_box">
          <h2><?php echo $artikel->judul; ?></h2>
		  <div class="date">
        <?php echo $artikel->waktu; ?> - <?php echo date("d F Y", strtotime($artikel->tanggal)); ?> By <b><?php echo $artikel->penulis; ?></b>
		  </div>
		  <?php
        if($artikel->images) {
            ?>
			<img src="public/images/artikel/<?php echo $artikel->images; ?>" class="image_frame_300 img-polaroid"/>
			 <?php
        }
        ?>
        <?php echo $artikel->isi; ?>
        <div class="clear"></div>
        </article>
		
		<div class="link">
        <?php
            if(count($data["prev"]) > 0) {
        ?>
        <a href="<?php echo SITE_URL . "?page=artikel&&action=detail&&id=" . $data["prev"][0]->id_artikel; ?>" class="btn btn-primary">&laquo; Sebelumnya</a>
        <?php } ?>
        <?php if(count($data["next"]) > 0) { ?>
            <a href="<?php echo SITE_URL . "?page=artikel&&action=detail&&id=" . $data["next"][0]->id_artikel; ?>" class="btn btn-primary">Selanjutnya &raquo;</a>
        <?php
        }
        ?>
    </div>
	
	<?php
}
?>

