<footer class="my-footer-color">
    <div class="container">
        <div class="row">
            <div class="col-md-5 pt-2">
                <h5 class="fs-5 sahel pt-2">تماس با نیکو ثبت</h5>
                <h5 class="fs-6">
                    <i class="fas fa-house-user"></i> آدرس: ساختمان مرکز رشد
                    استهبان،مجموعه ثبتی نیکوثبت
                </h5>
                <h5 class="fs-6">
                    <i class="fas fa-phone"></i> تلفن : 07153232868
                </h5>
                <h5 class="fs-6">
                    <i class="fas fa-mobile-alt"></i> تلفن همراه: 09179335012
                </h5>
                <h5 class="fs-6">
                    <i class="fas fas fa-clock"></i> ساعات حضور: شنبه –چهارشنبه 9 صبح
                    تا 15بعد از ظهر
                </h5>
                <h5 class="fs-6">
                    <i class="far fa-envelope"></i> نمابر: nikoosabt@gmail.com
                </h5>
            </div>
            <hr class="d-block d-md-none">
            <div class="col-md-2">
                <a class="btn-light d-block m-1" href="#">خانه</a>
                <a class="btn-light d-block m-1" href="#">خدمات</a>
                <a class="btn-light d-block m-1" href="#">تماس با ما</a>
                <a class="btn-light d-block m-1" href="#">درباره ما</a>
                <a class="btn-light d-block m-1" href="#">همکاران</a>
                <a class="btn-light d-block m-1" href="#">مقالات</a>
            </div>

            <div class="col-3 d-flex align-items-end">
                <a class="fs-1 messenger mx-2" href="#"><i class="fab fa-instagram"></i></a>
                <a class="fs-1 messenger  mx-2" href="#"><i class="fab fa-whatsapp"></i></a>
                <a class="fs-1 messenger  mx-2" href="#"><i class="fab fa-telegram"></i></a>
                <a class="fs-1 messenger  mx-2" href="#"><i class="fas fa-envelope-open"></i></a>
            </div>
        </div>
    </div>

    <div class="footer bg-primary">
        <div class="container">
            <div class="row p-2">
                <div class="col-12 col-md-5 fs-6 text-light mt-1 ">طراحی و توسعه توسط شرکت AM_TECH</div>
                <div class="col-12 col-md-5 offset-md-2 fs-6 align-self-start text-light">
                    کلیه حقوق مادی و معنوی این وبسایت متعلق به شرکت نیکوثبت است
                </div>
            </div>
        </div>
    </div>
    </div>
</footer>


<script src="./js/bootstrap.bundle.js"></script>
<script src="./js/validation.js"></script>

<script>
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
                "http://lorempixel.com/1920/1080/nature/1",
                "http://lorempixel.com/1920/1080/nature/2",
                "http://lorempixel.com/1920/1080/nature/3"
            ],
            initialPreviewConfig: [
                {caption: "nature-1.jpg", size: 329892, width: "120px", url: "{$url}", key: 1},
                {caption: "nature-2.jpg", size: 872378, width: "120px", url: "{$url}", key: 2},
                {caption: "nature-3.jpg", size: 632762, width: "120px", url: "{$url}", key: 3}
            ]
        });
        /*
         $("#test-upload").on('fileloaded', function(event, file, previewId, index) {
         alert('i = ' + index + ', id = ' + previewId + ', file = ' + file.name);
         });
         */
    });
</script>

</body>
</html>
