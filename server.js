const express = require("express");
const app = express();
const crypto = require('crypto');
const exec = require('child_process').exec;

app.set('view engine', 'ejs');

app.use(express.static("public"));

// index page
app.get('/', function(req, res) {
  res.render('pages/index');
});

app.get("/arc-sw.js", function(request, response) {
  response.sendFile(__dirname + "/arc-sw.js");
});

app.get("/update", function(request, response) {
  request.on("data", function(chunk) {
    let sig =
      "sha1=" +
      crypto
        .createHmac("sha1", process.env.SECRET)
        .update(chunk.toString())
        .digest("hex");
    if (request.headers["x-hub-signature"] == sig) {
      exec("npm run update");
    }
  });
  response.end();
});

app.use(function(request, response) {
  response.redirect("/");
});

const listener = app.listen(process.env.PORT, function() {
  console.log("Your app is listening on port " + listener.address().port);
});
