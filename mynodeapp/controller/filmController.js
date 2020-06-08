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

exports.searchFilm = async (req, res) => {
  const searchValues = [];
  const option = req.body.option;
  const search = req.body.search;
  console.log(option);
  if (option && search) {
    search.toLowerCase();
    const value = await dataset.getSearch(search, option);
    searchValues.push(...value.results.bindings);
  } 

  if (searchValues.length == 0) {
    res.render("notFound");
  } else {
    return res.status(200).render("main", {
      value: searchValues,
      option: option,
    });
  }
};