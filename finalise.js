document.querySelector('#searchbar').addEventListener('click', function (e) {
    var key = e.which || e.keyCode;
    var temp = $("#finalcard"),
    cloneObj = temp.clone(true);
    var clone = cloneObj.get(0)
    clone.id = 'newid' + clone.id
    clone.classList.remove("hidden");
    searchstring.focus();
    clone.getElementsByTagName("h4").cardname.textContent = searchstring.val();
    $('#overview').prepend(cloneObj);
});
