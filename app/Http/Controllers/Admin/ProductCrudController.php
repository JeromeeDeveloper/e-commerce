<?php

namespace App\Http\Controllers\Admin;

use App\Models\Categories;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Facades\Storage;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;


/**
 * Class ProductCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ProductCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Product::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/product');
        CRUD::setEntityNameStrings('product', 'products');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::addColumn([
            'name' => 'image',
            'label' => 'Product Image',
            'type' => 'image',
            'prefix' => 'assets/images/',
            'height' => '100px'
        ]);

        CRUD::addColumn([
            'name' => 'name',
            'label' => 'Product'
        ]);


        CRUD::addColumn([
            'name' => 'description',
            'label' => 'Product Description',
        ]);


        CRUD::addColumn([
            'name' => 'price',
            'label' => 'Product Price',
            'type' => 'text',
            'prefix' => '₱'
        ]);



        CRUD::addColumn([
            'name' => 'stock_quantity',
            'label' => 'Product Quantity'
        ]);

        CRUD::addColumn([
            'name' => 'category_id',
            'label' => 'Category',
            'type' => 'select',
            'entity' => 'category',
            'attribute' => 'name'
        ]);


        // CRUD::setFromDb();
        /**
         * Columns can be defined using the fluent syntax:
         * - CRUD::column('price')->type('number');
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::field('image')
        ->type('upload')
        ->withFiles([
            'disk' => 'public_assets_images',
            'path' => 'uploads',
    ]);


        CRUD::addField([
            'name' => 'name',
            'label' => 'Product'
        ]);


        CRUD::addField([
            'name' => 'description',
            'label' => 'Product Description'
        ]);


        CRUD::addField([
            'name' => 'price',
            'label' => 'Product Price',
            'type' => 'number',
            'attributes' => [
                'step' => 'any' // Allows decimal numbers
            ],
            'prefix' => '₱' // Display currency symbol beside the input field
        ]);



        CRUD::addField([
            'name' => 'stock_quantity',
            'label' => 'Product Quantity'
        ]);

        CRUD::addField([
            'name' => 'category_id',
            'label' => 'Category',
            'type' => 'select',
            'entity' => 'category',
            'attribute' => 'name'
        ]);

        /**
         * Fields can be defined using the fluent syntax:
         * - CRUD::field('price')->type('number');
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }

        protected function setupShowOperation()
        {
            $this->setupListOperation();
        }



}
