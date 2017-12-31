<script>
function renderTable() {
var $request = $.get('www.app.com/endpoint'); // make request
var $container = $('.table-container');

$container.addClass('loading'); // add loading class (optional)

$request.done(function(data) { // success
$container.html(data.html);
});
$request.always(function() {
$container.removeClass('loading');
});
}
</script>