<?php

class SchOffer extends SchIntangible
{
    protected $acceptedPaymentMethod = 'PaymentMethod';
    protected $addOn = 'Offer';
    protected $advanceBookingRequirement = 'QuantitativeValue';
    protected $aggregateRating = 'AggregateRating';
    protected $availability = 'ItemAvailability';
    protected $availabilityEnds = 'DateTime';
    protected $availabilityStarts = 'DateTime';
    protected $availableAtOrFrom = 'Place';
    protected $availableDeliveryMethod = 'DeliveryMethod';
    protected $businessFunction = 'BusinessFunction';
    protected $category = 'PhysicalActivityCategory,Text,Thing';
    protected $deliveryLeadTime = 'QuantitativeValue';
    protected $eligibleCustomerType = 'BusinessEntityType';
    protected $eligibleDuration = 'QuantitativeValue';
    protected $eligibleQuantity = 'QuantitativeValue';
    protected $eligibleRegion = 'GeoShape,Text';
    protected $eligibleTransactionVolume = 'PriceSpecification';
    protected $gtin13 = 'Text';
    protected $gtin14 = 'Text';
    protected $gtin8 = 'Text';
    protected $includesObject = 'TypeAndQuantityNode';
    protected $inventoryLevel = 'QuantitativeValue';
    protected $itemCondition = 'OfferItemCondition';
    protected $itemOffered = 'Product';
    protected $mpn = 'Text';
    protected $price = 'Number,Text';
    protected $priceCurrency = 'Text';
    protected $priceSpecification = 'PriceSpecification';
    protected $priceValidUntil = 'Date';
    protected $review = 'Review';
    protected $seller = 'Person,Organization';
    protected $serialNumber = 'Text';
    protected $sku = 'Text';
    protected $validFrom = 'DateTime';
    protected $validThrough = 'DateTime';
    protected $warranty = 'WarrantyPromise';

    function __construct()
    {
        $this->namespace = "Offer";
    }

    public function wrapPropVals($prop, $val)
    {
        $atts = '';
        switch ($prop) {
            case 'price':
            case 'priceCurrency':
                $atts = ' content="' . $val . '" ';
                break;
        }
        return $atts;
    }
}