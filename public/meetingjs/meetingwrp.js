
/*global config*///
/*global services*///

/*global amivoiceApiKeyContainer*/
/*global $*///
/*global Laravel*///
/*global apiKeyContainer*///
/*global awsalbtgcorsValue*///
/*global apiKey*///
/*global apiPromise*///
/*global showApikey*///
/*global wait*///
//var amivoiceApiKey = config('services.amivoice.api_key') ;

//<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
// console.log(amivoiceApiKey);
//var amivoiceApiKeyContainer = document.getElementById('amivoiceApiKeyContainer');
//var amivoiceApiKey; // window.onload の外で宣言
//const amivoiceApiKeyContainer = $('#amivoiceApiKeyContainer').data();
//const amivoiceApiKeyContainer = document.getElementById('amivoiceApiKeyContainer');
//const amivoiceApiKey = amivoiceApiKeyContainer.getAttribute('data-amivoice-api-key');
//const amivoiceApiKey = window.amivoiceApiKey;

//window.amivoiceApiKey = "{{ config('services.amivoice.api_key') }}";

// let amivoiceApiKey;
// document.addEventListener('DOMContentLoaded', function() {
//     amivoiceApiKey = window.amivoiceApiKey;
//     //console.log(amivoiceApiKey);
//     // ここでamivoiceApiKeyを使用するなどの処理を書く

// });

//var amivoiceApiKeyContainer = document.getElementById('amivoiceApiKeyContainer');
// var amivoiceApiKeyContainer = document.getElementById('amivoiceApiKeyContainer');
// var amivoiceApiKey = amivoiceApiKeyContainer.getAttribute('data-amivoice-api-key');
// console.log(amivoiceApiKey);
// var amivoiceApiKeyContainer = document.getElementById('amivoiceApiKeyContainer');
//var apiKey = document.getElementById('amivoiceApiKeyContainer').getAttribute('data-api-key');
// wrp.js


// var apiKeyContainer; // グローバルスコープにapiKeyContainerを定義
// // DOMがロードされた後に処理を実行
// document.addEventListener('DOMContentLoaded', function() {
//     // ビューファイル内で設定したdata-api-key属性の値を取得
//     var apiKeyContainer = document.getElementById('amivoiceApiKeyContainer');
//     Wrp.authorization = apiKeyContainer.getAttribute('data-api-key');
// console.log(apiKeyContainer);
//     // 要素が存在し、getAttributeが正常に動作するか確認
//     if (apiKeyContainer && apiKeyContainer.getAttribute) {
//         // var apiKey = apiKeyContainer.getAttribute('data-api-key');
// 		Wrp.authorization = apiKeyContainer.getAttribute('data-api-key');
//         // apiKeyを利用して何かしらの処理を行う
//         console.log(Wrp.authorization);
//     } else {
//         //console.error('要素が見つからないか、getAttributeがサポートされていません。');
//     }
    
    
// });

// console.log(Wrp.authorization);

// var apiKey;
// var apiKeyContainerPromise = new Promise(function(resolve, reject) {
//     document.addEventListener('DOMContentLoaded', function() {
//         var apiKeyContainer = document.getElementById('amivoiceApiKeyContainer');
//         if (apiKeyContainer && apiKeyContainer.getAttribute) {
//             apiKey = apiKeyContainer.getAttribute('data-api-key'); // グローバル変数に代入
//             console.log(apiKey);
//             resolve(apiKey);
//         } else {
//             reject('要素が見つからないか、getAttributeがサポートされていません。');
//         }
//     });
// });
// console.log(apiKey);



// console.log(apiKey);

// function apiPrinter(apiKey) {
//     console.log(apiKey);
// }

// function apiResolve(apiKey) {
//     apiPrinter(apiKey);
// }

// function handleError(error) {
//     console.error(error);
// }

// apiKeyContainerPromise
//     .then(apiResolve)
//     .catch(handleError);
    
// console.log(apiKey);

// apiKeyContainerPromise.then(function(apiKey) {
//     //console.log(apiKey); // apiKeyContainerの値を取得できる
// }).catch(function(error) {
//     console.error(error);
// });

// apiKeyContainerPromise.then(function(apiKey) {
//     console.log(apiKey); // apiKeyContainerの値を取得できる
//     Wrp.authorization = apiKey
//     // APIキーのみを取り出す
//     var apiKeyValue = apiKey.match(/AWSALBTGCORS=([^;]+)/)[1];
//     console.log(apiKeyValue); // APIキーのみをログに出力する
    
// }).catch(function(error) {
//     console.error(error);
// });

// //console.log(apiKeyContainerPromise); // Promiseオブジェクトがログ出力される

// console.log(apiKey);


// var amivoiceApiKey =  amivoiceApiKeyContainer.dataset.amivoiceApiKey;
// window.onload = function() {
//     var amivoiceApiKeyContainer = document.getElementById('amivoiceApiKeyContainer');

//     if (amivoiceApiKeyContainer) {
//         amivoiceApiKey = amivoiceApiKeyContainer.dataset.amivoiceApiKey;
//         //console.log(amivoiceApiKey);
//         // ここで amivoiceApiKey を使用する処理を記述
//     } else {
//         console.error("amivoiceApiKeyContainer not found");
//     }
// };


//var amivoiceApiKey ="{{config("services.amivoice.api_key")}}";

//var amivoiceApiKey = process.env.AMIVOICE_API_KEY;

// var apiKey;
// var apiKeyContainerPromise = new Promise(function(resolve, reject) {
//     document.addEventListener('DOMContentLoaded', function() {
//         var apiKeyContainer = document.getElementById('amivoiceApiKeyContainer');
//         if (apiKeyContainer && apiKeyContainer.getAttribute) {
//           // apiKey = apiKeyContainer.getAttribute('data-api-key'); // グローバル変数に代入
//             Wrp.authorization = apiKeyContainer.getAttribute('data-api-key');
//             //console.log(apiKey);←ここではapiKeyを認識できる
//             resolve(apiKey);
//         } else {
//             reject('要素が見つからないか、getAttributeがサポートされていません。');
//         }
//     });
// });
// console.log(Wrp.authorization);//←ここではundefinedになる


