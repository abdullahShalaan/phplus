<?php

/*

 * copyrights to abdullah shalaan 
 * 
 * 
 *  */

/**
 * Description of class types
 * class types contains the types of the data in multi lanh
 * to change
 * 
 * 
 * @author abdullah
 */
class types {

    //put your code here
    private static $types = array(
        'category',
        'video course',
        'video',
        'course unit3',
        'book',
        'article',
        'question',
        'certification',
        'software',
        'projects',
        'jobs',
        'freelancer',
        'training center',
        'trainer'
    );

//return types list if no parameter 
// and return type name if paramter is number of the type
//ex get()   , get(1) it return the name of the gaterory of id 1
    public static function get($case = "all") {
        // selection for language
        // if lang change 
        // change the value of the array types
        //
        
        
        switch ($case) {
            case "all":
                return self::$types;

                break;

            default:

                return self::$types[$case];
                break;
        }
    }

//    public static function change_category_lang($lng="ar"){
//        switch ($lng) {
//            case "ar":
//
//
//                break;
//
//            default:
//                break;
//        }
//        
//        
//        
//        
//    }
}
