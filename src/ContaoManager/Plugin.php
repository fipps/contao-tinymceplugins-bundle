<?php
/**
 * Contao 4 TinyMCE Plugins Bundle
 *
 * @copyright 2011, 2014, 2018 agentur fipps e.K.
 * @author    Arne Borchert
 * @package   fipps\contao-tinymceplugins-bundle
 * @license   LGPL 3.0+
 */

namespace Fipps\TinymcepluginsBundle\ContaoManager;

use Fipps\TinymcepluginsBundle\FippsTinymcepluginsBundle;
use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;

/**
 * Plugin for the Contao Manager.
 *
 * @author Arne Borchert
 */
class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(FippsTinymcepluginsBundle::class)->setLoadAfter([ContaoCoreBundle::class])->setReplace(['fipps_tinymceplugins']),
        ];
    }
}