// var apiKeyContainerPromise = new Promise(function(resolve, reject) {
//     document.addEventListener('DOMContentLoaded', function() {
//         var apiKeyContainer = document.getElementById('amivoiceApiKeyContainer');
//         if (apiKeyContainer && apiKeyContainer.getAttribute) {
//           // var apiKey = apiKeyContainer.getAttribute('data-api-key');
//             Wrp.authorization = apiKeyContainer.getAttribute('data-api-key');
//             // Wrp.authorization = apiKey; // Wrp.authorizationにAPIキーを設定
//             //resolve(apiKey);
//             resolve(Wrp.authorization);
//         } else {
//             reject('要素が見つからないか、getAttributeがサポートされていません。');
//         }
//     });
// });

// apiKeyContainerPromise.then(function(apiKey) {
//     console.log(Wrp.authorization); // Wrp.authorizationの値が取得できる
// }).catch(function(error) {
//     console.error(error);
// });
// console.log(Wrp.authorization);

// var apiKeyContainerPromise = new Promise(function(resolve, reject) {
//     document.addEventListener('DOMContentLoaded', function() {
//         var apiKeyContainer = document.getElementById('amivoiceApiKeyContainer');
//         if (apiKeyContainer && apiKeyContainer.getAttribute) {
//             var apiKey = apiKeyContainer.getAttribute('data-api-key');
            
//             resolve(apiKey);
//             Wrp.authorization = apiKey; // Wrp.authorizationにAPIキーを設定
//             console.log(Wrp.authorization);
//         } else {
//             reject('要素が見つからないか、getAttributeがサポートされていません。');
//         }
//     });
// });

// apiKeyContainerPromise.then(function(apiKey) {
//     console.log(Wrp.authorization); // Wrp.authorizationの値が取得できる
// }).catch(function(error) {
//     console.error(error);
// });
// var apiKey;
// var apiKeyContainerPromise = new Promise(function(resolve, reject) {
//     document.addEventListener('DOMContentLoaded', function() {
//         var apiKeyContainer = document.getElementById('amivoiceApiKeyContainer');
//         if (apiKeyContainer && apiKeyContainer.getAttribute) {
//             var apiKey = apiKeyContainer.getAttribute('data-api-key');
            
//             // Wrp.authorizationにAPIキーを設定
//             // Wrp.authorization = apiKey;
//             // console.log(Wrp.authorization);
//             resolve(apiKey);
//         } else {
//             reject('要素が見つからないか、getAttributeがサポートされていません。');
//         }
//     });
// });

// console.log(Wrp.authorization);//←ここではundefinedになる


var apiKeyContainerPromise = new Promise(function(resolve, reject) {
	document.addEventListener('DOMContentLoaded', function() {
	var apiKeyContainer =
	document.getElementById('amivoiceApiKeyContainer');
		if (apiKeyContainer && apiKeyContainer.getAttribute) {
		Wrp.authorization = apiKeyContainer.getAttribute('data-api-key');
		console.log(Wrp.authorization);
		resolve(Wrp.authorization);
		
	} else {
		reject('要素が見つからないか、getAttributeがサポートされていません。');
		}
	});
});
setTimeout(() => {
	console.log(Wrp.authorization);//←ここではundefinedになる
}, "1000");

	// public オブジェクト

// 	var apiKeyContainerPromise = new Promise(function(resolve, reject) {
//     	document.addEventListener('DOMContentLoaded', function() {
// 	        var apiKeyContainer = document.getElementById('amivoiceApiKeyContainer');
//         	if (apiKeyContainer && apiKeyContainer.getAttribute) {
//             	Wrp.wrp_.authorization = apiKeyContainer.getAttribute('data-api-key');
// 	        	Wrp.authorization
// 	            resolve(Wrp.wrp_.authorization);
//             	console.log(Wrp.authorization);
//         	} else {
// 	            reject('要素が見つからないか、getAttributeがサポートされていません。');
// 	        }
// 	    });
// 	});
// console.log(Wrp.wrp_.authorization);

