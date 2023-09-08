// const range = document.getElementById('range');
// const datepicker = new CarbonComponents.DatePicker(range, {inline: true, static: true});

$('.popclose').click(function () {
    $('.popupContainer').fadeOut();
})
$('.custom-select').each(function () {
    setupSelector($(this));
});
$('body').on('click', '.service-selector', function(){
    $(this).toggleClass('open');
});

$('body').on('click', '.item', function(){
    $(this).toggleClass('checked');
});

var tm_category_list = '';
var tm_sub_category_list = '';

function show_userinfo_sec() {
    $('.uinfo_card').addClass('active');
    $('.protemp_card').removeClass('active');
    $('.info_form').show();
    $('.protemp_form').hide();
    municipality_select();
}

function show_prftemp_sec() {
    $('.protemp_card').addClass('active');
    $('.uinfo_card').removeClass('active');
    $('.info_form').hide();
    $('.protemp_form').show();
}

function serv_for_fx_inp(){
    $('#serv_for_btn').show();
    $('.serv_for_fx_inp').attr("disabled",false);
}

function serv_for_des_inp(){
    $('#des_serv_for_btn').show();
    $('.serv_for_des_inp').attr("disabled",false);
}

$(document).ready(function() {
    // console.log($('#template_type').val());
    if ($('#template_type').val() == 'd') {
        show_des_loc_sec();
    } else {
        show_fixed_loc_detail();
    }

    $('#is_km_allowance').on('change', function() {
        if ($(this).prop('checked') === true) {
            $('#km_allowance').show();
        } else {
            $('#km_allowance').hide().val('');
        }
    });

    $('.des_loc_type').on('change', function() {
        $('#des_form_submit2').hide();
        if ($('.des_loc_type:checked').val() == 'everywhere') {
            $('.add_province_sec, #des_add_prov_btn, #des_add_prov_edit_btn').hide();
            if ($('#des_form_submit2').attr('data-e') == 1)
                $('#des_form_submit2').hide();
            else
                $('#des_form_submit2').show();

            $('#des_specific_prov_sec').hide();
        } else {
            $('#des_specific_prov_sec').show();
            $('#des_form_submit2').hide();
            // $('#des_add_prov_btn').show();
            // $('#des_add_prov_edit_btn').show();
            // $('.add_province_sec').show();
            $('#des_province').val('').attr('disabled', false);
            $('.sel_mun_list').html('');
            $('#des_frm2').find('input[name="act"]').val('add');
            $('#des_frm2').find('input#lid').val('');
            if ($('#des_form_submit2').attr('data-s') == '1' && $('#des_form_submit2').attr('data-e') == 1) {
                $('#des_form_submit2').show();
            }
        }
    })

    $('body').on('click', '.checked_all', function(){
        var name = $(this).data("name");
        var value = $(this).data("value");
        if (name == "all"){
            if ($(this).hasClass("checked") == true){
                $("."+value).addClass("checked");
            }else{
                $("."+value).removeClass("checked");
            }
        } else{
            if ($("."+name).length == $("."+name+".checked").length){
                $("."+value).addClass("checked");
            }else{
                $("."+value).removeClass("checked");
            }
        }
    });


    $('.price_type_inp').on('change', function() {
        if ($('.price_type_inp').val() == 'f') {
            $('#serv_p_typ1').show();
            $('#serv_p_typ2').hide();
        } else {

            $('#serv_p_typ1').hide();
            $('#serv_p_typ2').show();
        }
    });

    $('#is_discount').on('change', function() {
        if ($(this).prop('checked') === true) {
            $('.discount_sec').show();
        } else {
            $('.discount_sec').hide();
        }
    });
    $('#serv_d_typ1').hide();
    $('#serv_d_typ2').hide();
    $('.discount_inp').on('change', function() {
        var selectedValue = $(this).val();
        if (selectedValue == '') {
            $('#serv_d_typ1').hide();
            $('#serv_d_typ2').hide();
        } else if (selectedValue == 'f') {
            $('#serv_d_typ1').show();
            $('#serv_d_typ2').hide();
        } else if (selectedValue == 'p') {
            $('#serv_d_typ1').hide();
            $('#serv_d_typ2').show();
        }
    });


    $("#doc-reg-coc").on('change', function() {
        var rtn = ValidateSize(this, 'doc-reg-coc');
        if (rtn != 0)
            readURL(this, 'doc-reg-coc');
    });

    $("#fixed_pic").on('change', function() {
        var rtn = ValidateSize(this, 'fixed_pic');
        if (rtn != 0)
            readURL(this, 'fixed_pic');
    });

    $("#desire_pic").on('change', function() {
        var rtn = ValidateSize(this, 'desire_pic');
        if (rtn != 0)
            readURL(this, 'desire_pic');
    });

    $("#team_mem_img").on('change', function() {
        var rtn = ValidateSize(this, 'team_mem_img');
        if (rtn != 0)
            readURL(this, 'team_mem_img');
    });

    $("#visual_img").on('change', function() {
        var fcnt = ($(this)[0].files.length);
        if (fcnt > 0) {
            $('#vis_img_sct').html(fcnt + ' files selected');
        } else {
            $('#vis_img_sct').html('{{$lang_kwords["choose_visual"]["english"]}}');
        }

        return;
    });

    $('.des_loc_lbl').each(function() {
        if ($(this).attr('data-v') == 'Everywhere') {
            // $('.des_loc_type_sec').hide();
            $('#des_add_prov_btn').hide();
            $('#des_add_prov_edit_btn').hide();
            // $('.des_loc_main_sec').hide().removeClass('d-flex');
            $('.des_loc_main_sec_' + $(this).attr('data-i')).hide().removeClass('d-flex');
            $('#des_serv_lc_e').prop('checked', true);
            $('#des_serv_lc_s').prop('checked', false);
            $('#des_form_submit2').attr('data-e', '1');
            $('#des_specific_prov_sec').hide();
        } else {
            $('#des_serv_lc_e').prop('checked', false);
            $('#des_serv_lc_s').prop('checked', true);
            $('#des_serv_lc_s').prop('checked', true);
            $('#des_add_prov_btn').show();
            $('#des_add_prov_edit_btn').show();
            $('#des_form_submit2').attr('data-s', '1');
            $('#des_specific_prov_sec').show();
        }
    })

    // $('.serv_for_fx_inp').on('change', function() {
    //     $('#serv_for_btn').show();
    // })

    $('.serv_for_des_inp').on('change', function() {
        $('#des_serv_for_btn').show();
    })

    $('#team_member_chkbox').on('click', function() {

        if ($("#team_mem_f").prop('checked') === true)
            var f = 'Y';
        else
            var f = 'N';

        $("#team_mem_f").attr('disabled', true);

        var el = $("#team_mem_f");

        // $('#modalajx').modal('show');
        $.ajax({
            url: "../salon_ajx",
            type: "post",
            data: {
                'act': 'team_meme_f',
                '_token': '{{ csrf_token() }}',
                'f': f
            },
            dataType: 'json',
            success: function(r) {
                el.attr('disabled', false);
                $("#team_mem_f").attr("disabled",true);
                $('#team_member_chkbox').hide();
                // $('#modalajx').modal('hide');
            },
            error: function() {
                el.attr('disabled', false);
                // $('#modalajx').modal('hide');
            }
        })
    })

});

function copy_desire() {
    swal(
        '{{$lang_kwords["copy_template_msg"]["english"]}}', {
            buttons: {
                cancel: "{{$lang_kwords['alert_cancel']['english']}}",
                catch: {
                    text: "{{$lang_kwords['alert_ok']['english']}}",
                },
                defeat: false,
            },
        }
    )
        .then((value) => {
            switch (value) {

                case "defeat":
                    swal("Got away safely!");
                    break;

                case "catch":
                    copy_desire_act();
                    break;

                default:
                    // swal("Got away safely!");
                    return false;
            }
        });
}

function copy_desire_act() {

    // if(!confirm('{{$lang_kwords["copy_template_msg"]["english"]}}'))return true;

    $('#copy_btn').attr('disabled', true);

    // return;

    $.ajax({
        url: "../salon_ajx",
        type: 'post',
        data: {
            'act': 'copy_desire',
            '_token': '{{ csrf_token() }}',
            'temp_type': $('#template_type').val()
        },
        dataType: 'json',
        success: function(r) {
            $('#copy_btn').val('Copied').attr('disabled', true);
            // swal("Copied");
            location.reload();
        },
        error: function(e) {
            alert("Something went wrong");
        }
    })
}

function edit_oprating_area_form() {
    $("#des_serv_lc_e").attr("disabled",false);
    $("#des_serv_lc_s").attr("disabled",false);
    $('#des_serv_lc_e').prop('checked', true);
    $('#des_form_submit2').show();
    $('#des_add_prov_edit_btn').hide();
    $('#des_specific_prov_sec').hide();
}

function edit_oprating_area_form1() {
    $("#des_serv_lc_e").attr("disabled",false);
    $("#des_serv_lc_s").attr("disabled",false);
    // $('#des_serv_lc_e').prop('checked', true);
    $('#des_form_submit2').show();
    $('#des_add_prov_edit_btn').hide();
    $('#des_specific_prov_sec').hide();
}
function enable_team_member_chkbox() {
    $("#team_mem_f").attr("disabled",false);
    $('#team_member_chkbox').show();
}

function setupSelector(selector) {
    selector.on('change', function (e) {
        console.log('changed', e.target.value);
    });

    selector.on('mousedown', function (e) {
        if (window.innerWidth >= 420) { 
            e.preventDefault();
            const select = selector.children().eq(0);
            const dropDown = $('<ul>').addClass('selector-options');

            select.children().each(function () {
                const option = $(this);
                const dropDownOption = $('<li>').text(option.text());

                dropDownOption.on('mousedown', function (e) {
                    e.stopPropagation();
                    select.val(option.val());
                    selector.val(option.val());
                    select.trigger('change');
                    selector.trigger('change');
                    dropDown.remove();
                });

                dropDown.append(dropDownOption);
            });
            if (selector.children().length == 2){
                $(".selector-options").remove()
                return false;
            }
            selector.append(dropDown);

            // handle click out
            $(document).on('click', function (e) {
                if (!selector.is(e.target) && !selector.has(e.target).length) {
                    dropDown.remove();
                }
            });
        }
    });
}

function info_verify(temp_type) {
    if (temp_type == 'f') {
        var fna = $('#fixed_name').val();
        if ($.trim(fna) == '') {
            $('#fixed_name').focus();
            return false;
        }
        $('.fix_reg_btn').attr('disabled', true);
    } else {
        var fna = $('#desire_name').val();
        if ($.trim(fna) == '') {
            $('#desire_name').focus();
            return false;
        }
        $('.des_reg_btn').attr('disabled', true);
    }

    $.ajax({
        url: "../salon_ajx",
        type: 'post',
        data: {
            'act': 'info_verify',
            'temp_type': temp_type,
            '_token': '{{ csrf_token() }}'
        },
        dataType: 'json',
        success: function(r) {
            if (temp_type == 'f')
                $('.fix_reg_btn').val('{{$lang_kwords["info_verify_submit"]["english"]}}');
            else
                $('.des_reg_btn').val('{{$lang_kwords["info_verify_submit"]["english"]}}');

            // $('#myModalImg1').modal('show');
        },
        error: function(e) {
            alert("Something went wrong");
        }
    })
}

function save_des_service_for() {
    var tmp_type = $('#template_type').val();


    $('#des_serv_for_btn').attr('disabled', true);

    var all_gender = 0;
    var men = 0;
    var women = 0;
    var kids = 0;
    if ($('#des_all_gender_chk').prop('checked') === true)
        all_gender = 1;
    if ($('#des_men_chk').prop('checked') === true)
        men = 1;
    if ($('#des_women_chk').prop('checked') === true)
        women = 1;
    if ($('#des_kids_chk').prop('checked') === true)
        kids = 1;


    $.ajax({
        url: "../salon_ajx",
        type: 'post',
        data: {
            'act': 'update_service_for',
            'all_gender': all_gender,
            'men': men,
            'women': women,
            'kids': kids,
            '_token': '{{ csrf_token() }}',
            'temp_type': 'd'
        },
        dataType: 'json',
        success: function(r) {
            $('#des_serv_for_btn').html('Save').attr('disabled', false);
            $('#des_serv_for_btn').hide();
            $('.serv_for_des_inp').attr("disabled",true);
        },
        error: function(e) {
            $('#des_serv_for_btn').html('Save').attr('disabled', false);
            alert("Something went wrong");
        }
    })

}

function add_more_d_location() {
    var cat_html = '';
    var length_of_province = `{{ count($province) }}`;
    var html_id = "text_" + Date.now()+Math.floor((Math.random() * 9999999) + 1);
    cat_html += `
        <div class="d-flex mt-2 align-items-center justify-content-between srv des_loction" id="`+html_id+`">
                <input type"text" class="d-none" name="table_id" value="">
                <div class="d-flex gap-1">
                    <div class="px-0">
                        <label class="custom-select custom-select-address">
                            <select class="mollure-select-address frmto temp_ct" name="des_province" id="des_province`+html_id+`" onchange="get_municiplaity('`+html_id+`','`+html_id+`')">
                            <option value="">{{$lang_kwords['select']['english']}} {{$lang_kwords['province']['english']}}</option>
                            @foreach($province as $k=>$v)
                                <option data-i="{{$v->id}}" value="{{$v->name}}">{{$v->name}}</option>
                            @endforeach
                            </select>
                        </label>
                    </div>
                    <div class=" px-0">
                        <div class="services-container position-relative">
                            <div class="service-selector d-flex justify-content-between align-items-center p-3">
                                <p class="mb-0">{{$lang_kwords['select']['english']}} {{$lang_kwords['municipality']['english']}}</p>
                                <img src="{{ URL::asset('public/images/model/select-down-arrow.svg')}}" alt="">
                            </div>
                            <ul class="service-items position-absolute des_municipality" id="des_municipality`+html_id+`">
                            <li class="item d-flex justify-content-between align-items-center temp_municipality">{{$lang_kwords['select']['english']}} {{$lang_kwords['province']['english']}} for {{$lang_kwords['municipality']['english']}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <span type="button" class="dlt_btn" onclick="remove_html('`+html_id+`')">
                    <img src="{{ URL::asset('public/images/model/trash.svg')}}" alt="">
                </span>
            </div>`;
    $(".adddlocation").append(cat_html);
    $('#'+html_id).find('.custom-select').each(function () {
        setupSelector($(this));
    });
    $(".adddlocation .temp_ct").each(function () {
        var des_province = $(this).val();
        if (des_province != ""){
            $('#'+html_id).find('.custom-select option[value='+des_province+']').remove();
        }
    })

    if (length_of_province == $(".adddlocation .temp_ct").length){
        $("#addprovince_btn_p").hide();
    }
}

