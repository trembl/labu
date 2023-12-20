<?php namespace ProcessWire; 

// Template file for pages using the “basic-page” template

?>

<div id="content">
   <h1 class="text-5xl font-semibold">
     <?php echo $page->title; ?>
   </h1>
   <div class="">
 <?php echo $page->content; ?>
   </div>
<?php /*
   <div id="byline" class="pv5 moon-gray">
     Author: <?php $createdUser = $page->createdUser; echo $createdUser->user_display_name; ?><br />
     Published: <?php echo date('l jS \of F Y h:i:s A', $page->published); ?>, 
     Last Update: <?php echo date('l jS \of F Y h:i:s A', $page->modified); ?>
     <?php if($page->editable()): ?><a href='<?php echo $page->editUrl(); ?>'>Edit</a></p><?php endif; ?>
   </div>
*/ ?>


</div>
