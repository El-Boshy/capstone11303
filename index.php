<body>
    <center>
        <h1>Hello</h1>
    </center>
    <div id="container">
        <ul id="col0">
            <li id="l0"></li>
            <li id="l1"></li>
            <li id="l2"></li>
            <li id="l3"></li>
            <li id="l4"></li>
        </ul>
        
        <ul id="col1">
            <li id="l0"></li>
            <li id="l1"></li>
            <li id="l2"></li>
            <li id="l3"></li>
            <li id="l4"></li>
        </ul>
        
        <ul id="col2">
            <li id="l0"></li>
            <li id="l1"></li>
            <li id="l2"></li>
            <li id="l3"></li>
            <li id="l4"></li>
        </ul>
        
        <ul id="col3">
            <li id="l0"></li>
            <li id="l1"></li>
            <li id="l2"></li>
            <li id="l3"></li>
            <li id="l4"></li>
        </ul>
    </div>
</body>

<script src="https://www.google.com/recaptcha/api.js?render=6LeqAzEjAAAAAFt0GCgYsA4l1W9bgYjvZdLIvZCo"></script>

<script>
    function onClick(e) {
        e.preventDefault();
        grecaptcha.ready(function() {
            grecaptcha.execute('6LeqAzEjAAAAAFt0GCgYsA4l1W9bgYjvZdLIvZCo', {action: 'submit'}).then(function(token) {
                // Add your logic to submit to your backend server here.
                //const apiResponse = await fetch("");
            });
        });
    }
</script>

<script type="module" defer>
    // Import the functions you need from the SDKs you need
    import { initializeApp } from "https://www.gstatic.com/firebasejs/9.14.0/firebase-app.js";
    import { initializeAppCheck, ReCaptchaV3Provider, getToken } from "https://www.gstatic.com/firebasejs/9.14.0/firebase-app-check.js";
    import { getFirestore, collection, getDocs, addDoc, setDoc, updateDoc, onSnapshot } from 'https://www.gstatic.com/firebasejs/9.14.0/firebase-firestore.js';
    // TODO: Add SDKs for Firebase products that you want to use
    // https://firebase.google.com/docs/web/setup#available-libraries

    // Your web app's Firebase configuration
    const firebaseConfig = {
        apiKey: "AIzaSyBWRM4yc7JO4bK97yRfJisosVcWCFeUWFQ",
        authDomain: "capstone-project-iot.firebaseapp.com",
        databaseURL: "https://capstone-project-iot-default-rtdb.firebaseio.com",
        projectId: "capstone-project-iot",
        storageBucket: "capstone-project-iot.appspot.com",
        messagingSenderId: "55278853914",
        appId: "1:55278853914:web:f4b4cc9bd29fa8632f56a3"
    };

    // Initialize Firebase
    const app = initializeApp(firebaseConfig);
    //Initialize appCheck
    const appCheck = initializeAppCheck(app, {
        provider: new ReCaptchaV3Provider('6LeqAzEjAAAAAFt0GCgYsA4l1W9bgYjvZdLIvZCo'),

        // Optional argument. If true, the SDK automatically refreshes App Check
        // tokens as needed.
        isTokenAutoRefreshEnabled: true
    });


    // Initiate Firestore to access the documents
    const db = getFirestore(app);
    
    const TypesOfFish = collection(db, 'Fish_Types');
    
    onSnapshot(TypesOfFish,(snapshot)=>{
        document.getElementById("1234").textContent = snapshot.size;
    });


</script>



<?php
echo("<font color='#159556' size='7' id='1234'>World</font>");
?>s

firebase login
firebase init
npm install firebase
firebase deploy