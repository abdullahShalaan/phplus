<?php

/*

 * copyrights to abdullah shalaan 
 * 
 * 
 *  */

/**
 * Description of class sql
 *
 * @author abdullah
 */
class sql{
	/*
         *  
	method take the query as array and  return full result
	Ex:
	$array[query]=" column from `table`";
	$array[type]="select";
	$array[nums]="yes";
	$result=mysql::result($array);
	$result contain array 
	1- $result[success] = yes if there is result
	2- 
	 */
    
   public static function getRows($table,$conditions = array()){
        global $connection,$last_query;
        
        $sql = 'SELECT ';
        $sql .= array_key_exists("select",$conditions)?$conditions['select']:'*';
        $sql .= ' FROM '.$table;
        if(array_key_exists("where",$conditions)){
            $sql .= ' WHERE ';
            $i = 0;
            foreach($conditions['where'] as $key => $value){
                $pre = ($i > 0)?' AND ':'';
                $sql .= $pre.$key." = '".$value."'";
                $i++;
            }
        }
        
        if(array_key_exists("search",$conditions)){
            $sql .= (strpos($sql, 'WHERE') !== false)?'':' WHERE ';
            $i = 0;
            foreach($conditions['search'] as $key => $value){
                $pre = ($i > 0)?' OR ':'';
                $sql .= $pre.$key." LIKE '%".$value."%'";
                $i++;
            }
        }
        
        if(array_key_exists("order_by",$conditions)){
            $sql .= ' ORDER BY '.$conditions['order_by']; 
        }
        
        if(array_key_exists("start",$conditions) && array_key_exists("limit",$conditions)){
            $sql .= ' LIMIT '.$conditions['start'].','.$conditions['limit']; 
        }elseif(!array_key_exists("start",$conditions) && array_key_exists("limit",$conditions)){
            $sql .= ' LIMIT '.$conditions['limit']; 
        }
        
        $result = mysqli_query($connection,$sql);
        
        if(array_key_exists("return_type",$conditions) && $conditions['return_type'] != 'all'){
            switch($conditions['return_type']){
                case 'count':
                    $data = $result->num_rows;
                    break;
                case 'single':
                    $data = $result->fetch_assoc();
                    break;
                default:
                    $data = '';
            }
        }else{
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $data[] = $row;
                }
            }
        }
        return !empty($data)?$data:false;
    }
    
	public static function result($entry) {
            
            global $connection,$last_query;
		//check if the entery is just query then creat the array contain the query
		if (!is_array($entry)) {
			$array['query']=$entry;
		}else {
			$array=$entry;
		}
		//set the Default type of the query as select
		if (@!$array['type']) {
			$array['type']="select";
		}
		//by default return the effected rows or the num rows of the query
		if (@!$array['num']) {
			$array['num']='yes';
		}
                if(SDBG=='yes')
                    $last_query=$array['query'];
                $_SESSION['last_query']=$last_query;
                
		$ex=mysqli_query($connection,$array['query']);
		
		if ($ex) {
			$result['success']=true;
		switch($array['type']){
			case "select":

				while ($abv=mysqli_fetch_assoc($ex)) {
					$r[]=$abv;
				}
				$result['result']=@$r;
				if(@$array['num']=='yes') {
					$result['nums']=mysqli_num_rows($ex);
				}
				
			break;
			
			case "update":
			case "delete":
				//if;
				if (@$array['num']=='yes') {
					$result['nums']=mysqli_affected_rows($connection);
                                 
				}
				
				break;
                                                        case 'insert':
 
                            $result['inserted_id']= mysqli_insert_id($connection);
                            break;
                        default :
                            
                            break;
			
			
		}
		
		}else{
                    //aboddd
			$result['success']=false;
                        check_m();
			return FALSE;
		}
$result['num']=count(@$result['result']);
		//print_rr($result);
		return $result;
	
	}

	public static function update_query($table,$array,$where){
		///hi
		
		$x=1;
			foreach ($array as $key=>$value){
			if(count($array)==$x){
				$comma=null;
				
			}else {$comma=",";}
			@$cols.="`$key`='".  fix_entry($value)."'".$comma;
			
			$x++;
		}
		$x=1;
			foreach ($where as $key=>$value){
			if(count($where)==$x){
				$comma=null;
				
			}else {$comma=" and ";}
			@$wh.="`$key`='".fix_entry($value)."'".$comma;
			
			$x++;
		}
		
		$query="update `$table` set $cols where $wh";
		return $query;
		///hi
	}
	public static function delete_query($table,$where){
			$x=1;
			foreach ($where as $key=>$value){
			if(count($where)==$x){
				$comma=null;
				
			}else {$comma=" and ";}
			@$wh.="`$key`='".fix_entry($value)."'".$comma;
			
			$x++;
		}
		$query="delete from $table where $wh";
		return $query;
	}

	public static function select_query($table,$array,$where,$ext=array()){
		$x=1;
		$wh;
                if(@!$ext['and']){
                    $and=" and ";
                }else{
                    
                    $and=" ".$ext['and']." ";
                }

		if($where != null){
                    foreach ($where as $key=>$value){
			if(count($where)==$x){
				$comma=null;
				
			}else {$comma=$and;}
                       
 if(!is_array($value)){
     
                     if(@$ext['like']==TRUE){
                    $value="%".$value."%";
                    $exp=" like ";
                    
                }else{
                    $exp="=";
                }
                
			@$wh.="`".$key."`".$exp."'".(($value))."'".$comma;
     
 }else{
     $f=1;
     
     foreach ($value as $valx) {
                   if(@$ext['like']==TRUE){
                    $valx="%".$valx."%";
                    $exp=" like ";
                    
                }else{
                    $exp="=";
                }
                
         	if(count($value)==$f){
                    
		if($comma==null){		
                    $comx=null;
                }  else {
                $comx=$and;    
                }	
			}else {
                            $comx=$and;
                        
                        }
                        
                        
              
                
			@$wh.="`".$key."`".$exp."'".(($valx))."'".$comx;
                        
         $f++;
         
         
     }
                    
     
 }

			$x++;
		}	
		}
		$x=1;
		if(is_array($array)){
			foreach ($array as $value){
			if(count($array)==$x){
				$comma=null;
				
			}else {$comma=",";}
			@$cols.="`".fix_entry($value)."`".$comma;
			
			$x++;
										}
		}else{
			@$cols="`".fix_entry($array)."`";
			
		}
		if(@$ext['order'] !=null){
			$ord=" order by $ext[order] ";
		}
		if(@$ext['limit']) {
			$lim="limit $ext[limit]";
		}
		if($where != null){
		@$query="select $cols from $table where $wh $ord $lim";
		}
		else
		@$query="select $cols from $table  $ord $lim";
		return $query;
	}
	
		public static function edit($table,$array,$where){
		$query['query']=sql::update_query($table, $array, $where);
		$query['type']="update";
		return sql::result($query);
	}
	//
	public static function delete($where,$table) {
	//	$where[tour_cat]=$id;
		
		$sel['query']=sql::delete_query($table,$where);
		$sel['type']="delete";
		$sel['nums']="yes";
		$exc=sql::result($sel);
		//$num=mysql_num_rows(mysql_query($q));
		//return $exc;
		if($exc['nums']==0){
			
		//sql::delete_query("tour_cats", $where);	
			return false;
		}else{
			return true;
		}
		
	}
