<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\admission;

class admissionController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'admission';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new admission());

        $grid->column('id', __('Id'));
        $grid->column('Course', __('Course'));
        $grid->column('Name', __('Name'));
        $grid->column('NIC', __('NIC'));
        $grid->column('DOB', __('DOB'));
        $grid->column('Phone_number', __('Phone number'));
        $grid->column('Email', __('Email'));
        $grid->column('Qualification', __('Qualification'));
        $grid->column('Location', __('Location'));
        $grid->column('Days', __('Days'));
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
        $show = new Show(admission::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('Course', __('Course'));
        $show->field('Name', __('Name'));
        $show->field('NIC', __('NIC'));
        $show->field('DOB', __('DOB'));
        $show->field('Phone_number', __('Phone number'));
        $show->field('Email', __('Email'));
        $show->field('Qualification', __('Qualification'));
        $show->field('Location', __('Location'));
        $show->field('Days', __('Days'));
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
        $form = new Form(new admission());

        $form->text('Course', __('Course'));
        $form->text('Name', __('Name'));
        $form->text('NIC', __('NIC'));
        $form->date('DOB', __('DOB'))->default(date('Y-m-d'));
        $form->text('Phone_number', __('Phone number'));
        $form->email('Email', __('Email'));
        $form->text('Qualification', __('Qualification'));
        $form->text('Location', __('Location'));
        $form->text('Days', __('Days'));

        return $form;
    }
}
