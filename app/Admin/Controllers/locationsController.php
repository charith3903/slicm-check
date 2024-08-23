<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\locations;

class locationsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'locations';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new locations());

        $grid->column('id', __('Id'));
        $grid->column('location', __('Location'));
        $grid->column('address', __('Address'));
        $grid->column('src', __('Src'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(locations::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('location', __('Location'));
        $show->field('address', __('Address'));
        $show->field('src', __('Src'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new locations());

        $form->text('location', __('Location'));
        $form->text('address', __('Address'));
        $form->textarea('src', __('Src'));

        return $form;
    }
}
