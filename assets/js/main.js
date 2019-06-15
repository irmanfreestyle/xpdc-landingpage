function uploadImage(e, baseUrl) {
    let file = new FormData();
    file.append('image', e.files[0])    

    $.ajax({
        url: baseUrl+'admin/uploadimage',
        dataType: 'text',
        cache: false,
        contentType: false,
        processData: false,
        data: file,
        type: 'post',
        success: function(res) {            
            res = JSON.parse(res)
            if(res.status == 'success') {
                $(".img-place").html(`
                    <img style="margin: 10px 0" src="${baseUrl}assets/images/upload/${res.filename}" width="70">
                `)
            } else {
                alert('Terjadi Kesalahan '+res.error)
            }       
        }
    })
}