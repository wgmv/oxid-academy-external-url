<?php

namespace wgmv\ExternalUrl\Core\Events;

use OxidEsales\Eshop\Core\DatabaseProvider;
use OxidEsales\Eshop\Core\DbMetaDataHandler;
use OxidEsales\Eshop\Core\Registry;

class Setup
{
    public function onActivate()
    {
        self::addFields();
        self::_rebuildViews();
    }

    public static function addFields()
    {
        $db = DatabaseProvider::getDb();

        if(! $db->getOne("SELECT * from information_schema.COLUMNS where TABLE_NAME='oxarticles' AND COLUMN_NAME='OA_EXTPRODUCT_URL'")) {
            $db->execute('ALTER TABLE oxarticles ADD OA_EXTPRODUCT_URL varchar(255) null');
        }

        if(! $db->getOne("SELECT * from information_schema.COLUMNS where TABLE_NAME='oxarticles' AND COLUMN_NAME='OA_EXTPRODUCT_URL_LABEL'")) {
            $db->execute('ALTER TABLE oxarticles ADD OA_EXTPRODUCT_URL_LABEL varchar(255) null');
        }

        if(! $db->getOne("SELECT * from information_schema.COLUMNS where TABLE_NAME='oxarticles' AND COLUMN_NAME='OA_EXTPRODUCT_URL_LABEL_1'")) {
            $db->execute('ALTER TABLE oxarticles ADD OA_EXTPRODUCT_URL_LABEL_1 varchar(255) null');
        }
    }

    private static function _rebuildViews()
    {
        if(Registry::getSession()->getVariable('malladmin')) {
            $metaData = oxNew(DbMetaDataHandler::class)->updateViews();
        }
    }

}