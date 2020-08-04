@extends('admin.layouts.master')

@section('content')

@include('admin.include.top')

 <style>

   .error{ color:red; } 

  </style>

<body> 

   <div class="main-content" id="panel">

      <!-- Topnav -->

      <!-- Header -->

      <!-- Header -->

      @include('admin.include.sidebar')

      <!-- Page content -->

      <div class="container-fluid mt--6">

         <div class="row">

            <div class="col-xl-12">

               <div class="card dasbdr_wrapper">

                  <div class="alert alert-success d-none" id="msg_div" style="background-color: #094670;border-color:#094670; ">

                     <span id="res_message"></span>

                  </div>

                  <form id="addcat" method="post" enctype="multipart/form-data">

                  {{ csrf_field() }}

                  <div class="cph">

                     <div class="row section-header justify-content-between">

                        <div class="cus_title col-md-2">

                           <font style="vertical-align: inherit;">Add a new category</font>

                        </div>

                        <div class="options float-right">

                           <button type="submit" name="save" value="save" class="btn btn-primary">

                           <i class="fa fa-check"></i>

                           <span><font style="vertical-align: inherit;">Save</font></span>

                           </button>

                           <button type="submit" data-url="{{ url('admin/addcategory') }}" name="save" value="save-continue" class="btn btn-secondary">

                           <span><font style="vertical-align: inherit;">Save and continue Editing</font></span>

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

                     <div class="cus_dashboard">

                        <div class="row mt-2">

                           <div class="col-xl-12">

                              <div class="card shadow-sm mb-4">

                                 <div class="tabbable tabs-left tabs-autoselect row add_new_wraper">

                                    <aside class="col-lg-auto nav-aside">

                                       <ul class="nav nav-tabs nav-tabs-line flex-row flex-lg-column">

                                          <li class="nav-item"><a href="#category-edit-1" data-toggle="tab" data-loaded="true" class="nav-link active show"><i class="fa fa-pencil-alt fa-lg fa-fw"></i><span class="tab-caption"><font style="vertical-align: inherit;">Category Detail</font></span></a></li>

                                          <li class="nav-item"><a href="#category-edit-2" data-toggle="tab" data-loaded="true" class="nav-link"><i class="fa fa-search fa-lg fa-fw"></i><span class="tab-caption"><font style="vertical-align: inherit;">Search Engines (SEO)</font></span></a></li>

                                          <!--<li class="nav-item"><a href="#category-edit-3" data-toggle="tab" data-loaded="true" class="nav-link"><i class="fa fa-cube fa-lg fa-fw"></i><span class="tab-caption"<font style="vertical-align: inherit;">products</font></span></a></li>-->

                                          <!--<li class="nav-item"><a href="#category-edit-4" data-toggle="tab" data-loaded="true" class="nav-link"><i class="fa fa-percent fa-lg fa-fw"></i><span class="tab-caption"><font style="vertical-align: inherit;">discounts</font></span></a></li>-->

                                          <!--<li class="nav-item"><a href="#category-edit-5" data-toggle="tab" data-loaded="true" class="nav-link"><i class="fa fa-users fa-lg fa-fw"></i><span class="tab-caption"><font style="vertical-align: inherit;">ACL</font></span></a></li>-->

                                          <!--<li class="nav-item"><a href="#category-edit-6" data-toggle="tab" data-loaded="true" class="nav-link"><i class="fa fa-globe fa-lg fa-fw"></i><span class="tab-caption"><font style="vertical-align: inherit;">shops</font></span></a></li>-->

                                          <!--<li class="nav-item"><a href="#tab-MegaMenu"  data-toggle="tab" class="nav-link" data-tab-name="MegaMenu"><i class="far fa-list-alt fa-lg fa-fw"></i><span class="tab-caption"><font style="vertical-align: inherit;">Mega Menu</font></span></a></li>-->

                                          <!--<li class="nav-item"><a href="#tab-ContentSlider" data-toggle="tab" class="nav-link" data-tab-name="ContentSlider"><i class="far fa-images fa-lg fa-fw"></i><span class="tab-caption"><font style="vertical-align: inherit;">Content Suffering</font></span></a></li>-->

                                       </ul>

                                    </aside>

                                    <div class="col-lg nav-content">

                                       <div class="tab-content">

                                          <div class="tab-pane fade active show" role="tabpanel" id="category-edit-1">

                                             <table class="add_new_tbl">

                                                <tbody>

                                                   <tr>

                                                      <td class="adminTitle">

                                                         <div class="ctl-label">

                                                            <label><font style="vertical-align: inherit;">Category Name(EN)</font>

                                                            </label><a class="hint" href="#" onclick="return false;" tabindex="-1" data-toggle="tooltip" data-placement="left" title="The category's name."><i class="fa fa-question-circle"></i></a>

                                                         </div>

                                                      </td>

                                                      <td class="adminData">

                                                         <input class="text-box single-line" name="category_name_en" type="text" value=""> <span class="text-danger">{{ $errors->first('category_name') }}</span>                               

                                                      </td>

                                                   </tr>

                                                   <tr>

                                                      <td class="adminTitle">

                                                         <div class="ctl-label">

                                                            <label><font style="vertical-align: inherit;">Category Name(Ar)</font>

                                                            </label><a class="hint" href="#" onclick="return false;" tabindex="-1" data-toggle="tooltip" data-placement="left" title="The category's name."><i class="fa fa-question-circle"></i></a>

                                                         </div>

                                                      </td>

                                                      <td class="adminData">

                                                         <input class="text-box single-line" name="category_name_ar" type="text" value=""> <span class="text-danger">{{ $errors->first('category_name') }}</span>                               

                                                      </td>

                                                   </tr>

                                                   <!--<tr>-->

                                                   <!--   <td class="adminTitle">-->

                                                   <!--      <div class="ctl-label">-->

                                                   <!--         <label ><font style="vertical-align: inherit;">Complete name</font>-->

                                                   <!--         </label><a class="hint" href="#" onclick="return false;" tabindex="-1" data-toggle="tooltip" data-placement="left" title="Complete name displayed as title on the category page."><i class="fa fa-question-circle"></i></a>-->

                                                   <!--      </div>-->

                                                   <!--   </td>-->

                                                   <!--   <td class="adminData">-->

                                                   <!--      <input class="text-box single-line" name="sub_category_name" type="text" value=""><span class="text-danger">{{ $errors->first('sub_category_name') }}</span>                                -->

                                                   <!--   </td>-->

                                                   <!--</tr>-->

                                                   <tr>

                                                      <td class="adminTitle">

                                                         <div class="ctl-label">

                                                            <label for="BadgeStyle"><font style="vertical-align: inherit;">Parent Category</font>

                                                            </label><a class="hint" href="#" onclick="return false;" tabindex="-1" title="Retrieves or sets the type of brand to be displayed next to the category link in the menus"  data-toggle="tooltip" data-placement="left"><i class="fa fa-question-circle"></i></a>

                                                         </div>

                                                      </td>

                                                      <td class="adminData">

                                                         <select data-val="true" data-val-number="The field 'Badge stil' must be a number." data-val-required="" id="parent_category" name="parent_category_en" tabindex="-1" class="select2-hidden-accessible" aria-hidden="true">

                                                          <option  value="">Select English Parent Category</option>

                                                            @foreach($data as $category)

                                                            <option value="{{ $category->id }}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $category->getTranslation('category_name', 'en') }}</font></font>

                                                            </option>

                                                            @endforeach

                                                         </select>

                                                         <i class="fas fa-caret-down sel_dwn-add_new"></i>

                                                      </td>

                                                   </tr>

                                                   <tr>

                                                      <td class="adminTitle">

                                                         <div class="ctl-label">

                                                            <label ><font style="vertical-align: inherit;">Description</font>

                                                            </label><a class="hint" href="#" onclick="return false;" tabindex="-1" data-toggle="tooltip" data-placement="left" title="Description of the category that is displayed above products on the category page."><i class="fa fa-question-circle"></i></a>

                                                         </div>

                                                      </td>

                                                      <td class="adminData">

                                                         <input class="text-box single-line" name="category_description" type="text" value=""> 

                                                         <span class="text-danger">{{ $errors->first('category_description') }}</span>                               

                                                      </td>

                                                   </tr>

                                                   <!--<tr>-->

                                                   <!--   <td class="adminTitle">-->

                                                   <!--      <div class="ctl-label">-->

                                                   <!--         <label ><font style="vertical-align: inherit;">Badge text</font>-->

                                                   <!--         </label><a class="hint" href="#" onclick="return false;" tabindex="-1" data-toggle="tooltip" data-placement="left" title="Gets or sets the text of the badge which will be displayed next to the category link within menus."><i class="fa fa-question-circle"></i></a>-->

                                                   <!--      </div>-->

                                                   <!--   </td>-->

                                                   <!--   <td class="adminData">-->

                                                   <!--      <input class="text-box single-line" name="cat_badge" type="text" value=""> <span class="text-danger">{{ $errors->first('cat_badge') }}</span>                                -->

                                                   <!--   </td>-->

                                                   <!--</tr>-->

                                                   <tr class="brek">                    

                                                   </tr>

                                                   <!--<tr>-->

                                                   <!--   <td class="adminTitle">-->

                                                   <!--      <div class="ctl-label">-->

                                                   <!--         <label for="BadgeStyle"><font style="vertical-align: inherit;">Badge style</font>-->

                                                   <!--         </label><a class="hint" href="#" onclick="return false;" tabindex="-1" title="Retrieves or sets the type of brand to be displayed next to the category link in the menus.-->

                                                   <!--            "  data-toggle="tooltip" data-placement="left"><i class="fa fa-question-circle"></i></a>-->

                                                   <!--      </div>-->

                                                   <!--   </td>-->

                                                   <!--   <td class="adminData">-->

                                                   <!--      <select data-val="true" data-val-number="The field 'Badge stil-->

                                                   <!--         ' must be a number." data-val-required="" id="BadgeStyle" name="badgestyle" tabindex="-1" class="select2-hidden-accessible" aria-hidden="true">-->

                                                   <!--         <option selected="selected" value="0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Secondary</font></font>-->

                                                   <!--         </option>-->

                                                   <!--         <option value="1"><font style="vertical-align: inherit;">Primary</font>-->

                                                   <!--         </option>-->

                                                   <!--         <option value="2"><font style="vertical-align: inherit;">Success</font>-->

                                                   <!--         </option>-->

                                                   <!--         <option value="3"><font style="vertical-align: inherit;">Info</font>-->

                                                   <!--         </option>-->

                                                   <!--         <option value="4"><font style="vertical-align: inherit;">Warning</font>-->

                                                   <!--         </option>-->

                                                   <!--         <option value="5"><font style="vertical-align: inherit;">Danger</font>-->

                                                   <!--         </option>-->

                                                   <!--         <option value="6"><font style="vertical-align: inherit;">Light</font>-->

                                                   <!--         </option>-->

                                                   <!--         <option value="7"><font style="vertical-align: inherit;">Dark</font>-->

                                                   <!--         </option>-->

                                                   <!--      </select>-->

                                                   <!--      <i class="fas fa-caret-down sel_dwn-add_new"></i>-->

                                                   <!--   </td>-->

                                                   <!--</tr>-->

                                                   <tr>

                                                      <td class="adminTitle">

                                                         <div class="ctl-label">

                                                            <label for="PictureId"><font style="vertical-align: inherit;">Category Picture

                                                            </font>

                                                            </label><a class="hint" href="#" onclick="return false;" tabindex="-1" data-toggle="tooltip" data-placement="left" title="Select images by 38*35 .

                                                               "><i class="fa fa-question-circle"></i></a>

                                                         </div>

                                                      </td>

                                                      <td class="adminData">

                                                         <div class="fileupload-container">

                                                            <div class="fileupload-thumb-stage">

                                                               <div class="fileupload-thumb">

                                                                  <input class="hidden" data-val="true" data-val-number="The field 'Bild' must be a number." id="" name="category_images" type="hidden" value="">

                                                               </div>

                                                            </div>

                                                            <div class="fileupload-controls">

                                                               <div class="fileupload">

                                                                  <div class="fileupload-buttons">

                                                                     <!-- <img id="image_preview_container" src="{{ URL::to('/') }}/category_images/image-preview.png"

                        alt="preview image" style="max-height: 150px;"> -->

                                                                     <span class="btn btn-secondary fileinput-button">

                                                                     <i class="fa fa-upload"></i><span><font style="vertical-align: inherit;">Upload a file</font></span>

                                                                     <input type="file" name="category_images" id="category_images">

                                                                     </span>                                              

                                                                  </div>

                                                               </div>

                                                            </div>

                                                         </div>

                                                      </td>

                                                   </tr>

                                                   <tr>

                                                      <td class="adminTitle">

                                                         <div class="ctl-label">

                                                            <label for="BadgeStyle"><font style="vertical-align: inherit;">Category Status</font>

                                                            </label><a class="hint" href="#" onclick="return false;" tabindex="-1" title="Retrieves or sets the type of brand to be displayed next to the category link in the menus.

                                                               "  data-toggle="tooltip" data-placement="left"><i class="fa fa-question-circle"></i></a>

                                                         </div>

                                                      </td>

                                                      <td class="adminData">

                                                         <select data-val="true" data-val-number="The field 'Badge stil

                                                            ' must be a number." data-val-required="" id="BadgeStyle" name="cat_status" tabindex="-1" class="select2-hidden-accessible" aria-hidden="true">

                                                            <option value=""></option>

                                                            <option  value="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Active</font></font>

                                                            </option>

                                                            <option value="0"><font style="vertical-align: inherit;">Inactive</font>

                                                            </option>

                                                         </select>

                                                         <i class="fas fa-caret-down sel_dwn-add_new"></i>

                                                         <span class="text-danger">{{ $errors->first('cat_status') }}</span>

                                                      </td>

                                                   </tr>

                                                   <tr class="brek">                    

                                                   </tr>

                                                   <!--<tr>-->

                                                   <!--   <td class="adminTitle">-->

                                                   <!--      <div class="ctl-label">-->

                                                   <!--         <label for="DefaultViewMode"><font style="vertical-align: inherit;">Standard Display mode</font>-->

                                                   <!--         </label><a class="hint" href="#" onclick="return false;" tabindex="-1" data-toggle="tooltip" data-placement="left" title="Specifies how to display product lists by default.  The customer can also change the look manually.-->

                                                   <!--            "><i class="fa fa-question-circle"></i></a>-->

                                                   <!--      </div>-->

                                                   <!--   </td>-->

                                                   <!--   <td class="adminData">-->

                                                   <!--      <select id="DefaultViewMode" name="displaymode" tabindex="-1" class="select2-hidden-accessible" aria-hidden="true">-->

                                                   <!--         <option value=""></option>-->

                                                   <!--         <option value="grid"><font style="vertical-align: inherit;">GRID</font>-->

                                                   <!--         </option>-->

                                                   <!--         <option value="list"><font style="vertical-align: inherit;">List</font>-->

                                                   <!--         </option>-->

                                                   <!--      </select>-->

                                                   <!--      <i class="fas fa-caret-down sel_dwn-add_new"></i>-->

                                                   <!--      <span class="text-danger">{{ $errors->first('displaymode') }}</span>-->

                                                   <!--   </td>-->

                                                   <!--</tr>-->

                                                   <!--<tr>-->

                                                   <!--   <td class="adminTitle">-->

                                                   <!--      <div class="ctl-label">-->

                                                   <!--         <label for="AllowCustomersToSelectPageSize"><font style="vertical-align: inherit;">Let customers choose page size</font>-->

                                                   <!--         </label><a class="hint" href="#" onclick="return false;" tabindex="-1" data-toggle="tooltip" data-placement="left" title="Whether customers can choose the page size from a predefined list of options."><i class="fa fa-question-circle"></i></a>-->

                                                   <!--      </div>-->

                                                   <!--   </td>-->

                                                   <!--   <td class="adminData">-->

                                                   <!--      <select name="pagesize" class="form-control list-box tri-state select2-hidden-accessible" tabindex="-1" aria-hidden="true">-->

                                                   <!--         <option selected="selected" value=""></option>-->

                                                   <!--         <option value="true"><font style="vertical-align: inherit;">Yes</font>-->

                                                   <!--         </option>-->

                                                   <!--         <option value="false"><font style="vertical-align: inherit;">No</font>-->

                                                   <!--         </option>-->

                                                   <!--      </select>-->

                                                   <!--      <i class="fas fa-caret-down sel_dwn-add_new"></i>-->

                                                   <!--      <span class="text-danger">{{ $errors->first('pagesize') }}</span>-->

                                                   <!--   </td>-->

                                                   <!--</tr>-->

                                                   <!--<tr>-->

                                                   <!--   <td class="adminTitle">-->

                                                   <!--      <div class="ctl-label">-->

                                                   <!--         <label for="PageSizeOptions"><font style="vertical-align: inherit;">Page size options (comma separated)-->

                                                   <!--         </font>-->

                                                   <!--         </label><a class="hint" href="#" onclick="return false;" tabindex="-1" data-toggle="tooltip" data-placement="left" title="Comma-separated list of page size options (eg 10, 5, 15, 20).  The first option is the default page size if none is selected."><i class="fa fa-question-circle"></i></a>-->

                                                   <!--      </div>-->

                                                   <!--   </td>-->

                                                   <!--   <td class="adminData">-->

                                                   <!--      <input class="text-box single-line" id="PageSizeOptions" name="pagesizeoptions" type="text" value="">-->

                                                   <!--      <span class="field-validation-valid" data-valmsg-for="PageSizeOptions" data-valmsg-replace="true"></span>-->

                                                   <!--      <span class="text-danger">{{ $errors->first('pagesizeoptions') }}</span>-->

                                                   <!--   </td>-->

                                                   <!--</tr>-->

                                                   <tr>

                                                   </tr>

                                                   <!--<tr>-->

                                                   <!--   <td class="adminTitle">-->

                                                   <!--      <div class="ctl-label">-->

                                                   <!--         <label for="Alias"><font style="vertical-align: inherit;">Alias</font>-->

                                                   <!--         </label><a class="hint" href="#" onclick="return false;" tabindex="-1"  data-toggle="tooltip" data-placement="left" title="An optional, language-neutral reference name for internal use-->

                                                   <!--            "><i class="fa fa-question-circle"></i></a>-->

                                                   <!--      </div>-->

                                                   <!--   </td>-->

                                                   <!--   <td class="adminData">-->

                                                   <!--      <input class="text-box single-line" id="Alias" name="alias" type="text" value="">-->

                                                   <!--      <span class="field-validation-valid" data-valmsg-for="Alias" data-valmsg-replace="true"></span>-->

                                                   <!--      <span class="text-danger">{{ $errors->first('alias') }}</span>-->

                                                   <!--   </td>-->

                                                   <!--</tr>-->

                                                   <!--<tr>-->

                                                   <!--   <td class="adminTitle">-->

                                                   <!--      <div class="ctl-label">-->

                                                   <!--         <label for="CategoryTemplateId"><font style="vertical-align: inherit;">Category Mall</font>-->

                                                   <!--         </label><a class="hint" href="#" onclick="return false;" tabindex="-1" data-toggle="tooltip" data-placement="left" title="Select a category template.  This template defines how this category (and its products) should be displayed.-->

                                                   <!--            "><i class="fa fa-question-circle"></i></a>-->

                                                   <!--      </div>-->

                                                   <!--   </td>-->

                                                   <!--   <td class="adminData">-->

                                                   <!--      <select data-val="true" name="cat_mall" data-val-number="The field 'Kategorimall-->

                                                   <!--         ' must be a number." data-val-required="" id="CategoryTemplateId" name="CategoryTemplateId" tabindex="-1" class="select2-hidden-accessible" aria-hidden="true">-->

                                                   <!--         <option value="1"><font style="vertical-align: inherit;">Products in Grid or Lines</font>-->

                                                   <!--         </option>-->

                                                   <!--      </select>-->

                                                   <!--      <i class="fas fa-caret-down sel_dwn-add_new"></i>-->

                                                   <!--   </td>-->

                                                   <!--</tr>-->

                                                </tbody>

                                             </table>

                                          </div>

                                          <div class="tab-pane fade " role="tabpanel" id="category-edit-2">

                                             <div class="locale-editor">

                                                <div class="nav-locales tabbable" id="category-seo-localized">

                                                   <div class="tab-content">

                                                      <div class="locale-editor-content tab-pane fade show active" data-lang="de-DE" data-rtl="false" role="tabpanel" id="category-seo-localized-1">

                                                         <table class="add_new_tbl">

                                                            <tbody>

                                                               <tr>

                                                                  <td class="adminTitle">

                                                                     <div class="ctl-label">

                                                                        <label for="MetaKeywords"><font style="vertical-align: inherit;">Meta keywords</font>

                                                                        </label><a class="hint" href="#" onclick="return false;" tabindex="-1" title="Meta-keywords to be added to the heading of the category page

                                                                           "><i class="fa fa-question-circle"></i></a>

                                                                     </div>

                                                                  </td>

                                                                  <td class="adminData">

                                                                     <input id="MetaKeywords" name="cat_meta_key" type="text" value="">

                                                                     <span class="field-validation-valid" data-valmsg-for="MetaKeywords" data-valmsg-replace="true"></span>

                                                                  </td>

                                                               </tr>

                                                               <tr>

                                                                  <td class="adminTitle">

                                                                     <div class="ctl-label">

                                                                        <label for="MetaDescription"><font style="vertical-align: inherit;">Meta description</font>

                                                                        </label><a class="hint" href="#" onclick="return false;" tabindex="-1" title="Meta description to be added to the header of the category.

                                                                           "><i class="fa fa-question-circle"></i></a>

                                                                     </div>

                                                                  </td>

                                                                  <td class="adminData">

                                                                     <textarea cols="20" id="MetaDescription" name="cat_meta_discription" rows="2"></textarea>

                                                                     <span class="field-validation-valid" data-valmsg-for="MetaDescription" data-valmsg-replace="true"></span>

                                                                  </td>

                                                               </tr>

                                                               <tr>

                                                                  <td class="adminTitle">

                                                                     <div class="ctl-label">

                                                                        <label for="MetaTitle"><font style="vertical-align: inherit;">meta Title</font>

                                                                        </label><a class="hint" href="#" onclick="return false;" tabindex="-1" title="Override the page title.  Default is the name of the category.

                                                                           "><i class="fa fa-question-circle"></i></a>

                                                                     </div>

                                                                  </td>

                                                                  <td class="adminData">

                                                                     <textarea cols="20" id="MetaTitle" name="cat_meta_title" rows="2"></textarea>

                                                                     <span class="field-validation-valid" data-valmsg-for="MetaTitle" data-valmsg-replace="true"></span>

                                                                  </td>

                                                               </tr>

                                                               <tr>

                                                                  <td class="adminTitle">

                                                                     <div class="ctl-label">

                                                                        <label for="SeName"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">URL Alias

                                                                        </font></font>

                                                                        </label><a class="hint" href="#" onclick="return false;" tabindex="-1" title="Enter a search engine friendly page name, e.g.  &quot;the best category&quot; to create your URL &quot;http://www.yourStore.com/the-best-category&quot;.  Leave blank to generate it automatically based on the category name.

                                                                           "><i class="fa fa-question-circle"></i></a>

                                                                     </div>

                                                                  </td>

                                                                  <td class="adminData">

                                                                     <input class="text-box single-line" id="SeName" name="cat_meta_url" type="text" value="">

                                                                     <span class="field-validation-valid" data-valmsg-for="SeName" data-valmsg-replace="true"></span>

                                                                  </td>

                                                               </tr>

                                                            </tbody>

                                                         </table>

                                                      </div>

                                                      <div class="locale-editor-content tab-pane fade" data-lang="en-US" data-rtl="false" role="tabpanel" id="category-seo-localized-3">

                                                         <table class="adminContent">

                                                            <tbody>

                                                               <tr>

                                                                  <td class="adminTitle">

                                                                     <div class="ctl-label">

                                                                        <label for="Locales_1__MetaKeywords"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Meta keywords

                                                                        </font></font>

                                                                        </label><a class="hint" href="#" onclick="return false;" tabindex="-1" title="Meta-keywords to be added to the heading of the category page

                                                                           "><i class="fa fa-question-circle"></i></a>

                                                                     </div>

                                                                  </td>

                                                                  <td class="adminData">

                                                                     <input id="Locales_1__LanguageId" name="Locales[1].LanguageId" type="hidden" value="2">

                                                                     <input id="Locales_1__MetaKeywords" name="" type="text" value="">

                                                                     <span class="field-validation-valid" data-valmsg-for="Locales[1].MetaKeywords" data-valmsg-replace="true"></span>

                                                                  </td>

                                                               </tr>

                                                               <tr>

                                                                  <td class="adminTitle">

                                                                     <div class="ctl-label">

                                                                        <label for="Locales_1__MetaDescription"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Meta description

                                                                        </font></font>

                                                                        </label><a class="hint" href="#" onclick="return false;" tabindex="-1" title="Meta description to be added to the header of the category.

                                                                           "><i class="fa fa-question-circle"></i></a>

                                                                     </div>

                                                                  </td>

                                                                  <td class="adminData">

                                                                     <textarea cols="20" id="Locales_1__MetaDescription" name="" rows="2"></textarea>

                                                                     <span class="field-validation-valid" data-valmsg-for="Locales[1].MetaDescription" data-valmsg-replace="true"></span>

                                                                  </td>

                                                               </tr>

                                                               <tr>

                                                                  <td class="adminTitle">

                                                                     <div class="ctl-label">

                                                                        <label for="Locales_1__MetaTitle"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">meta Title

                                                                        </font></font>

                                                                        </label><a class="hint" href="#" onclick="return false;" tabindex="-1" title="Override the page title.  Default is the name of the category.

                                                                           "><i class="fa fa-question-circle"></i></a>

                                                                     </div>

                                                                  </td>

                                                                  <td class="adminData">

                                                                     <textarea cols="20" id="Locales_1__MetaTitle" name="" rows="2"></textarea>

                                                                     <span class="field-validation-valid" data-valmsg-for="Locales[1].MetaTitle" data-valmsg-replace="true"></span>

                                                                  </td>

                                                               </tr>

                                                               <tr>

                                                                  <td class="adminTitle">

                                                                     <div class="ctl-label">

                                                                        <label for="Locales_1__SeName"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">URL Alias

                                                                        </font></font>

                                                                        </label><a class="hint" href="#" onclick="return false;" tabindex="-1" title="Enter a search engine friendly page name, e.g.  &quot;the best category&quot; to create your URL &quot;http://www.yourStore.com/the-best-category&quot;.  Leave blank to generate it automatically based on the category name.

                                                                           "><i class="fa fa-question-circle"></i></a>

                                                                     </div>

                                                                  </td>

                                                                  <td class="adminData">

                                                                     <input class="text-box single-line" id="Locales_1__SeName" name="" type="text" value="">

                                                                     <span class="field-validation-valid" data-valmsg-for="Locales[1].SeName" data-valmsg-replace="true"></span>

                                                                  </td>

                                                               </tr>

                                                            </tbody>

                                                         </table>

                                                      </div>

                                                   </div>

                                                </div>

                                             </div>

                                          </div>

                                          <div class="tab-pane fade" role="tabpanel" id="category-edit-3">

                                             <p class="muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">

                                                In order to continue, the item must be saved first.

                                                </font></font>

                                             </p>

                                          </div>

                                          <div class="tab-pane fade" role="tabpanel" id="category-edit-4">

                                             <div class="alert alert-info">

                                                <i class="fas fa-info"></i>There are no discounts available. Please create at least one discount before making an assignment.

                                             </div>

                                          </div>

                                          <div class="tab-pane fade" role="tabpanel" id="category-edit-5">

                                             <div class="adminContent">

                                                <div class="adminRow">

                                                   <div class="adminTitle">

                                                      <div class="ctl-label">

                                                         <label for="SubjectToAcl">Begränsa åtkomst

                                                         </label><a class="hint" href="#" onclick="return false;" tabindex="-1" title="Bestämmer om denna enhet är föremål för åtkomstbegränsningar (nej = ingen begränsning, ja = endast tillgänglig för utvalda kundgrupper)

                                                            "><i class="fa fa-question-circle"></i></a>

                                                      </div>

                                                   </div>

                                                   <div class="adminData">

                                                      <label class="switch">

                                                      <input data-toggler-for="#pnl-acl" id="SubjectToAcl" name="SubjectToAcl" type="checkbox" value="true"><span class="switch-toggle" data-on="På

                                                         " data-off="Av

                                                         "></span></label>

                                                      <input name="SubjectToAcl" type="hidden" value="false">

                                                      <span class="field-validation-valid" data-valmsg-for="SubjectToAcl" data-valmsg-replace="true"></span>

                                                   </div>

                                                </div>

                                                <div class="adminRow collapsible" id="pnl-acl" style="display: none;">

                                                   <div class="adminTitle">

                                                      <div class="ctl-label">

                                                         <label for="AvailableCustomerRoles">Kundroller

                                                         </label><a class="hint" href="#" onclick="return false;" tabindex="-1" title="Välj kundroller som har åtkomst till enheten. För alla inaktiva roller är denna post dold.

                                                            "><i class="fa fa-question-circle"></i></a>

                                                      </div>

                                                   </div>

                                                   <div class="adminData">

                                                      <div class="custom-control custom-checkbox mb-1">

                                                         <input type="checkbox" name="SelectedCustomerRoleIds" id="customer-role-1" class="custom-control-input" value="1">

                                                         <label class="custom-control-label" for="customer-role-1">Administratoren</label>

                                                      </div>

                                                      <div class="custom-control custom-checkbox mb-1">

                                                         <input type="checkbox" name="SelectedCustomerRoleIds" id="customer-role-2" class="custom-control-input" value="2">

                                                         <label class="custom-control-label" for="customer-role-2">Foren Moderatoren</label>

                                                      </div>

                                                      <div class="custom-control custom-checkbox mb-1">

                                                         <input type="checkbox" name="SelectedCustomerRoleIds" id="customer-role-4" class="custom-control-input" value="4">

                                                         <label class="custom-control-label" for="customer-role-4">Gäste</label>

                                                      </div>

                                                      <div class="custom-control custom-checkbox mb-1">

                                                         <input type="checkbox" name="SelectedCustomerRoleIds" id="customer-role-3" class="custom-control-input" value="3">

                                                         <label class="custom-control-label" for="customer-role-3">Registriert</label>

                                                      </div>

                                                      <div class="custom-control custom-checkbox mb-1">

                                                         <input type="checkbox" name="SelectedCustomerRoleIds" id="customer-role-5" class="custom-control-input" value="5">

                                                         <label class="custom-control-label" for="customer-role-5">Super Administrators</label>

                                                      </div>

                                                   </div>

                                                </div>

                                             </div>

                                             <div class="mt-4">

                                                <div class="alert alert-danger">

                                                   Denna funktion tilldelar ACL-konfigurationen för denna kategori till alla underkategorier och produkter som ingår i denna kategori.

                                                   <br> Kom ihåg att du måste spara ändringar i ACL-konfigurationen

                                                   <br> innan du kan tilldela dem till alla underkategorier och produkter .

                                                   <br> <b> Observera: </b> Tänk på att <b> befintliga ACL-poster kommer att raderas </b>

                                                </div>

                                                <a href="/backend/Admin/Category/InheritAclIntoChildren?categoryId=0" name="inherit-acl-into-children" class="btn btn-danger">

                                                <i class="fa fa-bolt"></i>

                                                <span>Överför denna ACL-konfiguration till barn

                                                </span>

                                                </a>

                                             </div>

                                          </div>

                                          <div class="tab-pane fade" role="tabpanel" id="category-edit-6">

                                             <div class="adminContent">

                                                <div class="adminRow">

                                                   <div class="adminTitle">

                                                      <div class="ctl-label">

                                                         <label for="LimitedToStores">Begränsad till butiker

                                                         </label><a class="hint" href="#" onclick="return false;" tabindex="-1" title="Bestämmer om objektet endast är tillgängligt i vissa butiker.

                                                            "><i class="fa fa-question-circle"></i></a>

                                                      </div>

                                                   </div>

                                                   <div class="adminData">

                                                      <label class="switch">

                                                      <input data-toggler-for="#pnl-available-stores" id="LimitedToStores" name="LimitedToStores" type="checkbox" value="true"><span class="switch-toggle" data-on="På

                                                         " data-off="Av

                                                         "></span></label>

                                                      <input name="LimitedToStores" type="hidden" value="false">

                                                      <span class="field-validation-valid" data-valmsg-for="LimitedToStores" data-valmsg-replace="true"></span>

                                                   </div>

                                                </div>

                                                <div class="adminRow collapsible" id="pnl-available-stores" style="display: none;">

                                                   <div class="adminTitle">

                                                      <div class="ctl-label">

                                                         <label for="AvailableStores">butiker

                                                         </label><a class="hint" href="#" onclick="return false;" tabindex="-1" title="Välj butiker för vilka objektet kommer att visas.

                                                            "><i class="fa fa-question-circle"></i></a>

                                                      </div>

                                                   </div>

                                                   <div class="adminData">

                                                      <div class="custom-control custom-checkbox mb-1">

                                                         <input type="checkbox" name="SelectedStoreIds" id="store-1" class="custom-control-input" value="1">

                                                         <label class="custom-control-label" for="store-1">SmartStore.NET Demo Shop</label>

                                                      </div>

                                                      <div class="custom-control custom-checkbox mb-1">

                                                         <input type="checkbox" name="SelectedStoreIds" id="store-2" class="custom-control-input" value="2">

                                                         <label class="custom-control-label" for="store-2">SmartStore.NET Demo-Shop 2</label>

                                                      </div>

                                                   </div>

                                                </div>

                                             </div>

                                          </div>

                                          <div class="tab-pane fade" role="tabpanel" id="tab-MegaMenu">

                                          </div>

                                          <div class="tab-pane fade" role="tabpanel" id="tab-ContentSlider">

                                          </div>

                                       </div>

                                    </div>

                                 </div>

                              </div>

                           </div>

                        </div>

                     </div>

                  </div>

                  <input type="hidden" name="cat_id" value="" id="cat_id">

                  </form>

               </div>



            </div>

         </div>

         <!-- Footer -->

         @include('admin.include.footer')

      </div>

   </div>

   @include('admin.include.bottom')

