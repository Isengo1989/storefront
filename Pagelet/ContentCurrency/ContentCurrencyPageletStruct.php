<?php declare(strict_types=1);

namespace Shopware\Storefront\Pagelet\ContentCurrency;

use Shopware\Core\Framework\DataAbstractionLayer\Search\EntitySearchResult;
use Shopware\Core\Framework\Struct\Struct;
use Shopware\Core\System\Currency\CurrencyEntity;

class ContentCurrencyPageletStruct extends Struct
{
    /**
     * @var EntitySearchResult
     */
    protected $currencies;

    /**
     * @var CurrencyEntity
     */
    protected $currency;

    /**
     * @return EntitySearchResult
     */
    public function getCurrencies(): EntitySearchResult
    {
        return $this->currencies;
    }

    /**
     * @param EntitySearchResult $currencies
     */
    public function setCurrencies(EntitySearchResult $currencies): void
    {
        $this->currencies = $currencies;
    }

    /**
     * @return CurrencyEntity
     */
    public function getCurrency(): CurrencyEntity
    {
        return $this->currency;
    }

    /**
     * @param CurrencyEntity $currency
     */
    public function setCurrency(CurrencyEntity $currency): void
    {
        $this->currency = $currency;
    }
}
