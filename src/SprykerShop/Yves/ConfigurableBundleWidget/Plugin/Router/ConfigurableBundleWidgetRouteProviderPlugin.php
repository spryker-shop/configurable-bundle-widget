<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerShop\ConfigurableBundleWidget\src\SprykerShop\Yves\ConfigurableBundleWidget\Plugin\Router;

use Spryker\Yves\Router\Plugin\RouteProvider\AbstractRouteProviderPlugin;
use Spryker\Yves\Router\Route\RouteCollection;

class ConfigurableBundleWidgetRouteProviderPlugin extends AbstractRouteProviderPlugin
{
    protected const ROUTE_CART_CONFIGURED_BUNDLE_REMOVE = 'cart/configured-bundle/remove';

    /**
     * {@inheritDoc}
     *
     * @api
     *
     * @param \Spryker\Yves\Router\Route\RouteCollection $routeCollection
     *
     * @return \Spryker\Yves\Router\Route\RouteCollection
     */
    public function addRoutes(RouteCollection $routeCollection): RouteCollection
    {
        $routeCollection = $this->addCartConfiguredBundleRemoveRoute($routeCollection);

        return $routeCollection;
    }

    /**
     * @param \Spryker\Yves\Router\Route\RouteCollection $routeCollection
     *
     * @return \Spryker\Yves\Router\Route\RouteCollection
     */
    protected function addCartConfiguredBundleRemoveRoute(RouteCollection $routeCollection): RouteCollection
    {
        $route = $this->buildRoute('/cart/configured-bundle/remove/{configuredBundleGroupKey}', 'ConfigurableBundleWidget', 'ConfiguredBundle', 'remove');
        $route = $route->setDefault('configuredBundleGroupKey', '');
        $routeCollection->add(static::ROUTE_CART_CONFIGURED_BUNDLE_REMOVE, $route);

        return $routeCollection;
    }
}
