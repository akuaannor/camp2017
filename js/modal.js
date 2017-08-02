  $('#myModal2').on('show', function() {
    $('#termsModal').css('opacity', .5);
    $('#termsModal').unbind();
});
$('#myModal2').on('hidden', function() {
    $('#termsModal').css('opacity', 1);
    $('#termsModal').removeData("modal").modal({});
});