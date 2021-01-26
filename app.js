const express = require("express");
const bodyParser = require("body-parser");
const admin = require("firebase-admin");
const cors = require('cors');
const dotenv = require('dotenv');
const serviceAccount = require("./pouk-mak-firebase-adminsdk-susyp-ffece9cd82.json");

const notification = {
    title: "A Push Notification Test",
    body: "Test Body"
};
const data = {
    key1: "value1",
    key2: "value2"
};
var payload = {
    notification: {
        title: 'My Title',
        body : 'TEST'
    }
};
const port = 3000;

var app = express();
app.use(cors());
app.use(bodyParser.urlencoded({ limit: '10mb', extended: true }));
app.listen(port, () => {
console.log('We are live on ' + port);
});
dotenv.config();
admin.initializeApp({
    credential: admin.credential.cert(serviceAccount),
    databaseURL: process.env.DATABASE_URL
});

app.post('/sendToDevice', function(req, res){
    const fcmToken = req.body.token;
    const type = req.body.type;
    let notificationPayload;

    console.log("Token: ",fcmToken);

    if(type === 'notification'){
        notificationPayload = {
            "notification": notification
        };
    } else if(type === 'data'){
        notificationPayload = {
            "data": data
        };
    } else{
        notificationPayload = {
            "notification": notification,
            "data": data
        };   
    }

    var notificationOptions = {
        priority: "high"
    };

    admin.messaging().sendToDevice(fcmToken, payload, notificationOptions)
    .then(function(response) {
        console.log("Successfully sent notification:", response);
        res.json({"Message": "Successfully sent notification"});
    })
    .catch(function(error) {
        console.log("Error sending notification:", error);
        res.json({"Message": "Error sending notification"});
    });
})

app.post('/subscribeToTopic', function(req, res){
    const topic = req.body.topic;
    const token = req.body.token;

    admin.messaging().subscribeToTopic(token, topic)
    .then(function(response){
        console.log("Successfully subscribed to topic:", response);
        res.json({"Message": "Successfully subscribed to topic."});
    })
    .catch(function(error){
        console.log("Error subscribing to topic:", error);
        res.json({"Message": "Error subscribing to topic."});
    })
});

app.post('/sendToTopic', function(req, res){
    const topic = req.body.topic;
    const type = req.body.type;
    let notificationPayload;

    if(type === 'notification'){
        notificationPayload = {
            "notification": notification
        };
    } else if(type === 'data'){
        notificationPayload = {
            "data": data
        };
    } else{
        notificationPayload = {
            "notification": notification,
            "data": data
        };   
    }

    var notificationOptions = {
        priority: "high"
    };

    admin.messaging().sendToTopic(topic, notificationPayload, notificationOptions)
    .then(function(response){
        console.log("Successfully sent notification to a topic:", response);
        res.json({"Message": "Successfully sent notification to a topic."});
    })
    .catch(function(error){
        console.log("Error in sending notification to a topic:", error);
        res.json({"Message": "Error in sending notification to a topic."});
    })
});