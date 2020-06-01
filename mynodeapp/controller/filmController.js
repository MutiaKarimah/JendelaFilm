const dataset = require("../model/film");

exports.getFilm = async (req, res) => {
  const values = [];
  await dataset
    .getFilm()
    .then((value) => {
      values.push(...value.results.bindings);
      console.log(values);
    })
    .catch((err) => {
      res.status(404).send({
        message: err.message || "Some error occurred while retrieving Users.",
      });
    });
  res.render("main", { value: values });
  //res.status(200).json(values);
  //console(log)values;
}; 