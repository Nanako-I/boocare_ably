  <x-app-layout>

    <!--ヘッダー[START]-->
  <!--<div class="flex items-center justify-center">-->
  <!--  <div class="flex flex-col items-center">-->
        <div class="center-container">
            <style>
                h2 {
                  font-family: Arial, sans-serif; /* フォントをArialに設定 */
                  font-size: 20px; /* フォントサイズを20ピクセルに設定 */
                }
            </style>
            
            <div class="flex justify-end "> 
              <div class="flex-col"> 
                <p class="font-bold text-lg">今までの<br>会議記録</p>
                  <a href="{{ url('meetingresult') }}" class="relative ml-2" style="display: flex; align-items: center;">
                    <i class="fa-regular fa-clipboard text-slate-600 hover:text-slate-900 icon-container mr-5 " style="font-size: 3em; padding: 0 5px; transition: transform 0.2s;"></i>
                    @csrf
                  </a>
              </div> 
      </div> 
            <div class ="flex items-center justify-center"  style="padding: 20px 0;">
                <div class="flex flex-col items-center">
                    <h2>会議・面談記録</h2>
                    
                </div>
            </div>
        
         
            <form action="{{ url('meetingchange/' . $meeting->id ) }}" method="POST">
                 @csrf
            <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
            <script src="https://kit.fontawesome.com/de653d534a.js" crossorigin="anonymous"></script>
                <div class="flex flex-col items-center">
                    <style>
                      p {
                        font-family: Arial, sans-serif; /* フォントをArialに設定 */
                        font-size: 25px; /* フォントサイズを20ピクセルに設定 */
                        font-weight: bold;
                      }
                    </style>
                        
                    
                        <div class="flex items-center justify-center">
                             <input type="hidden" name="id" value="{{ $meeting->id }}">
                        </div>
                        <!--<div style="display: flex; flex-direction: column; align-items: center;">-->
                        <!--    <div class="flex items-center justify-center ml-4">-->
                        <!--        <input type="datetime-local" name="created_at" id="scheduled-time" value="{{ $meeting->created_at}}">-->
                        <!--    </div>-->
                        <!--</div>-->
                        
                        <form action="{{ route('meeting.update', $meeting->id) }}" method="POST">
                      @csrf
                        <div style="display: flex; flex-direction: column; align-items: center; margin: 10px 0;">
                          <!--amivoiceで読み取った文字が反映される↓-->
                            <!--<textarea id="recognitionResult" name="recording" value="{{ $meeting->recording }}"class="w-full max-w-4xl h-96 font-bold" style="height: 300px;">{{ $meeting->recording }}</textarea>-->
                             <textarea id="recognitionResult" name="recording" value="{{ $meeting->recording }}" class="w-full h-96 max-h-full max-w-full font-bold p-4 text-xl">{{ $meeting->recording }}</textarea>
                             <span class="recognitionResultText"></span><span class="recognitionResultInfo"></span>
                        </div>
                         
                        <button type="submit" class="inline-flex items-center px-6 py-3 bg-gray-800 border border-transparent rounded-md font-semibold text-lg text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                              修正
                        </button>
                 </div>
            </form>
          </div>
        <!--    </div>-->
        <!--</div>-->
</x-app-layout>