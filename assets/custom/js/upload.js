$(function () {
    // insert post api httprequest
    $("#blog").submit(function (e) {
        e.preventDefault();
        const request = new XMLHttpRequest();
        request.open("POST", "http://localhost/News-update/commands/upload/uploadInsert.php")
        var myForm = document.getElementById("blog");
        var formData = new FormData(myForm);
        request.send(formData)

        request.onload = () => {
            $("#blogBtn").html('<div class="spinner-border text-white mx-4"></div>');
            $("#blogBtn").attr('disabled', 'true');
        // console.log(request)
        data = JSON.parse(request.response);
        if (data.result) {
            $("#blogBtn").text('Post Blog');
            $("#blogBtn").attr('disabled', 'false');
                Swal.fire(
                    'Upload',
                    'Upload Successfully',
                    'success'
                ).then(function () {
                    $("#addModal").modal('hide')
                    $("#blog")[0].reset();
                    $("#blogBtn").attr('disabled', 'false');
                    $('#responsive-datatable').DataTable().ajax.reload();
                })
            }

            if (data.titleerr) {
                $("#titleerr").text(data.titleerr + ' *');
                if (data.titleerr == 'undefined') {
                    $("#authorerr").text(' ');
                }
            } else {
                $("#titleerr").text(' ');
            }

            if (data.authorerr) {
                $("#authorerr").text(data.authorerr + ' *');
                if (data.authorerr == 'undefined') {
                    $("#authorerr").text(' ');
                }
            } else {
                $("#authorerr").text(' ');
            }

            if (data.categoryerr) {
                $("#categoryerr").text(data.categoryerr + ' *');
                if (data.categoryerr == 'undefined') {
                    $("#authorerr").text(' ');
                }
            } else {
                $("#categoryerr").text(' ');
            }

            if (data.coverimageerr) {
                $("#coverimageerr").text(data.coverimageerr + ' *');
                if (data.coverimageerr == 'undefined') {
                    $("#authorerr").text(' ');
                }
            } else {
                $("#coverimageerr").text(' ');
            }

            if (data.contenterr) {
                $("#contenterr").text(data.contenterr + ' *');
                if (data.contenterr == 'undefined') {
                    $("#authorerr").text(' ');
                }
            } else {
                $("#contenterr").text(' ');
            }
        }
    });

    
    // fetch to datatable
    var table = $('#responsive-datatable').DataTable({
        "bProcessing": true,
        // "bServerSide": true, 
        ajax: "http://localhost/News-update/commands/upload/uploadFetch.php",
        "columns": [
            { data: "id" },
            { 
                data: "title" ,
                render: function (data) {
                    var str = data; 
                    if (str.length > 24) {
                        return str.substring(0,25)+'...';
                    }else{
                        return str;
                    }
                } 
            },
            { data: "author" },
            { data: "category" },
            { data: "views" },
            { 
                data: "coverimage" ,
                render: function (data) {
                    var imgsrc = data;
                    return '<img class="img-fluid" src="../commands/uploadMedia/' + imgsrc +'" alt="uploadMedia" style=" background-size: cover; object-fit: cover; background-position: center; width: 200px; height: 150px;">';
                }
            },
            {
                    data: "content" ,
                    render: function (data) {
                        var str = data; 
                        return str.substring(0,25)+'...';
                    } 
            },
            { 
                data: "datecreated" 
            },
            { 
                data: "id" ,
                render: function(data){
                    var id = data;
                    return('<button type="button" id="' + id + '" class="btn btn-primary btn-lg mx-2 editBtn" data-bs-toggle="modal" data-bs-target="#editModal"><i class="fa fa-pencil" aria-hidden="true"></i> </button><button type="button" id="' + id + '" class="btn btn-primary btn-lg mx-2 viewBtn" data-bs-toggle="modal" data-bs-target="#viewModal"><i class="fa fa-eye" aria-hidden="true"></i></button><button type="button" id="' + id + '" name="" id="" class="btn btn-danger mx-2 btn-lg btn-block delBtn"><i class="fa fa-trash" aria-hidden="true"></i></button>');

                }
            }
        ]
    });


    // delete from datatable
    $("body").on('click', '.delBtn', function (e) { 
        e.preventDefault();
        deleteUpload = $(this).attr('id');
        table = 'upload';
        Swal.fire({
          title: 'Delete',
          text: 'Are You Sure You Want To Delete This Post',
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Delete'
        }).then((result) => {
          if (result.isConfirmed) {
            //success
            $.ajax({
                type: "POST",
                url: "http://localhost/News-update/commands/upload/uploadDelete.php",
                data: { deleteUpload : deleteUpload, table: table },
                dataType: "json",
                success: function (response) {
                    // console.log(response)
                    if (response.result == 'successfull') {
                        Swal.fire({
                            icon: 'success',
                            title: "Post",
                            text: "Deleted Successfully",
                        }).then(function(){
                            $('#responsive-datatable').DataTable().ajax.reload();
                            // table.ajax.reload()
                        })
                    }
                }
            });
          }
        })
    });

    // fetch content for edit post
    $('body').on('click', '.editBtn', function(e){
        e.preventDefault();
        edit = $(this).attr('id');
        console.log(edit);
        $.ajax({
            type: "POST",
            url: "http://localhost/News-update/commands/upload/uploadFetchSingle.php",
            data: { fetchId : edit  },
            dataType: "json",
            success: function (response) {
                // console.log(response)
                $("#uploadId").val(response.data['id']);
                $("#blog_title").val(response.data['title']);
                $("#blog_Author").val(response.data['author']);
                $("#blog_category").val(response.data['category']);
                $("#oldMedia").val(response.data['coverimage']);
                 content = response.data['content'];
                $('.summernote2').summernote('code', content);

            }
        });

    })

    // update post api httprequest
    $("#editBlog").submit(function (e) {
        e.preventDefault();
        const request = new XMLHttpRequest();
        request.open("POST", "http://localhost/News-update/commands/upload/uploadUpdate.php")
        var myForm = document.getElementById("editBlog");
        var formData = new FormData(myForm);
        request.send(formData)

        request.onload = () => {
            $("#editElogBtn").html('<div class="spinner-border text-white mx-4"></div>');
            // console.log(request)
            data = JSON.parse(request.response);
            if (data.result) {
                $("#editElogBtn").text('Post Blog');
                    Swal.fire(
                        'Upload',
                        'Upload Edited Successfully',
                        'success'
                    ).then(function () {
                        $("#editBlog")[0].reset();
                        $("#editModal").modal('hide')
                        $('#responsive-datatable').DataTable().ajax.reload();
                    })
            }


            if (data.titleerr) {
                $("#editTitleerr").text(data.titleerr + ' *');
                if (data.titleerr == 'undefined') {
                    $("#editTitleerr").text(' ');
                }
            } else {
                $("#editTitleerr").text(' ');
            }

            if (data.authorerr) {
                $("#editAuthorerr").text(data.authorerr + ' *');
                if (data.authorerr == 'undefined') {
                    $("#editAuthorerr").text(' ');
                }
            } else {
                $("#editAuthorerr").text(' ');
            }

            if (data.categoryerr) {
                $("#editCategoryerr").text(data.categoryerr + ' *');
                if (data.categoryerr == 'undefined') {
                    $("#editCategoryerr").text(' ');
                }
            } else {
                $("#editCategoryerr").text(' ');
            }

            if (data.coverimageerr) {
                $("#editCoverimageerr").text(data.coverimageerr + ' *');
                if (data.coverimageerr == 'undefined') {
                    $("#editCoverimageerr").text(' ');
                }
            } else {
                $("#editCoverimageerr").text(' ');
            }

            if (data.contenterr) {
                $("#editContenterr").text(data.contenterr + ' *');
                if (data.contenterr == 'undefined') {
                    $("#editContenterr").text(' ');
                }
            } else {
                $("#editContenterr").text(' ');
            }
        }
    });
    // $('#editBlog').submit(function (e) { 
        //     e.preventDefault();
        //         $("#editElogBtn").html('<div class="spinner-border text-white mx-4"></div>');
        //         // $("#editElogBtn").attr('disabled', 'true');
        //     $.ajax({
        //         type: "POST",
        //         url: "http://localhost/News-update/commands/upload/uploadUpdate.php",
        //         contentType: false,
        //         processData: false,
        //         cache: false,
        //         data: new FormData(this),
        //         // dataType: "json",
        //         success: function (response) {
        //             console.log(response)
        //             data = JSON.parse(response)
        //             console.log(data);
        //             if (data.result) {
        //                 $("#editElogBtn").text('Post Blog');
        //                 $("#editElogBtn").attr('disabled', 'false');
        //                 Swal.fire(
        //                     'Upload',
        //                     'Upload Successfully',
        //                     'success'
        //                 ).then(function () {
        //                     $("#addModal").modal('hide')
        //                     $("#editBlog")[0].reset();
        //                     $("#editElogBtn").attr('disabled', 'false');
        //                     $('#responsive-datatable').DataTable().ajax.reload();
        //                 })
        //             }
        //         }
        //     });
        // });

    

});