</body>

@endsection

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> 

<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>

<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>

<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>

   <script>

    $(document).ready(function () {



      // $('#category_images').change(function(){

          

      //       let reader = new FileReader();

      //       reader.onload = (e) => { 

      //         $('#image_preview_container').attr('src', e.target.result); 

      //       }

      //       reader.readAsDataURL(this.files[0]); 

 

      //   });





    $('#addcat').validate({ // initialize the plugin  

    rules: {

      category_name_en: {

        required: true,

      },

      category_name_ar: {

        required: true,

      },



      sub_category_name: {

        required: true,

      },



      category_description: {

        required: true,

        maxlength: 50

      },



      cat_badge: {

        required: true,

      },



      cat_status: {

        required: true,

      },



      displaymode: {

        required: true,

      },



      pagesize: {

        required: true,

      },



      pagesizeoptions: {

        required: true,

      },



      alias: {

        required: true,

      },

          

    },

    messages: {

        

      category_name_en: {

        required: "Enter Category name In English",

        //maxlength: "Your last name maxlength should be 50 characters long."

      },

      category_name_ar: {

        required: "Enter Category name In Arabic",

        //maxlength: "Your last name maxlength should be 50 characters long."

      },

      sub_category_name: {

        required: "Please enter name",

        maxlength: "Your last name maxlength should be 50 characters long."

      },

      category_description: {

        required: "Please enter description",

        maxlength: "Your last name maxlength should be 50 characters long."

      },

      cat_badge: {

        required: "Please enter the text",

      },

      cat_status: {

        required: "Please select the category status",

      },

      displaymode: {

        required: "Please select the display mode",

      },     

      pagesize: {

        required: "Please select the page size",

      },

       pagesizeoptions: {

        required: "Please select the page size option",

      },

      alias: {

        required: "Please enter the alias",

      },  

    },

    });



    $('#addcat').on('submit', function(event){

      event.preventDefault();

  $.ajax({

   url:$(this).data('url'),

   method:"POST",

   data:new FormData(this),

   dataType:'JSON',

   contentType: false,

   cache: false,

   processData: false,

   success:function(data)

   {

      if(data.status=true)

         {

            

            $('#cat_id').val(data.id);

            $('#category-edit-2').addClass('active show');

            $('#category-edit-1').removeClass('active show');

            $('[href*="category-edit-2"]').addClass('active show');

            $('[href*="category-edit-1"]').removeClass('active show');

            if(data.data==1)

            {

               $('#res_message').show();

               $('#res_message').html(data.msg);

               $('#msg_div').removeClass('d-none');

               setTimeout(function(){

               $('#res_message').hide();

               $('#msg_div').hide();

               },10000);

               setTimeout("window.location.href='/admin/category';",2000);

            }

         }

         else

         {

            alert();

         }

   }

  })

 });



});

</script>