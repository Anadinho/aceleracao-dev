<?php

interface IBuilder{
    public function setUpperIncluded(bool $option);
    public function setLowerIncluded(bool $option);
    public function setDigitIncluded(bool $option);
    public function setPunctuationIncluded(bool $option);
    public function setAmbiguousExcluded(bool $option);
    public function setMinUpper(int $qnt);
    public function setMinLower(int $qnt);
    public function setMinDigits(int $qnt);
    public function setMinPunctuation(int $qnt);
}

class PasswordGenerator implements IBuilder
{   
    public function __construct(){
        $this->reset();
    }

    public function reset(){
        $this->upperIncluded=false;
        $this->lowerIncluded=false;
        $this->digitIncluded=false;
        $this->punctuationIncluded=false;
        $this->ambiguousExcluded=false;
        $this->minUpper=0;
        $this->minLower=0;
        $this->minDigits=0;
        $this->minPunctuation=0;
    }

    public function setUpperIncluded(bool $option){
        $this->upperIncluded=$option;
    }

    public function setLowerIncluded(bool $option){
        $this->lowerIncluded=$option;
    }

    public function setDigitIncluded(bool $option){
        $this->digitIncluded=$option;
    }

    public function setPunctuationIncluded(bool $option){
        $this->punctuationIncluded=$option;
    }

    public function setAmbiguousExcluded(bool $option){
        $this->ambiguousExcluded=$option;
    }

    public function setMinUpper(int $qnt){
        $this->minUpper=$qnt;
    }

    public function setMinLower(int $qnt){
        $this->minLower=$qnt;
    }

    public function setMinDigits(int $qnt){
        $this->minDigits=$qnt;
    }

    public function setMinPunctuation(int $qnt){
        $this->minPunctuation=$qnt;
    }
}
?>