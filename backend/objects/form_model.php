<?php
class FormModel{
    private $id;
    private $gender;
    private $name;
    private $bday;
    private $bmonth;
    private $byear;
    private $color1;
    private $color2;
    private $color3;
    private $color4;
    private $comment;
    public function setId($id){
        $this->id = $id;
    }
    public function getId(){
        return $this->id;
    }
    public function setGender($gender){
        $this->gender = $gender;
    }
    public function getGender(){
        return $this->gender;
    }
    public function setName($name){
        $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }
    public function setBday($bday){
        $this->bday = $bday;
    }
    public function getBday(){
        return $this->bday;
    }
    public function setBmonth($bmonth){
        $this->bmonth = $bmonth;
    }
    public function getBmonth(){
        return $this->bmonth;
    }
    public function setByear($byear){
        $this->byear = $byear;
    }
    public function getByear(){
        return $this->byear;
    }
    public function setColor1($color1){
        $this->color1 = $color1;
    }
    public function getColor1(){
        return $this->color1;
    }
    public function setColor2($color2){
        $this->color2 = $color2;
    }
    public function getColor2(){
        return $this->color2;
    }
    public function setColor3($color3){
        $this->color3 = $color3;
    }
    public function getColor3(){
        return $this->color3;
    }
    public function setColor4($color4){
        $this->color4 = $color4;
    }
    public function getColor4(){
        return $this->color4;
    }
    public function setComment($comment){
        $this->comment = $comment;
    }
    public function getComment(){
        return $this->comment;
    }
}
?>