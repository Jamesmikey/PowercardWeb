<div class="jumbotron">
	<div class="container">
		<h1><?=$service['title']?></h1>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-sm-6">
			<p class="lead">
				<?=$service['description']?>
			</p>
		</div>
        <?php if($service['title'] == 'Photo Entry'): ?>
        <div class="col-sm-6">
            <iframe width="720" height="480" src="https://www.youtube.com/embed/L5xLi8AP3QI" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>           
        </div>
        <?php endif; ?>        
	</div>
</div>

<div class="container">
	<br><br>
	<div class="row">
		<div class="col-sm-12">

            <!-- // Jssor Slider -->
            <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:150px;overflow:hidden;visibility:hidden;">
                <!-- Loading Screen -->
                <div data-u="loading" style="position:absolute;top:0px;left:0px;background:url(base_url('public/img/loading.gif')) no-repeat 50% 50%;background-color:rgba(0, 0, 0, 0.7);"></div>
                <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:150px;overflow:hidden;">
                    

					<?php if(count($images) > 0): ?>
						<?php foreach($images as $image):?>
		                    <div>
		                        <a href="<?=base_url('index.php/public/uploads/' . $image['path'])?>" data-lightbox="powercard" data-title="<?=$image['title']?>">
		                            <img data-u="image" src="<?=base_url('public/uploads/' . $image['path'])?>" />
		                        </a>
		                    </div>

						<?php endforeach;?>
					<?php else:?>
						<p>No Images</p>
					<?php endif;?>                    
                    
                    
                    <a data-u="any" href="https://www.jssor.com" style="display:none">bootstrap slider</a>
                </div>
                <!-- Bullet Navigator -->
                <div data-u="navigator" class="jssorb057" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
                    <div data-u="prototype" class="i" style="width:16px;height:16px;">
                        <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                            <circle class="b" cx="8000" cy="8000" r="5000"></circle>
                        </svg>
                    </div>
                </div>
                <!-- Arrow Navigator -->
                <div data-u="arrowleft" class="jssora073" style="width:50px;height:50px;top:0px;left:30px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
                    <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                        <path class="a" d="M4037.7,8357.3l5891.8,5891.8c100.6,100.6,219.7,150.9,357.3,150.9s256.7-50.3,357.3-150.9 l1318.1-1318.1c100.6-100.6,150.9-219.7,150.9-357.3c0-137.6-50.3-256.7-150.9-357.3L7745.9,8000l4216.4-4216.4 c100.6-100.6,150.9-219.7,150.9-357.3c0-137.6-50.3-256.7-150.9-357.3l-1318.1-1318.1c-100.6-100.6-219.7-150.9-357.3-150.9 s-256.7,50.3-357.3,150.9L4037.7,7642.7c-100.6,100.6-150.9,219.7-150.9,357.3C3886.8,8137.6,3937.1,8256.7,4037.7,8357.3 L4037.7,8357.3z"></path>
                    </svg>
                </div>
                <div data-u="arrowright" class="jssora073" style="width:50px;height:50px;top:0px;right:30px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
                    <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                        <path class="a" d="M11962.3,8357.3l-5891.8,5891.8c-100.6,100.6-219.7,150.9-357.3,150.9s-256.7-50.3-357.3-150.9 L4037.7,12931c-100.6-100.6-150.9-219.7-150.9-357.3c0-137.6,50.3-256.7,150.9-357.3L8254.1,8000L4037.7,3783.6 c-100.6-100.6-150.9-219.7-150.9-357.3c0-137.6,50.3-256.7,150.9-357.3l1318.1-1318.1c100.6-100.6,219.7-150.9,357.3-150.9 s256.7,50.3,357.3,150.9l5891.8,5891.8c100.6,100.6,150.9,219.7,150.9,357.3C12113.2,8137.6,12062.9,8256.7,11962.3,8357.3 L11962.3,8357.3z"></path>
                    </svg>
                </div>
            </div>
            <!-- // Jssor Slider -->  

		</div>
	</div>
</div>

