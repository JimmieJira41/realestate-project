$(document).ready(function () {
    $('.btn-create-new-record-building').click(function () {
        var title_building = $('.title_building').val();
        var price_building = $('.price_building').val();
        var description_building = $('.description_building').val();
        var location_building = $('.location_building').val();
        var map_building = $('.map_building').val();
        $.ajax({
            type: 'POST',
            url: './src/model/building_new_func.php',
            data: {
                title_building: title_building,
                price_building: price_building,
                description_building: description_building,
                location_building: location_building,
                map_building: map_building
            },
            dataType: "JSON",
            success: function (notify_create) {
                swal({
                    title: notify_create.title,
                    text: notify_create.text,
                    icon: notify_create.icon
                })
                    // .then((confirm) => {
                    //     location.reload()
                    // })
            }
        })
    });
    $('.btn-save-detail-building').click(function () {
        var id_building = $('.id_building').val();
        var title_building = $('.title_building').val();
        var price_building = $('.price_building').val();
        var description_building = $('.description_building').val();
        var location_building = $('.location_building').val();
        var map_building = $('.map_building').val();
        console.log(id_building);
        $.ajax({
            type: 'POST',
            url: './src/model/building_edit_func.php',
            data: {
                id_building: id_building,
                title_building: title_building,
                price_building: price_building,
                description_building: description_building,
                location_building: location_building,
                map_building: map_building
            },
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
                    $('.modal-building').html(
                        '<div class="title"><strong>Title building</strong><p>' + detail.title_building + '</p></div>' +
                        '<div class="price"><strong>Price building</strong><p>' + detail.price_building + '</p></div>' +
                        '<div class="description"><strong>Decription building</strong><p>' + detail.description_building + '</p></div>' +
                        '<div class="location"><strong>Location building</strong><p>' + detail.location_building + '</p></div>'
                    )
                    id_building = '';
                }
            })
        })
    })
    $('.btn-delete-building').click(function () {
        var id_building = $(this).val();
        // console.log(id_building);
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
                                    location.reload()
                                })
                        }
                    });
                } else {
                    alert('false');
                }
            })
    })

    $('.btn-create-estate').click(function () {
        var header = 'Create new record estate';
        $('#Modalestate').modal('show');
        $('.modal-estate').load('./src/view/estate_new_form.php');
        $('#Modalestate').on('shown.bs.modal', function () {
            $('.modal-title').text(header);
            $('.modal-footer').html(
                '<button type="cancel" class="btn btn-danger btn-cancel-new-record-estate text-uppercase">cancal</button>' +
                '<button type="submit" class="btn btn-info btn-create-new-record-estate text-uppercase">submit</button>'
            );
            $('.btn-create-new-record-estate').click(function () {
                var title_estate = $('.title_estate').val();
                var price_estate = $('.price_estate').val();
                var description_estate = $('.description_estate').val();
                var location_estate = $('.location_estate').val();
                console.log(title_estate);
                $.ajax({
                    type: 'POST',
                    url: './src/model/estate_new_func.php',
                    data: {
                        title_estate: title_estate,
                        price_estate: price_estate,
                        description_estate: description_estate,
                        location_estate: location_estate
                    },
                    dataType: "JSON",
                    success: function (notify_create) {
                        // alert(notify_create);
                        swal({
                            title: notify_create.title,
                            text: notify_create.text,
                            icon: notify_create.icon
                        })
                            .then((confirm) => {
                                location.reload()
                            })
                    }
                })
            })
            $('.btn-cancel-new-record-estate').click(function () {
                $('#Modalestate').modal('hide');
            });
        })
    });

    $('.btn-edit-estate').click(function () {
        var id_estate = $(this).val();
        console.log(id_estate);
        var header = 'Edit detail a estate';
        $('#Modalestate').modal('show');
        $('.modal-estate').load('./src/view/estate_new_form.php');
        $('#Modalestate').on('shown.bs.modal', function () {
            $('.modal-title').text(header);
            $.ajax({
                type: 'POST',
                url: './src/model/estate_fetch_detail_func.php',
                data: {
                    id_estate: id_estate
                },
                dataType: "JSON",
                success: function (detail) {
                    $('.title_estate').val(detail.title_estate);
                    $('.price_estate').val(detail.price_estate);
                    $('.description_estate').val(detail.description_estate);
                    $('.location_estate').val(detail.location_estate);
                    $('.modal-footer').html(
                        '<button type="cancel" class="btn btn-danger btn-cancel-detail-estate text-uppercase">cancal</button>' +
                        '<button type="submit" class="btn btn-info btn-save-detail-estate text-uppercase">submit</button>'
                    );

                    $('.btn-save-detail-estate').click(function () {
                        var title_estate = $('.title_estate').val();
                        var price_estate = $('.price_estate').val();
                        var description_estate = $('.description_estate').val();
                        var environment_estate = $('.environment_estate').val();
                        var location_estate = $('.location_estate').val();
                        console.log(id_estate);
                        $.ajax({
                            type: 'POST',
                            url: './src/model/estate_edit_func.php',
                            data: {
                                id_estate: id_estate,
                                title_estate: title_estate,
                                price_estate: price_estate,
                                description_estate: description_estate,
                                environment_estate: environment_estate,
                                location_estate: location_estate
                            },
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
                    })
                    $('.btn-cancel-detail-estate').click(function () {
                        $('#Modalestate').modal('hide');
                        // $('.title_estate').val('');
                        // $('.price_estate').val('')
                        // $('.description_estate').val('')
                        // $('.location_estate').val('')
                        // id_estate = '';                   
                    });
                }
            })
        })
        $('#Modalestate').on('hide.bs.modal', function () {
            $('.title_estate').val('');
            $('.price_estate').val('')
            $('.description_estate').val('')
            $('.location_estate').val('')
            id_estate = '';
        })
    });

    $('.btn-view-estate').click(function () {
        var id_estate = $(this).val();
        var header = 'View deatil a estate';
        $('#Modalestate').modal('show');
        $('#Modalestate').on('shown.bs.modal', function () {
            $('.modal-title').text(header);
            $.ajax({
                type: 'POST',
                url: './src/model/estate_fetch_detail_func.php',
                data: {
                    id_estate: id_estate
                },
                dataType: "JSON",
                success: function (detail) {
                    $('.modal-estate').html(
                        '<div class="title"><strong>Title estate</strong><p>' + detail.title_estate + '</p></div>' +
                        '<div class="price"><strong>Price estate</strong><p>' + detail.price_estate + '</p></div>' +
                        '<div class="description"><strong>Decription estate</strong><p>' + detail.description_estate + '</p></div>' +
                        '<div class="amenity"><strong>Amenity estate</strong><p>' + detail.amenity_estate + '</p></div>' +
                        '<div class="location"><strong>Location estate</strong><p>' + detail.location_estate + '</p></div>'
                    )
                    // $('.title_estate').text(detail.title_estate);
                    // $('.price_estate').text(detail.price_estate)
                    // $('.description_estate').text(detail.description_estate)
                    // $('.location_estate').text(detail.location_estate)
                    id_estate = '';
                }
            })
        })
    });

    $('.btn-delete-estate').click(function () {
        var id_estate = $(this).val();
        console.log(id_estate);
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

    $('.btn-create-amenity').click(function () {
        var header = 'Create new record amenity';
        $('#Modalamenity').modal('show');
        $('.modal-amenity').load('./src/view/amenity_form.php');
        $('#Modalamenity').on('shown.bs.modal', function () {
            $('.modal-title').text(header);
            $('.modal-footer').html(
                '<button type="cancel" class="btn btn-danger btn-cancel-new-record-amenity text-uppercase">cancal</button>' +
                '<button type="submit" class="btn btn-info btn-create-new-record-amenity text-uppercase">submit</button>'
            );
            $('.btn-create-new-record-amenity').click(function () {
                var title_amenity = $('.title_amenity').val();
                console.log(title_amenity);
                $.ajax({
                    type: 'POST',
                    url: './src/model/amenity_new_func.php',
                    data: {
                        title_amenity: title_amenity
                    },
                    dataType: "JSON",
                    success: function (notify_create) {
                        // alert(notify_create);
                        swal({
                            title: notify_create.title,
                            text: notify_create.text,
                            icon: notify_create.icon
                        })
                            .then((confirm) => {
                                location.reload()
                            })
                    }
                })
            })
            $('.btn-cancel-new-record-amenity').click(function () {
                $('#Modalamenity').modal('hide');
            });
        })
    });

    $('.btn-edit-amenity').click(function () {
        var id_amenity = $(this).val();
        console.log(id_amenity);
        var header = 'Edit detail a amenity';
        $('#Modalamenity').modal('show');
        $('.modal-amenity').load('./src/view/amenity_form.php');
        $('#Modalamenity').on('shown.bs.modal', function () {
            $('.modal-title').text(header);
            $.ajax({
                type: 'POST',
                url: './src/model/amenity_fetch_detail_func.php',
                data: {
                    id_amenity: id_amenity
                },
                dataType: "JSON",
                success: function (detail) {
                    $('.title_amenity').val(detail.title_amenity);
                    $('.modal-footer').html(
                        '<button type="cancel" class="btn btn-danger btn-cancel-detail-amenity text-uppercase">cancal</button>' +
                        '<button type="submit" class="btn btn-info btn-save-detail-amenity text-uppercase">submit</button>'
                    );

                    $('.btn-save-detail-amenity').click(function () {
                        var title_amenity = $('.title_amenity').val();
                        console.log(title_amenity);
                        $.ajax({
                            type: 'POST',
                            url: './src/model/amenity_edit_func.php',
                            data: {
                                id_amenity: id_amenity,
                                title_amenity: title_amenity
                            },
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
                    })
                    $('.btn-cancel-detail-amenity').click(function () {
                        $('#Modalamenity').modal('hide');
                    });
                }
            })
        })
        $('#Modalamenity').on('hide.bs.modal', function () {
            $('.title_amenity').val('');
            $('.price_amenity').val('')
            $('.description_amenity').val('')
            $('.location_amenity').val('')
            id_amenity = '';
        })
    });


    $('.btn-delete-amenity').click(function () {
        var id_amenity = $(this).val();
        console.log(id_amenity);
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
                        url: './src/model/amenity_del_func.php',
                        data: {
                            id_amenity: id_amenity
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

    $('.btn-create-environment').click(function () {
        var header = 'Create new record environment';
        $('#Modalenvironment').modal('show');
        $('.modal-environment').load('./src/view/environment_form.php');
        $('#Modalenvironment').on('shown.bs.modal', function () {
            $('.modal-title').text(header);
            $('.modal-footer').html(
                '<button type="cancel" class="btn btn-danger btn-cancel-new-record-environment text-uppercase">cancal</button>' +
                '<button type="submit" class="btn btn-info btn-create-new-record-environment text-uppercase">submit</button>'
            );
            $('.btn-create-new-record-environment').click(function () {
                var title_environment = $('.title_environment').val();
                console.log(title_environment);
                $.ajax({
                    type: 'POST',
                    url: './src/model/environment_new_func.php',
                    data: {
                        title_environment: title_environment
                    },
                    dataType: "JSON",
                    success: function (notify_create) {
                        // alert(notify_create);
                        swal({
                            title: notify_create.title,
                            text: notify_create.text,
                            icon: notify_create.icon
                        })
                            .then((confirm) => {
                                location.reload()
                            })
                    }
                })
            })
            $('.btn-cancel-new-record-environment').click(function () {
                $('#Modalenvironment').modal('hide');
            });
        })
    });

    $('.btn-edit-environment').click(function () {
        var id_environment = $(this).val();
        console.log(id_environment);
        var header = 'Edit detail a environment';
        $('#Modalenvironment').modal('show');
        $('.modal-environment').load('./src/view/environment_form.php');
        $('#Modalenvironment').on('shown.bs.modal', function () {
            $('.modal-title').text(header);
            $.ajax({
                type: 'POST',
                url: './src/model/environment_fetch_detail_func.php',
                data: {
                    id_environment: id_environment
                },
                dataType: "JSON",
                success: function (detail) {
                    $('.title_environment').val(detail.title_environment);
                    $('.modal-footer').html(
                        '<button type="cancel" class="btn btn-danger btn-cancel-detail-environment text-uppercase">cancal</button>' +
                        '<button type="submit" class="btn btn-info btn-save-detail-environment text-uppercase">submit</button>'
                    );

                    $('.btn-save-detail-environment').click(function () {
                        var title_environment = $('.title_environment').val();
                        console.log(title_environment);
                        $.ajax({
                            type: 'POST',
                            url: './src/model/environment_edit_func.php',
                            data: {
                                id_environment: id_environment,
                                title_environment: title_environment
                            },
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
                    })
                    $('.btn-cancel-detail-environment').click(function () {
                        $('#Modalenvironment').modal('hide');
                    });
                }
            })
        })
        $('#Modalenvironment').on('hide.bs.modal', function () {
            $('.title_environment').val('');
            id_environment = '';
        })
    });


    $('.btn-delete-environment').click(function () {
        var id_environment = $(this).val();
        console.log(id_environment);
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
                        url: './src/model/environment_del_func.php',
                        data: {
                            id_environment: id_environment
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
})