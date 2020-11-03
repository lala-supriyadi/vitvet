<div id="body">
			
			       <div id="content">
				   
				        <div class="content">
							   <?php 
							   	if ($data['id_url'] == 1) {
							   		echo "<h2>Informasi</h2>";
							   	}else if ($data['id_url'] == 2) {
							   		echo "<h2>Promo</h2>";
							   	}else{
							   		echo "<h2>Kegiatan</h2>";
							   	}
							   ?>
								<ul class="articles">
									
										<?php 
											foreach($data["kategori"] as $kategori) {
												foreach($data["artikel"] as $artikel) {
										?>
											<li>
												<div>
													<span>&nbsp;</span> 
													<h3>
														<a href="<?php echo SITE_URL; ?>?page=artikel&&action=detail&&id=<?php echo $artikel->id_artikel; ?>"><?php echo $artikel->judul; ?>
													</h3>  
													
												</div>
												<p><b>Diterbitkan Oleh:<i> <?php echo $artikel->penulis; ?> - <?php echo $artikel->waktu; ?> - <?php echo date("d/m/Y", strtotime($artikel->tanggal)); ?></i></b></p>
												<p>
												 <?php echo substr(strip_tags($artikel->isi), 0,500)." ..........."; ?>
												 <br/>
												</p>
												<p>
												 <a href="<?php echo SITE_URL; ?>?page=artikel&&action=detail&&id=<?php echo $artikel->id_artikel; ?>" class="btn btn-danger">Read more...</a>
												</p>
											</li>
										<?php 
												}
											} 
										?>
								</ul>
							   
						</div>
						
					    
					    <div id="sidebar">
						
						     <div id="section">
							    <div>
							      <div>
							           <h2>Categories</h2>
										<ul class="archive">
											<?php
					                            foreach($data["main_kategori"] as $kategori) {

					                                ?>
					                                <li class="">
					                                    <a href="<?php echo SITE_URL; ?>?page=kategori&&action=detail&&id=<?php echo $kategori->id_kategori; ?>">
					                                        <?php echo $kategori->nama_kategori; ?> (<?php echo $kategori->total; ?>)
					                                    </a>
					                                </li>
					                            <?php
					                            }
					                        ?>
										</ul>
							      </div>
							    </div>

							    <div>
							      <div>
							           <h2>Berita Terbaru</h2>
										<ul class="archive">
											<?php

					                            foreach($data["main_artikel"] as $artikel) {
													
					                                ?>
					                                <li><a href="<?php echo SITE_URL; ?>?page=artikel&&action=detail&&id=<?php echo $artikel->id_artikel; ?>"><?php echo $artikel->judul; ?></a></li>
					                            <?php
					                            }
					                        ?>
										</ul>
							      </div>
							    </div>

							 </div>

						       
								
					    </div>

				   </div>
				   	<br/><br/>
				   <div class="featured">
				        <ul>
							<li><a href="index.html"><img src="resources/assets_news/images/organic-and-chemical-free.jpg" width="300" height="90" alt="Pet Shop" title="Pet Shop" ></a></li>
							<li><a href="index.html"><img src="resources/assets_news/images/good-food.jpg" width="300" height="90" alt="Pet Shop" title="Pet Shop" ></a></li>
							<li class="last"><a href="index.html"><img src="resources/assets_news/images/pet-grooming.jpg" width="300" height="90" alt="Pet Shop" title="Pet Shop" ></a></li>
						</ul>
				        
				   </div>
				  
			
			</div>