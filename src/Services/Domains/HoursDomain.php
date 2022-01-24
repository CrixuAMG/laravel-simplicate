<?php

namespace CrixuAMG\Simplicate\Services\Domains;

use CrixuAMG\Simplicate\Contracts\Data\SimplicateResponseInterface;
use CrixuAMG\Simplicate\Contracts\Services\Domains\HoursDomainInterface;
use CrixuAMG\Simplicate\Data\Responses\HoursListResponse;
use CrixuAMG\Simplicate\Data\Responses\HoursSingleResponse;
use CrixuAMG\Simplicate\Data\Responses\HoursTypeListResponse;
use CrixuAMG\Simplicate\Data\Responses\HoursTypeSingleResponse;

class HoursDomain extends AbstractDomain implements HoursDomainInterface
{
    /**
     * @return string
     */
    public function path(): string
    {
        return 'hours';
    }

    /**
     * @return SimplicateResponseInterface|HoursListResponse
     */
    public function allHours(): HoursListResponse
    {
        return $this->client->responseClass(HoursListResponse::class)
            ->get($this->prefixPath('hours'));
    }

    /**
     * @param  string  $id
     * @return SimplicateResponseInterface|HoursSingleResponse
     */
    public function hours(string $id): HoursSingleResponse
    {
        return $this->client->responseClass(HoursSingleResponse::class)
            ->get($this->prefixPath('hours/'.$id));
    }

    /**
     * @return SimplicateResponseInterface|HoursTypeListResponse
     */
    public function allHoursTypes(): HoursTypeListResponse
    {
        return $this->client->responseClass(HoursTypeListResponse::class)
            ->get($this->prefixPath('hourstype'));
    }

    /**
     * @param  string  $id
     * @return SimplicateResponseInterface|HoursTypeSingleResponse
     */
    public function hoursType(string $id): HoursTypeSingleResponse
    {
        return $this->client->responseClass(HoursTypeSingleResponse::class)
            ->get($this->prefixPath('hourstype/'.$id));
    }
}
