<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author abdullah
 */
interface dataInterface {
    //put your code here
    //function __construct();
    public function create();
    public function read_row();
    public function read_multi_filter($filter);
    public function read_multi_search($words,$cols="name");
    
    
    public function update();
    public function delete();
    
    
}
