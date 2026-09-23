<?php

namespace Models;

use Models\Abstracts\Model;

class _Language extends Model
{
    /**
     * The attributes that are not updatable.
     *
     * @var array
     */
    protected $notUpdatable = [];

    /**
     * Create a new Language model instance.
     *
     * The framework may instantiate this model without a parent model while
     * booting (e.g. to register observers), so the parent model is optional.
     *
     * @param  \Models\Abstracts\Model|null  $model
     * @param  array  $attributes
     * @return void
     */
    public function __construct(?Model $model = null, array $attributes = [])
    {
        if (! is_null($model)) {
            $this->table = $model->getLanguageTable();

            $this->fillable = $model->getLanguageFillable();

            $this->notUpdatable = $model->getLanguageNotUpdatable();
        }

        parent::__construct($attributes);
    }
}
