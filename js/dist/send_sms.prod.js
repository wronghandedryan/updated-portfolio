"use strict";var accountSid="ACa32703f7c87278e3d5f5414980c7653d",authToken="yc68697cc37884f8ed16a1619fdd23d46",client=require("twilio")(accountSid,authToken);client.messages.create({body:"This is the ship that made the Kessel Run in fourteen parsecs?",from:"+15017122661",to:"+1714"}).then(function(e){return console.log(e.sid)});