<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\OrderRepository")
 */
class Order
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Customer", inversedBy="orders")
     * @ORM\JoinColumn(nullable=false)
     */
    private $customer;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $reference;

    /**
     * @ORM\Column(type="boolean")
     */
    private $payed;

    /**
     * @ORM\Column(type="float")
     */
    private $total_paid;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $invoice_date;

    /**
     * @ORM\Column(type="integer")
     */
    private $total_products;

    /**
     * @ORM\Column(type="smallint")
     */
    private $status;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCustomer(): ?Customer
    {
        return $this->customer;
    }

    public function setCustomer(?Customer $customer): self
    {
        $this->customer = $customer;

        return $this;
    }

    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function setReference(string $reference): self
    {
        $this->reference = $reference;

        return $this;
    }

    public function getPayed(): ?bool
    {
        return $this->payed;
    }

    public function setPayed(bool $payed): self
    {
        $this->payed = $payed;

        return $this;
    }

    public function getTotalPaid(): ?float
    {
        return $this->total_paid;
    }

    public function setTotalPaid(float $total_paid): self
    {
        $this->total_paid = $total_paid;

        return $this;
    }

    public function getInvoiceDate(): ?\DateTimeInterface
    {
        return $this->invoice_date;
    }

    public function setInvoiceDate(?\DateTimeInterface $invoice_date): self
    {
        $this->invoice_date = $invoice_date;

        return $this;
    }

    public function getTotalProducts(): ?int
    {
        return $this->total_products;
    }

    public function setTotalProducts(int $total_products): self
    {
        $this->total_products = $total_products;

        return $this;
    }

    public function getStatus(): ?int
    {
        return $this->status;
    }

    public function setStatus(int $status): self
    {
        $this->status = $status;

        return $this;
    }
}
