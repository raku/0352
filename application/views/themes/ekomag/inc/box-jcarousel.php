<?$products_model = load_model('products_model');?>
<?$featured = $products_model->getFeatured(6);?>

<?if($featured['total_rows']):?>

	<ul id="products-carousel" class="jcarousel-skin-tango">
		<?foreach ($featured['posts_list'] as $row):?>
        <li>
            <div>
                
                <div class="product_image_container">
                    <a title="<?=htmlspecialchars($row->name)?>" href="<?=site_url($BC->_getBaseURL().'products/name/'.$row->slug.url_category_addition())?>">
            			<?if(@$row->image) echo img(array('src'=>'images/data/m/products/'.$row->image,'alt'=>htmlspecialchars($row->alt),'width'=>$BC->settings_model['products_medium_width'],'height'=>$BC->settings_model['products_medium_height']))?>
            		</a>
                </div>
                <div>
                    <div>
                        <?=anchor_base('products/name/'.$row->slug.url_category_addition(),$row->name,"class='product_name'")?>
                    </div>

                    <div class="box_product_price">
                        <span class="productPrice"><?=exchange($row->price)?></span> 
                    </div>
                </div>
            </div>
        </li>
        <?endforeach;?>
	</ul>
	
<?endif?>