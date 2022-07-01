<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vegetable;
class VegetableController extends Controller
{




    function indexCategory ($id) {
        if($id==-1){
            $vegetables = Vegetable::all(); //1.b
            $pros = \App\Models\Categori::all();
            return view('index',compact('vegetables','pros'));
        }
        else{
            $vegetables = Vegetable::where('category_id',$id)->get(); //1.b
            $pros = \App\Models\Categori::all();
            return view('index',compact('vegetables','pros'));
        }
    }

    function fileAction($img){
        // just update things we need
        $imgLink = public_path('img\\').$img; 
         
        if(File::exists($imgLink)) {
            File::delete($imgLink);
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    

    public function index()
    {
        //
        $vegetables = Vegetable::all(); //1.b
        $pros = \App\Models\Categori::all();
        return view('index',compact('vegetables','pros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $pros = \App\Models\Categori::all();
        return view("create",compact('pros'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function messages()
    {
        return [
            'name.required' => 'Vui lòng nhập name',
            'description.required' => 'Vui lòng nhập description', 
            'image.required'=> 'Vui lòng nhập ảnh vào',
            'old.required'=> 'Vui lòng nhập gia cu vao',
            'new.required'=> 'Vui lòng nhập gia moi vao',
            'old.integer'=> 'Vui lòng nhap so nguyen',
            'new.integer'=> 'Vui lòng nhap so nguyen',
        ];
    }
    public function store(Request $request)
    {
        //
        $validate = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image'=>'required',
            'old'=>'required||integer',
            'new'=>'required||integer',
        ],$this->messages());
        
        if($request->hasfile('image')){
            $this->validate($request, 
			[
				'image' => 'mimes:jpg,jpeg,png,gif|max:2048',
			],			
			[   
				'image.mimes' => 'Chỉ chấp nhận hình thẻ với đuôi .jpg .jpeg .png .gif',
				'image.max' => 'Hình thẻ giới hạn dung lượng không quá 2M',
			]
		);
        }

        $file = $request->file('image');
        $name = time().'_'.$file->getClientOriginalName();
        $currentPath = public_path('img');
        $file->move($currentPath,$name);
   
        $vegetable = new Vegetable();
        $vegetable->description = $request->description;
        $vegetable->name = $request->name;
        $vegetable-> category_id=$request->category;
        $vegetable-> old_price= $request->old;
        $vegetable-> new_price= $request->new;
        // $car->producer()->associate(100);
        $vegetable->image = $name;
        $vegetable->save();
        return  redirect()->route('vegetable.index')->with('success','Bạn đã thêm thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $vegetable = Vegetable::find($id);
        return view('show',compact('vegetable'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
