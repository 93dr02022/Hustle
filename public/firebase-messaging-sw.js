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