function show_des_detail() {

    $('#des_all_gender_chk').prop('checked', false);
    $('#des_men_chk').prop('checked', false);
    $('#des_women_chk').prop('checked', false);
    $('#des_kids_chk').prop('checked', false);
    $('.team_mem_lst_sec, .visual_lst_sec').html('');
    $('#team_mem_f_sec').hide();
    $('.salon_cate_sec').html('');
    $('#gen_note_txt').val('');
    $('.des_salon_serv_for_sec,.sub_tem_fix_sec,.salon_cate_sec,.salon_note_sec,.team_mem_sec,.visual_sec').hide();
    $('.tbody').html('');
    $('.salon_cate_dt_sec,#copy_btn,#frm3').hide();

    /*if(sname!='')
    $('#tem_title').html(sname+' Template');
    else
    $('#tem_title').html('Location Template');*/


    // $('#modalajx').modal('show');


    // window.history.replaceState(null, null, "?arg=123");
    set_url('d');

    $.ajax({
        url: "../salon_ajx",
        type: 'post',
        data: {
            'act': 'get_des_loc_detail',
            '_token': '{{ csrf_token() }}'
        },
        dataType: 'json',
        success: function(r) {
            if (r.status == 'SUCCESS') {
                var salon = r.salon;
                var services = r.services;
                var team = r.team;
                var visual = r.visual;
                var categories = r.categories;

                if (salon.all_gender == '1')
                    $('#des_all_gender_chk').prop('checked', true);
                if (salon.men == '1')
                    $('#des_men_chk').prop('checked', true);
                if (salon.women == '1')
                    $('#des_women_chk').prop('checked', true);
                if (salon.kids == '1')
                    $('#des_kids_chk').prop('checked', true);

                var cate_str = '<div class="" style="justify-content: space-between;display: flex;flex-wrap:wrap">';
                $.each(categories, function(k, v) {
                    if (k == 0) var cls = 'active';
                    else var cls = '';
                    cate_str += '<div class="cate_sec mb-3 cate_sec_' + v.id + '" onclick="show_salon_cate_detail(\'d\', \'' + v.id + '\' ,\'' + v.name + '\',\'0\')" data-cate="' + v.name + '"><div class="cate_cards shadow p-2 sub-temp-fixed-loc-card ' + cls + '" id="cate_card_' + v.id + '">';
                    // console.log(v.image);
                    if (v.image != '' && v.image !== null)
                        cate_str += '<img src="{{asset("public/imgs/category/")}}/' + v.image + '" style="width:auto;max-width:100%;">';
                    else
                        cate_str += '<img src="{{asset("public/imgs/placeholder-img.jpg")}}" style="width:auto;max-width:100%;">';

                    cate_str += '<span>' + v.name + '</span>';


                    cate_str += '</div></div>';

                });
                cate_str += '</div>';
                show_salon_cate_detail('d', categories[0].id, categories[0].name, '0');

                var team_str = '';
                if (team != '' && team.length > 0) {
                    team_str = create_team_sec(team);
                    $('#team_mem_f_sec').show();
                    /*var team_str='';
            team_str+="<div style='' class='border row mb-3'>";
            $.each(team,function(k,v){

                team_str+="<div class='border col-12 col-sm-5 col-md-3 mb-3 me-2 p-2' id='tm_sec_"+v.id+"' style='    position: relative;'>";
                team_str+="<p class='mb-4'>\""+v.bio+"\"</p>";
                team_str+="<div class='d-flex' style='align-items: flex-end;    height: 55px;margin-bottom: 37px;'>";
                  team_str+="<div class='mb-2 me-2'>";
                    if(v.image!='' && v.image!==null)
                      team_str+='<img src="{{asset("public/imgs/team/")}}/'+v.image+'" style="border: 1px solid #b1abab;width:50px;height: 50px;border-radius:35px">';
                    else
                      team_str+='<img src="{{asset("public/imgs/placeholder-img.jpg")}}" style="border: 1px solid #b1abab;height: 50px;width:50px;border-radius:35px">';
                  team_str+="</div>";

                  team_str+="<div class='mb-2'>";
                    team_str+="<p>"+v.member+"</p>";
                  team_str+="</div>";

                team_str+="</div>";

                team_str+='<p style="    position: absolute;right: 10px;bottom: 0;"><i class="ri-edit-box-line cursor-pointer" onclick="edit_team_member(\''+v.id+'\')"></i> &nbsp; <i class="ri-delete-bin-line text-danger cursor-pointer" onclick="delete_team_member(\''+v.id+'\')"></i></p>';


                team_str+="</div>";
            });

            team_str+="</div>";
            $('.team_mem_lst_sec').html(team_str);*/
                }
                $('.team_mem_lst_sec').html(team_str);

                if (visual != '' && visual.length > 0) {
                    var visual_str = '';
                    visual_str += "<div style='' class='row mb-3'>";
                    $.each(visual, function(k, v) {
                        if (v.visual != '' && v.visual !== null) {
                            visual_str += "<div class=' col-6 col-sm-4 col-md-3 mb-3' id='vis_sec_" + v.id + "'>";
                            visual_str += "<div class='border-custom d-flex align-items-center' style='position: relative;height: 100%;'>";
                            visual_str += "<p class='vis_sel_p' ><label class='custom_check'><input type='checkbox' name='vis_radio' class='vis_radio' value='" + v.id + "'> <span class='checkmark'></span></label></p>";
                            visual_str += '<img src="' + v.visual + '" style="max-width:100%;max-height: 100%;border-radius:8px">';
                            visual_str += "</div>";
                            visual_str += "</div>";
                        }
                    });

                    visual_str += "</div>";
                    $('.visual_lst_sec').html(visual_str);
                } else {
                    $('.visual_lst_sec').html(visual_str);
                }


                $('.salon_cate_sec').html(cate_str);
                $('#gen_note_txt').val(salon.note);

                $('.des_salon_serv_for_sec,.sub_tem_fix_sec,.salon_cate_sec,.salon_note_sec,.team_mem_sec,.visual_sec,#copy_btn').show();

                $('#copy_btn').val('{{$lang_kwords["copy-to-fixed-location"]["english"]}}');
            }
            if (r.status == 'ERROR') {
                alert('Something went wrong. Please contact');
            }

            /*setTimeout(function(){
      $('#modalajx').modal('hide');
    },1000);*/
        },
        error: function() {
            setTimeout(function() {
                $('#modalajx').modal('hide');
            }, 2000);
            alert('Something went wrong. Please contact');
        }
    });
    $('#template_id').val(sid);


}


function des_form_validate2() {
    var form_data = new Array;
    var loc_type = $('.des_loc_type:checked').val();
    var fc = 1;
    $('.adddlocation .des_loction').each(function() {
        var municipality = '';
        if (loc_type == 'everywhere') {
            var des_province = '';
        } else {
            var des_province = $(this).find("select[name=des_province]").val();

            if ($(this).find('#des_form_submit2').attr('data-s') == '1' && $(this).find('#des_form_submit2').attr('data-e') == 1) {
                var fc = 0;
            } else {
                if ($.trim(des_province) == '') {
                    $(this).find("select[name=des_province]").focus();
                    return false;
                }
            }
            if ($.trim(des_province) != '') {
                fc = 1;
            }

            var municipality = new Array;
            if ($(this).find('.temp_municipality').length != $(this).find('.temp_municipality.checked').length){
                if ($(this).find('.temp_municipality').length > 0) {
                    if ($(this).find('.temp_municipality.checked').length == 0){
                        alert("Pls select municipality");
                        return  false;
                    } else{
                        $(this).find('.temp_municipality.checked').each(function() {
                            var munc = $(this).find('span').text();
                            municipality.push(munc);
                        })
                    }
                }
            }
        }
        var obj = {};
        obj['province'] = des_province;
        obj['municipality'] = municipality;
        obj['id'] = $(this).find("input[name=table_id]").val();;
        form_data.push(obj);
    });

    $('#des_form_submit2').attr('disabled', true);


    if ($('#des_frm2').find('input[name="act"]').val() == 'add') {

        $.ajax({
            url: "{{route('desire_add_province')}}",
            type: 'post',
            data: {
                'act': 'add_province',
                // 'province': des_province,
                // 'municipality': municipality,
                'data': form_data,
                'loc_type': loc_type,
                '_token': '{{ csrf_token() }}',
                'fc': fc
            },
            dataType: 'json',
            success: function(r) {
                $('#des_form_submit2').html('Save').attr('disabled', false);
                if (r.status == 'SUCCESS') {
                    $('#spn_des_frm2').show();
                    location.reload();
                }
                if (r == 'ERR') {
                    alert('Something went wrong. Please contact');
                }
            }
        });
    }
    if ($('#des_frm2').find('input[name="act"]').val() == 'edit') {
        $.ajax({
            url: "{{route('desire_add_province')}}",
            type: 'post',
            data: {
                'act': 'edit_province',
                // 'province': des_province,
                // 'municipality': municipality,
                'data': form_data,
                'loc_type': loc_type,
                '_token': '{{ csrf_token() }}',
                'lid': $('#lid').val()
            },
            dataType: 'json',
            success: function(r) {
                $('#des_form_submit2').html('Save').attr('disabled', false);
                if (r.status == 'SUCCESS') {
                    $('#spn_des_frm2').show();
                    location.reload();
                }
                if (r == 'ERR') {
                    alert('Something went wrong. Please contact');
                }
            }
        });
    }
}

function get_municiplaity(html_id,pronce_id) {
    var prov = $('#des_provincetext_16873431725682584695').val();
    if (prov != '') {
        var pro_i = $('#des_province'+pronce_id).find('option:selected').attr('data-i');
        all_pro_municipality(pro_i,html_id);
        $('#des_form_submit2,.add_mun_spn').show();
    } else {
        $('#des_form_submit2').hide();
    }
}

function all_pro_municipality(pro_i,html_id) {
    if (pro_i != '' && pro_i != '0') {
        $('#des_municipality'+html_id).html('');
        // $('#des_municipality').find('option.pv').remove();

        $('#des_prov_spn').show();

        $.ajax({
            url: '{{route("municipality_list")}}',
            type: 'post',
            data: {
                'prov': pro_i,
                '_token': '{{ csrf_token() }}',
            },
            dataType: 'json',
            success: function(r) {
                $('#des_prov_spn').hide();
                if (r.status == 'SUCCESS') {
                    var prov = r.data;
                    var str = '';
                    // $.each(prov, function(k, v) {
                    //     str += '<option class="pv" data-i="' + v.i + '" value="' + v.name + '">' + v.name + '</option>';
                    // });
                    var options_ser = '<li class="item d-flex justify-content-between align-items-center loc_defulte'+html_id+'_all checked_all" data-id="all" data-name="all" data-value="loc_defulte'+html_id+'">' +
                        '<span>All</span><span class="sv-checkbox"><i class="fa fa-check check-icon"></i></span>' +
                        '</li>';
                    $.each(prov, function(e, f) {
                        var serv_chk = '';
                        options_ser += ' <li class="item d-flex justify-content-between align-items-center loc_defulte'+html_id+' checked_all temp_municipality" data-id="'+ f.i + '" data-name="loc_defulte'+html_id+'" data-value="loc_defulte'+html_id+'_all">' +
                            '<span>'+ f.name + '</span><span class="sv-checkbox"><i class="fa fa-check check-icon"></i></span>' +
                            '</li>';
                    });

                    $('#des_municipality'+html_id).append(options_ser);
                }
            },
            error: function(e) {
                $('#des_prov_spn').hide();
            }
        });
    }
}

function remove_municipality(el) {
    el.closest('.sel_municipality_box').remove();
}

function add_pro_municipality() {
    var mun = $('#des_municipality').val();
    if (mun != '') {
        var str = '<div class="d-flex border px-2 py-1 me-2 sel_municipality_box">';
        str += '<span class="d-flex align-items-center selected_municipality">' + mun + '</span>&nbsp;&nbsp;<span class="d-flex align-items-center cursor-pointer" onclick="remove_municipality($(this))">&times;</span>';
        str += '</div>';

        $('.sel_mun_list').append(str).show();
        $('#des_municipality').val('').hide();
    }
}

function show_pro_municipality() {
    $('#des_municipality').show();
}

function save_visual() {
    var tmp_type = $('#template_type').val();

    if ($('#visual_type').val() == 'link') {
        if ($.trim($('#visual_link').val()) == '') {
            $('#visual_link').focus();
            return false;
        }
    } else {
        if ($.trim($('#visual_img').val()) == '') {
            alert('{{$lang_kwords["select_visual_add"]["english"]}}');
            return false;
        }
    }

    var frm = new FormData($('#frm4')[0]);
    frm.append('act', 'add_visual');
    frm.append('tmp_type', tmp_type);
    $('#submit_btn_visual').attr('disabled', true);

    $.ajax({
        url: "../salon_ajx",
        type: 'post',
        data: frm,
        contentType: false,
        processData: false,
        success: function(r) {
            $('#submit_btn_visual').html('Save').attr('disabled', false);
            // console.log(r.status);
            // var resp = $.parseJSON(r);
            resp = r;
            if (resp.status == 'SUCCESS') {
                $('.popupContainer').fadeOut();
                $('#visual_link').val('');
                $('#visual_img').val('');
                // alert('Added');
                var visual = resp.vis;

                if (visual != '' && visual.length > 0) {
                    var visual_str = '';
                    visual_str += "<div style='' class='row mb-3'>";
                    $.each(visual, function(k, v) {
                        if (v.visual != '' && v.visual !== null) {
                            visual_str += "<div class='<!--visual_lst_img_container--> col-6 col-sm-4 col-md-3 mb-3' id='vis_sec_" + v.id + "'>";
                            visual_str += "<div class='border-custom d-flex align-items-center' style='position: relative;height: 100%;'>";
                            visual_str += "<p class='vis_sel_p' ><label class='custom_check'><input type='checkbox' name='vis_radio' class='vis_radio' value='" + v.id + "'> <span class='checkmark'></span></label></p>";
                            visual_str += '<img src="' + v.visual + '" style="max-width:100%;max-height: 100%;border-radius:8px">';
                            visual_str += "</div>";
                            visual_str += "</div>";
                        }
                    });

                    visual_str += "</div>";
                    $('.visual_lst_sec').html(visual_str);
                }

                $('.insta_link_sec,#submit_btn_visual').hide();
                $('.ur_img_sec').hide().removeClass('d-flex');
                $('.visual_spn_img, .visual_spn_link').removeClass('text-custom-primary');
            }
            if (r == 'ERR') {
                alert('Something went wrong. Please contact');
            }
        }
    })
}

function clear_all(type) {
    swal(
        'Are u sure want clear all details which mentioned in this page!', {
            buttons: {
                cancel: "{{$lang_kwords['alert_cancel']['english']}}",
                catch: {
                    text: "{{$lang_kwords['alert_ok']['english']}}",
                },
                defeat: false,
            },
        }
    )
        .then((value) => {
            switch (value) {
                case "catch":
                    $('#modalajx').modal('show');
                    $.ajax({
                        url: "../salon_ajx",
                        type: 'post',
                        data: {_token: "{{ csrf_token() }}", act : "clear_all", type : type},
                        success: function (r) {
                            window.location.reload();
                        }
                    });
                    break;
                default:
                    // swal("Got away safely!");
                    return false;
            }
        });
}

function save_service_for() {
    /*var tmp_id = $('#template_id').val();
    if(tmp_id=='' || tmp_id==0){
    alert('Something went wrong.');
    return false;
    }*/


    $('#serv_for_btn').attr('disabled', true);

    var all_gender = 0;
    var men = 0;
    var women = 0;
    var kids = 0;
    if ($('#all_gender_chk').prop('checked') === true)
        all_gender = 1;
    if ($('#men_chk').prop('checked') === true)
        men = 1;
    if ($('#women_chk').prop('checked') === true)
        women = 1;
    if ($('#kids_chk').prop('checked') === true)
        kids = 1;

    $.ajax({
        url: "../salon_ajx",
        type: 'post',
        data: {
            'act': 'update_service_for',
            'all_gender': all_gender,
            'men': men,
            'women': women,
            'kids': kids,
            '_token': '{{ csrf_token() }}',
            'temp_type': 'f'
        },
        dataType: 'json',
        success: function(r) {
            $('#serv_for_btn').html('Save').attr('disabled', false);
            $('#serv_for_btn').hide();
            $('.serv_for_fx_inp').attr("disabled",true);
        },
        error: function(e) {
            $('#serv_for_btn').html('Save').attr('disabled', false);
            alert("Something went wrong");
        }
    })

}

