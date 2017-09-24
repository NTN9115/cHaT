const express = require('express');
const app = express();

app.get('/', function (req, res) {
  res.send('hello world');
});

app.listen(3001, function () {
  console.log('running on 3001');
});
