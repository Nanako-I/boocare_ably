
<x-app-layout>

    <!--ヘッダー[START]-->
<body>
  <div class="flex items-center justify-center" style="padding: 20px 0;">
    <div class="flex flex-col items-center">
      <form method="get" action="{{ route('record.edit', $person->id) }}">
     <!--<form action="{{ url('people' ) }}" method="POST" class="w-full max-w-lg">-->
                        @method('PATCH')
                        @csrf
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
     <script src="https://kit.fontawesome.com/de653d534a.js" crossorigin="anonymous"></script>
     
      <style>
      body {
            font-family: 'Noto Sans JP', sans-serif; /* フォントをArialに設定 */
          background: rgb(253, 219, 146,0.2);
          }
        h2 {
          font-family: Arial, sans-serif; /* フォントをArialに設定 */
          font-size: 25px; /* フォントサイズを20ピクセルに設定 */
          font-weight: bold;
          /*text-decoration: underline;*/
        }
   .oya-stamp-box {
      float: right;
      margin-right: 70px;
      margin-top: 10px;
    /*display: flex; /* flexコンテナーとして設定 */
    /*justify-content: flex-end; /* 右端に寄せる */
  }
    .stamp-box {
          width: 120px; /* はんこより少し大きめに設定 */
          height: 120px; /* はんこより少し大きめに設定 */
          border: 1px solid #000; /* 黒い実線のボーダー */
          display: flex;
          justify-content: center;
          align-items: center;
           /*display: none; */
        }
        /*.stamp-box .hanko {*/
          #hanko {
            font-size: 16px; /* Sassの変数は使用できないため、直接指定 */
            border: 3px double #f00; /* Sassの変数と算術演算子を展開して直接指定 */
            border-radius: 50%;
            color: #f00;
            width: 100px; /* Sassの変数は使用できないため、直接指定 */
            height: 100px; /* Sassの変数は使用できないため、直接指定 */
            display: none; /* 最初は非表示にする */ 
            /* display: flex;*/ 
            flex-direction: column;
            justify-content: center;
            text-align: center; /* 中央揃え */
            align-items: center;
          }
          /*.stamp-box .hanko hr {*/
          #hanko hr {
            width: 100%;
            margin: 0;
            border-color: #f00;
            /* display: none; /* 最初は非表示にする */
          }
          .icon-container {
            position: relative;
          }
          
          .icon-container::after {
            content: "ご家族とチャットする";
            position: absolute;
            top: 100%;
            left: 50%;
            transform: translateX(-50%);
            background-color: rgba(0, 0, 0, 0.8);
            color: #fff;
            padding: 5px 10px;
            border-radius: 5px;
            white-space: nowrap;
            font-size: 14px;
            opacity: 0;
            pointer-events: none;
            transition: opacity 0.2s, transform 0.2s;
          }
          
          .icon-container:hover::after {
            opacity: 1;
            transform: translate(-50%, -5px);
          }

    </style>
      
      @php
        $today = now()->format('Y-m-d'); // 今日の日付を取得（例：2023-08-07）
      @endphp
      
      <div class="flex items-center justify-center" style="padding: 20px 0;">
        <div class="flex flex-col items-center">

        <h2>{{$person->person_name}}さん</h2>
        <h3 class="text-gray-900 font-bold text-xl">{{ $selectedDate }}の記録</h3>
        </div>
      </div>
        <label for="selected_date"  class="text-gray-900 font-bold text-xl">日付選択：</label>
          <input type="date" name="selected_date" id="selected_date" value="{{ $selectedDate }}">
          <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-lg text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
            表示
          </button>
        
     </form> 
    </div>
  </div>
  
   
      <div class="flex justify-end "> 
        <div class="flex-col"> 
       
        <a href="{{ url('chat/'.$person->id) }}" class="relative ml-2" style="display: flex; align-items: center;">
          <i class="fa-solid fa-comments text-sky-500 icon-container mr-5 " style="font-size: 3em; padding: 0 5px; transition: transform 0.2s;"></i>
          @csrf
        </a>
      </div> 
    </div> 
    <style>
        table {
        border-collapse: collapse; /* テーブルの罫線を結合する */
        width: 80%; /* テーブルの幅を100%に設定する */
        /*padding: 60px;*/
        margin: 0 auto;
      }
      
      th, td {
        border: 1px solid black; /* 罫線を追加する */
        padding: 8px; /* セル内の余白を設定する */
        text-align: left; /* セル内のテキストを左寄せにする */
      }
    </style>
    <div class="flex flex-col mb-10 lg:items-start items-center" _msthidden="3">
        <div class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-5">
            <i class="fa-solid fa-glass-water text-gray-700" style="font-size: 1.5em; transition: transform 0.2s;"></i>
        </div>
        <div class="flex-grow p-4" _msthidden="3">
          <h2 class="text-gray-900 text-lg title-font font-medium mb-3" _msttexthash="204971" _msthidden="1" _msthash="743">水分</h2>
            <div class="flex justify-around text-left items-start">
    @php
         $today = \Carbon\Carbon::now()->toDateString();
         $todaysWaters = $person->waters->where('created_at', '>=', $today)
         ->where('created_at', '<', $today . ' 23:59:59');
      @endphp
   @if ($todaysWaters->count() > 0)
      <div class="flex flex-col">
        <div class="flex justify-around text-left items-start">
        <p class="text-gray-900 font-bold text-lg">摂取時間</p>
        <!-- 今日の水分摂取リスト -->
        @foreach ($todaysWaters as $water)
                <!--<div class="flex-row items-center justify-between p-2 border-b border-gray-300">-->
                <p class="text-gray-900 font-bold text-lg">{{ $water->created_at->format('H:i') }}</p>
                <!--</div>-->
        @endforeach
        </div>
        @endif  
          </div>
        <hr style="border: 1px solid #666; margin: 0 auto; width: 100%;">
       </div> 
     </div>   
    </div>  
    
    
    <div class="flex flex-col mb-10 lg:items-start items-center" _msthidden="3">
        <div class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-5">
            <i class="fa-solid fa-toilet-paper text-gray-700" style="font-size: 1.5em; transition: transform 0.2s;"></i>
            <circle cx="12" cy="7" r="4"></circle>
        </div>
        <div class="flex-grow p-4" _msthidden="3">
          <h2 class="text-gray-900 text-lg title-font font-medium mb-3" _msttexthash="96746" _msthidden="1" _msthash="746">トイレ</h2>
       
          </div>
        <hr style="border: 1px solid #666; margin: 0 auto; width: 100%;">
        
      @php
         $today = \Carbon\Carbon::now()->toDateString();
         $todaysToilets = $person->toilets->where('created_at', '>=', $today)
         ->where('created_at', '<', $today . ' 23:59:59');
      @endphp
     
      
        
          @if ($todaysToilets->count() > 0)
          @foreach ($todaysToilets as $toilet)
          <div class="flex justify-around text-left items-start">
                <p class="text-gray-900 font-bold text-xl px-3">尿</p>
                <p class="text-gray-900 font-bold text-xl px-3">{{ $toilet->urine_amount }}</p>
            </div>
            
            <div class="flex justify-around text-left items-start">
                <p class="text-gray-900 font-bold text-xl px-3">便</p>
                <p class="text-gray-900 font-bold text-xl px-3">{{ $toilet->ben_amount }}</p>
            </div>
            
            <div class="flex justify-around text-left items-start">
                <p class="text-gray-900 font-bold text-xl px-3">便状態</p>
                <p class="text-gray-900 font-bold text-xl px-3">{{ $toilet->ben_condition }}</p>
            </div>
            
            <div class="flex justify-around text-left items-start">
                <p class="text-gray-900 font-bold text-xl px-3">備考</p>
                <p class="text-gray-900 font-bold text-xl px-3">{{ $toilet->bikou }}</p>
            </div>
            
                @if($toilet->filename && $toilet->path)
                  <img alt="team" class="w-80 h-64" src="{{ asset('storage/sample/toilet_photo/' . $toilet->filename) }}">
              @endif
              @endforeach
          @endif  
          </div>
        <hr style="border: 1px solid #666; margin: 0 auto; width: 100%;">
      </div>
      
      
        
      </div>
        </div>  
    
    </div>
  </div>
</section>
<!--</form>-->
</body>
<script>


document.getElementById("hanko-btn").addEventListener("click", function() {
    var hankoAreaValue = document.getElementById("hanko-area").value;
    // テキストエリアの値を直接代入する
    document.getElementById("hanko-name").innerHTML = hankoAreaValue;
    document.getElementById("hanko").style.display = "flex";
});

 function submitForm() {
        // フォームの送信を防止
        event.preventDefault();
        
        // ここで任意の処理を追加する（例えば、確認ダイアログを表示するなど）
        
        // フォームのデータを取得
        var form = document.querySelector("form");
        
        // フォームを送信
        form.submit();
        
        // フォームの送信を有効にするためにtrueを返す
        return true;
    }
</script>
</x-app-layout>