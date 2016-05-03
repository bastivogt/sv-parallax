<?php
/**
 * Created by PhpStorm.
 * User: sebastian
 * Date: 02.05.16
 * Time: 13:13
 */

namespace Contao;


class ContentSvParallaxStart extends \ContentElement
{

    protected $strTemplate = 'ce_sv_parallax_start';

    public function generate() {

        if ($this->singleSRC == '')
        {
            return '';
        }

        $objFile = \FilesModel::findByUuid($this->singleSRC);

        if ($objFile === null)
        {
            if (!\Validator::isUuid($this->singleSRC))
            {
                return '<p class="error">'.$GLOBALS['TL_LANG']['ERR']['version2format'].'</p>';
            }

            return '';
        }

        if (!is_file(TL_ROOT . '/' . $objFile->path))
        {
            return '';
        }

        $this->singleSRC = $objFile->path;



        // Code for backend
        if(TL_MODE == 'BE') {
            $be_image = $this->getImage($this->singleSRC, 150, 50, 'center_center');
            return "<img src=\"$be_image\" />";
        }



        // Code for frontend
        if(TL_MODE == 'FE') {

        }

        return parent::generate();
    }

    protected function compile() {
        $GLOBALS['TL_JAVASCRIPT'][] = 'system/modules/sv-parallax/assets/js/parallax.min.js|static';

    }
}