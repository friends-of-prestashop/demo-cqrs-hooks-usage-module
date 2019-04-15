<?php
/**
 * 2007-2019 PrestaShop SA and Contributors
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2019 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 */

namespace DemoCQRSHookUsage\Controller\Admin;

use DemoCQRSHookUsage\Domain\Reviewer\Command\ToggleIsAllowedToReviewCommand;
use PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController as AbstractAdminController;

/**
 * This controller holds all custom actions which are added by extending "Sell > Customers" page.
 */
class CustomerReviewController extends AbstractAdminController
{
    /**
     * Catches the toggle action of customer review.
     *
     * @param int $customerId
     */
    public function toggleIsAllowedForReviewAction($customerId)
    {
        $this->getCommandBus()->handle(new ToggleIsAllowedToReviewCommand((int) $customerId));
    }
}
