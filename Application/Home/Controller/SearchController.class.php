<?php
namespace Home\Controller;
class SearchController extends CommonController{
    public function index(){
        $this->display('search');
    }
    public function getResult(){
        $this->display('searchResult');
    }
}