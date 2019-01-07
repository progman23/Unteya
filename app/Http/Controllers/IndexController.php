<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Ad;
use App\Media;
use Auth;

class IndexController extends Controller
{
    public function index()
    {
    	$ads = Ad::select(['id','name','title','price','media','number'])->get();      
    	  return view('page')->with(['ads'=>$ads]);
    }	
    public function show($id)
    {
    	$ads = Ad::select(['id','name', 'title', 'price', 'quantitly', 'unit', 'media','number'])->where('id',$id)->first();
    	return view('Ad-content' )->with(['ads'=>$ads]);
	}
	
	public function show2($id) {
       
		$ads = Ad::select(['id','name', 'title', 'price', 'quantitly', 'unit', 'media','number'])->where('id',$id)->first();
		return view('Ad-edit')->with(['ads'=>$ads]);
	 }

	 public function add()
	 {
		  if (!Auth::check())
            {
                return redirect('register');
            }	   
		   return view('Add');
	 }
 
    public function store(Request $request)
    {
        $ads = new Ad;

    	$ads->name=$request->name;
    	$ads->title=$request->title;
    	$ads->price=$request->price;
    	$ads->quantitly=$request->quantitly;
    	$ads->unit=$request->unit;
    	$ads->number=$request->number;
        $ads->save();
        return redirect('/');
    }

   
}
