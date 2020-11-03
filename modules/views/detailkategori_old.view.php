	<?php
     foreach($data["kategori"] as $kategori) {
    ?>
	 <ul>
	 <?php
      foreach($data["artikel"] as $artikel) {
       ?>
	   <style>
		
		 </style>
         <li>
		<article class="post_box"> <a href="<?php echo SITE_URL; ?>?page=artikel&&action=detail&&id=<?php echo $artikel->id_artikel; ?>">
		
          <h2><a href="<?php echo SITE_URL; ?>?page=artikel&&action=detail&&id=<?php echo $artikel->id_artikel; ?>"><?php echo $artikel->judul; ?></h2>
		  <div class="post_meta">
             Diterbitkan Oleh:<i> <?php echo $artikel->penulis; ?> - <?php echo $artikel->waktu; ?> - <?php echo date("d/m/Y", strtotime($artikel->tanggal)); ?></i> 
          </div>
		  <img src="public/images/artikel/<?php echo $artikel->images; ?>" class="image_frame_300 img-polaroid"/></a>
          <p><?php echo substr(strip_tags($artikel->isi), 0,500); ?></p>
          <a href="<?php echo SITE_URL; ?>?page=artikel&&action=detail&&id=<?php echo $artikel->id_artikel; ?>" class="btn btn-danger">Read more...</a>
          <div class="cleaner"></div>
          
			
        </article>
       </li>
                <?php
                }
            ?>
     </ul>
	 
	  <?php
    }
    ?>