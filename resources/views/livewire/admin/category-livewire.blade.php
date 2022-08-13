<div class='container'>
    <!-- this content is in $slot  -->
      @include('admin.navbar-top')

      <div class="main" style='margin-top: 120px;'>
          @if($open_modal)
              @include("livewire.admin.modal.update")
{{--          @else--}}
{{--              {{$open_modal}}--}}
          @endif
        <div class="d-flex justify-content-between mb-3">
          <h4>بسته بندی ها</h4 class='mb-3'>
          <!-- <button class="btn bg-secondary btn__form--fix">ایجاد یک بسته بندی جدید</button> -->
          <form wire:submit.prevent='store' class='w-25'>
                <div class="d-flex w-75 mx-auto" style='flex-direction: column;'>
                    <label for="name">نام بسته بندی:</label>
                    <input wire:model.debounce.500ms='name' class='form-control mt-2' type="text" id='name'/>
                    <span class='text-danger mt-2'>@error('name') {{ $message }} @enderror</span>
                    <button type='submit' class='btn text-white mt-2 bg-success'>ثبت</button>
                </div>
          </form>
        </div>
      {{--table--}}
              <div class="table-responsive-md  w-50 mx-auto">
                  <table class="table table-striped table-white">
                      <tr>
                          <th>اسم</th>
                          <th>عملیات</th>
                      </tr>
                      @foreach($categories as $category)
                          <tr>
                              <td>
                                  {{ $category->name }}
                              </td>
                              <td class="w-25">
                                  <button class="btn" wire:click="delete()"><i class="fas fa-trash" style="cursor:pointer;"></i></button>
                                  <button class="btn" wire:click="edit()"><i class="fas fa-edit" style="cursor:pointer;"></i></button>
                              </td>
                          </tr>
                      @endforeach
                  </table>
              </div>
      {{--table--}}
{{--          <input type="checkbox" wire:model="OK" id="">--}}
{{--          <select wire:model="text" multiple>--}}
{{--              <option>A</option>--}}
{{--              <option>B</option>--}}
{{--              <option>C</option>--}}
{{--          </select>--}}



          <!-- inject data in CategoryTable class -->
                <!-- <div class="form--fix"> -->

                <!-- </div> -->
{{--          <livewire:admin.table.category-table :categories="$categories" />--}}

          <div class="alert__product text-center pt-2"></div>
          <!-- <div wire:poll>{{now()}}</div> -->

      </div>





</div>
          <!-- modal -->
{{--                <div class="modal fade" id='create-category'>--}}
{{--                    <div class="modal-dialog">--}}
{{--                        <div class="modal-content">--}}
{{--                            <div class="modal-header">--}}
{{--                                <h3>ایجاد بسته بندی جدید</h3>--}}
{{--                                <span data-bs-dismiss='modal' class='btn-close'></span>--}}
{{--                            </div>--}}
{{--                            <div class="modal-body p-5">--}}
{{--                                <form wire:submit.prevent='store'>--}}
{{--                                    <div class="d-flex w-75 mx-auto" style='flex-direction: column;'>--}}
{{--                                        <label for="name">نام بسته بندی:</label>--}}
{{--                                        <input wire:model.debounce.500ms='category.name' class='form-control mt-2' type="text" id='name'/>--}}
{{--                                        <span>@error('category.name') {{ $message }} @enderror</span>--}}
{{--                                        <button type='submit' class='btn text-white mt-2 bg-success'>ثبت</button>--}}
{{--                                      </div>--}}
{{--                                </form>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <!-- modal -->
