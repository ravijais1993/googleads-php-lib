<?php

namespace Google\AdsApi\AdWords\v201708\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CampaignGroupPerformanceTargetService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ApiError' => 'Google\\AdsApi\\AdWords\\v201708\\cm\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdWords\\v201708\\cm\\ApiException',
      'ApplicationException' => 'Google\\AdsApi\\AdWords\\v201708\\cm\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdWords\\v201708\\cm\\AuthenticationError',
      'AuthorizationError' => 'Google\\AdsApi\\AdWords\\v201708\\cm\\AuthorizationError',
      'CampaignGroupPerformanceTarget' => 'Google\\AdsApi\\AdWords\\v201708\\cm\\CampaignGroupPerformanceTarget',
      'CampaignGroupPerformanceTargetError' => 'Google\\AdsApi\\AdWords\\v201708\\cm\\CampaignGroupPerformanceTargetError',
      'CampaignGroupPerformanceTargetOperation' => 'Google\\AdsApi\\AdWords\\v201708\\cm\\CampaignGroupPerformanceTargetOperation',
      'CampaignGroupPerformanceTargetPage' => 'Google\\AdsApi\\AdWords\\v201708\\cm\\CampaignGroupPerformanceTargetPage',
      'CampaignGroupPerformanceTargetReturnValue' => 'Google\\AdsApi\\AdWords\\v201708\\cm\\CampaignGroupPerformanceTargetReturnValue',
      'ClientTermsError' => 'Google\\AdsApi\\AdWords\\v201708\\cm\\ClientTermsError',
      'ComparableValue' => 'Google\\AdsApi\\AdWords\\v201708\\cm\\ComparableValue',
      'DatabaseError' => 'Google\\AdsApi\\AdWords\\v201708\\cm\\DatabaseError',
      'DateError' => 'Google\\AdsApi\\AdWords\\v201708\\cm\\DateError',
      'DateRange' => 'Google\\AdsApi\\AdWords\\v201708\\cm\\DateRange',
      'DistinctError' => 'Google\\AdsApi\\AdWords\\v201708\\cm\\DistinctError',
      'DoubleValue' => 'Google\\AdsApi\\AdWords\\v201708\\cm\\DoubleValue',
      'EntityAccessDenied' => 'Google\\AdsApi\\AdWords\\v201708\\cm\\EntityAccessDenied',
      'EntityCountLimitExceeded' => 'Google\\AdsApi\\AdWords\\v201708\\cm\\EntityCountLimitExceeded',
      'EntityNotFound' => 'Google\\AdsApi\\AdWords\\v201708\\cm\\EntityNotFound',
      'FieldPathElement' => 'Google\\AdsApi\\AdWords\\v201708\\cm\\FieldPathElement',
      'IdError' => 'Google\\AdsApi\\AdWords\\v201708\\cm\\IdError',
      'InternalApiError' => 'Google\\AdsApi\\AdWords\\v201708\\cm\\InternalApiError',
      'ListReturnValue' => 'Google\\AdsApi\\AdWords\\v201708\\cm\\ListReturnValue',
      'LongValue' => 'Google\\AdsApi\\AdWords\\v201708\\cm\\LongValue',
      'Money' => 'Google\\AdsApi\\AdWords\\v201708\\cm\\Money',
      'NewEntityCreationError' => 'Google\\AdsApi\\AdWords\\v201708\\cm\\NewEntityCreationError',
      'NotEmptyError' => 'Google\\AdsApi\\AdWords\\v201708\\cm\\NotEmptyError',
      'NullError' => 'Google\\AdsApi\\AdWords\\v201708\\cm\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdWords\\v201708\\cm\\NumberValue',
      'Operation' => 'Google\\AdsApi\\AdWords\\v201708\\cm\\Operation',
      'OperationAccessDenied' => 'Google\\AdsApi\\AdWords\\v201708\\cm\\OperationAccessDenied',
      'OperatorError' => 'Google\\AdsApi\\AdWords\\v201708\\cm\\OperatorError',
      'OrderBy' => 'Google\\AdsApi\\AdWords\\v201708\\cm\\OrderBy',
      'Page' => 'Google\\AdsApi\\AdWords\\v201708\\cm\\Page',
      'Paging' => 'Google\\AdsApi\\AdWords\\v201708\\cm\\Paging',
      'PerformanceTarget' => 'Google\\AdsApi\\AdWords\\v201708\\cm\\PerformanceTarget',
      'PerformanceTargetError' => 'Google\\AdsApi\\AdWords\\v201708\\cm\\PerformanceTargetError',
      'Predicate' => 'Google\\AdsApi\\AdWords\\v201708\\cm\\Predicate',
      'QueryError' => 'Google\\AdsApi\\AdWords\\v201708\\cm\\QueryError',
      'QuotaCheckError' => 'Google\\AdsApi\\AdWords\\v201708\\cm\\QuotaCheckError',
      'RangeError' => 'Google\\AdsApi\\AdWords\\v201708\\cm\\RangeError',
      'RateExceededError' => 'Google\\AdsApi\\AdWords\\v201708\\cm\\RateExceededError',
      'ReadOnlyError' => 'Google\\AdsApi\\AdWords\\v201708\\cm\\ReadOnlyError',
      'RejectedError' => 'Google\\AdsApi\\AdWords\\v201708\\cm\\RejectedError',
      'RequestError' => 'Google\\AdsApi\\AdWords\\v201708\\cm\\RequestError',
      'RequiredError' => 'Google\\AdsApi\\AdWords\\v201708\\cm\\RequiredError',
      'Selector' => 'Google\\AdsApi\\AdWords\\v201708\\cm\\Selector',
      'SelectorError' => 'Google\\AdsApi\\AdWords\\v201708\\cm\\SelectorError',
      'SizeLimitError' => 'Google\\AdsApi\\AdWords\\v201708\\cm\\SizeLimitError',
      'SoapHeader' => 'Google\\AdsApi\\AdWords\\v201708\\cm\\SoapHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdWords\\v201708\\cm\\SoapResponseHeader',
      'StringFormatError' => 'Google\\AdsApi\\AdWords\\v201708\\cm\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdWords\\v201708\\cm\\StringLengthError',
      'getResponse' => 'Google\\AdsApi\\AdWords\\v201708\\cm\\getResponse',
      'mutateResponse' => 'Google\\AdsApi\\AdWords\\v201708\\cm\\mutateResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://adwords.google.com/api/adwords/cm/v201708/CampaignGroupPerformanceTargetService?wsdl')
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      parent::__construct($wsdl, $options);
    }

    /**
     * Returns the list of campaign group performance targets that meet the selector criteria.
     *
     * information.
     *
     * @param \Google\AdsApi\AdWords\v201708\cm\Selector $selector
     * @return \Google\AdsApi\AdWords\v201708\cm\CampaignGroupPerformanceTargetPage
     * @throws \Google\AdsApi\AdWords\v201708\cm\ApiException
     */
    public function get(\Google\AdsApi\AdWords\v201708\cm\Selector $selector)
    {
      return $this->__soapCall('get', array(array('selector' => $selector)))->getRval();
    }

    /**
     * Adds, updates, or deletes campaign group performance targets.
     *
     * the <code>operations</code> array.
     * information.
     *
     * @param \Google\AdsApi\AdWords\v201708\cm\CampaignGroupPerformanceTargetOperation[] $operations
     * @return \Google\AdsApi\AdWords\v201708\cm\CampaignGroupPerformanceTargetReturnValue
     * @throws \Google\AdsApi\AdWords\v201708\cm\ApiException
     */
    public function mutate(array $operations)
    {
      return $this->__soapCall('mutate', array(array('operations' => $operations)))->getRval();
    }

}