<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\message;

class messageController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'message';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new message());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('email', __('Email'));
        $grid->column('phone_no', __('Phone no'));
        $grid->column('subject', __('Subject'));
        $grid->column('message', __('Message'));
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
        $show = new Show(message::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('email', __('Email'));
        $show->field('phone_no', __('Phone no'));
        $show->field('subject', __('Subject'));
        $show->field('message', __('Message'));
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
        $form = new Form(new message());

        $form->text('name', __('Name'));
        $form->email('email', __('Email'));
        $form->text('phone_no', __('Phone no'));
        $form->text('subject', __('Subject'));
        $form->text('message', __('Message'));

        return $form;
    }
}
