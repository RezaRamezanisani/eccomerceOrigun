<div class="modal fade" id="update-product">
    <div class="modal-dialog modal-lg modal-scrolled">
        <div class="modal-content">
            <div class="modal-header">
                <h2>افزودن محصول</h2>
                <span class="btn-close bg-danger" data-bs-dismiss="modal"></span>
            </div>
            <div class="modal-body">
                <form action="#" class="form__product-update"  method="POST" enctype="multipart/form-data">
                    @csrf
                   @method("patch")
                   <input type="hidden" class="input__hidden" name="" value=""/>
                    <div class="row mt-lg-3 mt-md-3">
                        <div class="form-group col-lg-6 col-md-6">
                            <label class="modal-body-label" for="">نام محصول</label>
                            <input  name="name" class="modal-body-input input__name" type="text">
                            <p class="err err_name text-danger mt-1 fs-6"></p>
                        </div>
                        <div class="form-group col-lg-6 col-md-6">
                            <label class="modal-body-label" for="">قیمت</label>
                            <input  name="price" class="modal-body-input input__price" type="number">
                            <p class="err err_price text-danger mt-1 fs-6"></p>
                        </div>

                    </div>
                    <div class="row mt-lg-5 mt-md-5">
                        <div class="form-group  col-lg-6 col-md-6">
                            <label class="modal-body-label" for="">تخفیف</label>
                            <input  name="discount" class="modal-body-input input__discount" type="number">
                            <p class="err err_discount text-danger mt-1 fs-6"></p>
                        </div>

                        <div class="form-group col-lg-6 col-md-6">
                            <label class="modal-body-label" for="">بسته بندی</label>
                            <select  style="width: 57%;" class="modal-body-select input__category_id" name="category_id" id="">
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
                            <select style="width: 57%;" class="modal-body-select input__brand_id" name="brand_id" id="">
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
                            <textarea name="description" id="" class="modal-body-input border input__description" cols="30" rows="10"></textarea>
                            <p class="err err_description text-danger mt-1 fs-6"></p>
                        </div>
                        <div class="form-group col-lg-6 col-md-6">
                            <label class="modal-body-label" for="">تعداد</label>
                            <input type="number" name="num" class="modal-body-input input__num" />
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
