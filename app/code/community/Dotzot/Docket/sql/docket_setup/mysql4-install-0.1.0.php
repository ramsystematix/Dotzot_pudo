<?php
 
$installer = $this;
 
$installer->startSetup();
 
$installer->run("

-- DROP TABLE IF EXISTS {$this->getTable('docket')};
CREATE TABLE {$this->getTable('docket')} (
  `id` int(11) unsigned NOT NULL auto_increment,
  `docket_no` varchar(255) NOT NULL default '',
  `payment_method` varchar(255) NOT NULL default '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

    ");
$installer->endSetup();
