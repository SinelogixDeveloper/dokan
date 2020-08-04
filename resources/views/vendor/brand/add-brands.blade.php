@extends('vendor.layouts.master')
@section('content')
@include('vendor.include.top')
<style>
   .error {
      color: red;
   }
</style>

<body>
   <div class="main-content" id="panel">
      <!-- Topnav -->
      <!-- Header -->
      <!-- Header -->
      @include('vendor.include.sidebar')
      <!-- Page content -->
      <div class="container-fluid mt--6">
         <div class="row">
            <div class="col-xl-12">
               <div class="card dasbdr_wrapper">
                  <div class="alert alert-success d-none" id="msg_div" style="background-color: #094670;border-color:#094670; ">
                     <span id="res_message"></span>
                  </div>
                  <form id="addcat" method="post" method="{{url('/vendor/add-brand')}}" enctype="multipart/form-data">
                     {{ csrf_field() }}
                     <div class="cph">
                        <div class="row section-header justify-content-between">
                           <div class="cus_title col-md-2">
                              <font style="vertical-align: inherit;">Add New Brand</font>
                           </div>
                           <div class="options float-right">
                              <button type="submit" name="save" value="save" class="btn btn-primary">
                                 <i class="fa fa-check"></i>
                                 <span>
                                    <font style="vertical-align: inherit;">Save</font>
                                 </span>
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
                                       <!-- <div class="col-lg-12 nav-aside">-->
                                       <!--     <ul class="nav nav-tabs nav-tabs-line">-->
                                       <!--         <li class="nav-item">-->
                                       <!--              <a href="#tab-1" data-toggle="tab" data-loaded="true" class="nav-link active show">-->
                                       <!--                 <span class="tab-caption">-->
                                       <!--                     <font style="vertical-align: inherit;">Brand</font>-->
                                       <!--                 </span>-->
                                       <!--             </a>-->
                                       <!--         </li>-->
                                       <!--     </ul>-->
                                       <!--</div>-->
                                       <!--<aside class="col-lg-auto nav-aside">-->
                                       <!--   <ul class="nav nav-tabs nav-tabs-line flex-row flex-lg-column">-->
                                       <!--      <li class="nav-item"><a href="#category-edit-1" data-toggle="tab" data-loaded="true" class="nav-link active show"><i class="fa fa-pencil-alt fa-lg fa-fw"></i><span class="tab-caption"><font style="vertical-align: inherit;">Brand Detail</font></span></a></li>-->
                                       <!--      <li class="nav-item"><a href="#category-edit-2" data-toggle="tab" data-loaded="true" class="nav-link"><i class="fa fa-search fa-lg fa-fw"></i><span class="tab-caption"><font style="vertical-align: inherit;">Search Engines (SEO)</font></span></a></li>-->
                                       <!--      <li class="nav-item"><a href="#category-edit-3" data-toggle="tab" data-loaded="true" class="nav-link"><i class="fa fa-cube fa-lg fa-fw"></i><span class="tab-caption"<font style="vertical-align: inherit;">products</font></span></a></li>-->
                                       <!--      <li class="nav-item"><a href="#category-edit-4" data-toggle="tab" data-loaded="true" class="nav-link"><i class="fa fa-percent fa-lg fa-fw"></i><span class="tab-caption"><font style="vertical-align: inherit;">discounts</font></span></a></li>-->
                                       <!--      <li class="nav-item"><a href="#category-edit-5" data-toggle="tab" data-loaded="true" class="nav-link"><i class="fa fa-users fa-lg fa-fw"></i><span class="tab-caption"><font style="vertical-align: inherit;">ACL</font></span></a></li>-->
                                       <!--      <li class="nav-item"><a href="#category-edit-6" data-toggle="tab" data-loaded="true" class="nav-link"><i class="fa fa-globe fa-lg fa-fw"></i><span class="tab-caption"><font style="vertical-align: inherit;">shops</font></span></a></li>-->
                                       <!--      <li class="nav-item"><a href="#tab-MegaMenu"  data-toggle="tab" class="nav-link" data-tab-name="MegaMenu"><i class="far fa-list-alt fa-lg fa-fw"></i><span class="tab-caption"><font style="vertical-align: inherit;">Mega Menu</font></span></a></li>-->
                                       <!--      <li class="nav-item"><a href="#tab-ContentSlider" data-toggle="tab" class="nav-link" data-tab-name="ContentSlider"><i class="far fa-images fa-lg fa-fw"></i><span class="tab-caption"><font style="vertical-align: inherit;">Content Suffering</font></span></a></li>-->
                                       <!--   </ul>-->
                                       <!--</aside>-->
                                       <div class="col-lg nav-content">
                                          <div class="tab-content">
                                             <div class="tab-pane fade active show" role="tabpanel" id="tab-1">
                                                <table class="add_new_tbl">
                                                   <tbody>
                                                      <tr>
                                                         <td class="adminTitle">
                                                            <div class="ctl-label">
                                                               <label>
                                                                  <font style="vertical-align: inherit;">Brand Name(English)</font>
                                                               </label><a class="hint" href="#" onclick="return false;" tabindex="-1" data-toggle="tooltip" data-placement="left" title="The category's name."><i class="fa fa-question-circle"></i></a>
                                                            </div>
                                                         </td>
                                                         <td class="adminData">
                                                            <input class="text-box single-line" name="brand_name_en" type="text" value="">
                                                         </td>
                                                      </tr>
                                                      <tr>
                                                         <td class="adminTitle">
                                                            <div class="ctl-label">
                                                               <label>
                                                                  <font style="vertical-align: inherit;">Brand Name(Arabic)</font>
                                                               </label><a class="hint" href="#" onclick="return false;" tabindex="-1" data-toggle="tooltip" data-placement="left" title="The category's name."><i class="fa fa-question-circle"></i></a>
                                                            </div>
                                                         </td>
                                                         <td class="adminData">
                                                            <input class="text-box single-line" name="brand_name_er" type="text" value="">
                                                         </td>
                                                      </tr>
                                                      <tr>
                                                         <td class="adminTitle">
                                                            <div class="ctl-label">
                                                               <label for="PictureId">
                                                                  <font style="vertical-align: inherit;">Picture
                                                                  </font>
                                                               </label><a class="hint" href="#" onclick="return false;" tabindex="-1" data-toggle="tooltip" data-placement="left" title="Category Picture.
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
                                                                           <i class="fa fa-upload"></i><span>
                                                                              <font style="vertical-align: inherit;">Upload a file</font>
                                                                           </span>
                                                                           <input type="file" name="brand_image" id="brand_image">
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
                                                               <label>
                                                                  <font style="vertical-align: inherit;">Status</font>
                                                               </label><a class="hint" href="#" onclick="return false;" tabindex="-1" data-toggle="tooltip" data-placement="left" title="The category's name."><i class="fa fa-question-circle"></i></a>
                                                            </div>
                                                         </td>
                                                         <td class="adminData" style="margin-top: 10px;">
                                                            <input name="status" type="checkbox" value="1" style="width: 20px;height: 25px;">
                                                         </td>
                                                      </tr>
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
                                                                           <label for="MetaKeywords">
                                                                              <font style="vertical-align: inherit;">Meta keywords</font>
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
                                                                           <label for="MetaDescription">
                                                                              <font style="vertical-align: inherit;">Meta description</font>
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
                                                                           <label for="MetaTitle">
                                                                              <font style="vertical-align: inherit;">meta Title</font>
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
                                                                           <label for="SeName">
                                                                              <font style="vertical-align: inherit;">
                                                                                 <font style="vertical-align: inherit;">URL Alias
                                                                                 </font>
                                                                              </font>
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
                                                                           <label for="Locales_1__MetaKeywords">
                                                                              <font style="vertical-align: inherit;">
                                                                                 <font style="vertical-align: inherit;">Meta keywords
                                                                                 </font>
                                                                              </font>
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
                                                                           <label for="Locales_1__MetaDescription">
                                                                              <font style="vertical-align: inherit;">
                                                                                 <font style="vertical-align: inherit;">Meta description
                                                                                 </font>
                                                                              </font>
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
                                                                           <label for="Locales_1__MetaTitle">
                                                                              <font style="vertical-align: inherit;">
                                                                                 <font style="vertical-align: inherit;">meta Title
                                                                                 </font>
                                                                              </font>
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
                                                                           <label for="Locales_1__SeName">
                                                                              <font style="vertical-align: inherit;">
                                                                                 <font style="vertical-align: inherit;">URL Alias
                                                                                 </font>
                                                                              </font>
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
                                                <p class="muted">
                                                   <font style="vertical-align: inherit;">
                                                      <font style="vertical-align: inherit;">
                                                         In order to continue, the item must be saved first.
                                                      </font>
                                                   </font>
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