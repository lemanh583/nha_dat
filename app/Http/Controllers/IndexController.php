<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\districts;
use App\villages;
use App\maps;
use App\detail;
use Auth;
use App\User;
use App\images;

class IndexController extends Controller
{
    public function index()
    {
        $listDetail = DB::table('provinces')
                            ->join('districts','provinces.id_pro','=','districts.id_pro')
                            ->join('villages','districts.id_dis','=','villages.id_dis')
                            ->join('maps','villages.id_vil','=','maps.id_vil')
                            ->join('details','maps.id_map','=','details.id_map')
                            ->join('types','details.id_type','=','types.id_type')
                            ->join('categories','details.id_category','=','categories.id_category')
                            ->join('images','details.id_detail','=','images.id_detail')
                            ->join('users','details.id','=','users.id')
                            ->select('users.name as nameUser',
                                        'categories.name as nameCategory',
                                        'types.name as nameType',
                                        'details.title as titledt',
                                        'details.area',
                                        'details.amount',
                                        'provinces.name as tinh',
                                        'districts.name as huyen',
                                        'villages.name as xa',
                                        'images.url',
                                        'details.id_detail',
                                        'details.created_at'
                                    )
                            ->groupBy('details.id_detail')        
                            ->paginate(10);
        
        $categories = DB::table('categories')->get();
                            // dd($listDetail);
        return view('template.index',compact('listDetail','categories'));
    }


    public function searchIndex(Request $request)
    {
        $title = $request->input('search');

        $listDetail = DB::table('provinces')
                            ->join('districts','provinces.id_pro','=','districts.id_pro')
                            ->join('villages','districts.id_dis','=','villages.id_dis')
                            ->join('maps','villages.id_vil','=','maps.id_vil')
                            ->join('details','maps.id_map','=','details.id_map')
                            ->join('types','details.id_type','=','types.id_type')
                            ->join('categories','details.id_category','=','categories.id_category')
                            ->join('images','details.id_detail','=','images.id_detail')
                            ->join('users','details.id','=','users.id')
                            ->where('details.title','LIKE', '%'.$title.'%')
                            ->select('users.name as nameUser',
                                        'categories.name as nameCategory',
                                        'types.name as nameType',
                                        'details.title as titledt',
                                        'details.area',
                                        'details.amount',
                                        'provinces.name as tinh',
                                        'districts.name as huyen',
                                        'villages.name as xa',
                                        'images.url',
                                        'details.id_detail'
                                    )
                            ->groupBy('details.id_detail')        
                            ->paginate(10);
        // dd($listDetail);
        return view('template.index',compact('listDetail'));
    }

    public function showAddDetailUser(){
        $provinces = DB::table('provinces')->get();
        $types = DB::table('types')->get();
        $categories = DB::table('categories')->get();
        // dd($categories);
        return view('template.formAddDetailUser',compact('provinces','types','categories'));
    }

    public function ajaxIndex(Request $request){
        $req = $request->get('name');
        $districts = districts::all()->where('id_pro','=',$req);
        // $villages = villages::all()->where('id_dis','=',$districts->id_dis);
        return response()->json(compact('districts'), 200);
    }

    public function ajaxVilagesIndex(Request $request){
        $req = $request->get('name');
        $villages = villages::all()->where('id_dis','=',$req);
        return response()->json(compact('villages'), 200);
    }
    

    public function addDetailIndex(Request $request){
        // dd($request->all());
        $title = $request->input('tieu_de');
        $type = $request->input('type');
        $category = $request->input('category');
        $village = $request->input('village');
        $area = $request->input('area');
        $amount = $request->input('amount');
        $mota = $request->input('mota');
        $toa_do = $request->input('toa_do');
        $file = $request->file('file');

        //thêm bảng maps
        $map = new maps;
        $map->coordinates = $toa_do;
        $map->id_vil = $village;
        $map->save();
        
        //lấy idmap mới thêm
        $id_map = DB::table('maps')->select(DB::raw('MAX(id_map) as idMax'))->get();
        // dd($id_map);
        // dd()

        //thêm bảng detail
        $detail = new detail;
        $detail->title = $title;
        $detail->amount = $amount;
        $detail->area = $area;
        $detail->descriptions = $mota;
        $detail->id_category = $category;
        $detail->id_type = $type;
        $detail->id_map = $id_map[0]->idMax;
        $detail->id = Auth::user()->id;
        $detail->save();

        $id_detail = DB::table('details')->select(DB::raw('MAX(id_detail) as idMax'))->get();

        //thêm bảng images
       
        foreach($file as $img){
            $image = new images;
            $image->url = Storage::url($img->store('public/detail_img'));    
            $image->id_detail = $id_detail[0]->idMax;
            $image->save();
        }

        return redirect()->route('listDetailUser');
        // dd($type);
    }

    public function listDetailUser()
    {
        $listDetail = DB::table('provinces')
                            ->join('districts','provinces.id_pro','=','districts.id_pro')
                            ->join('villages','districts.id_dis','=','villages.id_dis')
                            ->join('maps','villages.id_vil','=','maps.id_vil')
                            ->join('details','maps.id_map','=','details.id_map')
                            ->join('types','details.id_type','=','types.id_type')
                            ->join('categories','details.id_category','=','categories.id_category')
                            ->join('images','details.id_detail','=','images.id_detail')
                            ->join('users','details.id','=','users.id')
                            ->where('details.id','=',Auth::user()->id)
                            ->select(
                                        'categories.name as nameCategory',
                                        'types.name as nameType',
                                        'details.title',
                                        'details.id_detail',
                                        DB::raw("substr(details.descriptions,1,15) as des ")
                                    )
                            ->groupBy('details.id_detail')        
                            ->paginate(10);
                            // dd($listDetail);
        return view('template.listDetailUser',compact('listDetail'));
    }

