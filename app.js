
    $(document).ready(function() {
        readRecords();
    });
    function readRecords() {
        var readRecord = "readRecord";
        $.ajax({
            url: "http://localhost:80/GreetingAppPHP/",
            type: 'POST',
            data: {
                readRecord: readRecord
            },
            success: function(data, status) {
                $('#records_container').html(data);
            }
        });
    }
    function addRecord() {
        var firstname = $('#firstname').val();
        $.ajax({
            url: "http://localhost:80/GreetingAppPHP/",
            type: 'POST',
            data: {
                firstname: firstname
            },
            success: function(data, status) {
                $('#AddModal').modal("hide");
                readRecords();
            }
        });
    }
    function deleteRecords(deleteid) {
        var conf = confirm('Are you Sure !! ');
        if(conf == true){ $.ajax({
            url: "http://localhost:80/GreetingAppPHP/",
            type: 'POST',
            data: {
                deleteid: deleteid
            },
            success: function(data, status) {
                console.log(data);
                readRecords();
            }
        });}
       
    }
    function editRecord() {
        var hiddenUserID = $('#hiddenUserID').val();
        var updatefirstname = $('#updatefirstname').val();
        getGreeting(hiddenUserID);
        $.post("http://localhost:80/GreetingAppPHP/", {
                hiddenUserID: hiddenUserID,
                updatefirstname: updatefirstname
            },
            function(data, status) {
                $('#EditModal').modal("hide");
                readRecords();
            }
        );
        
    }

    function getGreeting(id){
        $('#hiddenUserID').val(id);
        $.post("http://localhost:80/GreetingAppPHP/",{
            id:id
        }, function(data,status){
            var user = JSON.parse(data)
            $('#updatefirstname').val(user.firstname);

        });
        $('#EditModal').modal("show");
    }

    function updateUserDetail(){
        var updatefirstname = $('#updatefirstname').val();
        console.log(updatefirstname);
        var hiddenUserID = $('#hiddenUserID').val();
        console.log(hiddenUserID);
        $.post("http://localhost:80/GreetingAppPHP/",
        {
            hiddenUserID:hiddenUserID,
            updatefirstname: updatefirstname
        }, function(data, status){
            console.log(status);
            $('#EditModal').modal("hide");
            readRecords();

        });
    }