function sel_image1(argument) {
    $('#visual_img').trigger('click');
}


function delete_visuals() {

    if ($('.vis_radio:checked').length <= 0) {
        // alert('{{$lang_kwords["select_visual_delete"]["english"]}}');
        swal('{{$lang_kwords["select_visual_delete"]["english"]}}', {
            buttons: {
                catch: {
                    text: "{{$lang_kwords['alert_ok']['english']}}",
                },
            }
        });
        return false;
    }


    swal(
        '{{$lang_kwords["confirm_visual_delete"]["english"]}}', {
            buttons: {
                cancel: "{{$lang_kwords['alert_cancel']['english']}}",
                catch: {
                    text: "{{$lang_kwords['alert_ok']['english']}}",
                },
                defeat: false,
            },
        }
    )
        .then((value) => {
            switch (value) {

                case "defeat":
                    swal("Got away safely!");
                    break;

                case "catch":
                    delete_visuals_act();
                    break;

                default:
                    // swal("Got away safely!");
                    return false;
            }
        });
}

function delete_visuals_act() {


    // if(!confirm('{{$lang_kwords["confirm_visual_delete"]["english"]}}'))return false;

    var vis = new Array;
    $('.vis_radio:checked').each(function() {
        vis.push($(this).val());
    });

    var tmp_id = $('#template_id').val();
    if (tmp_id == '' || tmp_id == 0) {
        alert('Something went wrong.');
    }

    // $('#del_vis_txt').html('Wait..!');
    $('#del_vis_spn').attr('disabled', true);

    $.ajax({
        url: "../salon_ajx",
        type: 'post',
        data: {
            'act': 'remove_visual',
            'tmp_id': tmp_id,
            'vis': vis,
            '_token': '{{ csrf_token() }}'
        },
        dataType: 'json',
        success: function(r) {
            // $('#del_vis_txt').html('Delete Selected');
            $('#del_vis_spn').attr('disabled', false);
            $.each(vis, function(k, v) {
                $('#vis_sec_' + v).remove();
            })
        },
        error: function(e) {
            alert("Something went wrong");
            // $('#del_vis_txt').html('Delete Selected');
            $('#del_vis_spn').attr('disabled', false);
        }
    })

}

function show_insta_link_sec() {
    $('.insta_link_sec,#submit_btn_visual').show();
    $('.ur_img_sec').hide().removeClass('d-flex');
    $('#visual_type').val('link');
    $('.visual_spn_link').addClass('text-custom-primary');
    $('.visual_spn_img').removeClass('text-custom-primary');
}

function show_ur_img_sec() {
    $('.imgPopUp').fadeIn();
    $('.insta_link_sec').hide();

    if ($('#visual_img_lbl').attr('data-t') == 'h') {
        $('.ur_img_sec').show().addClass('d-flex').attr('data-t', 's');
    } else {
        $('.ur_img_sec').hide().removeClass('d-flex').attr('data-t', 'h');
    }

    $('#visual_type').val('image');
    $('.visual_spn_link').removeClass('text-custom-primary');
    $('.visual_spn_img').addClass('text-custom-primary');
    $("#submit_btn_visual").toggle();
}

function save_team_member() {
    var tmp_type = $('#template_type').val();
    $("#members_cat_sub").html('');
    if ($.trim($('#team_member_name').val()) == '') {
        $('#team_member_name').focus();
        return false;
    }

    var cate_a = new Array;
    $('.teammemberPopUp .temp_ct').each(function() {
        cate_a.push($(this).val());
        $("#members_cat_sub").append('<input type="hidden" name="team_cate[]" value="'+$(this).val()+'">')
    });

    if (cate_a.length <= 0) {
        alert('{{$lang_kwords["team_member_select_category_service"]["english"]}}');
        return false;
    }
    // console.log(cate_a);

    var serv_a = new Array;
    var serv_a_c = new Array;
    $('.teammemberPopUp .temp_serv.checked').each(function() {
        if ($(this).data("name") != "all"){
            serv_a.push($(this).data("id"));
            $("#members_cat_sub").append('<input type="hidden" name="team_service[]" value="'+$(this).data("id")+'">')
            if ($.inArray($(this).attr('data-c'), serv_a_c) == -1)
                serv_a_c.push($(this).attr('data-c'));
        }
    });


    if (serv_a.length <= 0) {
        alert('{{$lang_kwords["team_member_select_service"]["english"]}}');
        return false;
    }

    // console.log(serv_a_c);

    var c_bs_a = new Array;
    $.each(cate_a, function(key, value) {
        var index = $.inArray(value, serv_a_c);
        if (index == -1) {
            c_bs_a.push(value);
        }
    });

    if (c_bs_a.length > 0) {
        // console.log(c_bs_a);
        alert('{{$lang_kwords["team_member_select_service_for_each_category"]["english"]}}');
        return false;
    }


    var frm = new FormData($('#frm3')[0]);

    if ($(".teammemberPopUp .temp_serv").length == $(".teammemberPopUp .temp_serv.checked").length) {
        frm.append("team_service[]","all");
    }
    if (serv_a_c.length == tm_category_list.length) {
        frm.append("team_cate[]","all");
    }

    if ($('#tm_act').val() == 'add')
        frm.append('act', 'add_team_member');
    else {
        frm.append('act', 'update_team_member');
        if ($('#tm_i').val() == '') {
            alert('Something went wrong.');
            return false;
        }
    }

    frm.append('tmp_type', tmp_type);
    $('#team_mem_btn').attr('disabled', true);

    $.ajax({
        url: "../salon_ajx",
        type: 'post',
        data: frm,
        contentType: false,
        processData: false,
        success: function(r) {
            $('#team_mem_btn').html('Save').attr('disabled', false);


            if (r.status == 'SUCCESS') {
                /*if($('#tm_act').val()=='add'){
          alert('Added');
        }
        else{
          alert('Updated');
        }*/
                $('#frm3').hide();
                $('#team_member_name').val('');
                $('#team_member_bio').val('');
                $('#tm_i').val('');
                $('#team_mem_img').val('');
                $('#tm_act').val('add');
                $('#tm_img_preview').attr('src', "{{ URL::asset('public/images/blank_img_icon.png')}}");
                $('.tm_img1').hide().attr('src', "{{ URL::asset('public/images/model/uploadfile.svg')}}");
                $('.tm_iu').show();
                $('#team_cate_sec,#team_serv_sec').html('');
                $('#team_s_sec_mn').hide();
                $('.teammemberPopUp').fadeOut();
                $("#members_cat_sub").html('');

                var team = r.team_memb;
                var team_str = '';
                if (team != '' && team.length > 0) {
                    team_str = create_team_sec(team);
                }
                $('.team_mem_lst_sec').html(team_str);
                $('#team_mem_f_sec').show();

            }
            if (r.status == 'ERROR') {
                alert('Something went wrong. Please contact');
            }
        }
    })
}

function sel_image() {
    $('#team_mem_img').trigger('click');
}

function save_gen_note() {
    var tmp_type = $('#template_type').val();
    if (tmp_type == '') {
        alert('Something went wrong.');
    }
    var note = $('#gen_note_txt').val();

    $('#gen_not_btn').attr('disabled', true);

    $.ajax({
        url: "../salon_ajx",
        type: 'post',
        data: {
            'act': 'add_gen_note',
            'tmp_type': tmp_type,
            'note': note,
            '_token': '{{ csrf_token() }}'
        },
        dataType: 'json',
        success: function(r) {
            $('#gen_not_btn').html('Save').attr('disabled', false);
            $('#gen_not_btn').hide();
            $('.edit_notes_enable').attr('disabled', true);
            // $('#gen_note_txt').attr('readonly', true);
        },
        error: function(e) {
            alert("Something went wrong");
            $('#gen_not_btn').html('Save').attr('disabled', false);
        }
    })
}

function add_serv_act() {
    $('.survicePopUp').fadeIn();
    $('#edit_serv_i').val('');
    $('#serv_act').val('add');
    $('#serve_type').val('main');
    $('#serv_name_inp').val('');
    $('#serv_name_inp').val('');
    $('#serv_add_info').val('');
    $('#duration_start_hr').val('');
    $('#duration_start_min').val('');
    $('#duration_end_hr').val('');
    $('#duration_end_min').val('');
    $('input[name="price_type"][value="f"]').prop('checked', true);
    $('#serv_p_typ1').show();
    $('#serv_p_typ2').hide();
    $('input[name="price_type"][value="s"]').prop('checked', false);
    $('#serv_p_fix').val('');
    $('#serv_p_st_fr').val('');

    $('#is_discount').prop('checked', false);
    $('#serv_d_fix').val('');
    $('input[name="discount_type"][value="f"]').prop('checked', true);
    $('#serv_d_typ1').show();
    $('#serv_d_typ2').hide();
    $('#serv_d_per').val('');
    $('#serv_d_pr_fr_dt').val('');
    $('#serv_d_pr_to_dt').val('');
    $('#serv_p_add_info').val('');
    $('.discount_sec').hide();
    $('#serv_id').val('');
    $('#add_serv_frm').show();
    // $('html, body').animate({
    //     scrollTop: $('#add_serv_frm').offset().top - 30
    // }, 500);
}

function close_service_form(f) {
    $('.survicePopUp').fadeOut();
    $('#edit_serv_i').val('');
    $('#serv_act').val('add');
    $('#serve_type').val('main');
    $('#serv_name_inp').val('');
    $('#serv_name_inp').val('');
    $('#serv_add_info').val('');
    $('#duration_start_hr').val('');
    $('#duration_start_min').val('');
    $('#duration_end_hr').val('');
    $('#duration_end_min').val('');
    $('input[name="price_type"][value="f"]').prop('checked', true);
    $('#serv_p_typ1').show();
    $('#serv_p_typ2').hide();
    $('input[name="price_type"][value="s"]').prop('checked', false);
    $('#serv_p_fix').val('');
    $('#serv_p_st_fr').val('');

    $('#is_discount').prop('checked', false);
    $('#serv_d_fix').val('');
    $('input[name="discount_type"][value="f"]').prop('checked', true);
    $('#serv_d_typ1').show();
    $('#serv_d_typ2').hide();
    $('#serv_d_per').val('');
    $('#serv_d_pr_fr_dt').val('');
    $('#serv_d_pr_to_dt').val('');
    $('#serv_p_add_info').val('');
    $('.discount_sec').hide();
    $('#add_serv_frm').hide();
    if (f == '0') {
        $('html, body').animate({
            scrollTop: $('.salon_cate_dt_sec').offset().top + 30
        }, 200);
    }
}

function save_service() {
    var temp_type = $('#template_type').val();
    var cate = $('#cate_id').val();
    if (temp_type == '' || cate == '') {
        alert('Something went wrong');
        return false;
    }

    if ($.trim($("#serv_name_inp").val()) == '') {
        $("#serv_name_inp").focus();
        return false;
    }

    // if ($.trim($("#discount_type").val()) == '') {
    //     $("#discount_type").focus();
    //     return false;
    // }

    if ($('.price_type_inp').val() == 'f') {
        if ($.trim($("#serv_p_fix").val()) == '') {
            $("#serv_p_fix").focus();
            return false;
        }
    } else {
        if ($.trim($("#serv_p_st_fr").val()) == '') {
            $("#serv_p_st_fr").focus();
            return false;
        }
    }

    var discount = '0';
    var discount_type = '';
    if ($('#discount_type').val() != "") {
        discount = '1';

        if ($('#discount_type').val() == 'f') {
            var discount_type = 'f';
            if ($.trim($("#serv_d_fix").val()) == '') {
                $("#serv_d_fix").focus();
                return false;
            }
        } else {
            var discount_type = 'p';
            if ($.trim($("#serv_d_per").val()) == '') {
                $("#serv_d_per").focus();
                return false;
            }
        }
    } else {
        discount = '0';
    }

    if ($('.price_type_inp').val() == 'f') {
        var price = $.trim($("#serv_p_fix").val());
        var p_type = 'f';
    } else {
        var price = $.trim($("#serv_p_st_fr").val());
        var p_type = 's';
    }

    if (discount_type == 'f') {
        var discount_amt = $.trim($("#serv_d_fix").val());
        var discount_valid_from = $('#serv_d_fx_fr_dt').val();
        var discount_valid_to = $('#serv_d_fx_to_dt').val();
    } else {
        var discount_amt = $.trim($("#serv_d_per").val());
        var discount_valid_from = $('#serv_d_pr_fr_dt').val();
        var discount_valid_to = $('#serv_d_pr_to_dt').val();
    }

    var duration = '';

    if (!$('#duration_start_hr').val() && !$('#duration_start_min').val()) {
        $("#duration_start_min").focus();
        alert('{{$lang_kwords["select-duration-save"]["english"]}}');
        return false;
    }

    if ($('#duration_start_hr').val()) {
        duration = $('#duration_start_hr').val();
    }

    if ($('#duration_start_hr').val() && $('#duration_start_min').val()) {
        duration += ':';
    }

    if ($('#duration_start_min').val()) {
        duration += $('#duration_start_min').val();
    }

    if ($('#duration_end_hr').val() || $('#duration_end_min').val()) {
        duration += ' - ';
    }

    if ($('#duration_end_hr').val()) {
        duration += $('#duration_end_hr').val();
    }

    if ($('#duration_end_hr').val() && $('#duration_end_min').val()) {
        duration += ':';
    }

    if ($('#duration_end_min').val()) {
        duration += $('#duration_end_min').val();
    }



    /*var duration = $('#duration_start_hr').val()+':'+$('#duration_start_min').val()+' - '+$('#duration_end_hr').val()+':'+$('#duration_end_min').val();*/
    var payload = {
        temp_type: temp_type,
        category_id: cate,
        type: $('#serve_type').val(),
        service_id: $('#serv_id').val(),
        service_name: $('#serv_name_inp').val(),
        duration: duration,
        price_type: p_type,
        price: price,
        discount: discount,
        discount_amt: discount_amt,
        discount_type: discount_type,
        discount_valid_from: discount_valid_from,
        discount_valid_to: discount_valid_to,
        discount_info: $('#serv_p_add_info').val(),
        additional_info: $('#serv_add_info').val(),
    }

    /*console.log(payload);
        return;
    */
    if ($('#serv_act').val() == 'add') {

        $('#serv_add_btn').attr('disabled', true);

        $.ajax({
            url: "../salon_ajx",
            type: 'post',
            data: {
                'act': 'save_service',
                'payload': payload,
                '_token': '{{ csrf_token() }}'
            },
            dataType: 'json',
            success: function(r) {
                $('#serv_add_btn').html('Save').attr('disabled', false);
                if (r.status == "SUCCESS") {
                    // alert('Added');
                    $('#add_serv_frm').hide();
                    $('.survicePopUp').fadeOut();
                    show_salon_cate_detail(temp_type, cate, $('.cate_sec_' + cate).attr('data-cate'), r.i);
                    location.reload();
                } else {
                    swal({
                        icon: 'error',
                        title: 'Information',
                        text: r.msg, 
                    });
                }
            },
            error: function(e) {
                $('#serv_add_btn').html('Save').attr('disabled', false);
                alert("Something went wrong done 2");
            }
        });
    } else {
        if ($('#edit_serv_i').val() == '') {
            alert('Something went wrong');
            return false;
        }

        $('#serv_add_btn').html('Save').attr('disabled', false);
        $.ajax({
            url: "../salon_ajx",
            type: 'post',
            data: {
                'act': 'update_service',
                'sid': $('#edit_serv_i').val(),
                'payload': payload,
                '_token': '{{ csrf_token() }}'
            },
            dataType: 'json',
            success: function(r) {
                $('.survicePopUp').fadeOut();
                $('#serv_add_btn').html('Save').attr('disabled', false);
                if (r.status == "SUCCESS") {
                    // alert('Updated');
                    $('#add_serv_frm').hide();
                    show_salon_cate_detail(temp_type, cate, $('.cate_sec_' + cate).attr('data-cate'), r.i)
                } else {
                    alert("Something went wrong");
                }
            },
            error: function(e) {
                $('#serv_add_btn').html('Save').attr('disabled', false);
                alert("Something went wrong");
            }
        });
    }
}