    public function viewDetailUser($id)
    {
        $detail = DB::table('provinces')
                            ->join('districts','provinces.id_pro','=','districts.id_pro')
                            ->join('villages','districts.id_dis','=','villages.id_dis')
                            ->join('maps','villages.id_vil','=','maps.id_vil')
                            ->join('details','maps.id_map','=','details.id_map')
                            ->join('types','details.id_type','=','types.id_type')
                            ->join('categories','details.id_category','=','categories.id_category')
                            ->join('images','details.id_detail','=','images.id_detail')
                            ->join('users','details.id','=','users.id')
                            ->where('details.id_detail','=',$id)
                            ->select(
                                    'users.name as nameUser',
                                        'users.email' ,
                                        'categories.name as nameCategory',
                                        'types.name as nameType',
                                        'details.title',
                                        'details.descriptions',
                                        'details.area',
                                        'details.amount',
                                        'provinces.name as tinh',
                                        'districts.name as huyen',
                                        'villages.name as xa',
                                        'provinces.id_pro',
                                        'villages.id_vil',
                                        'districts.id_dis',
                                        'images.url',
                                        'images.id_img',
                                        'maps.coordinates'
                                    )
                            ->get();
        $data = $detail[0]->coordinates;
        $coordiantes = explode(',',  $data);
        $lat = $coordiantes[0];
        $lng = $coordiantes[1];
        $Types = DB::table('types')->get();
        $categories = DB::table('categories')->get();
        $provinces = DB::table('provinces')->get();
        $districts = DB::table('districts')->where('districts.id_pro','=',$detail[0]->id_pro)->get();
        $villages = DB::table('villages')->where('villages.id_dis','=',$detail[0]->id_dis)->get();  
        // dd($Types);
        return view('template.viewDetail',compact('detail','Types','categories','provinces',
                                'districts','villages','lat','lng'
                    ));
    }


    public function editDetailUser($id)
    {
        $detail = DB::table('provinces')
                            ->join('districts','provinces.id_pro','=','districts.id_pro')
                            ->join('villages','districts.id_dis','=','villages.id_dis')
                            ->join('maps','villages.id_vil','=','maps.id_vil')
                            ->join('details','maps.id_map','=','details.id_map')
                            ->join('types','details.id_type','=','types.id_type')
                            ->join('categories','details.id_category','=','categories.id_category')
                            ->join('images','details.id_detail','=','images.id_detail')
                            ->join('users','details.id','=','users.id')
                            ->where('details.id_detail','=',$id)
                            ->select(
                                    'users.name as nameUser',
                                        'users.email' ,
                                        'categories.name as nameCategory',
                                        'types.name as nameType',
                                        'details.title',
                                        'details.descriptions',
                                        'details.area',
                                        'details.amount',
                                        'provinces.name as tinh',
                                        'districts.name as huyen',
                                        'villages.name as xa',
                                        'provinces.id_pro',
                                        'villages.id_vil',
                                        'districts.id_dis',
                                        'images.url',
                                        'images.id_img',
                                        'maps.coordinates',
                                        'details.id_detail'
                                    
                                    )
                            ->get();
        $data = $detail[0]->coordinates;
        $coordiantes = explode(',',  $data);
        $lat = $coordiantes[0];
        $lng = $coordiantes[1];
        $Types = DB::table('types')->get();
        $categories = DB::table('categories')->get();
        $provinces = DB::table('provinces')->get();
        $districts = DB::table('districts')->where('districts.id_pro','=',$detail[0]->id_pro)->get();
        $villages = DB::table('villages')->where('villages.id_dis','=',$detail[0]->id_dis)->get();  
        return view('template.updateDetail',compact('detail','Types','categories','provinces',
                                'districts','villages','lat','lng'
                    ));

    }


    public function updateDetailUser(Request $request){
        // dd($request->all());
        $id = $request->input('id');
        $title = $request->input('tieu_de');
        $type = $request->input('type');
        $category = $request->input('category');
        $area = $request->input('area');
        $amount = $request->input('amount');
        $mota = $request->input('mota');
        $toa_do = $request->input('toa_do');

        if($request->hasFile('file')){
            $detail = detail::find($id);
            $detail->title = $title;
            $detail->amount = $amount;
            $detail->area = $area;
            $detail->descriptions = $mota;
            $detail->id_category = $category;
            $detail->id_type = $type;
            $detail->save();

            $map = maps::find($detail->id_map);
            $map->coordinates =  $toa_do;
            $map->save();

            $images = $request->file('file');
            foreach( $images as $img){
                $image = new images;
                $image->url = Storage::url($img->store('public/detail_img'));
                $image->id_detail = $id;
                $image->save();    
            }
        }
        else{
            $detail = detail::find($id);
            $detail->title = $title;
            $detail->amount = $amount;
            $detail->area = $area;
            $detail->descriptions = $mota;
            $detail->id_category = $category;
            $detail->id_type = $type;
            $detail->save();
    
            $map = maps::find($detail->id_map);
            $map->coordinates =  $toa_do;
            $map->save();
        }
        return redirect()->route('listDetailUser');
    }


    public function viewProfile()
    {
        $user = User::where('id','=',Auth::user()->id)->get();
        $count = detail::where('id','=',Auth::user()->id)->count();
       return view('template.profileUser',compact('user','count'));
    }

   
}
