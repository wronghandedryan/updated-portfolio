// Download the helper library from https://www.twilio.com/docs/node/install
// Your Account Sid and Auth Token from twilio.com/console
// DANGER! This is insecure. See http://twil.io/secure
const accountSid = 'ACa32703f7c87278e3d5f5414980c7653d';
const authToken = 'yc68697cc37884f8ed16a1619fdd23d46';
const client = require('twilio')(accountSid, authToken);

client.messages
    .create({
        body: 'This is the ship that made the Kessel Run in fourteen parsecs?',
        from: '+15017122661',
        to: '+1714'
    })
    .then(message => console.log(message.sid));
}