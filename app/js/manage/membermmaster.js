
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
                $("#frmbasicdetails")[0].reset();
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
$("#frmtaxdetails").submit(function (e) {
    e.preventDefault();
    var formData = new FormData(this);
    $.ajax({
        url: appGetSecureURL('/sms/app/api/taxdetails/'),
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


var society_table = $('#tblallsociety').DataTable({

    "processing": true,
    "serverSide": true,
    "order": [],
    "ajax": {
        url: appGetSecureURL('/sms/app/api/society/'),
        type: "GET"
    },
    "columnDefs": [
        {
            "targets": [0, 3, 4],
            "orderable": true,
        },
    ],
});
var society_tabletax = $('#tbltax').DataTable({
    responsive: true,
    "processing": true,
    "serverSide": true,
    "order": [],
    "ajax": {
        url: appGetSecureURL('/sms/app/api/taxdetails'),
        type: "GET"
    },
    "columnDefs": [
        {
            "targets": [0, 3, 4],
            "orderable": true,
        },
    ],
});
var society_tabletblarea = $('#tblarea').DataTable({

    "processing": true,
    "serverSide": true,
    "order": [],
    "ajax": {
        url: appGetSecureURL('/sms/app/api/areadetails'),
        type: "GET"
    },
    "columnDefs": [
        {
            "targets": [0, 3, 4],
            "orderable": true,
        },
    ],
});
var society_tabletblcontact = $('#tblcontact').DataTable({

    "processing": true,
    "serverSide": true,
    "order": [],
    "ajax": {
        url: appGetSecureURL('/sms/app/api/contactdetails'),
        type: "GET"
    },
    "columnDefs": [
        {
            "targets": [0, 3, 4],
            "orderable": true,
        },
    ],
    
});
var society_tabletbladdress = $('#tbladdress').DataTable({

    "processing": true,
    "serverSide": true,
    "order": [],
    "ajax": {
        url: appGetSecureURL('/sms/app/api/addressdetails'),
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


$("#frmcontactdetails").submit(function (e) {

    e.preventDefault();
    var formData = new FormData(this);

    $.ajax({
        url: appGetSecureURL('/sms/app/api/contactdetails/'),
        type: 'post',
        data: formData,
        dataType: "json",
        processData: false,
        contentType: false,
        jsonpCallback: 'jsonCallback',
        success: function (res) {
            if (res.error == 1) {
                $("#frmcontactdetails")[0].reset();
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
$("#frmAddressdetails").submit(function (e) {

    e.preventDefault();
    var formData = new FormData(this);

    $.ajax({
        url: appGetSecureURL('/sms/app/api/addressdetails/'),
        type: 'post',
        data: formData,
        dataType: "json",
        processData: false,
        contentType: false,
        jsonpCallback: 'jsonCallback',
        success: function (res) {
            if (res.error == 1) {
                $("#frmAddressdetails")[0].reset();
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