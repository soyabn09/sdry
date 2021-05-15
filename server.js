const express = require("express");
const app = express();

app.set('view engine', 'ejs');

app.use(express.static("public"));

// index page
app.get('/', function(req, res) {
  res.render('pages/index');
});

app.get("/arc-sw.js", function(req, res) {
  res.sendFile(__dirname + "/arc-sw.js");
});

app.use(function(req, res) {
  res.redirect("/");
});

const listener = app.listen(process.env.PORT, function() {
  console.log("Your app is listening on port " + listener.address().port);
});
