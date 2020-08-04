@extends('vendor.layouts.master')



@section('content')

@include('vendor.include.top')

<body>

<div class="main-content" id="panel">        

    <!-- Header -->

    @include('vendor.include.sidebar')

    <!-- Page content -->  

    <div class="container-fluid mt--6">

         <div class="row">

            <div class="col-xl-12">

               <div class="card dasbdr_wrapper">

                    <div class="cph" style="min-height: 0vh;">

                        <form action="{{url('/vendor/profile')}}" method="post" enctype="multipart/form-data">

                            <div class="row section-header justify-content-between">

                                <div class="cus_title col-md-2">

                                <font style="vertical-align: inherit;">Profile</font>

                                </div>

                                <div class="options float-right">

                                    <button type="submit" name="save" value="save" class="btn btn-primary">

                                        <i class="fa fa-check"></i>

                                        <span><font style="vertical-align: inherit;">Save</font></span>

                                    </button>                                    

                                </div>                        

                            </div>                            

                            @if ($errors->any())

                                <div class="alert alert-warning alert-dismissible fade show">

                                <ul>

                                    @foreach ($errors->all() as $error)

                                        <li>{{ $error }}</li>

                                    @endforeach

                                </ul>

                                </div><br />

                            @endif

                            

                        </div>                    

                    {{ csrf_field() }}

                    <div class="col-lg nav-content">

                        <div class="tab-content">

                            <div class="tab-pane fade active show" role="tabpanel" id="category-edit-1">

                                <table class="add_new_tbl">

                                <tbody>

                                    <tr>

                                        <td class="adminTitle">

                                            <div class="ctl-label">

                                            <label><font style="vertical-align: inherit;">Name</font>

                                            </label><a class="hint" href="#" onclick="return false;" tabindex="-1" data-toggle="tooltip" data-placement="left" title="The category's name."><i class="fa fa-question-circle"></i></a>

                                            </div>

                                        </td>

                                        <td class="adminData">

                                            <input class="form-control" name="name" type="text" value="{{$vendor->name}}">                                

                                        </td>

                                    </tr>

                                    <tr>

                                        <td class="adminTitle">

                                            <div class="ctl-label">

                                            <label ><font style="vertical-align: inherit;">Email</font>

                                            </label><a class="hint" href="#" onclick="return false;" tabindex="-1" data-toggle="tooltip" data-placement="left" title="Complete name displayed as title on the category page."><i class="fa fa-question-circle"></i></a>

                                            </div>

                                        </td>

                                        <td class="adminData">

                                            <input class="form-control" name="email" type="text" value="{{$vendor->email}}">                                

                                        </td>

                                    </tr>                                                                     

                                    <tr>

                                        <td class="adminTitle">

                                            <div class="ctl-label">

                                            <label for="PictureId"><font style="vertical-align: inherit;">Profile Picture</font>

                                            </label><a class="hint" href="#" onclick="return false;" tabindex="-1" data-toggle="tooltip" data-placement="left" title="Category Picture."><i class="fa fa-question-circle"></i></a>

                                            </div>

                                        </td>

                                        <td class="adminData">

                                            <div class="fileupload-container">

                                            <div class="fileupload-thumb-stage">

                                                <div class="fileupload-thumb">

                                                    <input class="hidden" data-val="true" data-val-number="The field 'Bild' must be a number." id="PictureId" name="category_images" type="hidden" value="">

                                                </div>

                                            </div>

                                            <div class="fileupload-controls">

                                                <div class="fileupload">

                                                    <div class="fileupload-buttons">

                                                        <span class="btn btn-secondary fileinput-button">

                                                        <i class="fa fa-upload"></i><span><font style="vertical-align: inherit;">Upload a file</font></span>

                                                        <input type="file" name="profile_images" onchange="readURL(this);">

                                                        </span>                                              

                                                    </div>

                                                </div>

                                            </div>

                                            <div >

                                                <img id="blah" style="max-width:125px;" src="{{ url('dokan/public/vendor_profile/'.$vendor->vendor_image) }}" />

                                            </div>

                                            </div>

                                        </td>

                                    </tr>                                                                                                                                                                          

                                </tbody>

                                </table>

                            </div>

                        </div>

                    </div>

                    </form>

               </div>

            </div>

         </div>

         <!-- Footer -->

         @include('admin.include.footer')

      </div>

</div>        

@include('vendor.include.bottom')

</body>

@endsection

<script>

function readURL(input) {

    if (input.files && input.files[0]) {

        var reader = new FileReader();



        reader.onload = function (e) {

            $('#blah').attr('src', e.target.result);

        };



        reader.readAsDataURL(input.files[0]);

    }

}

</script>

