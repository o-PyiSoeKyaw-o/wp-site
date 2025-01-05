<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v18/services/keyword_plan_idea_service.proto

namespace Google\Ads\GoogleAds\V18\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [KeywordPlanIdeaService.GenerateKeywordForecastMetrics].
 *
 * Generated from protobuf message <code>google.ads.googleads.v18.services.GenerateKeywordForecastMetricsRequest</code>
 */
class GenerateKeywordForecastMetricsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The ID of the customer.
     *
     * Generated from protobuf field <code>string customer_id = 1;</code>
     */
    protected $customer_id = '';
    /**
     * The currency used for exchange rate conversion.
     * By default, the account currency of the customer is used.
     * Set this field only if the currency is different from the account currency.
     * The list of valid currency codes can be found at
     * https://developers.google.com/google-ads/api/data/codes-formats#currency-codes.
     *
     * Generated from protobuf field <code>optional string currency_code = 2;</code>
     */
    protected $currency_code = null;
    /**
     * The date range for the forecast. The start date must be in the future and
     * end date must be within 1 year from today. The reference timezone used is
     * the one of the Google Ads account belonging to the customer. If not set, a
     * default date range from next Sunday to the following Saturday will be used.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v18.common.DateRange forecast_period = 3;</code>
     */
    protected $forecast_period = null;
    /**
     * Required. The campaign used in the forecast.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v18.services.CampaignToForecast campaign = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $campaign = null;

    /**
     * @param \Google\Ads\GoogleAds\V18\Services\CampaignToForecast $campaign Required. The campaign used in the forecast.
     *
     * @return \Google\Ads\GoogleAds\V18\Services\GenerateKeywordForecastMetricsRequest
     *
     * @experimental
     */
    public static function build(\Google\Ads\GoogleAds\V18\Services\CampaignToForecast $campaign): self
    {
        return (new self())
            ->setCampaign($campaign);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $customer_id
     *           The ID of the customer.
     *     @type string $currency_code
     *           The currency used for exchange rate conversion.
     *           By default, the account currency of the customer is used.
     *           Set this field only if the currency is different from the account currency.
     *           The list of valid currency codes can be found at
     *           https://developers.google.com/google-ads/api/data/codes-formats#currency-codes.
     *     @type \Google\Ads\GoogleAds\V18\Common\DateRange $forecast_period
     *           The date range for the forecast. The start date must be in the future and
     *           end date must be within 1 year from today. The reference timezone used is
     *           the one of the Google Ads account belonging to the customer. If not set, a
     *           default date range from next Sunday to the following Saturday will be used.
     *     @type \Google\Ads\GoogleAds\V18\Services\CampaignToForecast $campaign
     *           Required. The campaign used in the forecast.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V18\Services\KeywordPlanIdeaService::initOnce();
        parent::__construct($data);
    }

    /**
     * The ID of the customer.
     *
     * Generated from protobuf field <code>string customer_id = 1;</code>
     * @return string
     */
    public function getCustomerId()
    {
        return $this->customer_id;
    }

    /**
     * The ID of the customer.
     *
     * Generated from protobuf field <code>string customer_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setCustomerId($var)
    {
        GPBUtil::checkString($var, True);
        $this->customer_id = $var;

        return $this;
    }

    /**
     * The currency used for exchange rate conversion.
     * By default, the account currency of the customer is used.
     * Set this field only if the currency is different from the account currency.
     * The list of valid currency codes can be found at
     * https://developers.google.com/google-ads/api/data/codes-formats#currency-codes.
     *
     * Generated from protobuf field <code>optional string currency_code = 2;</code>
     * @return string
     */
    public function getCurrencyCode()
    {
        return isset($this->currency_code) ? $this->currency_code : '';
    }

    public function hasCurrencyCode()
    {
        return isset($this->currency_code);
    }

    public function clearCurrencyCode()
    {
        unset($this->currency_code);
    }

    /**
     * The currency used for exchange rate conversion.
     * By default, the account currency of the customer is used.
     * Set this field only if the currency is different from the account currency.
     * The list of valid currency codes can be found at
     * https://developers.google.com/google-ads/api/data/codes-formats#currency-codes.
     *
     * Generated from protobuf field <code>optional string currency_code = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setCurrencyCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->currency_code = $var;

        return $this;
    }

    /**
     * The date range for the forecast. The start date must be in the future and
     * end date must be within 1 year from today. The reference timezone used is
     * the one of the Google Ads account belonging to the customer. If not set, a
     * default date range from next Sunday to the following Saturday will be used.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v18.common.DateRange forecast_period = 3;</code>
     * @return \Google\Ads\GoogleAds\V18\Common\DateRange|null
     */
    public function getForecastPeriod()
    {
        return $this->forecast_period;
    }

    public function hasForecastPeriod()
    {
        return isset($this->forecast_period);
    }

    public function clearForecastPeriod()
    {
        unset($this->forecast_period);
    }

    /**
     * The date range for the forecast. The start date must be in the future and
     * end date must be within 1 year from today. The reference timezone used is
     * the one of the Google Ads account belonging to the customer. If not set, a
     * default date range from next Sunday to the following Saturday will be used.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v18.common.DateRange forecast_period = 3;</code>
     * @param \Google\Ads\GoogleAds\V18\Common\DateRange $var
     * @return $this
     */
    public function setForecastPeriod($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V18\Common\DateRange::class);
        $this->forecast_period = $var;

        return $this;
    }

    /**
     * Required. The campaign used in the forecast.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v18.services.CampaignToForecast campaign = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Ads\GoogleAds\V18\Services\CampaignToForecast|null
     */
    public function getCampaign()
    {
        return $this->campaign;
    }

    public function hasCampaign()
    {
        return isset($this->campaign);
    }

    public function clearCampaign()
    {
        unset($this->campaign);
    }

    /**
     * Required. The campaign used in the forecast.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v18.services.CampaignToForecast campaign = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Ads\GoogleAds\V18\Services\CampaignToForecast $var
     * @return $this
     */
    public function setCampaign($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V18\Services\CampaignToForecast::class);
        $this->campaign = $var;

        return $this;
    }

}
