<?php

namespace App\Http\Controllers;

use App\MainSystem\system;
use App\Models\TableModel;
use Illuminate\Http\Request;
use Symfony\Component\CssSelector\Node\FunctionNode;

class TableController extends Controller
{
    public $page_id ;
    public $page;
    public $system ;
    public $prefix;
    public $arrayJoin = [];
    function __construct(){
        $this->page_id = "10014";
        $this->page = "Table";
        $this->system = new system();
        $this->prefix = "table";
        $this->arrayJoin = ['10014'];
    }

    public function index(){
        $page_title = $this->page;
        $records = TableModel::get();
        return view('table.table',compact('page_title','records'));
    }
}
