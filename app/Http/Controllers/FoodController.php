<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\Person;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     
    public function index() {
   //** ↓ 下をコピー ↓ **    
    
		
    $foods = Food::orderBy('created_at', 'asc')->get();

    return view('foods', ['foods' => $foods]);
    
    //** ↑ 上をコピー ↑ **
}
    // public function index()
    // {
    // // 
    //     $food = Food::all();
      
    //     return view('people',compact('food'));
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function create(Request $request)
{
    $person = Food::findOrFail($request->people_id);
    // return redirect()->route('food.edit', ['people_id' => $person->id]);
    // return view('people');
    return view('people', ['people' => Person::all()]);
}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $storeData = $request->validate([
            // 'food' => 'required|max:255',
            // 'staple_food' => 'required|max:255',
            // 'side_dish' => 'required|max:255',
            // 'medicine' => 'required|max:255',
        ]);
        // バリデーションした内容を保存する↓
        
        $food = Food::create([
        'people_id' => $request->people_id,
        'food' => $request->food,
        'staple_food' => $request->staple_food,
        'side_dish' => $request->side_dish,
        'medicine' => $request->medicine,
        'medicine_name' => $request->medicine_name,
        'bikou' => $request->bikou,
         
    ]);
    // return redirect('people/{id}/edit');
    $people = Person::all();
//   $person = Person::findOrFail($request->people_id);
    // return redirect()->route('food.edit', ['people_id' => $person->id]); //
    return view('people', compact('food', 'people'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function showFood($id)
{
    
    $person = Person::findOrFail($id);
    $foods = $person->foods;
//     // $foods = $person->foods;
//     // $foods = Food::where('people_id', $people_id)->get();

//     return view('people', compact('staple_foods'));
    return view('people', compact('foods'));
}

// public function change($people_id){  // 編集には、id情報 と 記事データが必要

// $person = Person::findOrFail($people_id);
//   $message = '記事の編集： '.$id;    // 表示用
//   $food = Food::find($id);  // 編集するレコードをid情報から取得
//   return view('edit', ['message'=>$message, 'article'=>$article]);  // 編集ページに渡す
// }

public function change(Request $request, $people_id)
// public function change(Food $food)
    {
        //** ↓ 下をコピー ↓ **
        
      
        $person = Person::findOrFail($people_id);
        // dd($person->foods);
        $lastFood = $person->foods->last();
        // $food = Food::all();
      
        // return view('foodchange', ['id' => $person->id, 'foods' => $foods], compact('person'));
        return view('foodchange', compact('person', 'lastFood'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $people_id)
{
    $person = Person::findOrFail($people_id);
    return view('foodedit', ['id' => $person->id],compact('person'));
}


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Food  $food
     * @return \Illuminate\Http\Response
     */
     public function update(Request $request, Food $food)
    {
    //  public function update(PostRequest $request, Post $post)
    // {
        //データ更新
        $person = Person::find($request->people_id);
        $food->people_id = $person->id;
        $food->staple_food = $request->staple_food;
        $food->side_dish = $request->side_dish;
        $food->medicine = $request->medicine;
        $food->medicine_name = $request->medicine_name;
        $food->bikou = $request->bikou;
        
        $food->save();
        
        $people = Person::all();
        
        return view('people', compact('food', 'people'));
    }
    
    // public function update(Request $request, Food $food)
    // {
        
    // //     
    //     // $lastFood = Food::find($request->id);
    //     // $lastFood->staple_food   = $request->staple_food;
    //     // $lastFood->side_dish = $request->side_dish;
    //     // $lastFood->medicine = $request->medicine;
    //     // $lastFood->medicine_name   = $request->medicine_name;
    //     // $lastFood->bikou   = $request->bikou;
    //     // $lastFood->save();
    //     // return redirect('/');
    //     $updateFood = $this->food->updateFood($request, $food);
    //     //   $food = Food::find($request->people_id);
    //     // $updateFood = $this->food->updateFood($request, $food);
        
    //     return view('people', compact('food', 'people'));
    // }
    
    // Food.phpでupdateFoodを定義する
    // public function update(Request $request, Food $food)
    // {
    //     // $lastFood = Food::find($request->id);
    //     $food->updateFood($request);
        
    //     // $food = Food::find($request->people_id);
    //     // $updateFood = $food->updateFood($request, $food);
    //     $people = Person::all();
    //     return view('people', compact('food', 'people'));
    // }
  

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function destroy(Food $food)
    {
        //
    }
}