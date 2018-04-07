function appGetHost() {
  
    return window.location.hostname;
}
function appGetSecureURL(apiRelativeURL) {
    
    return 'http://' + appGetHost() + apiRelativeURL;
}
function loginMakeBasicAuth(user, password) {
    var tok = user + ':' + password;
    var hash = base64.encode(tok);
    return "Basic " + hash;
}

$(document).ready(function () {
    debugger;
    $.ajax({
        url: appGetSecureURL('/sms/app/api/getsocietyname/'),
        type: 'GET',
        dataType: "json",
        jsonpCallback: 'jsonCallback',
        success: function (res) {

            if (res.error == 1) {
                var list = $(".SocietyID");
                $.each(res.SoceityName, function (index, item) {
                    list.append(new Option(item.Name, item.DbKey));
                });

            } else {
                noty({
                    text: "<strong>Please Add Society First</strong>",
                    type: "danger",
                    timeout: 1000,
                });
            }
        },
    });
});