var Wrp = function() {
	var message = "こんにちは、世界！";
	
	function changeMessage() {
	  // グローバル変数の値を変更
	  message = "さようなら、世界！";
	}

	console.log(message);

// 	var apiKey; // グローバルスコープにapiKeyを定義
// 	// public オブジェクト

// 	var apiKeyContainerPromise = new Promise(function(resolve, reject) {
//     	document.addEventListener('DOMContentLoaded', function() {
// 	        var apiKeyContainer = document.getElementById('amivoiceApiKeyContainer');
//         	if (apiKeyContainer && apiKeyContainer.getAttribute) {
//             	wrp_.authorization = apiKeyContainer.getAttribute('data-api-key');
	          
// 	            resolve(wrp_.authorization);
//             	console.log(wrp_.authorization);
//         	} else {
// 	            reject('要素が見つからないか、getAttributeがサポートされていません。');
// 	        }
// 	    });
// 	});
// console.log(wrp_.authorization);
// apiKeyContainerPromise.then(function(apiKey) {
//     console.log(Wrp.authorization); // Wrp.authorizationの値が取得できる
// }).catch(function(error) {
//     console.error(error);
// });

	var wrp_ = {
		// public プロパティ
		version: "Wrp/1.0.07",
		serverURL: "wss://acp-api.amivoice.com/v1/",
		serverURLElement: undefined,
		grammarFileNames: "-a-medgeneral",
		grammarFileNamesElement: undefined,
		profileId: "",
		profileIdElement: undefined,
		profileWords: "",
		profileWordsElement: undefined,
		segmenterProperties: "",
		segmenterPropertiesElement: undefined,
		keepFillerToken: "",
		keepFillerTokenElement: undefined,
		resultUpdatedInterval: "",
		resultUpdatedIntervalElement: undefined,
		extension: "",
		extensionElement: undefined,
		authorization:"" ,//←ここにapiKeyを渡したい
    // ここでamivoiceApiKeyを使用するなどの処理を書く

		//authorization: '',
		authorizationElement: undefined,
		codec: "",
		codecElement: undefined,
		resultType: "",
		resultTypeElement: undefined,
		checkIntervalTime: 0,
		checkIntervalTimeElement: undefined,
		issuerURL: "https://acp-api.amivoice.com/issue_service_authorization",
		issuerURLElement: undefined,
		sid: null,
		sidElement: undefined,
		spw: null,
		spwElement: undefined,
		epi: null,
		epiElement: undefined,
		// public メソッド
		connect: connect_,
		disconnect: disconnect_,
		feedDataResume: feedDataResume_,
		feedData: feedData_,
		feedDataPause: feedDataPause_,
		isConnected: isConnected_,
		isActive: isActive_,
		issue: issue_,
		// イベントハンドラ
		connectStarted: undefined,
		connectEnded: undefined,
		disconnectStarted: undefined,
		disconnectEnded: undefined,
		feedDataResumeStarted: undefined,
		feedDataResumeEnded: undefined,
		feedDataPauseStarted: undefined,
		feedDataPauseEnded: undefined,
		utteranceStarted: undefined,
		utteranceEnded: undefined,
		resultCreated: undefined,
		resultUpdated: undefined,
		resultFinalized: undefined,
		eventNotified: undefined,
		issueStarted: undefined,
		issueEnded: undefined,
		TRACE: undefined
		
}
	

	// 通信関連
	// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
	//  ┌───────────────────────────────┐
	//  │0(disconnected)                                               │
	//  └────────┬──────────────────────┘
	//           connect()↓↑onclose   ↑onclose     ↑onclose           
	//  ┌─────────┴──┐    │    ┌───┴────────┐
	//  │1(connecting)           │    │    │8(disconnecting)        │
	//  └────────┬───┘    │    └────────────┘
	//              onopen│            │          ↑↑                  
	//                    ↓            │       ※1││disconnect()      
	//  ┌───────────────┴─────┴┴────────┐
	//  │2(connected)                                                  │
	//  └────────┬──────────────────────┘
	//    feedDataResume()│↑                        ↑                  
	//            resume()↓│pauseEnded              │pauseEnded        
	//  ┌─────────┴──┐          ┌───┴────────┐
	//  │3(waiting resumeEnded)  │    ┌─→│7(waiting pauseEnded)   │
	//  └────────┬───┘    │    └────────────┘
	//         resumeEnded│┌─────┘            ↑                  
	//                 's'││pause()                 │pause()           
	//                    ↓│'s' error response      │'e' response      
	//  ┌─────────┴──┐          ┌───┴────────┐
	//  │4(waiting 's' response) │          │6(waiting 'e' response) │
	//  └────────┬───┘          └────────────┘
	//        's' response│                          ↑'e'               
	//                    ↓                          │feedDataPause()   
	//  ┌──────────────────────┴────────┐
	//  │5(resumed)                                                    │
	//  └────────┬──────────────────────┘
	//          feedData()│                          ↑                  
	//                 'p'└─────────────┘                  
	//                                    ※1 error response・disconnect()
	// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
	//  ┌───────────────────────────────┐
	//  │0(disconnected)                                               │
	//  └───────────────────────────────┘
	//    ↑pauseEnded                          ↑pauseEnded              
	//  ┌┴─────────┐              ┌┴───────────┐
	//  │13                  ├──────→│17                      │
	//  └──────────┘resumeEnded   └────────────┘
	//    ↑                    pause()      pause()↑         onclose↑  
	//    │onclose                          onclose├──┬──┐    │  
	//  ┌┴┐                                    ┌┴┐┌┴┐┌┴┐┌┴┐
	//  │3 │                                    │4 ││5 ││6 ││7 │
	//  └─┘                                    └─┘└─┘└─┘└─┘
	// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
	//  ┌───────────────────────────────┐
	//  │8(disconnecting)                                              │
	//  └───────────────────────────────┘
	//    ↑                    ┌─┐          ↑                  ┌─┐
	//    │                ┌→│13│          │              ┌→│17│
	//    │disconnect()    │  └─┘          │disconnect()  │  └─┘
	//    │pauseEnded      │onclose           │pauseEnded    │onclose 
	//  ┌┴────────┴┐              ┌┴───────┴───┐
	//  │23                  ├──────→│27                      │
	//  └──────────┘resumeEnded   └────────────┘
	//    ↑                    pause()      pause()↑  error response↑  
	//    │error resopnse            error response├──┬──┐    │  
	//  ┌┴┐                                    ┌┴┐┌┴┐┌┴┐┌┴┐
	//  │3 │                                    │4 ││5 ││6 ││7 │
	//  └─┘                                    └─┘└─┘└─┘└─┘
	// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
	//  ┌───────────────────────────────┐
	//  │0(disconnected)                                               │
	//  └───────────────────────────────┘
	//    ↑                                    ↑    ┌────────┐
	//    │                                    │┌→│2(connected)    │
	//    │                                    ││  └────────┘
	//    │                    ┌─┐          ││'e' response    ┌─┐
	//    │                ┌→│ 8│          ││            ┌→│ 8│
	//    │                │  └─┘          ││            │  └─┘
	//    │onclose         │※1        onclose││            │※1     
	//  ┌┴────────┴┐              ┌┴┴──────┴───┐
	//  │34                  ├──────→│36                      │
	//  └──────────┘'s' response  └────────────┘
	//    ↑                    'e'              'e'↑                ↑  
	//    │pauseEnded                    pauseEnded│      pauseEnded│  
	//  ┌┴┐                                    ┌┴┐            ┌┴┐
	//  │4 │                                    │5 │            │6 │
	//  └─┘                                    └─┘            └─┘
	//                                    ※1 error response・disconnect()
	// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
	
	var state_ = 0;
	var socket_;
	var reason_;
	var checkIntervalTimeoutTimerId_ = null;
	var interlock_ = false;
	var recorder_ = window.Recorder || null;

	if (recorder_) {
		// 録音ライブラリのプロパティの設定
		recorder_.downSampling = true;
		recorder_.adpcmPacking = false;

		// 録音の開始処理が完了した時に呼び出されます。
		recorder_.resumeEnded = function(codec) {
			wrp_.codec = codec;
			if (wrp_.codecElement) wrp_.codecElement.value = wrp_.codec;
			if (state_ == 0) {
				connect_();
			} else
			if (state_ === 3) {
				state_ = 4;
				feedDataResume__();
			} else
			if (state_ === 13) {
				state_ = 17;
				recorder_.pause();
			} else
			if (state_ === 23) {
				state_ = 27;
				recorder_.pause();
			}
		};

		// 録音の開始処理が失敗した時または録音の停止処理が完了した時に呼び出されます。
		recorder_.pauseEnded = function(reason) {
			if (state_ == 0) {
				if (wrp_.feedDataResumeStarted) wrp_.feedDataResumeStarted();
				if (wrp_.feedDataPauseEnded) wrp_.feedDataPauseEnded(reason);
			} else
			if (state_ === 3) {
				state_ = 2;
				if (wrp_.feedDataPauseEnded) wrp_.feedDataPauseEnded(reason);
				if (interlock_) {
					disconnect_();
				}
			} else
			if (state_ === 4) {
				state_ = 34;
				reason_ = reason;
			} else
			if (state_ === 5) {
				state_ = 36;
				reason_ = reason;
				feedDataPause__();
			} else
			if (state_ === 6) {
				state_ = 36;
				reason_ = reason;
			} else
			if (state_ === 7) {
				state_ = 2;
				if (wrp_.feedDataPauseEnded) wrp_.feedDataPauseEnded(reason);
				if (interlock_) {
					disconnect_();
				}
			} else
			if (state_ === 13 || state_ === 17) {
				state_ = 0;
				if (wrp_.feedDataPauseEnded) wrp_.feedDataPauseEnded(reason_);
				if (wrp_.disconnectEnded) wrp_.disconnectEnded();
				interlock_ = false;
			} else
			if (state_ === 23 || state_ === 27) {
				state_ = 8;
				if (wrp_.feedDataPauseEnded) wrp_.feedDataPauseEnded(reason_);
				if (wrp_.disconnectStarted) wrp_.disconnectStarted();
				socket_.close();
			}
		};

		// 音声データが録音された時に呼び出されます。
		recorder_.recorded = function(data) {
			if (state_ === 5) {
				data = recorder_.pack(data);
				feedData__(data);
			}
		};
	}

	// WebSocket のオープン
	function connect_() {
		if (state_ !== 0) {
			if (wrp_.TRACE) wrp_.TRACE("ERROR: can't connect to WebSocket server (Invalid state: " + state_ + ")");
			return false;
		}
		if (wrp_.connectStarted) wrp_.connectStarted();
		if (!window.WebSocket) {
			if (wrp_.TRACE) wrp_.TRACE("ERROR: can't start feeding data to HTTP server (Unsupported WebSocket class)");
			if (wrp_.disconnectEnded) wrp_.disconnectEnded();
			return true;
		}
		if (wrp_.serverURLElement) wrp_.serverURL = wrp_.serverURLElement.value;
		if (!wrp_.serverURL) {
			if (wrp_.TRACE) wrp_.TRACE("ERROR: can't connect to WebSocket server (Missing server URL)");
			if (wrp_.disconnectEnded) wrp_.disconnectEnded();
			return true;
		}
		try {
			if (wrp_.serverURL.startsWith("http://")) {
				wrp_.serverURL = "ws://" + wrp_.serverURL.substring(7);
			} else
			if (wrp_.serverURL.startsWith("https://")) {
				wrp_.serverURL = "wss://" + wrp_.serverURL.substring(8);
			}
			socket_ = new WebSocket(wrp_.serverURL);
		} catch (e) {
			if (wrp_.TRACE) wrp_.TRACE("ERROR: can't connect to WebSocket server (" + e.message + ")");
			if (wrp_.disconnectEnded) wrp_.disconnectEnded();
			return true;
		}
		state_ = 1;
		socket_.onopen = function(event) {
			state_ = 2;
			if (wrp_.TRACE) wrp_.TRACE("INFO: connected to WebSocket server: " + wrp_.serverURL);
			if (wrp_.connectEnded) wrp_.connectEnded();
			if (interlock_) {
				feedDataResume_();
			}
		};
		socket_.onclose = function(event) {
			if (state_ === 1) {
				state_ = 0;
				if (wrp_.TRACE) wrp_.TRACE("ERROR: can't connect to WebSocket server: " + wrp_.serverURL);
				if (wrp_.disconnectEnded) wrp_.disconnectEnded();
				interlock_ = false;
			} else
			if (state_ === 2) {
				state_ = 0;
				if (wrp_.disconnectStarted) wrp_.disconnectStarted();
				if (wrp_.TRACE) wrp_.TRACE("ERROR: disconnected from WebSocket server");
				if (wrp_.disconnectEnded) wrp_.disconnectEnded();
				interlock_ = false;
			} else
			if (state_ === 3) {
				state_ = 13;
				if (wrp_.disconnectStarted) wrp_.disconnectStarted();
				if (wrp_.TRACE) wrp_.TRACE("ERROR: disconnected from WebSocket server");
				if (!reason_) {
					reason_ = {code: 3, message: "Disconnected from WebSocket server"};
				}
			} else
			if (state_ === 4 || state_ === 5 || state_ === 6) {
				if (state_ != 6) {
					if (wrp_.feedDataPauseStarted) wrp_.feedDataPauseStarted();
				}
				state_ = 17;
				if (wrp_.disconnectStarted) wrp_.disconnectStarted();
				if (wrp_.TRACE) wrp_.TRACE("ERROR: disconnected from WebSocket server");
				if (!reason_) {
					reason_ = {code: 3, message: "Disconnected from WebSocket server"};
				}
				if (recorder_) {
					recorder_.pause();
				} else {
					state_ = 0;
					if (wrp_.feedDataPauseEnded) wrp_.feedDataPauseEnded(reason_);
					if (wrp_.disconnectEnded) wrp_.disconnectEnded();
				}
			} else
			if (state_ === 7) {
				state_ = 17;
				if (wrp_.disconnectStarted) wrp_.disconnectStarted();
				if (wrp_.TRACE) wrp_.TRACE("ERROR: disconnected from WebSocket server");
				if (!reason_) {
					reason_ = {code: 3, message: "Disconnected from WebSocket server"};
				}
			} else
			if (state_ === 8) {
				state_ = 0;
				if (wrp_.TRACE) wrp_.TRACE("INFO: disconnected from WebSocket server");
				if (wrp_.disconnectEnded) wrp_.disconnectEnded();
				interlock_ = false;
			} else
			if (state_ === 23) {
				state_ = 13;
				if (wrp_.disconnectStarted) wrp_.disconnectStarted();
				if (wrp_.TRACE) wrp_.TRACE("ERROR: disconnected from WebSocket server");
			} else
			if (state_ === 27) {
				state_ = 17;
				if (wrp_.disconnectStarted) wrp_.disconnectStarted();
				if (wrp_.TRACE) wrp_.TRACE("ERROR: disconnected from WebSocket server");
			} else
			if (state_ === 34 || state_ === 36) {
				state_ = 0;
				if (wrp_.feedDataPauseEnded) wrp_.feedDataPauseEnded(reason_);
				if (wrp_.disconnectStarted) wrp_.disconnectStarted();
				if (wrp_.TRACE) wrp_.TRACE("ERROR: disconnected from WebSocket server");
				if (wrp_.disconnectEnded) wrp_.disconnectEnded();
				interlock_ = false;
			}
		};
		socket_.onmessage = function(event) {
			if (wrp_.TRACE) wrp_.TRACE("-> " + event.data);
			var tag = event.data[0];
			var body = event.data.substring(2);
			if (tag === 's') {
			    // 条件処理
                console.log("Processing tag 's' with state: " + state_);
				if (body) {
					if (state_ === 2) {
						state_ = 8;
						stopCheckIntervalTimeoutTimer_();
						if (wrp_.TRACE) wrp_.TRACE("ERROR: can't start feeding data to WebSocket server (" + body + ")");
						if (wrp_.disconnectStarted) wrp_.disconnectStarted();
						socket_.close();
					} else
					if (state_ === 3) {
						state_ = 23;
						stopCheckIntervalTimeoutTimer_();
						if (wrp_.TRACE) wrp_.TRACE("ERROR: can't start feeding data to WebSocket server (" + body + ")");
						reason_ = {code: 3, message: body};
					} else
					if (state_ === 4) {
						state_ = 7;
						stopCheckIntervalTimeoutTimer_();
						if (wrp_.TRACE) wrp_.TRACE("ERROR: can't start feeding data to WebSocket server (" + body + ")");
						reason_ = {code: 3, message: body};
						if (recorder_) {
							recorder_.pause();
						} else {
							state_ = 2;
							if (wrp_.feedDataPauseEnded) wrp_.feedDataPauseEnded(reason_);
						}
					} else
					if (state_ === 5 || state_ === 6) {
						if (state_ != 6) {
							if (wrp_.feedDataPauseStarted) wrp_.feedDataPauseStarted();
						}
						state_ = 27;
						stopCheckIntervalTimeoutTimer_();
						if (wrp_.TRACE) wrp_.TRACE("ERROR: can't start feeding data to WebSocket server (" + body + ")");
						reason_ = {code: 3, message: body};
						if (recorder_) {
							recorder_.pause();
						} else {
							state_ = 8;
							if (wrp_.feedDataPauseEnded) wrp_.feedDataPauseEnded(reason_);
							if (wrp_.disconnectStarted) wrp_.disconnectStarted();
							socket_.close();
						}
					} else
					if (state_ === 7) {
						state_ = 27;
						stopCheckIntervalTimeoutTimer_();
						if (wrp_.TRACE) wrp_.TRACE("ERROR: can't start feeding data to WebSocket server (" + body + ")");
						reason_ = {code: 3, message: body};
					} else
					if (state_ === 34 || state_ === 36) {
						state_ = 8;
						stopCheckIntervalTimeoutTimer_();
						if (wrp_.TRACE) wrp_.TRACE("ERROR: can't start feeding data to WebSocket server (" + body + ")");
						if (wrp_.feedDataPauseEnded) wrp_.feedDataPauseEnded(reason_);
						if (wrp_.disconnectStarted) wrp_.disconnectStarted();
						socket_.close();
					}
				} else {
					if (state_ === 4) {
						state_ = 5;
						if (wrp_.TRACE) wrp_.TRACE("INFO: started feeding data to WebSocket server");
						startCheckIntervalTimeoutTimer_();
						if (wrp_.feedDataResumeEnded) wrp_.feedDataResumeEnded();
					} else
					if (state_ === 34) {
						state_ = 36;
						if (wrp_.TRACE) wrp_.TRACE("INFO: started feeding data to WebSocket server");
						feedDataPause__();
					}
				}
			} else
			if (tag === 'p') {
			    // 条件処理
                console.log("Processing tag 'p' with state: " + state_);
				if (body) {
					if (state_ === 2) {
						state_ = 8;
						stopCheckIntervalTimeoutTimer_();
						if (wrp_.TRACE) wrp_.TRACE("ERROR: can't feed data to WebSocket server (" + body + ")");
						if (wrp_.disconnectStarted) wrp_.disconnectStarted();
						socket_.close();
					} else
					if (state_ === 3) {
						state_ = 23;
						stopCheckIntervalTimeoutTimer_();
						if (wrp_.TRACE) wrp_.TRACE("ERROR: can't feed data to WebSocket server (" + body + ")");
						reason_ = {code: 3, message: body};
					} else
					if (state_ === 4 || state_ === 5 || state_ === 6) {
						if (state_ != 6) {
							if (wrp_.feedDataPauseStarted) wrp_.feedDataPauseStarted();
						}
						state_ = 27;
						stopCheckIntervalTimeoutTimer_();
						if (wrp_.TRACE) wrp_.TRACE("ERROR: can't feed data to WebSocket server (" + body + ")");
						reason_ = {code: 3, message: body};
						if (recorder_) {
							recorder_.pause();
						} else {
							state_ = 8;
							if (wrp_.feedDataPauseEnded) wrp_.feedDataPauseEnded(reason_);
							if (wrp_.disconnectStarted) wrp_.disconnectStarted();
							socket_.close();
						}
					} else
					if (state_ === 7) {
						state_ = 27;
						stopCheckIntervalTimeoutTimer_();
						if (wrp_.TRACE) wrp_.TRACE("ERROR: can't feed data to WebSocket server (" + body + ")");
						reason_ = {code: 3, message: body};
					} else
					if (state_ === 34 || state_ === 36) {
						state_ = 8;
						stopCheckIntervalTimeoutTimer_();
						if (wrp_.TRACE) wrp_.TRACE("ERROR: can't feed data to WebSocket server (" + body + ")");
						if (wrp_.feedDataPauseEnded) wrp_.feedDataPauseEnded(reason_);
						if (wrp_.disconnectStarted) wrp_.disconnectStarted();
						socket_.close();
					}
				}
			} else
			if (tag === 'e') {
			    // 条件処理
                console.log("Processing tag 'e' with state: " + state_);
				if (body) {
					if (state_ === 2) {
						state_ = 8;
						stopCheckIntervalTimeoutTimer_();
						if (wrp_.TRACE) wrp_.TRACE("ERROR: can't stop feeding data to WebSocket server (" + body + ")");
						if (wrp_.disconnectStarted) wrp_.disconnectStarted();
						socket_.close();
					} else
					if (state_ === 3) {
						state_ = 23;
						stopCheckIntervalTimeoutTimer_();
						if (wrp_.TRACE) wrp_.TRACE("ERROR: can't stop feeding data to WebSocket server (" + body + ")");
						reason_ = {code: 3, message: body};
					} else
					if (state_ === 4 || state_ === 5 || state_ === 6) {
						if (state_ != 6) {
							if (wrp_.feedDataPauseStarted) wrp_.feedDataPauseStarted();
						}
						state_ = 27;
						stopCheckIntervalTimeoutTimer_();
						if (wrp_.TRACE) wrp_.TRACE("ERROR: can't stop feeding data to WebSocket server (" + body + ")");
						reason_ = {code: 3, message: body};
						if (recorder_) {
							recorder_.pause();
						} else {
							state_ = 8;
							if (wrp_.feedDataPauseEnded) wrp_.feedDataPauseEnded(reason_);
							if (wrp_.disconnectStarted) wrp_.disconnectStarted();
							socket_.close();
						}
					} else
					if (state_ === 7) {
						state_ = 27;
						stopCheckIntervalTimeoutTimer_();
						if (wrp_.TRACE) wrp_.TRACE("ERROR: can't stop feeding data to WebSocket server (" + body + ")");
						reason_ = {code: 3, message: body};
					} else
					if (state_ === 34 || state_ === 36) {
						state_ = 8;
						stopCheckIntervalTimeoutTimer_();
						if (wrp_.TRACE) wrp_.TRACE("ERROR: can't stop feeding data to WebSocket server (" + body + ")");
						if (wrp_.feedDataPauseEnded) wrp_.feedDataPauseEnded(reason_);
						if (wrp_.disconnectStarted) wrp_.disconnectStarted();
						socket_.close();
					}
				} else {
					if (state_ === 6) {
						state_ = 7;
						stopCheckIntervalTimeoutTimer_();
						if (wrp_.TRACE) wrp_.TRACE("INFO: stopped feeding data to WebSocket server");
						if (recorder_) {
							recorder_.pause();
						} else {
							state_ = 2;
							if (wrp_.feedDataPauseEnded) wrp_.feedDataPauseEnded({code: 0, message: ""});
						}
					} else
					if (state_ === 36) {
						state_ = 2;
						stopCheckIntervalTimeoutTimer_();
						if (wrp_.TRACE) wrp_.TRACE("INFO: stopped feeding data to WebSocket server");
						if (wrp_.feedDataPauseEnded) wrp_.feedDataPauseEnded(reason_);
						if (interlock_) {
							disconnect_();
						}
					}
				}
			} else
			if (tag === 'S') {
			    console.log("Processing tag 'S' with state: " + state_);
				if (wrp_.utteranceStarted) wrp_.utteranceStarted(body);
				stopCheckIntervalTimeoutTimer_();
			} else
			if (tag === 'E') {
			    console.log("Processing tag 'E' with state: " + state_);
				if (wrp_.utteranceEnded) wrp_.utteranceEnded(body);
			} else
			if (tag === 'C') {
			    console.log("Processing tag 'C' with state: " + state_);
				if (wrp_.resultCreated) wrp_.resultCreated();
			} else
			if (tag === 'U') {
			    console.log("Processing tag 'U' with state: " + state_);
				if (wrp_.resultUpdated) wrp_.resultUpdated(body);
			} else
			if (tag === 'A') {
				if (wrp_.resultFinalized) wrp_.resultFinalized(body);
				startCheckIntervalTimeoutTimer_();
			} else
			if (tag === 'R') {
				if (wrp_.resultFinalized) wrp_.resultFinalized("\x01\x01\x01\x01\x01" + body);
				startCheckIntervalTimeoutTimer_();
			} else
			if (tag === 'Q') {
				if (wrp_.eventNotified) wrp_.eventNotified(tag, body);
			} else
			if (tag === 'G') {
				if (wrp_.eventNotified) wrp_.eventNotified(tag, body);
			}
		};
		reason_ = null;
		return true;
	}

	// WebSocket のクローズ
	function disconnect_() {
		if (state_ === 5) {
			interlock_ = true;
			if (recorder_) {
				recorder_.TRACE = wrp_.TRACE;
			}
			return feedDataPause_();
		}
		if (state_ !== 2) {
			if (wrp_.TRACE) wrp_.TRACE("ERROR: can't disconnect from WebSocket server (Invalid state: " + state_ + ")");
			return false;
		}
		if (wrp_.disconnectStarted) wrp_.disconnectStarted();
		state_ = 8;
		socket_.close();
		return true;
	}

	// 音声データの供給の開始
	function feedDataResume_() {
		if (state_ === 0) {
			interlock_ = true;
			if (recorder_) {
				recorder_.TRACE = wrp_.TRACE;
			}
			// <!-- for Safari
			if (recorder_ && !recorder_.isActive()) {
				recorder_.resume();
				return true;
			}
			// -->
			return connect_();
		}
		if (state_ !== 2) {
			if (wrp_.TRACE) wrp_.TRACE("ERROR: can't start feeding data to WebSocket server (Invalid state: " + state_ + ")");
			return false;
		}
		if (wrp_.feedDataResumeStarted) wrp_.feedDataResumeStarted();
		state_ = 3;
		if (recorder_ && !recorder_.isActive()) {
			recorder_.resume();
			return true;
		}
		state_ = 4;
		feedDataResume__();
		return true;
	}
	function feedDataResume__() {
		if (wrp_.grammarFileNamesElement) wrp_.grammarFileNames = wrp_.grammarFileNamesElement.value;
		if (wrp_.profileIdElement) wrp_.profileId = wrp_.profileIdElement.value;
		if (wrp_.profileWordsElement) wrp_.profileWords = wrp_.profileWordsElement.value;
		if (wrp_.segmenterPropertiesElement) wrp_.segmenterProperties = wrp_.segmenterPropertiesElement.value;
		if (wrp_.keepFillerTokenElement) wrp_.keepFillerToken = wrp_.keepFillerTokenElement.value;
		if (wrp_.resultUpdatedIntervalElement) wrp_.resultUpdatedInterval = wrp_.resultUpdatedIntervalElement.value;
		if (wrp_.extensionElement) wrp_.extension = wrp_.extensionElement.value;
		if (wrp_.authorizationElement) wrp_.authorization = wrp_.authorizationElement.value;
		if (wrp_.codecElement) wrp_.codec = wrp_.codecElement.value;
		if (wrp_.resultTypeElement) wrp_.resultType = wrp_.resultTypeElement.value;
		if (wrp_.checkIntervalTimeElement) wrp_.checkIntervalTime = wrp_.checkIntervalTimeElement.value - 0;
		var command = "s ";
		if (wrp_.codec) {
			command += wrp_.codec;
		} else {
			command += "MSB16K";
		}
		if (wrp_.grammarFileNames) {
			command += " " + wrp_.grammarFileNames;
			if (wrp_.grammarFileNames.indexOf('\x01') != -1 && !wrp_.grammarFileNames.endsWith("\x01")) {
				command += '\x01';
			}
		} else {
			command += " \x01";
		}
		if (wrp_.profileId) {
			command += " profileId=" + wrp_.profileId;
		}
		if (wrp_.profileWords) {
			command += " profileWords=\"" + wrp_.profileWords.replace(/"/g, "\"\"") + "\"";
		}
		if (wrp_.segmenterProperties) {
			command += " segmenterProperties=\"" + wrp_.segmenterProperties.replace(/"/g, "\"\"") + "\"";
		}
		if (wrp_.keepFillerToken) {
			command += " keepFillerToken=" + wrp_.keepFillerToken;
		}
		if (wrp_.resultUpdatedInterval) {
			command += " resultUpdatedInterval=" + wrp_.resultUpdatedInterval;
		}
		if (wrp_.extension) {
			command += " extension=\"" + wrp_.extension.replace(/"/g, "\"\"") + "\"";
		}
		if (wrp_.authorization) {
			command += " authorization=" + wrp_.authorization;
		}
		if (wrp_.resultType) {
			command += " resultType=" + wrp_.resultType;
		}
		socket_.send(command);
		if (wrp_.TRACE) wrp_.TRACE("<- " + command);
		return true;
	}

	// 音声データの供給
	function feedData_(data) {
		if (state_ !== 5) {
			if (wrp_.TRACE) wrp_.TRACE("ERROR: can't feed data to WebSocket server (Invalid state: " + state_ + ")");
			return false;
		}
		feedData__(data);
		return true;
	}
	function feedData__(data) {
		if (data.byteOffset >= 1) {
			data = new Uint8Array(data.buffer, data.byteOffset - 1, 1 + data.length);
			data[0] = 0x70; // 'p'
			socket_.send(data);
		} else {
			var newData = new Uint8Array(1 + data.length);
			newData[0] = 0x70; // 'p'
			newData.set(data, 1);
			socket_.send(newData);
		}
	}

	// 音声データの供給の停止
	function feedDataPause_() {
		if (state_ !== 5) {
			if (wrp_.TRACE) wrp_.TRACE("ERROR: can't stop feeding data to WebSocket server (Invalid state: " + state_ + ")");
			return false;
		}
		if (wrp_.feedDataPauseStarted) wrp_.feedDataPauseStarted();
		state_ = 6;
		stopCheckIntervalTimeoutTimer_();
		feedDataPause__();
		return true;
	}
	function feedDataPause__() {
		var command = "e";
		socket_.send(command);
		if (wrp_.TRACE) wrp_.TRACE("<- " + command);
		return true;
	}

	// 音声認識サーバに接続中かどうかの取得
	function isConnected_() {
		return (state_ === 2 || state_ === 3 || state_ === 4 || state_ === 5 || state_ === 6 || state_ === 7 || state_ === 23 || state_ === 27 || state_ === 34 || state_ === 36);
	}

	// 音声データの供給中かどうかの取得
	function isActive_() {
		return (state_ === 5);
	}

// 録音の停止を自動的に行うためのタイマの開始
function startCheckIntervalTimeoutTimer_() {
    var fixedTime = 600000; // 600,000 ミリ秒 = 10 分

    // 既存のタイマーがある場合、それを停止する。
    stopCheckIntervalTimeoutTimer_();

    // 新しいタイマーを設定し、10 分後に fireCheckIntervalTimeoutTimer_ 関数を実行する。
    checkIntervalTimeoutTimerId_ = setTimeout(fireCheckIntervalTimeoutTimer_, fixedTime);

    // トレース機能が有効な場合、ログを出力する。
    if (wrp_.TRACE) {
        wrp_.TRACE("INFO: started check interval time timer: 600000 (10 minutes)");
    }
}

// 録音の停止を自動的に行うためのタイマの停止
function stopCheckIntervalTimeoutTimer_() {
    if (checkIntervalTimeoutTimerId_ !== null) {
        clearTimeout(checkIntervalTimeoutTimerId_);
        checkIntervalTimeoutTimerId_ = null;
        if (wrp_.TRACE) {
            wrp_.TRACE("INFO: stopped check interval time timer: 600000 (10 minutes)");
        }
    }
}

// 録音の停止を自動的に行うためのタイマの発火
function fireCheckIntervalTimeoutTimer_() {
    if (wrp_.TRACE) {
        wrp_.TRACE("INFO: fired check interval time timer: 600000 (10 minutes)");
    }
    feedDataPause_();
}


	// サービス認証キー文字列の発行
	function issue_() {
		if (!window.XMLHttpRequest) {
			if (wrp_.TRACE) wrp_.TRACE("ERROR: can't issue service authorization (Unsupported XMLHttpRequest class)");
			return false;
		}
		if (wrp_.issuerURLElement) wrp_.issuerURL = wrp_.issuerURLElement.value;
		if (wrp_.sidElement) wrp_.sid = wrp_.sidElement.value;
		if (wrp_.spwElement) wrp_.spw = wrp_.spwElement.value;
		if (wrp_.epiElement) wrp_.epi = wrp_.epiElement.value;
		if (!wrp_.sid) {
			if (wrp_.TRACE) wrp_.TRACE("ERROR: can't issue service authorization (Missing service id)");
			alert("サービス ID が設定されていません。");
			if (wrp_.sidElement) wrp_.sidElement.focus();
			return false;
		}
		for (var i = 0; i < wrp_.sid.length; i++) {
			var c = wrp_.sid.charCodeAt(i);
			if (!(c >= 0x30 && c <= 0x39 || c >= 0x61 && c <= 0x7A || c >= 0x41 && c <= 0x5A || c === 0x2D || c === 0x5F)) {
				if (wrp_.TRACE) wrp_.TRACE("ERROR: can't issue service authorization (Illegal char in service id)");
				if (wrp_.sidElement) alert("サービス ID に許されていない文字が使用されています。");
				if (wrp_.sidElement) wrp_.sidElement.focus();
				return false;
			}
		}
		if (!wrp_.spw) {
			if (wrp_.TRACE) wrp_.TRACE("ERROR: can't issue service authorization (Missing service password)");
			alert("サービスパスワードが設定されていません。");
			if (wrp_.spwElement) wrp_.spwElement.focus();
			return false;
		}
		for (var i = 0; i < wrp_.spw.length; i++) {
			var c = wrp_.spw.charCodeAt(i);
			if (c < 0x20 || c > 0x7E) {
				if (wrp_.TRACE) wrp_.TRACE("ERROR: can't issue service authorization (Illegal char in service password)");
				if (wrp_.spwElement) alert("サービスパスワードに許されていない文字が使用されています。");
				if (wrp_.spwElement) wrp_.spwElement.focus();
				return false;
			}
		}
		for (var i = 0; i < wrp_.epi.length; i++) {
			var c = wrp_.epi.charCodeAt(i);
			if (c < 0x30 || c > 0x39) {
				if (wrp_.TRACE) wrp_.TRACE("ERROR: can't issue service authorization (Illegal char in pexires in)");
				if (wrp_.epiElement) alert("有効期限に許されていない文字が使用されています。");
				if (wrp_.epiElement) wrp_.epiElement.focus();
				return false;
			}
		}
		if (wrp_.issueStarted) wrp_.issueStarted();
		var searchParams = "sid=" + encodeURIComponent(wrp_.sid) + "&spw=" + encodeURIComponent(wrp_.spw);
		if (wrp_.epi) {
			searchParams += "&epi=" + encodeURIComponent(wrp_.epi);
		}
		var httpRequest = new XMLHttpRequest();
		httpRequest.addEventListener("load", function(e) {
			if (e.target.status === 200) {
				if (wrp_.serviceAuthorizationElement) {
					wrp_.serviceAuthorizationElement.value = e.target.response;
				} else
				if (wrp_.authorizationElement) {
					wrp_.authorizationElement.value = e.target.response;
				} else {
					wrp_.serviceAuthorization = e.target.response;
				}
				if (wrp_.issueEnded) wrp_.issueEnded(e.target.response);
			} else {
				if (wrp_.issueEnded) wrp_.issueEnded("");
			}
		});
		httpRequest.addEventListener("error", function(e) {
			if (wrp_.issueEnded) wrp_.issueEnded("");
		});
		httpRequest.addEventListener("abort", function(e) {
			if (wrp_.issueEnded) wrp_.issueEnded("");
		});
		httpRequest.addEventListener("timeout", function(e) {
			if (wrp_.issueEnded) wrp_.issueEnded("");
		});
		httpRequest.open("POST", wrp_.issuerURL, true);
		httpRequest.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		httpRequest.send(searchParams);
		return true;
	}

	// public プロパティの初期化
	if (recorder_) {
		wrp_.version += " " + recorder_.version;
	}
	wrp_.serverURL = window.location.protocol + "//" + window.location.host + window.location.pathname;
	wrp_.serverURL = wrp_.serverURL.substring(0, wrp_.serverURL.lastIndexOf('/') + 1);
	if (wrp_.serverURL.endsWith("/tool/")) {
		wrp_.serverURL = wrp_.serverURL.substring(0, wrp_.serverURL.length - 5);
	}
	wrp_.serverURL += "/";
	wrp_.grammarFileNames = "-a-medgeneral";
	wrp_.issuerURL = window.location.protocol + "//" + window.location.host + window.location.pathname;
	wrp_.issuerURL = wrp_.issuerURL.substring(0, wrp_.issuerURL.lastIndexOf('/'));
	if (wrp_.issuerURL.indexOf("/tool", wrp_.issuerURL.length - 5) !== -1) {
		wrp_.issuerURL = wrp_.issuerURL.substring(0, wrp_.issuerURL.length - 5);
	}
	wrp_.issuerURL += "/issue_service_authorization";

	// public オブジェクトの返却
	return wrp_;
}();