<?php
if ($user[website] != "" && $subscription[website_link] == 1) { ?>
	<div class="table-view-group clearfix">
		<li class="col-sm-4 bold">
			Website
		</li>
		<li class="col-sm-8">
			<a itemprop="url" class="weblink" title="website" <? if ($subscription[nofollow_links] == 1){ ?>rel="nofollow"<? } ?> target="_blank" href="<?php echo $user[website]; ?>">
				<?php echo $user[website]; ?>
			</a>
		</li>
	</div>
	<div class="table-view-group clearfix">
		<li class="col-sm-4 bold">
			Email
		</li>
		<li class="col-sm-8">
			<a itemprop="url" class="weblink" title="email" <? if ($subscription[nofollow_links] == 1){ ?>rel="nofollow"<? } ?> target="_blank" href="mailto:<?php echo $user[email]; ?>">
				<?php echo $user[email]; ?>
			</a>
		</li>
	</div>
	<?php }
	if (( $user[youtube] != "" ||$user[google_plus] != "" || $user[instagram] != "" || $user[facebook] != "" || $user[twitter] != "" || $user[linkedin] != "" || $user[pinterest] != "" || $user[blog] != "") && $subscription[social_link] == 1) { ?>
	<div class="table-view-group clearfix">               
		<li class="col-sm-4 bold xs-bmargin">
			Online Social Profiles
		</li>
		<li class="col-sm-8 member_social_icons"> 
			<? if ($user[facebook]!="" && $subscription[social_link]==1) { ?>
			<a class="network-icon facebook weblink" <? if ($subscription[nofollow_links] == 1){ ?>rel="nofollow"<? } ?> href="<? if (strpos($user[facebook],'http') !== TRUE) { ?><?=$user[facebook]?><? } else { ?>http://www.facebook.com/<?=$user[facebook]?><? } ?>" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a>
			<? } ?> 
			<? if ($user[twitter]!="" && $subscription[social_link]==1) { ?>
			<a class="network-icon twitter weblink" <? if ($subscription[nofollow_links] == 1){ ?>rel="nofollow"<? } ?> href="<? if (strpos($user[twitter],'http') !== TRUE) { ?><?=$user[twitter]?><? } else { ?>http://www.twitter.com/<?=$user[twitter]?><? } ?>" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a>
			<? } ?>
			<? if ($user[linkedin]!="" && $subscription[social_link]==1) { ?>
			<a class="network-icon linkedin weblink" <? if ($subscription[nofollow_links] == 1){ ?>rel="nofollow"<? } ?> href="<? if (strpos($user[linkedin],'http') !== TRUE) { ?><?=$user[linkedin]?><? } else { ?>http://www.linkedin.com/in/<?=$user[linkedin]?><? } ?>" target="_blank" title="LinkedIn"><i class="fa fa-linkedin"></i></a>
			<? } ?>                 
			<? if ($user[google_plus]!="" && $subscription[social_link]==1) { ?>
			<a class="network-icon googleplus weblink" <? if ($subscription[nofollow_links] == 1){ ?>rel="nofollow"<? } ?> rel="publisher" href="<? if (strpos($user[google_plus],'http') !== TRUE) { ?><?=$user[google_plus]?><? } else { ?>http://www.plus.google.com/<?=$user[google_plus]?><? } ?>" target="_blank" title="Google"><i class="fa fa-google-plus"></i></a>
			<? } ?>
			<? if ($user[youtube]!="" && $subscription[social_link]==1) { ?>
			<a class="network-icon youtube weblink" <? if ($subscription[nofollow_links] == 1){ ?>rel="nofollow"<? } ?> href="<? if (strpos($user[youtube],'http') !== TRUE) { ?><?=$user[youtube]?><? } else { ?>http://www.youtube.com/<?=$user[youtube]?><? } ?>" target="_blank" title="YouTube"><i class="fa fa-youtube"></i></a>
			<? } ?> 
			<? if ($user[instagram]!="" && $subscription[social_link]==1) { ?>
			<a class="network-icon instagram weblink" <? if ($subscription[nofollow_links] == 1){ ?>rel="nofollow"<? } ?> href="<? if (strpos($user[instagram],'http') !== TRUE) { ?><?=$user[instagram]?><? } else { ?>http://www.twitter.com/<?=$user[instagram]?><? } ?>" target="_blank" title="Instagram"><i class="fa fa-instagram"></i></a>
			<? } ?>                     
			<? if ($user[pinterest]!="" && $subscription[social_link]==1) { ?>
			<a class="network-icon pinterest weblink"<? if ($subscription[nofollow_links] == 1){ ?>rel="nofollow"<? } ?> href="<? if (strpos($user[pinterest],'http') !== TRUE) { ?><?=$user[pinterest]?><? } else { ?>http://www.twitter.com/<?=$user[pinterest]?><? } ?>" target="_blank" title="Pinterest"><i class="fa fa-pinterest-p"></i></a>
			<? } ?>             
			<? if ($user[vimeo]!="" && $subscription[social_link]==1) { ?>
			<a class="network-icon vimeo weblink" <? if ($subscription[nofollow_links] == 1){ ?>rel="nofollow"<? } ?> href="<? if (strpos($user[vimeo],'http') !== TRUE) { ?><?=$user[vimeo]?><? } else { ?>http://www.twitter.com/<?=$user[vimeo]?><? } ?>" target="_blank" title="Vimeo"><i class="fa fa-vimeo"></i></a>
			<? } ?>
			<? if ($user[blog]!="" && $subscription[social_link]==1) { ?>
			<a class="network-icon blog weblink" <? if ($subscription[nofollow_links] == 1){ ?>rel="nofollow"<? } ?> href="<? if (strpos($user[blog],'http') !== TRUE) { ?><?=$user[blog]?><? } else { ?>http://www.twitter.com/<?=$user[blog]?><? } ?>" target="_blank" title="Blog"><i class="fa fa-rss"></i></a>
			<? } ?>
		</li>
	</div>
<?php } ?>
