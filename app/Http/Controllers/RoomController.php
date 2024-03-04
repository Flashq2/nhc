<?php

namespace App\Http\Controllers;

use App\MainSystem\system;
use App\Models\RoomModel;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public $page_id ;
    public $page;
    public $system ;
    public $prefix;
    public $arrayJoin = [];
    function __construct(){
        $this->page_id = "1001";
        $this->page = "Table";
        $this->system = new system();
        $this->prefix = "table";
        $this->arrayJoin = ['10014'];
    }

    public function index(){
        $page_title = $this->page;
        $col_record = $this->system->getField($this->page_id); 
        $records = RoomModel::get();
        return view('room.room',compact('page_title','records','col_record'));
    }
 
}