function edit_service(i) {
    $.ajax({
        url: "../salon_ajx",
        type: 'post',
        data: {
            'act': 'get_serv_detail',
            'sid': i,
            '_token': '{{ csrf_token() }}'
        },
        dataType: 'json',
        success: function(r) {
            if (r.status == 'SUCCESS') {
                $('#serv_act').val('update');
                $('#edit_serv_i').val(i);
                $('#serv_name_inp').val(r.service.service_name);
                $('#serv_add_info').val(r.service.additional_info);
                var durat = r.service.duration;
                var exp1 = durat.split(' - ');
                var st_hr = '';
                var st_mn = '';
                var nd_hr = '';
                var nd_mn = '';

                if (exp1[0]) {
                    var exp2 = exp1[0].split(':');
                    if (exp2[0]) {
                        if (exp2[0].indexOf('h') > 0)
                            st_hr = exp2[0];
                        if (exp2[0].indexOf('m') > 0)
                            st_mn = exp2[0];
                    }

                    if (exp2[1] && exp2[1].indexOf('m') > 0)
                        st_mn = exp2[1];
                }

                if (exp1[1]) {
                    var exp3 = exp1[1].split(':');
                    if (exp3[0]) {
                        if (exp3[0].indexOf('h') > 0)
                            nd_hr = exp3[0];
                        if (exp3[0].indexOf('m') > 0)
                            nd_mn = exp3[0];
                    }

                    if (exp2[1] && exp2[1].indexOf('m') > 0)
                        nd_mn = exp2[1];
                }

                /*if(exp1.length==2){
                var exp2 = exp1[0].split(':');
                if(exp2.length==2){
                    var  st_hr = exp2[0];
                    var  st_mn = exp2[1];
                }

                var exp3 = exp1[1].split(':');
                if(exp3.length==2){
                    var  nd_hr = exp3[0];
                    var  nd_mn = exp3[1];
                }
                        }*/
                $('#duration_start_hr').val(st_hr);
                $('#duration_start_min').val(st_mn);
                $('#duration_end_hr').val(nd_hr);
                $('#duration_end_min').val(nd_mn);

                var ptype = r.service.price_type;
                if (ptype == 'f') {
                    $('select[name="price_type"] option[value="f"]').prop('selected', true);
                    $('#serv_p_typ1').show();
                    $('#serv_p_typ2').hide();
                    $('#serv_p_fix').val(r.service.price);
                    $('#serv_p_st_fr').val('');
                } else {
                    $('select[name="price_type"] option[value="s"]').prop('selected', true);
                    $('#serv_p_typ2').show();
                    $('#serv_p_typ1').hide();
                    $('#serv_p_st_fr').val(r.service.price);
                    $('#serv_p_fix').val('');
                }

                if (r.service.discount == '1') {
                    $('#is_discount').prop('checked', true);
                    if (r.service.discount_type == 'f') {
                        $('#serv_d_fix').val(r.service.discount_amount);
                        $('select[name="discount_type"] option[value="f"]').prop('selected', true);
                        $('#serv_d_typ1').show();
                        $('#serv_d_typ2').hide();
                        $('#serv_d_fx_fr_dt').val(r.service.discount_valid_from);
                        $('#serv_d_fx_to_dt').val(r.service.discount_valid_to);
                    } else {
                        $('#serv_d_per').val(r.service.discount_amount);
                        $('select[name="discount_type"] option[value="p"]').prop('selected', true);
                        $('#serv_d_typ1').hide();
                        $('#serv_d_typ2').show();
                        $('#serv_d_pr_fr_dt').val(r.service.discount_valid_from);
                        $('#serv_d_pr_to_dt').val(r.service.discount_valid_to);
                    }
                    $('.discount_sec').show();
                } else {
                    $('#serv_d_pr_fr_dt').val('');
                    $('#serv_d_pr_to_dt').val('');
                    $('#serv_d_fix').val('');
                    $('#serv_d_per').val('');
                    $('select[name="discount_type"] option[value="p"]').prop('selected', false);
                    $('select[name="discount_type"] option[value="f"]').prop('selected', false);
                    $('#serv_d_typ1').show();
                    $('#serv_d_typ2').hide();
                    $('#is_discount').prop('checked', false);
                    $('.discount_sec').hide();
                }

                $('#serv_p_add_info').val(r.service.discount_info);
                $('#add_serv_frm').show();
                $('.survicePopUp').fadeIn();
                // $('html, body').animate({
                //     scrollTop: $('#add_serv_frm').offset().top - 30
                // }, 500);

            } else {
                alert("Something went wrong");
            }
        },
        error: function(e) {
            alert("Something went wrong");
        }
    })
}

function add_subservice_act(serv_id) {
    $('.survicePopUp').fadeIn();
    $('#edit_serv_i').val('');
    $('#serv_act').val('add');
    $('#serve_type').val('main');
    $('#serv_name_inp').val('');
    $('#serv_name_inp').val('');
    $('#serv_add_info').val('');
    $('#duration_start_hr').val('');
    $('#duration_start_min').val('');
    $('#duration_end_hr').val('');
    $('#duration_end_min').val('');
    $('input[name="price_type"][value="f"]').prop('checked', true);
    $('#serv_p_typ1').show();
    $('#serv_p_typ2').hide();
    $('input[name="price_type"][value="s"]').prop('checked', false);
    $('#serv_p_fix').val('');
    $('#serv_p_st_fr').val('');

    $('#is_discount').prop('checked', false);
    $('#serv_d_fix').val('');
    $('input[name="discount_type"][value="f"]').prop('checked', true);
    $('#serv_d_typ1').show();
    $('#serv_d_typ2').hide();
    $('#serv_d_per').val('');
    $('#serv_d_pr_fr_dt').val('');
    $('#serv_d_pr_to_dt').val('');
    $('#serv_p_add_info').val('');
    $('.discount_sec').hide();

    $('#serve_type').val('sub');
    $('#serv_id').val(serv_id);
    $('#add_serv_frm').show();
    // $('html, body').animate({
    //     scrollTop: $('#add_serv_frm').offset().top - 30
    // }, 500);

}

function show_salon_cate_detail(temp_type, cateid, catename, f) {

    close_service_form('1');

    $('.cate_cards').removeClass('active');
    $('#cate_card_' + cateid).addClass('active');
    // $('#modalajx').modal('show');
    $('#serv_frm_sec').hide();
    $('#category_name').html(catename);

    $.ajax({
        url: "../salon_ajx",
        type: 'post',
        data: {
            'act': 'get_salon_cate_detail',
            'temp_type': temp_type,
            'cid': cateid,
            '_token': '{{ csrf_token() }}'
        },
        dataType: 'json',
        success: function(r) {
            if (r.status == 'SUCCESS') {
                if (r.msg == 'Y') {
                    $('#serv_frm_sec').show();
                    var service = r.service;
                    var sub_service = r.sub_service;
                    var str = '';
                    $.each(service, function(k, v) {
                       
                        str += '<div class="category-table-row d-flex bg-light-primary mt-2" id="serv_sec_m_' + v.id + '" style="padding-top: 10px;">';
                        str += '<div class="border-right-primary  text-center fs-5 text-custom-primary p-1 w-28 border-end d-flex justify-content-center align-items-center position-relative"> <div class="success-left-indi"></div>';
                        str += '<span style="float:left">' + v.service_name + '</span>';
                        if (v.additional_info != '' && v.additional_info !== null && v.additional_info) {
                            str += '<div><i class="ri-information-fill tooltip_spn1 tooltip_spn_1"></i><div class="tooltip" style="margin-top:34px"><span class="tooltiptext">' + v.additional_info + '</span></div></div>';
                        }
                        str += '<div class="clearfix"></div></div>';
                        str += '<div class="text-center fs-5 text-custom-primary p-1 w-28 border-end d-flex justify-content-center align-items-center">';
                        str += v.duration;
                        str += '</div>';
                        str += '<div class="text-center fs-5 text-custom-primary p-1 w-28 border-end">';
                        if (v.price_type == 'f') {

                            if (v.discount == '1') {
                                var dis_amt = parseFloat(v.price);
                                if (v.discount_type == 'f') {
                                    var dis_amt = parseFloat(v.price) - parseFloat(v.discount_amount);
                                    console.log("2 : "+dis_amt);
                                } else {
                                    var d_amt = parseFloat(v.price) * (parseFloat(v.discount_amount) / 100);
                                    var dis_amt = parseFloat(v.price) - d_amt;
                                }

                                str += '<span style="font-size:15px;text-decoration: line-through;">' + v.price + '</span> ' + dis_amt + ' EUR';
                            } else
                                str += v.price + ' EUR';

                        } else {

                            str += '{{$lang_kwords["starting-from"]["english"]}} ' + v.price + ' EUR';

                        }
                        if (v.discount == '1') {
                            var hasMatchingSubService = sub_service.some(function(subService) {
                                 return subService[v.id];
                             });
                             
                            if (sub_service != '' && sub_service.length > 0 && hasMatchingSubService) {
                                
                                var maxSubServiceDiscountPercentage = 0;
                                $.each(sub_service, function(k1, v1) {
                                    var ssserv = v1[v.id];
                                    if (typeof ssserv === 'undefined') return true;
                                    $.each(ssserv, function(k2, v2) {
                                        if (v2.discount == '1') {
                                            var discountPercentage = 0;
                                            if (v2.discount_type === 'f') {
                                                discountPercentage = (parseFloat(v2.discount_amount) / parseFloat(v2.price)) * 100;
                                            } else {
                                                discountPercentage = parseFloat(v2.discount_amount);
                                            }
                                            maxSubServiceDiscountPercentage = Math.max(maxSubServiceDiscountPercentage, discountPercentage);
                                        }
                                    });
                                });

                                if (maxSubServiceDiscountPercentage > 0) {
                                    str += '<br><b class="fs-6">{{$lang_kwords["discount"]["english"]}} upto: </b>';
                                    if (v.discount_type == 'f') {
                                        str += '<span class="fs-6">' + maxSubServiceDiscountPercentage + ' %</span>';
                                    } else {
                                        str += '<span class="fs-6">' + maxSubServiceDiscountPercentage + '%</span>';
                                    }
                                }
                            } else {
                                str += '<br><b class="fs-6">{{$lang_kwords["discount"]["english"]}}: </b>';
                                if (v.discount_type == 'f') {
                                    str += '<span class="fs-6">' + v.discount_amount + ' %</span>';
                                } else {
                                    str += '<span class="fs-6">' + v.discount_amount + '%</span>';
                                }
                            }

                            if (v.discount_info != '' && v.discount_info !== null && v.discount_info) {
                                str += ' <i class="tooltip_spn1"><img src="{{URL::asset("public/images/servInfo.svg")}}" style="width: 20px;margin-top: -4px;"></i><div class="tooltip"><span class="tooltiptext">' + v.discount_info + '</span></div>';
                            }

                            if (v.discount_valid_from && v.discount_valid_to) {
                                var dis_st_fr_ar = v.discount_valid_from.split('-');
                                var dis_st_tp_ar = v.discount_valid_to.split('-');
                                if (dis_st_fr_ar.length == 3 && dis_st_tp_ar.length == 3) {
                                    dis_st_fr = dis_st_fr_ar[2] + '-' + dis_st_fr_ar[1] + '-' + dis_st_fr_ar[0];
                                    dis_st_tp = dis_st_tp_ar[2] + '-' + dis_st_tp_ar[1] + '-' + dis_st_tp_ar[0];

                                    str += '<span style="font-size:15px">' + dis_st_fr + ' - ' + dis_st_tp + '</span>';
                                }
                            }
                        }else{
                            var hasMatchingSubService = sub_service.some(function(subService) {
                                 return subService[v.id];
                             });
                             console.log(hasMatchingSubService);
                            if (sub_service != '' && sub_service.length > 0 && hasMatchingSubService) {
                                var maxSubServiceDiscountPercentage = 0;
                                $.each(sub_service, function(k1, v1) {
                                    var ssserv = v1[v.id];
                                    if (typeof ssserv === 'undefined') return true;
                                    $.each(ssserv, function(k2, v2) {
                                        if (v2.discount == '1') {
                                            var discountPercentage = 0;
                                            if (v2.discount_type === 'f') {
                                                discountPercentage = (parseFloat(v2.discount_amount) / parseFloat(v2.price)) * 100;
                                            } else {
                                                discountPercentage = parseFloat(v2.discount_amount);
                                            }
                                            maxSubServiceDiscountPercentage = Math.max(maxSubServiceDiscountPercentage, discountPercentage);
                                        }
                                    });
                                });

                                if (maxSubServiceDiscountPercentage > 0) {
                                    str += '<br><b class="fs-6">{{$lang_kwords["discount"]["english"]}} upto: </b>';
                                    if (v.discount_type == 'f') {
                                        str += '<span class="fs-6">' + maxSubServiceDiscountPercentage + ' %</span>';
                                    } else {
                                        str += '<span class="fs-6">' + maxSubServiceDiscountPercentage + '%</span>';
                                    }
                                }
                            }
                        }
                        str += '</div>';

                        str += '<div class="fs-4 p-1 w-15 justify-content-center text-center">';
                        str += '<i class="cursor-pointer" onclick="edit_service(\'' + v.id + '\')"><img src="{{URL::asset("public/images/edit_pen.svg")}}"/></i>   <i class="cursor-pointer" onclick="delete_service(\'' + v.id + '\')"><img src="{{URL::asset("public/images/trash.svg")}}"/></i> <br> <button type="button" class="btn cs_btn gradient-btn" onclick="add_subservice_act(\'' + v.id + '\')"><img src="{{URL::asset("public/images/add_plus.svg")}}" style="width: 18px;"> {{$lang_kwords["sub-service"]["english"]}}</button>';
                        str += '</div>';
                        str += '</div>';

                        if (sub_service != '' && sub_service.length > 0) {
                            $.each(sub_service, function(k1, v1) {

                                var ssserv = v1[v.id];
                                if (typeof ssserv === 'undefined') return true;
                                // if(k1!=v.id)return true;

                                $.each(ssserv, function(k2, v2) {

                                    str += '<div class="category-table-row d-flex " style="height: 55px;" id="serv_sec_m_' + v2.id + '">';
                                    str += '<div class="text-center fs-6 p-1 w-28 border-end border-bottom d-flex justify-content-center align-items-center sb" style="padding-left:12px!important;font-weight:500;">';
                                    str += '<span style="float:left">' + v2.service_name + '</span>';
                                    if (v2.additional_info != '' && v2.additional_info !== null && v2.additional_info) {
                                        str += '<div><i class="ri-information-fill tooltip_spn1 tooltip_spn_1"></i><div class="tooltip" style="margin-top:34px"><span class="tooltiptext">' + v2.additional_info + '</span></div></div>';
                                    }
                                    str += '<div class="clearfix"></div></div>';
                                    str += '<div class="text-center fs-6 p-1 w-28 border-end border-bottom d-flex justify-content-center align-items-center sb">';
                                    str += v2.duration;
                                    str += '</div>';
                                    str += '<div class="text-center fs-6 p-1 w-28 border-end border-bottom justify-content-center align-items-center">';
                                    if (v2.price_type == 'f') {
                                        if (v2.discount == '1') {
                                            var dis_amt = parseFloat(v2.price);
                                            if (v2.discount_type == 'f') {
                                                var dis_amt = parseFloat(v2.price) - parseFloat(v2.discount_amount);
                                            } else {
                                                var d_amt = parseFloat(v2.price) * (parseFloat(v2.discount_amount) / 100);
                                                var dis_amt = parseFloat(v2.price) - d_amt;
                                            }

                                            str += '<span style="font-size:15px;text-decoration: line-through;">' + v2.price + '</span> ' + dis_amt + 'EUR';
                                        } else
                                            str += v2.price + ' EUR';

                                    } else {

                                        str += '{{$lang_kwords["starting-from"]["english"]}} ' + v2.price + ' EUR';

                                    }


                                    if (v2.discount == '1') {
                                        str += '<br><b class="fs-6">{{$lang_kwords["discount"]["english"]}}: </b>';

                                        // str+='<br>';
                                        if (v2.discount_type == 'f') {
                                            str += '<span class="fs-6">' +   (parseFloat(v2.discount_amount) / parseFloat(v2.price))*100 + '%</span>';
                                        } else {
                                            str += '<span class="fs-6">' + v2.discount_amount + '%</span>';
                                        }
                                        if (v2.discount_info != '' && v2.discount_info !== null && v2.discount_info) {
                                            str += ' <i class="ri-information-fill tooltip_spn1"></i><div class="tooltip"><span class="tooltiptext">' + v2.discount_info + '</span></div>';
                                        }
                                        if (v2.discount_valid_from && v2.discount_valid_to) {
                                            var dis_st_fr_ar = v2.discount_valid_from.split('-');
                                            var dis_st_tp_ar = v2.discount_valid_to.split('-');
                                            if (dis_st_fr_ar.length == 3 && dis_st_tp_ar.length == 3) {
                                                dis_st_fr = dis_st_fr_ar[2] + '-' + dis_st_fr_ar[1] + '-' + dis_st_fr_ar[0];
                                                dis_st_tp = dis_st_tp_ar[2] + '-' + dis_st_tp_ar[1] + '-' + dis_st_tp_ar[0];

                                                str += '<span style="font-size:15px">' + dis_st_fr + ' - ' + dis_st_tp + '</span>';
                                            }
                                        }
                                    }
                                    str += '</div>';

                                    str += '<div class="fs-4 p-1 w-15 border-bottom d-flex justify-content-center">';
                                    str += '<i class="cursor-pointer" onclick="edit_service(\'' + v2.id + '\')"><img src="{{URL::asset("public/images/edit_pen.svg")}}"/></i>  <i class="cursor-pointer" onclick="delete_service(\'' + v2.id + '\')"><img src="{{URL::asset("public/images/trash.svg")}}"/></i>';
                                    str += '</div>';
                                    str += '</div>';
                                })
                            })
                        }
                    });
                    $('.tbody').html(str);
                            $('.salon_cate_dt_sec').show();
                            /*if(f=='1'){
                    $('html, body').animate({
                        scrollTop: $('.salon_cate_dt_sec').offset().top+30
                    }, 200);
                    }*/
                } else {
                    var str = '<tr><td colspan="4">Not Service Registered for selected Category</td></tr>';
                    $('.tbody').html(str);
                    $('.salon_cate_dt_sec').show();
                }
                $('.title1').html(catename);
                        /*if(f=='1'){
                    $('html, body').animate({
                        scrollTop: $('.salon_cate_dt_sec').offset().top+30
                    }, 200);
                }*/

                if (f != '0' && $('#serv_sec_m_' + f).length > 0) {

                    $('html, body').animate({
                        scrollTop: $('#serv_sec_m_' + f).offset().top - 50
                    }, 200);
                }


            } else {
                alert('Something went wrong.');
            }
            /*setTimeout(function(){
      $('#modalajx').modal('hide');
      console.log('1');
    },1000)*/

            $('#modalajx').modal('hide');
            // console.log('11111');

        },
        error: function(e) {
            $('#modalajx').modal('hide');
            alert('Something went wrong.');
        }
    });

    $('#temp_id').val(sid);
    $('#cate_id').val(cateid);

}

