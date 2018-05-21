//function getEndpoint() {
//    return self.registration.pushManager.getSubscription()
//            .then(function (subscription) {
//                if (subscription) {
//                    return subscription.endpoint;
//                }
//
//                throw new Error('User not subscribed');
//            });
//}
var start = 0;
function send_not() {
//var    indexedDB =(typeof window == 'object') ? window.webkitIndexedDB : webkitIndexedDB;
//console.log(window);
//console.log(document); 
//console.log(indexedDB);
    //var myRequest = new XMLHttpRequest();
    start++;
//          self.registration.showNotification('hhhhh', {
//        body:"test notfication "+start,
//      });
    //ChromeSamples.log(start+' - '+'samples');
    //    console.log(start+' - '+'console');

// 
//            

//
//
// 
//

var userid=10;
if(navigator.onLine){
        fetch('/api.php/notfication/web', { 
    method: 'POST',
    headers: {
      'Content-type': 'application/json',
      'data':'{"apiv":"v1","skey":"nothing","userid":'+userid+'}'
    },


//  data:{apiv:'v1',skey:'xx',userid:'abdullah'}
    }).then(function(response) {
        
     return response.text();
}).then(function(blob) {
    
    
    
    console.log(blob);
      
      
// notfication
self.registration.showNotification('xxxx', {
        body:blob+start,
      });
      

//            self.registration.showNotification('ServiceWorker Cookbook', {
//        body: response,
//      });
    });
//    

        setTimeout(send_not, 20000);
                }
                }
send_not();
// Register event listener for the 'push' event.
//self.addEventListener('push', function(event) {
//    
//  // Keep the service worker alive until the notification is created.
//  event.waitUntil(
//    getEndpoint()
//    .then(function(endpoint) {
//      // Retrieve the textual payload from the server using a GET request.
//      // We are using the endpoint as an unique ID of the user for simplicity.
//      return fetch('./json.js');
//    })
//    .then(function(response) {
//        console.log('test');
//        console.log(response);
//      return response.text();
//    })
//    .then(function(payload) {
//      // Show a notification with title 'ServiceWorker Cookbook' and use the payload
//      // as the body.
//      self.registration.showNotification('ServiceWorker Cookbook', {
//        body: payload,
//      });
//    })
//  );
//});