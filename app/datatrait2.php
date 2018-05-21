<?php
/**
 * Description of data
 *
 * @author abdullah
 */
trait datatrait2{
   //put your code here
    function __construct($param=NULL) {
        $x=self::key;
        
        if ($param!=NULL and is_numeric($param)) {
            $this->set_by_key($param);
//            $this->$x=$param; 
//           $this->read_row();
            //echo 'im here';
        }else{
            $this->$x=0;
           //  echo 'im 0';
        }
//        $main_method= self::mainMethod;
//       if (function_exists($this->$main_method())){
//        $this->$main_method();
//        echo "exist";
//        exit;
//       }
    }
    public function create() {
//        foreach ($this as $key => $value) {
//            $array["$key"]=$value;
//        }
        
$x=self::key;
if(array_key_exists('tKey',(array)$this))
$this->tKey=lang_tkey::add();
 $up1= (array)$this;     // exit;
foreach ($up1 as $key => $value) {
    if($value=='' or $value==null){
        continue;
    }
    $up[$key]=$value;
}

//echo $this->tKey;
//exit;
     //   print_r($this);
        $values=$up ;
     //   array_pop($values);
       // print_rr($values);
        $result=sql::insert(self::table,$values );
        $this->$x=$result[1];
       return $result;
       // return $array;
    }

    public function delete() {
        return sql::delete($this->where_array(), self::table);
    }
//get multi rows data filtered by arrat filter 
// example read_multi_filter(["type"=>$id])
    public function read_multi_filter($filter=[],$cols=[]) {
        if(count($cols)>0){
    $sel=$cols;
        }else{
            $sel=$this->all_cols();
        }
    $array= sql::select($sel,$filter, self::table);
    return $array['result'];
    }
    // get multi data for one category as array  just read_by_category(the id of the cat);
    public function read_by_category($id) {
        return $this->read_multi_filter(["category"=>$id]);
    }
    // get multi data for one type as array  just read_by_type(the id of the type);

//    public function read_by_type($id) {
//        return $this->read_multi_filter(["type"=>$id]);
//    }
    // get multi data for one owner as array  just read_by_owner(the id of the owner);

//    public function read_by_owner($id) {
//        return $this->read_multi_filter(["owner"=>$id]);
//    }
    
    public function read_multi_search($words,$cols="name") {
        $words=  explode(" ", $words);
        $where=[];
        if(is_array($cols)){
            foreach ($cols as $col) {
                foreach ($words as $word) {
                    $where[$col]=$word;
                }
            }
            
            
        }else{
                  foreach ($words as $word) {
                    $where[$cols]=$word;
                }
            
        }
        return $words;
        
    }

//get the data to the object by key
    //example ::::
    function set_by_key($param) {
        $key= self::key;
              $this->$key = $param;
            $this->read_row();
        
    }
    //get the data to the object by field name from the table
    //example ::::
    function read_by_field($field_name) {
     $u2=   $this->read_multi_filter([$field_name=> $this->$field_name]);
                if (count($u2) == 1) {
            $this->set_by_key($u2[0][self::key]);
        
            return TRUE;
        } else {
            return FALSE;
        }
    }
    public function read_row() {
       $array= sql::select($this->all_cols(),$this->where_array(), self::table);
        //print_r($this->where_array());
     
       // print_rr($array);
        
        if(@$array['num']==0){
            
            return FALSE;
        }  else {
        
        foreach ($array['result'][0] as $key => $value) {
//            if (is_array($value)) {
//                $value = convertToObject($value);
//            }
            $this->$key = $value;
        }
            
            return $this->as_array();    
        }

        
    }

    public function update() {
$up1=$this->as_array();
foreach ($up1 as $key => $value) {
    if($value=='' or $value==null){
        continue;
    }
    $up[$key]=$value;
}
        return sql::edit(self::table, $up, $this->where_array());
    }
    


        
    
    public function all_cols() {
        //print_rr($this);
        return array_keys((array)  $this);
    }
    public function where_array() {
        $col=self::key;
        
        $cols=$this->all_cols();
        //print_rr($cols);
        $id=$cols[0];
        $x=$this->$col;
   
        return [$col=> $x ]; 
    }
    public function as_array() {
        return (array)$this;
        
    }

    
}
