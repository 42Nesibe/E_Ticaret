/**
 * Created by chnmng on 28.07.2017.
 */
(function() {

    var bar = $('.progress-bar');
    var percent = $('.progress-bar');
    var status = $('#status');
    var progress = $('.progress');
    progress.hide();
    $('form').ajaxForm({
        beforeSend: function() {
            progress.show();
            status.empty();
            var percentVal = '0%';
            bar.width(percentVal)
            percent.html(percentVal);
        },
        uploadProgress: function(event, position, total, percentComplete) {
            var percentVal = percentComplete + '%';
            bar.width(percentVal)
            percent.html(percentVal);
        },
        success: function() {
            var percentVal = '100%';
            bar.width(percentVal)
            percent.html(percentVal);
        },
        complete: function(xhr) {
            if(xhr.responseText==1){
                status.html("Dosya başarı ile yüklendi !");
            }
            else if(xhr.responseText==0){
                status.html("Dosya yüklenemedi!");
            }
            else if(xhr.responseText==2){
                status.html("Dosya izin verilmeyen bir format'ta!");
            }else{
                status.html(xhr.responseText);
            }
        }
    });

})();