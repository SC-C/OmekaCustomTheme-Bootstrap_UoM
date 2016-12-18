<?php
    echo head(array(
        'title' => html_escape($collection->name),
        'bodyid' => 'collections',
        'bodyclass' => 'show',
    ));
?>
<div id="primary" class="show">
    <div class="row" id="collection-title">
        <div class="col-sm-12 col-md-12">
            <h1 class="page-header"><?php echo metadata('collection', array('Dublin Core', 'Title')); ?><br />
                <small><?php echo __('%d items in collection', $collection->totalItems()); ?></small>
            </h1>
        </div>
    </div>
    <div class="row">
        <div id="collection-description" class="col-sm-8 col-md-8">
            <div class="lead"><?php echo text_to_paragraphs(metadata('collection', array('Dublin Core', 'Description'))); ?></div>
        </div>
        <div class="col-sm-4 col-md-4">
            <?php if ($collection->hasContributor()): ?>
            <div class="element">
                <h4><?php echo __('Collector(s)'); ?></h4>
                <div class="element-text">
                    <p><?php echo metadata('collection', array('Dublin Core', 'Contributor'), array('delimiter' => ', ')); ?></p>
                </div>
            <?php endif; ?>
         </div>
         </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <hr />
        </div>
    </div>
    <div class="row">
        <?php $noFile = '<img src="' . img('no-file.png') . '" class="img-rounded img-responsive img-polaroid" alt="' . __('No file') . '" />'; ?>
        <?php foreach(loop('items') as $item): ?>
        <div class="col-sm-3 col-md-3">
            <div class="well" style="text-align:center;">
                <div><?php if (metadata($item, 'has files')):
                    echo link_to_item(item_image('square_thumbnail', array('class' => 'img-rounded img-responsive img-polaroid')));
                else:
                    echo link_to_item($noFile, array('class' => 'image none'), 'show', $item);
                endif; ?>
                </div>
                <br />
                <p class="caption"><span><?php echo metadata('item', array('Dublin Core', 'Title')); ?></span></p>
            </div>
        </div>
        <?php endforeach ?>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <p class="view-items-link-browse lead" style="text-align:center"><?php
                echo link_to_items_in_collection(__('Browse all items in the collection'), $collection);
            ?></p>
        </div>
    </div>
    <!-- end collection-description -->
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <?php fire_plugin_hook('public_collection_show'); ?>
        </div>
    </div>
</div><!-- end primary -->
<?php echo foot(); ?>
