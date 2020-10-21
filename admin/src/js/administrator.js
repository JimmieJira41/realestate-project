$(document).ready(function () {
    $(function () {
        // Multiple images preview in browser
        var imagesPreview = function (input, placeToInsertImagePreview) {
            if (input.files) {
                $('h3.sign-input-image').html('');
                var filesAmount = input.files.length;
                for (i = 0; i < filesAmount; i++) {
                    var reader = new FileReader();
                    reader.onload = function (event) {
                        if (placeToInsertImagePreview == "div.img_main_preview") {
                            $($.parseHTML('<div class="position-absolute bg-warning" style="left:90%; width: 15px; height: 15px; z-index:1;"></div><img class="img-to-upload col-lx-4 col-lg-4 col-md-6 col-sm-12 col-12 m-0 p-0" style="font-size: 0 ;height: 100%">')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                        } else {
                            $($.parseHTML('<img class="img-to-upload col-lx-4 col-lg-4 col-md-6 col-sm-12 col-12 m-0 p-0" style="font-size: 0; height: 100%;">')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                        }
                    }
                    reader.readAsDataURL(input.files[i]);
                }
            }
        };
        $('#img_building_main').on('change', function (event) {
            $('div.img_main_preview').html('');
            imagesPreview(this, 'div.img_main_preview');
        });
        $('#img_building').on('change', function (event) {
            $('div.gallery').html('');
            imagesPreview(this, 'div.gallery');
        });
        $('#img_estate_main').on('change', function (event) {
            $('div.img_main_preview').html('');
            imagesPreview(this, 'div.img_main_preview');
        });
        $('#img_estate').on('change', function (event) {
            $('div.gallery').html('');
            imagesPreview(this, 'div.gallery');
        });
    });
    $('.btn-create-new-record-building-rent').click(function () {
        $.ajax({
            url: './src/model/building_new_func.php',
            type: 'POST',
            data: new FormData(document.getElementById('form-new-building')),
            contentType: false,
            processData: false,
            dataType: "JSON",
            success: function (notify_create) {
                swal({
                    title: notify_create.title,
                    text: notify_create.text,
                    icon: notify_create.icon
                })
                    .then((confirm) => {
                        location.replace('building.php');
                    })
            }
        })
    });
    $('.btn-create-new-record-building-sale').click(function () {
        $.ajax({
            url: './src/model/building_new_func.php',
            type: 'POST',
            data: new FormData(document.getElementById('form-new-building')),
            contentType: false,
            processData: false,
            dataType: "JSON",
            success: function (notify_create) {
                swal({
                    title: notify_create.title,
                    text: notify_create.text,
                    icon: notify_create.icon
                })
                    .then((confirm) => {
                        location.replace('building.php');
                    })
            }
        })
    });
    $('.btn-create-new-record-building-rentandsale').click(function () {
        $.ajax({
            url: './src/model/building_new_func.php',
            type: 'POST',
            data: new FormData(document.getElementById('form-new-building')),
            contentType: false,
            processData: false,
            dataType: "JSON",
            success: function (notify_create) {
                swal({
                    title: notify_create.title,
                    text: notify_create.text,
                    icon: notify_create.icon
                })
                    .then((confirm) => {
                        location.replace('building.php');
                    })
            }
        })
    });

    // edit detail building section

    $('.btn-save-record-building-rent').click(function () {
        $.ajax({
            type: 'POST',
            url: './src/model/building_edit_func.php',
            data: new FormData(document.getElementById('form-edit-building')),
            contentType: false,
            processData: false,
            // dataType: "JSON",
            success: function (notify_update) {
                alert(notify_update);
                // swal({
                //     title: notify_update.title,
                //     text: notify_update.text,
                //     icon: notify_update.icon
                // })
                //     .then((confirm) => {
                //         location.reload()
                //     })
            }
        })
    });

    $('.btn-save-record-building-sale').click(function () {
        $.ajax({
            type: 'POST',
            url: './src/model/building_edit_func.php',
            data: new FormData(document.getElementById('form-edit-building')),
            contentType: false,
            processData: false,
            dataType: "JSON",
            success: function (notify_update) {
                swal({
                    title: notify_update.title,
                    text: notify_update.text,
                    icon: notify_update.icon
                })
                    .then((confirm) => {
                        location.reload()
                    })
            }
        })
    });

    $('.btn-save-record-building-rentandsale').click(function () {
        $.ajax({
            type: 'POST',
            url: './src/model/building_edit_func.php',
            data: new FormData(document.getElementById('form-edit-building')),
            contentType: false,
            processData: false,
            dataType: "JSON",
            success: function (notify_update) {
                swal({
                    title: notify_update.title,
                    text: notify_update.text,
                    icon: notify_update.icon
                })
                    .then((confirm) => {
                        location.reload()
                    })
            }
        })
    });

    // view detail building section 

    $('.btn-view-building').click(function () {
        var id_building = $(this).val();
        console.log(id_building);
        var header = 'View deatil a building';
        $('#Modalbuilding').modal('show');
        $('#Modalbuilding').on('shown.bs.modal', function () {
            $('.modal-title').text(header);
            $.ajax({
                type: 'POST',
                url: './src/model/building_fetch_detail_func.php',
                data: {
                    id_building: id_building
                },
                dataType: "JSON",
                success: function (detail) {
                    if (detail.id_type == 1) {
                        $('.modal-building').html(
                            '<div class="title"><strong>Title building</strong><p>' + detail.title_building + '</p></div>' +
                            '<div class="price"><strong>Price building</strong><p>' + detail.price_building_minimum + '</p></div>' +
                            '<div class="price"><strong>Price building</strong><p>' + detail.price_building_maximum + '</p></div>' +
                            '<div class="description"><strong>Decription building</strong><p>' + detail.description_building + '</p></div>' +
                            '<div class="location"><strong>Location building</strong><p>' + detail.location_building + '</p></div>' +
                            '<div class="location"><strong>Location building</strong><p>' + detail.map_building + '</p></div>'
                        )
                    } else if (detail.id_type == 2) {
                        $('.modal-building').html(
                            '<div class="title"><strong>Title building</strong><p>' + detail.title_building + '</p></div>' +
                            '<div class="price"><strong>Price building</strong><p>' + detail.price_building_sale + '</p></div>' +
                            '<div class="description"><strong>Decription building</strong><p>' + detail.description_building + '</p></div>' +
                            '<div class="location"><strong>Location building</strong><p>' + detail.location_building + '</p></div>' +
                            '<div class="location"><strong>Location building</strong><p>' + detail.map_building + '</p></div>'
                        )
                    } else {
                        $('.modal-building').html(
                            '<div class="title"><strong>Title building</strong><p>' + detail.title_building + '</p></div>' +
                            '<div class="price"><strong>Price building</strong><p>' + detail.price_building_sale + '</p></div>' +
                            '<div class="price"><strong>Price building</strong><p>' + detail.price_building_minimum + '</p></div>' +
                            '<div class="price"><strong>Price building</strong><p>' + detail.price_building_maximum + '</p></div>' +
                            '<div class="description"><strong>Decription building</strong><p>' + detail.description_building + '</p></div>' +
                            '<div class="location"><strong>Location building</strong><p>' + detail.location_building + '</p></div>' +
                            '<div class="location"><strong>Location building</strong><p>' + detail.map_building + '</p></div>'
                        )
                    }

                    id_building = '';
                }
            })
        })
    });

    // delete detail building section 

    $('.btn-delete-building').click(function () {
        var id_building = $(this).val();
        swal({
            title: 'Are you sure ?',
            text: 'You can not recover your data after you confirm delete this data !',
            icon: 'warning',
            buttons: true,
            dangerMode: true
        })
            .then((confirm) => {
                if (confirm) {
                    $.ajax({
                        type: 'POST',
                        url: './src/model/building_del_func.php',
                        data: {
                            id_building: id_building
                        },
                        dataType: "JSON",
                        success: function (notify_delete) {
                            swal({
                                title: notify_delete.title,
                                text: notify_delete.text,
                                icon: notify_delete.icon
                            })
                                .then((confirm) => {
                                    location.reload();
                                })
                        }
                    });
                }
            })
    })

    // create detail estate section

    $('.btn-create-new-record-estate-rent').click(function () {
        $.ajax({
            type: 'POST',
            url: './src/model/estate_new_func.php',
            data: new FormData(document.getElementById('form-new-estate')),
            contentType: false,
            processData: false,
            dataType: "JSON",
            success: function (notify_create) {
                swal({
                    title: notify_create.title,
                    text: notify_create.text,
                    icon: notify_create.icon
                })
                    .then((confirm) => {
                        location.replace('estate.php')
                    })
            }
        })
    });

    $('.btn-create-new-record-estate-sale').click(function () {
        $.ajax({
            type: 'POST',
            url: './src/model/estate_new_func.php',
            data: new FormData(document.getElementById('form-new-estate')),
            contentType: false,
            processData: false,
            dataType: "JSON",
            success: function (notify_create) {
                swal({
                    title: notify_create.title,
                    text: notify_create.text,
                    icon: notify_create.icon
                })
                    .then((confirm) => {
                        location.replace('estate.php');
                    })
            }
        })
    });

    $('.btn-create-new-record-estate-rentandsale').click(function () {
        $.ajax({
            type: 'POST',
            url: './src/model/estate_new_func.php',
            data: new FormData(document.getElementById('form-new-estate')),
            contentType: false,
            processData: false,
            dataType: "JSON",
            success: function (notify_create) {
                swal({
                    title: notify_create.title,
                    text: notify_create.text,
                    icon: notify_create.icon
                })
                    .then((confirm) => {
                        location.replace('estate.php')
                    })
            }
        })
    });

    // edit detail estate section

    $('.btn-save-record-estate-rent').click(function () {
        $.ajax({
            type: 'POST',
            url: './src/model/estate_edit_func.php',
            data: new FormData(document.getElementById('form-edit-estate')),
            contentType: false,
            processData: false,
            dataType: "JSON",
            success: function (notify_update) {
                swal({
                    title: notify_update.title,
                    text: notify_update.text,
                    icon: notify_update.icon
                })
                    .then((confirm) => {
                        location.reload()
                    })
            }
        })
    });

    $('.btn-save-record-estate-sale').click(function () {
        $.ajax({
            type: 'POST',
            url: './src/model/estate_edit_func.php',
            data: new FormData(document.getElementById('form-edit-estate')),
            contentType: false,
            processData: false,
            dataType: "JSON",
            success: function (notify_update) {
                swal({
                    title: notify_update.title,
                    text: notify_update.text,
                    icon: notify_update.icon
                })
                    .then((confirm) => {
                        location.reload()
                    })
            }
        })
    });

    $('.btn-save-record-estate-rentandsale').click(function () {
        $.ajax({
            type: 'POST',
            url: './src/model/estate_edit_func.php',
            data: new FormData(document.getElementById('form-edit-estate')),
            contentType: false,
            processData: false,
            dataType: "JSON",
            success: function (notify_update) {
                swal({
                    title: notify_update.title,
                    text: notify_update.text,
                    icon: notify_update.icon
                })
                    .then((confirm) => {
                        location.reload()
                    })
            }
        })
    });

    // view detail estate section

    $('.btn-view-estate').click(function () {
        var id_estate = $(this).val();
        var header = 'View deatil a estate';
        $('#Modalestate').modal('show');
        $('#Modalestate').on('shown.bs.modal', function () {
            $('.modal-title').text(header);
            $.ajax({
                type: 'POST',
                url: './src/model/estate_fetch_detail_for_view_func.php',
                data: {
                    id_estate: id_estate
                },
                dataType: "JSON",
                success: function (detail) {
                    if (detail.id_type == 1) {
                        $('.modal-estate').html(
                            '<div class="title"><strong>Title estate</strong><p>' + detail.title_estate + '</p></div>' +
                            '<div class="price"><strong>Price estate</strong><p>' + detail.price_estate_minimum + '</p></div>' +
                            '<div class="price"><strong>Price estate</strong><p>' + detail.price_estate_maximum + '</p></div>' +
                            '<div class="description"><strong>Decription estate</strong><p>' + detail.description_estate + '</p></div>' +
                            '<div class="location"><strong>Location estate</strong><p>' + detail.location_estate + '</p></div>' +
                            '<div class="location"><strong>Location estate</strong><p>' + detail.map_estate + '</p></div>'
                        )
                    } else if (detail.id_type == 2) {
                        $('.modal-estate').html(
                            '<div class="title"><strong>Title estate</strong><p>' + detail.title_estate + '</p></div>' +
                            '<div class="price"><strong>Price estate</strong><p>' + detail.price_estate_sale + '</p></div>' +
                            '<div class="description"><strong>Decription estate</strong><p>' + detail.description_estate + '</p></div>' +
                            '<div class="location"><strong>Location estate</strong><p>' + detail.location_estate + '</p></div>' +
                            '<div class="location"><strong>Location estate</strong><p>' + detail.map_estate + '</p></div>'
                        )
                    } else {
                        $('.modal-estate').html(
                            '<div class="title"><strong>Title estate</strong><p>' + detail.title_estate + '</p></div>' +
                            '<div class="price"><strong>Price estate</strong><p>' + detail.price_estate_sale + '</p></div>' +
                            '<div class="price"><strong>Price estate</strong><p>' + detail.price_estate_minimum + '</p></div>' +
                            '<div class="price"><strong>Price estate</strong><p>' + detail.price_estate_maximum + '</p></div>' +
                            '<div class="description"><strong>Decription estate</strong><p>' + detail.description_estate + '</p></div>' +
                            '<div class="location"><strong>Location estate</strong><p>' + detail.location_estate + '</p></div>' +
                            '<div class="location"><strong>Location estate</strong><p>' + detail.map_estate + '</p></div>'
                        )
                    }
                    id_estate = '';
                }
            })
        })
    });

    $('.btn-delete-estate').click(function () {
        var id_estate = $(this).val();
        swal({
            title: 'Are you sure ?',
            text: 'You can not recover your data after you confirm delete this data !',
            icon: 'warning',
            buttons: true,
            dangerMode: true
        })
            .then((confirm) => {
                if (confirm) {
                    $.ajax({
                        type: 'POST',
                        url: './src/model/estate_del_func.php',
                        data: {
                            id_estate: id_estate
                        },
                        dataType: "JSON",
                        success: function (notify_delete) {
                            swal({
                                title: notify_delete.title,
                                text: notify_delete.text,
                                icon: notify_delete.icon
                            })
                                .then((confirm) => {
                                    location.reload()
                                })
                        }
                    });
                } else {
                    alert('false');
                }
            })
    })
});