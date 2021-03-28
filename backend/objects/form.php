<?php
class Form{
    private $db;
    private $table_name = "form-data";
    public $id;
    public $gender;
    public $name;
    public $bday;
    public $bmonth;
    public $byear;
    public $color1;
    public $color2;
    public $color3;
    public $color4;
    public $comment;
    public function __construct($db, $form_model){
        $this->db = $db;
        $this->form_model = $form_model;
    }
    public function prepareData($data){
        $this->gender = !isset($data['gender']) ? null : $data['gender'];
        $this->name = !isset($data['name']) ? null : $data['name'];
        $this->bday = !isset($data['day']) ? null : $data['day'];
        $this->bmonth = !isset($data['month']) ? null : $data['month'];
        $this->byear = !isset($data['year']) ? null : $data['year'];
        $this->color1 = !isset($data['color1']) ? false : true;
        $this->color2 = !isset($data['color2']) ? false : true;
        $this->color3 = !isset($data['color3']) ? false : true;
        $this->color4 = !isset($data['color4']) ? false : true;
        $this->comment = !isset($data['comment']) ? null : $data['comment'];
    }
    public function create(){
        $query =
            "INSERT INTO
                `" . $this->table_name . "`
                (`gender`, `name`, `bday`, `bmonth`, `byear`, `color1`, `color2`, `color3`, `color4`, `comment`)
            VALUES 
                (:gender, :name, :bday, :bmonth, :byear, :color1, :color2, :color3, :color4, :comment)";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(":gender", $this->gender);
        $stmt->bindParam(":name", $this->name);
        $stmt->bindParam(":bday", $this->bday);
        $stmt->bindParam(":bmonth", $this->bmonth);
        $stmt->bindParam(":byear", $this->byear);
        $stmt->bindParam(":color1", $this->color1);
        $stmt->bindParam(":color2", $this->color2);
        $stmt->bindParam(":color3", $this->color3);
        $stmt->bindParam(":color4", $this->color4);
        $stmt->bindParam(":comment", $this->comment);
        if($stmt->execute()){
            return true;
        }else{
            return false;
        }
    }
}
?>