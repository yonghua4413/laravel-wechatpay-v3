<?php

namespace LaravelWechatpayV3\Service;

use LaravelWechatpayV3\Kernel\ServiceContainer;

/**
 * Class Application.
 *
 * @property \LaravelWechatpayV3\Service\Certificate\Client $certificate
 * @property \LaravelWechatpayV3\Service\Notify\Client $notify
 * @property \LaravelWechatpayV3\Service\Apply4Sub\SubMerchant\Client $subMerchant
 * @property \LaravelWechatpayV3\Service\Merchant\Media\Client $media
 * @property \LaravelWechatpayV3\Service\CombineTransaction\Client $combineTransaction
 * @property \LaravelWechatpayV3\Service\Ecommerce\Applyment\Client $applyment
 * @property \LaravelWechatpayV3\Service\Ecommerce\ProfitSharing\Order\Client $profitSharingOrder
 * @property \LaravelWechatpayV3\Service\Ecommerce\ProfitSharing\ReturnOrder\Client $profitSharingReturnOrder
 * @property \LaravelWechatpayV3\Service\Ecommerce\ProfitSharing\FinishOrder\Client $profitSharingFinishOrder
 * @property \LaravelWechatpayV3\Service\Ecommerce\Subsidy\Client $subsidy
 * @property \LaravelWechatpayV3\Service\Ecommerce\Refund\Client $refund
 * @property \LaravelWechatpayV3\Service\Ecommerce\Fund\Withdraw\Client $withdraw
 * @property \LaravelWechatpayV3\Service\Ecommerce\Fund\Balance\Client $balance
 * @property \LaravelWechatpayV3\Service\Bill\Client $bill
 */
class Application extends ServiceContainer
{
    /**
     * @var array
     */
    protected $providers = [
        Certificate\ServiceProvider::class,
        Notify\ServiceProvider::class,
        Apply4Sub\SubMerchant\ServiceProvider::class,
        Merchant\Media\ServiceProvider::class,
        CombineTransaction\ServiceProvider::class,
        Ecommerce\Applyment\ServiceProvider::class,
        Ecommerce\ProfitSharing\Order\ServiceProvider::class,
        Ecommerce\ProfitSharing\ReturnOrder\ServiceProvider::class,
        Ecommerce\ProfitSharing\FinishOrder\ServiceProvider::class,
        Ecommerce\Subsidy\ServiceProvider::class,
        Ecommerce\Refund\ServiceProvider::class,
        Ecommerce\Fund\Withdraw\ServiceProvider::class,
        Ecommerce\Fund\Balance\ServiceProvider::class,
        Bill\ServiceProvider::class,
    ];
}