function remove_html(id) {
    $("#" + id).remove();
    $("#add_category_btn_p").show();
    $("#addprovince_btn_p").show();
}


function edit_team_member(id) {
    $.ajax({
        url: "../salon_ajx",
        type: 'post',
        data: {
            'act': 'get_tm_detail',
            'tm_i': id,
            '_token': '{{ csrf_token() }}'
        },
        dataType: 'json',
        success: function(r) {
            if (r.status == 'SUCCESS') {
                $('.teammemberPopUp').fadeIn();
                $(".addservices").html('');
                $("#members_cat_sub").html('');
                $('#team_member_name').val(r.member.name);
                $('#team_member_bio').val(r.member.bio);
                $("#add_category_btn_p").show();

                if (r.member.img != '') {
                    $('.tm_img1').attr('src', '{{asset("public/imgs/team/")}}/' + r.member.img).show();
                    $('.tm_iu').hide();
                }

                var temp_serv = r.member.service;
                var temp_cate = r.member.category;

                var service = r.service;
                var category = r.category;

                tm_category_list = category;
                tm_sub_category_list = service;

                $.each(r.member.category, function(x ,y) {
                    var cat_html = '';
                    if (y ==  "all"){
                        return true;
                    }

                    var options_cat = '';
                    $.each(category, function(k, v) {
                        var cat_chk = '';
                        if (y ==  v.i){
                            cat_chk = 'selected';
                        }
                        options_cat += '<option value="' + v.i + '" '+cat_chk+'>'+ v.cat + '</option>';
                    });


                    var options_ser = '<li class="item d-flex justify-content-between align-items-center member_defulte'+ y + '_all checked_all temp_serv" data-id="all"  data-c="'+ y + '"  data-name="all" data-value="member_defulte'+ y + '">' +
                        '<span>All</span><span class="sv-checkbox"><i class="fa fa-check check-icon"></i></span>' +
                        '</li>';
                    $.each(service, function(e, f) {
                        var serv_chk = '';
                        if (y ==  f.c){
                            if (jQuery.inArray(f.i.toString(), temp_serv) !== -1){
                                serv_chk = 'checked';
                            }
                            options_ser += ' <li class="item d-flex justify-content-between align-items-center member_defulte'+ y + ' checked_all temp_serv '+serv_chk+'" data-id="'+ f.i + '" data-c="'+ y + '"  data-name="member_defulte'+ y + '" data-value="member_defulte'+ y + '_all">' +
                                '<span>'+ f.service_name + '</span><span class="sv-checkbox"><i class="fa fa-check check-icon"></i></span>' +
                                '</li>';
                        }
                    });
                    var html_id = "text_" + Date.now()+Math.floor((Math.random() * 9999999) + 1);
                    cat_html += `
                        <div class="d-flex mt-2 align-items-center justify-content-between srv" id="`+html_id+`">
                                <div class="d-flex gap-1">
                                    <div class="px-0">
                                        <label class="custom-select custom-select-address" style="pointer-events : none">
                                            <select class="mollure-select-address frmto temp_ct" onchange="get_sub_category_from_list(this,'sub_`+html_id+`')">
                                               `+options_cat+`
                                            </select>
                                        </label>
                                    </div>
                                    <div class=" px-0">
                                        <div class="services-container position-relative">
                                            <div class="service-selector d-flex justify-content-between align-items-center p-3">
                                                <p class="mb-0">Select Service</p>
                                                <img src="{{ URL::asset('public/images/model/select-down-arrow.svg')}}" alt="">
                                            </div>
                                            <ul class="service-items position-absolute" for="`+y+`" id="sub_`+html_id+`">
                                                `+options_ser+`
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <span type="button" class="dlt_btn" onclick="remove_html('`+html_id+`')">
                                    <img src="{{ URL::asset('public/images/model/trash.svg')}}" alt="">
                                </span>
                            </div>`;
                    $(".addservices").append(cat_html);

                    // $(".addservices .temp_ct").each(function () {
                    //     var des_province = $(this).val();
                    //     if (des_province != ""){
                    //         $('#'+html_id).find('.custom-select option[value='+des_province+']').remove();
                    //     }
                    // })
                });
                $('.custom-select').each(function () {
                    setupSelector($(this));
                });

                if (tm_category_list.length == $(".addservices .temp_ct").length){
                    $("#add_category_btn_p").hide();
                }
                if (service.length > 0) {
                    var str = '<label class="me-3"><input type="checkbox" name="team_service[]" class="temp_serv_all" value="all" onclick="sel_all_temp_serv()"> {{$lang_kwords["all"]["english"]}}</label>';
                    $.each(service, function(k, v) {
                        var chk = '';
                        var vi = '' + v.i + '';
                        var vc = '' + v.c + '';
                        var shd = 'style="display:none"';

                        if (jQuery.inArray(vi, temp_serv) !== -1)
                            chk = 'checked';

                        if (jQuery.inArray(vc, temp_cate) !== -1)
                            shd = 'style=""';

                        str += '<label class="me-3" ' + shd + '><input type="checkbox" data-c="' + v.c + '" name="team_service[]" class="temp_serv" value="' + v.i + '" ' + chk + '> ' + v.service_name + '</label>';
                    });
                    $('#team_serv_sec').html(str);
                    $('#team_s_sec_mn').show();
                } else {
                    $('#team_s_sec_mn').hide();
                }

                var str1 = '<label class="me-3"><input type="checkbox" name="team_cate[]" class="temp_ct_all" value="all" onclick="sel_all_temp_ct()"> {{$lang_kwords["all"]["english"]}}</label>';
                $.each(category, function(k, v) {
                    var chk = '';
                    var vi = '' + v.i + '';

                    if (jQuery.inArray(vi, temp_cate) !== -1)
                        chk = 'checked';

                    str1 += '<label class="me-3"><input type="checkbox" data-c="' + v.i + '" class="temp_ct" name="team_cate[]" value="' + v.i + '" ' + chk + '> ' + v.cat + '</label>';
                });

                $('#team_cate_sec').html(str1);

                $('#tm_i').val(id);
                $('#tm_act').val('update');
                $('#frm3').show();
                $('html, body').animate({
                    scrollTop: $('#frm3').offset().top - 30
                }, 500);

                check_all_tmserv();
                check_all_tmcate();
                $(".teammemberPopUp .service-items").each(function () {
                    var totl = $(this).find("li").length;
                    var chk_count = $("."+$(this).eq(0).find("li").data("value")+".checked").length+1;
                    if (totl == chk_count){
                        $(this).eq(0).find("li").addClass("checked");
                    }
                })
            } else {
                alert('Something went wrong.');
            }
        },
        error: function(e) {
            alert('Something went wrong.');
        }
    })

}

function get_sub_category_from_list(cat,id) {
    var cat = $(cat).val();
    var options_ser = '<li class="item d-flex justify-content-between align-items-center member_defulte'+ cat + '_all checked_all temp_serv" data-id="all"  data-c="'+ cat + '"  data-name="all" data-value="member_defulte'+ cat + '">' +
        '<span>All</span><span class="sv-checkbox"><i class="fa fa-check check-icon"></i></span>' +
        '</li>';
    $.each(tm_sub_category_list , function(e, f) {
        var serv_chk = '';
        if (cat ==  f.c){
            options_ser += ' <li class="item d-flex justify-content-between align-items-center member_defulte'+ cat + ' checked_all temp_serv '+serv_chk+'" data-id="'+ f.i + '" data-c="'+ cat + '"  data-name="member_defulte'+ cat + '" data-value="member_defulte'+ cat + '_all">' +
                '<span>'+ f.service_name + '</span><span class="sv-checkbox"><i class="fa fa-check check-icon"></i></span>' +
                '</li>';
        }
    });
    $("#"+id).html(options_ser);
}

function delete_team_member(id) {
    swal(
        '{{$lang_kwords["confirm_teammem_delete"]["english"]}}', {
            buttons: {
                cancel: "{{$lang_kwords['alert_cancel']['english']}}",
                catch: {
                    text: "{{$lang_kwords['alert_ok']['english']}}",
                },
                defeat: false,
            },
        }
    )
        .then((value) => {
            switch (value) {

                case "defeat":
                    swal("Got away safely!");
                    break;

                case "catch":
                    delete_team_member_act(id);
                    break;

                default:
                    // swal("Got away safely!");
                    return false;
            }
        });
}

function delete_team_member_act(id) {
    // if(confirm('{{$lang_kwords["confirm_teammem_delete"]["english"]}}')){
    $.ajax({
        url: "../salon_ajx",
        type: 'post',
        data: {
            'act': 'remove_tm_detail',
            'tm_i': id,
            '_token': '{{ session::token() }}'
        },
        dataType: 'json',
        success: function(r) {
            if (r.status == 'SUCCESS') {
                $('#tm_sec_' + id).remove();
            } else {
                alert('Something went wrong.');
            }
        },
        error: function(e) {
            alert('Something went wrong.');
        }
    });
    // }
}

