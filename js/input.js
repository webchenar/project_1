
    $('#file-fr').fileinput({
        theme: 'fas',
        language: 'fr',
        uploadUrl: '#',
        allowedFileExtensions: ['jpg', 'png', 'gif']
    });
    $('#file-es').fileinput({
        theme: 'fas',
        language: 'es',
        uploadUrl: '#',
        allowedFileExtensions: ['jpg', 'png', 'gif']
    });
    $("#file-0").fileinput({
        theme: 'fas',
        uploadUrl: '#'
    }).on('filepreupload', function(event, data, previewId, index) {
        alert('The description entered is:\n\n' + ($('#description').val() || ' NULL'));
    });
    $("#file-1").fileinput({
        theme: 'fas',
        uploadUrl: '#', // you must set a valid URL here else you will get an error
        allowedFileExtensions: ['jpg', 'png', 'gif'],
        overwriteInitial: false,
        maxFileSize: 1000,
        maxFilesNum: 10,
        //allowedFileTypes: ['image', 'video', 'flash'],
        slugCallback: function (filename) {
            return filename.replace('(', '_').replace(']', '_');
        }
    });
    /*
     $(".file").on('fileselect', function(event, n, l) {
     alert('File Selected. Name: ' + l + ', Num: ' + n);
     });
     */
    $("#file-3").fileinput({
        theme: 'fas',
        browseClass: "btn btn-primary",
        overwriteInitial: false,
        initialPreviewAsData: true,
        //uploadUrl: 'http://localhost/plugins/test-upload',
        initialPreview: [
            "http://lorempixel.com/640/360/transport/1",
            "http://lorempixel.com/640/360/transport/2",
            "http://lorempixel.com/640/360/transport/3"
        ],
        initialPreviewConfig: [
            {caption: "transport-1.jpg", size: 329892, width: "120px", url: "{$url}", key: 1, zoomData: 'http://lorempixel.com/1920/1080/transport/1', description: '<h5>NUMBER 1</h5> The first choice for transport. This is the future.'},
            {caption: "transport-2.jpg", size: 872378, width: "120px", url: "{$url}", key: 2, zoomData: 'http://lorempixel.com/1920/1080/transport/2', description: '<h5>NUMBER 2</h5> The second choice for transport. This is the future.'},
            {caption: "transport-3.jpg", size: 632762, width: "120px", url: "{$url}", key: 3, zoomData: 'http://lorempixel.com/1920/1080/transport/3', description: '<h5>NUMBER 3</h5> The third choice for transport. This is the future.'}
        ]
    }).on('filebatchpreupload', function(e, data) {
        return {
            message: 'Error here',
            data: data
        }
    });
    $("#file-4").fileinput({
        theme: 'fas',
        uploadExtraData: {kvId: '10'}
    });
    $(".btn-warning").on('click', function () {
        var $el = $("#file-4");
        if ($el.attr('disabled')) {
            $el.fileinput('enable');
        } else {
            $el.fileinput('disable');
        }
    });
    $(".btn-info").on('click', function () {
        $("#file-4").fileinput('refresh', {previewClass: 'bg-info'});
    });
    /*
     $('#file-4').on('fileselectnone', function() {
     alert('Huh! You selected no files.');
     });
     $('#file-4').on('filebrowse', function() {
     alert('File browse clicked for #file-4');
     });
     */
    $(document).ready(function () {
        $("#test-upload").fileinput({
            'theme': 'fas',
            'showPreview': false,
            'allowedFileExtensions': ['jpg', 'png', 'gif'],
            'elErrorContainer': '#errorBlock'
        });
        $("#kv-explorer").fileinput({
            'theme': 'explorer-fas',
            'uploadUrl': '#',
            overwriteInitial: false,
            initialPreviewAsData: true,
            initialPreview: [
                "",
                "",
                ""
            ],
        });
        /*
         $("#test-upload").on('fileloaded', function(event, file, previewId, index) {
         alert('i = ' + index + ', id = ' + previewId + ', file = ' + file.name);
         });
         */
    });
