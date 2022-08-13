<?php

namespace App\Http\Livewire\Admin;
use App\Models\Category;
use Livewire\Component;



class CategoryLivewire extends Component
{
    // data from input
    public $name='hello';
    public Category $category;
    public $OK = true;
    public $open_modal = false;
//    public $text = 'C';

    protected $rules = [
        "name" => "required|string|min:3|max:12|regex:/^[\w\s]+$/u"
    ];
    public function updated(){
        $this->validate();
    }

    // public function mount(){
    //     $this->category = new Category;
    // }

    public function store(){

        $data = $this->validate();
        Category::create($data);

        $this->emit('toast','success','با موفقیت بسته بندی ثبت شد');

        // $this->category->save();

    }
    public function update(){

    }
    public function  edit(){
        $this->open_modal = true;
    }

    public function render()
    {
        $this->categories = Category::all();
        return view('livewire.admin.category-livewire');
    }
}
