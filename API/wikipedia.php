<section class="wapi">
<p><a href="../api">&laquo; back</a></p>
<form>
    <legend>Wikipedia live search</legend>
    <input class="form-control ex8" type="search" autofocus>
  </form>
<div class="results"></div>

<script src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
<script>
  $('.form-control').keyup(function (e) {
    var $query = $('.form-control').val();
    $.getJSON('http://en.wikipedia.org/w/api.php?callback=?',
    {
      srsearch: $query,
      action: 'query',
      list: 'search',
      format: 'json'
    },
    function (data) {
      $('.results').empty();
      $('.results').append('<p>Results for <b>' + $query + '</b></p>');
      $.each(data.query.search, function (i, item) {
        $('.results').append('<div>' +
                             '  <h4><a href="http://en.wikipedia.org/wiki/' + encodeURIComponent(item.title) + '">' + item.title + '</a></h4>' +
                             '  <p>' + item.snippet + '</p>' +
                             '</div>');
      });
    });
  });
</script>
</section>
