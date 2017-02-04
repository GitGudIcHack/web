document.querySelector('#searchbar').addEventListener('keypress', function (e) {
    var key = e.which || e.keyCode;
    if (key === 13) { // 13 is enter
    var temp = $("#card"),
    cloneObj = temp.clone(true, true);
    var clone = cloneObj.get(0)
    clone.id = 'newid' + clone.id
    var searchstring = $('#searchbar');
    clone.classList.remove("hidden");
    searchstring.focus();
    clone.getElementsByTagName("h4").cardname.textContent = searchstring.val();
    $('#overview').prepend(cloneObj);
    document.getElementById('searchbar').value = "";
    }
});
