<?php
/**
 * Created by PhpStorm.
 * User: sebastian
 * Date: 02.05.16
 * Time: 13:14
 */

namespace Contao;


class ContentSvParallaxEnd extends \ContentElement
{
    protected $strTemplate = 'ce_sv_parallax_end';

    public function generate() {

        // Code for backend
        if(TL_MODE == 'BE') {
            return '';
        }

        // Code for frontend
        if(TL_MODE == 'FE') {

        }

        return parent::generate();
    }

    protected function compile() {

    }
}