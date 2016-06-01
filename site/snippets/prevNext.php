<div id="prev">
<?php if($page->hasPrevVisible()): ?>
<a href="<?php echo $page->prevVisible()->url() ?>">page précédente</a>
<?php endif ?>
</div>

<div id="next">
<?php if($page->hasNextVisible()): ?>
<a href="<?php echo $page->nextVisible()->url() ?>">page suivante</a>
<?php endif ?>
</div>