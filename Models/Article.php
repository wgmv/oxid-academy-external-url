<?php


namespace wgmv\ExternalUrl\Models;

if(false) {
    class_alias(\OxidEsales\Eshop\Application\Model\Article::class, 'wgmv\ExternalUrl\Models\Article_parent');
}

class Article extends Article_parent
{
    public function getExternalUrl()
    {
        return $this->getFieldData('oaexternalurl');
    }

    public function getExternalUrlLabel()
    {

    }

}