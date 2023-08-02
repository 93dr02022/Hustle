importScripts("https://www.gstatic.com/firebasejs/8.3.2/firebase-app.js");
importScripts("https://www.gstatic.com/firebasejs/8.3.2/firebase-messaging.js");

firebase.initializeApp({
    apiKey: "AIzaSyCmG2aLIjcMs6MnetmQ6JN26nNEHKRhPyY",
    authDomain: "project-schoolbo-1597491385360.firebaseapp.com",
    databaseURL: "https://project-schoolbo-1597491385360.firebaseio.com",
    projectId: "project-schoolbo-1597491385360",
    storageBucket: "project-schoolbo-1597491385360.appspot.com",
    messagingSenderId: "59361698308",
    appId: "1:59361698308:web:50385a00f7808afe0e0b51",
    measurementId: "G-Z6BFE8XTZR",
});

const messaging = firebase.messaging();
messaging.setBackgroundMessageHandler(function ({
    data: { title, body, icon },
}) {
    return self.registration.showNotification(title, { body, icon });
});
