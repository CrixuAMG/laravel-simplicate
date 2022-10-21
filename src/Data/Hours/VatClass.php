<?php

namespace CrixuAMG\Simplicate\Data\Hours;

use CrixuAMG\Simplicate\Data\AbstractDataObject;
use Illuminate\Support\Arr;

class VatClass extends AbstractDataObject
{

    /**
     * @var string
     */
    protected $id;

    /**
     * @var string
     */
    protected $label;

    /**
     * @var int
     */
    protected $percentage;


    public function __construct(array $data)
    {
        $this->id = Arr::get($data, 'id');
        $this->label = Arr::get($data, 'label');
        $this->percentage = Arr::get($data, 'percentage', 0);
    }

    public function toArray(): array
    {
        return [
            'id'         => $this->getId(),
            'label'      => $this->getLabel(),
            'percentage' => $this->getPercentage(),
        ];
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function getPercentage(): int
    {
        return $this->percentage;
    }

}
