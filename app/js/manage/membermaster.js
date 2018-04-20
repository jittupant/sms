$(document).ready(function () {
    $.ajax({
        url: appGetSecureURL('/sms/app/api/memberlist'),
        type: 'GET',
        dataType: "json",
        jsonpCallback: 'jsonCallback',
        success: function (res) {

            if (res.error == 1) {
                var list = $(".MemberRegNo");
                $.each(res.MemberRegNo, function (index, item) {
                    list.append(new Option(item.MemberRegistrationNumber, item.DbKey));
                });

            } else {
                noty({
                    text: "<strong>Please Add Member First</strong>",
                    type: "danger",
                    timeout: 1000,
                });
            }
        },
    });
});

$("#frmmemberdetails").submit(function (e) {
    e.preventDefault();
    var formData = new FormData(this);
    $.ajax({
        url: appGetSecureURL('/sms/app/api/member/'),
        type: 'post',
        data: formData,
        dataType: "json",
        processData: false,
        contentType: false,
        jsonpCallback: 'jsonCallback',
        success: function (res) {
            if (res.error == 1) {
                $("#frmmemberdetails")[0].reset();
                noty({
                    text: "<strong>" + res.msg + "</strong>",
                    type: "success",
                    timeout: 1000,
                });
            } else if (res.error == 0) {
                noty({
                    text: "<strong>" + res.msg + "</strong>",
                    type: "danger",
                    timeout: 1000,
                });
            }
        },
    });
});
$("#frmmemberaddress").submit(function (e) {
    e.preventDefault();
    var formData = new FormData(this);
    $.ajax({
        url: appGetSecureURL('/sms/app/api/memberaddress/'),
        type: 'post',
        data: formData,
        dataType: "json",
        processData: false,
        contentType: false,
        jsonpCallback: 'jsonCallback',
        success: function (res) {
            if (res.error == 1) {
                $("#frmtaxdetails")[0].reset();
                noty({
                    text: "<strong>" + res.msg + "</strong>",
                    type: "success",
                    timeout: 1000,
                });
            } else if (res.error == 0) {
                noty({
                    text: "<strong>" + res.msg + "</strong>",
                    type: "danger",
                    timeout: 1000,
                });
            }
        },
    });
});
$("#frmareadetails").submit(function (e) {

    e.preventDefault();
    var formData = new FormData(this);

    $.ajax({
        url: appGetSecureURL('/sms/app/api/areadetails/'),
        type: 'post',
        data: formData,
        dataType: "json",
        processData: false,
        contentType: false,
        jsonpCallback: 'jsonCallback',
        success: function (res) {
            if (res.error == 1) {
                $("#frmareadetails")[0].reset();
                noty({
                    text: "<strong>" + res.msg + "</strong>",
                    type: "success",
                    timeout: 1000,
                });
            } else if (res.error == 0) {
                noty({
                    text: "<strong>" + res.msg + "</strong>",
                    type: "danger",
                    timeout: 1000,
                });
            }
        },
    });
});


var member_table = $('#tblallmember').DataTable({

    "processing": true,
    "serverSide": true,
    //"order": [],
    "ajax": {
        url: appGetSecureURL('/sms/app/api/member/'),
        type: "GET"
    },
    "columnDefs": [
        {
            "targets": [0, 3, 4],
            "orderable": true,
        },
    ],
});


//To Reload The Ajax
//See DataTables.net for more information about the reload method
function viewdetails(uid) {

    alert(uid);

}


if(window.location.hash.substr(1) == "FamilyDetails"){
   $("#frmmemberdetails").hide();
   $("#frmmemberaddress").show();
}
if(window.location.hash.substr(1) == "AddressDetails"){
   $("#frmmemberdetails").hide();
   $("#frmmemberaddress").show();
}