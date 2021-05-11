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

app.get("/arc-sw.js", function(req, res) {
  res.sendFile(__dirname + "/arc-sw.js");
});

app.post("/update", function(req, res) {
  req.on("data", function(chunk) {
    let sig =
      "sha1=" +
      crypto
        .createHmac("sha1", process.env.SECRET)
        .update(chunk.toString())
        .digest("hex");
    if (req.headers["x-hub-signature"] == sig) {
      exec("npm run update");
    }
  });
  res.render('pages/index');
});

app.use(function(req, res) {
  res.redirect("/");
});

const listener = app.listen(process.env.PORT, function() {
  console.log("Your app is listening on port " + listener.address().port);
});
