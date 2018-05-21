<?php

/*

 * copyrights to abdullah shalaan 
 * 
 * 
 *  */

/**
 * Description of class tblcls
 *
 * @author abdullah
 */
class tblcls {

    public $file, $content, $table, $implements, $const, $extentd, $use,$key;

    //put your code here
    function tblcls($table = null, $else = []) {
        if ($table != null) {
            
            if(!$this->settable($table)){
             
                return FALSE;
            }
            
            if (is_array(@$else['use'])) {

                $this->use = $else['use'];
            }
            if(isset($else['extend'])) {

                $this->extentd = $else['extend'];
            }
                        if(isset($else['imp'])){
                
                $this->implements=$else['imp'];
            }
            
           // $this->setfile();

            $this->assemb();
            $this->put();
        }
    }

    public function content($param) {
        $this->content.=$param;
    }

    public function start() {
   
        $this->content("<?php \n");
    }

    public function end() {
        $this->content("\n}\n ?>");
    }

    public function setfile() {
        $this->file = HOMEDIR . "app/data/manual/" . $this->table . ".php";
    }

    public function settable($param) {
        
        
        
            if($key=sql::table_fields($param)){
        $this->table = $param;
            $this->key=$key[0];
            $this->const['key']=$this->key;
            $this->const['table']=  $this->table;
            $this->setfile();
            return TRUE;
            }else{
                $this->table = FALSE;
                return FALSE;
            }
    }

    public function start_class() {
        $this->content("class " . $this->table);
    }

    public function set_imp() {
        if ($this->implements != null) {
            $this->implements = " implements " . $this->implements;
        }
    }

    public function set_ext() {
        if ($this->extentd != null) {
            $this->content(" extends " . $this->extentd . " ");
        }
    }

    public function set_use() {
        if (is_array($this->use) and count($this->use > 0)) {

            $this->content(" \n use " . implode($this->use, ",") . " ;\n");
        }
    }

    public function set_construct() {
$key=sql::table_fields($this->table);
        $this->content("\n function ".$this->table."($" . "$key[0]){\n"
                . ""
                . "if($"."id!=null){\n");
        $this->content("\n$"."this->".$key[0]."=$".$key[0].";\n");

        $this->content("\n"
                . "}\n"
                 . "}\n"
                );
    }

    public function set_const() {
        if (count($this->const) > 0) {
            foreach ($this->const as $key => $value) {
                $this->content("\n CONST " . $key . "=\"" . $value . "\";\n");
            }
        }
    }

    public function assemb() {
        $this->content = null;
        //$this->setfile();
        $this->start();
        $this->start_class();
        $this->set_ext();
        $this->set_imp();
        $this->content(" {\n");
        $this->set_use();
      //
         $this->set_const();
        $this->set_pubs();
         //  when u remove this comment it will set constructor
      //  
      //  $this->set_construct();
        $this->end();
        
    }

    public function set_pubs() {
        $this->content("\n public " . sql::table_fields($this->table, "as") . ";\n");
    }

    public function put() {
        
        $f= file_put_contents($this->file, $this->content);
        chmod($this->file, 0777);
        return $f;
        
    }

}
