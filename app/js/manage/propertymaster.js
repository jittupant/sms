
$("#frmpropertydetails").submit(function (e) {
    e.preventDefault();
    var formData = new FormData(this);
    $.ajax({
        url: appGetSecureURL('/sms/app/api/property/'),
        type: 'post',
        data: formData,
        dataType: "json",
        processData: false,
        contentType: false,
        jsonpCallback: 'jsonCallback',
        success: function (res) {
            if (res.error == 1) {
                $("#frmpropertydetails")[0].reset();
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

var society_table = $('#tblallproperty').DataTable({

    "processing": true,
    "serverSide": true,
    "order": [],
    "ajax": {
        url: appGetSecureURL('/sms/app/api/property/'),
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

