<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EnterpriseRepository")
 */
class Enterprise
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Choice(
     *      choices = { "Monsieur", "Madame" }
     * )
     */

     private $genre; 

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     */
    private $lastNamePeople;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $firstNamePeople;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     */
    private $nameEnterprise;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     * @Assert\Email(
     *     message="veullez entrez une adresse mail valide"  
     * )
     */
    private $mail;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $numberWorking;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     */
    private $phoneGSM;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $phoneFixe;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     */
    private $jobPeople;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $instancePeople;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $writtenPV;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $problemPv;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGenre(): ?string
    {
        return $this->genre;
    }

    public function setGenre(string $genre): self
    {
        $this->genre = $genre; 

        return $this;
    }

    public function getLastNamePeople(): ?string
    {
        return $this->lastNamePeople;
    }

    public function setLastNamePeople(string $lastNamePeople): self
    {
        $this->lastNamePeople = $lastNamePeople;

        return $this;
    }

    public function getFirstNamePeople(): ?string
    {
        return $this->firstNamePeople;
    }

    public function setFirstNamePeople(?string $firstNamePeople): self
    {
        $this->firstNamePeople = $firstNamePeople;

        return $this;
    }

    public function getNameEnterprise(): ?string
    {
        return $this->nameEnterprise;
    }

    public function setNameEnterprise(string $nameEnterprise): self
    {
        $this->nameEnterprise = $nameEnterprise;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(string $mail): self
    {
        $this->mail = $mail;

        return $this;
    }

    public function getNumberWorking(): ?int
    {
        return $this->numberWorking;
    }

    public function setNumberWorking(?int $numberWorking): self
    {
        $this->numberWorking = $numberWorking;

        return $this;
    }

    public function getPhoneGSM(): ?string
    {
        return $this->phoneGSM;
    }

    public function setPhoneGSM(string $phoneGSM): self
    {
        $this->phoneGSM = $phoneGSM;

        return $this;
    }

    public function getPhoneFixe(): ?string
    {
        return $this->phoneFixe;
    }

    public function setPhoneFixe(?string $phoneFixe): self
    {
        $this->phoneFixe = $phoneFixe;

        return $this;
    }

    public function getJobPeople(): ?string
    {
        return $this->jobPeople;
    }

    public function setJobPeople(string $jobPeople): self
    {
        $this->jobPeople = $jobPeople;

        return $this;
    }

    public function getInstancePeople(): ?string
    {
        return $this->instancePeople;
    }

    public function setInstancePeople(?string $instancePeople): self
    {
        $this->instancePeople = $instancePeople;

        return $this;
    }

    public function getWrittenPV(): ?string
    {
        return $this->writtenPV;
    }

    public function setWrittenPV(?string $writtenPV): self
    {
        $this->writtenPV = $writtenPV;

        return $this;
    }

    public function getProblemPv(): ?string
    {
        return $this->problemPv;
    }

    public function setProblemPv(?string $problemPv): self
    {
        $this->problemPv = $problemPv;

        return $this;
    }
}
