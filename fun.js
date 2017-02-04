document.querySelector('#searchbar').addEventListener('keypress', function (e) {
    var key = e.which || e.keyCode;
    if (key === 13) { // 13 is enter
    var temp = document.getElementById('card'),
    clone = temp.cloneNode(true);
    clone.id = 'newid' + clone.id
    var searchstring = $('#searchbar');
    searchstring.focus();
    clone.getElementsByTagName("h4").cardname.textContent = searchstring.val();
    $('#overview').prepend(clone);
    document.getElementById('searchbar').value = "";
    }
});
