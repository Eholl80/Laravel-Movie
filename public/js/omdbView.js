$(document).ready(function() {
    $('#search-by-title-button').click(function () {
        var c = $("#search-by-title-form :input").filter(function (index, element) {
            return $(element).val() != "";
        }).serialize();
        var d = 'http://www.omdbapi.com/?' + c;
        var e = $('#search-by-title-request');
        e.find('a').attr('href', d).html(d);
        e.show('slow');
        var b = $('#search-by-title-button');       
        b.removeClass('btn-primary');
        b.addClass('btn-secondary');
        var g = $('#search-by-title-response');
        $.ajax({
            type: 'GET',
            dataType: 'text',
            url: d + "&apikey=465291fa",
            statusCode: {
                401: function () {
                    g.find('pre').html('Error: Daily request limit reached!');
                    b.removeClass('btn-secondary');
                    b.addClass('btn-primary');
                }
            },
            success: function (a) {          
                obj = JSON.parse(a);

                var json = obj.Ratings;
                //var arr = $.parseJSON(json);
                console.log(json);

                t = obj.Title +', '+ obj.Year +', from '+ obj.Director;
                //console.log(obj.Title); 
                g.find('pre').html(a);
                g.show('fast');
                b.removeClass('btn-secondary');
                b.addClass('btn-primary');
                //g.find('pre').html(a.replace(/</g, '&lt;').replace(/>/g, '&gt;'));
                $('#addMovie').click(function () {
                    $('input[name="title"]').val(obj.Title);
                    $('input[name="year"]').val(obj.Year);
                    $('input[name="Rated"]').val(obj.Rated);
                    $('input[name="Released"]').val(obj.Released);
                    $('input[name="runtime"]').val(obj.Runtime);
                    $('input[name="genre"]').val(obj.Genre);
                    $('input[name="director"]').val(obj.Director);
                    $('input[name="writers"]').val(obj.Writer);
                    $('input[name="actors"]').val(obj.Actors);
                    $('input[name="plot"]').val(obj.Plot);
                    $('input[name="language"]').val(obj.Language);
                    $('input[name="country"]').val(obj.Country);
                    $('input[name="Awards"]').val(obj.Awards);
                    $('input[name="poster"]').val(obj.Poster);
                    //$('input[name="Ratings"]').val(obj.Ratings);
                    $('input[name="metascore"]').val(obj.Metascore);
                    $('input[name="imdbRating"]').val(obj.imdbRating);
                    $('input[name="imdbVotes"]').val(obj.imdbVotes);
                    $('input[name="imdb_id"]').val(obj.imdbID);
                    $('input[name="type"]').val(obj.Type);
                    $('input[name="production"]').val(obj.Production);
                    $('input[name="Released"]').val(obj.Released);
                });
            },
            complete: function () {
            }
        })
    });
    
});