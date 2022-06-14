@extends('admin.layout.app')
@section('page_content')
<div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h1>{{__('messages.parent_categories_list_text')}}</h1>
                    <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                        <ol class="breadcrumb pt-0">
                            <li class="breadcrumb-item">
                                <a href="{{route('admin.dashboard')}}">{{__('messages.home_text')}}</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                <a href="#">{{__('messages.parent_categories_list_text')}}</a>
                            </li>
                        </ol>
                    </nav>
                    <span><a href="Javascript:void(0)" data-toggle="modal"
                                data-target="#exampleModalContent1" data-whatever="" class="btn btn-primary mb-0 float-right add_cls">{{__('messages.add_parent_categories_text')}}</a></span>
                    <div class="separator mb-5"></div>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                    @endif
                    @if ($message = Session::get('danger'))
                    <div class="alert alert-danger alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                    @endif
                            <table class="data-table" id="data-table">
                                <thead>
                                    <tr>
                                        <th>{{__('messages.add_parent_categories_name_text')}}</th>
                                        <th>{{__('messages.add_parent_categories_name_text_ar')}}</th>
                                        <th>{{__('messages.image_text')}}</th>
                                        <th>{{__('messages.created_at_text')}}</th>
                                        <th>{{__('messages.action_text')}}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($parent_category as $key=>$val)
                                    <tr>
                                        <td>{{$val->name}}</td>
                                        <td>@if($val->ar_name){{$val->ar_name}}@else - @endif</td>
                                        <td>@if($val->image)
                                        <img src="{{url('/')}}/public/{{$val->image}}" width="100" height="100" style="margin-top: 10px" id="image">
                                            @else
                                        <img src="{{url('/')}}/public/noimage.png" width="100" height="100" style="margin-top: 10px" id="image">

                                            @endif
                                        </td>
                                        <td>{{$val->created_at}}</td>
                                        <td>
                                            <a href="javascript:void(0)" data-id="{{$val->id}}" data-name="{{$val->name}}" data-ar_name="{{$val->ar_name}}" data-image="{{$val->image}}" class="edit_cls btn btn-success text-white">{{__('messages.edit_title')}}</a>

                                            <a href="javascript:void(0)" data-id="{{$val->id}}" class="delete_cls btn btn-danger text-white">{{__('messages.delete_title')}}</a>
                                        </td>

                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModalContent1" tabindex="-1" role="dialog"
                                aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title title_cls" id="">{{__('messages.add_parent_categories_text')}}</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form id="add_form" action="{{route('admin.post_parent_category')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                        <div class="modal-body">
                                                <input type="hidden" name="id" value="" id="id">
                                                <div class="form-group">
                                                    <label for=""
                                                        class="col-form-label">{{__('messages.add_parent_categories_name_text')}}</label>
                                                    <input type="text" class="form-control" id="name" name="name">
                                                </div>

                                                <div class="form-group">
                                                    <label for=""
                                                        class="col-form-label">{{__('messages.add_parent_categories_name_text_ar')}}</label>
                                                    <input type="text" class="form-control" id="ar_name" name="ar_name">
                                                </div>

                                                <div class="form-group">
                                                    <label for="" class="col-form-label">{{__('messages.image_text')}}</label><br>
                                                    <input type="file" name="image" class="file_image" accept="image/*">
                                                    <br>
                                                    <label id="image-error" class="error" for="image" style="display: none;"></label>
                                                    <br>
                                                    <img src="{{url('/')}}/parent_category/noimage.png" width="100" height="100" style="margin-top: 10px" id="s_image">
                                                </div>


                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">{{__('messages.cancel_text')}}</button>
                                            <button type="submit" class="btn btn-primary save_btn">{{__('messages.save_text')}}</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ __('messages.delete_parent_categories_text') }}</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body pb-4">
                {{__('messages.delete_parent_categories_title_text')}}
            </div>
            <div class="modal-footer">
                <form id="delete-form" action="{{ route('admin.delete_parent_category') }}" method="POST">
                    @csrf
                <button class="btn btn-dark" type="button" data-dismiss="modal">{{ __('messages.cancel_text') }}</button>
                <button class="btn btn-primary delete_btn" type="submit">
                    {{ __('messages.ok_text') }}
                </button>
                <input type="hidden" name="id" value="" id="d_id">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script_js')
