importScripts('https://www.gstatic.com/firebasejs/8.3.2/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/8.3.2/firebase-messaging.js');

const firebaseConfig = {
    apiKey: "AIzaSyB4H3R1_H5xi0NvV_n6NXCG73tr_t6GjFg",
    authDomain: "hustle-7d66f.firebaseapp.com",
    projectId: "hustle-7d66f",
    storageBucket: "hustle-7d66f.appspot.com",
    messagingSenderId: "378681680907",
    appId: "1:378681680907:web:0488b453643915a367930e",
    measurementId: "G-B31LGQ7JG1"
};

// For Firebase JS SDK v7.20.0 and later, measurementId is optional
// const firebaseConfig = {
//     apiKey: "AIzaSyBM5wCW5G9aXhbzCTjGuTqwhfS5W13fhUw",
//     authDomain: "gigxnow-c4335.firebaseapp.com",
//     projectId: "gigxnow-c4335",
//     storageBucket: "gigxnow-c4335.appspot.com",
//     messagingSenderId: "296351545552",
//     appId: "1:296351545552:web:1a3b1abc7a400a108586d5",
//     measurementId: "G-BVCSMWF93K"
//   };

firebase.initializeApp(firebaseConfig);

const messaging = firebase.messaging();
messaging.setBackgroundMessageHandler(function ({ data: { title, body, icon } }) {
    return self.registration.showNotification(title, { body, icon });
});

self.addEventListener('notificationclick', function (event) {
    event.notification.close();

    event.waitUntil(
        clients.openWindow()
    );
});