<?php

namespace LaravelWechatpayV3\Service\Ecommerce\ProfitSharing\ReturnOrder;

use LaravelWechatpayV3\Kernel\BaseClient;

/**
 * Class Client.
 */
class Client extends BaseClient
{
    /**
     * @param null $query
     * @param array $options
     * @return mixed|\Psr\Http\Message\ResponseInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Throwable
     */
    public function retrieveByOrder($query = null, array $options = [])
    {
        $url = self::classUrl();
        $opts = $options + ['query' => $query];

        return $this->request('GET', $url, $opts);
    }

    /**
     * @param array $params
     * @param array $options
     * @return mixed|\Psr\Http\Message\ResponseInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Throwable
     */
    public function create(array $params, array $options = [])
    {
        return parent::create($params, $options);
    }
}
