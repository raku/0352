<?if(!isset($social_params['button_title'])) $social_params['button_title'] = "Twitter";?>
<a onclick="window.open('http://twitter.com/home?status=<?=urlencode($social_params['page_url'])?>', 'twitter', 'width=626, height=436'); return false;" href="http://twitter.com/home?status=<?=urlencode($social_params['page_url'])?>" rel="nofollow" title="<?=$social_params['button_title']?>"><?=img('images/social/'.$social_params['button_size'].'/twitter.png')?></a>