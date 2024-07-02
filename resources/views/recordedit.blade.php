<x-app-layout>

    <!--ヘッダー[START]-->
<body>
  <div class="flex items-center justify-center" style="padding: 20px 0;">
    <div class="flex flex-col items-center">
      <form method="get" action="{{ route('record.edit', $person->id) }}">
     <!--<form action="{{ url('people' ) }}" method="POST" class="w-full max-w-lg">-->
                        @method('PATCH')
                        @csrf
      <style>
      body {
            font-family: 'Noto Sans JP', sans-serif; /* フォントをArialに設定 */
          background: rgb(253, 219, 146,0.2);
          }
        h2 {
          font-family: Arial, sans-serif; /* フォントをArialに設定 */
          font-size: 25px; /* フォントサイズを20ピクセルに設定 */
          font-weight: bold;
          text-decoration: underline;
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
          <input type="date" name="selected_date" id="selected_date">
          
         
          <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-lg text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
            表示
          </button>
         
     </form> 
    </div>
  </div>
   
     <!--<a href="{{ url('pdf/'.$person->id.'/edit') }}">-->
    <a href="{{ route('pdf', ['people_id' => $person->id, 'selected_date' => $selectedDate]) }}">
            @csrf
      <div class="flex items-center justify-end" > 
        <button class="inline-flex items-center px-4 py-2 mr-36 mb-1 bg-gray-800 border border-transparent rounded-md font-semibold text-lg text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
            ダウンロード
        </button>
      </div> 
    </a>
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
    
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
     <script src="https://kit.fontawesome.com/de653d534a.js" crossorigin="anonymous"></script>
     

<table style="padding: 10px;">
  <thead>
    <tr>
      <th colspan="2" style="width: 180px;">体温</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      @if($lastTemperature)
      <td style="width: 20%">{{ $lastTemperature->created_at->format('H:i') }}</td>
      <td style="width: 80%">{{ $lastTemperature->temperature }}℃</td>
      @endif
    </tr>
  </tbody>
</table>

<table style="padding: 10px;">
  <thead>
    <tr>
      <th style="width: 180px;">体温　備考</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>{{ optional($lastTemperature)->bikou }}</td>
    </tr>
    
  </tbody>
</table>

<table>
  <!--<thead>-->
  <!--  <tr>-->
      <!--<th>Date</th>-->
  <!--    <th style="width: 180px;">バイタル<i class="fa-solid fa-heart-pulse text-gray-500 hover:text-white" style="font-size: 1.7em; padding: 0 7px; transition: transform 0.2s;"></i></th>-->
  <!--  </tr>-->
  <!--</thead>-->
    <thead>
    <tr>
      <th colspan="2" style="width: 180px;">血圧</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      @if($lastBloodPressure)
      <td style="width: 20%">{{ $lastBloodPressure->created_at->format('H:i') }}</td>
      <td style="width: 80%">{{ $lastBloodPressure->max_blood }}/{{ $lastBloodPressure->min_blood }}</td>
      @endif
    </tr>
   </tbody>
</table>

<table>
  <tbody>
    <thead>
      <tr>
        <th colspan="2" style="width: 180px;">脈拍</th>
      </tr>
    </thead>
    <tr>
      @if($lastBloodPressure)
      <td style="width: 20%">{{ $lastBloodPressure->created_at->format('H:i') }}</td>
      <td style="width: 80%">{{ $lastBloodPressure->pulse }}/分</td>
      @endif
    </tr>
  </tbody>
</table>

<table>
  <tbody>
    <thead>
      <tr>
        <th colspan="2" style="width: 180px;">SpO2</th>
      </tr>
    </thead>
    <tr>
      @if($lastBloodPressure)
      <td style="width: 20%">{{ $lastBloodPressure->created_at->format('H:i') }}</td>
      <td style="width: 80%">{{ $lastBloodPressure->spo2 }}％</td>
      @endif
    </tr>
  </tbody>
</table>

<table>
  <tbody>
    <thead>
      <tr>
        <th style="width: 180px;">バイタル　備考</th>
      </tr>
    </thead>
    <tr>
      <td>{{ optional($lastBloodPressure)->bikou }}</td>
    </tr>
  </tbody>
</table>


<table>
  <thead>
    <tr>
      <!--<th>Date</th>-->
      <th colspan="3" style="width: 180px;">食事量</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      @if($lastFood)
      <td style="width: 20%">{{ $lastFood->created_at->format('H:i') }}</td>
      <td style="width: 60%">食事は{{ $lastFood->staple_food }}割食べました。</td>
      <td style="width: 20%">薬の服用：{{ $lastFood->medicine == 'yes' ? 'あり' : 'なし' }}</td>
      @endif
    </tr>
  </tbody>
</table>

<table>
  <thead>
    <tr>
      <!--<th>Date</th>-->
      <th style="width: 180px;">食事　備考</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>{{ optional($lastFood)->bikou }}</td>
    </tr>
  </tbody>
</table>


<table>
  <thead>
    <tr>
      <!--<th>Date</th>-->
      <th colspan="2" style="width: 180px;">尿</th>
    </tr>
  </thead>
  <tbody>
   <tr>
      @if($lastToilet)
      <td style="width: 20%">{{ $lastToilet->created_at->format('H:i') }}</td>
      <td style="width: 80%">{{ $lastToilet->urine_amount }}</td>
      @endif
    </tr>
   </tbody>
</table>

<table>
  <thead>
    <tr>
      <!--<th>Date</th>-->
      <th colspan="2" style="width: 180px;">便</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      @if($lastToilet)
      <td style="width: 20%">{{ $lastToilet->created_at->format('H:i') }}</td>
      <td style="width: 80%">便量：{{ $lastToilet->ben_amount }}性状：{{ $lastToilet->ben_condition }}</td>
      @endif
    </tr>
  </tbody>
</table>

<table>
  <thead>
    <tr>
      <!--<th>Date</th>-->
      <th style="width: 180px;">トイレ　備考</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>{{ optional($lastToilet)->bikou }}</td>
    </tr>
  </tbody>
</table>


<table>
  <thead>
    <tr>
      <th style="padding-bottom: 10px;">午前の活動</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>{{ optional($lastMorningActivity)->morning_activity }}</td>
    </tr>
  </tbody>
</table>

<div class="mb-4">
<table>
  <thead>
    <tr>
      <th style="padding-bottom: 10px;">午後の活動</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>{{ optional($lastAfternoonActivity)->afternoon_activity }}</td>
    </tr>
  </tbody>
</table>
</div>
<!--</form>-->
</body>
{{-- 追加した Blade ディレクティブ --}}
</x-app-layout>