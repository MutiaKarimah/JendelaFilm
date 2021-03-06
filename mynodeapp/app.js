const express = require('express');


const bodyParser = require('body-parser');
//const cors = require('cors')
const route = require('./routes/index');
const app = express();

const port = process.env.PORT || 3000;

// const corsOption = {
//     origin: "http://localhost:3000"
// };

app.set('view engine', 'ejs');
app.set('views', __dirname + '/views');

// // //for use style.css 
//app.use( express.static( "public" ) );

//app.use(cors());

// parse requests of content-type - application/json
app.use(bodyParser.json());

// parse requests of content-type - application/x-www-form-urlencoded
app.use(bodyParser.urlencoded({ extended: true }));

app.use(route);

app.listen(port);
console.log('API server started on: ' + port);
app.use(express.static("./public"));