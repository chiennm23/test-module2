<?php


namespace App\Model;


class Products
{
    protected $id;
    protected $name;
    protected $type;
    protected $spice;
    protected $amount;
    protected $date;
    protected $description;

    public function __construct($id, $name, $type, $spice, $amount, $date, $description)
    {
        $this->id = $id;
        $this->name = $name;
        $this->type = $type;
        $this->spice = $spice;
        $this->amount = $amount;
        $this->date = $date;
        $this->description = $description;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return mixed
     */
    public function getSpice()
    {
        return $this->spice;
    }

    /**
     * @return mixed
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

}