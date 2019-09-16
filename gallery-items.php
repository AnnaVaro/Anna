<?php foreach (gallery(null, $offset, $limit) as $image):?>
<div class="gallery-item">
    <a href="/gallery.php?id=<?php echo $image['id']; ?>" target="_blank"><img src="<?php echo $image['server_address']; ?>" alt="<?php echo $image['name']; ?>"/></a>
</div>
<?php endforeach;?>
