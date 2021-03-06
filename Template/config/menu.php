<div class="dropdown">
    <a href="#" class="dropdown-menu dropdown-menu-link-icon"><i class="fa fa-cog fa-fw"></i><i class="fa fa-caret-down"></i></a>
    <ul>
        <li>
            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
            <?= $this->url->link(t('Edit'), 'ContactsItemsController', 'edit', array('item_id' => $item_id, 'plugin' => 'contacts'), false, 'popover') ?>
        </li>
        <li>
            <i class="fa fa-trash-o" aria-hidden="true"></i>
            <?= $this->url->link(t('Remove'), 'ContactsItemsController', 'confirm', array('item_id' => $item_id, 'plugin' => 'contacts'), false, 'popover') ?>
        </li>
        <?php if($item_id != $start_id): ?>
        <li>
            <i class="fa  fa-arrow-up" aria-hidden="true"></i>
            <?= $this->url->link(t('Move up'), 'ContactsItemsController', 'movePosition', array('item_id' => $item_id, 'direction' => 'up', 'plugin' => 'contacts'), false, '') ?>
        </li>
        <?php endif ?>
        <?php if($item_id != $end_id): ?>
        <li>
            <i class="fa  fa-arrow-down" aria-hidden="true"></i>
            <?= $this->url->link(t('Move down'), 'ContactsItemsController', 'movePosition', array('item_id' => $item_id, 'direction' => 'down', 'plugin' => 'contacts'), false, '') ?>
        </li>
        <?php endif ?>
    </ul>
</div>
