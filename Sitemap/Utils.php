<?php

/**
 * This file is part of the PrestaSitemapBundle package.
 *
 * (c) PrestaConcept <www.prestaconcept.net>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Presta\SitemapBundle\Sitemap;

/**
 * Description of Utils
 *
 * @author David Epely <depely@prestaconcept.net>
 */
class Utils
{
    /**
     * @deprecated since 2.3.0, to be removed in 3.0.0
     *
     * Legacy alias of Utils::cdata
     *
     * @param string $string
     *
     * @return string
     */
    public static function render($string)
    {
        return self::cdata($string);
    }

    /**
     * Wrap string with CDATA markup
     *
     * @param string $string
     *
     * @return string
     */
    public static function cdata($string)
    {
        return '<![CDATA[' . $string . ']]>';
    }

    /**
     * Encode string with html special chars
     *
     * @param string $string
     *
     * @return string
     */
    public static function encode($string)
    {
        return htmlspecialchars($string, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
    }
}
