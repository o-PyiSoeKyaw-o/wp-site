<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v18/services/google_ads_service.proto

namespace Google\Ads\GoogleAds\V18\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Indicates search settings in request parameter.
 *
 * Generated from protobuf message <code>google.ads.googleads.v18.services.SearchSettings</code>
 */
class SearchSettings extends \Google\Protobuf\Internal\Message
{
    /**
     * If true, results will be excluded from the response. Otherwise, results
     * will be returned.
     * Default is false.
     *
     * Generated from protobuf field <code>bool omit_results = 1;</code>
     */
    protected $omit_results = false;
    /**
     * If true, summary row will be included in the response and sent in a
     * response by itself after all other query results are returned.
     * Default is false.
     *
     * Generated from protobuf field <code>bool return_summary_row = 2;</code>
     */
    protected $return_summary_row = false;
    /**
     * If true, the total number of results that match the query ignoring the
     * LIMIT clause will be included in the response.
     * Default is false.
     *
     * Generated from protobuf field <code>bool return_total_results_count = 3;</code>
     */
    protected $return_total_results_count = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $omit_results
     *           If true, results will be excluded from the response. Otherwise, results
     *           will be returned.
     *           Default is false.
     *     @type bool $return_summary_row
     *           If true, summary row will be included in the response and sent in a
     *           response by itself after all other query results are returned.
     *           Default is false.
     *     @type bool $return_total_results_count
     *           If true, the total number of results that match the query ignoring the
     *           LIMIT clause will be included in the response.
     *           Default is false.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V18\Services\GoogleAdsService::initOnce();
        parent::__construct($data);
    }

    /**
     * If true, results will be excluded from the response. Otherwise, results
     * will be returned.
     * Default is false.
     *
     * Generated from protobuf field <code>bool omit_results = 1;</code>
     * @return bool
     */
    public function getOmitResults()
    {
        return $this->omit_results;
    }

    /**
     * If true, results will be excluded from the response. Otherwise, results
     * will be returned.
     * Default is false.
     *
     * Generated from protobuf field <code>bool omit_results = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setOmitResults($var)
    {
        GPBUtil::checkBool($var);
        $this->omit_results = $var;

        return $this;
    }

    /**
     * If true, summary row will be included in the response and sent in a
     * response by itself after all other query results are returned.
     * Default is false.
     *
     * Generated from protobuf field <code>bool return_summary_row = 2;</code>
     * @return bool
     */
    public function getReturnSummaryRow()
    {
        return $this->return_summary_row;
    }

    /**
     * If true, summary row will be included in the response and sent in a
     * response by itself after all other query results are returned.
     * Default is false.
     *
     * Generated from protobuf field <code>bool return_summary_row = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setReturnSummaryRow($var)
    {
        GPBUtil::checkBool($var);
        $this->return_summary_row = $var;

        return $this;
    }

    /**
     * If true, the total number of results that match the query ignoring the
     * LIMIT clause will be included in the response.
     * Default is false.
     *
     * Generated from protobuf field <code>bool return_total_results_count = 3;</code>
     * @return bool
     */
    public function getReturnTotalResultsCount()
    {
        return $this->return_total_results_count;
    }

    /**
     * If true, the total number of results that match the query ignoring the
     * LIMIT clause will be included in the response.
     * Default is false.
     *
     * Generated from protobuf field <code>bool return_total_results_count = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setReturnTotalResultsCount($var)
    {
        GPBUtil::checkBool($var);
        $this->return_total_results_count = $var;

        return $this;
    }

}