function show_fixed_loc_detail(csrf_token) {

    $('#all_gender_chk').prop('checked', false);
    $('#men_chk').prop('checked', false);
    $('#women_chk').prop('checked', false);
    $('#kids_chk').prop('checked', false);
    $('.team_mem_lst_sec, .visual_lst_sec').html('');
    $('#team_mem_f_sec').hide();
    $('.salon_cate_sec').html('');
    $('#gen_note_txt').val('');
    $('.salon_serv_for_sec,.sub_tem_fix_sec,.salon_cate_sec,.salon_note_sec,.team_mem_sec,.visual_sec').hide();
    $('.tbody').html('');
    $('.salon_cate_dt_sec,#frm3').hide();

    $('.sub-temp-card').removeClass('active');
    // $('#sub-temp-card_'+sid).addClass('active');

    /*if(sname!='')
        $('#tem_title').html(sname+' Template');
        else
        $('#tem_title').html('Location Template');*/

                // $('#modalajx').modal('show');

    set_url('f');

    $.ajax({
        url: "../salon_ajx",
        type: 'post',
        data: {
            'act': 'get_fix_loc_detail',
            '_token': csrf_token, //'{{ csrf_token() }}'
        },
        dataType: 'json',
        success: function(r) {
            // $('#modalajx').modal('hide');
            if (r.status == 'SUCCESS') {
                var salon = r.salon;
                var services = r.services;
                var team = r.team;
                localStorage.setItem('loc_type', team[0].location_type);
                var visual = r.visual;
                console.log(r);
                var categories = r.categories;

                if (salon.all_gender == '1')
                    $('#all_gender_chk').prop('checked', true);
                if (salon.men == '1')
                    $('#men_chk').prop('checked', true);
                if (salon.women == '1')
                    $('#women_chk').prop('checked', true);
                if (salon.kids == '1')
                    $('#kids_chk').prop('checked', true);

                var cate_str = '<div class=" " style="justify-content: space-between;display: flex;flex-wrap:wrap">';
                $.each(categories, function(k, v) {
                    if (k == 0) var cls = 'active';
                    else var cls = '';
                    cate_str += '<div class="cate_sec  mb-3 cate_sec_' + v.id + '" onclick="show_salon_cate_detail(\'f\', \'' + v.id + '\' ,\'' + v.name + '\',\'0\')" data-cate="' + v.name + '"><div class="cate_cards shadow p-2 sub-temp-fixed-loc-card ' + cls + '" id="cate_card_' + v.id + '">';
                    // console.log(v.image);
                    if (v.image != '' && v.image !== null)
                        cate_str += '<img src="{{asset("public/imgs/category/")}}/' + v.image + '" style="width:auto;max-width:100%;">';
                    else
                        cate_str += '<img src="{{asset("public/imgs/placeholder-img.jpg")}}" style="width:auto;max-width:100%;">';

                    cate_str += '<span>' + v.name + '</span>';


                    cate_str += '</div></div>';

                });
                cate_str += '</div>';
                show_salon_cate_detail('f', categories[0].id, categories[0].name, '0');

                var team_str = '';
                if (team != '' && team.length > 0) {
                    team_str = create_team_sec(team);
                    $('#team_mem_f_sec').show();
                    /*var team_str='';
            team_str+="<div style='' class='row mb-3'>";
            $.each(team,function(k,v){
              team_str+="<div class='border col-12 col-sm-5 col-md-3 mb-3 me-2 p-2' id='tm_sec_"+v.id+"' style='    position: relative;'>";
                team_str+="<p class='mb-4'>\""+v.bio+"\"</p>";
                team_str+="<div class='d-flex' style='align-items: flex-end;    height: 55px;margin-bottom: 37px;'>";
                  team_str+="<div class='mb-2 me-2'>";
                    if(v.image!='' && v.image!==null)
                      team_str+='<img src="{{asset("public/imgs/team/")}}/'+v.image+'" style="border: 1px solid #b1abab;width:50px;height: 50px;border-radius:35px">';
                    else
                      team_str+='<img src="{{asset("public/imgs/placeholder-img.jpg")}}" style="border: 1px solid #b1abab;height: 50px;width:50px;border-radius:35px">';
                  team_str+="</div>";

                  team_str+="<div class='mb-2'>";
                    team_str+="<p>"+v.member+"</p>";
                  team_str+="</div>";

                team_str+="</div>";

                team_str+='<p style="    position: absolute;right: 10px;bottom: 0;"><i class="ri-edit-box-line cursor-pointer" onclick="edit_team_member(\''+v.id+'\')"></i> &nbsp; <i class="ri-delete-bin-line text-danger cursor-pointer" onclick="delete_team_member(\''+v.id+'\')"></i></p>';


                team_str+="</div>";
            });

            team_str+="</div>";*/

                }
                $('.team_mem_lst_sec').html(team_str);

                if (visual != '' && visual.length > 0) {
                    console.log(visual);
                    var visual_str = '';
                    visual_str += "<div style='' class='row mb-3'>";
                    $.each(visual, function(k, v) {
                        if (v.visual != '' && v.visual !== null) {
                            visual_str += "<div class='<!--visual_lst_img_container--> col-6 col-sm-4 col-md-3 mb-3' id='vis_sec_" + v.id + "'>";
                            visual_str += "<div class='border-custom d-flex align-items-center' style='position: relative;height: 100%;'>";
                            visual_str += "<p class='vis_sel_p' ><label class='custom_check'><input type='checkbox' name='vis_radio' class='vis_radio' value='" + v.id + "'> <span class='checkmark'></span></label></p>";
                            visual_str += '<img src="' + v.visual + '" style="max-width:100%;max-height: 100%;border-radius:8px">';
                            visual_str += "</div>";
                            visual_str += "</div>";
                        }
                    });

                    visual_str += "</div>";
                    $('.visual_lst_sec').html(visual_str);
                }

                /*if(team!='' && team.length>0){
                var team_str='';
                $.each(team,function(k,v){
                team_str+="<div style='' class='border row mb-3'>";
                    team_str+="<div class='col-12 col-md-3 col-lg-3 pe-3 pe-md-4 mb-md-2 mb-2'>";
                    if(v.image!='')
                    team_str+='<img src="{{asset("public/imgs/team/")}}/'+v.image+'" style="width:90px">';
                    else
                    team_str+='<img src="{{asset("public/imgs/placeholder-img.jpg")}}" style="width:90px"">';
                    team_str+="</div>";
                    team_str+="<div class='col-12 col-md-8 col-lg-8 mb-md-2 mb-2'><div>";
                    team_str+="<p>"+v.member+"</p>";
                    team_str+="</div>";
                    team_str+="<div>";
                    team_str+="<p>"+v.bio+"</p>";
                    team_str+="</div></div>";
                    team_str+="<div class='col-12 col-md-1 col-lg-1'>";
                    team_str+='<p><i class="ri-edit-box-line cursor-pointer" onclick="edit_team_member(\''+v.id+'\')"></i> &nbsp; <i class="ri-delete-bin-line fs-4 text-danger cursor-pointer" onclick="delete_team_member(\''+v.id+'\')"></i></p>';
                    team_str+="</div>";
                team_str+="</div>";
                });

                $('.team_mem_lst_sec').html(team_str);
            }*/

                $('.salon_cate_sec').html(cate_str);
                $('#gen_note_txt').val(salon.note);

                $('.salon_serv_for_sec,.sub_tem_fix_sec,.salon_cate_sec,.salon_note_sec,.team_mem_sec,.visual_sec, #copy_btn').show();

                $('#copy_btn').val('{{$lang_kwords["copy-to-desire-location"]["english"]}}');
                /*$('html, body').animate({
             scrollTop: $('.sub_tem_fix_sec').offset().top-30
         }, 500);*/
            }
            if (r.status == 'ERROR') {
                // $('#modalajx').modal('hide');
                alert('Something went wrong. Please contact');
            }

            $('#modalajx').modal('hide');
        },
        error: function() {
            alert('Something wennt wrong');
            // location.reload();
        }
    });
    $('#template_id').val(sid);
}


function delete_salon(sid) {
    swal(
        '{{$lang_kwords["confirm_delete_location"]["english"]}}', {
            buttons: {
                cancel: "{{$lang_kwords['alert_cancel']['english']}}",
                catch: {
                    text: "{{$lang_kwords['alert_ok']['english']}}",
                },
                defeat: false,
            },
        }
    )
        .then((value) => {
            switch (value) {

                case "defeat":
                    swal("Got away safely!");
                    break;

                case "catch":
                    delete_salon_act(sid);
                    break;

                default:
                    // swal("Got away safely!");
                    return false;
            }
        });
}

function delete_salon_act(sid) {
    // if(!confirm('{{$lang_kwords["confirm_delete_location"]["english"]}}'))return false;
    $('#modalajx').modal('show');
    $.ajax({
        url: "../salon_ajx",
        type: 'post',
        data: {
            'act': 'delete_salon',
            'sid': sid,
            '_token': '{{ csrf_token() }}'
        },
        dataType: 'json',
        success: function(r) {
            $('#modalajx').modal('hide');
            if (r.status == 'SUCCESS') {
                // alert('Removed');
                location.reload();
            }
            if (r.status == 'ERROR') {
                alert('Something went wrong. Please contact');
            }
        },
        error: function() {
            $('#modalajx').modal('hide');
            alert('Something went wrong. Please contact');
        }
    })

}

function delete_des_location(sid,html_id = null) {
    swal(
        '{{$lang_kwords["confirm_delete_location"]["english"]}}', {
            buttons: {
                cancel: "{{$lang_kwords['alert_cancel']['english']}}",
                catch: {
                    text: "{{$lang_kwords['alert_ok']['english']}}",
                },
                defeat: false,
            },
        }
    )
        .then((value) => {
            switch (value) {

                case "defeat":
                    swal("Got away safely!");
                    break;

                case "catch":
                    delete_des_location_act(sid,html_id);
                    break;

                default:
                    // swal("Got away safely!");
                    return false;
            }
        });
}

function delete_des_location_act(sid,html_id = null) {
    // if(!confirm('{{$lang_kwords["confirm_delete_location"]["english"]}}'))return false;
    $('#modalajx').modal('show');
    $.ajax({
        url: "../salon_ajx",
        type: 'post',
        data: {
            'act': 'delete_des_location',
            'sid': sid,
            '_token': '{{ csrf_token() }}'
        },
        dataType: 'json',
        success: function(r) {
            if (r.status == 'SUCCESS') {
                setTimeout(function () {
                    $('#modalajx').modal('hide');
                },500);
                // alert('Removed');
                if (html_id != null){
                    $("#addprovince_btn_p").show();
                    $("#" + html_id).remove();
                } else{
                    location.reload();
                }
            }
            if (r.status == 'ERROR') {
                alert('Something went wrong. Please contact');
            }
        },
        error: function() {
            $('#modalajx').modal('hide');
            alert('Something went wrong. Please contact');
        }
    })

}

function edit_salon(sid) {
    if (sid != '') {
        $.ajax({
            url: "../salon_ajx",
            type: 'post',
            data: {
                'act': 'get_salon',
                'sid': sid,
                '_token': '{{ csrf_token() }}'
            },
            dataType: 'json',
            success: function(r) {
                if (r.status == 'SUCCESS') {
                    $('#sid').val(sid);
                    $('#salon_act').val('update');
                    $('#salon_name').val(r.salon_name);
                    $('#salon_street').val(r.street);
                    $('#salon_number').val(r.number);
                    $('#salon_postal_code').val(r.postal_code);
                    $('#salon_province').val(r.province);
                    $(".locationPopUp").fadeIn();
                    var municipality_list = r.municipality_list;

                    var str = '';
                    $('#salon_municipality').find('option.pv').remove();
                    if (municipality_list.length > 0) {
                        $.each(municipality_list, function(k, v) {
                            console.log(r.municipality);
                            if (r.municipality == v.name)
                                str += '<option class="pv" selected value="' + v.name + '">' + v.name + '</option>';
                            else
                                str += '<option class="pv" value="' + v.name + '">' + v.name + '</option>';
                        })
                    }
                    $('#salon_municipality').append(str);

                    // $('#salon_province').val(r.province);
                    $('.salon_frm_sec, #form_submit2').show();
                    $('html, body').animate({
                        scrollTop: $('#frm2').offset().top - 30
                    }, 500);
                }
                if (r.status == 'ERROR') {
                    alert('Something went wrong. Please contact');
                }
            }
        })
    }
}



function add_salon() {
    $(".locationPopUp").fadeIn();
}

function form_validate2() {
    var salon_name = $('#salon_name').val();
    var street = $('#salon_street').val();
    var number = $('#salon_number').val();
    var postal_code = $('#salon_postal_code').val();
    var municipality = $('#salon_municipality').val();
    var province = $('#salon_province').val();

    if ($.trim(salon_name) == '') {
        $('#salon_name').focus();
        return false;
    }
    if ($.trim(street) == '') {
        $('#salon_street').focus();
        return false;
    }
    if ($.trim(number) == '') {
        $('#salon_number').focus();
        return false;
    }
    if ($.trim(postal_code) == '') {
        $('#salon_postal_code').focus();
        return false;
    }
    if ($.trim(municipality) == '') {
        $('#salon_municipality').focus();
        return false;
    }
    if ($.trim(province) == '') {
        $('#salon_province').focus();
        return false;
    }

    var frm = new FormData($('#frm2')[0]);
    // var modal = document.getElementById('myModal');
    $('#form_submit2').attr('disabled', true);
    $(".locationPopUp").fadeOut();
    $.ajax({
        url: "{{route('salon_add')}}",
        type: 'post',
        data: frm,
        contentType: false,
        processData: false,
        success: function(r) {
            $('#form_submit2').html('Save').attr('disabled', false);
            if (r == 'SUC') {
                location.reload();
            }
            if (r == 'ERR') {
                alert('Something went wrong. Please contact');
            }
        }
    })
}

function show_fix_loc_sec() {
    $('.fix_loc_sec').show();
    $('.dis_loc_sec').hide();
    $('._fix_loc').addClass('active');
    $('._des_loc').removeClass('active');

    $('#des_all_gender_chk').prop('checked', false);
    $('#des_men_chk').prop('checked', false);
    $('#des_women_chk').prop('checked', false);
    $('#des_kids_chk').prop('checked', false);
    $('.team_mem_lst_sec').html('');
    $('.salon_cate_sec').html('');
    $('#gen_note_txt').val('');
    $('.des_salon_serv_for_sec,.sub_tem_fix_sec,.salon_cate_sec,.salon_note_sec,.team_mem_sec,.visual_sec').hide();
    $('.tbody').html('');
    $('.salon_cate_dt_sec').hide();
    $('#template_type').val('f');
    $('#fix_info_reg_sec').show();
    $('#des_info_reg_sec').hide();

    show_fixed_loc_detail();
}

function show_des_loc_sec() {
    $('.fix_loc_sec').hide();
    $('.dis_loc_sec').show();
    $('._fix_loc').removeClass('active');
    $('._des_loc').addClass('active');

    $('#all_gender_chk').prop('checked', false);
    $('#men_chk').prop('checked', false);
    $('#women_chk').prop('checked', false);
    $('#kids_chk').prop('checked', false);
    $('.team_mem_lst_sec').html('');
    $('.salon_cate_sec').html('');
    $('#gen_note_txt').val('');
    $('.salon_serv_for_sec,.sub_tem_fix_sec,.salon_cate_sec,.salon_note_sec,.team_mem_sec,.visual_sec').hide();
    $('.tbody').html('');
    $('.salon_cate_dt_sec').hide();
    $('#template_type').val('d');
    $('#fix_info_reg_sec').hide();
    $('#des_info_reg_sec').show();

    show_des_detail();
}

function edit_fix_bio_frm() {
    $('.frm_inp1').attr('disabled', false);
    $('#form_submit1').show();
}

function form_validate1() {
    var fixed_name = $('#fixed_name').val();
    var fixed_bio = $('#fixed_bio').val();
    if ($.trim(fixed_name) == '') {
        $('#fixed_name').focus();
        return false;
    }
    if ($.trim(fixed_bio) == '') {
        $('#fixed_bio').focus();
        return false;
    }

    $('#form_submit1').attr('disabled', true);
    var frm = new FormData($('#frm1')[0]);
    // var modal = document.getElementById('myModal');

    $.ajax({
        url: "{{route('fixed_location_update')}}",
        type: 'post',
        data: frm,
        contentType: false,
        processData: false,
        success: function(r) {
            if (r == 'SUC') {
                $('#form_submit1').html('Save').attr('disabled', false);
                $('.frm_inp1').attr('disabled', true);
                $('#form_submit1').hide();
            }
            if (r == 'ERR') {
                alert('Something went wrong. Please contact');
            }
        }
    })
}


function edit_frm() {
    $('.frm_inp').attr('disabled', false);
    $('#form_submit').show();
    if ($('#prof_h_up_det').length > 0) {
        $('html, body').animate({
            scrollTop: $('#prof_h_up_det').offset().top - 30
        }, 500);
    } else {
        $('html, body').animate({
            scrollTop: $('#ed_sec_').offset().top - 30
        }, 500);
    }
}

function form_validate() {
    var user_type = $('#user_type').val();
    var legal_name = $('#legal_name').val();
    var coc = $('#coc').val();
    var vat = $('#vat').val();
    var street = $('#street').val();
    var postal = $('#postal').val();
    var municipality = $('#profile_municipality').val();
    var province = $('#profile_province').val();
    var registration_doc = $('#registration_doc').val();
    var contact_person_first_name = $('#contact_person_first_name').val();
    var email = $('#email').val();

    if (user_type == "professional"){
        if ($.trim(legal_name) == '') {
            $('#legal_name').focus();
            return false;
        }
        if ($.trim(coc) == '') {
            $('#coc').focus();
            return false;
        }
        if ($.trim(vat) == '') {
            $('#vat').focus();
            return false;
        }
        if ($.trim(street) == '') {
            $('#street').focus();
            return false;
        }
        if ($.trim(postal) == '') {
            $('#postal').focus();
            return false;
        }
        if ($.trim(municipality) == '') {
            $('#profile_municipality').focus();
            return false;
        }
        if ($.trim(province) == '') {
            $('#profile_province').focus();
            return false;
        }
        if ($.trim(contact_person_first_name) == '') {
            $('#contact_person_first_name').focus();
            return false;
        }
    }

    var password = $('#password').val();

    if ($.trim(password) != '') {
        var password = $('#password').val();
        var conf_password = $('#conf_password  ').val();

        if ($.trim(password) == '') {
            $('#password').focus();
            return false;
        }
        if ($.trim(conf_password) == '') {
            $('#conf_password').focus();
            return false;
        }

        if (password != conf_password) {
            $('#conf_password').focus();
            return false;
        }

        $('#upty').val('p');
    }

    $('#frm').submit();
}


