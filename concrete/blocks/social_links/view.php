<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<div id="ccm-block-social-links<?php echo $bID?>" class="ccm-block-social-links">
    <ul class="list">
    <?php foreach($links as $link) {
        $service = $link->getServiceObject();
        ?>
        <li><a target="_blank" href="<?php echo h($link->getURL()); ?>"><?php echo $service->getServiceIconHTML(); print_r($service->getName())?></a></li>
    <?php } ?>
    </ul>
</div>