
 <!-- table -->
 <div class="main container" style="margin-top: 100px;">
     <input type="search" class="form-control w-50 mx-auto mb-3" placeholder="جستجو..." onkeyup="search_table(this)">
<div class="table-responsive-md">
    <table class="table table-striped borderless w-100 mx-auto">
        <thead>
            <tr>
                <th>تصویر</th>
                <th style="width: 10%;">نام</th>
                <th>دسته بندی</th>
                <th style="width: 13%;" colspan="2">برند</th>
                <th>قیمت</th>
                <th>تخفیف</th>
                <th>تعداد</th>
                <th>توضیحات</th>
                <th>عملیات</th>
            </tr>
        </thead>
        <tbody>




            @foreach($products as $product)
            <tr>
                <td class='d-none td__id'>{{ $product->id }}</td>
                <td class="pt-2" style="width: 50px;height:auto;overflow: hidden;"><img class="img-responsive rounded-3 td__img" width="100%"
                                                           height="100%"
                                                           src="{{ asset("storage/products/".$product->img) }}"
                                                           alt="no image"></td>
                <td class="pt-3 td__name">{{ $product->name}}</td>
                <td class="pt-3 td__category_name">{{ $product->category->name }}</td>
                <td class="pt-2" style="width: 50px;height: auto;"><img class="img-responsive rounded-3 td__brand_img" width="100%"
                                                           height="100%"
                                                           src="{{ asset("storage/products/".$product->brand->brand_img) }}"
                                                           alt="no image"></td>
                <td class="pt-3 td__brand_name">{{ $product->brand->name }}</td>
                <td class="pt-3 td__price">
                    @if($product->price > 999)
                      {{ $product->price/1000 }} میلیون تومن

                    @else
                     {{ $product->price}} هزار تومن
                     @endif
                    </td>
                <td class="pt-3 td__discount">
                    @if($product->discount === 0.00)
                        بدون تخفیف
                    @else

                        {{ $product->discount."%" }}
                    @endif
                </td>
                <td class="pt-3 td__num" style="width: 15%;">
                    @if($product->num === 0)
                         در انبار موجود نیست
                    @else
                        {{ $product->num . " تا"}}
                    @endif
                </td>
                <td class="pt-3 td__description">{{ $product->description}}</td>
                <td class="pt-3">

                <div class="amaleyat">

                    <a  class="btn btn__admin btn__update ms-1" id="{{ $product->id }}" >آپدیت</a>

                    <a  class="btn btn__admin btn_delete" id="{{ $product->id }}">حذف</a>
                </div>


                </td>

            </tr>
            @endforeach

            </tbody>
    </table>


</div>
</div>
<!-- table -->
<div class="modal fade" id="create-product">
    <div class="modal-dialog modal-lg modal-scrolled">
        <div class="modal-content">
            <div class="modal-header">
                <h2>افزودن محصول</h2>
                <span class="btn-close bg-danger" data-bs-dismiss="modal"></span>
            </div>
            <div class="modal-body">
                <form action="#" class="form__product-create" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mt-lg-3 mt-md-3">
                        <div class="form-group col-lg-6 col-md-6">
                            <label class="modal-body-label" for="">نام محصول</label>
                            <input  name="name" class="modal-body-input" type="text">
                            <p class="err err_name text-danger mt-1 fs-6"></p>
                        </div>
                        <div class="form-group col-lg-6 col-md-6">
                            <label class="modal-body-label" for="">قیمت</label>
                            <input  name="price" class="modal-body-input" type="number">
                            <p class="err err_price text-danger mt-1 fs-6"></p>
                        </div>

                    </div>
                    <div class="row mt-lg-5 mt-md-5">
                        <div class="form-group  col-lg-6 col-md-6">
                            <label class="modal-body-label" for="">تخفیف</label>
                            <input  name="discount" class="modal-body-input" type="number">
                            <p class="err err_discount text-danger mt-1 fs-6"></p>
                        </div>

                        <div class="form-group col-lg-6 col-md-6">
                            <label class="modal-body-label" for="">بسته بندی</label>
                            <select  style="width: 57%;" class="modal-body-select" name="category_id" id="">
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                            <p class="err err_category_id text-danger mt-1 fs-6"></p>
                        </div>
                    </div>
                    <div class="row mt-lg-5 mt-md-5">
                        <div class="form-group col-lg-6 col-md-6">
                            <label class="modal-body-label" for="">برند</label>
                            <select style="width: 57%;" class="modal-body-select" name="brand_id" id="">
                                @foreach($brands as $brand)
                                    <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                @endforeach
                            </select>
                            <p class="err err_brand_id text-danger mt-1 fs-6"></p>
                        </div>
                        <div class="form-group col-lg-6 col-md-6">
                            <label class="modal-body-label" for="">تصویر محصول </label>
                            <input style="width: 57%;" class="form-control modal-body-file" accept="image/*" type="file" name="img">
                            <p class="err err_img text-danger mt-1 fs-6"></p>
                        </div>
                    </div>
                    <div class="row mt-lg-5 mt-md-5">

                        <div class="form-group col-lg-6 col-md-6">
                            <label class="modal-body-label" for="">توضیحات</label>
                            <textarea name="description" id="" class="modal-body-input border" cols="30" rows="10"></textarea>
                            <p class="err err_description text-danger mt-1 fs-6"></p>
                        </div>
                        <div class="form-group col-lg-6 col-md-6">
                            <label class="modal-body-label" for="">تعداد</label>
                            <input type="number" name="num" class="modal-body-input" />
                            <p class="err err_num text-danger mt-1 fs-6"></p>
                        </div>
                    </div>
                    <div class="form-group w-50 mx-auto mt-3  text-center">
                        <input  class='form-control btn-outline-success modal-body-input' type="submit" value="ثبت">
                    </div>


                </form>
            </div>
        </div>
    </div>
</div>

</div>