/*Desire Location*/

function edit_des_bio_frm() {
    $('.des_frm_inp1').attr('disabled', false);
    $('#des_form_submit1').show();
}

function des_form_validate1() {
    var desire_name = $('#desire_name').val();
    var desire_bio = $('#desire_bio').val();
    if ($.trim(desire_name) == '') {
        $('#desire_name').focus();
        return false;
    }
    if ($.trim(desire_bio) == '') {
        $('#desire_bio').focus();
        return false;
    }
    $('#des_form_submit1').attr('disabled', true);
    var frm = new FormData($('#des_frm1')[0]);
    // var modal = document.getElementById('myModal');

    $.ajax({
        url: "{{route('desire_location_update')}}",
        type: 'post',
        data: frm,
        contentType: false,
        processData: false,
        success: function(r) {
            $('#des_form_submit1').html('Save').attr('disabled', false);
            if (r == 'SUC') {
                // alert('Updated');
                $('.des_frm_inp1').attr('disabled', true);
                $('#des_form_submit1').hide();
            }
            if (r == 'ERR') {
                alert('Something went wrong. Please contact');
            }
        }
    })
}

function delete_service(sid) {
    if (sid == '') {
        return false;
    }

    swal(
        '{{$lang_kwords["confirm_delete_service"]["english"]}}', {
            buttons: {
                cancel: "{{$lang_kwords['alert_cancel']['english']}}",
                catch: {
                    text: "{{$lang_kwords['alert_ok']['english']}}",
                },
                defeat: false,
            },
        }
    )
        .then((value) => {
            switch (value) {

                case "defeat":
                    swal("Got away safely!");
                    break;

                case "catch":
                    delete_service_act(sid);
                    break;

                default:
                    // swal("Got away safely!");
                    return false;
            }
        });
}

function delete_service_act(sid) {
    if (sid != '') {
        // if(!confirm('{{$lang_kwords["confirm_delete_service"]["english"]}}'))return true;

        $.ajax({
            url: "../salon_ajx",
            type: 'post',
            data: {
                'act': 'remove_service',
                'sid': sid,
                '_token': '{{ csrf_token() }}'
            },
            dataType: 'json',
            success: function(r) {
                if (r.status == 'SUCCESS') {
                    /*$('#sid').val(sid);
            $('#salon_act').val('update');
            $('#salon_name').val(r.salon_name);
            $('#salon_street').val(r.street);
            $('#salon_number').val(r.number);
            $('#salon_postal_code').val(r.postal_code);
            $('#salon_municipality').val(r.municipality);
            $('#salon_province').val(r.province);*/

                    $('#serv_sec_m_' + sid).remove();

                    if ($('#serv_frm_sec').find('div.tbody').html() == '') {
                        $('#serv_frm_sec').hide();
                    }

                    // $('.salon_frm_sec, #form_submit2').show();
                    /*$('html, body').animate({
                       scrollTop: $('#frm2').offset().top-30
                   }, 500);*/
                }
                if (r.status == 'ERROR') {
                    alert('Something went wrong. Please contact');
                }
            }
        })
    }
}


function enable_gen_note() {
    $('#gen_not_btn').show();
    $('.edit_notes_enable').attr('disabled', false);
    // $('#gen_note_txt').attr('readonly', false);
}

function enable_team_frm() {
    $("#add_category_btn_p").show();
    $('#team_cate_sec,#team_serv_sec').html('');
    $('#team_s_sec_mn').hide();
    $('#frm3').show();
    $('#team_member_name').val('');
    $('#team_member_bio').val('');
    $('#tm_i').val('');
    $('#team_mem_img').val('');
    $('#tm_act').val('add');
    $('#tm_img_preview').attr('src', "{{ URL::asset('public/images/model/uploadfile.svg')}}");
    $('.tm_img1').show().attr('src', "{{ URL::asset('public/images/model/uploadfile.svg')}}");
    $('.tm_iu').show();
    $('.teammemberPopUp').fadeIn();
    $(".addservices").html('');

    $.ajax({
        url: "../salon_ajx",
        type: 'post',
        data: {
            'act': 'get_cate_serv',
            '_token': '{{ csrf_token() }}',
            'temp_type': $('#template_type').val()
        },
        dataType: 'json',
        success: function(r) {
            if (r.status == 'SUCCESS') {
                var service = r.service;
                var category = r.category;

                tm_category_list = category;
                tm_sub_category_list = service;
            var options_cat = '';
            // $.each(category, function(l, u) {
                var cat_html = '';
                var options_cat = '<option value="" selected>Select Category</option>';
                $.each(category, function(k, v) {
                    var cat_chk = '';
                    // if (u.i ==  v.i){
                    //     cat_chk = 'selected';
                    // }
                    options_cat += '<option value="' + v.i + '" '+cat_chk+'>' + v.cat + '</option>';
                });

                var options_ser = '<li class="item d-flex justify-content-between align-items-center member_defulte_all checked_all checked" data-id="all" data-name="all" data-value="member_defulte">Select Category for subcategory</li>';
                // $.each(service, function(e, f) {
                //     if (u.i ==  f.c){
                //         options_ser += '  <li class="item d-flex justify-content-between align-items-center member_defulte checked_all temp_serv checked" data-id="'+ f.i + '" data-c="'+  u.i + '" data-name="member_defulte" data-value="member_defulte_all">' +
                //             '<span>'+ f.service_name + '</span><span class="sv-checkbox"><i class="fa fa-check check-icon"></i></span>' +
                //             '</li>';
                //     }
                // });

                var html_id = "text_" + Date.now()+Math.floor((Math.random() * 9999999) + 1);
                cat_html += `
                    <div class="d-flex mt-2 align-items-center justify-content-between srv" id="`+html_id+`">
                        <div class="d-flex gap-1">
                            <div class="px-0">
                                <label class="custom-select custom-select-address">
                                    <select class="mollure-select-address frmto temp_ct" onchange="get_sub_category_from_list(this,'sub_`+html_id+`')">
                                       `+options_cat+`
                                    </select>
                                </label>
                            </div>
                            <div class=" px-0">
                                <div class="services-container position-relative">
                                    <div class="service-selector d-flex justify-content-between align-items-center p-3">
                                        <p class="mb-0">Select Service</p>
                                        <img src="{{ URL::asset('public/images/model/select-down-arrow.svg')}}" alt="">
                                    </div>
                                    <ul class="service-items position-absolute" id="sub_`+html_id+`">
                                        `+options_ser+`
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <span type="button" class="dlt_btn" onclick="remove_html('`+html_id+`')">
                            <img src="{{ URL::asset('public/images/model/trash.svg')}}" alt="">
                        </span>
                    </div>`;
                $(".addservices").append(cat_html);
            // });

            $('.custom-select').each(function () {
                setupSelector($(this));
            });

            }
            if (r.status == 'ERROR') {
                alert('Something went wrong. Please contact');
            }
        },
        error: function(e) {
            alert('Something went wrong. Please contact');
        }
    });
}

function add_option_cat_sub_member() {
    var cat_html = '';
    var options_cat = '<option value="" selected>Select Category</option>';
    $.each(tm_category_list , function(k, v) {
        options_cat += '<option value="' + v.i + '">' + v.cat + '</option>';
    });

    var options_ser = '<li class="item d-flex justify-content-between align-items-center member_defulte_all checked_all checked" data-id="all" data-name="all" data-value="member_defulte">Select Category for subcategory</li>';

    var html_id = "text_" + Date.now()+Math.floor((Math.random() * 9999999) + 1);
    cat_html += `
                    <div class="d-flex mt-2 align-items-center justify-content-between srv" id="`+html_id+`">
                        <div class="d-flex gap-1">
                            <div class="px-0">
                                <label class="custom-select custom-select-address">
                                    <select class="mollure-select-address frmto temp_ct" onchange="get_sub_category_from_list(this,'sub_`+html_id+`')">
                                       `+options_cat+`
                                    </select>
                                </label>
                            </div>
                            <div class=" px-0">
                                <div class="services-container position-relative">
                                    <div class="service-selector d-flex justify-content-between align-items-center p-3">
                                        <p class="mb-0">Select Service</p>
                                        <img src="{{ URL::asset('public/images/model/select-down-arrow.svg')}}" alt="">
                                    </div>
                                    <ul class="service-items position-absolute" id="sub_`+html_id+`">
                                        `+options_ser+`
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <span type="button" class="dlt_btn" onclick="remove_html('`+html_id+`')">
                            <img src="{{ URL::asset('public/images/model/trash.svg')}}" alt="">
                        </span>
                    </div>`;
    $(".addservices").append(cat_html);
    // });

    $('#'+html_id).find('.custom-select').each(function () {
        setupSelector($(this));
    });

    $(".addservices .temp_ct").each(function () {
        var des_province = $(this).val();
        if (des_province != ""){
            $('#'+html_id).find('.custom-select option[value='+des_province+']').remove();
        }
    })

    if (tm_category_list.length == $(".addservices .temp_ct").length){
        $("#add_category_btn_p").hide();
    }
}

function show_hide_des_mun_ul(el) {
    // console.log('aaaa');
    var el1 = el.siblings('.des_mun_ul');
    // console.log(el1);
    el1.toggle();
}

function create_team_sec_old(team) {
    var team_str = "<div style='' class='row mb-3'>";
    $.each(team, function(k, v) {
        if (!v.bio)
            v.bio = '';
        team_str += "<div class='border col-12 col-sm-5 col-md-3 mb-3 me-2 p-2' id='tm_sec_" + v.id + "' style='    position: relative;'>";
        team_str += "<p class='mb-4'>\"" + v.bio + "\"</p>";
        team_str += "<div class='d-flex' style='align-items: flex-end;    height: 55px;margin-bottom: 10px;'>";
        team_str += "<div class='mb-2 me-2'>";
        if (v.image != '' && v.image !== null)
            team_str += '<img src="{{asset("public/imgs/team/")}}/' + v.image + '" style="border: 1px solid #b1abab;width:50px;height: 50px;border-radius:35px">';
        else
            team_str += '<img src="{{asset("public/imgs/placeholder-img.jpg")}}" style="border: 1px solid #b1abab;height: 50px;width:50px;border-radius:35px">';
        team_str += "</div>";

        team_str += "<div class='mb-2'>";
        team_str += "<p>" + v.member + "</p>";
        team_str += "</div>";

        team_str += "</div>";

        team_str += "<div class='team_mem_cate_serv'>";
        team_str += '<ul>';
        if (v.all_cate == 'all' && v.all_serv == 'all') {
            team_str += '<li class="tmctli">{{$lang_kwords["all-categories-and-services"]["english"]}}</li>';
        }
        /*else if(v.all_cate=='all' && v.all_serv.length<=0){
        team_str+='<li class="tmctli">All Categories</li>';
        }*/
        else {

            var tcate = v.category;
            var tserv = v.service;

            if (tcate.length > 0) {
                $.each(tcate, function(ck, cv) {
                    team_str += '<li class="tmctli">' + cv.name;

                    if (v.all_serv != 'all' && tserv[cv.i]) {
                        team_str += '<select id="">';

                        team_str += '<option style="display:none"></option>';
                        $.each(tserv[cv.i], function(sk, sv) {
                            team_str += '<option>' + sv + '</option>';
                        })

                        team_str += '</select>';
                    }

                    team_str += '</li>';
                })
            }
            team_str += '</ul>';

            /*team_str+='<ul>';
      var tserv = v.service;
      if(tserv.length>0){
         $.each(tserv,function(sk,sv){
            team_str+='<li class="licls">'+sv+'</li>';
         })
      }
    team_str+='</ul>';*/
        }

        team_str += "</div>";

        team_str += '<p class="mb-0" style="position: absolute;right: 10px;bottom: 0;"><i class="cursor-pointer" onclick="edit_team_member(\'' + v.id + '\')"><img src="{{URL::asset("public/images/edit_pen.svg")}}"/></i> &nbsp; <i class="text-danger cursor-pointer" onclick="delete_team_member(\'' + v.id + '\')"><img src="{{URL::asset("public/images/trash.svg")}}"/></i></p>';


        team_str += "</div>";
    });

    team_str += "</div>";

    return team_str;
}

function create_team_sec(team) {
    var team_str = "<div style='' class='tem_m_sec_main'>";
    $.each(team, function(k, v) {

        if (!v.bio)
            v.bio = '';

        team_str += "<div class='tem_m_sec' id='tm_sec_" + v.id + "'>";

        team_str += "<div class='d-flex d-flex justify-content-center align-items-center' style='margin-bottom: 20px;'>";
        team_str += "<div class='mb-2' style='margin-right:5px;'>";
        if (v.image != '' && v.image !== null)
            team_str += '<img src="{{asset("public/imgs/team/")}}/' + v.image + '" style="border: 1px solid #b1abab;width:60px;height: 60px;border-radius:35px">';
        else
            team_str += '<img src="{{asset("public/imgs/placeholder-img.jpg")}}" style="border: 1px solid #b1abab;height: 60px;width:60px;border-radius:35px">';
        team_str += "</div>";

        team_str += "<div class='mb-2 px-2'>";
        team_str += "<p class='tm_name_p'>" + v.member + "</p>";
        team_str += "<p class='tm_bio_p'>" + v.bio + "</p>";
        team_str += "</div>";
        team_str += "<div class='mb-2 tm_rating_secm' style='margin-left:auto'>";
        team_str += "<div class='tm_rating_sec text-center'>";
        team_str += '<span><img src="{{URL::asset("public/icons/rating_ic.png")}}"></span>';
        team_str += '<span><img src="{{URL::asset("public/icons/rating_ic.png")}}"></span>';
        team_str += '<span><img src="{{URL::asset("public/icons/rating_ic.png")}}"></span>';
        team_str += '<span><img src="{{URL::asset("public/icons/rating_ic.png")}}"></span>';
        team_str += '<span><img src="{{URL::asset("public/icons/rating_ic.png")}}"></span>';

        team_str += "</div>";
        team_str += '<p class="review_p" style="">100 Reviews</p>';
        team_str += "</div>";

        team_str += "</div>";


        team_str += "<div class='team_mem_cate_serv'>";
        team_str += '<ul>';

        if (v.all_cate == 'all' && v.all_serv == 'all') {
            team_str += '<li class="tmctli">{{$lang_kwords["all-categories-and-services"]["english"]}}</li>';
        }
        /*else if(v.all_cate=='all' && v.all_serv.length<=0){
  team_str+='<li class="tmctli">All Categories</li>';
         }*/
        else {

            var tcate = v.category;
            var tserv = v.service;

            if (tcate.length > 0) {
                $.each(tcate, function(ck, cv) {
                    // team_str+='<li class="licls">'+cv+'</li>';
                    team_str += '<li class="tmctli">' + cv.name;
                    if (v.all_serv != 'all' && tserv[cv.i]) {
                        team_str += '&nbsp; <select id="">';

                        team_str += '<option style="display:none"></option>';
                        $.each(tserv[cv.i], function(sk, sv) {
                            team_str += '<option>' + sv + '</option>';
                        })

                        team_str += '</select>';
                    }
                    team_str += '</li>';
                })
            }
            team_str += '</ul>';

            /*team_str+='<ul>';
      var tserv = v.service;
      if(tserv.length>0){
         $.each(tserv,function(sk,sv){
            team_str+='<li class="licls">'+sv+'</li>';
         })
      }
    team_str+='</ul>';*/
        }
        team_str += "</div>";

        team_str += '<p class="mb-0" style="text-align:right"><i class="cursor-pointer" onclick="edit_team_member(\'' + v.id + '\')"><img src="{{URL::asset("public/images/edit_pen.svg")}}"/></i> &nbsp; <i class="text-danger cursor-pointer" onclick="delete_team_member(\'' + v.id + '\')"><img src="{{URL::asset("public/images/trash.svg")}}"/></i></p>';

        team_str += "</div>";


    });



    team_str += "</div>";

    return team_str;
}


