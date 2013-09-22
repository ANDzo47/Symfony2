/**
 * Created with JetBrains WebStorm.
 * User: user
 * Date: 15/09/13
 * Time: 12:03
 * To change this template use File | Settings | File Templates.
 */
function downloadUrl(url,callback) {
    var request = window.ActiveXObject ?
        new ActiveXObject('Microsoft.XMLHTTP') :
        new XMLHttpRequest;

    request.onreadystatechange = function() {
        if (request.readyState == 4) {
            request.onreadystatechange = doNothing;
            callback(request, request.status);
        }
    };

    request.open('GET', url, true);
    request.send(null);
}

