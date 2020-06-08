const express = require('express');
const router = express.Router();
const search = require('../controller/filmController');

// router.get("/", (req, res) => {
//     res.json({ Hello: "Welcome to Apps." });
// });

router.get('/', search.getFilm);

router.post('/search', (req,res) => {
  search.searchFilm(req, res);
});

module.exports = router