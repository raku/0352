<?if(!isset($social_params['button_title'])) $social_params['button_title'] = "ВКонтакте";?>
<a onclick="window.open('http://vkontakte.ru/share.php?url=<?=urlencode($social_params['page_url'])?>', 'vkontakte', 'width=626, height=436'); return false;" href="http://vkontakte.ru/share.php?url=<?=urlencode($social_params['page_url'])?>" rel="nofollow" title="<?=$social_params['button_title']?>"><?=img('images/social/'.$social_params['button_size'].'/vkontakte.png')?></a>