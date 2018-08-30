<?php
/**
 * Contao 4 TinyMCE Plugins Bundle
 *
 * @copyright 2011, 2014, 2018 agentur fipps e.K.
 * @author    Arne Borchert
 * @package   fipps\contao-tinymceplugins-bundle
 * @license   LGPL 3.0+
 */

namespace Fipps\TinymcepluginsBundle;


class Hooks
{

    public function parseBackendTemplate($strBuffer, $strTemplate)
    {

        return $strBuffer;
    }
}