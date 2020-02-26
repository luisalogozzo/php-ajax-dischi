const $ = require('jquery');
const Handlebars = require("handlebars");

$(document).ready(function () {
  $.ajax({
    url: 'http://localhost:8888/php-ajax-dischi/server.php',
    method: 'GET',
    success: function (data) {
      for (var i = 0; i < data.length; i++) {
        console.log();
        var source = document.getElementById("entry-template").innerHTML;
        var template = Handlebars.compile(source);
        var context = {
        poster: data[i].poster,
        title:  data[i].title,
        author: data[i].author,
        year: data[i].year,
        }
        var html = template(context);
        $('.container').append(html);
        }

    },
    error: function () {
      alert('error');
    }
  });
});
