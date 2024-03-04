<?php

namespace App\Http\Controllers;

use Exception;
use App\MainSystem\system;
use App\Models\TableModel;
use Illuminate\Http\Request;
use App\Models\TableFieldModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
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
    public function build(Request $request){
        DB::beginTransaction();
        try{
            $data = $request->all();
            $decode = $data['code'];
            $record = TableModel::where('id',$decode)->first();
            // dd($record);
            $exist = TableFieldModel::where('table_name',$record->table_name)->first();
            $column = DB::getSchemaBuilder()->getColumnListing($record->table_name);
            $i = 1;
            if($exist){
                TableFieldModel::where('table_name',$record->table_name)->delete();
                foreach($column as $col){
                    $new = new TableFieldModel();
                    $new->table_id = $record->table_id;
                    $new->table_name = $record->table_name;
                    
                    $new->filed_name = $col;
                    $new->field_id = $record->table_id + $i;
                    $new->on_validate = 'no';
                    $new->max_lenght = 255;
                    $new->hide = 'no';
                    if($col == 'code')   $new->on_validate  = 'yes';
                    if(in_array($col,['created_at','updated_at','deleted_at','id'])) $new->hide = 'yes';
                    $new->email = '';
                    $new->list_order = $i;
                    $i +=1;
                    $new->field_type = 'text';
                    $new->save();
                    DB::commit();
                }

            }else{
                foreach($column as $col){
                    $new = new TableFieldModel();
                    $new->table_id = $record->table_id;
                    $new->table_name = $record->table_name;
                    $new->filed_name = $col;
                    $new->field_id = $record->table_id + $i;
                    $new->on_validate = 'no';
                    $new->max_lenght = 255;
                    $new->hide = 'no';
                    if($col == 'code')   $new->on_validate  = 'yes';
                    if(in_array($col,['created_at','updated_at','deleted_at','id'])) $new->hide = 'yes';
                    $new->email = '';
                    $new->list_order = $i;
                    $new->field_type = 'text';
                    $i +=1;
                    $new->save();
                    DB::commit();
                }
            }
            $records = TableFieldModel::where('table_name',$record->table_name)->paginate(10);
            $view ='';
            return response()->json(['status'=>'success','msg' =>'Table Build Successfuly','view'=>$view]);
        }catch(Exception $ex){
            DB::rollBack();
            return response()->json(['status' => 'warning' , 'msg' => $ex->getMessage()]);
        }
    }
}