function ValidateSize(file, ph) {
            /*var FileSize = file.files[0].size / 1024 / 1024;
    if (FileSize > 10) {
        alert('File size exceeds 10 MB');
        if(ph=='')
        $(file).val('');
        else
        $('#'+ph).val('');
        return 0;
    }*/

    var val = $("#" + ph).val();
    var flg = 0;

    console.log(val);
    switch (val.substring(val.lastIndexOf('.') + 1).toLowerCase()) {
        case 'jpeg':
        case 'jpg':
        case 'png':
            flg = 1;
            break;
        default:
            $("#" + ph).val('');
            alert("Valid format: jpeg, jpg, png");
            break;
    }
    return flg;
}

function readURL(input, ph) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {

            if (ph == 'doc-reg-coc')
                $('#registration_doc_prev').attr('src', e.target.result).show();

            if (ph == 'fixed_pic') {
                $('.fx_img1').attr('src', e.target.result).show();
                $('.fx_iu').hide();
            }

            if (ph == 'team_mem_img') {
                $('.tm_img1').attr('src', e.target.result).show();
                $('.tm_iu').hide();
            }

            if (ph == 'desire_pic') {
                $('.ds_img1').attr('src', e.target.result).show();
                $('.ds_iu').hide();
            }

            // $('#img_not_up_spn').hide();

        };
        reader.readAsDataURL(input.files[0]);
    }
}

function set_url(t) {
    const url = new URL(window.location.href);
    url.searchParams.set('t', t);
    window.history.replaceState(null, null, url);
}

function edit_des_location(di) {
    // if (di != '' && di != '0') {
    $(".adddlocation").html('');
    $("#addprovince_btn_p").show();
        $.ajax({
            url: "../salon_ajx",
            type: 'post',
            data: {
                'act': 'get_des_location',
                // 'di': di,
                '_token': '{{ csrf_token() }}'
            },
            dataType: 'json',
            success: function(r) {
                if (r.status == 'SUCCESS') {


                    $.each(r.data, function(e, data) {
                    if (data.desire_location_type == 'specific') {
                        $('.add_province_sec,.add_mun_spn,#des_form_submit2').show();
                        $('#des_frm2').find('input[name="act"]').val('edit');
                        // $('#des_frm2').find('input#lid').val(di);
                        $('#des_province').val(data.desire_province).attr('disabled', true);
                        $('#des_municipalitydefult').html('');
                        // $('#des_provincedefult option[value='+data.desire_province+']').attr("selected","selected");

                        var municipality_list = data.municipality_list;

                        var provc = '';
                        $.each(r.province, function(k ,s) {
                            var prov_chk = '';
                            if (data.desire_province == s.name){
                                prov_chk = 'selected';
                            }
                            provc += '<option data-i="'+ s.id +'" value="'+ s.name +'" '+prov_chk+'>'+ s.name +'</option>';
                        });



                        var all_chk = '';
                        if (data.desire_municipality.length == data.municipality_list.length || data.desire_municipality == false){
                            all_chk = 'checked';
                        }
                        var options_ser = '<li class="item d-flex justify-content-between align-items-center loc_defulte'+data.desire_province_id+'_all checked_all '+all_chk+'" data-id="all" data-name="all" data-value="loc_defulte'+data.desire_province_id+'">' +
                            '<span>All</span><span class="sv-checkbox"><i class="fa fa-check check-icon"></i></span>' +
                            '</li>';
                        $.each(municipality_list, function(e, f) {
                            var serv_chk = '';
                            if (jQuery.inArray(f.name, data.desire_municipality) !== -1){
                                serv_chk = 'checked';
                            }
                            if (data.desire_municipality == false){
                                serv_chk = 'checked';
                            }
                            options_ser += '<li class="item d-flex justify-content-between align-items-center loc_defulte'+data.desire_province_id+' checked_all temp_municipality '+serv_chk+'" data-id="'+ f.i + '" data-name="loc_defulte'+data.desire_province_id+'" data-value="loc_defulte'+data.desire_province_id+'_all">' +
                                '<span>'+ f.name + '</span><span class="sv-checkbox"><i class="fa fa-check check-icon"></i></span>' +
                                '</li>';
                        });
                        var html_id = "text_" + Date.now()+Math.floor((Math.random() * 9999999) + 1);
                        var html = `<div class="d-flex mt-2 align-items-center justify-content-between srv des_loction" id="`+html_id+`">
                                        <input type"text" class="d-none" name="table_id" value="`+data.desire_province_id+`">
                                         <div class="d-flex gap-1">
                                             <div class="px-0">
                                                 <label class="custom-select custom-select-address"  style="pointer-events : none">
                                                     <select class="mollure-select-address frmto temp_ct" name="des_province" id="des_province`+html_id+`" onchange="get_municiplaity('`+html_id+`','`+html_id+`')">
                                                         <option value="">{{$lang_kwords['select']['english']}} {{$lang_kwords['province']['english']}}</option>
                                                         `+provc+`
                                                     </select>
                                                 </label>
                                             </div>
                                             <div class=" px-0">
                                                 <div class="services-container position-relative">
                                                     <div class="service-selector d-flex justify-content-between align-items-center p-3">
                                                         <p class="mb-0">{{$lang_kwords['select']['english']}} {{$lang_kwords['municipality']['english']}}</p>
                                                         <img src="{{ URL::asset('public/images/model/select-down-arrow.svg')}}" alt="">
                                                     </div>
                                                     <ul class="service-items position-absolute des_municipality" id="des_municipality`+html_id+`">
                                                                `+options_ser+`
                                                     </ul>
                                                 </div>
                                             </div>
                                         </div>
                                         <span type="button" class="dlt_btn" onclick="delete_des_location('`+data.desire_province_id+`','`+html_id+`')">
                                                 <img src="{{ URL::asset('public/images/model/trash.svg')}}" alt="">
                                             </span>
                                     </div>`;

                        $('.adddlocation').append(html);
                        $('#'+html_id).find('.custom-select').each(function () {
                            setupSelector($(this));
                        });
                    }
                    });

                    var length_of_province = `{{ count($province) }}`;
                    if (length_of_province == $(".adddlocation .temp_ct").length){
                        $("#addprovince_btn_p").hide();
                    }
                }
                if (r.status == 'ERROR') {
                    alert('Something went wrong. Please contact');
                }
            }
        })
    // }
}

function sel_all_temp_ct() {
    $('.temp_ct').prop('checked', true);

    show_h_temp_service();
    check_all_tmserv();
}

function sel_all_temp_serv() {
    let car = new Array;
    $('.temp_ct:checked').each(function() {
        car.push($(this).val());
    });

    $('.temp_serv').each(function() {
        if (jQuery.inArray($(this).attr('data-c'), car) != -1) {
            $(this).prop('checked', true);
        }
    })
}

function show_h_temp_service() {
    let car = new Array;
    $('.temp_ct:checked').each(function() {
        car.push($(this).val());
    });

    $('.temp_serv').each(function() {

        if (jQuery.inArray($(this).attr('data-c'), car) != -1) {
            $(this).closest('label').show();
        } else {
            $(this).prop('checked', false);
            $(this).closest('label').hide();
            $('.temp_serv_all').prop('checked', false);
        }
    })
}

$(document).on('change', '.temp_serv', function() {
    check_all_tmserv();
});

function check_all_tmserv() {

    let car = new Array;
    $('.temp_ct:checked').each(function() {
        car.push($(this).val());
    });

    if (car.length <= 0) {
        $('.temp_serv_all').prop('checked', false);
        return;
    }

    let sc = 1;
    $('.temp_serv').each(function() {

        console.log($(this).closest('label').is(":visible"));

        if ($(this).closest('label').is(":visible")) {
            if ($(this).prop('checked') === false) {
                $('.temp_serv_all').prop('checked', false);
                sc = 0;
            }
        }
    });

    if (sc == 1) {
        $('.temp_serv_all').prop('checked', true);
    }
}

function check_all_tmcate() {
    let cc = 1;
    $('.temp_ct').each(function() {
        if ($(this).prop('checked') === false) {
            $('.temp_ct_all').prop('checked', false);
            cc = 0;
        }
    });

    if (cc == 1) {
        $('.temp_ct_all').prop('checked', true);
    }
}

$(document).on('change', '.temp_ct', function() {
    show_h_temp_service();
    check_all_tmcate();
    check_all_tmserv();
});


function remove_reg_doc(id) {
    swal(
        '{{$lang_kwords["confirm_delete_doc"]["english"]}}', {
            buttons: {
                cancel: "{{$lang_kwords['alert_cancel']['english']}}",
                catch: {
                    text: "{{$lang_kwords['alert_ok']['english']}}",
                },
                defeat: false,
            },
        }
    )
        .then((value) => {
            switch (value) {

                case "defeat":
                    swal("Got away safely!");
                    break;

                case "catch":
                    remove_reg_doc_act(id);
                    break;

                default:
                    // swal("Got away safely!");
                    return false;
            }
        });
}

function remove_reg_doc_act(id) {
    // if(!confirm('{{$lang_kwords["confirm_delete_doc"]["english"]}}'))return false;

    $.ajax({
        url: "../salon_ajx",
        type: 'post',
        data: {
            'act': 'remove_reg_doc',
            'id': id,
            '_token': '{{ csrf_token() }}'
        },
        dataType: 'json',
        success: function(r) {
            if (r.status == 'SUCCESS') {
                $('#reg_doc_sec_' + id).remove();
            }
            if (r.status == 'ERROR') {
                alert('Something went wrong. Please contact');
            }
        }
    })
}

function close_team_form() {
    $('#frm3').hide();
    $('#team_member_name').val('');
    $('#team_member_bio').val('');
    $('#tm_i').val('');
    $('#team_mem_img').val('');
    $('#tm_act').val('add');
    $('#tm_img_preview').attr('src', "{{ URL::asset('public/images/blank_img_icon.png')}}");
    $('.tm_img1').hide().attr('src', "{{ URL::asset('public/images/model/uploadfile.svg')}}");
    $('.tm_iu').show();
    $("#members_cat_sub").html('');
    $('#team_cate_sec,#team_serv_sec').html('');
    $('#team_s_sec_mn').hide();
}

function add_province_act() {
    $("#addprovince_btn_p").show();
    $('.add_province_sec,#des_form_submit2').show();
    $('#des_province').val('').attr('disabled', false);
    $('.sel_mun_list').html('');
    $('#des_frm2').find('input[name="act"]').val('add');
    $('#des_frm2').find('input#lid').val('');
    // $('#des_form_submit2').attr('data-s','1');
    $('#des_add_prov_btn').attr('data-f', '1');
    $(".adddlocation").html('');
    add_more_d_location(); 
}
function add_province_act1() {
    // $('.add_province_sec,#des_form_submit2').show();
    $('#des_serv_lc_s').show();
    $('#des_add_prov_edit_btn').show();
    $('#des_specific_prov_sec').hide();
    $('#des_form_submit2').hide();
}
function close_add_pr_des() {
    $('.add_province_sec,#des_form_submit2').hide();
    $('#des_serv_lc_e').prop('checked', true);
    $('#des_form_submit2').show(); 

}

function show_preview(img, type) {

    if (type == 'pdf') {
        $('#doc_prev_pdf').attr('src', img).show();
        $('#doc_prev_img').hide().attr('src', '');
    } else {
        $('#doc_prev_img').attr('src', img).show();
        $('#doc_prev_pdf').hide().attr('src', '');
    }

    $('#myModalImg').modal('show');
}

function closeModal(modl) {
    $('#' + modl).modal('hide');
}

$('#salon_province').on('change', function() {
    let i = $(this).find('option:selected').attr('data-i')
    get_municiplaity1(i);

});

var tr = 0;

function get_municiplaity1(i) {
        
    $('#salon_municipality').val('');
    $('#salon_municipality').find('option.pv').remove();

    if (!i) {
        return false;
    }

    tr++;

    $('#prov_spn').show();
   
    $.ajax({
        url: '{{route("municipality_list")}}',
        type: 'post',
        data: {
            'prov': i,
            '_token': '{{ csrf_token() }}',
        },
        dataType: 'json',
        success: function(r) {
            $('#prov_spn').hide();   
            if (r.status == 'SUCCESS') {
                var prov = r.data;
                var str = '';
                $.each(prov, function(k, v) {
                    str += '<option class="pv" data-i="' + v.i + '" value="' + v.name + '">' + v.name + '</option>';
                });

                $('#salon_municipality').append(str);
            }
        },
        error: function(e) {
            $('#prov_spn').hide();
            if (tr < 3) {
                get_municiplaity1(i);
            }
        }
    });
}

function municipality_select(){
    var profile_province = $('#temp_muncipility_id').val();
    var i = $('#profile_province').find('option:selected').attr('data-i');
    if (profile_province!=""){
        get_municiplaity1(i,profile_province)
    }
}

$('#profile_province').on('change', function() {
    let i = $(this).find('option:selected').attr('data-i')
    get_municiplaity1(i);
});

var tr = 0;

function get_municiplaity1(i,select = null) {

    $('#profile_municipality').val('');
    $('#profile_municipality').find('option.pv').remove();
     
    if (!i) {
        return false;
    }

    tr++;

    $('#prov_spn').show();

    $.ajax({
        url: '{{route("municipality_list")}}',
        type: 'post',
        data: {
            'prov': i,
            '_token': '{{ csrf_token() }}',
        },
        dataType: 'json',
        success: function(r) {
            $('#prov_spn').hide();
            if (r.status == 'SUCCESS') {
                var prov = r.data;
                var str = '';
                if (select != null){
                    $.each(prov, function(k, v) {
                        var selected = '';
                        if (select == v.name){
                            selected = 'selected';
                        }
                        str += '<option class="pv" data-i="' + v.i + '" value="' + v.name + '" '+selected+'>' + v.name + '</option>';
                    });
                } else{
                    $.each(prov, function(k, v) {
                        str += '<option class="pv" data-i="' + v.i + '" value="' + v.name + '">' + v.name + '</option>';
                    });
                }

                $('#salon_municipality').append(str);
                $('#salon_municipality').append(str);
            }
        }
    });
}

window.addEventListener('DOMContentLoaded', function() {
    var navItems = document.querySelectorAll('.navbar li');

    // Add click event listener to each navigation item
    navItems.forEach(function(item) {
        item.addEventListener('click', function() {
            // Remove active class from all items
            navItems.forEach(function(navItem) {
                navItem.classList.remove('active');
            });

            // Add active class to the clicked item
            item.classList.add('active');
        });
    });
});