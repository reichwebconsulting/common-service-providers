<?php
declare(strict_types=1);
/**
 * Contains RWC\ServiceProviders\ConfigurationFile class.
 *
 * @author Brian Reich <breich@reich-consulting.net>
 * @copyright Copyright (C) 2018 Catalyst Fabric Solutions
 */

namespace RWC\ServiceProviders;

use Pimple\ServiceProviderInterface;
use Pimple\Container;

/**
 * The Paths service provide provides named paths as specified in the config
 * service's "paths" parameter. This can be used to specify paths for logging
 * storage, scratch folders, etc.
 *
 * @package Catalyst\Messaging\Resources
 */
class Paths extends NamedStringProvider implements ServiceProviderInterface
{
    /**
     * Paths constructor.
     */
    public function __construct()
    {
        parent::__construct('paths');
    }
}
