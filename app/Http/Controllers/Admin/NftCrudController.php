<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\NftRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;




/**
 * Class NftCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class NftCrudController extends CrudController
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
        CRUD::setModel(\App\Models\NFT::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/nft');
        CRUD::setEntityNameStrings('nft', 'nfts');

        // CRUD::addField([
        //     'name' => 'img',
        //     'label' => 'Image',
        //     'type' => 'upload',
        //     'upload' => true,
        //     'disk' => 'uploads', // Use the disk you want
        //     'prefix' => 'nfts', // Specify the subdirectory
        //     // add any other configurations you need
        // ]);
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */

    protected function setupListOperation()
    {
        CRUD::setFromDb(); // set columns from db columns.
        // CRUD::getFid
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
        CRUD::setValidation([
            'title' => 'required|min:3|max:16',
            'img' => 'required',
            'owner_id' => 'required|exists:users,id'

        ]);
        CRUD::setFromDb(); // set fields from db columns.
        // load owner ids to choose
        CRUD::addField([
            'name' => 'owner_id',
            'label' => 'Owner',
            'type' => 'select',
            'entity' => 'owner',
            'attribute' => 'name',
            'model' => 'App\Models\User'

        ]);

        // provie img field and image picker
        CRUD::addField([
            'name' => 'img',
            'label' => 'Image',
            'type' => 'upload',
            'upload' => true,
            'disk' => 'public', // Use the disk you want
            'prefix' => 'nfts', // Specify the subdirectory
            // add any other configurations you need
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
}
