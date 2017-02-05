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
    var button = clone.getElementsByTagName("button")[0];
    var input1 = clone.getElementsByTagName("input")[0];
    var input2 = clone.getElementsByTagName("input")[1];
    $(button).click(function() {
        $(button).hide();
        var text1 = $("#button1"),
        cloneText1 = text1.clone(true);
        var text2 = $("#button2"),
        cloneText2 = text2.clone(true);
        var clone = cloneObj.get(0)
        cloneText1.get(0).text = input1.value;
        cloneText2.get(0).text = input2.value;
        $(input1).parent().replaceWith(cloneText1);
        $(input2).parent().replaceWith(cloneText2);
    });
});
$("mdl-button").on("click", function(event){
    $(this).attr("disabled", true);
});
