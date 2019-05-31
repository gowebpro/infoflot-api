<?php 

namespace Gowebpro\Infoflot;

class InfoflotApi extends BaseAPI
{

    public function __construct($access_token = null)
    {
        $this->access_token = $access_token;
    }

    protected function sendAuthenticatedRequest($url, $options=[])
    {
        $this->checkToken();
        return self::sendRequest($url, $this->access_token, $options);
    }

    protected function checkToken()
    {
        if ($this->access_token == NULL) {
            throw new \Exception('Missing access token for Infoflot');
        }
    }


    /**
     * Get Ships list
     * info: http://api.infoflot.com/JSON/Help/Ships
     *
     */
    public function ships()
    {
        return $this->sendAuthenticatedRequest('Ships');
    }

    /**
     * Get Ships schemes
     * info: http://api.infoflot.com/JSON/Help/ShipsSchemes
     *
     */
    public function shipsSchemes()
    {
        return $this->sendAuthenticatedRequest('ShipsSchemes');
    }

    /**
     * Get Ships Description
     * info: http://api.infoflot.com/JSON/Help/ShipsDescription
     *
     * @param (int|string) $shipId
     */
    public function shipsDescription($shipId)
    {
        return $this->sendAuthenticatedRequest(sprintf('ShipsDescription/%s', $shipId));
    }

    /**
     * Get Ships Photo
     * info: http://api.infoflot.com/JSON/Help/ShipsPhoto
     *
     * @param (int|string) $shipId
     */
    public function shipsPhoto($shipId)
    {
        return $this->sendAuthenticatedRequest(sprintf('ShipsPhoto/%s', $shipId));
    }

    /**
     * Get Ships Special
     * info: http://api.infoflot.com/JSON/Help/ShipsSpecial
     *
     * @param (int|string) $shipId
     */
    public function shipsSpecial($shipId)
    {
        return $this->sendAuthenticatedRequest(sprintf('ShipsSpecial/%s', $shipId));
    }

    /**
     * Get Ships Services
     * info: http://api.infoflot.com/JSON/Help/ShipsServices
     *
     * @param (int|string) $shipId
     */
    public function shipsServices($shipId)
    {
        return $this->sendAuthenticatedRequest(sprintf('ShipsServices/%s', $shipId));
    }

    /**
     * Get Ships Description
     * info: http://api.infoflot.com/JSON/Help/ShipsPriceInclude
     *
     * @param (int|string) $shipId
     */
    public function shipsPriceInclude($shipId)
    {
        return $this->sendAuthenticatedRequest(sprintf('ShipsPriceInclude/%s', $shipId));
    }

    /**
     * Get Ships Images
     * info: http://api.infoflot.com/JSON/Help/ShipsImages
     *
     */
    public function shipsImages()
    {
        return $this->sendAuthenticatedRequest('ShipsImages');
    }

    /**
     * Get Ship Cabins
     * info: http://api.infoflot.com/JSON/Help/Cabins
     *
     * @param (int|string) $shipId
     */
    public function cabins($shipId)
    {
        return $this->sendAuthenticatedRequest(sprintf('Cabins/%s', $shipId));
    }

    /**
     * Get Ship Cabins Status
     * info: http://api.infoflot.com/JSON/Help/CabinsStatus
     *
     * @param (int|string) $shipId
     * @param (int|string) $tourId
     */
    public function cabinsStatus($shipId, $tourId)
    {
        return $this->sendAuthenticatedRequest(sprintf('CabinsStatus/%s/%s', $shipId, $tourId));
    }

    /**
     * Get Ship Cabins Photo
     * info: http://api.infoflot.com/JSON/Help/CabinsPhoto
     *
     * @param (int|string) $shipId
     * @param (int|string) $cabinName
     */
    public function cabinsPhoto($shipId, $cabinName)
    {
        return $this->sendAuthenticatedRequest(sprintf('CabinsPhoto/%s/%s', $shipId, $cabinName));
    }
    

    /**
     * Get Ship Excursions
     * info: http://api.infoflot.com/JSON/Help/Excursions
     *
     * @param (int|string) $shipId
     * @param (int|string) $tourId
     */
    public function excursions($shipId, $tourId)
    {
        return $this->sendAuthenticatedRequest(sprintf('Excursions/%s/%s', $shipId, $tourId));
    }

    /**
     * Get Ship Tours
     * info: http://api.infoflot.com/JSON/Help/Tours
     *
     * @param (int|string) $shipId
     */
    public function tours($shipId)
    {
        return $this->sendAuthenticatedRequest(sprintf('Tours/%s', $shipId));
    }


    /**
     * Get Routes
     * info: http://api.infoflot.com/JSON/Help/Routes
     *
     * @param (int|string) $shipId
     */
    public function routes($shipId)
    {
        return $this->sendAuthenticatedRequest('Routes');
    }

    /**
     * Get Cities
     * info: http://api.infoflot.com/JSON/Help/Cities
     *
     */
    public function cities()
    {
        return $this->sendAuthenticatedRequest('Cities');
    }

}
