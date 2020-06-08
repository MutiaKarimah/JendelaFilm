const axios = require("axios");
const qs = require("qs");

const URL = "https://qrary-fuseki-service.herokuapp.com";

// headers for the HTTP request
const headers = {
  "Accept": "application/sparql-results+json,*/*;q=0.9",
  "Content-Type": "application/x-www-form-urlencoded; charset=UTF-8",
};

//all list film
exports.getFilm = async () => {
  //SPARQL Query
  const querydata = {
    query: `
        prefix dk: <http://learningsparql.com/ns/deskripsi#>
        prefix id:  <http://learningsparql.com/ns/idfilm#>

        SELECT ?judul ?genre ?tahun ?rating ?sinopsis
        WHERE {
          ?x dk:judul ?judul.
          ?x dk:genre ?genre.
          ?x dk:tahun ?tahun.
          ?x dk:rating ?rating.
          ?x dk:sinopsis ?sinopsis.
        }
        `,
  };

  try {
    const { data } = await axios(`${URL}/myfilm/query`, {
      method: "POST",
      headers,
      data: qs.stringify(querydata),
    });
    return data;
  } catch (err) {
    console.error(err);
    return Promise.reject(err);
  }
};

//list search
exports.getSearch = async (name, option) => {
  //SPARQL Query
  const querydata = {
    query: `
        prefix dk: <http://learningsparql.com/ns/deskripsi#>
        prefix id:  <http://learningsparql.com/ns/idfilm#>

        SELECT ?judul ?genre ?tahun ?rating ?sinopsis
        WHERE {
          ?x dk:judul ?judul.
          ?x dk:genre ?genre.
          ?x dk:tahun ?tahun.
          ?x dk:rating ?rating.
          ?x dk:sinopsis ?sinopsis.
           FILTER regex(lcase(str(?${option})), lcase(str("${name}")))
        }
        `,
  };

  try {
    const { data } = await axios(`${URL}/myfilm/query`, {
      method: "POST",
      headers,
      data: qs.stringify(querydata),
    });
    return data;
  } catch (err) {
    console.error(err);
    return Promise.reject(err);
  }
};