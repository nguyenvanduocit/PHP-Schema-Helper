<?php

/**
 * Project : phpschema
 * User: thuytien
 * Date: 10/23/2014
 * Time: 3:07 PM
 */
class Schema
{
    /**
     * @param null $schema
     * @param null $prop
     * @return mixed
     */
    private static function fillter($schema = null, $prop = null, $val = null)
    {
        if ($prop != null) {
            return $schema::getInstance()->prop($prop, $val);
        } else {
            return $schema::getInstance()->scope();
        }
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function APIReference($prop = null, $val = null)
    {
        return self::fillter("SchAPIReference", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function AboutPage($prop = null, $val = null)
    {
        return self::fillter("SchAboutPage", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function AcceptAction($prop = null, $val = null)
    {
        return self::fillter("SchAcceptAction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function AccountingService($prop = null, $val = null)
    {
        return self::fillter("SchAccountingService", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function AchieveAction($prop = null, $val = null)
    {
        return self::fillter("SchAchieveAction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Action($prop = null, $val = null)
    {
        return self::fillter("SchAction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function AddAction($prop = null, $val = null)
    {
        return self::fillter("SchAddAction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function AdministrativeArea($prop = null, $val = null)
    {
        return self::fillter("SchAdministrativeArea", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function AdultEntertainment($prop = null, $val = null)
    {
        return self::fillter("SchAdultEntertainment", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function AggregateOffer($prop = null, $val = null)
    {
        return self::fillter("SchAggregateOffer", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function AggregateRating($prop = null, $val = null)
    {
        return self::fillter("SchAggregateRating", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function AgreeAction($prop = null, $val = null)
    {
        return self::fillter("SchAgreeAction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Airline($prop = null, $val = null)
    {
        return self::fillter("SchAirline", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Airport($prop = null, $val = null)
    {
        return self::fillter("SchAirport", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function AlignmentObject($prop = null, $val = null)
    {
        return self::fillter("SchAlignmentObject", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function AllocateAction($prop = null, $val = null)
    {
        return self::fillter("SchAllocateAction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function AmusementPark($prop = null, $val = null)
    {
        return self::fillter("SchAmusementPark", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function AnatomicalStructure($prop = null, $val = null)
    {
        return self::fillter("SchAnatomicalStructure", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function AnatomicalSystem($prop = null, $val = null)
    {
        return self::fillter("SchAnatomicalSystem", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function AnimalShelter($prop = null, $val = null)
    {
        return self::fillter("SchAnimalShelter", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Answer($prop = null, $val = null)
    {
        return self::fillter("SchAnswer", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function ApartmentComplex($prop = null, $val = null)
    {
        return self::fillter("SchApartmentComplex", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function AppendAction($prop = null, $val = null)
    {
        return self::fillter("SchAppendAction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function ApplyAction($prop = null, $val = null)
    {
        return self::fillter("SchApplyAction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function ApprovedIndication($prop = null, $val = null)
    {
        return self::fillter("SchApprovedIndication", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Aquarium($prop = null, $val = null)
    {
        return self::fillter("SchAquarium", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function ArriveAction($prop = null, $val = null)
    {
        return self::fillter("SchArriveAction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function ArtGallery($prop = null, $val = null)
    {
        return self::fillter("SchArtGallery", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Artery($prop = null, $val = null)
    {
        return self::fillter("SchArtery", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Article($prop = null, $val = null)
    {
        return self::fillter("SchArticle", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function AskAction($prop = null, $val = null)
    {
        return self::fillter("SchAskAction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function AssessAction($prop = null, $val = null)
    {
        return self::fillter("SchAssessAction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function AssignAction($prop = null, $val = null)
    {
        return self::fillter("SchAssignAction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Attorney($prop = null, $val = null)
    {
        return self::fillter("SchAttorney", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Audience($prop = null, $val = null)
    {
        return self::fillter("SchAudience", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function AudioObject($prop = null, $val = null)
    {
        return self::fillter("SchAudioObject", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function AuthorizeAction($prop = null, $val = null)
    {
        return self::fillter("SchAuthorizeAction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function AutoBodyShop($prop = null, $val = null)
    {
        return self::fillter("SchAutoBodyShop", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function AutoDealer($prop = null, $val = null)
    {
        return self::fillter("SchAutoDealer", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function AutoPartsStore($prop = null, $val = null)
    {
        return self::fillter("SchAutoPartsStore", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function AutoRental($prop = null, $val = null)
    {
        return self::fillter("SchAutoRental", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function AutoRepair($prop = null, $val = null)
    {
        return self::fillter("SchAutoRepair", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function AutoWash($prop = null, $val = null)
    {
        return self::fillter("SchAutoWash", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function AutomatedTeller($prop = null, $val = null)
    {
        return self::fillter("SchAutomatedTeller", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function AutomotiveBusiness($prop = null, $val = null)
    {
        return self::fillter("SchAutomotiveBusiness", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Bakery($prop = null, $val = null)
    {
        return self::fillter("SchBakery", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function BankOrCreditUnion($prop = null, $val = null)
    {
        return self::fillter("SchBankOrCreditUnion", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function BarOrPub($prop = null, $val = null)
    {
        return self::fillter("SchBarOrPub", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Base($prop = null, $val = null)
    {
        return self::fillter("SchBase", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function BaseInterface($prop = null, $val = null)
    {
        return self::fillter("SchBaseInterface", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Beach($prop = null, $val = null)
    {
        return self::fillter("SchBeach", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function BeautySalon($prop = null, $val = null)
    {
        return self::fillter("SchBeautySalon", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function BedAndBreakfast($prop = null, $val = null)
    {
        return self::fillter("SchBedAndBreakfast", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function BefriendAction($prop = null, $val = null)
    {
        return self::fillter("SchBefriendAction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function BikeStore($prop = null, $val = null)
    {
        return self::fillter("SchBikeStore", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Blog($prop = null, $val = null)
    {
        return self::fillter("SchBlog", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function BloodTest($prop = null, $val = null)
    {
        return self::fillter("SchBloodTest", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function BodyOfWater($prop = null, $val = null)
    {
        return self::fillter("SchBodyOfWater", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Bone($prop = null, $val = null)
    {
        return self::fillter("SchBone", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Book($prop = null, $val = null)
    {
        return self::fillter("SchBook", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function BookFormatType($prop = null, $val = null)
    {
        return self::fillter("SchBookFormatType", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function BookStore($prop = null, $val = null)
    {
        return self::fillter("SchBookStore", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function BookmarkAction($prop = null, $val = null)
    {
        return self::fillter("SchBookmarkAction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function BorrowAction($prop = null, $val = null)
    {
        return self::fillter("SchBorrowAction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function BowlingAlley($prop = null, $val = null)
    {
        return self::fillter("SchBowlingAlley", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function BrainStructure($prop = null, $val = null)
    {
        return self::fillter("SchBrainStructure", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Brand($prop = null, $val = null)
    {
        return self::fillter("SchBrand", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Brewery($prop = null, $val = null)
    {
        return self::fillter("SchBrewery", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function BroadcastEvent($prop = null, $val = null)
    {
        return self::fillter("SchBroadcastEvent", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function BroadcastService($prop = null, $val = null)
    {
        return self::fillter("SchBroadcastService", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function BuddhistTemple($prop = null, $val = null)
    {
        return self::fillter("SchBuddhistTemple", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function BusReservation($prop = null, $val = null)
    {
        return self::fillter("SchBusReservation", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function BusStation($prop = null, $val = null)
    {
        return self::fillter("SchBusStation", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function BusStop($prop = null, $val = null)
    {
        return self::fillter("SchBusStop", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function BusTrip($prop = null, $val = null)
    {
        return self::fillter("SchBusTrip", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function BusinessAudience($prop = null, $val = null)
    {
        return self::fillter("SchBusinessAudience", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function BusinessEntityType($prop = null, $val = null)
    {
        return self::fillter("SchBusinessEntityType", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function BusinessEvent($prop = null, $val = null)
    {
        return self::fillter("SchBusinessEvent", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function BusinessFunction($prop = null, $val = null)
    {
        return self::fillter("SchBusinessFunction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function BuyAction($prop = null, $val = null)
    {
        return self::fillter("SchBuyAction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function CafeOrCoffeeShop($prop = null, $val = null)
    {
        return self::fillter("SchCafeOrCoffeeShop", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Campground($prop = null, $val = null)
    {
        return self::fillter("SchCampground", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Canal($prop = null, $val = null)
    {
        return self::fillter("SchCanal", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function CancelAction($prop = null, $val = null)
    {
        return self::fillter("SchCancelAction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Car($prop = null, $val = null)
    {
        return self::fillter("SchCar", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Casino($prop = null, $val = null)
    {
        return self::fillter("SchCasino", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function CatholicChurch($prop = null, $val = null)
    {
        return self::fillter("SchCatholicChurch", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Cemetery($prop = null, $val = null)
    {
        return self::fillter("SchCemetery", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function CheckAction($prop = null, $val = null)
    {
        return self::fillter("SchCheckAction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function CheckInAction($prop = null, $val = null)
    {
        return self::fillter("SchCheckInAction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function CheckOutAction($prop = null, $val = null)
    {
        return self::fillter("SchCheckOutAction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function CheckoutPage($prop = null, $val = null)
    {
        return self::fillter("SchCheckoutPage", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function ChildCare($prop = null, $val = null)
    {
        return self::fillter("SchChildCare", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function ChildrensEvent($prop = null, $val = null)
    {
        return self::fillter("SchChildrensEvent", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function ChooseAction($prop = null, $val = null)
    {
        return self::fillter("SchChooseAction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Church($prop = null, $val = null)
    {
        return self::fillter("SchChurch", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function City($prop = null, $val = null)
    {
        return self::fillter("SchCity", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function CityHall($prop = null, $val = null)
    {
        return self::fillter("SchCityHall", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function CivicStructure($prop = null, $val = null)
    {
        return self::fillter("SchCivicStructure", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    static function Clip($prop = null, $val = null)
    {
        return self::fillter("SchClip", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function ClothingStore($prop = null, $val = null)
    {
        return self::fillter("SchClothingStore", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Code($prop = null, $val = null)
    {
        return self::fillter("SchCode", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function CollectionPage($prop = null, $val = null)
    {
        return self::fillter("SchCollectionPage", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function CollegeOrUniversity($prop = null, $val = null)
    {
        return self::fillter("SchCollegeOrUniversity", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function ComedyClub($prop = null, $val = null)
    {
        return self::fillter("SchComedyClub", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function ComedyEvent($prop = null, $val = null)
    {
        return self::fillter("SchComedyEvent", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Comment($prop = null, $val = null)
    {
        return self::fillter("SchComment", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function CommentAction($prop = null, $val = null)
    {
        return self::fillter("SchCommentAction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function CommunicateAction($prop = null, $val = null)
    {
        return self::fillter("SchCommunicateAction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function ComputerStore($prop = null, $val = null)
    {
        return self::fillter("SchComputerStore", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function ConfirmAction($prop = null, $val = null)
    {
        return self::fillter("SchConfirmAction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function ConsumeAction($prop = null, $val = null)
    {
        return self::fillter("SchConsumeAction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function ContactPage($prop = null, $val = null)
    {
        return self::fillter("SchContactPage", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function ContactPoint($prop = null, $val = null)
    {
        return self::fillter("SchContactPoint", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function ContactPointOption($prop = null, $val = null)
    {
        return self::fillter("SchContactPointOption", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Continent($prop = null, $val = null)
    {
        return self::fillter("SchContinent", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function ConvenienceStore($prop = null, $val = null)
    {
        return self::fillter("SchConvenienceStore", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function CookAction($prop = null, $val = null)
    {
        return self::fillter("SchCookAction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Corporation($prop = null, $val = null)
    {
        return self::fillter("SchCorporation", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Country($prop = null, $val = null)
    {
        return self::fillter("SchCountry", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Courthouse($prop = null, $val = null)
    {
        return self::fillter("SchCourthouse", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function CreateAction($prop = null, $val = null)
    {
        return self::fillter("SchCreateAction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function CreativeWork($prop = null, $val = null)
    {
        return self::fillter("SchCreativeWork", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function CreditCard($prop = null, $val = null)
    {
        return self::fillter("SchCreditCard", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Crematorium($prop = null, $val = null)
    {
        return self::fillter("SchCrematorium", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function DDxElement($prop = null, $val = null)
    {
        return self::fillter("SchDDxElement", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function DanceEvent($prop = null, $val = null)
    {
        return self::fillter("SchDanceEvent", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function DanceGroup($prop = null, $val = null)
    {
        return self::fillter("SchDanceGroup", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function DataCatalog($prop = null, $val = null)
    {
        return self::fillter("SchDataCatalog", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Dataset($prop = null, $val = null)
    {
        return self::fillter("SchDataset", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function DayOfWeek($prop = null, $val = null)
    {
        return self::fillter("SchDayOfWeek", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function DaySpa($prop = null, $val = null)
    {
        return self::fillter("SchDaySpa", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function DefenceEstablishment($prop = null, $val = null)
    {
        return self::fillter("SchDefenceEstablishment", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function DeleteAction($prop = null, $val = null)
    {
        return self::fillter("SchDeleteAction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function DeliveryChargeSpecification($prop = null, $val = null)
    {
        return self::fillter("SchDeliveryChargeSpecification", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function DeliveryEvent($prop = null, $val = null)
    {
        return self::fillter("SchDeliveryEvent", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function DeliveryMethod($prop = null, $val = null)
    {
        return self::fillter("SchDeliveryMethod", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Demand($prop = null, $val = null)
    {
        return self::fillter("SchDemand", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Dentist($prop = null, $val = null)
    {
        return self::fillter("SchDentist", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function DepartAction($prop = null, $val = null)
    {
        return self::fillter("SchDepartAction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function DepartmentStore($prop = null, $val = null)
    {
        return self::fillter("SchDepartmentStore", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function DiagnosticLab($prop = null, $val = null)
    {
        return self::fillter("SchDiagnosticLab", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function DiagnosticProcedure($prop = null, $val = null)
    {
        return self::fillter("SchDiagnosticProcedure", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Diet($prop = null, $val = null)
    {
        return self::fillter("SchDiet", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function DietarySupplement($prop = null, $val = null)
    {
        return self::fillter("SchDietarySupplement", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function DisagreeAction($prop = null, $val = null)
    {
        return self::fillter("SchDisagreeAction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function DiscoverAction($prop = null, $val = null)
    {
        return self::fillter("SchDiscoverAction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function DislikeAction($prop = null, $val = null)
    {
        return self::fillter("SchDislikeAction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Distance($prop = null, $val = null)
    {
        return self::fillter("SchDistance", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function DonateAction($prop = null, $val = null)
    {
        return self::fillter("SchDonateAction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Doseedule($prop = null, $val = null)
    {
        return self::fillter("SchDoseedule", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function DownloadAction($prop = null, $val = null)
    {
        return self::fillter("SchDownloadAction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function DrawAction($prop = null, $val = null)
    {
        return self::fillter("SchDrawAction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function DrinkAction($prop = null, $val = null)
    {
        return self::fillter("SchDrinkAction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Drug($prop = null, $val = null)
    {
        return self::fillter("SchDrug", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function DrugClass($prop = null, $val = null)
    {
        return self::fillter("SchDrugClass", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function DrugCost($prop = null, $val = null)
    {
        return self::fillter("SchDrugCost", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function DrugCostCategory($prop = null, $val = null)
    {
        return self::fillter("SchDrugCostCategory", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function DrugLegalStatus($prop = null, $val = null)
    {
        return self::fillter("SchDrugLegalStatus", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function DrugPregnancyCategory($prop = null, $val = null)
    {
        return self::fillter("SchDrugPregnancyCategory", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function DrugPrescriptionStatus($prop = null, $val = null)
    {
        return self::fillter("SchDrugPrescriptionStatus", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function DrugStrength($prop = null, $val = null)
    {
        return self::fillter("SchDrugStrength", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function DryCleaningOrLaundry($prop = null, $val = null)
    {
        return self::fillter("SchDryCleaningOrLaundry", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Duration($prop = null, $val = null)
    {
        return self::fillter("SchDuration", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function EatAction($prop = null, $val = null)
    {
        return self::fillter("SchEatAction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function EducationEvent($prop = null, $val = null)
    {
        return self::fillter("SchEducationEvent", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function EducationalAudience($prop = null, $val = null)
    {
        return self::fillter("SchEducationalAudience", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function EducationalOrganization($prop = null, $val = null)
    {
        return self::fillter("SchEducationalOrganization", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Electrician($prop = null, $val = null)
    {
        return self::fillter("SchElectrician", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function ElectronicsStore($prop = null, $val = null)
    {
        return self::fillter("SchElectronicsStore", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Elementaryool($prop = null, $val = null)
    {
        return self::fillter("SchElementaryool", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function EmailMessage($prop = null, $val = null)
    {
        return self::fillter("SchEmailMessage", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Embassy($prop = null, $val = null)
    {
        return self::fillter("SchEmbassy", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function EmergencyService($prop = null, $val = null)
    {
        return self::fillter("SchEmergencyService", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function EmploymentAgency($prop = null, $val = null)
    {
        return self::fillter("SchEmploymentAgency", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function EndorseAction($prop = null, $val = null)
    {
        return self::fillter("SchEndorseAction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Energy($prop = null, $val = null)
    {
        return self::fillter("SchEnergy", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function EntertainmentBusiness($prop = null, $val = null)
    {
        return self::fillter("SchEntertainmentBusiness", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Enumeration($prop = null, $val = null)
    {
        return self::fillter("SchEnumeration", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Episode($prop = null, $val = null)
    {
        return self::fillter("SchEpisode", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Event($prop = null, $val = null)
    {
        return self::fillter("SchEvent", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function EventReservation($prop = null, $val = null)
    {
        return self::fillter("SchEventReservation", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function EventStatusType($prop = null, $val = null)
    {
        return self::fillter("SchEventStatusType", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function EventVenue($prop = null, $val = null)
    {
        return self::fillter("SchEventVenue", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function ExerciseAction($prop = null, $val = null)
    {
        return self::fillter("SchExerciseAction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function ExerciseGym($prop = null, $val = null)
    {
        return self::fillter("SchExerciseGym", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function ExercisePlan($prop = null, $val = null)
    {
        return self::fillter("SchExercisePlan", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function FastFoodRestaurant($prop = null, $val = null)
    {
        return self::fillter("SchFastFoodRestaurant", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Festival($prop = null, $val = null)
    {
        return self::fillter("SchFestival", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function FilmAction($prop = null, $val = null)
    {
        return self::fillter("SchFilmAction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function FinancialService($prop = null, $val = null)
    {
        return self::fillter("SchFinancialService", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function FindAction($prop = null, $val = null)
    {
        return self::fillter("SchFindAction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function FireStation($prop = null, $val = null)
    {
        return self::fillter("SchFireStation", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Flight($prop = null, $val = null)
    {
        return self::fillter("SchFlight", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function FlightReservation($prop = null, $val = null)
    {
        return self::fillter("SchFlightReservation", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Florist($prop = null, $val = null)
    {
        return self::fillter("SchFlorist", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function FollowAction($prop = null, $val = null)
    {
        return self::fillter("SchFollowAction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function FoodEstablishment($prop = null, $val = null)
    {
        return self::fillter("SchFoodEstablishment", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function FoodEstablishmentReservation($prop = null, $val = null)
    {
        return self::fillter("SchFoodEstablishmentReservation", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function FoodEvent($prop = null, $val = null)
    {
        return self::fillter("SchFoodEvent", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function FurnitureStore($prop = null, $val = null)
    {
        return self::fillter("SchFurnitureStore", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function GardenStore($prop = null, $val = null)
    {
        return self::fillter("SchGardenStore", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function GasStation($prop = null, $val = null)
    {
        return self::fillter("SchGasStation", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function GatedResidenceCommunity($prop = null, $val = null)
    {
        return self::fillter("SchGatedResidenceCommunity", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function GeneralContractor($prop = null, $val = null)
    {
        return self::fillter("SchGeneralContractor", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function GeoCoordinates($prop = null, $val = null)
    {
        return self::fillter("SchGeoCoordinates", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function GeoShape($prop = null, $val = null)
    {
        return self::fillter("SchGeoShape", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function GiveAction($prop = null, $val = null)
    {
        return self::fillter("SchGiveAction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function GolfCourse($prop = null, $val = null)
    {
        return self::fillter("SchGolfCourse", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function GovernmentBuilding($prop = null, $val = null)
    {
        return self::fillter("SchGovernmentBuilding", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function GovernmentOffice($prop = null, $val = null)
    {
        return self::fillter("SchGovernmentOffice", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function GovernmentOrganization($prop = null, $val = null)
    {
        return self::fillter("SchGovernmentOrganization", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function GovernmentPermit($prop = null, $val = null)
    {
        return self::fillter("SchGovernmentPermit", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function GovernmentService($prop = null, $val = null)
    {
        return self::fillter("SchGovernmentService", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function GroceryStore($prop = null, $val = null)
    {
        return self::fillter("SchGroceryStore", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function HVACBusiness($prop = null, $val = null)
    {
        return self::fillter("SchHVACBusiness", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function HairSalon($prop = null, $val = null)
    {
        return self::fillter("SchHairSalon", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function HardwareStore($prop = null, $val = null)
    {
        return self::fillter("SchHardwareStore", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function HealthAndBeautyBusiness($prop = null, $val = null)
    {
        return self::fillter("SchHealthAndBeautyBusiness", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function HealthClub($prop = null, $val = null)
    {
        return self::fillter("SchHealthClub", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Highool($prop = null, $val = null)
    {
        return self::fillter("SchHighool", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function HinduTemple($prop = null, $val = null)
    {
        return self::fillter("SchHinduTemple", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function HobbyShop($prop = null, $val = null)
    {
        return self::fillter("SchHobbyShop", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function HomeAndConstructionBusiness($prop = null, $val = null)
    {
        return self::fillter("SchHomeAndConstructionBusiness", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function HomeGoodsStore($prop = null, $val = null)
    {
        return self::fillter("SchHomeGoodsStore", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Hospital($prop = null, $val = null)
    {
        return self::fillter("SchHospital", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Hostel($prop = null, $val = null)
    {
        return self::fillter("SchHostel", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Hotel($prop = null, $val = null)
    {
        return self::fillter("SchHotel", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function HousePainter($prop = null, $val = null)
    {
        return self::fillter("SchHousePainter", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function IceCreamShop($prop = null, $val = null)
    {
        return self::fillter("SchIceCreamShop", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function IgnoreAction($prop = null, $val = null)
    {
        return self::fillter("SchIgnoreAction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function ImageGallery($prop = null, $val = null)
    {
        return self::fillter("SchImageGallery", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function ImageObject($prop = null, $val = null)
    {
        return self::fillter("SchImageObject", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function ImagingTest($prop = null, $val = null)
    {
        return self::fillter("SchImagingTest", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function IndividualProduct($prop = null, $val = null)
    {
        return self::fillter("SchIndividualProduct", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function InfectiousAgentClass($prop = null, $val = null)
    {
        return self::fillter("SchInfectiousAgentClass", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function InfectiousDisease($prop = null, $val = null)
    {
        return self::fillter("SchInfectiousDisease", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function InformAction($prop = null, $val = null)
    {
        return self::fillter("SchInformAction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function InsertAction($prop = null, $val = null)
    {
        return self::fillter("SchInsertAction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function InstallAction($prop = null, $val = null)
    {
        return self::fillter("SchInstallAction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function InsuranceAgency($prop = null, $val = null)
    {
        return self::fillter("SchInsuranceAgency", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Intangible($prop = null, $val = null)
    {
        return self::fillter("SchIntangible", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function InteractAction($prop = null, $val = null)
    {
        return self::fillter("SchInteractAction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function InternetCafe($prop = null, $val = null)
    {
        return self::fillter("SchInternetCafe", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function InviteAction($prop = null, $val = null)
    {
        return self::fillter("SchInviteAction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function ItemAvailability($prop = null, $val = null)
    {
        return self::fillter("SchItemAvailability", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function ItemList($prop = null, $val = null)
    {
        return self::fillter("SchItemList", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function ItemPage($prop = null, $val = null)
    {
        return self::fillter("SchItemPage", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function JewelryStore($prop = null, $val = null)
    {
        return self::fillter("SchJewelryStore", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function JobPosting($prop = null, $val = null)
    {
        return self::fillter("SchJobPosting", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function JoinAction($prop = null, $val = null)
    {
        return self::fillter("SchJoinAction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Joint($prop = null, $val = null)
    {
        return self::fillter("SchJoint", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function LakeBodyOfWater($prop = null, $val = null)
    {
        return self::fillter("SchLakeBodyOfWater", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Landform($prop = null, $val = null)
    {
        return self::fillter("SchLandform", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function LandmarksOrHistoricalBuildings($prop = null, $val = null)
    {
        return self::fillter("SchLandmarksOrHistoricalBuildings", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Language($prop = null, $val = null)
    {
        return self::fillter("SchLanguage", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function LeaveAction($prop = null, $val = null)
    {
        return self::fillter("SchLeaveAction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function LegislativeBuilding($prop = null, $val = null)
    {
        return self::fillter("SchLegislativeBuilding", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function LendAction($prop = null, $val = null)
    {
        return self::fillter("SchLendAction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Library($prop = null, $val = null)
    {
        return self::fillter("SchLibrary", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function LifestyleModification($prop = null, $val = null)
    {
        return self::fillter("SchLifestyleModification", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Ligament($prop = null, $val = null)
    {
        return self::fillter("SchLigament", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function LikeAction($prop = null, $val = null)
    {
        return self::fillter("SchLikeAction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function LiquorStore($prop = null, $val = null)
    {
        return self::fillter("SchLiquorStore", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function ListenAction($prop = null, $val = null)
    {
        return self::fillter("SchListenAction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function LiteraryEvent($prop = null, $val = null)
    {
        return self::fillter("SchLiteraryEvent", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function LocalBusiness($prop = null, $val = null)
    {
        return self::fillter("SchLocalBusiness", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function LockerDelivery($prop = null, $val = null)
    {
        return self::fillter("SchLockerDelivery", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Locksmith($prop = null, $val = null)
    {
        return self::fillter("SchLocksmith", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function LodgingBusiness($prop = null, $val = null)
    {
        return self::fillter("SchLodgingBusiness", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function LodgingReservation($prop = null, $val = null)
    {
        return self::fillter("SchLodgingReservation", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function LoseAction($prop = null, $val = null)
    {
        return self::fillter("SchLoseAction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function LymphaticVessel($prop = null, $val = null)
    {
        return self::fillter("SchLymphaticVessel", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Map($prop = null, $val = null)
    {
        return self::fillter("SchMap", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function MarryAction($prop = null, $val = null)
    {
        return self::fillter("SchMarryAction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Mass($prop = null, $val = null)
    {
        return self::fillter("SchMass", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function MaximumDoseedule($prop = null, $val = null)
    {
        return self::fillter("SchMaximumDoseedule", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function MediaObject($prop = null, $val = null)
    {
        return self::fillter("SchMediaObject", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function MedicalAudience($prop = null, $val = null)
    {
        return self::fillter("SchMedicalAudience", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function MedicalCause($prop = null, $val = null)
    {
        return self::fillter("SchMedicalCause", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function MedicalClinic($prop = null, $val = null)
    {
        return self::fillter("SchMedicalClinic", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function MedicalCode($prop = null, $val = null)
    {
        return self::fillter("SchMedicalCode", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function MedicalCondition($prop = null, $val = null)
    {
        return self::fillter("SchMedicalCondition", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function MedicalConditionStage($prop = null, $val = null)
    {
        return self::fillter("SchMedicalConditionStage", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function MedicalContraindication($prop = null, $val = null)
    {
        return self::fillter("SchMedicalContraindication", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function MedicalDevice($prop = null, $val = null)
    {
        return self::fillter("SchMedicalDevice", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function MedicalDevicePurpose($prop = null, $val = null)
    {
        return self::fillter("SchMedicalDevicePurpose", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function MedicalEntity($prop = null, $val = null)
    {
        return self::fillter("SchMedicalEntity", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function MedicalEnumeration($prop = null, $val = null)
    {
        return self::fillter("SchMedicalEnumeration", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function MedicalEvidenceLevel($prop = null, $val = null)
    {
        return self::fillter("SchMedicalEvidenceLevel", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function MedicalGuideline($prop = null, $val = null)
    {
        return self::fillter("SchMedicalGuideline", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function MedicalGuidelineContraindication($prop = null, $val = null)
    {
        return self::fillter("SchMedicalGuidelineContraindication", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function MedicalGuidelineRecommendation($prop = null, $val = null)
    {
        return self::fillter("SchMedicalGuidelineRecommendation", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function MedicalImagingTechnique($prop = null, $val = null)
    {
        return self::fillter("SchMedicalImagingTechnique", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function MedicalIndication($prop = null, $val = null)
    {
        return self::fillter("SchMedicalIndication", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function MedicalIntangible($prop = null, $val = null)
    {
        return self::fillter("SchMedicalIntangible", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function MedicalObservationalStudy($prop = null, $val = null)
    {
        return self::fillter("SchMedicalObservationalStudy", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function MedicalObservationalStudyDesign($prop = null, $val = null)
    {
        return self::fillter("SchMedicalObservationalStudyDesign", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function MedicalOrganization($prop = null, $val = null)
    {
        return self::fillter("SchMedicalOrganization", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function MedicalProcedure($prop = null, $val = null)
    {
        return self::fillter("SchMedicalProcedure", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function MedicalProcedureType($prop = null, $val = null)
    {
        return self::fillter("SchMedicalProcedureType", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function MedicalRiskCalculator($prop = null, $val = null)
    {
        return self::fillter("SchMedicalRiskCalculator", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function MedicalRiskEstimator($prop = null, $val = null)
    {
        return self::fillter("SchMedicalRiskEstimator", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function MedicalRiskFactor($prop = null, $val = null)
    {
        return self::fillter("SchMedicalRiskFactor", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function MedicalRiskScore($prop = null, $val = null)
    {
        return self::fillter("SchMedicalRiskScore", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function MedicalolarlyArticle($prop = null, $val = null)
    {
        return self::fillter("SchMedicalolarlyArticle", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function MedicalSign($prop = null, $val = null)
    {
        return self::fillter("SchMedicalSign", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function MedicalSignOrSymptom($prop = null, $val = null)
    {
        return self::fillter("SchMedicalSignOrSymptom", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function MedicalSpecialty($prop = null, $val = null)
    {
        return self::fillter("SchMedicalSpecialty", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function MedicalStudy($prop = null, $val = null)
    {
        return self::fillter("SchMedicalStudy", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function MedicalStudyStatus($prop = null, $val = null)
    {
        return self::fillter("SchMedicalStudyStatus", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function MedicalSymptom($prop = null, $val = null)
    {
        return self::fillter("SchMedicalSymptom", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function MedicalTest($prop = null, $val = null)
    {
        return self::fillter("SchMedicalTest", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function MedicalTestPanel($prop = null, $val = null)
    {
        return self::fillter("SchMedicalTestPanel", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function MedicalTherapy($prop = null, $val = null)
    {
        return self::fillter("SchMedicalTherapy", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function MedicalTrial($prop = null, $val = null)
    {
        return self::fillter("SchMedicalTrial", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function MedicalTrialDesign($prop = null, $val = null)
    {
        return self::fillter("SchMedicalTrialDesign", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function MedicalWebPage($prop = null, $val = null)
    {
        return self::fillter("SchMedicalWebPage", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function MedicineSystem($prop = null, $val = null)
    {
        return self::fillter("SchMedicineSystem", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function MensClothingStore($prop = null, $val = null)
    {
        return self::fillter("SchMensClothingStore", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Middleool($prop = null, $val = null)
    {
        return self::fillter("SchMiddleool", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function MobileApplication($prop = null, $val = null)
    {
        return self::fillter("SchMobileApplication", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function MobilePhoneStore($prop = null, $val = null)
    {
        return self::fillter("SchMobilePhoneStore", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Mosque($prop = null, $val = null)
    {
        return self::fillter("SchMosque", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Motel($prop = null, $val = null)
    {
        return self::fillter("SchMotel", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function MotorcycleDealer($prop = null, $val = null)
    {
        return self::fillter("SchMotorcycleDealer", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function MotorcycleRepair($prop = null, $val = null)
    {
        return self::fillter("SchMotorcycleRepair", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Mountain($prop = null, $val = null)
    {
        return self::fillter("SchMountain", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function MoveAction($prop = null, $val = null)
    {
        return self::fillter("SchMoveAction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Movie($prop = null, $val = null)
    {
        return self::fillter("SchMovie", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function MovieRentalStore($prop = null, $val = null)
    {
        return self::fillter("SchMovieRentalStore", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function MovieTheater($prop = null, $val = null)
    {
        return self::fillter("SchMovieTheater", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function MovingCompany($prop = null, $val = null)
    {
        return self::fillter("SchMovingCompany", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Muscle($prop = null, $val = null)
    {
        return self::fillter("SchMuscle", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Museum($prop = null, $val = null)
    {
        return self::fillter("SchMuseum", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function MusicAlbum($prop = null, $val = null)
    {
        return self::fillter("SchMusicAlbum", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function MusicEvent($prop = null, $val = null)
    {
        return self::fillter("SchMusicEvent", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function MusicGroup($prop = null, $val = null)
    {
        return self::fillter("SchMusicGroup", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function MusicPlaylist($prop = null, $val = null)
    {
        return self::fillter("SchMusicPlaylist", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function MusicRecording($prop = null, $val = null)
    {
        return self::fillter("SchMusicRecording", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function MusicStore($prop = null, $val = null)
    {
        return self::fillter("SchMusicStore", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function MusicVenue($prop = null, $val = null)
    {
        return self::fillter("SchMusicVenue", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function MusicVideoObject($prop = null, $val = null)
    {
        return self::fillter("SchMusicVideoObject", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function NGO($prop = null, $val = null)
    {
        return self::fillter("SchNGO", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function NailSalon($prop = null, $val = null)
    {
        return self::fillter("SchNailSalon", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Nerve($prop = null, $val = null)
    {
        return self::fillter("SchNerve", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function NewsArticle($prop = null, $val = null)
    {
        return self::fillter("SchNewsArticle", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function NightClub($prop = null, $val = null)
    {
        return self::fillter("SchNightClub", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Notary($prop = null, $val = null)
    {
        return self::fillter("SchNotary", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function NutritionInformation($prop = null, $val = null)
    {
        return self::fillter("SchNutritionInformation", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function OceanBodyOfWater($prop = null, $val = null)
    {
        return self::fillter("SchOceanBodyOfWater", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Offer($prop = null, $val = null)
    {
        return self::fillter("SchOffer", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function OfferItemCondition($prop = null, $val = null)
    {
        return self::fillter("SchOfferItemCondition", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function OfficeEquipmentStore($prop = null, $val = null)
    {
        return self::fillter("SchOfficeEquipmentStore", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function OnDemandEvent($prop = null, $val = null)
    {
        return self::fillter("SchOnDemandEvent", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function OnSitePickup($prop = null, $val = null)
    {
        return self::fillter("SchOnSitePickup", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function OpeningHoursSpecification($prop = null, $val = null)
    {
        return self::fillter("SchOpeningHoursSpecification", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Optician($prop = null, $val = null)
    {
        return self::fillter("SchOptician", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Order($prop = null, $val = null)
    {
        return self::fillter("SchOrder", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function OrderAction($prop = null, $val = null)
    {
        return self::fillter("SchOrderAction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function OrderStatus($prop = null, $val = null)
    {
        return self::fillter("SchOrderStatus", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Organization($prop = null, $val = null)
    {
        return self::fillter("SchOrganization", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function OrganizeAction($prop = null, $val = null)
    {
        return self::fillter("SchOrganizeAction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function OutletStore($prop = null, $val = null)
    {
        return self::fillter("SchOutletStore", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function OwnershipInfo($prop = null, $val = null)
    {
        return self::fillter("SchOwnershipInfo", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function PaintAction($prop = null, $val = null)
    {
        return self::fillter("SchPaintAction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Painting($prop = null, $val = null)
    {
        return self::fillter("SchPainting", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function PalliativeProcedure($prop = null, $val = null)
    {
        return self::fillter("SchPalliativeProcedure", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function ParcelDelivery($prop = null, $val = null)
    {
        return self::fillter("SchParcelDelivery", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function ParcelService($prop = null, $val = null)
    {
        return self::fillter("SchParcelService", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function ParentAudience($prop = null, $val = null)
    {
        return self::fillter("SchParentAudience", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Park($prop = null, $val = null)
    {
        return self::fillter("SchPark", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function ParkingFacility($prop = null, $val = null)
    {
        return self::fillter("SchParkingFacility", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function PathologyTest($prop = null, $val = null)
    {
        return self::fillter("SchPathologyTest", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function PawnShop($prop = null, $val = null)
    {
        return self::fillter("SchPawnShop", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function PayAction($prop = null, $val = null)
    {
        return self::fillter("SchPayAction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function PaymentChargeSpecification($prop = null, $val = null)
    {
        return self::fillter("SchPaymentChargeSpecification", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function PaymentMethod($prop = null, $val = null)
    {
        return self::fillter("SchPaymentMethod", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function PeopleAudience($prop = null, $val = null)
    {
        return self::fillter("SchPeopleAudience", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function PerformAction($prop = null, $val = null)
    {
        return self::fillter("SchPerformAction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function PerformingArtsTheater($prop = null, $val = null)
    {
        return self::fillter("SchPerformingArtsTheater", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function PerformingGroup($prop = null, $val = null)
    {
        return self::fillter("SchPerformingGroup", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Periodical($prop = null, $val = null)
    {
        return self::fillter("SchPeriodical", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Permit($prop = null, $val = null)
    {
        return self::fillter("SchPermit", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Person($prop = null, $val = null)
    {
        return self::fillter("SchPerson", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function PetStore($prop = null, $val = null)
    {
        return self::fillter("SchPetStore", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Pharmacy($prop = null, $val = null)
    {
        return self::fillter("SchPharmacy", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Photograph($prop = null, $val = null)
    {
        return self::fillter("SchPhotograph", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function PhotographAction($prop = null, $val = null)
    {
        return self::fillter("SchPhotographAction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function PhysicalActivity($prop = null, $val = null)
    {
        return self::fillter("SchPhysicalActivity", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function PhysicalActivityCategory($prop = null, $val = null)
    {
        return self::fillter("SchPhysicalActivityCategory", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function PhysicalExam($prop = null, $val = null)
    {
        return self::fillter("SchPhysicalExam", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function PhysicalTherapy($prop = null, $val = null)
    {
        return self::fillter("SchPhysicalTherapy", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Physician($prop = null, $val = null)
    {
        return self::fillter("SchPhysician", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Place($prop = null, $val = null)
    {
        return self::fillter("SchPlace", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function PlaceOfWorship($prop = null, $val = null)
    {
        return self::fillter("SchPlaceOfWorship", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function PlanAction($prop = null, $val = null)
    {
        return self::fillter("SchPlanAction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function PlayAction($prop = null, $val = null)
    {
        return self::fillter("SchPlayAction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Playground($prop = null, $val = null)
    {
        return self::fillter("SchPlayground", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Plumber($prop = null, $val = null)
    {
        return self::fillter("SchPlumber", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function PoliceStation($prop = null, $val = null)
    {
        return self::fillter("SchPoliceStation", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Pond($prop = null, $val = null)
    {
        return self::fillter("SchPond", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function PostOffice($prop = null, $val = null)
    {
        return self::fillter("SchPostOffice", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function PostalAddress($prop = null, $val = null)
    {
        return self::fillter("SchPostalAddress", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function PrependAction($prop = null, $val = null)
    {
        return self::fillter("SchPrependAction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Preschool($prop = null, $val = null)
    {
        return self::fillter("SchPreschool", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function PreventionIndication($prop = null, $val = null)
    {
        return self::fillter("SchPreventionIndication", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function PriceSpecification($prop = null, $val = null)
    {
        return self::fillter("SchPriceSpecification", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Product($prop = null, $val = null)
    {
        return self::fillter("SchProduct", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function ProductModel($prop = null, $val = null)
    {
        return self::fillter("SchProductModel", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function ProfessionalService($prop = null, $val = null)
    {
        return self::fillter("SchProfessionalService", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function ProfilePage($prop = null, $val = null)
    {
        return self::fillter("SchProfilePage", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function ProgramMembership($prop = null, $val = null)
    {
        return self::fillter("SchProgramMembership", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Property($prop = null, $val = null)
    {
        return self::fillter("SchProperty", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function PsychologicalTreatment($prop = null, $val = null)
    {
        return self::fillter("SchPsychologicalTreatment", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function PublicSwimmingPool($prop = null, $val = null)
    {
        return self::fillter("SchPublicSwimmingPool", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function PublicationEvent($prop = null, $val = null)
    {
        return self::fillter("SchPublicationEvent", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function PublicationIssue($prop = null, $val = null)
    {
        return self::fillter("SchPublicationIssue", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function PublicationVolume($prop = null, $val = null)
    {
        return self::fillter("SchPublicationVolume", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function QAPage($prop = null, $val = null)
    {
        return self::fillter("SchQAPage", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function QualitativeValue($prop = null, $val = null)
    {
        return self::fillter("SchQualitativeValue", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function QuantitativeValue($prop = null, $val = null)
    {
        return self::fillter("SchQuantitativeValue", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Quantity($prop = null, $val = null)
    {
        return self::fillter("SchQuantity", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Question($prop = null, $val = null)
    {
        return self::fillter("SchQuestion", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function QuoteAction($prop = null, $val = null)
    {
        return self::fillter("SchQuoteAction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function RVPark($prop = null, $val = null)
    {
        return self::fillter("SchRVPark", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function RadiationTherapy($prop = null, $val = null)
    {
        return self::fillter("SchRadiationTherapy", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function RadioClip($prop = null, $val = null)
    {
        return self::fillter("SchRadioClip", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function RadioEpisode($prop = null, $val = null)
    {
        return self::fillter("SchRadioEpisode", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function RadioSeason($prop = null, $val = null)
    {
        return self::fillter("SchRadioSeason", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function RadioSeries($prop = null, $val = null)
    {
        return self::fillter("SchRadioSeries", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function RadioStation($prop = null, $val = null)
    {
        return self::fillter("SchRadioStation", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Rating($prop = null, $val = null)
    {
        return self::fillter("SchRating", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function ReactAction($prop = null, $val = null)
    {
        return self::fillter("SchReactAction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function ReadAction($prop = null, $val = null)
    {
        return self::fillter("SchReadAction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function RealEstateAgent($prop = null, $val = null)
    {
        return self::fillter("SchRealEstateAgent", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function ReceiveAction($prop = null, $val = null)
    {
        return self::fillter("SchReceiveAction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Recipe($prop = null, $val = null)
    {
        return self::fillter("SchRecipe", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function RecommendedDoseedule($prop = null, $val = null)
    {
        return self::fillter("SchRecommendedDoseedule", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function RecyclingCenter($prop = null, $val = null)
    {
        return self::fillter("SchRecyclingCenter", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function RegisterAction($prop = null, $val = null)
    {
        return self::fillter("SchRegisterAction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function RejectAction($prop = null, $val = null)
    {
        return self::fillter("SchRejectAction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function RentAction($prop = null, $val = null)
    {
        return self::fillter("SchRentAction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function RentalCarReservation($prop = null, $val = null)
    {
        return self::fillter("SchRentalCarReservation", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function ReplaceAction($prop = null, $val = null)
    {
        return self::fillter("SchReplaceAction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function ReplyAction($prop = null, $val = null)
    {
        return self::fillter("SchReplyAction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function ReportedDoseedule($prop = null, $val = null)
    {
        return self::fillter("SchReportedDoseedule", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Reservation($prop = null, $val = null)
    {
        return self::fillter("SchReservation", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function ReservationPackage($prop = null, $val = null)
    {
        return self::fillter("SchReservationPackage", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function ReservationStatusType($prop = null, $val = null)
    {
        return self::fillter("SchReservationStatusType", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function ReserveAction($prop = null, $val = null)
    {
        return self::fillter("SchReserveAction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Reservoir($prop = null, $val = null)
    {
        return self::fillter("SchReservoir", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Residence($prop = null, $val = null)
    {
        return self::fillter("SchResidence", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Restaurant($prop = null, $val = null)
    {
        return self::fillter("SchRestaurant", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function ReturnAction($prop = null, $val = null)
    {
        return self::fillter("SchReturnAction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Review($prop = null, $val = null)
    {
        return self::fillter("SchReview", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function ReviewAction($prop = null, $val = null)
    {
        return self::fillter("SchReviewAction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function RiverBodyOfWater($prop = null, $val = null)
    {
        return self::fillter("SchRiverBodyOfWater", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function RoofingContractor($prop = null, $val = null)
    {
        return self::fillter("SchRoofingContractor", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function RsvpAction($prop = null, $val = null)
    {
        return self::fillter("SchRsvpAction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function SaleEvent($prop = null, $val = null)
    {
        return self::fillter("SchSaleEvent", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function eduleAction($prop = null, $val = null)
    {
        return self::fillter("ScheduleAction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function olarlyArticle($prop = null, $val = null)
    {
        return self::fillter("ScholarlyArticle", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function ool($prop = null, $val = null)
    {
        return self::fillter("School", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Sculpture($prop = null, $val = null)
    {
        return self::fillter("SchSculpture", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function SeaBodyOfWater($prop = null, $val = null)
    {
        return self::fillter("SchSeaBodyOfWater", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function SearchAction($prop = null, $val = null)
    {
        return self::fillter("SchSearchAction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function SearchResultsPage($prop = null, $val = null)
    {
        return self::fillter("SchSearchResultsPage", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Season($prop = null, $val = null)
    {
        return self::fillter("SchSeason", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Seat($prop = null, $val = null)
    {
        return self::fillter("SchSeat", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function SelfStorage($prop = null, $val = null)
    {
        return self::fillter("SchSelfStorage", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function SellAction($prop = null, $val = null)
    {
        return self::fillter("SchSellAction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function SendAction($prop = null, $val = null)
    {
        return self::fillter("SchSendAction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Series($prop = null, $val = null)
    {
        return self::fillter("SchSeries", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Service($prop = null, $val = null)
    {
        return self::fillter("SchService", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function ServiceChannel($prop = null, $val = null)
    {
        return self::fillter("SchServiceChannel", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function ShareAction($prop = null, $val = null)
    {
        return self::fillter("SchShareAction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function ShoeStore($prop = null, $val = null)
    {
        return self::fillter("SchShoeStore", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function ShoppingCenter($prop = null, $val = null)
    {
        return self::fillter("SchShoppingCenter", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function SingleFamilyResidence($prop = null, $val = null)
    {
        return self::fillter("SchSingleFamilyResidence", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function SiteNavigationElement($prop = null, $val = null)
    {
        return self::fillter("SchSiteNavigationElement", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function SkiResort($prop = null, $val = null)
    {
        return self::fillter("SchSkiResort", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function SocialEvent($prop = null, $val = null)
    {
        return self::fillter("SchSocialEvent", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function SoftwareApplication($prop = null, $val = null)
    {
        return self::fillter("SchSoftwareApplication", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function SomeProducts($prop = null, $val = null)
    {
        return self::fillter("SchSomeProducts", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Specialty($prop = null, $val = null)
    {
        return self::fillter("SchSpecialty", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function SportingGoodsStore($prop = null, $val = null)
    {
        return self::fillter("SchSportingGoodsStore", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function SportsActivityLocation($prop = null, $val = null)
    {
        return self::fillter("SchSportsActivityLocation", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function SportsClub($prop = null, $val = null)
    {
        return self::fillter("SchSportsClub", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function SportsEvent($prop = null, $val = null)
    {
        return self::fillter("SchSportsEvent", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function SportsTeam($prop = null, $val = null)
    {
        return self::fillter("SchSportsTeam", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function StadiumOrArena($prop = null, $val = null)
    {
        return self::fillter("SchStadiumOrArena", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function State($prop = null, $val = null)
    {
        return self::fillter("SchState", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Store($prop = null, $val = null)
    {
        return self::fillter("SchStore", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function StructuredValue($prop = null, $val = null)
    {
        return self::fillter("SchStructuredValue", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function SubscribeAction($prop = null, $val = null)
    {
        return self::fillter("SchSubscribeAction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function SubwayStation($prop = null, $val = null)
    {
        return self::fillter("SchSubwayStation", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function SuperficialAnatomy($prop = null, $val = null)
    {
        return self::fillter("SchSuperficialAnatomy", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Synagogue($prop = null, $val = null)
    {
        return self::fillter("SchSynagogue", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function TVClip($prop = null, $val = null)
    {
        return self::fillter("SchTVClip", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function TVEpisode($prop = null, $val = null)
    {
        return self::fillter("SchTVEpisode", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function TVSeason($prop = null, $val = null)
    {
        return self::fillter("SchTVSeason", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function TVSeries($prop = null, $val = null)
    {
        return self::fillter("SchTVSeries", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Table($prop = null, $val = null)
    {
        return self::fillter("SchTable", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function TakeAction($prop = null, $val = null)
    {
        return self::fillter("SchTakeAction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function TattooParlor($prop = null, $val = null)
    {
        return self::fillter("SchTattooParlor", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Taxi($prop = null, $val = null)
    {
        return self::fillter("SchTaxi", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function TaxiReservation($prop = null, $val = null)
    {
        return self::fillter("SchTaxiReservation", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function TaxiStand($prop = null, $val = null)
    {
        return self::fillter("SchTaxiStand", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function TechArticle($prop = null, $val = null)
    {
        return self::fillter("SchTechArticle", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function TelevisionStation($prop = null, $val = null)
    {
        return self::fillter("SchTelevisionStation", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function TennisComplex($prop = null, $val = null)
    {
        return self::fillter("SchTennisComplex", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function TheaterEvent($prop = null, $val = null)
    {
        return self::fillter("SchTheaterEvent", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function TheaterGroup($prop = null, $val = null)
    {
        return self::fillter("SchTheaterGroup", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function TherapeuticProcedure($prop = null, $val = null)
    {
        return self::fillter("SchTherapeuticProcedure", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Thing($prop = null, $val = null)
    {
        return self::fillter("SchThing", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Ticket($prop = null, $val = null)
    {
        return self::fillter("SchTicket", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function TieAction($prop = null, $val = null)
    {
        return self::fillter("SchTieAction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function TipAction($prop = null, $val = null)
    {
        return self::fillter("SchTipAction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function TireShop($prop = null, $val = null)
    {
        return self::fillter("SchTireShop", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function TouristAttraction($prop = null, $val = null)
    {
        return self::fillter("SchTouristAttraction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function TouristInformationCenter($prop = null, $val = null)
    {
        return self::fillter("SchTouristInformationCenter", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function ToyStore($prop = null, $val = null)
    {
        return self::fillter("SchToyStore", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function TrackAction($prop = null, $val = null)
    {
        return self::fillter("SchTrackAction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function TradeAction($prop = null, $val = null)
    {
        return self::fillter("SchTradeAction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function TrainReservation($prop = null, $val = null)
    {
        return self::fillter("SchTrainReservation", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function TrainStation($prop = null, $val = null)
    {
        return self::fillter("SchTrainStation", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function TrainTrip($prop = null, $val = null)
    {
        return self::fillter("SchTrainTrip", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function TransferAction($prop = null, $val = null)
    {
        return self::fillter("SchTransferAction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function TravelAction($prop = null, $val = null)
    {
        return self::fillter("SchTravelAction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function TravelAgency($prop = null, $val = null)
    {
        return self::fillter("SchTravelAgency", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function TreatmentIndication($prop = null, $val = null)
    {
        return self::fillter("SchTreatmentIndication", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function TypeAndQuantityNode($prop = null, $val = null)
    {
        return self::fillter("SchTypeAndQuantityNode", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function URL($prop = null, $val = null)
    {
        return self::fillter("SchURL", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function UnRegisterAction($prop = null, $val = null)
    {
        return self::fillter("SchUnRegisterAction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function UnitPriceSpecification($prop = null, $val = null)
    {
        return self::fillter("SchUnitPriceSpecification", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function UpdateAction($prop = null, $val = null)
    {
        return self::fillter("SchUpdateAction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function UseAction($prop = null, $val = null)
    {
        return self::fillter("SchUseAction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function UserBlocks($prop = null, $val = null)
    {
        return self::fillter("SchUserBlocks", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function UserCheckins($prop = null, $val = null)
    {
        return self::fillter("SchUserCheckins", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function UserComments($prop = null, $val = null)
    {
        return self::fillter("SchUserComments", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function UserDownloads($prop = null, $val = null)
    {
        return self::fillter("SchUserDownloads", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function UserInteraction($prop = null, $val = null)
    {
        return self::fillter("SchUserInteraction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function UserLikes($prop = null, $val = null)
    {
        return self::fillter("SchUserLikes", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function UserPageVisits($prop = null, $val = null)
    {
        return self::fillter("SchUserPageVisits", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function UserPlays($prop = null, $val = null)
    {
        return self::fillter("SchUserPlays", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function UserPlusOnes($prop = null, $val = null)
    {
        return self::fillter("SchUserPlusOnes", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function UserTweets($prop = null, $val = null)
    {
        return self::fillter("SchUserTweets", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Vehicle($prop = null, $val = null)
    {
        return self::fillter("SchVehicle", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Vein($prop = null, $val = null)
    {
        return self::fillter("SchVein", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Vessel($prop = null, $val = null)
    {
        return self::fillter("SchVessel", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function VeterinaryCare($prop = null, $val = null)
    {
        return self::fillter("SchVeterinaryCare", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function VideoGallery($prop = null, $val = null)
    {
        return self::fillter("SchVideoGallery", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function VideoObject($prop = null, $val = null)
    {
        return self::fillter("SchVideoObject", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function ViewAction($prop = null, $val = null)
    {
        return self::fillter("SchViewAction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function VisualArtsEvent($prop = null, $val = null)
    {
        return self::fillter("SchVisualArtsEvent", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Volcano($prop = null, $val = null)
    {
        return self::fillter("SchVolcano", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function VoteAction($prop = null, $val = null)
    {
        return self::fillter("SchVoteAction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function WPAdBlock($prop = null, $val = null)
    {
        return self::fillter("SchWPAdBlock", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function WPFooter($prop = null, $val = null)
    {
        return self::fillter("SchWPFooter", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function WPHeader($prop = null, $val = null)
    {
        return self::fillter("SchWPHeader", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function WPSideBar($prop = null, $val = null)
    {
        return self::fillter("SchWPSideBar", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function WantAction($prop = null, $val = null)
    {
        return self::fillter("SchWantAction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function WarrantyPromise($prop = null, $val = null)
    {
        return self::fillter("SchWarrantyPromise", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function WarrantyScope($prop = null, $val = null)
    {
        return self::fillter("SchWarrantyScope", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function WatchAction($prop = null, $val = null)
    {
        return self::fillter("SchWatchAction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Waterfall($prop = null, $val = null)
    {
        return self::fillter("SchWaterfall", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function WearAction($prop = null, $val = null)
    {
        return self::fillter("SchWearAction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function WebApplication($prop = null, $val = null)
    {
        return self::fillter("SchWebApplication", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function WebPage($prop = null, $val = null)
    {
        return self::fillter("SchWebPage", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function WebPageElement($prop = null, $val = null)
    {
        return self::fillter("SchWebPageElement", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function WholesaleStore($prop = null, $val = null)
    {
        return self::fillter("SchWholesaleStore", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function WinAction($prop = null, $val = null)
    {
        return self::fillter("SchWinAction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Winery($prop = null, $val = null)
    {
        return self::fillter("SchWinery", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function WriteAction($prop = null, $val = null)
    {
        return self::fillter("SchWriteAction", $prop, $val);
    }

    /**
     * @param null $prop
     * @param null $val
     * @return mixed
     */
    public static function Zoo($prop = null, $val = null)
    {
        return self::fillter("SchZoo", $prop, $val);
    }
}