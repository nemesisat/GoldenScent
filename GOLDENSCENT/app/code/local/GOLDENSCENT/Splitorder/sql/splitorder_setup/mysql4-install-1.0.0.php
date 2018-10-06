<?php

$installer = $this;
$installer->getConnection()->addColumn($installer->getTable('sales/order'), 'parent_order_id', 'text NULL');

?>