/*
 * 
 * Old Work >>>>>>>>>>>>
 * 	public static function insert_query($table,$array){
			//echo"$x";
		$x=1;
		foreach ($array as $key=>$value){
			if(count($array)==$x){
				$comma=null;
				
			}else {$comma=",";}
			$cols.="`$key`".$comma;
			$vals.="'".mysql_real_escape_string($value)."'".$comma;
			$x++;
		}
		$query="insert into `$table` ($cols) values($vals);";
		return $query;
	
	}
	Old Work >>>>>>>>>>>>>>>>>>
	*/
	

		public static function insert($table,$array) {
                    global $connection,$last_query;
                    $cols=NULL;
                    $vals=NULL;
				$x=1;
		foreach ($array as $key=>$value){
			if(count($array)==$x){
				$comma=null;
				
			}else {$comma=",";}
			$cols.="`$key`".$comma;
			$vals.="'".fix_entry($value)."'".$comma;
			$x++;
		}
		$query="insert into `$table` ($cols) values($vals);";
if(SDBG=='yes')$last_query=$query;
                $_SESSION['last_query']=$last_query;

		//$query=sql::insert_query($table, $array);
		if(@mysqli_query($connection,$query)){
                    
			return array(TRUE, mysqli_insert_id($connection));
	
		}else {
                    check_m();
//aboddd2
                     return array(false);
                }
	}
	public static function select($array,$where,$table_name,$ext=array())
	{
	$r=sql::select_query($table_name,$array,$where,$ext);
	//echo $r;
	//print_rr($r);
	$query1['query']=$r;
	$query1['type']='select';
        return sql::result($query1);
	}
		

        
        public static function table_fields($table,$pa=null){
    
    $res=sql::result("show columns from ".$table);
    
    switch ($pa) {
        case null:
return @array_column($res['result'],'Field' );

            break;

        default:
            
            return "$".implode(array_column($res['result'],'Field' ),",$");
            
            break;
    }

    
}

public static function ctc($table) {
    return new tblcls($table,['use'=>['datatrait']]);
}
/*/
 * return the database tables as array
 */
public static function tables() {
    global $dbname;
    $res=sql::result('show tables');
    return array_column($res['result'], "Tables_in_".$dbname);
}
/*set all the database tables engine 
 * by default setengine() will set all the tables to innodb engine
 * setengine("myisam") and check this url
 * https://dev.mysql.com/doc/refman/5.7/en/storage-engines.html
 * i
 */
public static function set_engine($engine="InnoDB") {
                    $tables=sql::tables();
                foreach ($tables as $table) {
                    $q="ALTER TABLE `".$table."` ENGINE = ".$engine;
                    sql::result(['query'=>$q,'type'=>'else']);
                }
}
public static function recreate_full($param=FALSE) {
    if($param==TRUE){
        foreach (self::tables() as $value) {
            self::ctc($value);
        }
        
    }
}
static function result_update($query){
    return sql::result(['query'=>$query,'type'=>'update']);
}
        }