<script type="text/javascript">
    $("#data-table").DataTable({
        sDom: '<"row view-filter"<"col-sm-12"<"float-right"l><"float-left"f><"clearfix">>>t<"row view-pager"<"col-sm-12"<"text-center"ip>>>',

        drawCallback: function () {
          $($(".dataTables_wrapper .pagination li:first-of-type"))
            .find("a")
            .addClass("prev");
          $($(".dataTables_wrapper .pagination li:last-of-type"))
            .find("a")
            .addClass("next");

          $(".dataTables_wrapper .pagination").addClass("pagination-sm");
        },
        language: {
          paginate: {
            previous: "<i class='simple-icon-arrow-left'></i>",
            next: "<i class='simple-icon-arrow-right'></i>"
          },
          search: "_INPUT_",
          searchPlaceholder: messages.data_table_search_placeholder_text,
          lengthMenu: messages.data_table_item_per_page_text+" _MENU_ ",
          info:messages.data_table_pagination_showing_text+" _START_ "+messages.data_table_pagination_to_text+" _END_ "+messages.data_table_pagination_of_text+" _TOTAL_ "+messages.data_table_pagination_entries_text,

        },
      });

    $("#add_form").validate({
        rules: {

          name: {
            required: true,
            remote: {
                url: SITE_URL + "/admin/check-parent-category",
                type: "post",
                data: {
                    name: function () {
                        return $("#name").val();
                    },
                    id: function () {
                        return $("#id").val();
                    },
                },
            },
          },
          ar_name:{
            required:true,
          },

          image: {
            required: {
                    depends: function (element) {
                        if ($("#id").val() != "") {
                            return false;
                        } else {
                            return true;
                        }
                    }
            },
            extension: "jpg|jpeg|png"
          },

        },
        messages: {
          name: {
            required:messages.name_required,
            remote:messages.parent_categories_already_exits,
          },
         ar_name: {
            required:messages.name_required,
          },

          image: {
            required:messages.image_required,
            extension:messages.accept_image_type,
          },
        },
        submitHandler: function (form) {
          buttonDisabled(".save_btn");
          form.submit();

        },
      });

    function readURL(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
          $('#s_image').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]); // convert to base64 string
      }
    }

    $(".file_image").change(function() {
        //alert("yes");
        file_image = $('.file_image').valid();
        if(file_image) {
            readURL(this);
        }

    });

    $(document).on('click','.edit_cls',function(){
        id= $(this).attr('data-id');
        name= $(this).attr('data-name');
        ar_name= $(this).attr('data-ar_name');
        image= $(this).attr('data-image');

        $(".title_cls").html(messages.edit_parent_categories_text);
        $("#id").val(id);
        $("#name").val(name);
        $("#ar_name").val(ar_name);
        if(image!='') {
            $("#s_image").attr('src',SITE_URL+'parent_category/'+image);
        } else {
            $("#s_image").attr('src',SITE_URL+'parent_category/noimage.png');
        }
        $("#exampleModalContent1").modal('show');
    });

    $(document).on('click','.delete_cls',function(){
        id= $(this).attr('data-id');

        $("#d_id").val(id);

        $("#deleteModal").modal('show');
    });

    $(document).on('click','.delete_btn',function(){
        buttonDisabledWithoutDisabled(".delete_btn");
    });

    $(document).on('click','.add_cls',function(){
        $(".title_cls").html(messages.add_parent_categories_text);
        $("#id").val('');
        $("#name").val('');
        $("#s_image").attr('src',SITE_URL+'parent_category/noimage.png');
        //$("#exampleModalContent1").modal('show');
    });



</script>
@endsection
