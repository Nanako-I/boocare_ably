<?php

namespace App\Http\Controllers;

use App\Models\Meeting;
use App\Models\Person;
use Illuminate\Http\Request;
use Carbon\Carbon;

class MeetingeventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $meeting = Meeting::all();
        // ('people')に$peopleが代入される
        
        // 'people'はpeople.blade.phpの省略↓　// compact('people')で合っている↓
        return view('meeting',compact('meeting'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create(Request $request)
    {
        $storeData = $request->validate([
        ]);
        // バリデーションした内容を保存する↓
        
        $meeting = Meeting::create([
        'recording' => $request->recording,
    ]);
//   $people = Person::all();
    return view('meeting', compact('meeting'));
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
         
        ]);
        // バリデーションした内容を保存する↓
        
        $meeting = Meeting::create([
        // 'title' => $request->title,
        'recording' => $request->recording,
    ]);
        // 二重送信防止
        $request->session()->regenerateToken();
    return redirect()->route('meeting.edit', ['meeting' => $meeting->id]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Speech  $speech
     * @return \Illuminate\Http\Response
     */
   public function show(Request $request)
{
    // $person = Person::findOrFail($people_id);
    // $meeting = $person->meetings;
    $url = 'https://acp-api.amivoice.com/issue_service_authorization';
    
    $apiID = config('services.amivoice.api_id');
    $apiPW = config('services.amivoice.api_pw');
    // dd($apiPW);
    $data = [
     'sid' => $apiID,//変数名＝値
     'spw' => $apiPW,
     'epi' => 300000,
    ];
    $queryString = http_build_query($data);
 
$jsonData = json_encode($data);

// dd($jsonData);
$headers = [
    // 'Content-Type: application/json',
    'Authorization: Bearer ' . $jsonData
];

    
    $curl_handle = curl_init();//curlセッションを初期化して、curlハンドルを取得
    curl_setopt($curl_handle, CURLOPT_POST, TRUE);
    curl_setopt($curl_handle, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($curl_handle, CURLOPT_URL, $url);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, $queryString);
    curl_setopt($curl_handle, CURLOPT_HTTPHEADER, $headers);

    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true); // curl_exec()の結果を文字列にする
    $json_response = curl_exec($curl_handle);
    if ($json_response === false) {
    echo 'Curl error: ' . curl_error($curl_handle);
} else {
}
    if(curl_exec($curl_handle) === false) {
    echo 'Curl error: ' . curl_error($curl_handle);
}
    
    curl_close($curl_handle);
  

    // $people = Person::all(); // ここで $people を取得

    return view('meetingevent',compact('json_response'));
   
}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Speech  $speech
     * @return \Illuminate\Http\Response
     */
     public function edit(Request $request)
{
   
    
    $today = \Carbon\Carbon::now()->toDateString();
    $selectedDate = $request->input('selected_date', Carbon::now()->toDateString());
    $selectedDateStart = Carbon::parse($selectedDate)->startOfDay();
    $selectedDateEnd = Carbon::parse($selectedDate)->endOfDay();

    $meetings = Meeting::all();
    $meetingsOnSelectedDate = $meetings->whereBetween('created_at', [$selectedDateStart, $selectedDateEnd]);
    return view('meetingresult', compact( 'meetings','selectedDate', 'meetingsOnSelectedDate'));
}


    public function change(Request $request, $id)
    {
        // $person = Person::findOrFail($people_id);
        $meeting = Meeting::findOrFail($id);
        return view('meetingchange', ['id' => $meeting->id] ,compact('meeting',));
        // return redirect()->route('meeting.change');
        return redirect()->route('meeting.edit');
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Speech  $speech
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Meeting $meeting)
    {
    //データ更新
        $meeting = Meeting::find($request->id);
        $form = $request->all();
        $meeting->fill($form)->save();
    
        $request->session()->regenerateToken();
    
        // 二重送信防止
        $request->session()->regenerateToken();
        
        
        $today = \Carbon\Carbon::now()->toDateString();
        $selectedDate = $request->input('selected_date', Carbon::now()->toDateString());
        $selectedDateStart = Carbon::parse($selectedDate)->startOfDay();
        $selectedDateEnd = Carbon::parse($selectedDate)->endOfDay();
    
        $meetings = Meeting::all();
        $meetingsOnSelectedDate = $meetings->whereBetween('created_at', [$selectedDateStart, $selectedDateEnd]);
        return view('meetingresult', compact( 'meetings','selectedDate', 'meetingsOnSelectedDate'));
        }
    
    
    public function PMchange(Request $request, $people_id)
{
    $person = Person::findOrFail($people_id);
    $lastAfternoonspeech = $person->speeches->last(); // 最後のSpeechモデルを取得
    $lastAfternoonspeechValue = $lastAfternoonspeech ? $lastAfternoonspeech->afternoon_activity : null;
    $url = 'https://acp-api.amivoice.com/issue_service_authorization';
    
    $apiID = config('services.amivoice.api_id');
    $apiPW = config('services.amivoice.api_pw');
    // dd($apiPW);
    $data = [
     'sid' => $apiID,//変数名＝値
     'spw' => $apiPW,
     'epi' => 300000,
    ];
    $queryString = http_build_query($data);
 
$jsonData = json_encode($data);

// dd($jsonData);
$headers = [
    // 'Content-Type: application/json',
    'Authorization: Bearer ' . $jsonData
];

    
    $curl_handle = curl_init();//curlセッションを初期化して、curlハンドルを取得
    curl_setopt($curl_handle, CURLOPT_POST, TRUE);
    curl_setopt($curl_handle, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($curl_handle, CURLOPT_URL, $url);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, $queryString);
    curl_setopt($curl_handle, CURLOPT_HTTPHEADER, $headers);

    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true); // curl_exec()の結果を文字列にする
    $json_response = curl_exec($curl_handle);
    if ($json_response === false) {
    echo 'Curl error: ' . curl_error($curl_handle);
} else {
}
    if(curl_exec($curl_handle) === false) {
    echo 'Curl error: ' . curl_error($curl_handle);
}
    
    curl_close($curl_handle);
    return view('afternoonspeechchange', compact('person', 'lastAfternoonspeechValue', 'json_response'));
}


    public function PMupdate(Request $request, Speech $speech)
    {
      //データ更新
        $person = Person::find($request->people_id);
        $speech->people_id = $person->id;
        $speech->morning_activity = $request->morning_activity;
        $speech->afternoon_activity = $request->afternoon_activity;
        
        $speech->save();
        
        $people = Person::all();
        
        return view('people', compact('speech', 'people'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Speech  $speech
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
        $meeting = Meeting::find($id);
    if ($meeting) {
        $meeting->delete();
    }
        return redirect()->route('meeting.edit');
    }
}