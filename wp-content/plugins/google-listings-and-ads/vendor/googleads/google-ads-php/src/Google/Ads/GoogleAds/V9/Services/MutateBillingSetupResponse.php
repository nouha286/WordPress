<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v9/services/billing_setup_service.proto

namespace Google\Ads\GoogleAds\V9\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for a billing setup operation.
 *
 * Generated from protobuf message <code>google.ads.googleads.v9.services.MutateBillingSetupResponse</code>
 */
class MutateBillingSetupResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * A result that identifies the resource affected by the mutate request.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v9.services.MutateBillingSetupResult result = 1;</code>
     */
    protected $result = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Ads\GoogleAds\V9\Services\MutateBillingSetupResult $result
     *           A result that identifies the resource affected by the mutate request.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V9\Services\BillingSetupService::initOnce();
        parent::__construct($data);
    }

    /**
     * A result that identifies the resource affected by the mutate request.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v9.services.MutateBillingSetupResult result = 1;</code>
     * @return \Google\Ads\GoogleAds\V9\Services\MutateBillingSetupResult|null
     */
    public function getResult()
    {
        return $this->result;
    }

    public function hasResult()
    {
        return isset($this->result);
    }

    public function clearResult()
    {
        unset($this->result);
    }

    /**
     * A result that identifies the resource affected by the mutate request.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v9.services.MutateBillingSetupResult result = 1;</code>
     * @param \Google\Ads\GoogleAds\V9\Services\MutateBillingSetupResult $var
     * @return $this
     */
    public function setResult($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V9\Services\MutateBillingSetupResult::class);
        $this->result = $var;

        return $this;
    }

}

